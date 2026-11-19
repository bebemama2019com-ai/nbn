<?php
/**
 * Short addresses of news, events and offers (e.g. https://nbn-bg.com/NBN-KVL).
 *
 * Replaces the hundreds of per-article RewriteRule lines the old admin appended
 * to .htaccess. .htaccess sends every single-segment address that is not a real
 * file or folder here; we look it up and run the same page the old rule pointed to.
 */
require __DIR__ . '/_init.php';

$slug = nbn_get('slug');
$page = null;

// 1. Addresses that existed in the old .htaccess keep their exact old behaviour.
$legacy = require NBN_APP_DIR . '/legacy_routes.php';
if (isset($legacy[$slug])) {
    $page = $legacy[$slug];
} elseif ($slug !== '') {
    // 2. Anything published after the migration is found in the database.
    $tables = ['news_table' => 'novina.php', 'happenings_table' => 'sabitie.php', 'business_offers_table' => 'business-offer.php'];
    foreach ($tables as $table => $file) {
        if (nbn_row("SELECT id FROM `$table` WHERE seo_text = ? LIMIT 1", [$slug])) {
            $page = $file;
            break;
        }
    }
}

if ($page === null) {
    // Same as before: unknown address -> the site's 404 page.
    header('Location: https://nbn-bg.com/404.php', true, 302);
    exit;
}

$_GET['seo'] = $slug;
unset($_GET['slug']);
require __DIR__ . '/' . $page;
