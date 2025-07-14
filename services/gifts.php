<!DOCTYPE html>
<html lang="ar" dir="rtl">

<?php
$pageTitle = "الهدايا الدعائية - Pixspot";
$pageDesc = "مجموعة متنوعة من الهدايا الدعائية المخصصة بشعار شركتك مثل الأقلام، الأكواب، والمنتجات الترويجية الأخرى.";
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
          <h1><span>هدايا دعائية</span></h1>
          <p>الهدايا هي طريقتنا للتعبير عن التقدير والاهتمام.</p>
          <p>في <span class="brand-title">Pixspot</span>، نعتبر الهدايا جزء أساسي من علاقتك بعملائك وشركائك، وعلشان كده بنقدّمها بأفكار متنوعة وتصاميم مبتكرة، تعكس مشاعرك بطريقة تناسب ذوقك وهُوية براندك.</p>
          <p>من الهدايا اللي بننفذها:</p>
          <p>مجموعات مكتبية – أجندات – مجّات – فلاشات – أقلام – ميداليات – تي شيرتات – كابات – ستيكرات – صناديق هدايا – نتائج حائط – ساعات حائط – هدايا موسمية – وغيرهم حسب الطلب.</p>
        </div>

        <!-- النص الإنجليزي -->
        <div class="lang-en mt-3">
          <h1><span>Gifts & Giveaways</span></h1>
          <p>Gifts show appreciation — giveaways create impact.</p>
          <p>At <span class="brand-title">Pixspot</span>, we create unique, custom-branded giveaways that leave a lasting impression and bring your brand closer to its audience.</p>
          <p>What we offer:</p>
          <p>Pens – Keychains – Mugs – T-shirts – Caps – Notebooks – Wall calendars – Wall clocks – Flash drives – Stickers – Gift boxes – and more. Customize your gift to perfectly match your brand!</p>
        </div>

      </div>
    </div>

    <!-- End Page Title -->

    <!-- Starter Section -->
    <section class="starter-section section">
      <div class="container section-title" data-aos="fade-up">
        <h2>شاهد أعمالنا</h2>
        <div><span>هدايا دعائية</span></div>
      </div>
        <div class="container">
          <div class="row services-gallery g-4">
            <?php foreach (glob(__DIR__ . "/../assets/img/portfolio/gifts/*.{jpg,jpeg,png,webp}", GLOB_BRACE) as $index => $imagePath): ?>
              <?php
                $imageName = basename($imagePath);
                $imageUrl = $base . "assets/img/portfolio/gifts/" . $imageName;
              ?>
              <div class="col-6 col-md-4 col-lg-3">
                <div class="image-card h-100 animate-on-load" style="animation-delay: <?= ($index * 100) ?>ms">
                  <a href="<?= $imageUrl ?>" class="glightbox d-block" data-gallery="gallery1">
                    <div class="image-wrapper">
                      <img src="<?= $imageUrl ?>" alt="هدايا دعائية" class="img-fluid">
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
