<!DOCTYPE html>
<html lang="ar" dir="rtl">

<?php
$pageTitle = "  التصوير الفوتغرافي  - Pixspot";
$pageDesc = "نقدم في Pixspot خدمة تصوير احترافي للمنتجات، الأشخاص، والمناسبات بتقنيات حديثة وفريق عمل متخصص.";
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
          <h1><span>التصوير الفوتوغرافي</span></h1>
          <p>في <span class="brand-title">بيكس سبوت</span>، بنقدّم خدمات تصوير احترافية من خلال فريق من المصورين المتخصصين، وبنوفر لك كل عناصر النجاح البصري:</p>
          <p>✔ استوديو مجهز بالكامل بأحدث المعدات والإضاءة</p>
          <p>✔ أكتر من موقع تصوير مميز علشان تختار اللي يناسب براندك</p>
          <p>✔ تصوير كافة أنواع الفيديوهات (إعلاني – توثيقي – سوشيال ميديا)</p>
          <p>✔ إمكانية تأجير أماكن التصوير بأسعار مناسبة</p>
        </div>

        <!-- النص الإنجليزي -->
        <div class="lang-en mt-3">
          <h1><span>Photography</span></h1>
          <p>At <span class="brand-title">Pixspot</span>, we provide high-end photography and video services through a team of skilled professionals, offering:</p>
          <p>✔ A fully equipped studio with advanced gear and lighting</p>
          <p>✔ Multiple location options to match your brand style</p>
          <p>✔ All types of video production (commercial, documentary, social content)</p>
          <p>✔ Affordable studio rental for your shoots</p>
        </div>

      </div>
    </div>
    <!-- End Page Title -->

    <!-- Starter Section -->
    <section class="starter-section section">
      <div class="container section-title" data-aos="fade-up">
        <h2>شاهد أعمالنا</h2>
        <div><span>تصوير فوتوغرافي</span></div>
      </div>
        <div class="container">
          <div class="row services-gallery g-4">
            <?php foreach (glob(__DIR__ . "/../assets/img/portfolio/photography/*.{jpg,jpeg,png,webp}", GLOB_BRACE) as $index => $imagePath): ?>
              <?php
                $imageName = basename($imagePath);
                $imageUrl = $base . "assets/img/portfolio/photography/" . $imageName;
              ?>
              <div class="col-6 col-md-4 col-lg-3">
                <div class="image-card h-100 animate-on-load" style="animation-delay: <?= ($index * 100) ?>ms">
                  <a href="<?= $imageUrl ?>" class="glightbox d-block" data-gallery="gallery1">
                    <div class="image-wrapper">
                      <img src="<?= $imageUrl ?>" alt="تصوير فوتوغرافي" class="img-fluid" loading="lazy">
                      <div class="overlay-icon">
                        <i class="bi bi-eye"></i>
                        <span>عرض الصورة</span>
                      </div>
                    </div>
                  </a>
                </div>
              </div>
            <?php endforeach; ?>
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
