<?php
require __DIR__ . '/_init.php';
if (($_SERVER['REQUEST_METHOD'] ?? '') === 'POST' && nbn_email(nbn_post('e1')) !== '') {
    $msg = "Обучение Финансово планиране \r\n";
    $msg .= "УЧАСТНИК :  " . nbn_post('n1') . "\r\nТелефон: " . nbn_post('t1') . "\r\nE-mail: " . nbn_post('e1') . "\r\nАдрес: " . nbn_post('p1');
    $msg .= "\r\nЖелая да участвам в следните семинари:\r\n";
    if (isset($_POST['tema1'])) { $msg .= "Тема 1: Въведение във финансово планиране за физически лица.\r\n"; }
    if (isset($_POST['tema2'])) { $msg .= "Тема 2: Пенсионна система в България.\r\n"; }
    if (isset($_POST['tema3'])) { $msg .= "Тема 3: Инвестиции - обща теория, основни термини.\r\n"; }
    if (isset($_POST['tema4'])) { $msg .= "Тема 4: Управление на рискове (застрахователно и осигурително планиране).\r\n"; }
    if (isset($_POST['tema5'])) { $msg .= "Тема 5: Данъчно и наследствено планиране.\r\n"; }
    nbn_mail(nbn_config('mail_to'), "Обучение Финансово планиране", $msg, nbn_post('e1'));
}
?><!DOCTYPE html>
<html >
<head>
<meta charset="UTF-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1, minimum-scale=1">
<link rel="shortcut icon" href="assets/images/nbn-146x121.png" type="image/x-icon">
<meta name="description" content="">
<title>Обучение "Финансово планиране" - Национална Бизнес Мрежа</title>
<link rel="stylesheet" href="assets/web/assets/mobirise-icons/mobirise-icons.css">
<link rel="stylesheet" href="assets/tether/tether.min.css">
<link rel="stylesheet" href="assets/bootstrap/css/bootstrap.min.css">
<link rel="stylesheet" href="assets/bootstrap/css/bootstrap-grid.min.css">
<link rel="stylesheet" href="assets/bootstrap/css/bootstrap-reboot.min.css">
<link rel="stylesheet" href="assets/dropdown/css/style.css">
<link rel="stylesheet" href="assets/socicon/css/styles.css">
<link rel="stylesheet" href="assets/animatecss/animate.min.css">
<link rel="stylesheet" href="assets/theme/css/style.css">
<link rel="stylesheet" href="assets/mobirise/css/mbr-additional.css" type="text/css">
<script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyDKvKyAEHEa3IRlvZQeByGNlTz403hY0ws"></script>
</head>
<body>
  <?php include('includes/language-selector.php');?><section class="menu cid-r4591pluJh" once="menu" id="menu2-7">
  <?php include('includes/menu.php'); ?>
</section>
<section class="carousel slide cid-r453OE9Tt9" data-interval="false" id="slider1-5">
  <?php include('includes/carousel.php'); ?>
</section>
<section class="mbr-section article content10 cid-r45i4N63I5" id="content10-c">
  <div class="container">
    <div class="inner-container" style="width: 100%;">
      <hr class="line" style="width: 100%;">
      <div class="section-text align-center mbr-white mbr-fonts-style display-5">Обучение "Финансово планиране"</div>
      <hr class="line" style="width: 100%;">
    </div>
  </div>
</section>
<section class="mbr-section content4 cid-r458MEyxG0 pt-2" id="content4-6" name="content4-6">
  <div class="container">
    <div class="media-container-row">
      <div class="row justify-content-center">
        <div class="col-12 col-xl-10 mbr-text mbr-fonts-style display-7 py-3">
          <h5 class="text-center"><span class="forum-names"><strong>Финансово планиране - или среща със себе си.<br><br>В бъдещето.</strong></span></h5>
          <p class="text-center">с лектор <strong>Олег Григоров</strong>, дипломиран финансов консултант</p>
          <p class="text-center">Обучението ще се проведе в <a href="http://central-hotel.com/">Централ Хотел София</a>, бул. „Христо Ботев“ 52</p>
          <div class="clearfix mb-3">
          <p>Почти неизвестен е фактът, че разликата между корпоративни и лични финанси е огромна и обикновено специалистите по едното не могат да дават компетентни съвети по другото.</p>
          <p>Олег Григоров притежава дългогодишен опит в сферата на управление на личните финанси. Предоставя професионални съвети на най-голям брой клиенти в България. Ментор и основател на успешен екип от дипломирани финансови консултанти. Изнася лекции с практическа насоченост, с изключително достъпен и креативен метод за предоставяне на знания.</p>
          <hr class="line" style="width: 100%;">
          <h5  class="text-center my-4"><strong>Вашата заявка за регистрация е приета! Благодарим за проявения интерес!</strong></h5>
        </div>
      </div>
    </div>
  </div>
</section>
<section>
  <?php include('includes/bottom-menu.php'); ?>
</section>
<section class="cid-r45ekP4tU0 mbr-parallax-background pt-sm-3 pt-md-5" id="footer2-a">
  <?php include('includes/footer.php'); ?>
</section>
<script src="assets/web/assets/jquery/jquery.min.js"></script> 
<script src="assets/popper/popper.min.js"></script> 
<script src="assets/tether/tether.min.js"></script> 
<script src="assets/bootstrap/js/bootstrap.min.js"></script> 
<script src="assets/smoothscroll/smooth-scroll.js"></script> 
<script src="assets/dropdown/js/script.min.js"></script> 
<script src="assets/touchswipe/jquery.touch-swipe.min.js"></script> 
<script src="assets/viewportchecker/jquery.viewportchecker.js"></script> 
<script src="assets/ytplayer/jquery.mb.ytplayer.min.js"></script> 
<script src="assets/vimeoplayer/jquery.mb.vimeo_player.js"></script> 
<script src="assets/parallax/jarallax.min.js"></script> 
<script src="assets/bootstrapcarouselswipe/bootstrap-carousel-swipe.js"></script> 
<script type="text/javascript" src="jquery.bxslider.min.js"></script>
<link href="jquery.bxslider.css" rel="stylesheet" type="text/css" />
<script src="assets/theme/js/script.js"></script> 
<script src="assets/slidervideo/script.js"></script> 
<script src="https://cdn.jsdelivr.net/jquery.validation/1.16.0/jquery.validate.min.js"></script> 
<script src="https://cdn.jsdelivr.net/jquery.validation/1.16.0/additional-methods.min.js"></script>
<?php include_once("includes/analyticstracking.php") ?>
<div id="scrollToTop" class="scrollToTop mbr-arrow-up d-none d-lg-block"><a style="text-align: center;"><i></i></a></div>
<input name="animation" type="hidden">
<script>
  
jQuery.validator.setDefaults({
  success: "valid"
});
$( "#register-form" ).validate({
  rules: {
    agree: {
      required: true
    }
  }
});

          </script>
</body>
</html>