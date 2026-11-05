<?php
require_once __DIR__ . '/includes/config.php';
require_once __DIR__ . '/includes/data.php';
$current_page = 'courses';
$page_title = page_title('Courses');
require_once __DIR__ . '/includes/header.php';

$courses = course_catalog();
$byGroup = [];
foreach ($courses as $c) {
    $byGroup[$c['group']][] = $c;
}
?>

<section class="page-hero page-hero--tight">
    <div class="container text-center">
        <span class="section-tag reveal-up">Courses</span>
        <h1 class="reveal-up">Learn skills. Build your <span class="highlight">career</span>.</h1>
        <p class="section-lead mx-auto reveal-up">Practical programs in marketing, development, and automation — with projects and mentor support.</p>
        <div class="hero-badge mt-3 reveal-up d-inline-flex"><i class="bi bi-patch-check-fill"></i> Internship pathways available</div>
    </div>
</section>

<section class="pb-5">
    <div class="container">
        <?php foreach ($byGroup as $group => $items): ?>
        <div class="mb-5">
            <h2 class="h4 text-adnexa mb-4 reveal-up"><?= htmlspecialchars($group) ?></h2>
            <div class="row g-4">
                <?php foreach ($items as $c): ?>
                <div class="col-md-6 col-lg-4 reveal-up" id="<?= htmlspecialchars($c['id']) ?>">
                    <?php include __DIR__ . '/includes/partials/course-card-3d.php'; ?>
                </div>
                <?php endforeach; ?>
            </div>
        </div>
        <?php endforeach; ?>

        <div class="cta-band reveal-up" id="enroll">
            <h2 class="h3 mb-3">Admission open — secure your seat</h2>
            <p class="section-lead mx-auto mb-4">WhatsApp us with the course name or use the contact form.</p>
            <a class="btn btn-adnexa btn-lg" href="https://wa.me/<?= SITE_WHATSAPP ?>?text=Hi%2C%20I%20want%20to%20enroll%20in%20a%20course." target="_blank" rel="noopener"><i class="bi bi-whatsapp me-2"></i><?= SITE_PHONE_DISPLAY ?></a>
        </div>
    </div>
</section>

<?php require_once __DIR__ . '/includes/footer.php'; ?>
