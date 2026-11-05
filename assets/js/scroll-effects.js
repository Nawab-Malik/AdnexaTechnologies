(function () {
    'use strict';

    if (typeof gsap === 'undefined' || typeof ScrollTrigger === 'undefined') return;

    gsap.registerPlugin(ScrollTrigger);

    const reduced = window.matchMedia('(prefers-reduced-motion: reduce)').matches;
    if (reduced) {
        document.querySelectorAll('.reveal-up').forEach(function (el) {
            el.style.opacity = '1';
            el.style.transform = 'none';
        });
        return;
    }

    gsap.utils.toArray('.reveal-up').forEach(function (el) {
        gsap.to(el, {
            scrollTrigger: {
                trigger: el,
                start: 'top 88%',
                toggleActions: 'play none none reverse',
            },
            opacity: 1,
            y: 0,
            duration: 0.85,
            ease: 'power3.out',
        });
    });

    const wrap = document.getElementById('globe-canvas-wrap');
    if (wrap) {
        gsap.to(wrap, {
            scrollTrigger: {
                trigger: document.body,
                start: 'top top',
                end: 'max',
                scrub: 1.2,
            },
            opacity: document.body.dataset.page === 'home' ? 0.35 : 0.22,
            ease: 'none',
        });
    }

    gsap.utils.toArray('.service-3d-inner, .portfolio-3d-inner').forEach(function (card) {
        card.addEventListener('mousemove', function (e) {
            const rect = card.getBoundingClientRect();
            const x = (e.clientX - rect.left) / rect.width - 0.5;
            const y = (e.clientY - rect.top) / rect.height - 0.5;
            gsap.to(card, {
                rotateY: x * 12,
                rotateX: -y * 12,
                transformPerspective: 900,
                duration: 0.35,
                ease: 'power2.out',
            });
        });
        card.addEventListener('mouseleave', function () {
            gsap.to(card, {
                rotateY: 0,
                rotateX: 0,
                duration: 0.55,
                ease: 'power2.out',
            });
        });
    });

    gsap.utils.toArray('.neo-card, .glass-card').forEach(function (card, i) {
        card.addEventListener('mousemove', function (e) {
            const rect = card.getBoundingClientRect();
            const x = (e.clientX - rect.left) / rect.width - 0.5;
            const y = (e.clientY - rect.top) / rect.height - 0.5;
            gsap.to(card, {
                rotateY: x * 10,
                rotateX: -y * 10,
                transformPerspective: 800,
                duration: 0.35,
                ease: 'power2.out',
            });
        });
        card.addEventListener('mouseleave', function () {
            gsap.to(card, {
                rotateY: 0,
                rotateX: 0,
                duration: 0.5,
                ease: 'power2.out',
            });
        });
    });
})();
