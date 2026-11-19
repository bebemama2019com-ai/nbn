# nbn-bg.com — PHP 8.4 rebuild

The National Business Network website (nbn-bg.com), moved from PHP 5.6 to **PHP 8.4**.
Pages, addresses and the admin area work the same as before. The public pages produce
the same HTML, byte for byte (see *How it was verified*).

## Folder layout

```
app/                 shared PHP code (outside the web root)
  bootstrap.php      DB (PDO), request helpers, mail, sessions/CSRF, uploads
  legacy_routes.php  the 348 article addresses from the old .htaccess
config/
  config.example.php copy to config/config.php on the server (not in Git)
root/                the web root (= /home/nbnbgcom/www/root on the server)
  _init.php          loads app/bootstrap.php; every page starts with it
  router.php         short addresses of news, events and offers
  admin/             content admin (HTTP Basic Auth, as before)
  en/                English site
tools/
  assemble-from-original.sh  copies images/PDFs/CSS/JS from the old site folder
```

The repository mirrors the server: `app/`, `config/` and `root/` sit side by side in
`/home/nbnbgcom/www/`, so only `root/` is reachable from the web.

## Setting up (cPanel)

1. **Back up** the current `www/root` folder and export the `nbndb` database.
2. Upload the repository to `/home/nbnbgcom/www/` (or `git clone` it there), so that
   `www/app`, `www/config` and `www/root` exist.
3. Copy the static files from the old site into `root/`. Nothing is overwritten:
   `tools/assemble-from-original.sh /path/to/old/root`.
   **Always take the content blocks from the live server**, because the admins edit
   them: `inc-online/*`, `en/inc-online/*`, `en/obiavi.php`, `en/news.inc`, `en/recreation.inc`.
4. `cp config/config.example.php config/config.php` and fill it in: a **new** database
   password, the reCAPTCHA keys, mail addresses.
5. Writable by PHP: `root/inc-online/`, `root/en/inc-online/`, `root/en/` (the 3 files
   above), `root/cedar/` (promo pictures).
6. cPanel → **MultiPHP Manager** → set the domain to **PHP 8.4** (ea-php84).
   Extensions needed: `pdo_mysql`, `mbstring`, `gd` (captcha + promo pictures), `curl`.
   In **MultiPHP INI Editor** set `display_errors = Off`.
7. Open the site and click through: home, a news article, the event list, member search,
   the contact form and the admin.

## What changed

**PHP 8.4**
- `mysql_*` (removed in PHP 7) is replaced by PDO with prepared statements in all 56 files.
- Bareword array keys (`$_POST[title]`), a fatal error in PHP 8, are fixed in 46 files.
- Securimage (the English proposal form captcha) is patched for PHP 8: it looks the same.
- The old `.htaccess` lines pinning the site to `php56` (`FcgidWrapper`) are removed.

**Security**
- No SQL injection: every query that takes input uses bound parameters.
- Database and reCAPTCHA credentials live only in `config/config.php`, outside the web root.
- The live Stripe secret key is removed. The code that used it printed nothing. **Roll the
  key in the Stripe dashboard anyway**, because it was exposed.
- The admin no longer writes to `.htaccess`. New articles are found by `router.php`.
  Old addresses keep working through `app/legacy_routes.php`.
- Every admin form carries a CSRF token, and every action that changes data checks it.
- Admin-edited content blocks are read with `readfile()`, so PHP in them never runs.
  They can't be opened directly in a browser (`Require all denied`).
- Promo pictures must really be images (checked, re-encoded as JPEG, random names).
- Contact/registration forms: no mail header injection. The visitor's address goes into
  `Reply-To`, the site's own address into `From`. Nothing is sent on a plain GET.
- Visitor input that is echoed back (search text, `?id=`, `PHP_SELF`) is HTML-escaped.
- `.htaccess` blocks `.inc`, `.log`, `.sql`, `.ini`, backups and `error_log` files.

**Removed (still in the old folder if ever needed)**
- `old/` (the previous site) and `pfn/` (PHPfileNavigator 2005, a web file manager).
- `img-galleries/` (Chevereto; nothing on the site used it).
- `PHPMailer/`, `stripe-php/`: unused.
- ResponsiveFilemanager (`admin/filemanager/`): its upload folder was empty. TinyMCE's
  own image button (by URL) still works.
- Test/debug files: `p.php` (phpinfo), `proba-path.php`, `files-scan.php` ×3, `index_old.php`.
- Duplicate copies: `*1.php`, `contacts3.php`, `allnews-1.php`, `en/business-proposal1.php`,
  `en/old_business-package.php`, `admin/index1.php`, `admin/add1.php`, `admin/3.php`, …
- Admin editors for files that no longer exist (`admin/news.php`, `banners.php`,
  `proliles.php`, `recreation_bg.php`, `tinymce.php`, `obiavi_en_1.php`).
- Backups and logs: `*.php1`, `*.zzz`, `old/profil.inc` (applicant data), `error_log`.

## Behaviour changes you might notice

- `https://nbn-bg.com/WINES-&-SPIRITS-EXPO` now shows the article. Before, the `&` cut
  the address and the page came out empty.
- New article addresses are cleaned (letters, digits, dashes). A taken address gets
  `-2`, `-3`… instead of silently pointing at an older article.
- Mail subjects are properly encoded (UTF-8), so they display correctly everywhere.
- In the member search, `%`/`_` typed by a visitor still act as wildcards, as before.

## Known issues kept as they were (worth a look)

- The English *"obiavi"* admin editor saves to `en/obiavi.php`, but the English page
  shows `en/inc-online/obiavi.php`.
- `admin/news_en.php` and `admin/recreation_en.php` edit files that no page displays.
- `payment_buttons` are still saved by the event admin, but no page shows a payment button.
- The member search paging links drop the search text (same as before).
- Some form recipients are hard-coded in the old code (`matea.tzilkov@gmail.com`,
  `design@artcommerce.biz`). They are now in `config/config.php`; review them.

## How it was verified

On a test server (Apache + MariaDB 10.11 with your database dumps):

- **641 URLs** were rendered by the old code and by the rebuild, then compared byte for byte.
  This covers every page, all 432 article addresses, pagination, every town/branch in the
  member search, the admin screens and the old-site redirects.
  - All public pages are **identical**. The only differences are the 2 intended ones above
    (`WINES-&` and unknown addresses still ending on 404.php).
  - The English member search sorts at random. With a fixed seed, all 58 variants are identical.
  - The admin screens differ only by the hidden CSRF field and the removed file-manager button.
- **31 admin/form actions** (add, edit and delete news, offers, events with payment buttons,
  promos with pictures, firms, mailing list, content blocks, newsletter, the 4 public forms)
  were run against both versions. The database rows, content files and mail bodies are
  identical.
- **26 security checks** pass (forged CSRF, SQL injection, XSS, PHP in content, upload of a
  PHP file, header injection, captcha, direct access to content files).
- **Zero PHP warnings, notices or deprecations** across all of the above.
- PHP **8.5** compile check (it includes every 8.4 deprecation) passes for all 140 PHP files.
  The page runs used PHP 8.3, because PHP 8.4 packages weren't available on the test machine.
