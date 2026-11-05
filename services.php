<?php
require_once __DIR__ . '/includes/config.php';
require_once __DIR__ . '/includes/data.php';
$current_page = 'services';
$page_title = page_title('Services');
require_once __DIR__ . '/includes/header.php';

$services = all_services();
?>

<section class="page-hero page-hero--tight">
    <div class="container text-center">
        <span class="section-tag reveal-up">Services</span>
        <h1 class="reveal-up">Digital solutions for <span class="highlight">real growth</span></h1>
        <p class="section-lead mx-auto reveal-up">Marketing, development, design, and automation — explained clearly, delivered professionally.</p>
    </div>
</section>

<section class="pb-5">
    <div class="container">
        <div class="row g-4">
            <?php foreach ($services as $s): ?>
            <div class="col-lg-6 reveal-up" id="<?= htmlspecialchars($s['id']) ?>">
                <div class="service-page-card">
                    <div class="service-page-visual" style="background-image: url('<?= htmlspecialchars(resolve_media_url($s['image']), ENT_QUOTES) ?>')"></div>
                    <article class="neo-card service-page-body">
                        <div class="neo-card-shine"></div>
                        <div class="d-flex align-items-start gap-3">
                            <div class="card-icon flex-shrink-0"><i class="bi <?= $s['icon'] ?>"></i></div>
                            <div>
                                <h3 class="mb-2"><?= htmlspecialchars($s['title']) ?></h3>
                                <p class="text-secondary mb-3"><?= htmlspecialchars($s['desc']) ?></p>
                                <ul class="service-page-list mb-0">
                                    <?php foreach ($s['bullets'] as $b): ?>
                                    <li><?= htmlspecialchars($b) ?></li>
                                    <?php endforeach; ?>
                                </ul>
                            </div>
                        </div>
                    </article>
                </div>
            </div>
            <?php endforeach; ?>
        </div>
        <div class="cta-band mt-5 reveal-up" id="quote">
            <h2 class="h4 mb-3">Need a custom package?</h2>
            <p class="section-lead mx-auto mb-4">Tell us your goals — we&rsquo;ll recommend the right mix of services.</p>
            <a class="btn btn-adnexa btn-lg" href="<?= BASE_URL ?>/contact.php#quote">Request a quote</a>
        </div>
    </div>
</section>

<?php require_once __DIR__ . '/includes/footer.php'; ?>
