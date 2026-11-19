<?php
require __DIR__ . '/_init.php';
$seo_text = nbn_get('seo');
?>
<!DOCTYPE html>
<html >
<head>
<meta charset="UTF-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1, minimum-scale=1">
<link rel="shortcut icon" href="assets/images/nbn-146x121.png" type="image/x-icon">
<meta name="description" content="">
<title>Новини- Национална Бизнес Мрежа</title>
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
<link rel="stylesheet" type="text/css" href="slick/slick.css"/>
<link rel="stylesheet" type="text/css" href="slick/slick-theme.css"/>
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
 <div class="section-text align-center mbr-white mbr-fonts-style display-5">Събития<br>
        <div class=" mbr-text mbr-fonts-style display-7 pb-2"><!--Сдружението организира съвместно със своите членове и партньори бизнес форуми, работни срещи, презентации и обучения.--> НБМ провежда събития, обучения и инициативи самостоятелно и в партньорство с други организации.
По заявка на фирми организираме обучения по конкретни теми. Съдържанието, програмата и изборът на лектори се съобразяват с поставените цели и потребностите на участниците.</div>
      </div>      <hr class="line" style="width: 100%;">
      </div>
  </div>
</section>
<section class="mbr-section content4 cid-r458MEyxG0 pt-2" id="content4-6" name="content4-6">
  <div class="container">
    <div class="media-container-row">
      <div class="row justify-content-center w-100">
        <div class="col-12 col-lg-10 col-xl-8 mbr-text mbr-fonts-style display-7 py-3 news-div">

          <?php 
	//This is only displayed if they have submitted the form

$rowsPerPage = 50;
$pageNum = nbn_page();
// counting the offset
$offset = ($pageNum - 1) * $rowsPerPage;
$rows = nbn_rows('SELECT * FROM `happenings_table` ORDER BY `id` DESC LIMIT ?, ?', [$offset, $rowsPerPage]);
$num_rows = (int)nbn_row('SELECT COUNT(*) FROM `happenings_table`')[0];
$maxPage = ceil($num_rows/$rowsPerPage);
$self = e($_SERVER['PHP_SELF']);
//$page = $pageNum + 1;
$nav  = '';

for($page = 1; $page <= $maxPage; $page++)
{
   if ($page == $pageNum)
   {
      $nav .= "<button type=\"button\" class=\"share facebook btn btn-current-page \"  disabled> $page </button>"; // no need to create a link to current page <button type="button" class="btn btn-lg btn-primary" disabled> $page </button>
   }
   else
   {
      $nav .= " <a class=\"btn btn-outline-pagination\" href=\"$self?page=$page\" role=\"button\">$page</a> ";
   }
}
if ($pageNum > 1)
{
   $page  = $pageNum - 1;
}

if ($pageNum < $maxPage)
{
   $page = $pageNum + 1;

}

//And we display the results
foreach ($rows as $result)
{	$seo_text=$result['seo_text'];
	$title=$result['title'];
	$subtitle=$result['subtitle'];
	$data=$result['data'];
	$id=$result['id'];
	$full_text=$result['full_text'];
	$full_text = str_replace("\n", "<br>", $full_text);

	$tablestr="<div class=\"firm\">
                <div class=\"row\">
                    <div class=\"col-12 col-md-9 mb-0\"><h5><a href=\"http://nbn-bg.com/$seo_text\"><strong>$title</strong></a></h5></div>
                    <div class=\"col-12 col-md-3 text-md-right mb-2\"><small>$data</small></div>
                </div>
                <div class=\"row\">
                	<div class=\"col-12\"><strong></strong>$subtitle <a href=\"http://nbn-bg.com/$seo_text\"><small>[вижте повече]</small></a></div>
                </div>
              </div>\n";
echo $tablestr;
}

echo "<hr>";
echo "<div class=\"d-flex justify-content-center social-text\" > Страница: ". $nav ."</div>";
?>
            
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
<script type="text/javascript" src="slick/slick.min.js"></script> 
<?php include_once("includes/analyticstracking.php") ?>
<div id="scrollToTop" class="scrollToTop mbr-arrow-up d-none d-lg-block"><a style="text-align: center;"><i></i></a></div>
<input name="animation" type="hidden">
<script>
$(document).ready(function(){
$('.old-offers1').slick({
  autoplay: true,
  autoplaySpeed: 4000,
  infinite:true
  });
});
</script>
</body>
</html>