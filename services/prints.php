<!DOCTYPE html>
<html lang="ar" dir="rtl">

  <?php
  $pageTitle = "تصميم المطبوعات - Pixspot";
  $pageDesc = "خدمة تصميم المطبوعات من Pixspot تشمل بروشورات، فواتير، كروت شخصية، فولدرات، وكل ما تحتاجه من مطبوعات دعائية بأعلى جودة.";
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
          <h1><span>المطبوعات</span></h1>
          <p>بنوفّر لك كل أنواع <span class="brand-title">المطبوعات الدعائية</span> بأعلى جودة، وتصميم مميز ومختلف يعبر عن براندك.</p>
          <p>من ضمن خدماتنا:</p>
          <p>فلاير – بروشور – بوسترات – رول أب – أجندات – كروت – قوائم طعام – مجلات – تغليف مخصص للمطاعم والمتاجر.</p>
        </div>

        <!-- النص الإنجليزي -->
        <div class="lang-en mt-3">
          <h1><span>Printing</span></h1>
          <p>We provide all types of <span class="brand-title">promotional prints</span> with top quality and unique designs that reflect your brand identity.</p>
          <p>Our services include:</p>
          <p>Flyers – Brochures – Posters – Roll-ups – Agendas – Cards – Menus – Magazines – Custom packaging for restaurants and shops.</p>
        </div>
      </div>
    </div>
    <!-- End Page Title -->

    <!-- Starter Section -->
    <section class="starter-section section">
      <div class="container section-title" data-aos="fade-up">
        <h2>شاهد أعمالنا</h2>
        <div><span>المطبوعات</span></div>
      </div>
        <div class="container">
          <div class="row services-gallery g-4">
            <?php foreach (glob(__DIR__ . "/../assets/img/portfolio/prints/*.{jpg,jpeg,png,webp}", GLOB_BRACE) as $index => $imagePath): ?>
              <?php
                $imageName = basename($imagePath);
                $imageUrl = $base . "assets/img/portfolio/prints/" . $imageName;
              ?>
              <div class="col-6 col-md-4 col-lg-3">
                <div class="image-card h-100 animate-on-load" style="animation-delay: <?= ($index * 100) ?>ms">
                  <a href="<?= $imageUrl ?>" class="glightbox d-block" data-gallery="gallery1">
                    <div class="image-wrapper">
                      <img src="<?= $imageUrl ?>" alt="المطبوعات" class="img-fluid">
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
