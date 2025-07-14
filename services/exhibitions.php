<!DOCTYPE html>
<html lang="ar" dir="rtl">

<?php
$pageTitle = "  الفعاليات والمعارض - Pixspot";
$pageDesc = "خدمة متكاملة لتجهيز المعارض من ديكور، طباعة، لافتات، هدايا، وتنظيم يليق بعلامتك التجارية.";
include('../includes/head.php');
?>

<body class="starter-page-page">

  <?php include '../includes/header.php'; ?>

  <main class="main">

    <!-- Page Title -->
      <div class="page-title dark-background" data-aos="fade">
        <div class="container position-relative">

          <!-- النص العربي -->
          <div class="lang-ar">
            <h1><span>الفعاليات والمعارض</span></h1>
            <p>نتميّز في <span class="brand-title">Pixspot</span> بتنظيم الفعاليات والمعارض باهتمام دقيق بكل التفاصيل، من التخطيط حتى التنفيذ.</p>
            <p>نضمن لك تجربة استثنائية وعرض نهائي لا يُنسى، من خلال:</p>
            <p>✔ فريق عمل متخصص<br>✔ تقنيات حديثة<br>✔ خطة مدروسة لكل فعالية</p>
            <p>لأننا ببساطة، نحرص على ظهور علامتك التجارية بشكل احترافي يليق بيها.</p>
          </div>

          <!-- النص الإنجليزي -->
          <div class="lang-en mt-3">
            <h1><span>Events & Exhibitions</span></h1>
            <p>At <span class="brand-title">Pixspot</span>, we excel in organizing events and exhibitions with meticulous attention to every detail — from planning to execution.</p>
            <p>We ensure an unforgettable experience and a flawless final presentation through:</p>
            <p>✔ A specialized team<br>✔ Advanced technology<br>✔ A well-structured event plan</p>
            <p>We make sure your brand shows up professionally and powerfully.</p>
          </div>

        </div>
      </div>

    <!-- End Page Title -->

    <!-- Starter Section -->
<section class="starter-section section">
  <div class="container section-title" data-aos="fade-up">
    <h2>شاهد أعمالنا</h2>
    <div><span>الفعاليات والمعارض</span></div>
  </div>

  <div class="container">
    <div class="video-wrapper" data-aos="fade-up" data-aos-delay="100">
      <video 
        src="<?= $base ?>assets/img/portfolio/exhibitions/WhatsApp Video 2020-02-05 at 11.52.46 AM.mp4" 
        class="w-100 rounded-4 shadow"
        autoplay 
        muted 
        playsinline 
        controls
        style="max-height: 600px; object-fit: cover;"
      ></video>
    </div>
  </div>
</section>


    <!-- /Starter Section -->

  </main>

  <?php include '../includes/social-float.php'; ?>
  <?php include '../includes/footer.php'; ?>
  <?php include '../includes/scripts.php'; ?>
</body>
</html>
