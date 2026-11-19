<?php require __DIR__ . '/../_init.php'; nbn_session(); ?><!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Административен панел</title>
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta name="description" content="">
<link href='http://fonts.googleapis.com/css?family=PT+Sans+Narrow:400,700&subset=latin,cyrillic' rel='stylesheet' type='text/css'>
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">

<!-- Optional theme -->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap-theme.min.css" integrity="sha384-rHyoN1iRsVXV4nD0JutlnGaslCJuC7uwjduW9SVrLvRYooPp2bWYgmgJQIXwl/Sp" crossorigin="anonymous">
<link rel="stylesheet" type="text/css" href="style.css">
<script src="https://use.fontawesome.com/9f9fcd2b9e.js"></script>
</head>
<body>
<p>&nbsp;</p>
<p>&nbsp;</p>
<div class="container main-div">
  <h1 class="text-center">Административен панел </h1>
  <div class="row">
    <div class="col-xs-12  col-md-6 col-lg-4">
      <h3>Фирми</h3>
      <p><a href="add.php">Добавяне на фирми</a></p>
      <p><a href="edit.php">Редактиране на фирми</a> </p>
      <p><a href="delete.php">Изтриване на фирми</a> </p>
      <h3>Продукт с кауза</h3>
      <p><a href="promo-add.php">Добавяне</a></p>
      <p><a href="promo-del.php">Изтриване</a></p>
      <h3>Бюлетин</h3>
      <p><a href="mail_rec.php">Добавяне на абонат</a></p>
      <p><a href="mail_del.php">Премахване на абонат</a></p>
      <p><a href="editmail.php">Изпращане на бюлетин</a></p>
    </div>
    <div class="col-xs-12 col-md-6  col-lg-4">
      <h3>Новини</h3>
      <p><a href="news-add.php">Добавяне</a></p>
      <p><a href="news-select-edit.php">Редактиране</a></p>
      <p><a href="news-del.php">Изтриване</a></p>
      <h3>Събития</h3>
      <p><a href="sabitia-add.php">Добавяне</a></p>
      <p><a href="sabitia-select-edit.php">Редактиране</a></p>
      <p><a href="sabitia-del.php">Изтриване</a></p>
      <h3>Бизнес оферти</h3>
      <p><a href="offer-add.php">Добавяне</a></p>
      <p><a href="offer-select-edit.php">Редактиране</a></p>
      <p><a href="offers-del.php">Изтриване</a></p>
    </div>
    <div class="col-xs-12  col-md-12 col-lg-4">
      <h3>Обяви и страници</h3>
      <p><a href="news_en.php">Промяна на английски новини</a></p>
      <p><a href="anons.php">Промяна на страница новини</a></p>
      <p><a href="obiavi.php">Финансиращи програми </a></p>
      <p><a href="obiavi_en.php">Вашите малки обяви - английски</a></p>
      <p><a href="recreation_en.php">За свободното време - английски</a></p>
      <p><a href="happenings.php">Събития НБМ</a></p>
      <p><a href="biznes-oferti.php">Бизнес оферти</a></p>
      <p><a href="friend.php">Сийдър</a></p>

    </div>
  </div>
</div>
<!-- Latest compiled and minified JavaScript --> 
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>
</body>
</html>