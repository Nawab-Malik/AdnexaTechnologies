<?php
require_once __DIR__ . '/includes/config.php';
require_once __DIR__ . '/includes/data.php';
$current_page = 'portfolio';
$page_title = page_title('Portfolio');
require_once __DIR__ . '/includes/header.php';

$projects = portfolio_projects();
$categories = portfolio_categories();
?>

<section class="page-hero page-hero--tight">
    <div class="container text-center">
        <span class="section-tag reveal-up">Portfolio</span>
        <h1 class="reveal-up">Work we&rsquo;re <span class="highlight">proud of</span></h1>
        <p class="section-lead mx-auto reveal-up">Websites, e-commerce, landing pages, and campaign creatives delivered for real clients.</p>
    </div>
</section>

<section class="pb-5">
    <div class="container">
        <div class="portfolio-filters reveal-up" data-portfolio-filters>
            <?php foreach ($categories as $cat): ?>
            <button type="button" class="portfolio-filter-btn<?= $cat === 'All' ? ' is-active' : '' ?>" data-filter="<?= htmlspecialchars($cat === 'All' ? '*' : $cat) ?>"><?= htmlspecialchars($cat) ?></button>
            <?php endforeach; ?>
        </div>
        <div class="row g-4 portfolio-grid">
            <?php foreach ($projects as $i => $p): ?>
            <div class="col-sm-6 col-lg-4 reveal-up portfolio-item" data-category="<?= htmlspecialchars($p['category']) ?>">
                <article class="portfolio-3d-card">
                    <div class="portfolio-3d-inner">
                        <div class="portfolio-3d-visual">
                            <img src="<?= img_url($p['image']) ?>" alt="<?= htmlspecialchars($p['title']) ?>" loading="lazy">
                        </div>
                        <div class="portfolio-3d-body">
                            <span class="portfolio-cat"><?= htmlspecialchars($p['category']) ?></span>
                            <h3><?= htmlspecialchars($p['title']) ?></h3>
                            <p><?= htmlspecialchars($p['desc']) ?></p>
                            <span class="portfolio-tech"><i class="bi bi-stack"></i> <?= htmlspecialchars($p['tech']) ?></span>
                        </div>
                    </div>
                </article>
            </div>
            <?php endforeach; ?>
        </div>
        <div class="text-center mt-5 reveal-up">
            <a class="btn btn-adnexa" href="<?= BASE_URL ?>/contact.php#quote">Start your project</a>
        </div>
    </div>
</section>

<?php require_once __DIR__ . '/includes/footer.php'; ?>
