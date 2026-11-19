<?php require __DIR__ . '/../_init.php'; nbn_session(); ?><!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Редакция на събития</title>
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta name="description" content="">
<link href='http://fonts.googleapis.com/css?family=PT+Sans+Narrow:400,700&subset=latin,cyrillic' rel='stylesheet' type='text/css'>
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">

<!-- Optional theme -->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap-theme.min.css" integrity="sha384-rHyoN1iRsVXV4nD0JutlnGaslCJuC7uwjduW9SVrLvRYooPp2bWYgmgJQIXwl/Sp" crossorigin="anonymous">
<link rel="stylesheet" type="text/css" href="style.css">
<script src="js/tinymce/tinymce.min.js"></script>

  <script>
  tinymce.init({
  selector: 'textarea',
  height: 300,
  theme: 'modern',
  plugins: [
    'advlist autolink lists link charmap print preview hr anchor ',
    'searchreplace wordcount visualblocks visualchars code ',
    'nonbreaking save table contextmenu ',
    'emoticons paste textcolor colorpicker textpattern codesample help'
  ],
  toolbar1: 'undo redo  | styleselect | bold italic | alignleft aligncenter alignright alignjustify | bullist numlist outdent indent| forecolor backcolor emoticons | help',
 });
  </script>
  <script src="https://use.fontawesome.com/9f9fcd2b9e.js"></script>

</head>

<body>
<div class="container">
<div class="row">
<div class="col-xs-10 col-xs-offset-1 main-div">
<form action="offer-edit.php" method="post" name="form-careers"><?php echo nbn_csrf_field(); ?>

    <h2 class="text-center">Редакция на оферти</h2>
        <div class="form-group">
         <label for="selpr">Моля, изберетe оферта от списъка:</label>
        <select class="form-control" name="senw" id="senw" size=10>
	    <?php
		$query_Recordset = "SELECT id, title FROM `business_offers_table` ORDER BY id DESC";
		$Recordset1 = nbn_rows($query_Recordset);
			foreach ($Recordset1 as $result)
			  { $id=$result['id'];
				$zagl=$result['title'];
				echo "<option value=\"$id\">".$zagl."</option>";
				}
		?>
        </select> 
   </div>
   <div class="form-group text-center">
    <div class="btn-group">
      <button type="submit" name="submit" class="btn btn-success btn-lg"><i class="fa fa-pencil" aria-hidden="true"></i> Избиране
</button>
    <a href="http://nbn-bg.com/admin" class="btn btn-danger btn-lg"><i class="fa fa-ban" aria-hidden="true"></i> Отказ</a>
</div>
</div>
</form>
</div>
</div>
</div>
<!-- Latest compiled and minified JavaScript -->
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>
</body>
</html>
