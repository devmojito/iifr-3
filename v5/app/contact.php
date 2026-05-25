<?php
$page_title = 'Contact Us — IIFR';
$body_class = 'page iifr-redesign-scope';
ob_start();
include_once 'partials/header/transparent-header.php';
?>

<!-- ============ HERO ============ -->
<div class="iifr-page-hero">
    <div class="iifr-page-hero__bg" style="background-image:url('assets/images/academy/7.jpeg');"></div>
    <div class="iifr-page-hero__inner">
        <span class="iifr-page-hero__eyebrow">Contact Us</span>
        <h1>Get in Touch</h1>
        <p>Questions about IIFR, programmes, or partnerships — we read every enquiry and reply personally.</p>
        <div class="iifr-page-hero__cta">
            <a href="#inquiry-form" class="iifr-btn-primary">Send a Message</a>
            <a href="#" class="iifr-btn-outline" data-bs-toggle="modal" data-bs-target="#iifrApplyModal" role="button">Apply Now</a>
        </div>
    </div>
</div>

<!-- ============ CONTACT INFO CARDS ============ -->
<section class="iifr-section">
    <div class="iifr-grid iifr-grid--3">
        <div class="iifr-contact-card">
            <div class="iifr-contact-card__icon"><i class="fa-light fa-location-dot" aria-hidden="true"></i></div>
            <span class="iifr-contact-card__title">Visit Us</span>
            <p>
                Bharatiya Vidya Bhavan,<br>
                KG Marg, Copernicus Marg,<br>
                New Delhi, Delhi 110001, India
            </p>
        </div>

        <div class="iifr-contact-card">
            <div class="iifr-contact-card__icon"><i class="fa-light fa-envelope" aria-hidden="true"></i></div>
            <span class="iifr-contact-card__title">Email Us</span>
            <p>
                <a href="mailto:<?= htmlspecialchars(IIFR_INFO_EMAIL, ENT_QUOTES, 'UTF-8'); ?>"><?= htmlspecialchars(IIFR_INFO_EMAIL, ENT_QUOTES, 'UTF-8'); ?></a>
            </p>
        </div>

        <div class="iifr-contact-card">
            <div class="iifr-contact-card__icon"><i class="fa-light fa-clock" aria-hidden="true"></i></div>
            <span class="iifr-contact-card__title">Office Hours</span>
            <p>
                Mon – Fri: 9 AM – 6 PM<br>
                Saturday: 9 AM – 4 PM
            </p>
        </div>
    </div>
</section>

<!-- ============ INQUIRY FORM ============ -->
<section class="iifr-section iifr-paper" id="inquiry-form">
    <?php
        $iifr_form_context = 'Contact';
        $iifr_form_return = 'contact.php';
        $iifr_form_heading = 'Send us a message';
        $iifr_form_intro = 'Questions about IIFR, programmes, or partnerships — we read every enquiry.';
        include dirname(__DIR__) . '/partials/components/inquiry-form.php';
    ?>
</section>

<!-- ============ VISIT US — 2-COL: CONTENT LEFT, MAP RIGHT ============ -->
<section class="iifr-section">
    <div class="iifr-visit">
        <div class="iifr-visit__content">
            <span class="iifr-eyebrow">Visit Us</span>
            <h2>IIFR — New Delhi.</h2>
            <hr class="iifr-gold-line">

            <ul class="iifr-visit__details">
                <li>
                    <span class="iifr-visit__icon"><i class="fa-light fa-location-dot" aria-hidden="true"></i></span>
                    <div>
                        <strong>Address</strong>
                        Bharatiya Vidya Bhavan,<br>
                        KG Marg, Copernicus Marg,<br>
                        New Delhi, Delhi 110001, India
                    </div>
                </li>
                <li>
                    <span class="iifr-visit__icon"><i class="fa-light fa-clock" aria-hidden="true"></i></span>
                    <div>
                        <strong>Office Hours</strong>
                        Mon – Fri: 9 AM – 6 PM<br>
                        Saturday: 9 AM – 4 PM
                    </div>
                </li>
                <li>
                    <span class="iifr-visit__icon"><i class="fa-light fa-envelope" aria-hidden="true"></i></span>
                    <div>
                        <strong>Email</strong>
                        <a href="mailto:<?= htmlspecialchars(IIFR_INFO_EMAIL, ENT_QUOTES, 'UTF-8'); ?>"><?= htmlspecialchars(IIFR_INFO_EMAIL, ENT_QUOTES, 'UTF-8'); ?></a>
                    </div>
                </li>
            </ul>

            <a href="https://www.google.com/maps?q=Bharatiya+Vidya+Bhavan%2C+KG+Marg%2C+Copernicus+Marg%2C+New+Delhi%2C+Delhi+110001"
               target="_blank" rel="noopener noreferrer" class="iifr-btn-dark">
                Get Directions
            </a>
        </div>

        <div class="iifr-visit__map">
            <iframe
                src="https://www.google.com/maps?q=Bharatiya+Vidya+Bhavan%2C+KG+Marg%2C+Copernicus+Marg%2C+New+Delhi%2C+Delhi+110001&z=17&output=embed"
                allowfullscreen=""
                loading="lazy"
                referrerpolicy="no-referrer-when-downgrade"
                title="Bharatiya Vidya Bhavan on Google Maps"></iframe>
        </div>
    </div>
</section>
<?php
    $class = 'v__1';
    include_once 'partials/footer/footer__default.php';
    $content = ob_get_clean();
    include __DIR__ . '/base.php';
?>
