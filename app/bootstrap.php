<?php
/**
 * NBN website – shared bootstrap (PHP 8.4).
 *
 * Every page in root/ starts with:  require __DIR__ . '/_init.php';
 * This file lives OUTSIDE the web root, together with config/.
 */
declare(strict_types=1);

if (defined('NBN_BOOTSTRAPPED')) {
    return;
}
define('NBN_BOOTSTRAPPED', true);
define('NBN_APP_DIR', __DIR__);
define('NBN_BASE_DIR', dirname(__DIR__));
define('NBN_WEB_ROOT', NBN_BASE_DIR . '/root');

/**
 * Configuration. Loaded once from config/config.php (not in Git) or from the
 * file named in the NBN_CONFIG environment variable.
 */
function nbn_config(?string $key = null): mixed
{
    static $config = null;
    if ($config === null) {
        $file = getenv('NBN_CONFIG') ?: ($_SERVER['NBN_CONFIG'] ?? NBN_BASE_DIR . '/config/config.php');
        if (!is_file($file)) {
            http_response_code(500);
            error_log('NBN: configuration file not found: ' . $file);
            exit('Configuration missing.');
        }
        $config = require $file;
    }
    return $key === null ? $config : ($config[$key] ?? null);
}

// ---------------------------------------------------------------------------
// Errors: never shown to visitors, always logged.
// ---------------------------------------------------------------------------
ini_set('display_errors', '0');
ini_set('log_errors', '1');
error_reporting(E_ALL);

// ---------------------------------------------------------------------------
// Database
// ---------------------------------------------------------------------------

/** Shared PDO connection (the old pages all ran "SET NAMES utf8"). */
function nbn_db(): PDO
{
    static $pdo = null;
    if ($pdo === null) {
        $db = nbn_config('db');
        $dsn = sprintf('mysql:host=%s;port=%d;dbname=%s;charset=%s',
            $db['host'], (int)($db['port'] ?? 3306), $db['name'], $db['charset'] ?? 'utf8');
        try {
            $pdo = new PDO($dsn, $db['user'], $db['pass'], [
                PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION,
                PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_BOTH,
                PDO::ATTR_EMULATE_PREPARES => false,
                // The old mysql_* code always got strings back; keep it that way.
                PDO::ATTR_STRINGIFY_FETCHES => true,
            ]);
        } catch (PDOException $e) {
            nbn_fail('Database connection failed', $e);
        }
    }
    return $pdo;
}

/** Run a prepared query and return the statement. */
function nbn_query(string $sql, array $params = []): PDOStatement
{
    try {
        $stmt = nbn_db()->prepare($sql);
        foreach (array_values($params) as $i => $value) {
            $stmt->bindValue($i + 1, $value, is_int($value) ? PDO::PARAM_INT : PDO::PARAM_STR);
        }
        $stmt->execute();
        return $stmt;
    } catch (PDOException $e) {
        nbn_fail('Database query failed', $e);
    }
}

/** All rows of a query (rows keep both numeric and named keys, like mysql_fetch_array). */
function nbn_rows(string $sql, array $params = []): array
{
    return nbn_query($sql, $params)->fetchAll(PDO::FETCH_BOTH);
}

/** First row of a query, or an empty array when nothing matched. */
function nbn_row(string $sql, array $params = []): array
{
    $row = nbn_query($sql, $params)->fetch(PDO::FETCH_BOTH);
    return $row === false ? [] : $row;
}

function nbn_fail(string $message, ?Throwable $e = null): never
{
    error_log('NBN: ' . $message . ($e ? ': ' . $e->getMessage() : ''));
    if (!headers_sent()) {
        http_response_code(500);
    }
    exit('Възникна грешка. Моля, опитайте отново по-късно.');
}

// ---------------------------------------------------------------------------
// Request input (always strings, never undefined-index warnings)
// ---------------------------------------------------------------------------

function nbn_get(string $key): string
{
    $v = $_GET[$key] ?? '';
    return is_string($v) ? $v : '';
}

function nbn_post(string $key): string
{
    $v = $_POST[$key] ?? '';
    return is_string($v) ? $v : '';
}

/** A posted list field (name="x[]") as a list of strings. */
function nbn_post_list(string $key): array
{
    $v = $_POST[$key] ?? [];
    return is_array($v) ? array_values(array_map(static fn($x) => is_string($x) ? $x : '', $v)) : [];
}

/** Page number from ?page= (anything invalid becomes 1). */
function nbn_page(): int
{
    $p = filter_var(nbn_get('page'), FILTER_VALIDATE_INT, ['options' => ['min_range' => 1]]);
    return $p === false ? 1 : $p;
}

/** HTML-escape text that came from the visitor. */
function e(string $s): string
{
    return htmlspecialchars($s, ENT_QUOTES | ENT_SUBSTITUTE, 'UTF-8');
}

// ---------------------------------------------------------------------------
// Mail – header-injection safe wrapper around mail()
// ---------------------------------------------------------------------------

/** Remove line breaks so a value can't inject extra mail headers. */
function nbn_header_value(string $s): string
{
    return trim(str_replace(["\r", "\n", "\0"], ' ', $s));
}

/** A valid e-mail address or '' */
function nbn_email(string $s): string
{
    $s = nbn_header_value($s);
    return filter_var($s, FILTER_VALIDATE_EMAIL) ? $s : '';
}

/**
 * Send a message from the site. The visitor's address only ever goes into
 * Reply-To (after validation); From is always the site's own address so
 * SPF/DMARC pass and the form can't be used as a spam relay.
 */
function nbn_mail(string $to, string $subject, string $body, string $replyTo = '', string $contentType = 'text/plain; charset=utf-8', string $fromName = '', string $fromAddress = ''): bool
{
    $from = nbn_email($fromAddress) ?: nbn_config('mail_from');
    $name = $fromName !== '' ? nbn_header_value($fromName) : 'NBN Website';
    $headers = "MIME-Version: 1.0\r\n";
    $headers .= 'Content-Type: ' . nbn_header_value($contentType) . "\r\n";
    $headers .= 'From: ' . mb_encode_mimeheader($name, 'UTF-8') . ' <' . $from . ">\r\n";
    $reply = nbn_email($replyTo);
    if ($reply !== '') {
        $headers .= 'Reply-To: ' . $reply . "\r\n";
    }
    return mail(nbn_header_value($to), mb_encode_mimeheader(nbn_header_value($subject), 'UTF-8'), $body, $headers);
}

// ---------------------------------------------------------------------------
// Sessions + CSRF (used by the forms and the admin area)
// ---------------------------------------------------------------------------

function nbn_session(): void
{
    if (session_status() === PHP_SESSION_ACTIVE) {
        return;
    }
    session_set_cookie_params([
        'lifetime' => 0,
        'path' => '/',
        'secure' => !empty($_SERVER['HTTPS']) && $_SERVER['HTTPS'] !== 'off',
        'httponly' => true,
        'samesite' => 'Lax',
    ]);
    ini_set('session.use_strict_mode', '1');
    session_start();
}

function nbn_csrf_token(): string
{
    nbn_session();
    if (empty($_SESSION['nbn_csrf'])) {
        $_SESSION['nbn_csrf'] = bin2hex(random_bytes(32));
    }
    return $_SESSION['nbn_csrf'];
}

/** Hidden input for a form. */
function nbn_csrf_field(): string
{
    return '<input type="hidden" name="_csrf" value="' . nbn_csrf_token() . '">';
}

/** Stop the request unless it is a POST carrying a valid CSRF token. */
function nbn_require_post_csrf(): void
{
    nbn_session();
    $sent = nbn_post('_csrf');
    if (($_SERVER['REQUEST_METHOD'] ?? '') !== 'POST' || $sent === '' || !hash_equals($_SESSION['nbn_csrf'] ?? '', $sent)) {
        http_response_code(403);
        exit('Невалидна заявка (CSRF). Върнете се назад, презаредете формата и опитайте отново.');
    }
}

// ---------------------------------------------------------------------------
// URL slugs (SEO addresses of news, events and offers)
// ---------------------------------------------------------------------------

/** Slugs may only contain letters, digits and dashes (old ones are matched as stored). */
function nbn_slug(string $s): string
{
    $s = str_replace(' ', '-', trim($s));
    $s = preg_replace('/[^\p{L}\p{N}\-]+/u', '', $s) ?? '';
    return preg_replace('/-{2,}/', '-', $s) ?? '';
}

/** True when the slug is already used by any news item, event or offer. */
function nbn_slug_taken(string $slug, string $exceptTable = '', int $exceptId = 0): bool
{
    foreach (['news_table', 'happenings_table', 'business_offers_table'] as $table) {
        $row = nbn_row("SELECT id FROM `$table` WHERE seo_text = ? LIMIT 1", [$slug]);
        if ($row && !($table === $exceptTable && (int)$row['id'] === $exceptId)) {
            return true;
        }
    }
    return false;
}

// ---------------------------------------------------------------------------
// Admin helpers
// ---------------------------------------------------------------------------

/** Write an admin-edited content file inside the web root (whitelisted targets only). */
function nbn_write_content_file(string $relative, string $content): bool
{
    $allowed = nbn_config('admin_content_files');
    if (!in_array($relative, $allowed, true)) {
        error_log('NBN: refused content write to ' . $relative);
        return false;
    }
    return file_put_contents(NBN_WEB_ROOT . '/' . $relative, $content, LOCK_EX) !== false;
}

/**
 * Store an uploaded image under root/<dir>/ with a random name.
 * Returns the stored file name or '' when there was no (valid) upload.
 */
function nbn_store_image(string $field, string $dir, string $suffix = ''): string
{
    $f = $_FILES[$field] ?? null;
    if (!is_array($f) || ($f['error'] ?? UPLOAD_ERR_NO_FILE) !== UPLOAD_ERR_OK || !is_uploaded_file($f['tmp_name'])) {
        return '';
    }
    $types = [IMAGETYPE_JPEG => 'jpg', IMAGETYPE_PNG => 'png', IMAGETYPE_GIF => 'gif', IMAGETYPE_WEBP => 'webp'];
    $info = @getimagesize($f['tmp_name']);
    if ($info === false || !isset($types[$info[2]])) {
        return '';
    }
    $name = bin2hex(random_bytes(8)) . $suffix . '.' . $types[$info[2]];
    $target = NBN_WEB_ROOT . '/' . trim($dir, '/') . '/' . $name;
    return move_uploaded_file($f['tmp_name'], $target) ? $name : '';
}
