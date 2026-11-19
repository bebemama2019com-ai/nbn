<?php require __DIR__ . '/../_init.php'; nbn_session(); ?><!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Добавяне на промо оферти</title>
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
<form action="promo-upload.php" method="post" enctype="multipart/form-data" name="form-promo"><?php echo nbn_csrf_field(); ?>

    <h2 class="text-center">Добавяне на промо оферти</h2>
    <div class="form-group">
        <label for="title">Заглавие на продукта:</label>
        <input id="title" name="title" type="text" class="form-control">
    </div>
    <div class="form-group row">
    	<div class="col-sm-4">
        <label for="pic_1">Изображение 1:</label>
        <input type="file" name="pic_1" id="pic_1">
        </div>
    	<div class="col-sm-4">
        <label for="pic_2">Изображение 2:</label>
        <input type="file" name="pic_2" id="pic_2">
        </div>
    	<div class="col-sm-4">
        <label for="pic_3">Изображение 3:</label>
        <input type="file" name="pic_3" id="pic_3">
        </div>
    </div>
    <div class="row">
    	<div class="col-sm-12"><p style="margin-top: 5px;"><small style="padding: 3px; border-radius: 3px;" class="bg-danger">* изображенията трябва да бъдат с пропорции приблизително 4х3, допустими файлове jpg или png.</small></p></div>
    </div>
     <div class="form-group row">
  <div class="col-sm-3"><label for="special_price">Специална цена:</label>
    <input class="form-control" id="special_price" name="special_price" type="text">
  </div>
  <div class="col-sm-3"><label for="regular_price">Редовна цена:</label>
    <input class="form-control" id="regular_price" name="regular_price" type="text">
  </div>
</div> 
        <div class="form-group">
        <label for="product_text">Описание на продукта:</label>
        <textarea name="product_text" id="product_text" class="form-control" rows="6"></textarea>
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
<!-- Latest compiled and minified JavaScript -->
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>
</body>
</html>
