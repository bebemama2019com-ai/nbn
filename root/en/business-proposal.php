<?php require __DIR__ . '/../_init.php'; nbn_session(); ?>
<!DOCTYPE html>
<html >
<head>
<meta charset="UTF-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="generator" content="Mobirise v4.8.2, mobirise.com">
<meta name="viewport" content="width=device-width, initial-scale=1, minimum-scale=1">
<link rel="shortcut icon" href="assets/images/nbn-146x121.png" type="image/x-icon">
<meta name="description" content="">
<title>Profile for International Cooperation - National Business Network</title>
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
  <?php include('includes/language-selector.php');?>
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
      <div class="section-text align-center mbr-white mbr-fonts-style display-5">Profile for International Cooperation
        <div class=" mbr-text mbr-fonts-style display-7 pb-2">If you are interested to work on the Bulgarian market and with Bulgarian companies, NBN is prepared to assist you.<br>
        Our aim is to effect exchange of business information - demands and offers of goods, services and investments - and contacts between Bulgarian companies and your company, according to yours needs and interests.<br>
        To do this you need to fill in the online application form in English and send it to us.</div>
      </div>
      <hr class="line" style="width: 100%;">
    </div>
  </div>
</section>


<section class="mbr-section content4 cid-r458MEyxG0 pt-2" id="content4-6" name="content4-6">
  <div class="container">
      <div class="row justify-content-center">
        <div class="col-12 mbr-text mbr-fonts-style display-7 py-3">
                 <?php
          if (nbn_post('op') != "ds") {
                 $display_block =" <div id=\"profil-div\">

<form name=\"form1\" method=\"post\" action=\"".e($_SERVER['PHP_SELF'])."\">
  <div class=\"container\">
    <div class=\"row\">
      <div class=\"col-lg-4\">
        <div class=\"form-group\">
          <label for=\"firm-name\">Company name:</label>
          <input name=\"firm-name\" type=\"text\"  class=\"form-control\" id=\"firm-name\" required>
        </div>        
      </div>
      <div class=\"col-lg-4\">
        <div class=\"form-group\">
          <label for=\"city\">City:</label>
          <input name=\"city\" type=\"text\"  class=\"form-control\" id=\"city\" required>
        </div>        
      </div>
      <div class=\"col-lg-4\">
        <div class=\"form-group\">
          <label for=\"country\">State:</label>
          <input name=\"country\" type=\"text\"  class=\"form-control\" id=\"country\" required>
        </div>        
      </div>
    </div>
  </div>
<div class=\"container\">
    <div class=\"row\">
      <div class=\"col-md-6\">
        <div class=\"form-group\">
          <label for=\"street\">Street:</label>
          <input name=\"street\" type=\"text\"  class=\"form-control\" id=\"street\" required>
        </div>        
      </div>
      <div class=\"col-md-3\">
        <div class=\"form-group\">
          <label for=\"postcode\">Postal code:</label>
          <input name=\"postcode\" type=\"text\"  class=\"form-control\" id=\"postcode\" required>
        </div>        
      </div>
      <div class=\"col-md-3\">
        <div class=\"form-group\">
          <label for=\"year\">Year of est.:</label>
          <input name=\"year\" type=\"number\" class=\"form-control\" id=\"year\" max=\"2019\" min=\"1900\" value=\"2000\">
        </div>        
      </div>
    </div>
  </div>
  <div class=\"container\">
    <div class=\"row\">
      <div class=\"col-md-6 col-lg-3\">
        <div class=\"form-group\">
          <label for=\"website\">Website:</label>
          <input name=\"website\" type=\"url\" class=\"form-control\" id=\"website\" value=\"http://\">
        </div>        
      </div>
      <div class=\"col-md-6 col-lg-3\">
        <div class=\"form-group\">
          <label for=\"email\">E-mail:</label>
          <input name=\"email\" type=\"email\" class=\"form-control\" id=\"email\" required>
        </div>        
      </div>
      <div class=\"col-md-6 col-lg-3\">
        <div class=\"form-group\">
          <label for=\"tel\">Phone (with  country code):</label>
          <input name=\"tel\" class=\"form-control\" id=\"tel\" required>
        </div>        
      </div>
      <div class=\"col-md-6 col-lg-3\">
        <div class=\"form-group\">
          <label for=\"fax\">Fax (with  country code):</label>
          <input name=\"fax\" class=\"form-control\" id=\"fax\">
        </div>        
      </div>
    </div>
  </div>
  <div class=\"container\">
    <div class=\"row\">
      <div class=\"col-md-6\">
        <div class=\"form-group\">
          <label for=\"contact-person\">Contact person (Name, family name):</label>
          <input name=\"contact-person\" type=\"text\" class=\"form-control\" id=\"contact-person\" required>
        </div>        
      </div>
      <div class=\"col-md-6\">
        <div class=\"form-group\">
          <label for=\"position\">Position in the company:</label>
          <input name=\"position\" class=\"form-control\" id=\"position\" required>
        </div>        
      </div>
    </div>
  </div>
<div class=\"container\">
    <div class=\"row\">
      <div class=\"col-md-6 mb-2\">
        <div class=\"border rounded p-2\">
        <p class=\"display-7 mb-0\"><strong>Turnover in EUR:</strong></p> 
        <div class=\"radio ml-5\">
          <label><input name=\"working-capital\" type=\"radio\" id=\"working-capital_0\" value=\"up to 2 million EUR\" checked> up to 2 million EUR</label>
        </div>
        <div class=\"radio ml-5\">
          <label><input type=\"radio\" name=\"working-capital\" value=\" 2 to 10\" id=\"working-capital_1\"> 2 to 10</label>
        </div>       
        <div class=\"radio ml-5\">
          <label><input type=\"radio\" name=\"working-capital\" value=\" 10 to 50\" id=\"working-capital_2\"> 10 to 50</label>
        </div>       
        <div class=\"radio ml-5\">
          <label><input type=\"radio\" name=\"working-capital\" value=\" over 50 million EUR\" id=\"working-capital_3\"> over 50 million EUR</label>
        </div>         
      </div>
      </div>
      <div class=\"col-md-6 mb-2\">
        <div class=\"border rounded p-2\">
        <p class=\"display-7 mb-0\"><strong>Number of employees in the company:</strong></p> 
        <div class=\"radio ml-5\">
          <label><input name=\"employees\" type=\"radio\" id=\"employees_0\" value=\"1-9\" checked> 1-9<br></label>
        </div>
        <div class=\"radio ml-5\">
          <label><input type=\"radio\" name=\"employees\" value=\"10-49\" id=\"employees_1\"> 10-49</label>
        </div>       
        <div class=\"radio ml-5\">
          <label><input type=\"radio\" name=\"employees\" value=\"50-249\" id=\"employees_2\"> 50-249</label>
        </div>       
        <div class=\"radio ml-5\">
          <label><input type=\"radio\" name=\"employees\" value=\"над 250\" id=\"employees_3\"> over 250</label>
        </div>         
      </div>
      </div>
    </div>
  </div>

  <div class=\"container\">
    <div class=\"row\">
      <div class=\"col-lg-6\">Language used for contact: <label class=\"checkbox-inline\"> <input type=\"checkbox\" name=\"english-language\" id=\"language_1\" value=\"en\"> English, </label> <label class=\"checkbox-inline\"> <input type=\"checkbox\" name=\"deutch-language\" id=\"language_2\" value=\"de\"> German,</label> other:
        <div class=\"form-group\">
          <input name=\"other-language\" type=\"text\" class=\"form-control\" id=\"other-language\">
        </div>     
      </div>
      <div class=\"col-lg-6\">Certification/ Quality standard: <label class=\"checkbox-inline\"><input type=\"checkbox\" name=\"iso9000\" id=\"iso9000\"  value=\"iso9000\"> ISO9000, </label> other (please specify):
        <div class=\"form-group\">
        <input name=\"other-qms\" type=\"text\" class=\"form-control\" id=\"other-qms\">
        </div>     
      </div>
    </div>
  </div>
  <div class=\"container\">
    <div class=\"row\">
      <div class=\"col-12\">
        <div class=\"form-group\">
          <label for=\"products\" class=\"text-left\">Company Products / Activities regarding searched cooperation (main products, services, key activities): </label>
          <textarea name=\"products\" rows=\"5\" class=\"form-control\" id=\"products\"></textarea>
        </div>
      </div>
    </div>
  </div>
<div class=\"container\">
    <div class=\"row\">
      <div class=\"col-lg-6\">
        <div class=\"form-group\">
          <label for=\"partner-countries\">Countries in which cooperation is sought:</label>
          <input name=\"partner-countries\" type=\"text\" class=\"form-control\" id=\"partner-countries\">
        </div>
      </div>
    </div>
  </div>
<div class=\"container\">
    <div class=\"row border rounded m-0 p-3\">
      <div class=\"col-lg-6\">
        <p class=\"display-7 mb-0\"><strong>Type of cooperation:</strong></p>
        <div class=\"checkbox ml-5\">
          <label class=\"text-left\"><input type=\"checkbox\" name=\"ptype1\" id=\"ptype1\"> Intermediaries (agents, representatives, distributors)</label>
        </div>  
        <div class=\"checkbox ml-5\">
          <label class=\"text-left\"><input type=\"checkbox\" name=\"ptype2\" id=\"ptype2\"> Franchising</label>
        </div>  
        <div class=\"checkbox ml-5\">
          <label class=\"text-left\"><input type=\"checkbox\" name=\"ptype3\" id=\"ptype3\"> Transportation / Logistics</label>
        </div>  
        <div class=\"checkbox ml-5\">
          <label class=\"text-left\"><input type=\"checkbox\" name=\"ptype4\" id=\"ptype4\"> Joint venture</label>
        </div>  
        <div class=\"checkbox ml-5\">
          <label class=\"text-left\"><input type=\"checkbox\" name=\"ptype5\" id=\"ptype5\"> Merge, exchange of shares</label>
        </div>  
        <div class=\"checkbox ml-5\">
          <label class=\"text-left\"><input type=\"checkbox\" name=\"ptype6\" id=\"ptype6\"> Sale / Acquisition of a complete company or shares</label>
        </div>  
        <div class=\"checkbox ml-5\">
          <label class=\"text-left\"><input type=\"checkbox\" name=\"ptype7\" id=\"ptype7\"> Reciprocal production</label>
        </div>  
        <div class=\"checkbox ml-5\">
          <label class=\"text-left\"><input type=\"checkbox\" name=\"ptype8\" id=\"ptype8\"> Subcontracting / outsourcing</label>
        </div>  
      </div>
      <div class=\"col-lg-6\">
        <div class=\"form-group\">
          <label for=\"partner-description\" class=\"text-left\">Detailed description (Specification of searched / offered cooperation):</label>
          <textarea name=\"partner-description\" rows=\"8\" class=\"form-control\" id=\"partner-decscription\"></textarea>
        </div>        
      </div>
    </div>
  </div>


<hr>
<p class=\"display-5 text-center\">Description of the required characteristics of the potential partner:</p>
<div class=\"container\">
  <div class=\"row\">
    <div class=\"col-lg-6\">Type of partner: <label class=\"checkbox-inline\"><input type=\"checkbox\" name=\"pfirm\" id=\"pfirm\"> Company, </label> other (please specify):
        <div class=\"form-group\">
        <input name=\"pother\" type=\"text\" class=\"form-control\" id=\"pother\">
        </div>     
      </div>
  </div>
</div>
<div class=\"container\">
    <div class=\"row\">
      <div class=\"col-md-6 mb-2\">
        <div class=\"border rounded p-2\">
        <p class=\"display-7 mb-0\"><strong>Type of activity of the potential partner:</strong></p> 
        <div class=\"radio ml-5\">
          <label><input type=\"checkbox\" name=\"pact1\" id=\"language_12\"> Production</label>
        </div>
        <div class=\"radio ml-5\">
          <label><input type=\"checkbox\" name=\"pact2\" id=\"language_13\" > Services</label>
        </div>       
        <div class=\"radio ml-5\">
          <label><input type=\"checkbox\" name=\"pact3\" id=\"language_14\"> Trading (Buys / Sales)</label>
        </div>       
                 
      </div>
      </div>
      <div class=\"col-md-6 mb-2\">
        <div class=\"border rounded p-2\">
        <p class=\"display-7 mb-0\"><strong>Potential partner's number of employees: </strong></p> 
        <div class=\"radio ml-5\">
          <label><input type=\"radio\" name=\"partner-employees\" id=\"radio\" value=\"no matter\" checked> no matter</label>
        </div>
        <div class=\"radio ml-5\">
          <label><input type=\"radio\" name=\"partner-employees\" id=\"radio\" value=\"1-9\"> 1-9</label>
        </div>       
        <div class=\"radio ml-5\">
          <label><input type=\"radio\" name=\"partner-employees\" id=\"radio\" value=\"10-49\"> 10-49</label>
        </div>      
        <div class=\"radio ml-5\">
          <label><input type=\"radio\" name=\"partner-employees\" id=\"radio\" value=\"50-249\"> 50-249</label>
        </div> 
        <div class=\"radio ml-5\">
          <label><input type=\"radio\" name=\"partner-employees\" id=\"radio\" value=\"over 250\"> over 250</label>
        </div>         
      </div>
      </div>
    </div>
  </div>
<div class=\"container\">
    <div class=\"row\">
      <div class=\"col-12\">
        <div class=\"form-group\">
          <label for=\"products\" class=\"text-left\">Expected contribution / Characteristics of the partner: (Description of what you expect from a potential partner): </label>
          <textarea name=\"contribution\" rows=\"5\" class=\"form-control\" id=\"contribution\"></textarea>
        </div>
      </div>
    </div>
  </div>
<p class=\"text-center\" ><img id=\"captcha\" src=\"/captcha/securimage_show.php\" alt=\"CAPTCHA Image\" style=\"vertical-align:-15px; margin:5px; border-radius:5px;\"/>
                 Please, write code here: <input type=\"text\" name=\"captcha_code\" class=\"form_controls\" style=\"font-weight:700; width:100px;\"maxlength=\"8\"/>
<a href=\"#\" onclick=\"document.getElementById('captcha').src = '/captcha/securimage_show.php?' + Math.random(); return false\"><img src=\"http://nbn-bg.com/captcha/images/refresh.png\" width=\"32\" height=\"32\" style=\"border:none\"  ALIGN=ABSMIDDLE  /></a><br></p>
<p class=\"text-center\" >
  <input type=\"hidden\" name=\"op\" value=\"ds\">
  <input type=\"submit\" class=\"btn btn-primary\" value=\"Send information\">
</p>
</form></div>"; } else {
    include_once $_SERVER['DOCUMENT_ROOT'] . '/captcha/securimage.php';
  $securimage = new Securimage();
  if ($securimage->check(nbn_post('captcha_code')) == true) {
    $message ="<strong>Company name: </strong>". e(nbn_post('firm-name'))."<br>\n";
    $message.="<strong>City: </strong>". e(nbn_post('city'))."<br>";
    $message.="<strong>State: </strong>". e(nbn_post('country'))."<br>";
    $message.="<strong>Street: </strong>". e(nbn_post('street'))."<br>";
    $message.="<strong>Postal code: </strong>". e(nbn_post('postcode'))."<br>";
    $message.="<strong>Website: </strong>". e(nbn_post('website'))."<br>";
    $message.="<strong>Contact person: </strong>". e(nbn_post('contact-person'))."<br>";
    $message.="<strong>Position in the company: </strong>". e(nbn_post('position'))."<br>";
    $message.="<strong>Phone: </strong>". e(nbn_post('tel'))."<br>";
    $message.="<strong>Fax: </strong>". e(nbn_post('fax'))."<br>";
    $message.="<strong>E-mail: </strong>". e(nbn_post('email'))."<br>";
    $message.="<strong>Year of establishment: </strong>". e(nbn_post('year'))."<br><br>";
    $message.="<strong>Turnover in EUR: </strong>". e(nbn_post('working-capital')). "<br><br>";
    $message.="<strong>Number of employees in the company: </strong>". e(nbn_post('employees')). "<br><br>";
    $message.="<strong>Language used for contact: </strong>";
    if (isset($_POST['english-language'])) {$message.="English ";};
    if (isset($_POST['deutch-language'])) {$message.=" German ";};
    $message.=e(nbn_post('other-language')). "<br><br>";
    $message.="<strong>Company Products / Activities regarding searched cooperation (main products, services, key activities): </strong><br>";
    $message.=e(nbn_post('products')). "<br><br>";
    $message.="<strong>Certification/ Quality standard: </strong>";
    if (isset($_POST['iso9000'])) {$message.="ISO9000, ";};
    $message.=e(nbn_post('other-qms')). "<br><br>";
    $message.="<strong>Countries in which cooperation is sought: </strong>". e(nbn_post('partner-countries')). "<br><br>";
    $message.="<strong>Type of cooperation: </strong><br>";
    if (isset($_POST['ptype1'])) {$message.="Intermediaries (agents, representatives, distributors)<br>";};
    if (isset($_POST['ptype2'])) {$message.="Franchising<br>";};
    if (isset($_POST['ptype3'])) {$message.="Transportation / Logistics<br>";};
    if (isset($_POST['ptype4'])) {$message.="Joint venture<br>";};
    if (isset($_POST['ptype5'])) {$message.="Merge, exchange of shares<br>";};
    if (isset($_POST['ptype6'])) {$message.="Sale / Acquisition of a complete company or shares<br>";};
    if (isset($_POST['ptype7'])) {$message.="Reciprocal production<br>";};
    if (isset($_POST['ptype8'])) {$message.="Subcontracting / outsourcing <br><br>";};
    $message.="<strong>Detailed description (Specification of searched / offered cooperation) </strong><br>";
    $message.=e(nbn_post('partner-description')). "<br><br>";
    $message.="<strong>Type of partner: </strong>";
    if (isset($_POST['pfirm'])) {$message.="Company, ";};
    $message.=e(nbn_post('pother')). "<br><br>";
    $message.="<strong>Type of activity of the potential partner: </strong><br>";
    if (isset($_POST['pact1'])) {$message.="Production<br>";};
    if (isset($_POST['pact2'])) {$message.="Services<br>";};
    if (isset($_POST['pact3'])) {$message.="Trading (Buys / Sales)<br><br>";};
    $message.="<strong>Potential partner's number of employees: </strong>". e(nbn_post('partner-employees')). "<br><br>";
    $message.="<strong>Expected contribution / Characteristics of the partner:(Description of what you expect from a potential partner) 
</strong><br>";
    $message.=e(nbn_post('contribution')). "<br><br>";
$message.= "------------------------------------------------" . date('l jS \of F Y h:i:s A') ."------------------------------------------------<br>";
    $message = stripslashes($message);
    $message_body = wordwrap($message,75,"\n");
    $eml=nbn_post('email');
     if (strpos($eml, "mail.ru") === false){
      foreach (nbn_config('proposal_recipients') as $to) {
        nbn_mail($to, "Ново съобщение от бизнес оферти", $message_body, $eml, 'text/html; charset=UTF-8');
      }
    }
        $display_block = "<p><strong>Message was sent!</strong></p>" . $message;
  }else {
        $display_block = "<p><strong>WRONG CAPTCHA CODE</strong></p>";
    }
  }
     echo "$display_block"; ?>
       <!--тук свършва формата -->
  
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