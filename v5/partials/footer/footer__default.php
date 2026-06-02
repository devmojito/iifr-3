<?php
require_once __DIR__ . '/../../iifr-config.php';
?>
<!-- Footer — v1 layout -->
<footer class="iifr-v1-footer">
  <div class="iifr-foot-cta">
    <div class="wrap iifr-foot-cta__inner">
      <div class="iifr-foot-cta__left">
        <span class="iifr-foot-cta__icon" aria-hidden="true">
          <i class="fa-light fa-building-columns"></i>
        </span>
        <div>
          <h3 class="iifr-foot-cta__title">Let's Build the Future of Education, <span>Together.</span></h3>
          <p class="iifr-foot-cta__sub">Partner, learn, collaborate, and lead transformation with IIFR.</p>
        </div>
      </div>
      <a href="contact.php" class="btn btn-gold iifr-foot-cta__btn">Engage with Us</a>
    </div>
  </div>
  <div class="wrap">
    <div class="foot-grid">
      <div class="foot-brand">
        <a href="<?= IIFR_BASE ?>" class="logo" aria-label="IIFR — Home">
          <img class="logo-emblem" src="assets/logo.png" alt="IIFR emblem">
          <span class="logo-mark">IIFR<span class="dot">.</span></span>
        </a>
        <p>IIFR is India's first institute dedicated exclusively to faculty research, teaching excellence, and academic leadership — for India and the Global South.</p>
        <address class="meta">
          <a href="https://www.google.com/maps?q=Bharatiya+Vidya+Bhavan%2C+KG+Marg%2C+Copernicus+Marg%2C+New+Delhi%2C+Delhi+110001" target="_blank" rel="noopener"><b>Bharatiya Vidya Bhavan</b>, KG Marg, Copernicus Marg,<br/>New Delhi, Delhi 110001, India</a><br/>
          <a href="tel:+917981895005">+91-79818-95005</a> · <a href="mailto:<?= htmlspecialchars(IIFR_INFO_EMAIL, ENT_QUOTES, 'UTF-8'); ?>"><?= htmlspecialchars(IIFR_INFO_EMAIL, ENT_QUOTES, 'UTF-8'); ?></a>
        </address>
      </div>
      <div>
        <h5>Navigate</h5>
        <ul>
          <li><a href="<?= IIFR_BASE ?>">Home</a></li>
          <li><a href="about.php">About Us</a></li>
          <li><a href="research.php">Research and Faculty</a></li>
          <li><a href="programmes.php">Programmes</a></li>
          <li><a href="insights.php">Insights</a></li>
        </ul>
      </div>
      <div class="foot-newscol">
        <h5>Get Started</h5>
        <p>Speak with our team about programmes, partnerships, and admissions.</p>
        <div class="iifr-v1-footer__ctas">
          <a class="btn btn-out-white" href="contact.php">Contact Us</a>
          <a class="btn btn-gold" href="programmes.php">Explore Programmes</a>
        </div>
        <div class="socials" aria-label="Social links">
          <a class="soc" href="https://www.linkedin.com/company/international-institute-for-faculty-research/" target="_blank" rel="noopener" aria-label="LinkedIn">
            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor" aria-hidden="true"><path d="M20.45 20.45h-3.56v-5.57c0-1.33-.03-3.04-1.85-3.04-1.85 0-2.14 1.45-2.14 2.94v5.67H9.34V9h3.42v1.56h.05c.48-.9 1.64-1.85 3.37-1.85 3.6 0 4.27 2.37 4.27 5.45v6.29zM5.34 7.43a2.07 2.07 0 1 1 0-4.14 2.07 2.07 0 0 1 0 4.14zM7.12 20.45H3.56V9h3.56v11.45zM22.22 0H1.77C.79 0 0 .77 0 1.73v20.54C0 23.23.79 24 1.77 24h20.45c.98 0 1.78-.77 1.78-1.73V1.73C24 .77 23.2 0 22.22 0z"/></svg>
          </a>
          <a class="soc" href="mailto:<?= htmlspecialchars(IIFR_INFO_EMAIL, ENT_QUOTES, 'UTF-8'); ?>" aria-label="Email">
            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true"><rect x="2" y="4" width="20" height="16" rx="2"/><path d="m22 6-10 7L2 6"/></svg>
          </a>
        </div>
      </div>
    </div>
  </div>
</footer>
<!-- footer end -->

<?php /* Site-wide application modal — every Apply/Register button on the site opens this. */ ?>
<?php include __DIR__ . '/../components/apply-modal.php'; ?>
