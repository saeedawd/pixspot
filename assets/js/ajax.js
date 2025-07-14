(function() {
    "use strict";

    const preloader = document.querySelector('#preloader'); // Preloader element

    // Helper: Show preloader
    function showPreloader() {
        if (preloader) {
            preloader.style.display = 'flex'; // أو 'block' حسب الـCSS بتاعك
            // أضف أي كلاسات CSS للـanimation لو موجودة
        }
    }

    // Helper: Hide preloader
    function hidePreloader() {
        if (preloader) {
            // ممكن تستخدم setTimeout عشان تدي فرصة للـCSS animation لو فيه
            setTimeout(() => {
                preloader.style.display = 'none';
                // إزالة أي كلاسات CSS للـanimation لو موجودة
            }, 300); // 300ms عشان لو فيه تأثير اختفاء سلس
        }
    }

    // Function to re-initialize all template functions
    // هذا سيستدعي الدالة الكبيرة في main.js
    function reinitializeTemplate() {
        if (typeof window.initTemplateFunctions === 'function') {
            window.initTemplateFunctions();
        } else {
            console.warn('initTemplateFunctions is not defined. Ensure main.js is loaded and properly structured.');
        }
    }

    // AJAX navigation handler
    document.body.addEventListener('click', function(e) {
        const link = e.target.closest('a');
        // تأكد من أن الرابط موجود وأنه ليس رابط هاش (#) أو رابط خارجي
        if (!link || !link.href || link.href.startsWith('#') || link.target === '_blank' || link.href.startsWith('mailto:') || link.href.startsWith('tel:') || link.hasAttribute('download') || link.classList.contains('glightbox')) {
            return;
        }

        // تحقق مما إذا كان الرابط هو نفس النطاق لتجنب الـAJAX لروابط خارجية
        if (link.hostname !== window.location.hostname) {
            return;
        }

        // هنا يمكنك إضافة regex لتحديد الروابط التي تريدها أن تعمل بـAJAX
        // مثال: لو عاوز بس index.php, about.php, contact.php, services.php
        // if (!/^(index|about|contact|services)\.php$/.test(link.pathname.split('/').pop())) {
        //     return;
        // }

        e.preventDefault(); // منع سلوك الرابط الافتراضي

        showPreloader(); // إظهار الـpreloader

        fetch(link.href)
            .then(response => {
                if (!response.ok) {
                    throw new Error('Network response was not ok');
                }
                return response.text();
            })
            .then(html => {
                const parser = new DOMParser();
                const doc = parser.parseFromString(html, 'text/html');

                const newHeader = doc.querySelector('#header');
                const newMain = doc.querySelector('main');
                const newFooter = doc.querySelector('#footer'); // الحصول على الـfooter الجديد
                const newTitle = doc.querySelector('title');

                // تحديث عنوان الصفحة
                if (newTitle) {
                    document.title = newTitle.innerText;
                }

                // تحديث الـHeader
                const currentHeader = document.querySelector('#header');
                if (currentHeader && newHeader) {
                    currentHeader.innerHTML = newHeader.innerHTML;
                }

                // تحديث الـMain
                const currentMain = document.querySelector('main');
                if (currentMain && newMain) {
                    currentMain.innerHTML = newMain.innerHTML;
                }

                // تحديث الـFooter
                const currentFooter = document.querySelector('#footer');
                if (currentFooter && newFooter) {
                    currentFooter.innerHTML = newFooter.innerHTML;
                }

                window.history.pushState({}, '', link.href); // تحديث URL المتصفح
                window.scrollTo(0, 0); // التمرير لأعلى الصفحة

                // إعادة تفعيل كل الفاعليات من main.js
                reinitializeTemplate();

            })
            .catch(error => {
                console.error('AJAX navigation failed:', error);
                // في حالة وجود خطأ، أعد التحميل للصفحة بالكامل كـfallback
                window.location.href = link.href;
            })
            .finally(() => {
                hidePreloader(); // إخفاء الـpreloader سواء نجح أو فشل
            });
    });

    // Popstate event (للتعامل مع زر الرجوع/الأمام في المتصفح)
    window.addEventListener('popstate', function() {
        showPreloader(); // إظهار الـpreloader عند الرجوع

        fetch(window.location.href)
            .then(response => {
                if (!response.ok) {
                    throw new Error('Network response was not ok');
                }
                return response.text();
            })
            .then(html => {
                const parser = new DOMParser();
                const doc = parser.parseFromString(html, 'text/html');

                const newHeader = doc.querySelector('#header');
                const newMain = doc.querySelector('main');
                const newFooter = doc.querySelector('#footer');
                const newTitle = doc.querySelector('title');

                if (newTitle) {
                    document.title = newTitle.innerText;
                }

                const currentHeader = document.querySelector('#header');
                if (currentHeader && newHeader) {
                    currentHeader.innerHTML = newHeader.innerHTML;
                }

                const currentMain = document.querySelector('main');
                if (currentMain && newMain) {
                    currentMain.innerHTML = newMain.innerHTML;
                }

                const currentFooter = document.querySelector('#footer');
                if (currentFooter && newFooter) {
                    currentFooter.innerHTML = newFooter.innerHTML;
                }

                window.scrollTo(0, 0); // التمرير لأعلى الصفحة

                reinitializeTemplate(); // إعادة تفعيل الفاعليات

            })
            .catch(error => {
                console.error('Popstate AJAX failed:', error);
                window.location.reload(); // fallback في حالة الخطأ
            })
            .finally(() => {
                hidePreloader(); // إخفاء الـpreloader
            });
    });

    // عند التحميل الأولي للصفحة، تأكد أن الـpreloader مخفي لو كان الـCSS بيظهره افتراضيًا
    window.addEventListener('load', () => {
        // إذا كان الـpreloader له ستايل 'display: flex' افتراضي
        // تأكد من إخفائه بعد التحميل الأولي لو لم يكن لديك كود CSS لإخفائه تلقائيًا
        hidePreloader();
        // تأكد أن main.js بيشتغل أول مرة برضه
        reinitializeTemplate();
    });

})();