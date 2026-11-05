<?php
require_once __DIR__ . '/includes/config.php';
require_once __DIR__ . '/includes/data.php';
$current_page = 'about';
$page_title = page_title('About Us');
require_once __DIR__ . '/includes/header.php';
?>

<section class="about-hero reveal-up">
    <div class="about-hero-bg" style="background-image: url('<?= htmlspecialchars(service_stock_image('about'), ENT_QUOTES) ?>')"></div>
    <div class="container about-hero-content">
        <span class="section-tag">About us</span>
        <h1>We build <span class="highlight">digital growth</span> &amp; practical skills</h1>
        <p class="section-lead"><?= SITE_NAME ?> is a digital agency and training institute — helping businesses scale online and helping learners ship real projects.</p>
    </div>
</section>

<section class="py-5">
    <div class="container">
        <div class="row g-4 align-items-stretch mb-5">
            <div class="col-lg-5 reveal-up">
                <div class="about-ceo-panel neo-card h-100">
                    <div class="neo-card-shine"></div>
                    <div class="about-ceo-rings" aria-hidden="true">
                        <span class="about-ring about-ring-cw"></span>
                        <span class="about-ring about-ring-ccw"></span>
                    </div>
                    <div class="about-ceo-photo">
                        <img src="<?= img_url(CEO_IMG_PROFILE) ?>" alt="<?= htmlspecialchars(CEO_NAME) ?>">
                    </div>
                    <div class="text-center mt-3">
                        <h3 class="h5 mb-1"><?= htmlspecialchars(CEO_NAME) ?></h3>
                        <p class="founder-role-text mb-3"><?= CEO_ROLE ?></p>
                        <a class="link-arrow" href="<?= BASE_URL ?>/ceo.php">CEO profile <i class="bi bi-arrow-right"></i></a>
                    </div>
                </div>
            </div>
            <div class="col-lg-7 reveal-up">
                <h2 class="section-title h3">Who we <span class="highlight">are</span></h2>
                <p class="section-lead">From Meta and Google campaigns to full websites and e-commerce, our team delivers with the same tools and standards we teach in our courses.</p>
                <div class="row g-3 mt-2">
                    <div class="col-sm-6">
                        <div class="stat-item text-start px-3 py-3">
                            <strong class="d-block fs-3">50+</strong>
                            <span>Projects delivered</span>
                        </div>
                    </div>
                    <div class="col-sm-6">
                        <div class="stat-item text-start px-3 py-3">
                            <strong class="d-block fs-3">30+</strong>
                            <span>Happy clients</span>
                        </div>
                    </div>
                </div>
                <ul class="feature-list list-unstyled mt-4">
                    <li class="feature-list-item"><i class="bi bi-graph-up-arrow"></i><span>Digital marketing &amp; paid media</span></li>
                    <li class="feature-list-item"><i class="bi bi-code-slash"></i><span>Web, apps &amp; e-commerce builds</span></li>
                    <li class="feature-list-item"><i class="bi bi-mortarboard"></i><span>Optional hands-on training programs</span></li>
                </ul>
            </div>
        </div>

        <div class="row g-4 mb-5">
            <div class="col-md-4 reveal-up">
                <article class="neo-card h-100 p-4">
                    <div class="card-icon"><i class="bi bi-rocket-takeoff"></i></div>
                    <h3>Mission</h3>
                    <p class="text-secondary mb-0">Practical outcomes for clients and students — leads, sales, portfolios, jobs, and business growth.</p>
                </article>
            </div>
            <div class="col-md-4 reveal-up">
                <article class="neo-card h-100 p-4">
                    <div class="card-icon"><i class="bi bi-lightbulb"></i></div>
                    <h3>Approach</h3>
                    <p class="text-secondary mb-0">Strategy first, then design and build, then measure — iterate with clear reporting.</p>
                </article>
            </div>
            <div class="col-md-4 reveal-up">
                <article class="neo-card h-100 p-4">
                    <div class="card-icon"><i class="bi bi-people"></i></div>
                    <h3>Team</h3>
                    <p class="text-secondary mb-0">Specialists in ads, development, SMM, and automation working under one roof.</p>
                </article>
            </div>
        </div>

        <div class="d-flex flex-wrap gap-3 justify-content-center reveal-up">
            <a class="btn btn-adnexa" href="<?= BASE_URL ?>/portfolio.php">See portfolio</a>
            <a class="btn btn-outline-adnexa" href="<?= BASE_URL ?>/team.php">Meet the team</a>
            <a class="btn btn-outline-adnexa" href="<?= BASE_URL ?>/company.php">Company gallery</a>
        </div>
    </div>
</section>

<?php require_once __DIR__ . '/includes/footer.php'; ?>
