(function () {
    'use strict';

    const reducedMotion = window.matchMedia('(prefers-reduced-motion: reduce)').matches;

    document.querySelectorAll('[data-carousel]').forEach(function (root) {
        const viewport = root.querySelector('[data-carousel-viewport]');
        const track = root.querySelector('[data-carousel-track]');
        const prevBtn = root.querySelector('[data-carousel-prev]');
        const nextBtn = root.querySelector('[data-carousel-next]');
        const dotsWrap = root.querySelector('[data-carousel-dots]');
        if (!viewport || !track) return;

        const hideNav = root.dataset.carouselHideNav === 'true';
        if (hideNav) {
            if (prevBtn) prevBtn.style.display = 'none';
            if (nextBtn) nextBtn.style.display = 'none';
            root.classList.add('adnexa-carousel--compact');
        }

        const mode = root.dataset.carouselMode || 'step';
        const isContinuous = mode === 'continuous' && !reducedMotion;

        let hoverPaused = false;
        let autoplayTimer = null;
        let rafId = null;

        if (isContinuous) {
            root.classList.add('adnexa-carousel--continuous');
            viewport.classList.add('carousel-viewport--marquee');
            track.classList.add('carousel-track--marquee');

            Array.from(track.children).forEach(function (slide) {
                track.appendChild(slide.cloneNode(true));
            });

            if (dotsWrap) dotsWrap.style.display = 'none';

            let loopWidth = 0;
            let marqueeOffset = 0;

            function measureLoop() {
                loopWidth = track.scrollWidth / 2;
            }

            measureLoop();
            window.addEventListener('resize', measureLoop);
            window.addEventListener('load', measureLoop);

            const speed = parseFloat(root.dataset.continuousSpeed || '0.05');

            function tickMarquee() {
                if (!hoverPaused && !document.hidden && loopWidth > 0) {
                    marqueeOffset -= speed;
                    if (-marqueeOffset >= loopWidth) {
                        marqueeOffset += loopWidth;
                    }
                    track.style.transform = 'translate3d(' + marqueeOffset + 'px, 0, 0)';
                }
                rafId = requestAnimationFrame(tickMarquee);
            }

            function startMarquee() {
                if (rafId) cancelAnimationFrame(rafId);
                measureLoop();
                rafId = requestAnimationFrame(tickMarquee);
            }

            function stopMarquee() {
                if (rafId) {
                    cancelAnimationFrame(rafId);
                    rafId = null;
                }
            }

            bindHoverPause(root, function () { return hoverPaused; }, function (v) { hoverPaused = v; });
            document.addEventListener('visibilitychange', function () {
                if (document.hidden) stopMarquee();
                else startMarquee();
            });
            startMarquee();
            return;
        }

        const slides = track.querySelectorAll('.carousel-slide');
        if (!slides.length) return;

        const autoplayEnabled = root.dataset.autoplay === 'true' && !reducedMotion;
        const autoplayMs = parseInt(root.dataset.autoplayMs || '2600', 10);

        slides.forEach(function (_, i) {
            const dot = document.createElement('button');
            dot.type = 'button';
            dot.className = 'carousel-dot' + (i === 0 ? ' is-active' : '');
            dot.setAttribute('aria-label', 'Go to slide ' + (i + 1));
            dot.addEventListener('click', function () {
                scrollToIndex(i);
                restartAutoplay();
            });
            if (dotsWrap) dotsWrap.appendChild(dot);
        });

        const dots = dotsWrap ? dotsWrap.querySelectorAll('.carousel-dot') : [];

        function slideWidth() {
            const slide = slides[0];
            const gap = parseFloat(getComputedStyle(track).gap) || 0;
            return slide.getBoundingClientRect().width + gap;
        }

        function currentIndex() {
            const w = slideWidth();
            if (w <= 0) return 0;
            return Math.round(viewport.scrollLeft / w);
        }

        function scrollToIndex(index, behavior) {
            const max = slides.length - 1;
            const i = Math.max(0, Math.min(max, index));
            viewport.scrollTo({
                left: i * slideWidth(),
                behavior: behavior || 'smooth',
            });
            updateDots(i);
        }

        function updateDots(index) {
            dots.forEach(function (d, i) {
                d.classList.toggle('is-active', i === index);
            });
        }

        /** Next slide with pause — last slide jumps to first */
        function stepNext() {
            const idx = currentIndex();
            if (idx >= slides.length - 1) {
                viewport.scrollTo({ left: 0, behavior: 'auto' });
                updateDots(0);
            } else {
                scrollToIndex(idx + 1, 'smooth');
            }
        }

        function stepPrev() {
            const idx = currentIndex();
            if (idx <= 0) {
                scrollToIndex(slides.length - 1, 'smooth');
            } else {
                scrollToIndex(idx - 1, 'smooth');
            }
        }

        function tickAutoplay() {
            if (hoverPaused || document.hidden) return;
            stepNext();
        }

        function startAutoplay() {
            stopAutoplay();
            if (!autoplayEnabled) return;
            autoplayTimer = setInterval(tickAutoplay, autoplayMs);
        }

        function stopAutoplay() {
            if (autoplayTimer) {
                clearInterval(autoplayTimer);
                autoplayTimer = null;
            }
        }

        function restartAutoplay() {
            stopAutoplay();
            startAutoplay();
        }

        if (prevBtn && !hideNav) {
            prevBtn.addEventListener('click', function () {
                stepPrev();
                restartAutoplay();
            });
        }
        if (nextBtn && !hideNav) {
            nextBtn.addEventListener('click', function () {
                stepNext();
                restartAutoplay();
            });
        }

        let scrollTimer;
        viewport.addEventListener('scroll', function () {
            clearTimeout(scrollTimer);
            scrollTimer = setTimeout(function () {
                updateDots(currentIndex());
            }, 80);
        }, { passive: true });

        bindHoverPause(root, function () { return hoverPaused; }, function (v) { hoverPaused = v; });

        document.addEventListener('visibilitychange', function () {
            if (document.hidden) stopAutoplay();
            else startAutoplay();
        });

        window.addEventListener('resize', function () {
            updateDots(currentIndex());
        });

        startAutoplay();
    });

    function bindHoverPause(root, getPaused, setPaused) {
        root.addEventListener('mouseenter', function () {
            setPaused(true);
        });
        root.addEventListener('mouseleave', function () {
            setPaused(false);
        });
    }
})();
