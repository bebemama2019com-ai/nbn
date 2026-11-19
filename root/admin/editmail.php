<?php require __DIR__ . '/../_init.php'; nbn_session(); ?><html>
<head>
<link href='http://fonts.googleapis.com/css?family=PT+Sans+Narrow:400,700&subset=latin,cyrillic' rel='stylesheet' type='text/css'>
<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.7/jquery.min.js"></script>
<script type="text/javascript" src="../jquery.backstretch.min.js"></script>
<script src="tinymce/tinymce.min.js"></script>
<script>
        tinymce.init({selector:'textarea', width : 980, height: 450, plugins: "hr image link code textcolor", toolbar: "undo  redo| cut copy paste | bold italic underline | alignleft aligncenter alignright alignjustify | bullist numlist | outdent indent  |  hr link unlink forecolor | formatselect fontsizeselect "});
</script>
<link href="styleadmin.css" rel="stylesheet" type="text/css">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
</head>
<body>
<div id="editbox">
  <h1>Изпращане на пощенски бюлетин:</h1>
  	<form action="send_mails.php" method="post"><?php echo nbn_csrf_field(); ?>

      <p>Заглавие на бюлетина:
  <input name="subject" type="text" style="width:400px">
      </p>
      <p>Съдържание:<br>
        
        <textarea name="upl_text" id="upl_text">
           </textarea>
      </p>
      <p><input name="test_ch_box" type="checkbox" value="test" style="width:50px"> Тестово изпращане до нашите мейли.<br>
<br>
        <input type="submit" name="Submit" value="Изпрати">
        <input type="reset" name="Reset" value="Изчисти">
      </p>

           </form>
</div>
<script type="text/javascript">
  $.backstretch("../images/bg_2.jpg", {speed: 1500});

</script>
</body>
</html>