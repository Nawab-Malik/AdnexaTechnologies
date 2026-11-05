(function () {
    'use strict';

    const canvas = document.getElementById('globe-canvas');
    if (!canvas || typeof THREE === 'undefined') return;

    const prefersReduced = window.matchMedia('(prefers-reduced-motion: reduce)').matches;
    const isMobile = window.matchMedia('(max-width: 767px)').matches;

    const scene = new THREE.Scene();
    const camera = new THREE.PerspectiveCamera(45, 1, 0.1, 100);
    camera.position.z = isMobile ? 4.2 : 3.4;

    const renderer = new THREE.WebGLRenderer({
        canvas: canvas,
        alpha: true,
        antialias: !isMobile,
        powerPreference: 'high-performance',
    });
    renderer.setPixelRatio(Math.min(window.devicePixelRatio, isMobile ? 1.5 : 2));

    const globeGroup = new THREE.Group();
    scene.add(globeGroup);

    const radius = 1.15;
    const segments = isMobile ? 28 : 40;
    const particleCount = isMobile ? 900 : 1800;

    const positions = [];
    const phi = Math.PI * (3 - Math.sqrt(5));

    for (let i = 0; i < particleCount; i++) {
        const y = 1 - (i / (particleCount - 1)) * 2;
        const r = Math.sqrt(1 - y * y);
        const theta = phi * i;
        const x = Math.cos(theta) * r;
        const z = Math.sin(theta) * r;
        positions.push(x * radius, y * radius, z * radius);
    }

    const geometry = new THREE.BufferGeometry();
    geometry.setAttribute('position', new THREE.Float32BufferAttribute(positions, 3));

    const pointsMaterial = new THREE.PointsMaterial({
        color: 0x1a7cff,
        size: isMobile ? 0.025 : 0.018,
        transparent: true,
        opacity: 0.85,
        blending: THREE.AdditiveBlending,
        depthWrite: false,
    });

    const points = new THREE.Points(geometry, pointsMaterial);
    globeGroup.add(points);

    const wireGeo = new THREE.IcosahedronGeometry(radius, segments > 32 ? 2 : 1);
    const wireMat = new THREE.MeshBasicMaterial({
        color: 0x0052ff,
        wireframe: true,
        transparent: true,
        opacity: 0.12,
    });
    const wire = new THREE.Mesh(wireGeo, wireMat);
    globeGroup.add(wire);

    const glowGeo = new THREE.SphereGeometry(radius * 1.02, 32, 32);
    const glowMat = new THREE.MeshBasicMaterial({
        color: 0x0052ff,
        transparent: true,
        opacity: 0.04,
        side: THREE.BackSide,
    });
    globeGroup.add(new THREE.Mesh(glowGeo, glowMat));

    const state = {
        mouseX: 0,
        mouseY: 0,
        targetRotX: 0,
        targetRotY: 0,
        scrollY: 0,
        auto: prefersReduced ? 0 : 0.0012,
    };

    function onPointerMove(e) {
        const x = e.clientX ?? (e.touches && e.touches[0].clientX) ?? window.innerWidth / 2;
        const y = e.clientY ?? (e.touches && e.touches[0].clientY) ?? window.innerHeight / 2;
        state.mouseX = (x / window.innerWidth) * 2 - 1;
        state.mouseY = (y / window.innerHeight) * 2 - 1;
    }

    function onScroll() {
        state.scrollY = window.scrollY;
    }

    window.addEventListener('mousemove', onPointerMove, { passive: true });
    window.addEventListener('touchmove', onPointerMove, { passive: true });
    window.addEventListener('scroll', onScroll, { passive: true });

    function resize() {
        const w = window.innerWidth;
        const h = window.innerHeight;
        renderer.setSize(w, h, false);
        camera.aspect = w / h;
        camera.updateProjectionMatrix();

        const isHome = document.body.dataset.page === 'home';
        const scrollMax = Math.max(document.documentElement.scrollHeight - h, 1);
        const scrollT = Math.min(state.scrollY / scrollMax, 1);

        const baseX = isHome ? -0.15 : 0.35;
        const baseY = isHome ? 0.05 : -0.1;
        globeGroup.position.x = baseX + state.mouseX * 0.35;
        globeGroup.position.y = baseY - state.mouseY * 0.25 - scrollT * 0.8;
        globeGroup.scale.setScalar(isHome ? 1.15 - scrollT * 0.25 : 0.75 - scrollT * 0.15);
    }

    function animate() {
        requestAnimationFrame(animate);

        state.targetRotY = state.mouseX * 0.35;
        state.targetRotX = state.mouseY * 0.2;

        globeGroup.rotation.y += state.auto + state.scrollY * 0.000008;
        globeGroup.rotation.x += (state.targetRotX - globeGroup.rotation.x) * 0.04;
        globeGroup.rotation.y += (state.targetRotY - globeGroup.rotation.y) * 0.02;

        wire.rotation.y -= 0.0008;
        wire.rotation.x = globeGroup.rotation.x * 0.5;

        resize();
        renderer.render(scene, camera);
    }

    resize();
    animate();

    window.AdnexaGlobe = { globeGroup, camera, scene };
})();
