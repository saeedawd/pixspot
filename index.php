<!DOCTYPE html>
<html lang="ar" dir="rtl">

<?php
$pageTitle = "Pixspot - شركة دعاية وإعلان متكاملة";
$pageDesc  = "نحن في Pixspot نقدم خدمات تصميم وطباعة احترافية تشمل الشعارات، المواقع، المطبوعات، اللوحات، التسويق، الهدايا وغيرها.";
include('includes/head.php');
?>

<body class="index-page" >

<?php include 'includes/header.php'; ?>

  <main class="main">

    <!-- Hero Section -->
    <section id="hero" class="hero section">
      <div class="container">
        <div class="row">
          <!-- النصوص -->
          <div class="col-lg-7 content-col" data-aos="fade-up">
            <div class="content">
              <div class="main-heading">
                <h1>Pixspot</h1>
              </div>

              <div class="divider"></div>

              <!-- النص العربي -->
              <div class="description lang-ar" style="direction: rtl; text-align: right; margin-bottom: 30px;">
                <p><span class="brand-title">Pixspot</span> هي شركة دعاية وإعلان تأسست عام 2025، بخبرة عملية تمتد لأكثر من 13 عامًا في مجالات الإعلان، التصميم، التسويق الرقمي، وخدمات الطباعة بكافة أنواعها.</p>
                <p>نُقدّم حلولًا احترافية ومتكاملة من مكان واحد، تشمل كل ما تحتاجه علامتك التجارية من بداية الفكرة، وتصميم الهوية، وحتى التنفيذ بأعلى جودة.</p>
                <p>في <span class="brand-title">Pixspot</span>، نؤمن بأن كل علامة تجارية لها قصة تستحق أن تُروى بأسلوب يليق بها.</p>
                <p>نفتخر بأننا شركاء نجاح لعشرات الشركات في مجالات متنوعة، ونعمل دائمًا على إبراز البراند الخاص بك بطريقة احترافية، مبتكرة، وفعالة في السوق.</p>
              </div>

              <!-- النص الإنجليزي -->
              <div class="description lang-en" style="direction: ltr; text-align: left;">
                <p><span class="brand-title">Pixspot</span> is a creative advertising agency established in 2025, backed by over 13 years of hands-on experience in advertising, design, digital marketing, and all types of printing services.</p>
                <p>We offer professional, all-in-one solutions that cover everything your brand needs — from concept creation and brand identity design to high-quality execution.</p>
                <p>At <span class="brand-title">Pixspot</span>, we believe every brand has a story worth telling — and we make sure it’s told in the most impactful and professional way.</p>
                <p>We’re proud to be trusted partners for a wide range of companies across various industries, with one clear goal: to make your brand stand out in the market.</p>
              </div>

              <div class="cta-button mt-4">
                <a href="<?= $base ?>service-details.php" class="btn">
                  <span>استكشف الخدمات</span>
                </a>
              </div>
            </div>
          </div>

          <!-- الصورة -->
          <div class="col-lg-5" data-aos="zoom-out">
            <div class="visual-content">
              <div class="fluid-shape">
                <img src="assets/img/abstract/abstract.png" alt="Abstract Fluid Shape" class="fluid-img">
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>
    <!-- /Hero Section -->


    <!-- About Section -->
    <!-- <section id="about" class="about section">
      <div class="container section-title" data-aos="fade-up">
        <h2>من نحن</h2>
        <div><span>إعرف المزيد</span> <span class="description-title">عن شركتنا</span></div>
      </div>
      <div class="container">

        <div class="row gx-5 align-items-center">
          <div class="col-lg-6" data-aos="fade-right" data-aos-delay="200">
            <div class="about-image position-relative">
              <img src="assets/img/about/about-portrait-1.webp" class="img-fluid rounded-4 shadow-sm" alt="About Image" loading="lazy">
              <div class="experience-badge">
                <span class="years">13+</span>
                <span class="text">سنة خبرة</span>
              </div>
            </div>
          </div>

          <div class="col-lg-6 mt-4 mt-lg-0" data-aos="fade-left" data-aos-delay="300">
            <div class="about-content">
              <h2>نرتقي بأداء الأعمال من خلال الابتكار</h2>
              <p class="lead">نركز على وضع استراتيجيات مخصصة تحقق نتائج ملموسة لعملائنا</p>
              <p>من خلال التحليل المتقدم وحل المشكلات الإبداعي، نمكن المؤسسات من النجاح في الأسواق المتغيرة بسرعة</p>

              <div class="row g-4 mt-3">
                <div class="col-md-6" data-aos="zoom-in" data-aos-delay="400">
                  <div class="feature-item">
                    <i class="bi bi-check-circle-fill"></i>
                    <h5>دعم فريق متخصص</h5>
                    <p>محترفون ملتزمون بتقديم خدمة شخصية وحلول فعالة في كل مشروع</p>
                  </div>
                </div>
                <div class="col-md-6" data-aos="zoom-in" data-aos-delay="450">
                  <div class="feature-item">
                    <i class="bi bi-lightbulb-fill"></i>
                    <h5>نهج مبتكر</h5>
                    <p>نستخدم منهجيات حديثة لتطوير إستراتيجيات فريدة تحقق النجاح الدائم</p>
                  </div>
                </div>
              </div>

            <a href="<?= $base ?>service-details.php" class="btn btn-primary mt-4">إستكشف خدماتنا</a>
            </div>
          </div>
        </div>
      </div>
    </section> -->
    <!-- About Section -->

    <!-- Services Section -->
    <section id="services" class="services section">

      <!-- Section Title -->
      <div class="container section-title" data-aos="fade-up">
        <h2>الخدمات</h2>
        <div><span>تعرف علي خدماتنا </span> <span class="description-title lang-en">- our services</span></div>
      </div><!-- End Section Title -->

      <div class="container" data-aos="fade-up" data-aos-delay="100">

        <div class="service-header">
          <div class="row align-items-center">
            <div class="col-lg-8 col-md-12">
              <div class="service-intro">
                <h2 class="service-heading">
                  <div>حلول أعمال مبتكرة</div>
                  <div><span>لتطوير الأداء</span></div>
                </h2>
              </div>
            </div>
            <div class="col-lg-4 col-md-12">
              <div class="service-summary">
                <p>
                  ندمج الاستراتيجيات الحديثة والأساليب الإبداعية والتقنيات المتطورة لنقدم تجارب استثنائية تعزز النمو وتجذب الأسواق المستهدفة
                </p>
                <a href="<?= $base ?>service-details.php" class="service-btn">عرض جميع الخدمات</a>
              </div>
            </div>
          </div>
        </div>

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

        </div>

      </div>

    </section><!-- /Services Section -->

    <!-- Steps Section -->
    <section id="steps" class="steps section">

      <!-- Section Title -->
      <div class="container section-title" data-aos="fade-up">
        <h2>الخطوات</h2>
        <div><span>كيف</span> <span class="description-title">نعمل</span></div>
      </div><!-- End Section Title -->

      <div class="container" data-aos="fade-up" data-aos-delay="100">

        <div class="steps-wrapper">

          <div class="step-item" data-aos="fade-right" data-aos-delay="200">
            <div class="step-content">
              <div class="step-icon">
                <i class="bi bi-lightbulb"></i>
              </div>
              <div class="step-info">
                <span class="step-number">الخطوة الأولي</span>
                <h3>الإستشارة الأولية</h3>
                <p>نجري جلسات إكتشاف شاملة لفهم متطلباتك وأهدافك. يقوم فريقنا بتحليل احتياجاتك لوضع خطة مخصصة.</p>
              </div>
            </div>
          </div><!-- End Step Item -->

          <div class="step-item" data-aos="fade-left" data-aos-delay="300">
            <div class="step-content">
              <div class="step-icon">
                <i class="bi bi-gear"></i>
              </div>
              <div class="step-info">
                <span class="step-number">الخطوة الثانية</span>
                <h3>التخطيط والاستراتيجية</h3>
                <p>نطور استراتيجيات شاملة وخطط مشاريع مفصلة بناءً على الاستشارة الأولية مع تحديد معالم واضحة.</p>
              </div>
            </div>
          </div><!-- End Step Item -->

          <div class="step-item" data-aos="fade-right" data-aos-delay="400">
            <div class="step-content">
              <div class="step-icon">
                <i class="bi bi-bar-chart"></i>
              </div>
              <div class="step-info">
                <span class="step-number">الخطوة الثالثة</span>
                <h3>مرحلة التنفيذ</h3>
                <p>تنفيذ الخطط بدقة ومرونة مع التواصل المستمر وتقديم تقارير تقدم العمل.</p>
              </div>
            </div>
          </div><!-- End Step Item -->

          <div class="step-item" data-aos="fade-left" data-aos-delay="500">
            <div class="step-content">
              <div class="step-icon">
                <i class="bi bi-check2-circle"></i>
              </div>
              <div class="step-info">
                <span class="step-number">الخطوة الرابعة</span>
                <h3>الإطلاق والدعم</h3>
                <p>ضمان إطلاق سلس وتقديم دعم مستمر مع مراقبة الأداء وإجراء التعديلات اللازمة.</p>
              </div>
            </div>
          </div><!-- End Step Item -->

        </div>

      </div>

    </section><!-- /Steps Section -->

    <!-- Portfolio Section -->
    <section id="portfolio" class="portfolio section">


      <!-- Section Title -->
      <div class="container section-title" data-aos="fade-up">
        
        <h2>أعمالنا</h2>
        <div><span>شاهد </span> <span class="description-title">أعمالنا</span></div>
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
          </ul>

          <div class="row g-4 isotope-container" data-aos="fade-up" data-aos-delay="300">

            <?php
              $extensions = ['jpg', 'jpeg', 'png', 'webp'];
              $images = [];
              foreach ($extensions as $ext) {
                $images = array_merge($images, glob("assets/img/portfolio/signs/*.$ext"));
              }  
              $firstImage = $images[0];
            ?>
            <div class="col-xl-3 col-lg-4 col-md-6 portfolio-item isotope-item filter-ui">
              <article class="portfolio-entry">
                <figure class="entry-image">
                  <img src="<?= $firstImage ?>" class="img-fluid" alt="يفط ولافتات" loading="lazy">
                  <div class="entry-overlay">
                    <div class="overlay-content">
                      <h3 class="entry-title">يفط ولافتات</h3>
                      <div class="entry-links">
                        <!-- الصورة الأساسية -->
                        <a href="<?= $firstImage ?>" class="glightbox" data-gallery="portfolio-gallery-ui">
                          <i class="bi bi-arrows-angle-expand"></i>
                        </a>
                        <a href="<?= $base ?>services/Signs.php">
                          <i class="bi bi-arrow-right"></i>
                        </a>
                      </div>
                    </div>
                  </div>
                </figure>
              </article>
              <div style="display: none;">
                <?php foreach ($images as $index => $img): ?>
                  <?php if ($index === 0) continue;  ?>
                  <a href="<?= $img ?>" class="glightbox" data-gallery="portfolio-gallery-ui"></a>
                <?php endforeach; ?>
              </div>
            </div>

            <?php
              $extensions = ['jpg', 'jpeg', 'png', 'webp'];
              $images = [];
              foreach ($extensions as $ext) {
                $images = array_merge($images, glob("assets/img/portfolio/gifts/*.$ext"));
              }  
              $firstImage = $images[0];
            ?>
            <div class="col-xl-3 col-lg-4 col-md-6 portfolio-item isotope-item filter-development">
              <article class="portfolio-entry">
                <figure class="entry-image">
                  <img src="<?= $firstImage ?>" class="img-fluid" alt="" loading="lazy">
                  <div class="entry-overlay">
                    <div class="overlay-content">
                      <h3 class="entry-title">هدايا دعائية</h3>
                      <div class="entry-links">
                        <!-- الصورة الأساسية -->
                        <a href="<?= $firstImage?>" class="glightbox" data-gallery="portfolio-gallery-development">
                          <i class="bi bi-arrows-angle-expand"></i>
                        </a>
                        <a href="<?= $base ?>services/gifts.php">
                          <i class="bi bi-arrow-right"></i>
                        </a>
                      </div>
                    </div>
                  </div>
                </figure>
              </article>
              <div style="display: none;">
                <?php foreach ($images as $index => $img): ?>
                  <?php if ($index === 0) continue;  ?>
                  <a href="<?= $img ?>" class="glightbox" data-gallery="portfolio-gallery-development"></a>
                <?php endforeach; ?>
              </div>
            </div><!-- End Portfolio Item -->

            <?php
              $extensions = ['jpg', 'jpeg', 'png', 'webp'];
              $images = [];
              foreach ($extensions as $ext) {
                $images = array_merge($images, glob("assets/img/portfolio/laser/*.$ext"));
              }  
              $firstImage = $images[0];
            ?>
            <div class="col-xl-3 col-lg-4 col-md-6 portfolio-item isotope-item filter-photography">
              <article class="portfolio-entry">
                <figure class="entry-image">
                  <img src="<?= $firstImage ?>" class="img-fluid" alt="" loading="lazy">
                  <div class="entry-overlay">
                    <div class="overlay-content">
                      <h3 class="entry-title">حفر وتقطيع ليزر</h3>
                      <div class="entry-links">
                        <!-- الصورة الأساسية -->
                        <a href="<?= $firstImage?>" class="glightbox" data-gallery="portfolio-gallery-photography">
                          <i class="bi bi-arrows-angle-expand"></i>
                        </a>
                        <a href="<?= $base ?>services/laser.php">
                          <i class="bi bi-arrow-right"></i>
                        </a>
                      </div>
                    </div>
                  </div>
                </figure>
              </article>
              <div style="display: none;">
                <?php foreach ($images as $index => $img): ?>
                  <?php if ($index === 0) continue;  ?>
                  <a href="<?= $img ?>" class="glightbox" data-gallery="portfolio-gallery-photography"></a>
                <?php endforeach; ?>
              </div>
            </div><!-- End Portfolio Item -->

            <?php
              $extensions = ['jpg', 'jpeg', 'png', 'webp'];
              $images = [];
              foreach ($extensions as $ext) {
                $images = array_merge($images, glob("assets/img/portfolio/logos/*.$ext"));
              }  
              $firstImage = $images[0];
            ?>
            <div class="col-xl-3 col-lg-4 col-md-6 portfolio-item isotope-item filter-marketing">
              <article class="portfolio-entry">
                <figure class="entry-image">
                  <img src="<?= $firstImage ?>" class="img-fluid" alt="" loading="lazy">
                  <div class="entry-overlay">
                    <div class="overlay-content">
                      <h3 class="entry-title">تصميم شعارات</h3>
                      <div class="entry-links">
                        <a href="<?= $firstImage ?>" class="glightbox" data-gallery="portfolio-gallery-marketing" >
                          <i class="bi bi-arrows-angle-expand"></i>
                        </a>
                        <a href="<?= $base ?>services/logos.php">
                          <i class="bi bi-arrow-right"></i>
                        </a>
                      </div>
                    </div>
                  </div>
                </figure>
              </article>
              <div style="display: none;">
                <?php foreach ($images as $index => $img): ?>
                  <?php if ($index === 0) continue;  ?>
                  <a href="<?= $img ?>" class="glightbox" data-gallery="portfolio-gallery-marketing"></a>
                <?php endforeach; ?>
              </div> 
            </div><!-- End Portfolio Item -->

          </div><!-- End Portfolio Container -->

        </div>

      </div>

    </section><!-- /Portfolio Section -->


    <!-- Faq Section -->
    <section class="faq-9 faq section" id="faq">
      <div class="container rounded-4 p-4 px-md-5 prints-main-box" data-aos="fade-up" data-aos-delay="100">
        <div class="row">

          <div class="col-lg-5" data-aos="fade-up">
            <h2 class="faq-title">هل لديك سؤال؟ اطلع على الأسئلة الشائعة</h2>
            <p class="faq-description">نقدم إجابات لأكثر الأسئلة شيوعاً حول خدماتنا.</p>
            <div class="faq-arrow d-none d-lg-block" data-aos="fade-up" data-aos-delay="200">
              <svg class="faq-arrow" width="200" height="211" viewBox="0 0 200 211" fill="none" xmlns="http://www.w3.org/2000/svg" style="transform:scaleX(-1);">
                <path d="M198.804 194.488C189.279 189.596 179.529 185.52 169.407 182.07L169.384 182.049C169.227 181.994 169.07 181.939 168.912 181.884C166.669 181.139 165.906 184.546 167.669 185.615C174.053 189.473 182.761 191.837 189.146 195.695C156.603 195.912 119.781 196.591 91.266 179.049C62.5221 161.368 48.1094 130.695 56.934 98.891C84.5539 98.7247 112.556 84.0176 129.508 62.667C136.396 53.9724 146.193 35.1448 129.773 30.2717C114.292 25.6624 93.7109 41.8875 83.1971 51.3147C70.1109 63.039 59.63 78.433 54.2039 95.0087C52.1221 94.9842 50.0776 94.8683 48.0703 94.6608C30.1803 92.8027 11.2197 83.6338 5.44902 65.1074C-1.88449 41.5699 14.4994 19.0183 27.9202 1.56641C28.6411 0.625793 27.2862 -0.561638 26.5419 0.358501C13.4588 16.4098 -0.221091 34.5242 0.896608 56.5659C1.8218 74.6941 14.221 87.9401 30.4121 94.2058C37.7076 97.0203 45.3454 98.5003 53.0334 98.8449C47.8679 117.532 49.2961 137.487 60.7729 155.283C87.7615 197.081 139.616 201.147 184.786 201.155L174.332 206.827C172.119 208.033 174.345 211.287 176.537 210.105C182.06 207.125 187.582 204.122 193.084 201.144C193.346 201.147 195.161 199.887 195.423 199.868C197.08 198.548 193.084 201.144 195.528 199.81C196.688 199.192 197.846 198.552 199.006 197.935C200.397 197.167 200.007 195.087 198.804 194.488ZM60.8213 88.0427C67.6894 72.648 78.8538 59.1566 92.1207 49.0388C98.8475 43.9065 106.334 39.2953 114.188 36.1439C117.295 34.8947 120.798 33.6609 124.168 33.635C134.365 33.5511 136.354 42.9911 132.638 51.031C120.47 77.4222 86.8639 93.9837 58.0983 94.9666C58.8971 92.6666 59.783 90.3603 60.8213 88.0427Z" fill="currentColor"></path>
              </svg>
            </div>
          </div>

          <div class="col-lg-7" data-aos="fade-up" data-aos-delay="300">
            <div class="faq-container">

              <div class="faq-item faq-active">
                <h3>ما هي سياسة الخصوصية الخاصة بكم؟</h3>
                <div class="faq-content">
                  <p>نحن نحترم خصوصيتك ونعمل بجد لحماية معلوماتك الشخصية.</p>
                </div>
                <i class="faq-toggle bi bi-chevron-right"></i>
              </div><!-- End Faq item-->

              <div class="faq-item">
                <h3>كيف يمكنني التواصل معكم؟</h3>
                <div class="faq-content">
                  <p>يمكنك التواصل معنا  من خلال البريد الإلكتروني أو الهاتف أو مقابلتنا بمقر الشركة .</p>
                </div>
                <i class="faq-toggle bi bi-chevron-right"></i>
              </div><!-- End Faq item-->

              <div class="faq-item">
                <h3>ما هي طرق الدفع المقبولة؟</h3>
                <div class="faq-content">
                  <p>نقبل مجموعة متنوعة من طرق الدفع، بما في ذلك بطاقات الائتمان،  والتحويلات البنكية.</p>
                </div>
                <i class="faq-toggle bi bi-chevron-right"></i>
              </div><!-- End Faq item-->

              <div class="faq-item">
                <h3>هل تقدمون ضمانًا على خدماتكم؟</h3>
                <div class="faq-content">
                  <p>نعم، نحن نقدم ضمانًا للرضا عن خدماتنا. إذا لم تكن راضيًا، سنعمل على تصحيح ذلك.</p>
                </div>
                <i class="faq-toggle bi bi-chevron-right"></i>
              </div><!-- End Faq item-->

              <div class="faq-item">
                <h3>كيف يمكنني تتبع تقدم مشروعي؟</h3>
                <div class="faq-content">
                  <p>سنقدم لك تحديثات منتظمة حول تقدم مشروعك، ويمكنك أيضًا الاتصال بنا في أي وقت للاستفسار.</p>
                </div>
                <i class="faq-toggle bi bi-chevron-right"></i>
              </div><!-- End Faq item-->

            </div>
          </div>

        </div>
      </div>
    </section><!-- /Faq Section -->

    <!-- Contact Section -->
    <section id="contact" class="contact section">

      <!-- Section Title -->
      <div class="container section-title" data-aos="fade-up">
        <h2>تواصل معنا</h2>
        <div><span>لنبدأ</span> <span class="description-title">التواصل</span></div>
      </div><!-- End Section Title -->

      <div class="container" data-aos="fade-up" data-aos-delay="100">

        <!-- Contact Info Boxes -->
        <div class="row gy-4 mb-5">
          <div class="col-lg-4" data-aos="fade-up" data-aos-delay="100">
            <div class="contact-info-box">
              <div class="icon-box">
                <i class="bi bi-geo-alt"></i>
              </div>
              <div class="info-content">
                <h4>عنواننا</h4>
                  <p>٣ ش ابراهيم عثمان متفرع من شارع الهرم الرئيسى أمام مسجد السلام</p>
                </div>
            </div>
          </div>

          <div class="col-lg-4" data-aos="fade-up" data-aos-delay="200">
            <div class="contact-info-box">
              <div class="icon-box">
                <i class="bi bi-envelope"></i>
              </div>
              <div class="info-content">
                <h4>البريد الإلكتروني</h4>
                <p>pixspot1@gmail.com</p>
              </div>
            </div>
          </div>

          <div class="col-lg-4" data-aos="fade-up" data-aos-delay="300">
            <div class="contact-info-box">
              <div class="icon-box">
                <i class="bi bi-headset"></i>
              </div>
              <div class="info-content">
                <h4>ساعات العمل</h4>
                <p>السبت -الخميس 9 صباحاَ حتي 9 مساءا</p>
              </div>
            </div>
          </div>
        </div>

      </div>
    </section><!-- /Contact Section -->

  </main>

<?php include 'includes/social-float.php'; ?>
<?php include 'includes/footer.php'; ?>
<?php include 'includes/scripts.php'; ?>


</body>

</html>