<?php require __DIR__ . '/../_init.php'; nbn_session(); ?><?php
$final_string = (stripslashes(nbn_post('full_text')));
$final_string = preg_replace('/\s\s+/', ' ', trim($final_string));


nbn_require_post_csrf();
$id = (int)nbn_post('id');

// Update happenings_table
nbn_query("UPDATE `happenings_table` SET `title` = ?, `subtitle` = ?, `full_text` = ? WHERE `id` = ? LIMIT 1",
    [nbn_post('title'), nbn_post('subtitle'), $final_string, $id]);

// Update payment_buttons table (same behaviour as before: every row of the event gets the posted values)
$names = nbn_post_list('name');
$descriptions = nbn_post_list('description');
foreach (nbn_post_list('amount') as $i => $amount) {
    nbn_query("UPDATE `payment_buttons` SET `amount` = ?, `name` = ?, `description` = ? WHERE `happenings_id` = ?",
        [(string)round((float)$amount * 100), $names[$i] ?? '', $descriptions[$i] ?? '', $id]);
}


header('Location: http://nbn-bg.com/admin');
?>
