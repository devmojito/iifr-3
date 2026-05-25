<?php
require_once __DIR__ . '/../../iifr-config.php';
?>
<!-- Footer — v1 layout -->
<footer class="iifr-v1-footer">
  <div class="wrap">
    <div class="foot-grid">
      <div class="foot-brand">
        <div class="logo-mark">IIFR<span class="dot">.</span></div>
        <p>IIFR is India's first institute dedicated exclusively to faculty research, teaching excellence, and academic leadership — for India and the Global South.</p>
        <address class="meta">
          <a href="https://www.google.com/maps?q=Bharatiya+Vidya+Bhavan%2C+KG+Marg%2C+Copernicus+Marg%2C+New+Delhi%2C+Delhi+110001" target="_blank" rel="noopener"><b>Bharatiya Vidya Bhavan</b>, KG Marg, Copernicus Marg,<br/>New Delhi, Delhi 110001, India</a><br/>
          <a href="tel:+917981895005">+91-79818-95005</a> · <a href="mailto:<?= htmlspecialchars(IIFR_INFO_EMAIL, ENT_QUOTES, 'UTF-8'); ?>"><?= htmlspecialchars(IIFR_INFO_EMAIL, ENT_QUOTES, 'UTF-8'); ?></a>
        </address>
        <div class="socials" aria-label="Social links">
          <a class="soc" href="#" aria-label="LinkedIn">in</a>
          <a class="soc" href="#" aria-label="X / Twitter">𝕏</a>
          <a class="soc" href="#" aria-label="YouTube">▶</a>
          <a class="soc" href="mailto:<?= htmlspecialchars(IIFR_INFO_EMAIL, ENT_QUOTES, 'UTF-8'); ?>" aria-label="Email"><svg class="icon" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true"><rect x="2" y="4" width="20" height="16" rx="2"/><path d="m22 6-10 7L2 6"/></svg></a>
        </div>
      </div>
      <div>
        <h5>Navigate</h5>
        <ul>
          <li><a href="<?= IIFR_BASE ?>">Home</a></li>
          <li><a href="about.php">About Us</a></li>
          <li><a href="faculty.php">Faculty</a></li>
          <li><a href="programmes.php">Programmes</a></li>
          <li><a href="insights.php">Insights</a></li>
        </ul>
      </div>
      <div>
        <h5>Programmes</h5>
        <ul>
          <li><a href="ecp.php">ECP — Educators' Certificate</a></li>
          <li><a href="efm.php">EFM — Executive Fellow</a></li>
          <li><a href="applied-research.php">Research &amp; Faculty Workshops</a></li>
          <li><a href="programmes.php">Custom Programmes</a></li>
        </ul>
      </div>
      <div class="foot-newscol">
        <h5>Get Started</h5>
        <p>Speak with our team about programmes, partnerships, and admissions.</p>
        <div class="iifr-v1-footer__ctas">
          <a class="btn btn-out-white" href="contact.php">Contact Us</a>
          <a class="btn btn-gold" href="programmes.php">Explore Programmes</a>
        </div>
      </div>
    </div>
    <div class="foot-credits">
      <span>Copyright © <?= date('Y'); ?> IIFR — International Institute for Faculty &amp; Research. All Rights Reserved.</span>
    </div>
  </div>
</footer>
<!-- footer end -->

<?php /* Site-wide application modal — every Apply/Register button on the site opens this. */ ?>
<?php include __DIR__ . '/../components/apply-modal.php'; ?>
