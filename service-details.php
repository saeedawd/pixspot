<!DOCTYPE html>
<html lang="ar" dir="rtl">

<?php
$pageTitle = " جميع خدماتنا - Pixspot";
$pageDesc  = "اكتشف تفاصيل خدماتنا الدعائية من تصميم وطباعة وتسويق والمزيد، بجودة عالية وأسعار منافسة.";
include('includes/head.php');
?>

<body class="services-page service-details-page">

<?php include 'includes/header.php'; ?>

<main class="main">
  <!-- Page Title -->
    <div class="page-title dark-background" data-aos="fade">
      <div class="container position-relative">

        <!-- النص العربي -->
        <div class="lang-ar">
          <h1><span>جميع الخدمات</span></h1>
          <p>في <span class="brand-title">بيكس سبوت</span>، بنقدّم مجموعة متكاملة من الخدمات الإبداعية، الدعائية، والتقنية، علشان نساعد براندك يظهر، يتألق، وينجح في السوق.</p>
          <p>من تصميم الهوية والشعارات، للتسويق الرقمي، للمطبوعات، للتصوير والمونتاج، وحتى تصميم المواقع واللافتات — بنشتغل معاك خطوة بخطوة عشان نخلق تجربة متكاملة تليق بعلامتك التجارية.</p>
        </div>

        <!-- النص الإنجليزي -->
        <div class="lang-en mt-3">
          <h1><span>All Services</span></h1>
          <p>At <span class="brand-title">Pixspot</span>, we offer a full range of creative, promotional, and digital services designed to make your brand stand out, shine, and succeed in today’s competitive market.</p>
          <p>From branding and logo design, to digital marketing, printing, photography, and even web development and signage — we work with you every step of the way to deliver a complete, cohesive brand experience.</p>
        </div>

      </div>
    </div>

  <!-- End Page Title -->

    <!-- Services Section -->
    <section id="services" class="services section">

      <div class="container" data-aos="fade-up" data-aos-delay="100">
        <div class="row justify-content-center">
          <div class="col-lg-4 col-md-6" data-aos="fade-up" data-aos-delay="100">
            <div class="service-card position-relative z-1">
              <div class="service-icon">
                <i class="bi bi-printer"></i>
              </div>
              <a href="<?= $base ?>services/prints.php" class="card-action d-flex align-items-center justify-content-center rounded-circle">
                <i class="bi bi-arrow-up-right"></i>
              </a>
              <h3>
                <a href="<?= $base ?>services/prints.php"><span class="lang-ar">المطبوعات</span><span class="lang-ar">Printing</span></a>
              </h3>
            </div>
          </div>
          <div class="col-lg-4 col-md-6" data-aos="fade-up" data-aos-delay="100">
            <div class="service-card position-relative z-1">
              <div class="service-icon">
                <i class="bi bi-shop"></i>
              </div>
              <a href="<?= $base ?>services/exhibitions.php" class="card-action d-flex align-items-center justify-content-center rounded-circle">
                <i class="bi bi-arrow-up-right"></i>
              </a>
              <h3>
                <a href="<?= $base ?>services/exhibitions.php"><span class="lang-ar">الفعاليات والمعارض</span><span class="lang-ar">Events & Exhibitions</span></a>
              </h3>
            </div>
          </div>
          <div class="col-lg-4 col-md-6" data-aos="fade-up" data-aos-delay="100">
            <div class="service-card position-relative z-1">
              <div class="service-icon">
                <i class="bi bi-gift"></i>
              </div>
              <a href="<?= $base ?>services/gifts.php" class="card-action d-flex align-items-center justify-content-center rounded-circle">
                <i class="bi bi-arrow-up-right"></i>
              </a>
              <h3>
                <a href="<?= $base ?>services/gifts.php"><span class="lang-ar">هدايا دعائية</span><span class="lang-ar">Gifts & Giveaways</span></a>
              </h3>
            </div>
          </div>
          <div class="col-lg-4 col-md-6" data-aos="fade-up" data-aos-delay="100">
            <div class="service-card position-relative z-1">
              <div class="service-icon">
                <i class="bi bi-palette"></i>
              </div>
              <a href="<?= $base ?>services/logos.php" class="card-action d-flex align-items-center justify-content-center rounded-circle">
                <i class="bi bi-arrow-up-right"></i>
              </a>
              <h3>
                <a href="<?= $base ?>services/logos.php"><span class="lang-ar">تصميم شعارات</span><span class="lang-ar">logo & identity</span></a>
              </h3>
            </div>
          </div>
          <div class="col-lg-4 col-md-6" data-aos="fade-up" data-aos-delay="100">
            <div class="service-card position-relative z-1">
              <div class="service-icon">
                <i class="bi bi-megaphone"></i>
              </div>
              <a href="<?= $base ?>services/digital.php" class="card-action d-flex align-items-center justify-content-center rounded-circle">
                <i class="bi bi-arrow-up-right"></i>
              </a>
              <h3>
                <a href="<?= $base ?>services/digital.php"><span class="lang-ar">التسويق الرقمي</span><span class="lang-ar">Digital marketing</span></a>
              </h3>
            </div>
          </div>
          <div class="col-lg-4 col-md-6" data-aos="fade-up" data-aos-delay="100">
            <div class="service-card position-relative z-1">
              <div class="service-icon">
                <i class="bi bi-tools"></i>
              </div>
              <a href="<?= $base ?>services/laser.php" class="card-action d-flex align-items-center justify-content-center rounded-circle">
                <i class="bi bi-arrow-up-right"></i>
              </a>
              <h3>
                <a href="<?= $base ?>services/laser.php"><span class="lang-ar">الحفر بالليزر</span><span class="lang-ar">Laser engraving</span></a>
              </h3>
            </div>
          </div>
          <div class="col-lg-4 col-md-6" data-aos="fade-up" data-aos-delay="100">
            <div class="service-card position-relative z-1">
              <div class="service-icon">
                <i class="bi bi-signpost"></i>
              </div>
              <a href="<?= $base ?>services/Signs.php" class="card-action d-flex align-items-center justify-content-center rounded-circle">
                <i class="bi bi-arrow-up-right"></i>
              </a>
              <h3>
                <a href="<?= $base ?>services/Signs.php"><span class="lang-ar">يفط ولافتات</span><span class="lang-ar">Signs & Billboards</span></a>
              </h3>
            </div>
          </div>
          <div class="col-lg-4 col-md-6" data-aos="fade-up" data-aos-delay="100">
            <div class="service-card position-relative z-1">
              <div class="service-icon">
                <i class="bi bi-camera"></i>
              </div>
              <a href="<?= $base ?>services/photography.php" class="card-action d-flex align-items-center justify-content-center rounded-circle">
                <i class="bi bi-arrow-up-right"></i>
              </a>
              <h3>
                <a href="<?= $base ?>services/photography.php"><span class="lang-ar">التصوير الفوتغرافي</span><span class="lang-ar">Photography</span></a>
              </h3>
            </div>
          </div>
          <div class="col-lg-4 col-md-6" data-aos="fade-up" data-aos-delay="100">
            <div class="service-card position-relative z-1">
              <div class="service-icon">
                <i class="bi bi-laptop"></i>
              </div>
              <a href="<?= $base ?>services/websites.php" class="card-action d-flex align-items-center justify-content-center rounded-circle">
                <i class="bi bi-arrow-up-right"></i>
              </a>
              <h3>
                <a href="<?= $base ?>services/websites.php"><span class="lang-ar">تصميم المواقع</span><span class="lang-ar">Web Design</span></a>
              </h3>
            </div>
          </div>
        </div>

      </div>

    </section><!-- /Services Section -->
</main>

<?php include 'includes/social-float.php'; ?>
<?php include 'includes/footer.php'; ?>
<?php include 'includes/scripts.php'; ?>

</body>
</html>
