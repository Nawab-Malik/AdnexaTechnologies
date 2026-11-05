<?php
require_once __DIR__ . '/includes/config.php';
require_once __DIR__ . '/includes/data.php';
require_once __DIR__ . '/includes/carousel.php';
$current_page = 'home';
$page_title = page_title('Home');
require_once __DIR__ . '/includes/header.php';

$services = home_services();
$courseHighlights = home_course_highlights();
$orbitItems = orbit_services();
$teamRoster = adnexa_team_roster();
?>

<section class="hero-section">
    <div class="container">
        <div class="row align-items-center g-4">
            <div class="col-lg-6">
                <div class="hero-badge reveal-up">
                    <i class="bi bi-stars"></i> Digital marketing &amp; web solutions
                </div>
                <h1 class="hero-title reveal-up">
                    Building digital solutions that drive <span class="highlight">real growth</span>
                </h1>
                <p class="section-lead reveal-up">
                    We help businesses grow online with digital marketing, web development, e-commerce, and automation — strategy to execution, with measurable results.
                </p>
                <div class="d-flex flex-wrap gap-3 mt-4 reveal-up">
                    <a class="btn btn-adnexa btn-lg" href="<?= BASE_URL ?>/services.php">Explore Services</a>
                    <a class="btn btn-outline-adnexa btn-lg" href="<?= BASE_URL ?>/contact.php#quote">Get a Quote</a>
                </div>
                <div class="hero-stats reveal-up">
                    <div class="stat-item"><div class="stat-glow"></div><strong>50+</strong><span>Projects</span></div>
                    <div class="stat-item"><div class="stat-glow"></div><strong>30+</strong><span>Happy clients</span></div>
                    <div class="stat-item"><div class="stat-glow"></div><strong>3+</strong><span>Years</span></div>
                    <div class="stat-item"><div class="stat-glow"></div><strong>100%</strong><span>Satisfaction</span></div>
                </div>
            </div>
            <div class="col-lg-6">
                <div class="hero-visual reveal-up">
                    <div class="float-cube c1" aria-hidden="true"></div>
                    <div class="float-cube c2" aria-hidden="true"></div>
                    <div class="float-cube c3" aria-hidden="true"></div>
                    <div class="hero-orbit">
                        <div class="hero-ring hero-ring-cw" aria-hidden="true"></div>
                        <div class="hero-ring hero-ring-ccw" aria-hidden="true"></div>
                        <div class="hero-portrait-wrap">
                            <img src="<?= img_url(CEO_IMG_HERO) ?>" alt="<?= SITE_NAME ?> — owner">
                        </div>
                        <div class="hero-a-mark" aria-hidden="true"></div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<div class="container">
    <div class="trust-bar reveal-up">
        <span class="trust-item"><i class="bi bi-graph-up-arrow"></i> Digital marketing</span>
        <span class="trust-item"><i class="bi bi-code-slash"></i> Web &amp; app development</span>
        <span class="trust-item"><i class="bi bi-shield-check"></i> Secure &amp; scalable</span>
        <span class="trust-item"><i class="bi bi-people"></i> Dedicated support</span>
        <span class="trust-item"><i class="bi bi-clock-history"></i> On-time delivery</span>
    </div>
</div>

<section class="py-5" id="services-preview">
    <div class="container py-lg-4">
        <div class="d-flex flex-column flex-md-row align-items-md-end justify-content-between gap-3 mb-4 reveal-up">
            <div>
                <span class="section-tag">What we do</span>
                <h2 class="section-title mb-2">Our <span class="highlight">Services</span></h2>
                <p class="section-lead mb-0">Pauses on each service, then next — hover to hold. Loops from the start again.</p>
            </div>
            <a class="btn btn-outline-adnexa btn-sm flex-shrink-0" href="<?= BASE_URL ?>/services.php">All services</a>
        </div>
        <?php
        render_adnexa_carousel('services-carousel', $services, function ($i, $s) {
            include __DIR__ . '/includes/partials/service-card-3d.php';
        }, true, 1600, 'step', true);
        ?>
    </div>
</section>

<section class="py-5 bg-deep-section" id="team-preview">
    <div class="container py-lg-4">
        <div class="text-center mb-4 reveal-up">
            <span class="section-tag">Our team</span>
            <h2 class="section-title">Meet our <span class="highlight">expert team</span></h2>
            <p class="section-lead mx-auto">Stops on each member, then slides to next — hover to pause. Hover card for 3D glow.</p>
        </div>
        <?php
        render_adnexa_carousel('team-carousel', $teamRoster, function ($i, $m) {
            ?>
            <article class="team-showcase-card team-showcase-card--carousel">
                <div class="team-shade-3d" aria-hidden="true"></div>
                <img src="<?= img_url($m['photo']) ?>" alt="<?= htmlspecialchars($m['name']) ?>" loading="lazy">
                <div class="team-showcase-overlay">
                    <span class="team-showcase-role"><?= htmlspecialchars($m['role']) ?></span>
                    <h3 class="team-showcase-name"><?= htmlspecialchars($m['name']) ?></h3>
                    <a class="team-showcase-go" href="<?= BASE_URL ?>/<?= htmlspecialchars($m['link']) ?>" aria-label="View <?= htmlspecialchars($m['name']) ?>"><i class="bi bi-arrow-right"></i></a>
                </div>
            </article>
            <?php
        }, true, 1600, 'step', true);
        ?>
        <div class="text-center mt-4 reveal-up">
            <a class="btn btn-outline-adnexa" href="<?= BASE_URL ?>/team.php">Complete team</a>
        </div>
    </div>
</section>

<section class="py-5" id="why-us">
    <div class="container py-lg-4">
        <div class="row align-items-center g-5">
            <div class="col-lg-6 reveal-up">
                <span class="section-tag">Why choose us</span>
                <h2 class="section-title">We don&rsquo;t just run ads — we build <span class="highlight">your business online</span></h2>
                <p class="section-lead">From landing pages to live campaigns, we combine design, development, and marketing so your brand grows with clarity and confidence.</p>
                <ul class="list-unstyled mt-4 feature-list">
                    <li class="feature-list-item"><i class="bi bi-stars"></i><span>Result-focused digital marketing</span></li>
                    <li class="feature-list-item"><i class="bi bi-shield-check"></i><span>High performance &amp; security</span></li>
                    <li class="feature-list-item"><i class="bi bi-people"></i><span>Expert team &amp; ongoing support</span></li>
                    <li class="feature-list-item"><i class="bi bi-clock-history"></i><span>On-time delivery &amp; transparent reporting</span></li>
                </ul>
            </div>
            <div class="col-lg-6 reveal-up">
                <p class="text-center small text-secondary mb-3">Hover to pause — skills orbit continuously</p>
                <div class="tech-orbit-wrap" id="techOrbit">
                    <div class="tech-orbit-ring" aria-hidden="true"></div>
                    <div class="tech-orbit-spinner">
                        <?php
                        $count = count($orbitItems);
                        foreach ($orbitItems as $idx => $label):
                            $angle = (360 / $count) * $idx;
                            ?>
                        <span class="tech-orbit-node" style="--angle: <?= $angle ?>deg;">
                            <span class="tech-orbit-label"><?= htmlspecialchars($label) ?></span>
                        </span>
                        <?php endforeach; ?>
                    </div>
                    <div class="tech-orbit-core">DIGITAL<br>SKILLS</div>
                </div>
            </div>
        </div>
    </div>
</section>

<section class="py-4 courses-compact" id="courses-preview">
    <div class="container reveal-up">
        <div class="courses-compact-head">
            <div>
                <span class="section-tag">Training</span>
                <h2 class="h5 mb-0 text-light">We also offer <span class="highlight">practical courses</span></h2>
            </div>
            <a class="link-arrow" href="<?= BASE_URL ?>/courses.php">View all courses <i class="bi bi-arrow-right"></i></a>
        </div>
        <div class="row g-3 mt-2">
            <?php foreach ($courseHighlights as $ch): ?>
            <div class="col-md-4">
                <a class="course-pill" href="<?= BASE_URL ?>/courses.php#enroll">
                    <i class="bi <?= htmlspecialchars($ch['icon']) ?>"></i>
                    <span>
                        <strong><?= htmlspecialchars($ch['title']) ?></strong>
                        <small><?= htmlspecialchars($ch['note']) ?></small>
                    </span>
                </a>
            </div>
            <?php endforeach; ?>
        </div>
    </div>
</section>

<section class="py-5" id="about-preview">
    <div class="container py-lg-3">
        <div class="row align-items-center g-5">
            <div class="col-lg-5 reveal-up">
                <div class="founder-card neo-card">
                    <div class="neo-card-shine"></div>
                    <div class="founder-card-photo">
                        <img src="<?= img_url(CEO_IMG_PROFILE) ?>" alt="<?= CEO_ROLE ?>">
                    </div>
                    <div class="founder-card-body">
                        <span class="section-tag mb-2">Leadership</span>
                        <p class="founder-role-text mb-2"><?= CEO_ROLE ?></p>
                        <p class="small text-secondary mb-3"><?= CEO_BIO ?></p>
                        <a class="link-arrow" href="<?= BASE_URL ?>/ceo.php">About our CEO <i class="bi bi-arrow-right"></i></a>
                    </div>
                </div>
            </div>
            <div class="col-lg-7 reveal-up">
                <span class="section-tag">About Adnexa</span>
                <h2 class="section-title">Your partner for <span class="highlight">digital growth</span></h2>
                <p class="section-lead">Adnexa Technologies delivers client projects in marketing and development, with optional hands-on training for learners who want the same skills.</p>
                <div class="row g-3 mt-2">
                    <div class="col-sm-6">
                        <div class="mini-feature">
                            <i class="bi bi-briefcase"></i>
                            <div><strong>Agency services</strong><span>Marketing, web, apps, AI</span></div>
                        </div>
                    </div>
                    <div class="col-sm-6">
                        <div class="mini-feature">
                            <i class="bi bi-mortarboard"></i>
                            <div><strong>Training</strong><span>Focused programs — see courses</span></div>
                        </div>
                    </div>
                </div>
                <div class="d-flex flex-wrap gap-3 mt-4">
                    <a class="btn btn-adnexa" href="<?= BASE_URL ?>/company.php">Our company</a>
                    <a class="btn btn-outline-adnexa" href="<?= BASE_URL ?>/about.php">Learn more</a>
                </div>
            </div>
        </div>
    </div>
</section>

<section class="pb-5">
    <div class="container reveal-up">
        <div class="cta-band">
            <h2 class="section-title mb-3">Ready to <span class="highlight">grow online</span>?</h2>
            <p class="section-lead mx-auto mb-4">Request a quote for your project — or ask about our training programs.</p>
            <div class="d-flex flex-wrap justify-content-center gap-3">
                <a class="btn btn-adnexa btn-lg" href="<?= BASE_URL ?>/contact.php#quote">Get a Quote</a>
                <a class="btn btn-outline-adnexa btn-lg" href="https://wa.me/<?= SITE_WHATSAPP ?>?text=Hi%20Adnexa%2C%20I%20need%20digital%20marketing%20help." target="_blank" rel="noopener"><i class="bi bi-whatsapp me-2"></i>WhatsApp</a>
            </div>
        </div>
    </div>
</section>

<?php require_once __DIR__ . '/includes/footer.php'; ?>
