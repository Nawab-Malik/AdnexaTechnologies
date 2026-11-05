<?php
require_once __DIR__ . '/includes/config.php';
$current_page = 'ceo';
$page_title = page_title('About CEO');
require_once __DIR__ . '/includes/header.php';
?>

<section class="ceo-hero-3d py-5">
    <div class="container">
        <div class="ceo-3d-stage reveal-up">
            <div class="ceo-3d-orbit ceo-3d-orbit-cw" aria-hidden="true"></div>
            <div class="ceo-3d-orbit ceo-3d-orbit-ccw" aria-hidden="true"></div>
            <div class="ceo-3d-glow" aria-hidden="true"></div>
            <div class="ceo-3d-portrait">
                <img src="<?= img_url(CEO_IMG_HERO) ?>" alt="<?= htmlspecialchars(CEO_NAME) ?>">
            </div>
            <div class="ceo-3d-float ceo-3d-float-a"><i class="bi bi-graph-up-arrow"></i> Growth</div>
            <div class="ceo-3d-float ceo-3d-float-b"><i class="bi bi-code-slash"></i> Build</div>
            <div class="ceo-3d-float ceo-3d-float-c"><i class="bi bi-stars"></i> Innovate</div>
        </div>
        <div class="ceo-3d-copy text-center mt-4 reveal-up">
            <span class="section-tag">Leadership</span>
            <h1 class="section-title"><?= htmlspecialchars(CEO_NAME) ?></h1>
            <p class="founder-role-text"><?= CEO_ROLE ?>, <?= SITE_NAME ?></p>
        </div>
    </div>
</section>

<section class="pb-5">
    <div class="container">
        <div class="row g-4">
            <div class="col-lg-7 reveal-up">
                <article class="neo-card p-4 p-lg-5">
                    <div class="neo-card-shine"></div>
                    <h2 class="h4 mb-3">Leading with <span class="highlight">vision &amp; execution</span></h2>
                    <p class="text-secondary"><?= CEO_BIO ?></p>
                    <p class="text-secondary mb-0">From campaign strategy to development oversight, our CEO ensures client work and training programs stay aligned with what the market demands today.</p>
                </article>
            </div>
            <div class="col-lg-5 reveal-up">
                <div class="row g-3">
                    <div class="col-6"><div class="stat-item py-4"><strong>3+</strong><span>Years</span></div></div>
                    <div class="col-6"><div class="stat-item py-4"><strong>50+</strong><span>Projects</span></div></div>
                    <div class="col-6"><div class="stat-item py-4"><strong>30+</strong><span>Clients</span></div></div>
                    <div class="col-6"><div class="stat-item py-4"><strong>100%</strong><span>Focus</span></div></div>
                </div>
                <article class="neo-card mt-3 p-4">
                    <h3 class="h6 text-adnexa mb-3">Focus areas</h3>
                    <ul class="feature-list list-unstyled mb-0">
                        <li class="feature-list-item"><i class="bi bi-megaphone"></i><span>Digital marketing strategy</span></li>
                        <li class="feature-list-item"><i class="bi bi-laptop"></i><span>Product &amp; web delivery</span></li>
                        <li class="feature-list-item"><i class="bi bi-mortarboard"></i><span>Mentorship &amp; training quality</span></li>
                    </ul>
                </article>
            </div>
        </div>
        <div class="text-center mt-5 reveal-up">
            <a class="btn btn-adnexa me-2" href="https://wa.me/<?= SITE_WHATSAPP ?>" target="_blank" rel="noopener">WhatsApp</a>
            <a class="btn btn-outline-adnexa" href="<?= BASE_URL ?>/team.php">Complete team</a>
        </div>
    </div>
</section>

<?php require_once __DIR__ . '/includes/footer.php'; ?>
