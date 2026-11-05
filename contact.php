<?php
require_once __DIR__ . '/includes/config.php';
$current_page = 'contact';
$page_title = page_title('Contact');

$formSent = false;
$formError = '';

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $name = trim($_POST['name'] ?? '');
    $email = trim($_POST['email'] ?? '');
    $phone = trim($_POST['phone'] ?? '');
    $subject = trim($_POST['subject'] ?? 'General inquiry');
    $message = trim($_POST['message'] ?? '');

    if ($name === '' || $email === '' || $message === '') {
        $formError = 'Please fill in name, email, and message.';
    } elseif (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
        $formError = 'Please enter a valid email address.';
    } else {
        // Phase 2: save to MySQL. For now, log locally for testing.
        $logDir = __DIR__ . '/storage';
        if (!is_dir($logDir)) {
            @mkdir($logDir, 0755, true);
        }
        $line = date('c') . " | $name | $email | $phone | $subject | " . str_replace(["\r", "\n"], ' ', $message) . PHP_EOL;
        @file_put_contents($logDir . '/inquiries.log', $line, FILE_APPEND | LOCK_EX);
        $formSent = true;
    }
}

require_once __DIR__ . '/includes/header.php';
?>

<section class="page-hero">
    <div class="container">
        <span class="section-tag reveal-up">Contact</span>
        <h1 class="reveal-up">Let&rsquo;s <span class="highlight">talk</span></h1>
        <p class="section-lead reveal-up">Enroll in a course, request a project quote, or ask anything — we respond on WhatsApp and email.</p>
    </div>
</section>

<section class="pb-5">
    <div class="container">
        <div class="row g-4">
            <div class="col-lg-5 reveal-up">
                <article class="glass-card h-100">
                    <h3>Get in touch</h3>
                    <ul class="footer-contact list-unstyled text-secondary mt-4">
                        <li class="mb-3"><i class="bi bi-telephone-fill me-2 text-adnexa"></i><a href="tel:+92<?= substr(SITE_PHONE, 1) ?>"><?= SITE_PHONE_DISPLAY ?></a></li>
                        <li class="mb-3"><i class="bi bi-whatsapp me-2 text-adnexa"></i><a href="https://wa.me/<?= SITE_WHATSAPP ?>" target="_blank" rel="noopener">Chat on WhatsApp</a></li>
                        <li class="mb-3"><i class="bi bi-envelope-fill me-2 text-adnexa"></i><a href="mailto:<?= SITE_EMAIL ?>"><?= SITE_EMAIL ?></a></li>
                        <li><i class="bi bi-geo-alt-fill me-2 text-adnexa"></i><?= SITE_ADDRESS ?></li>
                    </ul>
                </article>
            </div>
            <div class="col-lg-7 reveal-up" id="quote">
                <article class="glass-card">
                    <h3>Send a message</h3>
                    <?php if ($formSent): ?>
                    <div class="alert alert-success mt-3" role="alert">Thank you! We received your message and will contact you soon.</div>
                    <?php elseif ($formError !== ''): ?>
                    <div class="alert alert-danger mt-3" role="alert"><?= htmlspecialchars($formError) ?></div>
                    <?php endif; ?>
                    <?php if (!$formSent): ?>
                    <form method="post" action="<?= BASE_URL ?>/contact.php#quote" class="mt-3">
                        <div class="row g-3">
                            <div class="col-md-6">
                                <label class="form-label text-secondary small" for="name">Full name *</label>
                                <input type="text" class="form-control bg-dark text-light border-secondary" id="name" name="name" required value="<?= htmlspecialchars($_POST['name'] ?? '') ?>">
                            </div>
                            <div class="col-md-6">
                                <label class="form-label text-secondary small" for="email">Email *</label>
                                <input type="email" class="form-control bg-dark text-light border-secondary" id="email" name="email" required value="<?= htmlspecialchars($_POST['email'] ?? '') ?>">
                            </div>
                            <div class="col-md-6">
                                <label class="form-label text-secondary small" for="phone">Phone / WhatsApp</label>
                                <input type="text" class="form-control bg-dark text-light border-secondary" id="phone" name="phone" value="<?= htmlspecialchars($_POST['phone'] ?? '') ?>">
                            </div>
                            <div class="col-md-6">
                                <label class="form-label text-secondary small" for="subject">Subject</label>
                                <select class="form-select bg-dark text-light border-secondary" id="subject" name="subject">
                                    <option value="Course enrollment">Course enrollment</option>
                                    <option value="Project quote">Project quote</option>
                                    <option value="General inquiry">General inquiry</option>
                                </select>
                            </div>
                            <div class="col-12">
                                <label class="form-label text-secondary small" for="message">Message *</label>
                                <textarea class="form-control bg-dark text-light border-secondary" id="message" name="message" rows="5" required><?= htmlspecialchars($_POST['message'] ?? '') ?></textarea>
                            </div>
                            <div class="col-12">
                                <button type="submit" class="btn btn-adnexa">Submit</button>
                            </div>
                        </div>
                    </form>
                    <?php endif; ?>
                </article>
            </div>
        </div>
    </div>
</section>

<?php require_once __DIR__ . '/includes/footer.php'; ?>
