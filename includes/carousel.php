<?php
/**
 * @param string $id Unique carousel id
 * @param callable $renderSlide function(int $index, mixed $item): void
 * @param array $items
 */
function render_adnexa_carousel(string $id, array $items, callable $renderSlide, bool $autoplay = false, int $autoplayMs = 2600, string $mode = 'step', bool $hideNav = false): void
{
    $autoplayAttr = $autoplay ? 'true' : 'false';
    $hideNavAttr = $hideNav ? 'true' : 'false';
    ?>
    <div class="adnexa-carousel reveal-up" data-carousel data-carousel-mode="<?= htmlspecialchars($mode) ?>" data-autoplay="<?= $autoplayAttr ?>" data-autoplay-ms="<?= (int) $autoplayMs ?>" data-carousel-hide-nav="<?= $hideNavAttr ?>" id="<?= htmlspecialchars($id) ?>">
        <button type="button" class="carousel-nav carousel-prev" aria-label="Previous slide" data-carousel-prev>
            <i class="bi bi-chevron-left"></i>
        </button>
        <div class="carousel-viewport" tabindex="0" data-carousel-viewport>
            <div class="carousel-track" data-carousel-track>
                <?php foreach ($items as $i => $item): ?>
                <div class="carousel-slide">
                    <?php $renderSlide($i, $item); ?>
                </div>
                <?php endforeach; ?>
            </div>
        </div>
        <button type="button" class="carousel-nav carousel-next" aria-label="Next slide" data-carousel-next>
            <i class="bi bi-chevron-right"></i>
        </button>
        <div class="carousel-dots" data-carousel-dots aria-hidden="true"></div>
    </div>
    <?php
}
