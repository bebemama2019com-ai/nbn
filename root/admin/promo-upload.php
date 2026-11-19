<?php require __DIR__ . '/../_init.php'; nbn_session(); ?><html>
<head>
<meta charset="utf-8">
<title>Добавяне на новини</title>
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="shortcut icon" href="assets/images/logo-175x128.png" type="image/x-icon">
<meta name="description" content="">
<link href="https://fonts.googleapis.com/css?family=Comfortaa:300,400,700|Neucha&amp;subset=cyrillic" rel="stylesheet">
<!-- Latest compiled and minified CSS -->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">

<!-- Optional theme -->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap-theme.min.css" integrity="sha384-rHyoN1iRsVXV4nD0JutlnGaslCJuC7uwjduW9SVrLvRYooPp2bWYgmgJQIXwl/Sp" crossorigin="anonymous">
<link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>
<h2>
  <?php
nbn_require_post_csrf();

/** Validate an uploaded picture, scale it to 800px wide and save it as JPEG in cedar/. */
function promo_image(string $field, int $n): string
{
    $f = $_FILES[$field] ?? null;
    if (!is_array($f) || ($f['error'] ?? UPLOAD_ERR_NO_FILE) !== UPLOAD_ERR_OK || !is_uploaded_file($f['tmp_name'])) {
        echo "Sorry, there was an error uploading your file.<br>";
        return '';
    }
    $info = @getimagesize($f['tmp_name']);
    $source = match ($info[2] ?? null) {
        IMAGETYPE_JPEG => @imagecreatefromjpeg($f['tmp_name']),
        IMAGETYPE_PNG  => @imagecreatefrompng($f['tmp_name']),
        IMAGETYPE_GIF  => @imagecreatefromgif($f['tmp_name']),
        IMAGETYPE_WEBP => @imagecreatefromwebp($f['tmp_name']),
        default        => false,
    };
    if ($source === false) {
        echo "Sorry, only JPG, PNG, GIF or WEBP pictures can be uploaded.<br>";
        return '';
    }
    [$width, $height] = $info;
    $newwidth = 800;
    $newheight = (int)ceil(800 * $height / $width);
    $destination = imagecreatetruecolor($newwidth, $newheight);
    imagefill($destination, 0, 0, imagecolorallocate($destination, 255, 255, 255));
    imagecopyresampled($destination, $source, 0, 0, 0, 0, $newwidth, $newheight, $width, $height);
    $name = md5(uniqid('', true)) . "-$n.jpg";
    imagejpeg($destination, NBN_WEB_ROOT . '/cedar/' . $name, 90);
    return $name;
}

$new_filename1 = promo_image('pic_1', 1);
$new_filename2 = promo_image('pic_2', 2);
$new_filename3 = promo_image('pic_3', 3);

$final_string = (stripslashes(nbn_post('product_text')));
	$final_string =  preg_replace('/\s\s+/', ' ', trim($final_string));
	nbn_query("UPDATE `cedar_table` SET current_offer=0  WHERE current_offer=1");
	// same column order as before: pic_1 <- 1st upload, pic_3 <- 2nd, pic_2 <- 3rd
	nbn_query("INSERT INTO `cedar_table` (`pic_1`, `pic_3`, `pic_2`, `title`, `special_price`, `regular_price`, `text`, `current_offer`) VALUES (?, ?, ?, ?, ?, ?, ?, '1')",
		[$new_filename1, $new_filename2, $new_filename3, nbn_post('title'), nbn_post('special_price'), nbn_post('regular_price'), $final_string]);
?>
</h2>
<div class="container">
  <div class="row">
    <div class="col-xs-10 col-xs-offset-1 main-div">
      <div class="text-center">
        <h2>Добавяне на промоции</h2>
        <h3>Промените са извършени</h3>
        <a href="http://nbn-bg.com/admin/" class="btn btn-success btn-lg" role="button">Към администрацията</a> </div>
    </div>
  </div>
</div>
<!-- Latest compiled and minified JavaScript --> 
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>
</body>
</html>