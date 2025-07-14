<!DOCTYPE html>
<html lang="ar" dir="rtl">

<?php
$pageTitle = " يفط ولافتات - Pixspot";
$pageDesc = "تصميم وتنفيذ لوحات إعلانية بجميع أنواعها: مضيئة، أكريليك، فليكس، وغيرها بجودة عالية وأسعار منافسة.";
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
          <h1><span>يفط ولافتات</span></h1>
          <p>في <span class="brand-title">بيكس سبوت</span>، بنقدّم جميع خدمات طباعة وتركيب اللافتات الإعلانية بكل الأشكال والأنواع، لأننا فريق متكامل من فنيين ومهندسين تركيب، تجهيز، وصيانة.</p>
          <p>أنواع الطباعة:</p>
          <p>فيلكس – بانر – فينيل – سى ثرو – إستانلس – نحاس – صاج – كلادينج – بلاستيك إكريليك – ليدات – لصق الفينيل بأنواعه المختلفة على واجهات الشركات، السيارات، والمحلات التجارية.</p>
        </div>

        <!-- النص الإنجليزي -->
        <div class="lang-en mt-3">
          <h1><span>Signs & Billboards</span></h1>
          <p>At <span class="brand-title">Pixspot</span>, we provide comprehensive services for printing and installing all types and shapes of advertising signs — backed by a fully equipped team of technicians and installation engineers.</p>
          <p>Printing types include:</p>
          <p>Flex – Banner – Vinyl – See-through – Stainless Steel – Brass – Sheet Metal – Cladding – Acrylic Plastic – LEDs – Vinyl wrapping for storefronts, vehicles, and commercial facades.</p>
        </div>

      </div>
    </div>

    <!-- End Page Title -->

    <!-- Starter Section -->
    <section class="starter-section section">
      <div class="container section-title" data-aos="fade-up">
        <h2>شاهد أعمالنا</h2>
        <div><span>يفط ولافتات</span></div>
      </div>
        <div class="container">
          <div class="row services-gallery g-4">
            <?php foreach (glob(__DIR__ . "/../assets/img/portfolio/signs/*.{jpg,jpeg,png,webp}", GLOB_BRACE) as $index => $imagePath): ?>
              <?php
                $imageName = basename($imagePath);
                $imageUrl = $base . "assets/img/portfolio/signs/" . $imageName;
              ?>
              <div class="col-6 col-md-4 col-lg-3">
                <div class="image-card h-100 animate-on-load" style="animation-delay: <?= ($index * 100) ?>ms">
                  <a href="<?= $imageUrl ?>" class="glightbox d-block" data-gallery="gallery1">
                    <div class="image-wrapper">
                      <img src="<?= $imageUrl ?>" alt="يفط ولافتات" class="img-fluid">
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
