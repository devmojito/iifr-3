<?php
require_once __DIR__ . '/../../iifr-config.php';
?>
<!-- ================================================================
     IIFR footer — compact 2-tier (main grid + legal bar)
     ================================================================ -->
<footer class="iifr-footer">

    <!-- Main grid -->
    <div class="iifr-footer__main">
        <div class="iifr-footer__inner">
            <div class="iifr-footer__grid">

                <!-- Brand column -->
                <div class="iifr-footer__brand-col">
                    <a href="<?= IIFR_BASE ?>" class="iifr-footer__brand" aria-label="IIFR — Home">
                        <img src="assets/logo.png" alt="IIFR" class="iifr-footer__logo">
                    </a>

                    <p class="iifr-footer__tagline">
                        India's institute dedicated to faculty research, teaching excellence, and academic leadership — for India and the Global South.
                    </p>

                    <ul class="iifr-footer__contact">
                        <li>
                            <span class="iifr-footer__icon"><i class="fa-light fa-location-dot" aria-hidden="true"></i></span>
                            <a href="https://www.google.com/maps?q=Bharatiya+Vidya+Bhavan%2C+KG+Marg%2C+New+Delhi" target="_blank" rel="noopener">
                                Bharatiya Vidya Bhavan,<br>KG Marg, New Delhi 110001
                            </a>
                        </li>
                        <li>
                            <span class="iifr-footer__icon"><i class="fa-light fa-envelope" aria-hidden="true"></i></span>
                            <a href="mailto:<?= htmlspecialchars(IIFR_INFO_EMAIL, ENT_QUOTES, 'UTF-8'); ?>">
                                <?= htmlspecialchars(IIFR_INFO_EMAIL, ENT_QUOTES, 'UTF-8'); ?>
                            </a>
                        </li>
                        <li>
                            <span class="iifr-footer__icon"><i class="fa-light fa-phone" aria-hidden="true"></i></span>
                            <a href="tel:+911161200000">+91 11 6120 0000</a>
                        </li>
                    </ul>

                    <span class="iifr-footer__connect-label">Connect with us</span>
                    <ul class="iifr-footer__social" aria-label="Social channels">
                        <li><a href="#" aria-label="LinkedIn"><i class="fa-brands fa-linkedin-in" aria-hidden="true"></i></a></li>
                        <li><a href="#" aria-label="X / Twitter"><i class="fa-brands fa-x-twitter" aria-hidden="true"></i></a></li>
                        <li><a href="#" aria-label="YouTube"><i class="fa-brands fa-youtube" aria-hidden="true"></i></a></li>
                        <li><a href="#" aria-label="Instagram"><i class="fa-brands fa-instagram" aria-hidden="true"></i></a></li>
                    </ul>
                </div>

                <!-- Explore -->
                <div>
                    <h6 class="iifr-footer__title">Explore</h6>
                    <ul class="iifr-footer__menu">
                        <li><a href="<?= IIFR_BASE ?>">Home</a></li>
                        <li><a href="about.php">About Us</a></li>
                        <li><a href="programmes.php">Programmes</a></li>
                        <li><a href="research.php">Research</a></li>
                        <li><a href="faculty.php">Faculty</a></li>
                        <li><a href="insights.php">Insights</a></li>
                        <li><a href="contact.php">Contact</a></li>
                    </ul>
                </div>

                <!-- Programmes -->
                <div>
                    <h6 class="iifr-footer__title">Programmes</h6>
                    <ul class="iifr-footer__menu">
                        <li><a href="ecp.php">ECP <span class="iifr-footer__menu-sub">Educators' Certificate Programme</span></a></li>
                        <li><a href="efm.php">EFM <span class="iifr-footer__menu-sub">Executive Fellow in Management</span></a></li>
                        <li><a href="programmes.php">All Programmes</a></li>
                        <li><a href="apply.php">Apply Now</a></li>
                    </ul>
                </div>

                <!-- Newsletter -->
                <div class="iifr-footer__col--newsletter">
                    <h6 class="iifr-footer__title">Stay In The Loop</h6>
                    <p class="iifr-footer__cta-text">
                        Insights on faculty development, research, and academic leadership — delivered occasionally.
                    </p>
                    <form class="iifr-footer__subscribe" action="#" method="post" onsubmit="event.preventDefault();">
                        <label for="iifr-footer-email" class="visually-hidden">Email address</label>
                        <input type="email" id="iifr-footer-email" name="email" placeholder="Your email address" required>
                        <button type="submit" aria-label="Subscribe">Subscribe</button>
                    </form>
                    <p class="iifr-footer__subscribe-note">No spam. Unsubscribe anytime.</p>
                </div>

            </div>
        </div>
    </div>

    <!-- Legal bar -->
    <div class="iifr-footer__bottom">
        <div class="iifr-footer__inner">
            <div class="iifr-footer__legal">
                <p class="iifr-footer__copy">&copy; <?= date('Y'); ?> IIFR — International Institute for Faculty &amp; Research. All rights reserved.</p>
                <p class="iifr-footer__credit">Made with <span aria-label="love">&#x2764;&#xfe0f;</span> by <a href="https://marketingmojito.com/" target="_blank" rel="noopener noreferrer">Marketing Mojito</a></p>
            </div>
        </div>
    </div>

</footer>
<!-- footer end -->

<?php /* Site-wide application modal — every Apply/Register button on the site opens this. */ ?>
<?php include __DIR__ . '/../components/apply-modal.php'; ?>
