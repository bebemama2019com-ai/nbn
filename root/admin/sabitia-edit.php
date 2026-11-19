<?php require __DIR__ . '/../_init.php'; nbn_session(); ?><?php

$result = array_map(static fn($v) => is_string($v) ? htmlspecialchars($v, ENT_QUOTES, 'UTF-8') : $v,
    nbn_row("SELECT * FROM `happenings_table` WHERE `id` = ? LIMIT 1", [(int)nbn_post('senw')]));
$id = $result['id'] ?? '';
$zagl = $result['title'] ?? '';
$subtitle = $result['subtitle'] ?? '';
$full_text = $result['full_text'] ?? '';

$Recordset2 = nbn_rows("SELECT * FROM `payment_buttons` WHERE `happenings_id` = ?", [(int)$id]);
?>

<!doctype html>
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
      <form action="sabitia-do-edit.php" method="post" name="form-news"><?php echo nbn_csrf_field(); ?>

        <h2 class="text-center">Редакция на събития</h2>
        <div class="form-group">
          <label for="title">Заглавие:</label>
          <input name="title" type="text" class="form-control" id="title" value="<?php echo $zagl; ?>">
        </div>
        <div class="form-group">
          <label for="subtitle">Кратко описание:</label>
          <textarea name="subtitle" id="subtitle" class="form-control" rows="3"><?php echo $subtitle; ?></textarea>
        </div>
        <div class="form-group">
          <label for="full_text">Пълен текст:</label>
          <textarea name="full_text" id="full_text" class="form-control" rows="6"><?php echo $full_text; ?></textarea>
        </div>
        <h3>Бутони за Плащане</h3>
        <?php
        foreach ($Recordset2 as $result2) {
          $name = $result2['name'];
          $amount = $result2['amount'];
          $description = $result2['description'];
        ?>
          <div class="form-group">
            <label for="amount">Сума:</label>
            <input id="amount" name="amount[]" type="text" class="form-control" value="<?php echo htmlspecialchars((string)((float)$amount/100)); ?>">
          </div>
          <div class="form-group">
            <label for="name">Име и сума:</label>
            <input id="name" name="name[]" type="text" class="form-control" value="<?php echo htmlspecialchars($name); ?>">
          </div>
          <div class="form-group">
            <label for="description">Описание:</label>
            <textarea name="description[]" id="description" class="form-control" rows="3"><?php echo htmlspecialchars($description); ?></textarea>
          </div>
        <?php
        }
        ?>
        <div class="form-group text-center">
          <div class="btn-group">
            <button type="submit" name="submit" class="btn btn-success btn-lg"><i class="fa fa-plus" aria-hidden="true"></i> Публикуване</button>
            <a href="index.php" class="btn btn-danger btn-lg"><i class="fa fa-ban" aria-hidden="true"></i> Отказ</a>
          </div>
        </div>
        <input name="id" id="id" type="hidden" value="<?php echo $id; ?>">
      </form>
    </div>
  </div>
</div>
<!-- Latest compiled and minified JavaScript -->
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>
</body>
</html>

<?php

?>
