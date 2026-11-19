<?php require __DIR__ . '/../_init.php'; nbn_session(); ?><html>
<head>
<link href='http://fonts.googleapis.com/css?family=PT+Sans+Narrow:400,700&subset=latin,cyrillic' rel='stylesheet' type='text/css'>
<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.7/jquery.min.js"></script>
<script type="text/javascript" src="../jquery.backstretch.min.js"></script>
<link href="styleadmin.css" rel="stylesheet" type="text/css">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
</head>
<body>
<p>&nbsp;</p>

<div id="editbox" style="width:550px">

<?php


	if (nbn_post('vis') != "yes") {
		$query_Recordset1 = "SELECT pk, name FROM firmsdata_new ORDER BY `name`, `branch`";
		$Recordset1 = nbn_rows($query_Recordset1);

?>
	<form id="form1" name="form1" method="post" action="<?php echo e($_SERVER['PHP_SELF']); ?>"><?php echo nbn_csrf_field(); ?>

    
		<p>Изберете фирма от  списъка за редактиране:</p>
          <select name="firmpk" size="10" id="firm">
            <?php 
				foreach ($Recordset1 as $result)
					{	$p=$result['pk'];
						$nm=$result['name'];
						echo "<option value=\"$p\">$nm</option>";
					}
				?>
          </select>

	            <input type="hidden" name="vis" value="yes"/>
      <input name="txtUsername" type="hidden" id="txtUsername" value="test"/>
            <input name="txtPassword" type="hidden" id="txtPassword" value="test"/>
            <input type="submit" name="submit" id="submit" value="Приложи" /> 
      <input type="reset" name="Reset" id="button" value="Изчисти" />
		           
  </form>
    <p>
      <?php

}
else
		{
		$result = array_map(static fn($v) => is_string($v) ? htmlspecialchars($v, ENT_QUOTES, 'UTF-8') : $v,
			nbn_row("SELECT * FROM `firmsdata_new` WHERE `pk` = ? LIMIT 1", [(int)nbn_post('firmpk')]));?>
	<form id="form2" name="form2" method="post" action="doupdate.php"><?php echo nbn_csrf_field(); ?>

    
		<table width="500" border="0" align="center" cellpadding="2" cellspacing="0">
		  <tr>
			<td align="right" >Име:</td>
			<td align="left"><input name="name" type="text" id="name" value='<?php echo $result['name']; ?>' size="50" /></td>
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
			<td align="right">Адрес:</td>
			<td align="left"><input name="address" type="text" id="address" value='<?php echo $result['address']; ?>' size="50" /></td>
		  </tr>
		  <tr>
			<td align="right">Телефон:</td>
			<td align="left"><input name="tel" type="text" id="tel" value='<?php echo $result['tel']; ?>' size="50" /></td>
		  </tr>
		  <tr>
			<td align="right">Фирмен сайт:</td>
			<td align="left"><input name="site" type="text" id="site" value='<?php echo $result['site']; ?>' size="50" /></td>
		  </tr>
		  <tr>
			<td align="right">E-mail:</td>
			<td align="left"><input name="mail" type="text" id="mail" value='<?php echo $result['mail']; ?>' size="50" /></td>
		  </tr>
		  <tr>
			<td width="150" align="right">Описание:</td>
			<td align="left">
            <textarea name="resume" cols="50" rows="10" id="resume"><?php echo $result['resume']; ?></textarea></td>
		  </tr>
          <tr>
			<td align="right" >Name:</td>
			<td align="left"><input name="name_en" type="text" id="name_en" value='<?php echo $result['name_en']; ?>' size="50" /></td>
		  </tr>
		  <tr>
			<td align="right">Branch:</td>
			<td align="left"><?php include("../en/branch.html"); ?></td>
		  </tr>
		  <tr>
			<td width="150" align="right">Description:</td>
			<td align="left">
            <textarea name="resume_en" cols="50" rows="10" id="resume_en"><?php echo $result['resume_en']; ?></textarea></td>
		  </tr>
	  </table>
            <input type="hidden" name="vis" value="yes"/>
            <input name="txtpk" type="hidden" id="txtpk" value="<?php echo $result['pk']; ?>"/>
            <input type="submit" name="submit" id="submit" value="Приложи" /><br>
            <input type="reset" name="Reset" id="button" value="Изчисти" />
</form>
		<?php
		}?>
</div><script>
$("#town").val("<?php echo $result['town'];?>");
$("#branch").val("<?php echo $result['branch'];?>");
$("#branch_en").val("<?php echo $result['branch_en'];?>");
</script>
<script type="text/javascript">
  $.backstretch("../images/bg_2.jpg", {speed: 1500});
</script>
</body>
</html>