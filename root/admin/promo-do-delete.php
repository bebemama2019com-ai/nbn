<?php require __DIR__ . '/../_init.php'; nbn_session(); ?><?php
    nbn_require_post_csrf();
    nbn_query("DELETE FROM `cedar_table` WHERE id = ?", [(int)nbn_post('sepr')]);
	nbn_query("UPDATE `cedar_table` SET current_offer=1  WHERE current_offer=0 ORDER BY id DESC LIMIT 1");
    header('Location: http://nbn-bg.com/admin');
    ?>