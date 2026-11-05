<?php
require_once __DIR__ . '/includes/config.php';
require_once __DIR__ . '/includes/data.php';
$current_page = 'company';
$page_title = page_title('Company & Gallery');
require_once __DIR__ . '/includes/header.php';

$gallery = company_gallery();
?>

<section class="page-hero page-hero--tight">
    <div class="container">
        <span class="section-tag reveal-up">Company</span>
        <h1 class="reveal-up"><?= SITE_NAME ?></h1>
        <p class="section-lead reveal-up"><?= SITE_TAGLINE ?> — digital agency &amp; training based in Uch Sharif, serving clients and learners online.</p>
    </div>
</section>

<section class="pb-4">
    <div class="container">
        <div class="row g-4 mb-5">
            <div class="col-md-4 reveal-up">
                <article class="neo-card h-100 text-center p-4">
                    <div class="card-icon mx-auto"><i class="bi bi-eye"></i></div>
                    <h3>Vision</h3>
                    <p class="text-secondary mb-0">Accessible, high-quality digital services and education so anyone can build and earn online.</p>
                </article>
            </div>
            <div class="col-md-4 reveal-up">
                <article class="neo-card h-100 text-center p-4">
                    <div class="card-icon mx-auto"><i class="bi bi-bullseye"></i></div>
                    <h3>Mission</h3>
                    <p class="text-secondary mb-0">Deliver marketing and development that performs — with mentorship and practical training when you need skills in-house.</p>
                </article>
            </div>
            <div class="col-md-4 reveal-up">
                <article class="neo-card h-100 text-center p-4">
                    <div class="card-icon mx-auto"><i class="bi bi-heart"></i></div>
                    <h3>Values</h3>
                    <p class="text-secondary mb-0">Integrity, innovation, transparency, and long-term partnerships with clients and students.</p>
                </article>
            </div>
        </div>

        <div class="d-flex flex-wrap justify-content-between align-items-end gap-3 mb-4 reveal-up">
            <div>
                <span class="section-tag">Gallery</span>
                <h2 class="section-title h3 mb-0">Life at <span class="highlight">Adnexa</span></h2>
            </div>
            <p class="text-secondary small mb-0">Team, projects, and moments behind the work.</p>
        </div>

        <div class="gallery-masonry reveal-up">
            <?php foreach ($gallery as $i => $item): ?>
            <figure class="gallery-item<?= $i % 5 === 0 ? ' gallery-item--wide' : '' ?>">
                <button type="button" class="gallery-item-btn" data-gallery-open="<?= img_url($item['image']) ?>" data-gallery-caption="<?= htmlspecialchars($item['caption']) ?>">
                    <img src="<?= img_url($item['image']) ?>" alt="<?= htmlspecialchars($item['caption']) ?>" loading="lazy">
                    <span class="gallery-item-cap"><?= htmlspecialchars($item['caption']) ?></span>
                </button>
            </figure>
            <?php endforeach; ?>
        </div>

        <article class="neo-card mt-5 reveal-up">
            <div class="neo-card-shine"></div>
            <h3>Contact &amp; location</h3>
            <ul class="footer-contact list-unstyled text-secondary mt-3 mb-0">
                <li class="mb-2"><i class="bi bi-building me-2 text-adnexa"></i><?= SITE_NAME ?></li>
                <li class="mb-2"><i class="bi bi-geo-alt me-2 text-adnexa"></i><?= SITE_ADDRESS ?></li>
                <li class="mb-2"><i class="bi bi-telephone me-2 text-adnexa"></i><?= SITE_PHONE_DISPLAY ?></li>
                <li><i class="bi bi-envelope me-2 text-adnexa"></i><?= SITE_EMAIL ?></li>
            </ul>
        </article>
    </div>
</section>

<div class="gallery-lightbox" id="galleryLightbox" hidden>
    <button type="button" class="gallery-lightbox-close" aria-label="Close">&times;</button>
    <img src="" alt="" id="galleryLightboxImg">
    <p id="galleryLightboxCap"></p>
</div>

<?php require_once __DIR__ . '/includes/footer.php'; ?>
