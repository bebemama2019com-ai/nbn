<?php
// Copy to config/config.php on the server and fill in the real values.
// config/config.php is ignored by Git – never commit real passwords.
return [
    'db' => [
        'host'    => 'localhost',
        'port'    => 3306,
        'name'    => 'nbndb',
        'user'    => 'CHANGE_ME',
        'pass'    => 'CHANGE_ME',
        'charset' => 'utf8',
    ],

    // Sender address for every e-mail the site sends (must be a mailbox on nbn-bg.com).
    'mail_from' => 'no-reply@nbn-bg.com',
    // Sender of the newsletter sent from the admin.
    'newsletter_from' => 'office@nbn-bg.com',
    // Where the website forms are delivered.
    'mail_to'   => 'office@nbn-bg.com',
    // Extra recipients kept from the old code – edit as needed.
    'cause_order_recipients'  => ['office@nbn-bg.com', 'matea.tzilkov@gmail.com'],
    'proposal_recipients'     => ['office@nbn-bg.com', 'design@artcommerce.biz'],
    'event_signup_recipients' => ['matea.tzilkov@gmail.com', 'office@nbn-bg.com'],

    // Stripe (no page uses it at the moment; kept here so the key is in one safe place)
    'stripe_secret_key' => 'CHANGE_ME',

    // Google reCAPTCHA v2 (contact forms)
    'recaptcha_site_key'   => 'CHANGE_ME',
    'recaptcha_secret_key' => 'CHANGE_ME',

    // Files the admin editors may overwrite (paths relative to root/)
    'admin_content_files' => [
        'inc-online/anons.php',
        'inc-online/obiavi.php',
        'inc-online/business-offers.inc',
        'inc-online/friend.inc',
        'inc-online/happenings.inc',
        'en/obiavi.php', // the EN 'obiavi' editor saves here (the EN page shows en/inc-online/obiavi.php)
        'en/news.inc',
        'en/recreation.inc',
    ],
];
