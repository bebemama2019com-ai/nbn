<?php require __DIR__ . '/../_init.php'; nbn_session(); ?><html>
<head>
<link href='http://fonts.googleapis.com/css?family=PT+Sans+Narrow:400,700&subset=latin,cyrillic' rel='stylesheet' type='text/css'>
<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.7/jquery.min.js"></script>
<script type="text/javascript" src="../jquery.backstretch.min.js"></script>
<link href="styleadmin.css" rel="stylesheet" type="text/css">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
</head>
<body>
<div id="editbox">
	<?php
		nbn_require_post_csrf();
		nbn_query("UPDATE `firmsdata_new` SET `name` = ?, `branch` = ?, `town` = ?, `address` = ?, `tel` = ?, `site` = ?, `mail` = ?, `resume` = ?, `name_en` = ?, `branch_en` = ?, `resume_en` = ? WHERE `pk` = ? LIMIT 1",
			[nbn_post('name'), nbn_post('branch'), nbn_post('town'), nbn_post('address'), nbn_post('tel'), nbn_post('site'), nbn_post('mail'), nbn_post('resume'), nbn_post('name_en'), nbn_post('branch_en'), nbn_post('resume_en'), (int)nbn_post('txtpk')]);
		echo "<p>Информацията за фирмата е променена.<br><a href=\"index.php\">Към администрация</a></p>";
	?>
</div>
<script type="text/javascript">
  $.backstretch("../images/bg_2.jpg", {speed: 1500});
</script>

</body>
</html>