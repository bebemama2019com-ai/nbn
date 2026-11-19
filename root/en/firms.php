<?php
require __DIR__ . '/../_init.php';
$branch = nbn_get('branch');
$town = nbn_get('town');
$krit = nbn_get('krit');
$searching = nbn_get('searching');
		header('Content-Type: text/html; charset=utf-8');
		
?>
<!DOCTYPE html>
<html >
<head>
<meta charset="UTF-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1, minimum-scale=1">
<link rel="shortcut icon" href="assets/images/nbn-146x121.png" type="image/x-icon">
<meta name="description" content="">
<title>Our members - National Business Network</title>
<meta property="og:image" content="http://nbn-bg.com/images/logo-nbn.png" />
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
      <div class="section-text align-center mbr-white mbr-fonts-style display-5">Our members<br>
        <div class=" mbr-text mbr-fonts-style display-7 pb-2">NBN members are companies throughout the country working in various fields. </div>
      </div>
      <hr class="line" style="width: 100%;">
    </div>
  </div>
</section>
<section class="mbr-section content4 cid-r458MEyxG0 pt-2" id="content4-6" name="content4-6">
  <div class="container">
    <div class="media-container-row">
      <div class="row justify-content-center w-100">
        <div class="col-12 col-lg-10 col-xl-8 mbr-text mbr-fonts-style display-7 py-3 news-div">
          <h4><strong>SEARCH</strong></h4>
              <form name="form1" method="get" action="<?= '' ?>" class="form">
                <div class="form-group w-100">
                  <label for="krit">Search by name and description: </label>
                  <input name="krit" class="form-control form-control-sm" type="text" id="krit" value="<?php  echo e($krit); ?>">
                </div>
                
                <div class="form-group w-50">
                  <label for="branch">Branch: </label>
                  <select name="branch" id="branch" class="form-control form-control-sm">
                    <?php include("branch.html"); ?>
                  </select>
                </div>
                <input type="hidden" name="searching" value="yes"/>
                <input type="submit" name="button" id="button" value="Търси" class="btn btn-primary">
              </form>
              <hr>
          <?php 
	//This is only displayed if they have submitted the form
if ($searching =="yes")
{
//If they did not enter a search term we give them an error
if ($krit == "")
{
echo "<p style=\"text-align:center\">Please, enter search query.</p>";
} else { echo "<p style=\"text-align:center\">Search query &quot;<strong>" .e($krit). "</strong>&quot;</p>" ; }
}
# FileName="Connection_php_mysql.htm"
# Type="MYSQL"
# HTTP="true"

$rowsPerPage = 10;
$pageNum = nbn_page();
// counting the offset
$offset = ($pageNum - 1) * $rowsPerPage;
// LIKE '%value%' exactly as before, but bound as a parameter
$like = static fn(string $v): string => '%' . $v . '%';
if ($searching == "yes" && $krit != "") {
	$where = "(((name_en LIKE ? ) OR (resume_en LIKE ? )) AND (branch_en LIKE ?))";
	$params = [$like($krit), $like($krit), $like($branch)];
} else {
	$where = "(branch_en LIKE ?)";
	$params = [$like($branch)];
}
$all = nbn_rows("SELECT * FROM firmsdata_new WHERE $where ORDER BY RAND()", $params);
$num_rows = count($all);
$Recordset2 = array_slice($all, $offset, $rowsPerPage);
$maxPage = ceil($num_rows/$rowsPerPage);
$self = e($_SERVER['PHP_SELF']);
$branch_html = e($branch);
$town_html = e($town);
//$page = $pageNum + 1;
echo "<p class=\"bottomtext\">";
$nav  = '';

for($page = 1; $page <= $maxPage; $page++)
{
   if ($page == $pageNum)
   {
      $nav .= " $page "; // no need to create a link to current page
   }
   else
   {
      $nav .= " <a href=\"$self?page=$page&branch=$branch_html&town=$town_html\">$page</a> ";
   }
}
if ($pageNum > 1)
{
   $page  = $pageNum - 1;
   $prev  = " <a href=\"$self?page=$page&branch=$branch_html&town=$town_html\">[Предишна]</a> ";

   $first = " <a href=\"$self?page=1&branch=$branch_html&town=$town_html\">[Първа]</a> ";
}
else
{
   $prev  = '&nbsp;'; // we're on page one, don't print previous link
   $first = '&nbsp;'; // nor the first page link
}

if ($pageNum < $maxPage)
{
   $page = $pageNum + 1;
   $next = " <a href=\"$self?page=$page&branch=$branch_html&town=$town_html\">[Следваща]</a> ";

   $last = " <a href=\"$self?page=$maxPage&branch=$branch_html&town=$town_html\">[Последна]</a> ";
}
else
{
   $next = '&nbsp;'; // we're on the last page, don't print next link
   $last = '&nbsp;'; // nor the last page link
}


//if ($pageNum > 1) echo "<a href=\"$self?page=$prw&branch=$branch\">Предишна</a>&nbsp; &nbsp; &nbsp; &nbsp; ";
//if ($pageNum < $maxPage) echo "<a href=\"$self?page=$page&branch=$branch\">Следваща</a>";

switch ($num_rows)
	{
	case 1: $infostr = "Намеренa e $num_rows фирма.";break;
	case 0: $infostr = "Няма намерени фирми.";break;
	default: {	$razlika =  $num_rows - $offset;
					$endf=$offset+ $rowsPerPage;
					if ($razlika<10) $endf=$offset+ $razlika;
					$stf=$offset+1;
					//$infostr = "Показани са  $stf-$endf от $num_rows намерени фирми.";
				}
	};
//echo "<p style=\"text-align:center\">".$infostr."</p>";
echo "<p style=\"text-align:center\">".$first . $prev . $nav . $next . $last. "</p>";


//And we display the results
foreach ($Recordset2 as $result)
{	$nm=$result['name_en'];
	$st=$result['site'];
	$tn=$result['town'];
	$ad=$result['address'];
	$te=$result['tel'];
	$br=$result['branch_en'];
	$ml=$result['mail'];
	$re=$result['resume_en'];
	$re = str_replace("\n", "<br>", $re);

	$tablestr="<div class=\"firm\">
                <h5><strong>$nm</strong></h5>
                <div class=\"row\">
                	<div class=\"col-12 col-md-8\"><strong>Branch: </strong>$br</div>
                	<div class=\"col-12  col-md-4 text-right\"><strong>Phone: </strong>$te</div>
                </div>
                <div class=\"row\">
                    <div class=\"col-12 col-md-6\"><strong>Website: </strong><a href=\"$st\">$st</a></div>
                    <div class=\"col-12 col-md-6 text-right\"><strong>E-mail: </strong><a href=\"$ml\">$ml</a></div>
                </div>
                <div class=\"row\">
                	<div class=\"col-12\"><strong>Short info:</strong><br />$re</div>
                </div>
              </div>\n";
echo $tablestr;
}

echo "<hr><p style=\"text-align:center\">".$first . $prev . $nav . $next . $last. "</p>";
?>
            
              </div>
      </div>
    </div>
  </div>
</section>
<section>
  <?php // include('includes/bottom-menu.php'); ?>
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
</body>
</html>