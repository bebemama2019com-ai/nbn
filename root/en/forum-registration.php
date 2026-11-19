<?php
require __DIR__ . '/../_init.php';
if (($_SERVER['REQUEST_METHOD'] ?? '') === 'POST' && nbn_email(nbn_post('e1')) !== '') {
    $msg = "Заявка за участие Дигитални предизвикателства пред съвременните компании\r\n";
    $msg .= "УЧАСТНИК 1:  " . nbn_post('n1') . "\r\nТелефон: " . nbn_post('t1') . "\r\nE-mail: " . nbn_post('e1') . "\r\nПозиция: " . nbn_post('p1');
    foreach ([2, 3, 4] as $i) {
        if (nbn_post("n$i") != "") {
            $msg .= "\r\n \r\nУЧАСТНИК $i: " . nbn_post("n$i") . "\r\nТелефон: " . nbn_post("t$i") . "\r\nE-mail: " . nbn_post("e$i") . "\r\nПозиция: " . nbn_post("p$i");
        }
    }
    $msg .= "\r\n \r\n \r\n ДАННИ ЗА ФИРМАТА\r\nИме: " . nbn_post('fn1') . "\r\nАдрес: " . nbn_post('fa1');
    $msg .= "\r\n ДАННИ ЗА ФАКТУРА\r\nИме: " . nbn_post('fn2') . "\r\nАдрес: " . nbn_post('fa2') . "\r\nЕИН/ЕИК: " . nbn_post('fe2') . "\r\nМОЛ: " . nbn_post('fm2');
    foreach (nbn_config('event_signup_recipients') as $to) {
        nbn_mail($to, "Заявление за участие Дигитални предизвикателства пред съвременните компании", $msg, nbn_post('e1'));
    }
}
?><!DOCTYPE html>
<html >
<head>
<meta charset="UTF-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1, minimum-scale=1">
<link rel="shortcut icon" href="assets/images/nbn-146x121.png" type="image/x-icon">
<meta name="description" content="">
<title>Дигитални предизвикателства пред съвременните компании - Национална Бизнес Мрежа</title>
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
<section class="menu cid-r4591pluJh" once="menu" id="menu2-7">
  <?php include('includes/menu-f.php'); ?>
</section>
<section class="carousel slide cid-r453OE9Tt9" data-interval="false" id="slider1-5">
  <?php include('includes/carousel.php'); ?>
</section>
<section class="mbr-section article content10 cid-r45i4N63I5" id="content10-c">
  <div class="container">
    <div class="inner-container" style="width: 100%;">
      <hr class="line" style="width: 100%;">
      <div class="section-text align-center mbr-white mbr-fonts-style display-5"> „Дигитални предизвикателства пред съвременните компании“ </div>
      <hr class="line" style="width: 100%;">
    </div>
  </div>
</section>
<section class="mbr-section content4 cid-r458MEyxG0 pt-2" id="content4-6" name="content4-6">
  <div class="container">
    <div class="media-container-row">
      <div class="row justify-content-center">
        <div class="col-12 col-xl-10 mbr-text mbr-fonts-style display-7 py-3">
          <p class="text-center">Българската търговско-промишлена палата и Национална бизнес мрежа имат удоволствието да Ви поканят на</p>
          <p class="text-center">Дискусионен форум под надслов</p>
          <h5 class="text-center"><strong>„Дигитални предизвикателства пред съвременните компании“</strong></h5>
          <p class="text-center">Събитието ще се проведе в “Гранд хотел София“ на 30 ноември 2018 г. (петък).</p>
          <p>Дигиталният свят на бизнеса се превръща в ежедневие - присъствието в мрежата, телефона, таблета е реално присъствие, което носи ползи, контакти и печалба. Иновациите се оказват за момента най-добрата инвестиция в по-доброто бъдеще на обществото, бизнеса и околната среда. От своя страна, лидерските умения, умното ръководене, комбинацията от отговорност, оптимизъм и мултипликация са ключови за справяне с предизвикателствата пред съвременните компании.
            С цел представяне на най-новите тенденции в дигитална България, насърчаване и задълбочаване на иновативния дух и привличане на лидерството на страната на бизнеса организираме предстоящия форум, в който ще се включат редица утвърдени имена от българския бизнес и обществен живот, както и специалисти в областите: онлайн присъствие на МСП, дигитален маркетинг, иновациите като инвестиция, финанси, лидерство и комуникации.</p>
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