<?php
require __DIR__ . '/../_init.php';
?>
<!DOCTYPE html>
<html >
<head>
<meta charset="UTF-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1, minimum-scale=1">
<link rel="shortcut icon" href="assets/images/nbn-146x121.png" type="image/x-icon">
<meta name="description" content="">
<title>Нашата социална кауза - Национална Бизнес Мрежа</title>
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
<section class="menu cid-r4591pluJh" once="menu" id="menu2-7">
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
<!--  Нови оферти  -->
      <?php //извличане на настоящата оферта
        $query_Recordset = "SELECT title, text, special_price, regular_price, pic_1, pic_2, pic_3 FROM cedar_table WHERE current_offer=1";
      $row = nbn_row($query_Recordset);
    $title=$row['title'] ?? null;
    $text=$row['text'] ?? null;
    $special_price=$row['special_price'] ?? null;
    $special_price = number_format((float)$special_price,2);
    $regular_price=$row['regular_price'] ?? null;
    $regular_price = number_format((float)$regular_price,2);
    $pic_1=$row['pic_1'] ?? null;
    $pic_2=$row['pic_2'] ?? null;
    $pic_3=$row['pic_3'] ?? null;
    ?>
      <div class="row current_offer">
        <div class="col-12 col-lg-6 my-3">
          <div class="row">
            <div class="col-12 mb-2"> <a href="cedar/<?php echo $pic_1; ?>"><img src="cedar/<?php echo $pic_1; ?>" class="current-offer-main-image img-fluid p-1" /></a> </div>
            <div class="col-12">
            <div class="row">
              <div class="col-6">
              <a href="cedar/<?php echo $pic_3; ?>"><img src="cedar/<?php echo $pic_3; ?>" class="current-offer-main-image img-fluid p-1" /></a>
              </div>
              <div class="col-6">
               <a href="cedar/<?php echo $pic_2; ?>"><img src="cedar/<?php echo $pic_2; ?>" class="current-offer-main-image img-fluid p-1" /></a> </div>
            </div>
            </div>
          </div>
        </div>
        <div class="col-12 col-lg-6 my-3">
          <h3><?php echo $title; ?></h3>
          <?php echo $text; ?>
          <h4 class="special-price">Специална цена за кампанията <span><?php echo $special_price; ?></span> лв.</h4>
          <p class="regular-price">Редовна цена <?php echo $regular_price; ?> лв. </p>
          <p><strong>7% от стойността на този продукт са за каузата на фондация “Сийдър”.</strong></p>
          </td>
        </div>
      </div>
<!--  Нови оферти  -->
<!--  Стари оферти  -->
      <div class="old-offers my-3">
        <?php 
  $query_Recordset = "SELECT title, text, special_price, regular_price, pic_1 FROM cedar_table WHERE current_offer=0  ORDER BY id DESC";
  foreach (nbn_rows($query_Recordset) as $row)
      {     
        $title=$row['title'] ?? null;
      $text=$row['text'] ?? null;
      $special_price=$row['special_price'] ?? null;
      $regular_price=$row['regular_price'] ?? null;
      $pic_1=$row['pic_1'] ?? null;
        echo "<div>";
        echo " <div class=\"old-offer row m-2 py-2\">";
        echo "    <div class=\"col-6\"><a href=\"cedar/".$pic_1."\"><img src=\"cedar/".$pic_1."\" class=\"current-offer-main-image img-fluid p-1\" /></a></div>";
        echo "    <div class=\"col-6\">";
        echo "      <h4>".$title."</h4>";
        echo "              <p class=\"special-price\">Специална цена <span>".$special_price."</span> лв.</p>";
        echo "      <p class=\"regular-price\">Редовна цена ".$regular_price." лв. </p>";
          echo "  </div>";
          echo "</div>";
        echo " </div>";
      }
      ?></div>
<!--  Стари оферти  -->
      </div>
      </div>

</section>
<section class="cid-r458MEyxG0">
  <div class="container">
    <div class="media-container-row">
      <div class="row justify-content-center w-100">
        <div class="col-12 col-lg-10 col-xl-8 mbr-text mbr-fonts-style display-7 py-3 news-div"> 
        <h3><strong>Поръчка</strong></h3>
     <hr>
        <form id="form1" name="form1" method="post"  action="thank-you.php" accept-charset="utf-8" class="form">
          <div class="form-group">
          <label for="item">Артикул:</label>
            <select name="item" class="form-control" id="item">
              <option>Моля изберете</option>
<?php 
  $query_Recordset = "SELECT title FROM cedar_table ORDER BY id DESC";
  foreach (nbn_rows($query_Recordset) as $row)
      {     
        $title=$row['title'] ?? null;
      echo "<option>".$title."</option>";
      }
?> 
            </select>
          </div>
          <div class="form-group">
          <label for="name">Подател:</label>
            <input name="name" type="text"/ id="name" class="form-control">
          </div>
          <div class="form-group">
          <label for="adres">Адрес за доставка:</label>
            <input name="adres" type="text" id="adres" class="form-control"/>
          </div>
          <div class="form-group w-50">
          <label for="tel">Телефон:</label>
            <input name="tel" type="text" id="tel" class="form-control"/>
          </div>
          <div class="form-group w-50">
          <label for="email">Електронна поща:</label>
            <input name="email" type="text" id="email" class="form-control"/>
          </div>
          <div class="form-group form-check">
                        <input type="checkbox" id="agree" title="За да продължите, трябва да се съгласите с условията на кампанията!" name="agree" class="form-check-input" />
<label for="agree" class="form-check-label">Прочетох и съм съгласен с <a class="inline1" href="#inline_content1">условията</a> на кампанията!</label>
          </div>
          <div style="display:none"><!--Colorbox inline content open --> 
            <!--inline open -->
            <div id="inline_content1">
              <?php include 'cedar/eula.inc' ;?>
            </div>
            <!--inline close --> 
          </div>
          <p style="text-align:center">
            <input name="subm" type="submit" value="Изпратете" class="btn btn-primary"/>
          </p>
        </form>
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
  $( ".main_content a" ).has( "img" ).colorbox({ opacity:0.7, maxWidth:"90%", maxHeight:"90%"});
		$(".inline1").colorbox({inline:true, opacity:0.9, maxWidth:"70%", maxHeight:"80%"});

          </script>
</body>
</html>