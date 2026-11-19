<?php
require __DIR__ . '/../_init.php';
nbn_session();

/* ---------- HELPERS ---------- */
function clean($v, $len = 255) {
    $v = trim($v);
    $v = str_replace(array("\r","\n","\0"), ' ', $v);
    return substr($v, 0, $len);
}

function is_injected($v) {
    return preg_match('/[\r\n]|bcc:|cc:|to:/i', $v);
}

function csrf_token() {
    if (empty($_SESSION['csrf'])) {
        $_SESSION['csrf'] = bin2hex(random_bytes(16));
    }
    return $_SESSION['csrf'];
}

function csrf_valid($t) {
    return isset($_SESSION['csrf']) && is_string($t) && hash_equals($_SESSION['csrf'], $t);
}

$errors = array();
$success = false;

?>
<!DOCTYPE html>
<html>
<head>
<meta charset="UTF-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1, minimum-scale=1">
<link rel="shortcut icon" href="assets/images/nbn-146x121.png" type="image/x-icon">
<title>Contact Us - National Business Network</title>

<link rel="stylesheet" href="assets/web/assets/mobirise-icons/mobirise-icons.css">
<link rel="stylesheet" href="assets/tether/tether.min.css">
<link rel="stylesheet" href="assets/bootstrap/css/bootstrap.min.css">
<link rel="stylesheet" href="assets/bootstrap/css/bootstrap-grid.min.css">
<link rel="stylesheet" href="assets/bootstrap/css/bootstrap-reboot.min.css">
<link rel="stylesheet" href="assets/dropdown/css/style.css">
<link rel="stylesheet" href="assets/socicon/css/styles.css">
<link rel="stylesheet" href="assets/animatecss/animate.min.css">
<link rel="stylesheet" href="assets/theme/css/style.css">
<link rel="stylesheet" href="assets/mobirise/css/mbr-additional.css">

<!-- CAPTCHA -->
<script src="https://www.google.com/recaptcha/api.js" async defer></script>

<script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyDKvKyAEHEa3IRlvZQeByGNlTz403hY0ws"></script>
</head>

<body>

<?php include('includes/language-selector.php');?>

<section class="menu cid-r4591pluJh" id="menu2-7">
<?php include('includes/menu.php'); ?>
</section>

<section class="carousel slide cid-r453OE9Tt9" id="slider1-5">
<?php include('includes/carousel.php'); ?>
</section>

<section class="mbr-section article content10 cid-r45i4N63I5">
<div class="container">
<div class="inner-container">
<hr class="line">
<div class="section-text align-center mbr-white display-5">
Contact Us
</div>
<hr class="line">
</div>
</div>
</section>

<section class="mbr-section content4 cid-r458MEyxG0 pt-2">
<div class="container">
<div class="row justify-content-center">
<div class="col-12 col-lg-8 my-5">

<?php

if (isset($_POST['op']) && $_POST['op'] == "ds") {

    // CSRF
    if (!csrf_valid(isset($_POST['csrf']) ? $_POST['csrf'] : '')) {
        $errors[] = "Invalid request.";
    }

    // Honeypot
    if (!empty($_POST['website'])) {
        $errors[] = "Spam detected.";
    }

    // CAPTCHA
    $captcha = isset($_POST['g-recaptcha-response']) ? $_POST['g-recaptcha-response'] : '';

    if (!$captcha) {
        $errors[] = "Please confirm you are not a robot.";
    } else {

        $secret = (string)nbn_config('recaptcha_secret_key');

        $postData = http_build_query(array(
            'secret' => $secret,
            'response' => $captcha,
            'remoteip' => $_SERVER['REMOTE_ADDR']
        ));

        $verify = false;

        if (function_exists('curl_init')) {
            $ch = curl_init("https://www.google.com/recaptcha/api/siteverify");
            curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
            curl_setopt($ch, CURLOPT_POST, true);
            curl_setopt($ch, CURLOPT_POSTFIELDS, $postData);
            $verify = curl_exec($ch);
        } else {
            $verify = @file_get_contents(
                "https://www.google.com/recaptcha/api/siteverify?".$postData
            );
        }

        $result = json_decode($verify, true);

        if (!$result || !$result['success']) {
            $errors[] = "Captcha verification failed. Please try again.";
        }
    }

    // Clean input
    $sender = clean($_POST['sender'], 100);
    $firm   = clean($_POST['firm'], 150);
    $email  = trim($_POST['email']);
    $tel    = clean($_POST['tel'], 50);
    $message= clean($_POST['message'], 3000);

    // Validation
    if ($sender == "") $errors[] = "Please enter your name.";
    if ($email == "") $errors[] = "Please enter your email.";
    if ($message == "") $errors[] = "Please enter your message.";

    if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
        $errors[] = "Invalid email address.";
    }

    if (is_injected($email)) {
        $errors[] = "Invalid input detected.";
    }

    // SEND
    if (empty($errors)) {

        $headers = "MIME-Version: 1.0\r\n";
        $headers .= "Content-Type: text/plain; charset=utf-8\r\n";
        $headers .= "From: NBN Website <no-reply@nbn-bg.com>\r\n";
        $headers .= "Reply-To: ".$email."\r\n";

        $msg =
        "Sender: ".$sender."\r\n".
        "Firm: ".$firm."\r\n".
        "Phone: ".$tel."\r\n".
        "Email: ".$email."\r\n\r\n".
        "Message:\r\n".$message;

        mail("office@nbn-bg.com", "Website Contact", $msg, $headers);

        $success = true;
    }
}

// SUCCESS
if ($success) {
    echo '<div class="alert alert-success"><strong>Message was sent! Thank you!</strong></div>';
}

// ERRORS
if (!empty($errors)) {
    echo '<div class="alert alert-danger">';
    foreach ($errors as $e) {
        echo '<p>'.$e.'</p>';
    }
    echo '</div>';
}

// FORM
if (!$success) {

$token = csrf_token();

echo '
<form method="post" action="contacts.php">

<input type="hidden" name="csrf" value="'.$token.'">
<input type="hidden" name="op" value="ds">

<div style="display:none">
<input type="text" name="website">
</div>

<div class="form-group">
<label>Sender</label>
<input type="text" name="sender" class="form-control" required>
</div>

<div class="form-group">
<label>Firm/Organisation</label>
<input type="text" name="firm" class="form-control">
</div>

<div class="form-group w-50">
<label>Email</label>
<input type="email" name="email" class="form-control" required>
</div>

<div class="form-group w-50">
<label>Telephone number</label>
<input type="text" name="tel" class="form-control">
</div>

<div class="form-group">
<label>Your message</label>
<textarea name="message" class="form-control" rows="6" required></textarea>
</div>

<div class="g-recaptcha mb-3" data-sitekey="6Lf4Mp8sAAAAADopo4J3F-s6y1-Q0j_OhAZxoJVu"></div>

<input type="submit" value="Send" class="btn btn-primary">
</form>
';
}

?>

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
</body>
</html>