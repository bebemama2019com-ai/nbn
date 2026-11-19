<?php require __DIR__ . '/../_init.php'; nbn_session(); ?><!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Добавяне на оферти</title>
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta name="description" content="">
<link href='http://fonts.googleapis.com/css?family=PT+Sans+Narrow:400,700&subset=latin,cyrillic' rel='stylesheet' type='text/css'>
 <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">


<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap-theme.min.css" integrity="sha384-rHyoN1iRsVXV4nD0JutlnGaslCJuC7uwjduW9SVrLvRYooPp2bWYgmgJQIXwl/Sp" crossorigin="anonymous">
<link rel="stylesheet" type="text/css" href="style.css">
<script src="js/tinymce/tinymce.min.js"></script>

  <script>
  tinymce.init({
  selector: '#full_text',
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
<form action="offer-upload.php" method="post" name="form-news"><?php echo nbn_csrf_field(); ?>

    <h2 class="text-center">Добавяне на оферти</h2>
    <div class="form-group">
        <label for="title">Заглавие:</label>
        <input id="title" name="title" type="text" class="form-control" >
    </div>
    <div class="form-group">
        <label for="seo_text">Адрес на оферта / SEO текст:</label>
        <input id="seo_text" name="seo_text" type="text" class="form-control" >
    </div>
    <div class="row">
    	<div class="col-sm-12"><p><small style="padding: 3px; border-radius: 3px;" class="bg-danger">* Само знаци, цифри на латиница и тире. Без интервали.</small></p></div>
    </div>
<div class="form-group">
        <label for="subtitle">Кратко описание:</label>
        <textarea name="subtitle" id="subtitle" class="form-control" rows="3" ></textarea>
    </div>      
    <div class="form-group">
        <label for="full_text">Пълен текст:</label>
        <textarea name="full_text" id="full_text" class="form-control" rows="6" ></textarea>
    </div>
    <div class="form-group text-center">
    <div class="btn-group">
      <button type="submit" name="submit" class="btn btn-success btn-lg"><i class="fa fa-plus" aria-hidden="true"></i> Публикуване
</button>
    <a href="index.php" class="btn btn-danger btn-lg"><i class="fa fa-ban" aria-hidden="true"></i> Отказ</a>
</div>
    </div>
</form>
</div>
</div>
</div>

<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script> 
</body>
</html>
