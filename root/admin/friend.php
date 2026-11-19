<?php require __DIR__ . '/../_init.php'; nbn_session(); ?><html>
<head>
<!-- CDN hosted by Cachefly -->
<link href='http://fonts.googleapis.com/css?family=PT+Sans+Narrow:400,700&subset=latin,cyrillic' rel='stylesheet' type='text/css'>
<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.7/jquery.min.js"></script>
<script type="text/javascript" src="../jquery.backstretch.min.js"></script>
<script src="tinymce/tinymce.min.js"></script>
<script>
        tinymce.init({selector:'textarea',language : 'bg_BG', width : 980, height: 450, plugins: "hr image link code textcolor", toolbar: "undo  redo| cut copy paste | bold italic underline | alignleft aligncenter alignright alignjustify | bullist numlist | outdent indent  |  hr link unlink forecolor | formatselect fontsizeselect "});
</script>
<link href="styleadmin.css" rel="stylesheet" type="text/css">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
</head>
<body>
<div id="editbox">
  <h1>Страница новини:</h1>
  	<form action="upload-friends.php" method="post"><?php echo nbn_csrf_field(); ?>


  <textarea name="upl_text" id="upl_text"><?php readfile(__DIR__ . "/../inc-online/friend.inc"); ?>
           </textarea>
	  <br>
	  <input type="submit" name="Submit" value="Запиши">
      <input type="reset" name="Reset" value="Изчисти">

  </form>
</div>
<script type="text/javascript">
  $.backstretch("../images/bg_2.jpg", {speed: 1500});

</script>
</body>
</html>