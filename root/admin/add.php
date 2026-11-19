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
	if (nbn_post('vis') != "yes") {
?>
	<form id="form1" name="form1" method="post" action="<?php echo e($_SERVER['PHP_SELF']); ?>"><?php echo nbn_csrf_field(); ?>

    
		<table width="80%" border="0" align="center" cellpadding="2" cellspacing="0">
		  <tr>
			<td width="200" align="right">Име: </td>
			<td align="left" > <input name="name" type="text" id="name" size="50" /></td>
		  </tr>
		  <tr>
			<td width="200" align="right">Бранш:</td>
			<td align="left" >
            	<select name="branch" id="branch">
					<?php include("../branch.html"); ?>
                </select>
			</td>
		  </tr>
		  <tr>
			<td width="200" align="right">Град:</td>
			<td align="left" >
                 <select name="town" id="town">
					<?php include("../town.html"); ?>
             	</select>
             </td>
		  </tr>
		  <tr>
			<td width="200" align="right">Адрес:</td>
			<td align="left" ><input name="address" type="text" id="address" size="50" /></td>
		  </tr>
		  <tr>
			<td width="200" align="right">Телефон:</td>
			<td align="left" ><input name="tel" type="text" id="tel" size="50" /></td>
		  </tr>
		  <tr>
			<td width="200" align="right">Фирмен сайт:</td>
			<td align="left" ><input name="site" type="text" id="site" size="50" /></td>
		  </tr>
		  <tr>
			<td width="200" align="right">E-mail:</td>
			<td align="left" ><input name="mail" type="text" id="mail" size="50" /></td>
		  </tr>
		  <tr>
			<td width="200" align="right">Описание:</td>
			<td align="left"><textarea name="resume" cols="50" rows="10" id="resume"></textarea></td>
		  </tr>
                    <tr>
			<td width="200" align="right">Name:</td>
			<td align="left" ><input name="name_en" type="text" id="name_en" value='<?php echo $result['name_en']; ?>' size="50" /></td>
		  </tr>
		  <tr>
			<td width="200" align="right">Branch:</td>
			<td align="left" ><?php include("../en/branch.html"); ?></td>
		  </tr>
		  <tr>
			<td width="200" align="right">Description:</td>
			<td align="left">
            <textarea name="resume_en" cols="50" rows="10" id="resume_en"><?php echo $result['resume_en']; ?></textarea></td>
		  </tr>
 
	  </table>           <input type="hidden" name="vis" value="yes"/>
            <input name="txtUsername" type="hidden" id="txtUsername" value="test"/>
            <input name="txtPassword" type="hidden" id="txtPassword" value="test"/>
            <input type="submit" name="submit" id="submit" value="Приложи" /><br />

            <input type="reset" name="Reset" id="button" value="Изчисти" />            
</form>
<?php

}
else
		{
		nbn_require_post_csrf();
		nbn_query("INSERT INTO `firmsdata_new` (`name`, `branch`, `town`, `address`, `tel`, `site`, `mail`, `resume`, `name_en`, `branch_en`, `resume_en`) VALUES (?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?)",
			[nbn_post('name'), nbn_post('branch'), nbn_post('town'), nbn_post('address'), nbn_post('tel'), nbn_post('site'), nbn_post('mail'), nbn_post('resume'), nbn_post('name_en'), nbn_post('branch_en'), nbn_post('resume_en')]);
		echo "<p>Данните са добавени<br><a href=\"index.php\">Към администрация</a></p>";
		}

?>
</div>
<script type="text/javascript">
  $.backstretch("../images/bg_2.jpg", {speed: 1500});

</script>

</body>
</html>