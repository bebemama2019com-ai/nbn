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
<h1>Премахване на абонат:</h1>
<?php
	if (nbn_post('vis') != "yes") {
		$query_Recordset1 = "SELECT emails FROM mails";
		$Recordset1 = nbn_rows($query_Recordset1);

?>
	<form id="form1" name="form1" method="post" action="<?php echo e($_SERVER['PHP_SELF']); ?>"><?php echo nbn_csrf_field(); ?>

      <p>Изберете ел. поща от 		    списъка за изтриване:<br />
            <select name="firmpk" size="10" id="firm">
              <?php 
				foreach ($Recordset1 as $result)
					{	
						$nm=$result['emails'];
						echo "<option value=\"$nm\">$nm</option>";
					}
				?>
            </select>
      </p>
      <p>
        
        <input type="hidden" name="vis" value="yes"/>
        <input name="txtUsername" type="hidden" id="txtUsername" value="test"/>
        <input name="txtPassword" type="hidden" id="txtPassword" value="test"/>
        <input type="submit" name="submit" id="submit" value="Изтрий" /><br>
      </p>
	</form>
	<p>
      <?php

}
else
		{
		nbn_require_post_csrf();
		nbn_query("DELETE FROM `mails` WHERE `emails` = ? LIMIT 1", [nbn_post('firmpk')]);
		echo "<p>&nbsp;</p><p class=\"centertext\">Пощата е изтрита.<br><a href=\"index.php\">Към администрация</a></p>";

}?>
      
      
  </p>
</div>
<script type="text/javascript">
  $.backstretch("../images/bg_2.jpg", {speed: 1500});
</script>
</body>
</html>