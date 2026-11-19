<?php
require __DIR__ . '/_init.php';
if (($_SERVER['REQUEST_METHOD'] ?? '') === 'POST' && nbn_email(nbn_post('email')) !== '') {
    $msg = "Подател: " . nbn_post('name') . "\r\nАдрес: " . nbn_post('adres') . "\r\nТелефон: " . nbn_post('tel') . "\r\nПродукт:" . nbn_post('item');
    foreach (nbn_config('cause_order_recipients') as $to) {
        nbn_mail($to, "ЗАСТАНИ ДО ПРИЯТЕЛ С НБМ И СИЙДЪР. ВЗЕМИ ПРОДУКТ С КАУЗА", $msg, nbn_post('email'));
    }
}
?>
<!DOCTYPE html>
<html >
<head>
<meta charset="UTF-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1, minimum-scale=1">
<link rel="shortcut icon" href="assets/images/nbn-146x121.png" type="image/x-icon">
<meta name="description" content="">
<title>Благодаря - Национална Бизнес Мрежа</title>
<meta property="og:image" content="https://nbn-bg.com/assets/images/new_favicon.jpg"/>
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
<link rel="stylesheet" type="text/css" href="slick/slick.css"/>
<link rel="stylesheet" type="text/css" href="slick/slick-theme.css"/>
<link href="cedar.css" rel="stylesheet" type="text/css" />
<link rel="stylesheet" href="colorbox.css">
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
      <div class="section-text align-center mbr-white mbr-fonts-style display-5">Нашата социална кауза<br>
        <div class=" mbr-text mbr-fonts-style display-7 pb-2">Ние вярваме, че хората в неравностойно положение са наша обща отговорност. Затова стартираме постоянна кампания, която да допринесе за 24-часовата индивидуална грижа и специализирана подкрепа на 100 деца и младежи в социалните центрове на фондация “Сийдър” в Кюстендил и Казанлък.<br>
          Включи се като закупиш нашия продукт с кауза, а ние обещаваме да споделяме с теб новини за децата и младежите. Ако искаш да научиш повече за “Сийдър”, кликни <a href="http://www.cedarfoundation.org/" target="_blank">тук</a>."</div>
      </div>
      <hr class="line" style="width: 100%;">
    </div>
  </div>
</section>
<section class="mbr-section content4 cid-r458MEyxG0 pt-2" id="content4-6" name="content4-6">
  <div class="container">
  <div class="media-container-row">
    <div class="col-12 col-xl-10 main_content">
      <p>&nbsp;</p>
      <p style="text-align:center;"><a href="cedar/pic1.JPG"><img src="cedar/pic1s.jpg" width="210" height="157" class="current-offer-main-image p-1 m-1" /></a><a href="cedar/pic2.JPG"><img src="cedar/pic2s.jpg" width="210" height="158" class="current-offer-main-image p-1 m-1" /></a><a href="cedar/pic3.JPG"><img src="cedar/pic3s.jpg" width="210" height="158" class="current-offer-main-image p-1 m-1" /></a><a href="cedar/pic4.JPG"><img src="cedar/pic4s.jpg" width="211" height="158" class="current-offer-main-image p-1 m-1" /></a></p>
    <hr>
		<h2 class="mt-5">Благодарим Ви за поръчката!</h2><h2 class="mb-5">Ще се свържем с Вас, за да уточним детайлите.</h2>      
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
<?php include_once("includes/analyticstracking.php") ?>
<div id="scrollToTop" class="scrollToTop mbr-arrow-up d-none d-lg-block"><a style="text-align: center;"><i></i></a></div>
<input name="animation" type="hidden">
<script type="text/javascript" src="slick/slick.min.js"></script> 
<script src="https://cdn.jsdelivr.net/jquery.validation/1.16.0/jquery.validate.min.js"></script> 
<script src="https://cdn.jsdelivr.net/jquery.validation/1.16.0/additional-methods.min.js"></script> 
<script src="jquery.colorbox-min.js"></script><script>
$(document).ready(function(){
  $('.old-offers').slick({
  autoplay: true,
  autoplaySpeed: 4000,
  slidesToShow: 2,
  slidesToScroll: 1,
  infinite:true,
  responsive: [
    {
      breakpoint: 800,
      settings: {
        slidesToShow: 1,
        slidesToScroll: 1,
        infinite: true,
        dots: false
      }
    },
  ]  });
});
jQuery.validator.setDefaults({
  success: "valid"
});
$( "#form1" ).validate({
  rules: {
    agree: {
      required: true
    }
  }
});
  $( ".main_content a" ).has( "img" ).colorbox({ opacity:0.7, maxHeight:"90%"});
		$(".inline1").colorbox({inline:true, opacity:0.9, maxWidth:"70%", maxHeight:"80%"});

          </script>
</body>
</html>