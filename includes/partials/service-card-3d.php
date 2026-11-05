<?php
/** @var array $s */
$bg = resolve_media_url($s['image'] ?? service_stock_image('marketing'));
$href = BASE_URL . '/' . ($s['link'] ?? 'services.php');
?>
<article class="service-3d-card">
    <div class="service-3d-inner">
        <div class="service-3d-visual" style="background-image: url('<?= htmlspecialchars($bg, ENT_QUOTES) ?>')"></div>
        <div class="service-3d-overlay">
            <span class="service-3d-tag">Service</span>
            <h3><?= htmlspecialchars($s['title']) ?></h3>
            <p><?= htmlspecialchars($s['desc']) ?></p>
            <a class="service-3d-go" href="<?= htmlspecialchars($href) ?>" aria-label="Learn more about <?= htmlspecialchars($s['title']) ?>"><i class="bi bi-arrow-right"></i></a>
        </div>
    </div>
</article>
