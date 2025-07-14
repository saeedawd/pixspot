<!DOCTYPE html>
<html lang="ar" dir="rtl">

<?php
$pageTitle = "تصميم المواقع الإلكترونية - Pixspot";
$pageDesc = "نصمم مواقع إلكترونية احترافية متوافقة مع الجوال، سريعة وآمنة، تناسب طبيعة عملك وتظهر على محركات البحث.";
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
      <h1><span>تصميم المواقع</span></h1>
      <p>في <span class="brand-title">بيكس سبوت</span>، بنصمم مواقع إلكترونية احترافية تجمع بين الشكل الجذاب والوظيفة السلسة.</p>
      <p>بنبدأ بتحليل نشاطك، واحتياجات جمهورك، وبنبني موقع يعبر عن هويتك ويحقق أهدافك التسويقية.</p>
      <p>✔ تصميم متجاوب لجميع الأجهزة</p>
      <p>✔ واجهة مستخدم سهلة وسريعة</p>
      <p>✔ تحسين لمحركات البحث (SEO)</p>
      <p>✔ تكامل مع وسائل التواصل والدفع الإلكتروني</p>
      <p>هدفنا مش بس موقع… هدفنا منصّة رقمية تعكس قوة براندك وتفتحلك أبواب جديدة للنجاح.</p>
      <br>

    </div>

    <!-- النص الإنجليزي -->
    <div class="lang-en mt-3">
      <h1><span>Web Design</span></h1>
      <p>At <span class="brand-title">Pixspot</span>, we design websites that are both visually stunning and functionally powerful.</p>
      <p>We start by understanding your business and audience, then build a digital platform that truly represents your brand and drives results.</p>
      <p>✔ Responsive design for all devices</p>
      <p>✔ Fast, user-friendly interface</p>
      <p>✔ SEO optimization</p>
      <p>✔ Social media & payment integrations</p>
      <p>We don’t just build websites — we create digital experiences that grow your brand and expand your reach.</p>
      <br>
    </div>

  </div>
</div>

    <!-- End Page Title -->

    <!-- Services Section -->
<section class="starter-section section">
  <div class="container section-title" data-aos="fade-up">
    <h2>تصميم المواقع</h2>
    <div><span>نقدم لك حلول رقمية متكاملة</span></div>
  </div>

<div class="container">
  <div class="row g-5 align-items-start">

    <!-- الكلام + الصور -->
    <div class="col-lg-6 d-flex flex-column justify-content-start">
    <div class="lang-ar">
      <h4>إيه اللي هتاخده لما تصمّم موقعك مع <span style="font-size: larger; color:#9e8e40">بيكس سبوت</span>؟</h4>
      <ul>
        <li>تصميم مميز يعبر عنك وعن براندك</li>
        <li>متجاوب مع كل الأجهزة (موبايل – تابلت – كمبيوتر)</li>
        <li>لوحة تحكم سهلة تخلّيك تدير كل حاجة بنفسك</li>
        <li>سرعة عالية وتجربة تصفح مريحة</li>
        <li>تهيئة لمحركات البحث علشان تظهر بسهولة</li>
        <li>دعم فني لو احتجت أي مساعدة</li>
      </ul>

      <h4 class="mt-4">بنصمّم مواقع من كل الأنواع:</h4>
      <ul>
        <li>مواقع الشركات والمكاتب</li>
        <li>متاجر إلكترونية بكل المزايا</li>
        <li>مدونات ومجلات رقمية</li>
        <li>صفحات هبوط لحملات إعلانية</li>
        <li>أنظمة حجز وإدارة خدمات</li>
      </ul>

      <h4>أيًا كان نشاطك، هنصمملك موقع يناسبك  </h4>
    </div>


      <!-- الصور بعد الكلام -->
      <div class="row services-gallery g-3 mt-3">
        <?php foreach (glob(__DIR__ . "/../assets/img/portfolio/Websites/*.{jpg,jpeg,png,webp}", GLOB_BRACE) as $index => $imagePath): ?>
          <?php
            $imageName = basename($imagePath);
            $imageUrl = $base . "assets/img/portfolio/Websites/" . $imageName;
          ?>
          <div class="col-6 col-md-4">
            <div class="image-card h-100 animate-on-load" style="animation-delay: <?= ($index * 100) ?>ms">
              <a href="<?= $imageUrl ?>" class="glightbox d-block" data-gallery="web-gallery">
                <div class="image-wrapper">
                  <img src="<?= $imageUrl ?>" alt="مشروع موقع وهمي" class="img-fluid">
                  <div class="overlay-icon">
                    <i class="bi bi-eye"></i>
                    <span>عرض المشروع</span>
                  </div>
                </div>
              </a>
            </div>
          </div>
        <?php endforeach; ?>
      </div>
    </div>

    <!-- الفيديو -->
    <div class="col-lg-6">
      <div class="image-card">
        <div class="image-wrapper">
          <video class="img-fluid rounded shadow w-100" autoplay muted loop playsinline style="max-height: 80%; object-fit: cover;">
            <source src="<?= $base ?>assets/img/portfolio/Websites/video-website.mp4" type="video/mp4">
            متصفحك لا يدعم تشغيل الفيديو.
          </video>
        </div>
      </div>
    </div>

  </div>
</div>


</section>

    <!-- End Services Section -->

  </main>

  <?php include '../includes/social-float.php'; ?>
  <?php include '../includes/footer.php'; ?>
  <?php include '../includes/scripts.php'; ?>
</body>
</html>
