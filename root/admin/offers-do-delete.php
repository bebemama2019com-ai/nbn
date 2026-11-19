<?php require __DIR__ . '/../_init.php'; nbn_session(); ?><?php
    nbn_require_post_csrf();
    nbn_query("DELETE FROM `business_offers_table` WHERE id = ?", [(int)nbn_post('senw')]);
    header('Location: http://nbn-bg.com/admin');
    ?>