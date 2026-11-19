<?php require __DIR__ . '/../_init.php'; nbn_session(); ?><?php
	$final_string = (stripslashes(nbn_post('full_text')));
	$final_string =  preg_replace('/\s\s+/', ' ', trim($final_string));
    nbn_require_post_csrf();
    nbn_query("UPDATE `business_offers_table` SET `title` = ?, `subtitle` = ?, `full_text` = ? WHERE `id` = ? LIMIT 1",
        [nbn_post('title'), nbn_post('subtitle'), $final_string, (int)nbn_post('id')]);
    header('Location: http://nbn-bg.com/admin');
	?>