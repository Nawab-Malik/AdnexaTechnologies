<?php
require_once __DIR__ . '/includes/config.php';
require_once __DIR__ . '/includes/data.php';
$current_page = 'team';
$page_title = page_title('Our Team');
require_once __DIR__ . '/includes/header.php';

$team = adnexa_team_roster();
?>

<section class="page-hero">
    <div class="container text-center">
        <span class="section-tag reveal-up">Our team</span>
        <h1 class="reveal-up">Meet our <span class="highlight">expert team</span></h1>
        <p class="section-lead mx-auto reveal-up">Marketing, development, sales, and automation specialists behind <?= SITE_NAME ?>.</p>
    </div>
</section>

<section class="pb-5">
    <div class="container">
        <div class="row g-4">
            <?php foreach ($team as $member): ?>
            <div class="col-sm-6 col-lg-4 reveal-up" id="<?= htmlspecialchars($member['slug']) ?>">
                <article class="team-showcase-card team-showcase-card--static">
                    <img src="<?= img_url($member['photo']) ?>" alt="<?= htmlspecialchars($member['name']) ?>" loading="lazy">
                    <div class="team-showcase-overlay">
                        <span class="team-showcase-role"><?= htmlspecialchars($member['role']) ?></span>
                        <h3 class="team-showcase-name"><?= htmlspecialchars($member['name']) ?></h3>
                        <?php if (($member['slug'] ?? '') === 'ceo'): ?>
                        <a class="team-showcase-go" href="<?= BASE_URL ?>/ceo.php" aria-label="About CEO"><i class="bi bi-arrow-right"></i></a>
                        <?php endif; ?>
                    </div>
                </article>
            </div>
            <?php endforeach; ?>
        </div>
    </div>
</section>

<?php require_once __DIR__ . '/includes/footer.php'; ?>
