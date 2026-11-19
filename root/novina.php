<?php
require __DIR__ . '/_init.php';
$seo_text = nbn_get('seo');
$result = nbn_row('SELECT * FROM `news_table` WHERE `seo_text` = ? ORDER BY `id` DESC LIMIT 1', [$seo_text]);
$currentpage = e("http://nbn-bg.com/" . $seo_text);

$seo_text = (string)($result['seo_text'] ?? '');
$title = (string)($result['title'] ?? '');
$subtitle = (string)($result['subtitle'] ?? '');
$data = (string)($result['data'] ?? '');
$id = (string)($result['id'] ?? '');
$full_text = (string)($result['full_text'] ?? '');
$full_text = str_replace("\n", "<br>", $full_text);
?>
<!DOCTYPE html>
<html >
<head>
<meta charset="UTF-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1, minimum-scale=1">
<link rel="shortcut icon" href="assets/images/nbn-146x121.png" type="image/x-icon">
<meta name="description" content="">
<title><?php echo $title; ?></title>
<meta property="og:url" content="<?php echo $currentpage; ?>" />
<meta property="og:type" content="article" />
<meta property="og:title" content="<?php echo $title; ?>" />
<meta property="og:description" content="<?php echo $subtitle; ?>" />
<meta property="og:image" content="http://nbn-bg.com/images/social/nbn_en.jpg" />
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
<!--<link href="firms_style.css" rel="stylesheet" type="text/css" />
 --><script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyDKvKyAEHEa3IRlvZQeByGNlTz403hY0ws"></script>
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
      <div class="section-text align-center mbr-white mbr-fonts-style display-5"><?php echo $title; ?><br>
        <div class=" mbr-text mbr-fonts-style display-7 pb-2"><?php echo $data; ?></div>
      </div>
      <hr class="line" style="width: 100%;">
    </div>
  </div>
</section>
<section class="mbr-section content4 cid-r458MEyxG0 pt-2" id="content4-6" name="content4-6">
  <div class="container">
      <div class="row justify-content-center w-100">
        <div class="col-12 col-lg-10 col-xl-8 mbr-text mbr-fonts-style display-7 py-3 news-div">
          <?php echo "$full_text\n";
          ?>
         <div class="d-flex justify-content-lg-start justify-content-md-center pt-3">
          <a href="<?php echo $currentpage;?>" class="share facebook btn btn-outline-facebook btn-social-share"><span class="mbr-iconfont socicon-facebook socicon"></span> Facebook</a>
          <a href="<?php echo $currentpage;?>" class="share linkedin btn btn-outline-in btn-social-share"><span class="mbr-iconfont socicon-linkedin socicon"></span> LinkedIn</a>
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
<script src="jquery.shares.js"></script>
<script>
$(document).ready(function(){
  $('a.share').shares();
});
</script>
</body>
</html>