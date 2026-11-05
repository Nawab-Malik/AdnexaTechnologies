<?php
/** @var string $page_title */
/** @var string $current_page */
if (!defined('SITE_NAME')) {
    require_once __DIR__ . '/config.php';
}
$current_page = $current_page ?? 'home';
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="Adnexa Technologies — digital marketing, web development, and practical IT training. Build. Innovate. Grow.">
    <title><?= htmlspecialchars($page_title ?? page_title()) ?></title>
    <link rel="icon" type="image/png" href="<?= img_url(FAVICON_PATH) ?>">
    <link rel="apple-touch-icon" href="<?= img_url(FAVICON_PATH) ?>">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@400;500;600;700;800&family=Orbitron:wght@600;700&display=swap" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css" rel="stylesheet">
    <link href="<?= BASE_URL ?>/assets/css/main.css" rel="stylesheet">
</head>
<body class="adnexa-body" data-page="<?= htmlspecialchars($current_page) ?>">
<div id="globe-canvas-wrap" aria-hidden="true"><canvas id="globe-canvas"></canvas></div>
<div class="site-overlay" aria-hidden="true"></div>

<header class="site-header">
    <nav class="navbar navbar-expand-lg navbar-dark">
        <div class="container">
            <a class="navbar-brand d-flex align-items-center gap-2" href="<?= BASE_URL ?>/index.php">
                <img src="<?= BASE_URL ?>/assets/img/logo-dark.jpg" alt="<?= SITE_NAME ?>" class="brand-logo" width="48" height="48">
                <span class="brand-text d-none d-sm-block">
                    <span class="brand-name">ADNEXA</span>
                    <span class="brand-sub">TECHNOLOGIES</span>
                </span>
            </a>
            <button class="navbar-toggler border-0 shadow-none" type="button" data-bs-toggle="collapse" data-bs-target="#mainNav" aria-controls="mainNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="mainNav">
                <ul class="navbar-nav mx-lg-auto gap-lg-1">
                    <li class="nav-item"><a class="nav-link <?= nav_active($current_page, 'home') ?>" href="<?= BASE_URL ?>/index.php">Home</a></li>
                    <li class="nav-item"><a class="nav-link <?= nav_active($current_page, 'about') ?>" href="<?= BASE_URL ?>/about.php">About</a></li>
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle <?= nav_team_active($current_page) ?>" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">Our Team</a>
                        <ul class="dropdown-menu dropdown-menu-dark adnexa-dropdown">
                            <li><a class="dropdown-item" href="<?= BASE_URL ?>/ceo.php">CEO — <?= htmlspecialchars(CEO_NAME) ?></a></li>
                            <li><a class="dropdown-item" href="<?= BASE_URL ?>/team.php">Complete Team</a></li>
                        </ul>
                    </li>
                    <li class="nav-item"><a class="nav-link <?= nav_active($current_page, 'services') ?>" href="<?= BASE_URL ?>/services.php">Services</a></li>
                    <li class="nav-item"><a class="nav-link <?= nav_active($current_page, 'courses') ?>" href="<?= BASE_URL ?>/courses.php">Courses</a></li>
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle <?= nav_portfolio_active($current_page) ?>" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">Portfolio</a>
                        <ul class="dropdown-menu dropdown-menu-dark adnexa-dropdown">
                            <li><a class="dropdown-item" href="<?= BASE_URL ?>/portfolio.php">Our Portfolio</a></li>
                            <li><a class="dropdown-item" href="<?= BASE_URL ?>/company.php">Company &amp; Gallery</a></li>
                        </ul>
                    </li>
                </ul>
                <div class="ms-lg-3 mt-3 mt-lg-0">
                    <a class="btn btn-adnexa btn-sm px-4" href="<?= BASE_URL ?>/contact.php">Contact</a>
                </div>
            </div>
        </div>
    </nav>
</header>
<main class="site-main">
