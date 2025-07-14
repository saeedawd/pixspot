<!DOCTYPE html>
<html lang="ar" dir="rtl">

<?php
$pageTitle = "تصميم الشعارات - Pixspot";
$pageDesc = "تصميم لوجوهات احترافية تعبر عن هوية شركتك بأسلوب إبداعي ومميز يجذب جمهورك المستهدف.";
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
          <h1><span>تصميم شعارات</span></h1>
          <p>في <span class="brand-title">Pixspot</span>، إحنا مش بس بنصمّم، إحنا بنخلق طابع خاص يعبر عنك وعن منتجك.</p>
          <p>بنبدأ بدراسة متكاملة لنشاطك، جمهورك، واهتماماتهم، ومن خلالها بنبني علامة بصرية قوية تخلّي اسمك يبان، ويثبت وجوده وسط المنافسين.</p>
          <p>هدفنا إن الهوية تكون:</p>
          <p>✔ واضحة<br>✔ مميزة<br>✔ ومتناسقة مع شخصية براندك</p>
        </div>

        <!-- النص الإنجليزي -->
        <div class="lang-en mt-3">
          <h1><span>Brand Identity</span></h1>
          <p>At <span class="brand-title">Pixspot</span>, we don’t just design — we create a visual personality that reflects you and your product.</p>
          <p>We begin with in-depth research on your business, your audience, and what makes you unique, then craft a powerful identity that sets your name apart in a competitive market.</p>
          <p>Our goal is to deliver an identity that is:</p>
          <p>✔ Clear<br>✔ Memorable<br>✔ And aligned with your brand’s voice</p>
        </div>

      </div>
    </div>
    <!-- End Page Title -->

    <!-- Starter Section -->
    <section class="starter-section section">
      <div class="container section-title" data-aos="fade-up">
        <h2>شاهد أعمالنا</h2>
        <div><span>تصميم شعارات</span></div>
      </div>
        <div class="container">
          <div class="row services-gallery g-4">
            <?php foreach (glob(__DIR__ . "/../assets/img/portfolio/logos/*.{jpg,jpeg,png,webp}", GLOB_BRACE) as $index => $imagePath): ?>
              <?php
                $imageName = basename($imagePath);
                $imageUrl = $base . "assets/img/portfolio/logos/" . $imageName;
              ?>
              <div class="col-6 col-md-4 col-lg-3">
                <div class="image-card h-100 animate-on-load" style="animation-delay: <?= ($index * 100) ?>ms">
                  <a href="<?= $imageUrl ?>" class="glightbox d-block" data-gallery="gallery1">
                    <div class="image-wrapper">
                      <img src="<?= $imageUrl ?>" alt="تصميم شعارات" class="img-fluid">
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
