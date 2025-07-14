<!DOCTYPE html>
<html lang="ar" dir="rtl">

<?php
$pageTitle = "أعمالنا - Pixspot";
$pageDesc  = "استعرض بعضًا من مشاريع Pixspot السابقة في تصميم الشعارات، المطبوعات، المواقع، التسويق، وأكثر.";
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
        <h1><span>أعمالنا السابقة</span></h1>
        <p>في <span class="brand-title">بيكس سبوت</span>، كل مشروع بنفذه هو حكاية نجاح حقيقية، شاركنا فيها عملائنا من البداية للنهاية.</p>
        <p>اشتغلنا على تصميمات، حملات دعائية، هدايا، مواقع إلكترونية، والمزيد — وكل شغل بيحمل بصمتنا الخاصة.</p>
        <p>اتفرّج على بعض من شغلنا، وخد فكرة عن الجودة والاهتمام اللي بنقدمه في كل تفصيلة.</p>
      </div>

      <!-- النص الإنجليزي -->
      <div class="lang-en mt-3">
        <h1><span>Previous Work</span></h1>
        <p>At <span class="brand-title">Pixspot</span>, every project we deliver is a real success story — built hand-in-hand with our clients from start to finish.</p>
        <p>We’ve worked on designs, advertising campaigns, giveaways, websites, and more — each carrying our creative fingerprint.</p>
        <p>Take a look at some of our work and see the quality and care we bring to every detail.</p>
      </div>
    </div>
  </div>

  <!-- End Page Title -->

    <!-- Portfolio Section -->
<section id="portfolio" class="portfolio section">

  <!-- Section Title -->
  <div class="container section-title" data-aos="fade-up">
    <h2>أعمالنا</h2>
    <div><span>شاهد </span> <span class="description-title">أعمالنا السابقة</span></div>
  </div><!-- End Section Title -->

  <div class="container" data-aos="fade-up" data-aos-delay="100">
    <div class="isotope-layout" data-default-filter="*" data-layout="masonry" data-sort="original-order">

      <ul class="portfolio-filters isotope-filters" data-aos="fade-up" data-aos-delay="200">
        <li data-filter="*" class="filter-active">
          <i class="bi bi-grid-3x3-gap-fill"></i> جميع المشاريع
        </li>
        <li data-filter=".filter-ui">
          <i class="bi bi-signpost-split-fill"></i> يفط ولافتات 
        </li>
        <li data-filter=".filter-development">
          <i class="bi bi-gift-fill"></i> هدايا دعائية 
        </li>
        <li data-filter=".filter-photography">
          <i class="bi bi-tools"></i> الحفر بالليزر   
        </li>
        <li data-filter=".filter-marketing">
          <i class="bi bi-brush-fill"></i> تصميم شعارات
        </li>
        <li data-filter=".filter-prints">
          <i class="bi bi-printer"></i> مطبوعات
        </li>
        <li data-filter=".filter-photography2">
          <i class="bi bi-camera"></i> تصوير فوتوغرافي
        </li>
      </ul>

      <div class="row g-4 isotope-container" data-aos="fade-up" data-aos-delay="300">

        <?php
          $services = [
            'signs' => ['title' => 'يفط ولافتات', 'filter' => 'filter-ui'],
            'gifts' => ['title' => 'هدايا دعائية', 'filter' => 'filter-development'],
            'laser' => ['title' => 'حفر وتقطيع ليزر', 'filter' => 'filter-photography'],
            'logos' => ['title' => 'تصميم شعارات', 'filter' => 'filter-marketing'],
            'prints' => ['title' => 'مطبوعات', 'filter' => 'filter-prints'],
            'photography' => ['title' => 'تصوير فوتوغرافي', 'filter' => 'filter-photography2'],
          ];

          foreach ($services as $folder => $data) {
            $extensions = ['jpg', 'jpeg', 'png', 'webp'];
            $images = [];
            foreach ($extensions as $ext) {
              $images = array_merge($images, glob("assets/img/portfolio/$folder/*.$ext"));
            }
            if (empty($images)) continue;
            $firstImage = $images[0];
        ?>
        <div class="col-xl-3 col-lg-4 col-md-6 portfolio-item isotope-item <?= $data['filter'] ?>">
          <article class="portfolio-entry">
            <figure class="entry-image">
              <img src="<?= $firstImage ?>" class="img-fluid" alt="<?= $data['title'] ?>" loading="lazy">
              <div class="entry-overlay">
                <div class="overlay-content">
                  <h3 class="entry-title"><?= $data['title'] ?></h3>
                  <div class="entry-links">
                    <a href="<?= $firstImage ?>" class="glightbox" data-gallery="portfolio-gallery-<?= $folder ?>">
                      <i class="bi bi-arrows-angle-expand"></i>
                    </a>
                    <a href="<?= $base ?>services/<?= $folder ?>.php">
                      <i class="bi bi-arrow-right"></i>
                    </a>
                  </div>
                </div>
              </div>
            </figure>
          </article>
          <div style="display: none;">
            <?php foreach ($images as $index => $img): ?>
              <?php if ($index === 0) continue; ?>
              <a href="<?= $img ?>" class="glightbox" data-gallery="portfolio-gallery-<?= $folder ?>"></a>
            <?php endforeach; ?>
          </div>
        </div>
        <?php } ?>

      </div><!-- End Portfolio Container -->

    </div>

  </div>

</section>
<!-- /Portfolio Section -->
</main>

<?php include 'includes/social-float.php'; ?>
<?php include 'includes/footer.php'; ?>
<?php include 'includes/scripts.php'; ?>

</body>
</html>
