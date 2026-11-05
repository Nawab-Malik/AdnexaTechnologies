</main>

<footer class="site-footer">
    <div class="container">
        <div class="row g-4 py-5">
            <div class="col-lg-4">
                <img src="<?= BASE_URL ?>/assets/img/logo-dark.jpg" alt="<?= SITE_NAME ?>" class="footer-logo mb-3" width="72" height="72">
                <p class="text-secondary mb-3"><?= SITE_TAGLINE ?></p>
                <p class="small text-secondary">Practical training and digital solutions for students, freelancers, and businesses.</p>
            </div>
            <div class="col-6 col-lg-2">
                <h6 class="footer-heading">Explore</h6>
                <ul class="footer-links">
                    <li><a href="<?= BASE_URL ?>/about.php">About Us</a></li>
                    <li><a href="<?= BASE_URL ?>/company.php">Company</a></li>
                    <!-- <li><a href="<?= BASE_URL ?>/ceo.php">About CEO</a></li>
                    <li><a href="<?= BASE_URL ?>/team.php">Our Team</a></li> -->
                    <li><a href="<?= BASE_URL ?>/services.php">Services</a></li>
                    <li><a href="<?= BASE_URL ?>/courses.php">Courses</a></li>
                    <li><a href="<?= BASE_URL ?>/portfolio.php">Portfolio</a></li>
                </ul>
            </div>
            <div class="col-6 col-lg-3">
                <h6 class="footer-heading">Training</h6>
                <ul class="footer-links">
                    <li><a href="<?= BASE_URL ?>/courses.php#web">Web Development</a></li>
                    <li><a href="<?= BASE_URL ?>/courses.php#marketing">Digital Marketing</a></li>
                    <li><a href="<?= BASE_URL ?>/courses.php#seo">SEO</a></li>
                    <li><a href="<?= BASE_URL ?>/courses.php#social">Social Media Marketing</a></li>  
                    <li><a href="<?= BASE_URL ?>/courses.php#automation">Automation &amp; AI</a></li>
                    <!-- <li><a href="<?= BASE_URL ?>/courses.php#graphics">Graphics Design</a></li> -->
                </ul>
            </div>
            <div class="col-lg-3">
                <h6 class="footer-heading">Contact</h6>
                <ul class="footer-contact list-unstyled text-secondary small">
                    <li class="mb-2"><i class="bi bi-telephone-fill me-2 text-adnexa"></i><a href="tel:+92<?= substr(SITE_PHONE, 1) ?>"><?= SITE_PHONE_DISPLAY ?></a></li>
                    <li class="mb-2"><i class="bi bi-whatsapp me-2 text-adnexa"></i><a href="https://wa.me/<?= SITE_WHATSAPP ?>" target="_blank" rel="noopener">WhatsApp</a></li>
                    <li class="mb-2"><i class="bi bi-geo-alt-fill me-2 text-adnexa"></i><?= SITE_ADDRESS ?></li>
                </ul>
            </div>
        </div>
        <div class="footer-bottom py-3 border-top border-secondary border-opacity-25">
            <div class="row align-items-center">
                <div class="col-md-6 small text-secondary">&copy; <?= date('Y') ?> <?= SITE_NAME ?>. All rights reserved.</div>
                <div class="col-md-6 text-md-end small text-secondary mt-2 mt-md-0">Online learning · Flexible timings · Beginner to advanced</div>
            </div>
        </div>
    </div>
</footer>

<a href="https://wa.me/<?= SITE_WHATSAPP ?>" class="whatsapp-float" target="_blank" rel="noopener" aria-label="Chat on WhatsApp">
    <i class="bi bi-whatsapp"></i>
</a>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/three.js/r128/three.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/gsap/3.12.5/gsap.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/gsap/3.12.5/ScrollTrigger.min.js"></script>
<script src="<?= BASE_URL ?>/assets/js/globe.js"></script>
<script src="<?= BASE_URL ?>/assets/js/scroll-effects.js"></script>
<script src="<?= BASE_URL ?>/assets/js/carousel.js"></script>
<script src="<?= BASE_URL ?>/assets/js/main.js"></script>
</body>
</html>
