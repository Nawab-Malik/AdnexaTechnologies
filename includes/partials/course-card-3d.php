<?php
/** @var array $c */
$bg = resolve_media_url($c['image'] ?? service_stock_image('course-web'));
?>
<article class="service-3d-card course-3d-card">
    <div class="service-3d-inner">
        <div class="service-3d-visual" style="background-image: url('<?= htmlspecialchars($bg, ENT_QUOTES) ?>')"></div>
        <div class="service-3d-overlay">
            <span class="service-3d-tag"><?= htmlspecialchars($c['group'] ?? 'Course') ?></span>
            <h3><?= htmlspecialchars($c['title']) ?></h3>
            <p><?= htmlspecialchars($c['desc']) ?></p>
            <ul class="course-3d-list">
                <?php foreach (array_slice($c['items'], 0, 3) as $item): ?>
                <li><?= htmlspecialchars($item) ?></li>
                <?php endforeach; ?>
            </ul>
            <a class="service-3d-go" href="<?= BASE_URL ?>/courses.php#enroll" aria-label="Enroll in <?= htmlspecialchars($c['title']) ?>"><i class="bi bi-arrow-right"></i></a>
        </div>
    </div>
</article>
