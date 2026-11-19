<?php require __DIR__ . '/../_init.php'; nbn_session(); ?><html>
<head>
<meta charset="utf-8">
<title>Добавяне на оферти</title>
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="shortcut icon" href="assets/images/logo-175x128.png" type="image/x-icon">
<meta name="description" content="">
<link href="https://fonts.googleapis.com/css?family=Comfortaa:300,400,700|Neucha&amp;subset=cyrillic" rel="stylesheet">
<!-- Latest compiled and minified CSS -->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">

<!-- Optional theme -->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap-theme.min.css" integrity="sha384-rHyoN1iRsVXV4nD0JutlnGaslCJuC7uwjduW9SVrLvRYooPp2bWYgmgJQIXwl/Sp" crossorigin="anonymous">
<link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>
<h2>
  <?php

$final_string = (stripslashes(nbn_post('full_text')));
	$final_string =  preg_replace('/\s\s+/', ' ', trim($final_string));
  nbn_require_post_csrf();
  // Address of the article: letters, digits and dashes only, and never one that is already in use
  $seotext = nbn_slug(nbn_post('seo_text'));
  if ($seotext === '') { $seotext = 'item-' . date('Y-m-d-His'); }
  $base = $seotext;
  for ($n = 2; nbn_slug_taken($seotext); $n++) { $seotext = $base . '-' . $n; }

	nbn_query("INSERT INTO `business_offers_table` (`title`, `seo_text`, `subtitle`, `full_text`, `data`) VALUES (?, ?, ?, ?, ?)",
		[nbn_post('title'), $seotext, nbn_post('subtitle'), $final_string, date("j F, Y")]);
	// No .htaccess change needed any more: router.php finds the new address in the database.


?>
</h2>
<div class="container">
  <div class="row">
    <div class="col-xs-10 col-xs-offset-1 main-div">
      <div class="text-center">
        <h2>Добавяне на оферти</h2>
        <h3>Промените са извършени</h3>
        <a href="http://nbn-bg.com/admin/" class="btn btn-success btn-lg" role="button">Към администрацията</a> </div>
    </div>
  </div>
</div>
<!-- Latest compiled and minified JavaScript --> 
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>
</body>
</html>