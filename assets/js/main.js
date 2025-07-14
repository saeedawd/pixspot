/**
* Template Name: Strategy
* Template URL: https://bootstrapmade.com/strategy-bootstrap-agency-template/
* Updated: Jun 06 2025 with Bootstrap v5.3.6
* Author: BootstrapMade.com
* License: https://bootstrapmade.com/license/
*/

// لف الكود كله داخل دالة واحدة لسهولة الاستدعاء
(function() {
  "use strict";

  // دالة التهيئة الرئيسية التي تحتوي على كل التفاعليات
  window.initTemplateFunctions = function() { // جعلها متاحة عالميًا

    /**
     * Apply .scrolled class to the body as the page is scrolled down
     */
    function toggleScrolled() {
      const selectBody = document.querySelector('body');
      const selectHeader = document.querySelector('#header');
      if (!selectHeader || (!selectHeader.classList.contains('scroll-up-sticky') && !selectHeader.classList.contains('sticky-top') && !selectHeader.classList.contains('fixed-top'))) return;
      window.scrollY > 100 ? selectBody.classList.add('scrolled') : selectBody.classList.remove('scrolled');
    }

    // إزالة الـlisteners القديمة قبل إضافة الجديدة لمنع التكرار
    document.removeEventListener('scroll', toggleScrolled);
    window.removeEventListener('load', toggleScrolled); // غالبًا غير ضروري هنا لو initTemplateFunctions بتستدعى بعد اللود

    document.addEventListener('scroll', toggleScrolled);
    // window.addEventListener('load', toggleScrolled); // هذا سيتم استدعاؤه من AJAX بعد تحميل المحتوى
    toggleScrolled(); // استدعاء فوري عند التهيئة

    /**
     * Mobile nav toggle
     */
    const mobileNavToggleBtn = document.querySelector('.mobile-nav-toggle');

    function mobileNavToogle() {
      document.querySelector('body').classList.toggle('mobile-nav-active');
      mobileNavToggleBtn.classList.toggle('bi-list');
      mobileNavToggleBtn.classList.toggle('bi-x');
    }
    if (mobileNavToggleBtn) {
      mobileNavToggleBtn.removeEventListener('click', mobileNavToogle); // منع التكرار
      mobileNavToggleBtn.addEventListener('click', mobileNavToogle);
    }

    /**
     * Hide mobile nav on same-page/hash links
     */
    document.querySelectorAll('#navmenu a').forEach(navmenu => {
      navmenu.removeEventListener('click', () => { /* remove prev */ }); // منع التكرار
      navmenu.addEventListener('click', () => {
        if (document.querySelector('.mobile-nav-active')) {
          mobileNavToogle();
        }
      });
    });

    /**
     * Toggle mobile nav dropdowns
     */
    document.querySelectorAll('.navmenu .toggle-dropdown').forEach(navmenu => {
      navmenu.removeEventListener('click', function(e) { /* remove prev */ }); // منع التكرار
      navmenu.addEventListener('click', function(e) {
        e.preventDefault();
        this.parentNode.classList.toggle('active');
        this.parentNode.nextElementSibling.classList.toggle('dropdown-active');
        e.stopImmediatePropagation();
      });
    });

    /**
     * Preloader - هذا الجزء سيتم إدارته بواسطة AJAX بشكل رئيسي
     * ولكن قد يحتاج إلى إزالة العناصر القديمة لو تم تحميلها من قبل
     */
    const preloader = document.querySelector('#preloader');
    if (preloader) {
      // إذا كان الـpreloader موجودًا وكان مرئيًا، قم بإخفائه
      // هذا الجزء سيعمل في حال تم استدعاء initTemplateFunctions بعد ظهور الـpreloader
      // ولكن الدور الرئيسي لـ preloader سيكون في ajax.js
      if (preloader.style.display !== 'none') {
        preloader.style.display = 'none';
      }
    }

    /**
     * Scroll top button
     */
    let scrollTop = document.querySelector('.scroll-top');

    function toggleScrollTop() {
      if (scrollTop) {
        window.scrollY > 100 ? scrollTop.classList.add('active') : scrollTop.classList.remove('active');
      }
    }
    if (scrollTop) {
      scrollTop.removeEventListener('click', (e) => { /* remove prev */ }); // منع التكرار
      scrollTop.addEventListener('click', (e) => {
        e.preventDefault();
        window.scrollTo({
          top: 0,
          behavior: 'smooth'
        });
      });
    }
    document.removeEventListener('scroll', toggleScrollTop); // منع التكرار
    document.addEventListener('scroll', toggleScrollTop);
    toggleScrollTop(); // استدعاء فوري

    /**
     * Animation on scroll function and init
     */
    function aosInit() {
      if (typeof AOS !== 'undefined') {
        AOS.init({
          duration: 600,
          easing: 'ease-in-out',
          once: true,
          mirror: false
        });
        AOS.refresh(); // مهم جدا لتطبيق التأثيرات على العناصر الجديدة
      }
    }
    aosInit(); // استدعاء فوري

    /**
     * Init swiper sliders
     */
    function initSwiper() {
      document.querySelectorAll(".init-swiper").forEach(function(swiperElement) {
        // تدمير السلايدر القديم أولاً إذا كان موجودًا
        if (swiperElement.swiper && typeof swiperElement.swiper.destroy === 'function') {
          swiperElement.swiper.destroy(true, true);
        }

        let config = {};
        try {
          const swiperConfigElement = swiperElement.querySelector(".swiper-config");
          if (swiperConfigElement) {
            config = JSON.parse(swiperConfigElement.innerHTML.trim());
          }
        } catch (e) {
          console.error("Error parsing Swiper config for element:", swiperElement, e);
        }

        if (swiperElement.classList.contains("swiper-tab")) {
          // يجب التأكد من وجود initSwiperWithCustomPagination
          if (typeof initSwiperWithCustomPagination === 'function') {
            initSwiperWithCustomPagination(swiperElement, config);
          } else {
             new Swiper(swiperElement, config); // Fallback
          }
        } else {
          new Swiper(swiperElement, config);
        }
      });
    }
    initSwiper(); // استدعاء فوري

    /**
     * Initiate glightbox
     */
    if (typeof GLightbox !== 'undefined') {
        // GLightbox سيقوم بالتعرف على العناصر الجديدة تلقائيا عند تهيئته
        // يجب أن نضمن عدم تكرار تهيئة GLightbox بالكامل
        // إذا كان يتم إنشاء نسخة جديدة في كل مرة، هذا ممكن أن يسبب مشاكل في الذاكرة
        // أفضل طريقة هي إنشاء نسخة GLightbox واحدة، ثم استخدام method لـ"تحديث" الـDOM
        // لكن بما أن الكود الأصلي بينشئها مباشرة، سأبقيها هكذا
        GLightbox({
            selector: '.glightbox',
            loop: true
        });
    }

    /**
     * Init isotope layout and filters
     */
    document.querySelectorAll('.isotope-layout').forEach(function(isotopeItem) {
      // تدمير النسخة القديمة من Isotope إذا كانت موجودة
      if (isotopeItem.isotope && typeof isotopeItem.isotope.destroy === 'function') {
          isotopeItem.isotope.destroy();
      }

      let layout = isotopeItem.getAttribute('data-layout') ?? 'masonry';
      let filter = isotopeItem.getAttribute('data-default-filter') ?? '*';
      let sort = isotopeItem.getAttribute('data-sort') ?? 'original-order';

      let initIsotope;
      imagesLoaded(isotopeItem.querySelector('.isotope-container'), function() {
        initIsotope = new Isotope(isotopeItem.querySelector('.isotope-container'), {
          itemSelector: '.isotope-item',
          layoutMode: layout,
          filter: filter,
          sortBy: sort
        });
        isotopeItem.isotope = initIsotope; // تخزين النسخة للوصول إليها لاحقًا

        isotopeItem.querySelectorAll('.isotope-filters li').forEach(function(filters) {
          // إزالة listener القديم قبل إضافة الجديد لمنع التكرار
          // يتم استخدام .__clickHander__ لإنشاء مرجع للدالة المجهولة
          if (filters.__clickHander__) {
              filters.removeEventListener('click', filters.__clickHander__, false);
          }

          const clickHandler = function() {
            isotopeItem.querySelector('.isotope-filters .filter-active').classList.remove('filter-active');
            this.classList.add('filter-active');
            initIsotope.arrange({
              filter: this.getAttribute('data-filter')
            });
            aosInit(); // تحديث AOS بعد الفلترة
          };
          filters.addEventListener('click', clickHandler, false);
          filters.__clickHander__ = clickHandler; // تخزين مرجع الدالة
        });
      });
    });

    /**
     * Frequently Asked Questions Toggle
     */
    document.querySelectorAll('.faq-item h3, .faq-item .faq-toggle, .faq-item .faq-header').forEach((faqItem) => {
      // إزالة listener القديم قبل إضافة الجديد لمنع التكرار
      if (faqItem.__clickHander__) {
          faqItem.removeEventListener('click', faqItem.__clickHander__);
      }

      const clickHandler = () => {
        faqItem.parentNode.classList.toggle('faq-active');
      };
      faqItem.addEventListener('click', clickHandler);
      faqItem.__clickHander__ = clickHandler; // تخزين مرجع الدالة
    });

    /**
     * Correct scrolling position upon page load for URLs containing hash links.
     * هذا الجزء يعالج فقط التحميل الأولي أو المباشر بـhash، وليس التنقل بالـAJAX
     */
    // window.addEventListener('load', function(e) { /* ... */ }); // يتم استبعاده لأنه سيعالج بواسطة AJAX

    /**
     * Navmenu Scrollspy
     */
    let navmenulinks = document.querySelectorAll('.navmenu a');

    function navmenuScrollspy() {
      navmenulinks.forEach(navmenulink => {
        if (!navmenulink.hash) return;
        let section = document.querySelector(navmenulink.hash);
        if (!section) return;
        let position = window.scrollY + 200;
        if (position >= section.offsetTop && position <= (section.offsetTop + section.offsetHeight)) {
          document.querySelectorAll('.navmenu a.active').forEach(link => link.classList.remove('active'));
          navmenulink.classList.add('active');
        } else {
          navmenulink.classList.remove('active');
        }
      })
    }
    document.removeEventListener('scroll', navmenuScrollspy); // منع التكرار
    document.addEventListener('scroll', navmenuScrollspy);
    // window.removeEventListener('load', navmenuScrollspy); // هذا سيتم استدعاؤه من AJAX
    navmenuScrollspy(); // استدعاء فوري
  };

  // عند التحميل الأولي للصفحة، قم باستدعاء دالة التهيئة
  window.addEventListener('load', window.initTemplateFunctions);

})();