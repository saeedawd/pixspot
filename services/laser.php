<!DOCTYPE html>
<html lang="ar" dir="rtl">

<?php
$pageTitle = "الحفر بالليزر - Pixspot";
$pageDesc = "خدمة حفر بالليزر دقيقة واحترافية على الخشب، الأكريليك، المعادن، والمزيد لأغراض دعائية أو صناعية.";
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
          <h1><span>الحفر بالليزر</span></h1>
          <p>في <span class="brand-title">Pixspot</span> بنقدّم مجموعة مميزة من خدمات الحفر والتقطيع بالليزر، وتنفيذ الدروع التقديرية واليفط الإرشادية بدقة عالية وجودة احترافية، على مختلف أنواع الخامات غير المعدنية.</p>
          <p>بنشتغل على خامات زي:</p>
          <p>أكريليك – خشب – جلد – زجاج – كريستال – بلاستيك</p>
        </div>

        <!-- النص الإنجليزي -->
        <div class="lang-en mt-3">
          <h1><span>Laser Engraving</span></h1>
          <p>At <span class="brand-title">Pixspot</span>, we offer high-precision laser cutting and engraving services, along with custom-made awards and directional signs — all crafted with exceptional quality on a variety of non-metal materials.</p>
          <p>Materials we work with:</p>
          <p>Acrylic – Wood – Leather – Glass – Crystal – Plastic</p>
        </div>

      </div>
    </div>

    <!-- End Page Title -->

    <!-- Starter Section -->
    <section class="starter-section section">
      <div class="container section-title" data-aos="fade-up">
        <h2>شاهد أعمالنا</h2>
        <div><span>الحفر بالليزر</span></div>
      </div>
        <div class="container">
          <div class="row services-gallery g-4">
            <?php foreach (glob(__DIR__ . "/../assets/img/portfolio/laser/*.{jpg,jpeg,png,webp}", GLOB_BRACE) as $index => $imagePath): ?>
              <?php
                $imageName = basename($imagePath);
                $imageUrl = $base . "assets/img/portfolio/laser/" . $imageName;
              ?>
              <div class="col-6 col-md-4 col-lg-3">
                <div class="image-card h-100 animate-on-load" style="animation-delay: <?= ($index * 100) ?>ms">
                  <a href="<?= $imageUrl ?>" class="glightbox d-block" data-gallery="gallery1">
                    <div class="image-wrapper">
                      <img src="<?= $imageUrl ?>" alt="حفر وتقطيع ليزر" class="img-fluid">
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
