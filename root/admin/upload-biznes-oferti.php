<?php require __DIR__ . '/../_init.php'; nbn_session(); ?><?PHP
	header('Content-Type: text/html; charset=windows-1251');
?>
<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN"
"http://www.w3.org/TR/html4/loose.dtd">
<html>
<head>

<title>Finish!</title>

<link href="../style.css" rel="stylesheet" type="text/css">
<meta http-equiv="Content-Type" content="text/html; charset=windows-1251"></head>
<body>
<p class="tabletext">
	<?php
 	$final_string = (stripslashes(nbn_post('upl_text')));
	$final_string =  preg_replace('/\s\s+/', ' ', trim($final_string));
		
		nbn_require_post_csrf();
		if (nbn_write_content_file('inc-online/business-offers.inc', $final_string)) {
 			echo "<p class=\"centertext\">Отваряне на файла с новини.<br></p>";
			echo "<p class=\"centertext\">Затваряне на файла.<br>Всички операции са извършени<br><a href=\"index.php\">Към администрация</a></p>";

		}
		else echo "Възникна проблем!!!!!";
?>
</p>
</body>
</html>
