(function () {
    'use strict';

    const header = document.querySelector('.site-header');
    if (header) {
        window.addEventListener(
            'scroll',
            function () {
                header.classList.toggle('scrolled', window.scrollY > 40);
            },
            { passive: true }
        );
    }

    document.querySelectorAll('a[href^="#"]').forEach(function (anchor) {
        anchor.addEventListener('click', function (e) {
            const id = this.getAttribute('href');
            if (id.length <= 1) return;
            const target = document.querySelector(id);
            if (target) {
                e.preventDefault();
                target.scrollIntoView({ behavior: 'smooth', block: 'start' });
            }
        });
    });

    const filterWrap = document.querySelector('[data-portfolio-filters]');
    if (filterWrap) {
        const items = document.querySelectorAll('.portfolio-item');
        filterWrap.querySelectorAll('.portfolio-filter-btn').forEach(function (btn) {
            btn.addEventListener('click', function () {
                filterWrap.querySelectorAll('.portfolio-filter-btn').forEach(function (b) {
                    b.classList.remove('is-active');
                });
                btn.classList.add('is-active');
                const filter = btn.dataset.filter;
                items.forEach(function (el) {
                    const show = filter === '*' || el.dataset.category === filter;
                    el.classList.toggle('d-none', !show);
                });
            });
        });
    }

    const lightbox = document.getElementById('galleryLightbox');
    const lbImg = document.getElementById('galleryLightboxImg');
    const lbCap = document.getElementById('galleryLightboxCap');
    if (lightbox && lbImg && lbCap) {
        document.querySelectorAll('[data-gallery-open]').forEach(function (btn) {
            btn.addEventListener('click', function () {
                lbImg.src = btn.dataset.galleryOpen;
                lbImg.alt = btn.dataset.galleryCaption || '';
                lbCap.textContent = btn.dataset.galleryCaption || '';
                lightbox.hidden = false;
                document.body.style.overflow = 'hidden';
            });
        });
        function closeLb() {
            lightbox.hidden = true;
            document.body.style.overflow = '';
        }
        lightbox.querySelector('.gallery-lightbox-close')?.addEventListener('click', closeLb);
        lightbox.addEventListener('click', function (e) {
            if (e.target === lightbox) closeLb();
        });
        document.addEventListener('keydown', function (e) {
            if (e.key === 'Escape' && !lightbox.hidden) closeLb();
        });
    }
})();
