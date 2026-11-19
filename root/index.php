<!DOCTYPE html>
<html >
<head>

<meta charset="UTF-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1, minimum-scale=1">
<link rel="shortcut icon" href="assets/images/nbn-146x121.png" type="image/x-icon">
<meta name="description" content="">
<title>Национална Бизнес Мрежа</title>
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
<script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyDKvKyAEHEa3IRlvZQeByGNlTz403hY0ws"></script>
<!-- Google tag (gtag.js) -->
<script async src="https://www.googletagmanager.com/gtag/js?id=G-GVXXQPSEYT"></script>
<script>
  window.dataLayer = window.dataLayer || [];
  function gtag(){dataLayer.push(arguments);}
  gtag('js', new Date());
  gtag('config', 'G-GVXXQPSEYT');
</script>

<style>
.network-section {
  background: #f4f7fb;
  padding: 100px 0;
  overflow: hidden;
}

.section-title {
  font-size: 40px;
  font-weight: 700;
}

.section-subtitle {
  max-width: 700px;
  margin: 10px auto 60px;
  color: #6b7280;
}

/* LAYOUT */
.network {
  position: relative;
  height: 420px;
  max-width: 1100px;
  margin: 0 auto;
}

/* SVG LINES */
.lines {
  position: absolute;
  inset: 0;
  width: 100%;
  height: 100%;
  pointer-events: none;
  z-index: 1;
}

.lines path {
  stroke: #cbd5e1;
  stroke-width: 2;
  fill: none;
  opacity: 0.7;
  transition: all 0.3s ease;
  vector-effect: non-scaling-stroke;
}

.lines path.active {
  stroke: #6366f1;
  stroke-width: 3;
  opacity: 1;
  filter: drop-shadow(0 0 6px rgba(99,102,241,0.6));
}

/* LEFT */
.left {
  position: absolute;
  left: 0;
  top: 50%;
  transform: translateY(-50%);
  z-index: 3;
}

.circle {
  width: 55px;
  height: 55px;
  background: #1e293b;
  border-radius: 50%;
  margin: 18px 0;
  display: flex;
  align-items: center;
  justify-content: center;
  color: white;
  font-size: 20px;
  cursor: pointer;
  transition: all 0.3s ease;
  box-shadow: 0 8px 20px rgba(0,0,0,0.25);
}

.circle:hover {
  background: #6366f1;
  transform: scale(1.15);
  box-shadow: 0 10px 30px rgba(99,102,241,0.5);
}

/* CENTER */
.center {
  position: absolute;
  left: 50%;
  top: 50%;
  transform: translate(-50%, -50%);
  z-index: 3;
}

.node {
  background: linear-gradient(135deg, #827adc, #d9d8f6);
  padding: 25px 70px;
  border-radius: 60px;
  color: white;
  font-weight: 700;
  font-size: 22px;
  box-shadow: 0 0 60px rgba(99,102,241,0.6);
  position: relative;
}
.logo-node {
  position: relative;
  padding: 20px 35px;
  border-radius: 60px;

  background: rgba(255,255,255,0.06);
  backdrop-filter: blur(10px);

  display: flex;
  align-items: center;
  justify-content: center;

  animation: floatLogo 6s ease-in-out infinite;
}

/* LOGO IMAGE */
.logo-node img {
  max-height: 55px;
  width: auto;
  display: block;
  z-index: 2;
  position: relative;

  animation: rotateLogo 12s linear infinite;
}

/* GLOW BEHIND */
.logo-node::before {
  content: "";
  position: absolute;
  width: 160px;
  height: 160px;
  background: radial-gradient(circle, rgba(99,102,241,0.4), transparent 70%);
  border-radius: 50%;
  z-index: 1;

  animation: pulseGlow 4s ease-in-out infinite;
}

/* SECOND SOFT GLOW */
.logo-node::after {
  content: "";
  position: absolute;
  width: 240px;
  height: 240px;
  background: radial-gradient(circle, rgba(59,130,246,0.2), transparent 70%);
  border-radius: 50%;
  z-index: 0;

  animation: pulseGlow 6s ease-in-out infinite;
}
/* FLOAT */
@keyframes floatLogo {
  0%, 100% { transform: translateY(0px); }
  50% { transform: translateY(-8px); }
}

/* PULSE GLOW */
@keyframes pulseGlow {
  0%, 100% {
    transform: scale(1);
    opacity: 0.6;
  }
  50% {
    transform: scale(1.2);
    opacity: 1;
  }
}

/* SUBTLE ROTATION */
@keyframes rotateLogo {
  0% { transform: rotate(0deg); }
  50% { transform: rotate(2deg); }
  100% { transform: rotate(0deg); }
}
.node::after {
  content: "";
  position: absolute;
  inset: -25px;
  border-radius: 60px;
  background: radial-gradient(circle, rgba(99,102,241,0.18), transparent 70%);
  z-index: -1;
}

/* RIGHT */
.right {
  position: absolute;
  right: 0;
  top: 50%;
  transform: translateY(-50%);
  z-index: 3;
}

.card {
  width: 325px;
  padding: 28px 30px;
  border-radius: 26px;
  color: white;
  margin: 24px 0;
  box-shadow: 0 20px 60px rgba(0,0,0,0.15);
  transition: all 0.3s ease;
  position: relative;
  z-index: 3;
}
.card.active {
  transform: translateX(-10px) scale(1.03);
  box-shadow: 0 0 30px rgba(99,102,241,0.4);
}
.card h4,
.card p {
  position: relative;
  z-index: 4;
}

.card:hover {
  transform: translateX(-10px) scale(1.03);
  box-shadow: 0 25px 80px rgba(0,0,0,0.22);
}
.logo-node {
  transition: transform 0.3s ease;
}

.network:hover .logo-node {
  transform: scale(1.05);
}
.network-section {
  position: relative;
}

.network-section::before {
  content: "";
  position: absolute;
  inset: 0;
  background: radial-gradient(circle at center, rgba(99,102,241,0.08), transparent 60%);
  pointer-events: none;
}
.green { background: #10b981; }
.orange { background: #f59e0b; }
.purple { background: #8b5cf6; }

/* HERO */
.hero-section {
  padding-top: 135px;
  padding-bottom: 35px;
  background-image: url('hero-bg.svg');
/*  background: linear-gradient(135deg, #0b1d3a, #0f2c5c);*/
  color: #fff;
  display: flex;
  align-items: center;
  text-align: center;
}

.hero-title {
  font-size: 56px;
  font-weight: 700;
}

.gradient-text {
  background: linear-gradient(90deg, #3b82f6, #22c55e);
  -webkit-background-clip: text;
  -webkit-text-fill-color: transparent;
}

.hero-subtitle {
  max-width: 700px;
  margin: 20px auto;
  opacity: 0.8;
}

.hero-buttons .btn {
 margin-top: 30px;
    margin-right: 10px;
    margin-left: 10px;
  padding: 12px 24px;
  border-radius: 10px;
}

.hero-stats h3 {
  font-weight: 700;
}

/* CARDS GRID */
.features-modern {
  background: #e9ecf4;
}

.feature-card {
  background: #fff;
  border-radius: 16px;
  padding: 25px;
  height: 100%;
  box-shadow: 0 10px 30px rgba(0,0,0,0.05);
  transition: 0.3s;
  text-align: left;
}

.feature-card:hover {
  transform: translateY(-5px);
}

.feature-card .icon {
  width: 60px;
  height: 60px;
  background: #bcd5ff;
  border-radius: 12px;
  display: flex;
  align-items: center;
  justify-content: center;
  margin-bottom: 15px;
}

.feature-card h4 {
  font-weight: 600;
}

.feature-card a {
  color: #2563eb;
  text-decoration: none;
}


/* ABOUT MODERN */
.about-modern-section {
  background: #e9ecf4;
  padding: 100px 0;
}

.about-label {
  color: #2563eb;
  font-weight: 600;
  font-size: 14px;
  letter-spacing: 1px;
}

.about-title {
  font-size: 42px;
  font-weight: 800;
  margin: 15px 0 20px;
  color: #111827;
}

.about-text {
  color: #4b5563;
  margin-bottom: 15px;
  line-height: 1.6;
}

.about-buttons .btn {
  margin-right: 10px;
  border-radius: 10px;
  padding: 10px 18px;
}

/* RIGHT BOX */
.stats-box {
  background: #cbd5e1;
  padding: 40px;
  border-radius: 25px;
}

/* CARDS */
.stat-card {
  background: #ffffff;
  border-radius: 16px;
  padding: 25px;
  text-align: center;
  box-shadow: 0 10px 30px rgba(0,0,0,0.08);
  transition: 0.3s;
}

.stat-card:hover {
  transform: translateY(-5px);
}

.stat-card h3 {
  font-size: 23px;
  font-weight: 800;
  color: #2563eb;
  margin-bottom: 5px;
}

.stat-card p {
  margin: 0;
  color: #6b7280;
}

/* PARTNERS MODERN */
.partners-modern {
  padding: 100px 0;
  background: #ffffff;
}

.partners-title {
  font-size: 36px;
  font-weight: 800;
  margin-bottom: 10px;
  color: #111827;
}

.partners-subtitle {
  color: #6b7280;
  margin-bottom: 50px;
}

/* GRID */
.partners-grid {
  display: grid;
  grid-template-columns: repeat(auto-fit, minmax(180px, 1fr));
  gap: 30px;
  align-items: center;
}

/* CARD */
.partner {
  background: #f9fafb;
  padding: 25px;
  border-radius: 16px;
  display: flex;
  align-items: center;
  justify-content: center;
  height: 110px;
  transition: 0.3s;
 
}

.partner img {
  max-width: 100%;
  max-height: 50px;
  object-fit: contain;
}

/* HOVER EFFECT */
.partner:hover {
  transform: translateY(-5px);
  filter: grayscale(0%);
  background: #ffffff;
  box-shadow: 0 10px 30px rgba(0,0,0,0.08);
}
/* PREMIUM GLASS STATS */
.hero-stats-glass {
  display: flex;
  justify-content: center;
  gap: 25px;
  margin-top: 70px;
  flex-wrap: wrap;
}

/* CARD */
.stat-glass {
  position: relative;
  display: flex;
  align-items: center;
  gap: 16px;
  padding: 20px 26px;
  min-width: 200px;

  border-radius: 18px;

  background: rgba(255,255,255,0.04);
  backdrop-filter: blur(14px);
  -webkit-backdrop-filter: blur(14px);

  border: 1px solid rgba(255,255,255,0.08);

  color: white;
  transition: all 0.35s ease;

  overflow: hidden;
}

/* GRADIENT GLOW BORDER */
.stat-glass::before {
  content: "";
  position: absolute;
  inset: 0;
  border-radius: 18px;
  padding: 1px;
  background: linear-gradient(120deg, transparent, rgba(59,130,246,0.6), transparent);
  -webkit-mask: 
    linear-gradient(#000 0 0) content-box, 
    linear-gradient(#000 0 0);
  -webkit-mask-composite: xor;
  mask-composite: exclude;
  opacity: 0;
  transition: 0.4s;
}

/* LIGHT GLOW */
.stat-glass::after {
  content: "";
  position: absolute;
  width: 120px;
  height: 120px;
  background: radial-gradient(circle, rgba(59,130,246,0.25), transparent);
  top: -40px;
  left: -40px;
  opacity: 0;
  transition: 0.4s;
}

/* HOVER EFFECT */
.stat-glass:hover {
  transform: translateY(-8px) scale(1.03);
  background: rgba(255,255,255,0.07);
}

.stat-glass:hover::before {
  opacity: 1;
}

.stat-glass:hover::after {
  opacity: 1;
}

/* ICON */
.stat-glass .icon {
  font-size: 26px;
  color: #3b82f6;
  background: rgba(59,130,246,0.15);
  padding: 12px;
  border-radius: 12px;
}

/* TEXT */
.stat-glass h4 {
  margin: 0;
  font-size: 26px;
  font-weight: 800;

  background: linear-gradient(90deg, #3b82f6, #22c55e, #8b5cf6);
  background-size: 200% auto;
  -webkit-background-clip: text;
  -webkit-text-fill-color: transparent;

  animation: gradientMove 3s linear infinite;
}

@keyframes gradientMove {
  to { background-position: 200% center; }
}
.stat-glass p {
  margin: 0;
  font-size: 13px;
  opacity: 0.75;
}

/* FLOATING ANIMATION */
.stat-glass {
  animation: float 6s ease-in-out infinite;
}

.stat-glass:nth-child(2) { animation-delay: 1s; }
.stat-glass:nth-child(3) { animation-delay: 2s; }
.stat-glass:nth-child(4) { animation-delay: 3s; }

@keyframes float {
  0%, 100% { transform: translateY(0px); }
  50% { transform: translateY(-6px); }
}

.hero-glow {
  position: absolute;
  width: 400px;
  height: 400px;
  background: radial-gradient(circle, rgba(59,130,246,0.25), transparent 60%);
  pointer-events: none;
  transform: translate(-50%, -50%);
  z-index: 1;
  filter: blur(60px);
}


/* NBN content refresh */
.hero-section {
  position: relative;
}
.hero-section .container {
  position: relative;
  z-index: 2;
}
.source-list {
  position: absolute;
  left: 0;
  top: 50%;
  transform: translateY(-50%);
  z-index: 3;
  width: 330px;
}
.source-item {
  display: flex;
  align-items: center;
  gap: 12px;
  margin: 23px 0;
  padding: 8px 12px 8px 8px;
  border-radius: 999px;
  background: rgba(255,255,255,0.82);
  box-shadow: 0 8px 20px rgba(15,23,42,0.10);
  cursor: pointer;
  transition: all 0.3s ease;
  text-align: left;
}
.source-item .circle {
  flex: 0 0 50px;
  width: 50px;
  height: 50px;
  margin: 0;
}
.source-item .source-label {
  font-weight: 600;
  color: #1f2937;
  line-height: 1.2;
  font-size: 15px;
}
.source-item:hover,
.source-item.active {
  transform: translateX(8px);
  background: #ffffff;
  box-shadow: 0 10px 30px rgba(99,102,241,0.20);
}
.source-item:hover .circle,
.source-item.active .circle {
  background: #6366f1;
  transform: scale(1.08);
  box-shadow: 0 10px 30px rgba(99,102,241,0.40);
}
.card .card-icon {
  display: inline-block;
  margin-right: 8px;
}
@media (max-width: 991px) {
  .network { height: auto; display: flex; flex-direction: column; gap: 28px; }
  .source-list, .center, .right { position: static; transform: none; width: 100%; }
  .source-list { display: grid; grid-template-columns: 1fr; max-width: 520px; margin: 0 auto; }
  .right .card { width: 100%; max-width: 520px; margin: 16px auto; }
  .lines { display: none; }
}

</style>


<meta name="facebook-domain-verification" content="26ixdk98wnr28g4on612xy34fzqig8" />
</head>
<body>
    <!-- Google Tag Manager (noscript) -->
<noscript><iframe src="https://www.googletagmanager.com/ns.html?id=GTM-MPKLB2QJ"
height="0" width="0" style="display:none;visibility:hidden"></iframe></noscript>
<!-- End Google Tag Manager (noscript) -->

<?php /* unused Stripe include removed */ ?>
  <?php include('includes/language-selector.php');?>
  <section class="menu cid-r4591pluJh" once="menu" id="menu2-7">
    <?php include('includes/menu.php'); ?>
</section>
<section class="hero-section">
  <div class="hero-glow"></div>
  <div class="container">

    <h1 class="hero-title">
      Свързваме <span class="gradient-text">бизнеса в България</span><br>
      с партньори, клиенти и възможности
    </h1>

   <!--  <p class="hero-subtitle">
      Национална бизнес мрежа подпомага развитието на малкия и средния бизнес чрез партньорства,
      експертна подкрепа, информация и конкретни решения според нуждите на всеки казус.
    </p>-->

    <div class="hero-buttons">
      <a href="chlenstvo" class="btn btn-primary">Стани член →</a>
      <a href="za-kontakt-s-nas" class="btn btn-outline-light">Изпрати запитване</a>
    </div>

    <div class="hero-stats-glass">

      <div class="stat-glass">
        <span class="icon mbri-briefcase"></span>
        <div>
          <h4>22+</h4>
          <p>Години опит</p>
        </div>
      </div>

      <div class="stat-glass">
        <span class="icon mbri-users"></span>
        <div>
          <h4>Контакти</h4>
          <p>С клиенти и институции</p>
        </div>
      </div>

      <div class="stat-glass">
        <span class="icon mbri-protect"></span>
        <div>
          <h4>Експерти</h4>
          <p>От различни области</p>
        </div>
      </div>

      <div class="stat-glass">
        <span class="icon mbri-success"></span>
        <div>
          <h4>Решения</h4>
          <p>За конкретни казуси</p>
        </div>
      </div>

    </div>

  </div>
</section>


<section class="features-modern py-5">
  <div class="container">
    <div class="row">

      <div class="col-md-4 mb-4">
        <div class="feature-card">
          <div class="icon"><span class="mbri-users"></span></div>
          <h4>Членство</h4>
          <p>Получавате достъп до контакти, услуги и професионално съдействие чрез НБМ.</p>
          <a href="chlenstvo">Вижте повече →</a>
        </div>
      </div>

      <div class="col-md-4 mb-4">
        <div class="feature-card">
          <div class="icon"><span class="mbri-info"></span></div>
          <h4>Новини</h4>
          <p>Подбрано съдържание и полезна информация по актуални теми за бизнеса.</p>
          <a href="novini">Вижте повече →</a>
        </div>
      </div>

      <div class="col-md-4 mb-4">
        <div class="feature-card">
          <div class="icon"><span class="mbri-calendar"></span></div>
          <h4>Събития</h4>
          <p>Срещи, обучения и инициативи за бизнеса и професионалното развитие.</p><br>
          <a href="sabitia">Вижте повече →</a>
        </div>
      </div>

      <div class="col-md-4 mb-4">
        <div class="feature-card">
          <div class="icon"><span class="mbri-growing-chart"></span></div>
          <h4>Възможности за финансиране</h4>
          <p>Отворени програми, процедури и покани за кандидатстване.</p>
          <a href="finansovi-programi">Вижте повече →</a>
        </div>
      </div>

      <div class="col-md-4 mb-4">
        <div class="feature-card">
          <div class="icon"><span class="mbri-extension"></span></div>
          <h4>Фирми в мрежата</h4><br>
          <p>Компании от различни сектори и области на дейност.</p>
          <a href="firmi-chlenove">Вижте повече →</a>
        </div>
      </div>

      <div class="col-md-4 mb-4">
        <div class="feature-card">
          <div class="icon"><span class="mbri-idea"></span></div>
          <h4>Бизнес оферти</h4><br>
          <p>Предложения за сътрудничество от фирми и организации.</p>
          <a href="biznes-oferti">Вижте повече →</a>
        </div>
      </div>

    </div>
  </div>
</section>


<section class="network-section">
  <div class="container text-center">

    <h2 class="section-title">Свързваме бизнеса с възможности</h2>
    <p class="section-subtitle">
      Зад всяко решение стои правилният контакт
    </p>

    <div class="network">

      <!-- LEFT SOURCES -->
      <div class="source-list left">
        <div class="source-item" data-line="l0"><span class="circle"><span class="mbri-users"></span></span><span class="source-label">Мрежа за сътрудничество</span></div>
        <div class="source-item" data-line="l1"><span class="circle"><span class="mbri-protect"></span></span><span class="source-label">Експертна подкрепа</span></div>
        <div class="source-item" data-line="l2"><span class="circle"><span class="mbri-globe"></span></span><span class="source-label">Международни контакти</span></div>
        <div class="source-item" data-line="l3"><span class="circle"><span class="mbri-database"></span></span><span class="source-label">Информация и ресурси</span></div>
        <div class="source-item" data-line="l4"><span class="circle"><span class="mbri-calendar"></span></span><span class="source-label">Събития и обучения</span></div>
      </div>

      <!-- CENTER -->
      <div class="center">
        <div class="node logo-node">
          <img src="https://nbn-bg.com/images/nbn_logo_color_bg.png" alt="НБМ">
        </div>
      </div>

      <!-- RIGHT CARDS -->
      <div class="right">
        <div class="card green">
          <h5>Развитие</h5>
          <p>Подкрепа за бизнеса</p>
        </div>

        <div class="card orange">
          <h5>Сътрудничество</h5>
          <p>Контакти и партньорства</p>
        </div>

        <div class="card purple">
          <h5>Възможности</h5>
          <p>Информация, събития и инициативи</p>
        </div>
      </div>

      <!-- SVG LINES -->
     <svg class="lines" viewBox="0 0 1100 400">
        <path id="l0" d="M270 0 C400 140, 430 180, 550 200"></path>
        <path id="l1" d="M270 100 C360 170, 440 190, 550 200"></path>
        <path id="l2" d="M270 200 C360 200, 440 200, 550 200"></path>
        <path id="l3" d="M270 300 C360 230, 440 210, 550 200"></path>
        <path id="l4" d="M270 420 C380 260, 430 220, 550 200"></path>

        <path id="r0" d="M550 200 C750 120, 900 50, 1050 95"></path>
        <path id="r1" d="M550 200 C750 200, 900 200, 1050 200"></path>
        <path id="r2" d="M550 200 C750 280, 900 350, 1050 305"></path>

        <circle r="3" fill="#6366f1"><animateMotion dur="4s" repeatCount="indefinite"><mpath xlink:href="#l0"></mpath></animateMotion></circle>
        <circle r="3" fill="#6366f1"><animateMotion dur="4.5s" repeatCount="indefinite"><mpath xlink:href="#l1"></mpath></animateMotion></circle>
        <circle r="3" fill="#6366f1"><animateMotion dur="5s" repeatCount="indefinite"><mpath xlink:href="#l2"></mpath></animateMotion></circle>
        <circle r="3" fill="#6366f1"><animateMotion dur="4.2s" repeatCount="indefinite"><mpath xlink:href="#l3"></mpath></animateMotion></circle>
        <circle r="3" fill="#6366f1"><animateMotion dur="5.3s" repeatCount="indefinite"><mpath xlink:href="#l4"></mpath></animateMotion></circle>
        <circle r="3" fill="#6366f1"><animateMotion dur="4s" repeatCount="indefinite"><mpath xlink:href="#r0"></mpath></animateMotion></circle>
        <circle r="3" fill="#6366f1"><animateMotion dur="4.5s" repeatCount="indefinite"><mpath xlink:href="#r1"></mpath></animateMotion></circle>
        <circle r="3" fill="#6366f1"><animateMotion dur="5s" repeatCount="indefinite"><mpath xlink:href="#r2"></mpath></animateMotion></circle>
      </svg>

    </div>
  </div>
</section>


<section class="partners-modern">
  <div class="container text-center">

    <h2 class="partners-title">Нашите партньори</h2>
    

    <div class="partners-grid">

      <a href="https://digital4bulgaria.com/en/" target="_blank" class="partner">
        <img src="digital4bulgria.png" alt="">
      </a>

      <a href="http://bcci.bg/" target="_blank" class="partner">
        <img src="bcci_logo_text.png" alt="">
      </a>

      <a href="http://bscc.bg/bg" target="_blank" class="partner">
        <img src="BSCClogo_text.png" alt="">
      </a>


      <a href="http://confindustriabulgaria.bg/bg/" target="_blank" class="partner">
        <img src="conf.png" alt="">
      </a>

      <a href="https://www.ccifrance-bulgarie.org/" target="_blank" class="partner">
        <img src="logocci.png" alt="">
      </a>

      <a href="http://nbbg.eu/" target="_blank" class="partner">
        <img src="LOGO-NBBG.png" alt="">
      </a>

      <a href="https://tuk-tam.bg/" target="_blank" class="partner">
        <img src="TT_logo.png" alt="">
      </a>

  
      <a href="https://www.accessmba.com/" target="_blank" class="partner">
        <img src="mba_logo.svg" alt="MBA">
      </a>

      <a href="https://careershow.bg/" target="_blank" class="partner">
        <img src="career-show-logo.svg" alt="Career Show">
      </a>

    </div>

  </div>
</section>


<section class="mbr-section content4 cid-r458MEyxG0" id="content4-6" name="content4-6"> 
  <div class="container">
    <div class="media-container-row">
      <div class="title col-12 col-md-8">
        <p class="section-text align-center mbr-fonts-style display-5 partners-title">За нас</p>
      </div>
    </div>
  </div>
</section>

<section class="about-modern-section">
  <div class="container">
      <h2 class="align-center">
          Вашият партньор за бизнес услуги
        </h2><br>
   
    <div class="row align-items-center">
        

      <!-- LEFT TEXT -->
      <div class="col-lg-6 mb-4 mb-lg-0">

        

        <p class="about-text">
          Национална бизнес мрежа е създадена на 19 март 2004 г. с идеята да подпомага развитието на малкия и средния бизнес в България.
        </p>

        <p class="about-text">
          През годините около НБМ се формира общност от компании, експерти, организации и партньори, които споделят една обща цел - насърчаване на сътрудничеството, обмен на знания и създаване на полезни контакти.
        </p>

        <p class="about-text">
          Днес НБМ е място, където бизнесът получава достъп до информация, експертиза и полезни контакти. Работим по конкретни запитвания, насочваме към подходящи експерти и съдействаме за намирането на решения според нуждите на всеки конкретен случай.
        </p>

        <p class="about-text">
          Независимо дали търсите партньор, експерт, информация, нова възможност или съдействие по конкретен казус, можете да се обърнете към нас.
        </p>

        <div class="about-buttons mt-4">
          <a href="https://nbn-bg.com/za-nas" class="btn btn-primary">Научете повече</a>
          <a href="https://nbn-bg.com/za-kontakt-s-nas" class="btn btn-outline-secondary">Свържете се с нас</a>
        </div>

      </div>

      <!-- RIGHT CARDS -->
      <div class="col-lg-6">
        <div class="stats-box">

          <div class="row">

            <div class="col-6 mb-4">
              <div class="stat-card">
                <h3>22+</h3>
                <p>Години<br> дейност</p>
              </div>
            </div>

            <div class="col-6 mb-4">
              <div class="stat-card">
                <h3>Партньорства</h3>
                <p>С организации<br> и експерти</p>
              </div>
            </div>

            <div class="col-6">
              <div class="stat-card">
                <h3>Общност</h3>
                <p>От различни<br> сектори</p>
              </div>
            </div>

            <div class="col-6">
              <div class="stat-card">
                <h3>Услуги</h3>
                <p>За развитие и<br> сътрудничество</p>
              </div>
            </div>

          </div>

        </div>
      </div>

    </div>
  </div>
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

<script>

document.addEventListener("DOMContentLoaded", function () {
  const circles = document.querySelectorAll('.source-item');
  const leftLines = document.querySelectorAll('.lines path[id^="l"]');

  function clearActiveLines() {
    leftLines.forEach(line => line.classList.remove('active'));
    circles.forEach(circle => circle.classList.remove('active'));
  }

  circles.forEach(circle => {
    circle.addEventListener('mouseenter', function () {
      const targetId = this.getAttribute('data-line');
      const targetLine = document.getElementById(targetId);

      clearActiveLines();

      this.classList.add('active');
      if (targetLine) {
        targetLine.classList.add('active');
      }
    });
  });

  const leftWrap = document.querySelector('.source-list');
  if (leftWrap) {
    leftWrap.addEventListener('mouseleave', function () {
      clearActiveLines();
    });
  }
});
</script>

<script>
document.addEventListener("mousemove", function(e) {

  const stats = document.querySelectorAll(".stat-glass");

  stats.forEach((el, i) => {
    const speed = (i + 1) * 0.01;

    const x = (window.innerWidth / 2 - e.clientX) * speed;
    const y = (window.innerHeight / 2 - e.clientY) * speed;

    el.style.transform = `translate(${x}px, ${y}px)`;
  });

});
</script>

<script>
document.addEventListener("mousemove", function(e) {
  const glow = document.querySelector(".hero-glow");

  if (!glow) return;

  glow.style.left = e.clientX + "px";
  glow.style.top = e.clientY + "px";
});
</script><script>
document.addEventListener("DOMContentLoaded", function () {

  const counters = document.querySelectorAll('.stat-glass h4');

  counters.forEach(counter => {
    const text = counter.innerText.trim();

    // extract only first number
    const match = text.match(/\d+/);

    if (!match) return; // skip if no number

    const target = parseInt(match[0]);
    const suffix = text.replace(match[0], '');

    let count = 0;
    const duration = 1200;
    const stepTime = 16;
    const increment = target / (duration / stepTime);

    function update() {
      count += increment;

      if (count < target) {
        counter.innerText = Math.floor(count) + suffix;
        requestAnimationFrame(update);
      } else {
        counter.innerText = target + suffix;
      }
    }

    update();
  });

});
</script>

<script>
document.addEventListener("DOMContentLoaded", function () {

  const circles = document.querySelectorAll('.source-item');
  const cards = document.querySelectorAll('.card');

  circles.forEach((circle, i) => {
    circle.addEventListener('mouseenter', () => {

      // highlight line
      const id = circle.getAttribute('data-line');
      document.querySelectorAll('.lines path').forEach(p => p.classList.remove('active'));
      const line = document.getElementById(id);
      if (line) line.classList.add('active');

      // highlight matching card
      cards.forEach(c => c.classList.remove('active'));
      if (cards[i % cards.length]) {
        cards[i % cards.length].classList.add('active');
      }
    });
  });

});
</script>
</body>
</html>