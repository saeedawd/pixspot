(function () {
  "use strict";

  // Helper: قراءة قيمة base من meta tag
  const BASE = document.querySelector('meta[name="base-url"]').getAttribute('content') || '/';

  // Helper: إعادة تحميل ملفات JS ديناميكياً
  function reloadScript(src) {
    return new Promise(function (resolve, reject) {
      document.querySelectorAll('script').forEach(function (s) {
        if (s.src && s.src.includes(src)) s.remove();
      });
      const script = document.createElement('script');
      script.src = src + '?v=' + Date.now();
      script.onload = resolve;
      script.onerror = reject;
      document.body.appendChild(script);
    });
  }

  // AJAX navigation
  document.body.addEventListener('click', function (e) {
    const link = e.target.closest('a');
    if (!link) return;
    const href = link.getAttribute('href');

    if (!href || href.startsWith('#') || link.target === '_blank' || href.startsWith('mailto:') || href.startsWith('tel:')) return;
    if (/^(http|https):\/\//.test(href) && !href.includes(window.location.host)) return;
    if (link.hasAttribute('download')) return;
    if (href.startsWith('javascript:')) return;
    if (link.classList.contains('glightbox')) return;
    if (!/^(\/(pixspot)?)?\/?(index|about|portfolio-details|service-details|services\/[a-zA-Z0-9_-]+)(\.php)?(\/)?(\?.*)?$/.test(href)) return;

    e.preventDefault();
    const main = document.querySelector('main');
    if (main) main.classList.add('ajax-loading');

    fetch(href, { headers: { 'X-Requested-With': 'XMLHttpRequest' } })
      .then(response => {
        if (!response.ok) throw new Error('Network response was not ok');
        return response.text();
      })
      .then(html => {
        const parser = new DOMParser();
        const doc = parser.parseFromString(html, 'text/html');
        const newMain = doc.querySelector('main');
        const newHeader = doc.querySelector('header');
        const newTitle = doc.querySelector('title');
        if (newTitle) document.title = newTitle.innerText;

        if (main && newMain) {
          main.innerHTML = newMain.innerHTML;
          // تحديث الهيدر إذا وجد
          const header = document.querySelector('header');
          if (header && newHeader) {
            header.innerHTML = newHeader.innerHTML;
          }
          window.history.pushState({}, '', href);
          window.scrollTo(0, 0);
          return reloadScript(BASE + 'assets/js/main.js').then(function() {
            if (typeof window.initMain === 'function') window.initMain();
          });
        } else {
          window.location.href = href;
        }
      })
      .catch(() => {
        window.location.href = href;
      })
      .finally(() => {
        if (main) main.classList.remove('ajax-loading');
      });
  });

  // popstate
  window.addEventListener('popstate', function () {
    const main = document.querySelector('main');
    fetch(window.location.href, { headers: { 'X-Requested-With': 'XMLHttpRequest' } })
      .then(response => response.text())
      .then(html => {
        const parser = new DOMParser();
        const doc = parser.parseFromString(html, 'text/html');
        const newMain = doc.querySelector('main');
        const newHeader = doc.querySelector('header');
        const newTitle = doc.querySelector('title');
        if (newTitle) document.title = newTitle.innerText;

        if (main && newMain) {
          main.innerHTML = newMain.innerHTML;
          // تحديث الهيدر إذا وجد
          const header = document.querySelector('header');
          if (header && newHeader) {
            header.innerHTML = newHeader.innerHTML;
          }
          reloadScript(BASE + 'assets/js/main.js').then(function() {
            if (typeof window.initMain === 'function') window.initMain();
          });
        }
      });
  });
})();
