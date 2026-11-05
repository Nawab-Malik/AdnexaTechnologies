<?php
define('SITE_NAME', 'Adnexa Technologies');
define('SITE_TAGLINE', 'BUILD. INNOVATE. GROW.');
define('SITE_PHONE', '03351423116');
define('SITE_PHONE_DISPLAY', '0335 1423116');
define('SITE_WHATSAPP', '923351423116');
define('SITE_EMAIL', 'info@adnexatechnologies.com');
define('SITE_ADDRESS', 'Uch Sharif Pakistan');
define('BASE_URL', '/AdnexaTechnologies');
define('CEO_NAME', 'Adnan Bashir');
define('CEO_ROLE', 'Founder & CEO');
define('CEO_BIO', 'Leading Adnexa Technologies with a focus on digital marketing, development, and practical training — helping clients grow online and teams deliver with excellence.');
define('CEO_IMG_HERO', 'owner-hero.png');
define('CEO_IMG_PROFILE', 'owner-photo.jpeg');
define('FAVICON_PATH', 'Neon Blue ADNEXA Technologies Badge.png');

function img_url(string $relativePath): string
{
    $relativePath = ltrim(str_replace('\\', '/', $relativePath), '/');
    $parts = array_map('rawurlencode', explode('/', $relativePath));
    return BASE_URL . '/assets/img/' . implode('/', $parts);
}

function page_title(string $page = ''): string
{
    if ($page === '') {
        return SITE_NAME . ' | ' . SITE_TAGLINE;
    }
    return $page . ' | ' . SITE_NAME;
}

function nav_active(string $current, string $item): string
{
    return $current === $item ? 'active' : '';
}

function nav_team_active(string $current): string
{
    return in_array($current, ['team', 'ceo'], true) ? 'active' : '';
}

function nav_portfolio_active(string $current): string
{
    return in_array($current, ['portfolio', 'company'], true) ? 'active' : '';
}
