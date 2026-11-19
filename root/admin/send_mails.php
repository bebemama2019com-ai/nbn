<?php require __DIR__ . '/../_init.php'; nbn_session(); ?><html>
<head>
<link href='http://fonts.googleapis.com/css?family=PT+Sans+Narrow:400,700&subset=latin,cyrillic' rel='stylesheet' type='text/css'>
<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.7/jquery.min.js"></script>
<script type="text/javascript" src="../jquery.backstretch.min.js"></script>
<link href="styleadmin.css" rel="stylesheet" type="text/css">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
</head>
<body>
<div id="editbox" style="width:550px">
  <?php 
		nbn_require_post_csrf();
		$final_string = nbn_post('upl_text');
		$final_string = (stripslashes(nbn_post('upl_text')));
		$final_string =  preg_replace('/\s\s+/', ' ', trim($final_string));
		$final_string = str_replace("'","&acute;",$final_string);
		$final_string = str_replace("../","http://nbn-bg.com/",$final_string);
		echo "<h1>".e(nbn_post('subject'))."</h1>";
		echo $final_string."<hr> <p><strong>се изпраща на следните пощи:</strong></p>";
		if (nbn_post('test_ch_box')=="test"){$query_Recordset1 = "SELECT emails FROM mails1";}
		else {$query_Recordset1 = "SELECT emails FROM mails";}
		$Recordset1 = nbn_rows($query_Recordset1);
		$message  = '<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
            <html xmlns="http://www.w3.org/1999/xhtml">
            <head>
            <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
            </head>
            <body>';
		$message.=$final_string;
		$message.='</body>
         </html>';
		 $message1= wordwrap($message, 200);
			foreach ($Recordset1 as $result)
					{	
						$nm=$result['emails'];
						echo e($nm) . " ";
						nbn_mail($nm, nbn_post('subject'), $message1, '', 'text/html; charset=utf-8', 'Национална Бизнес Мрежа', (string)nbn_config('newsletter_from'));
						echo date('h:i:s')."<br>";
					}
				?>
  <p class=\"centertext\"><strong><br>
    Всички операции са извършени<br>
    <a href="index.php">Към администрация</a></strong></p>
</div>
<script type="text/javascript">
  $.backstretch("../images/bg_2.jpg", {speed: 1500});
</script>
</body>
</html>