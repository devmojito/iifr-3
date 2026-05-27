<?php
require_once __DIR__ . '/../iifr-config.php';
if (session_status() === PHP_SESSION_NONE) {
    session_start();
}
$apply_form_error = isset($_SESSION['iifr_form_error']) ? (string) $_SESSION['iifr_form_error'] : '';
$apply_form_success = !empty($_SESSION['iifr_form_success']);
unset($_SESSION['iifr_form_error'], $_SESSION['iifr_form_success']);

$page_title = 'Apply — IIFR';
$body_class = 'page iifr-redesign-scope';
ob_start();
include_once 'partials/header/transparent-header.php';
?>

<!-- ============ HERO ============ -->
<div class="iifr-page-hero">
    <div class="iifr-page-hero__bg" style="background-image:url('assets/images/academy/2.jpeg');"></div>
    <div class="iifr-page-hero__inner">
        <span class="iifr-page-hero__eyebrow">Apply</span>
        <h1>Apply to IIFR</h1>
        <p>Programme-specific application information, eligibility checklists, upcoming cohort dates, and how to reach us. Choose your pathway below to get started.</p>
        <div class="iifr-page-hero__cta">
            <a href="#" class="iifr-btn-primary" data-bs-toggle="modal" data-bs-target="#iifrApplyModal" role="button">Start Application</a>
            <a href="contact.php" class="iifr-btn-outline">Speak to Admissions</a>
        </div>
    </div>
</div>

<!-- ============ UPCOMING COHORTS ============ -->
<section class="iifr-section iifr-cream">
    <div class="iifr-section__head iifr-section__head--center">
        <span class="iifr-eyebrow">Upcoming Cohorts</span>
        <h2>Choose your pathway.</h2>
        <hr class="iifr-gold-line-center">
        <p class="iifr-lead">Dates and cohort sizes align with the IIFR programme calendar. Confirm final dates with <?= htmlspecialchars(IIFR_INFO_EMAIL, ENT_QUOTES, 'UTF-8'); ?> when you submit your interest.</p>
    </div>

    <div class="iifr-programmes">
        <a href="ecp.php" class="iifr-programme">
            <img src="assets/images/academy/5.jpeg" alt="" class="iifr-programme__img">
            <span class="iifr-programme__overlay" aria-hidden="true"></span>
            <span class="iifr-programme__tag">ECP · Next Cohort</span>
            <h3 class="iifr-programme__title">Educators' Certificate Programme</h3>
            <p class="iifr-programme__desc"><strong style="color:#fff;">Next cohort starts June 2026.</strong> Cohort size: 25–30 participants.</p>
            <span class="iifr-programme__more">Programme details</span>
        </a>
        <a href="efm.php" class="iifr-programme">
            <img src="assets/images/academy/6.jpeg" alt="" class="iifr-programme__img">
            <span class="iifr-programme__overlay" aria-hidden="true"></span>
            <span class="iifr-programme__tag">EFM · Next Cohort</span>
            <h3 class="iifr-programme__title">Executive Fellow in Management</h3>
            <p class="iifr-programme__desc"><strong style="color:#fff;">Next cohort starts July 2026.</strong> Cohort size: 25 participants.</p>
            <span class="iifr-programme__more">Programme details</span>
        </a>
    </div>
</section>

<!-- ============ ELIGIBILITY ============ -->
<section class="iifr-section">
    <div class="iifr-section__head iifr-section__head--center">
        <span class="iifr-eyebrow">Eligibility at a Glance</span>
        <h2>Who should apply.</h2>
        <hr class="iifr-gold-line-center">
        <p class="iifr-lead">Use these checklists before you apply. Full criteria and documentation are shared once you begin a conversation with our team.</p>
    </div>

    <div class="iifr-grid iifr-grid--2" style="gap:32px;">
        <article class="iifr-pathway">
            <h3 class="iifr-pathway__title">ECP — who should apply</h3>
            <p class="iifr-pathway__body" style="margin-bottom:14px;">Consider the ECP if you are:</p>
            <ul class="iifr-list">
                <li><p>A senior executive moving into academic roles as visiting faculty or Professor of Practice</p></li>
                <li><p>Faculty seeking deeper practical relevance and capability building</p></li>
                <li><p>A corporate trainer or L&amp;D professional focused on organisational upskilling</p></li>
            </ul>
            <p style="margin-top:16px;font-size:var(--iifr-fs-body);color:var(--iifr-text-mid);"><strong style="color:var(--iifr-navy);">Also relevant:</strong> junior faculty at newer institutions, and professionals from government and national service organisations.</p>
        </article>

        <article class="iifr-pathway">
            <h3 class="iifr-pathway__title">EFM — who should apply</h3>
            <p class="iifr-pathway__body" style="margin-bottom:14px;">Consider the EFM if you are:</p>
            <ul class="iifr-list">
                <li><p>Exploring a doctoral-equivalent fellowship while staying in practice</p></li>
                <li><p>Prepared for a multi-year journey (approximately 3 years) with structured research expectations</p></li>
                <li><p>A senior practitioner with a minimum of 10 years' work experience</p></li>
                <li><p>Holding a bachelor's degree (MBA preferred)</p></li>
            </ul>
        </article>
    </div>
</section>

<!-- ============ HOW TO APPLY (3 steps) ============ -->
<section class="iifr-section iifr-paper" id="how-to-apply">
    <div class="iifr-section__head iifr-section__head--center">
        <span class="iifr-eyebrow">How to Apply</span>
        <h2>Three steps to start your journey.</h2>
        <hr class="iifr-gold-line-center">
    </div>

    <div class="iifr-pathways-rich">
        <article class="iifr-pathway">
            <span class="iifr-pathway__title" style="color:var(--iifr-gold);font-size:var(--iifr-fs-eyebrow);font-weight:700;letter-spacing:2px;text-transform:uppercase;display:block;margin-bottom:8px;">Step 01</span>
            <h3 class="iifr-pathway__title">Choose your programme</h3>
            <p class="iifr-pathway__body">Review ECP or EFM in depth, then decide which pathway matches your goals and timeline.</p>
        </article>
        <article class="iifr-pathway">
            <span class="iifr-pathway__title" style="color:var(--iifr-gold);font-size:var(--iifr-fs-eyebrow);font-weight:700;letter-spacing:2px;text-transform:uppercase;display:block;margin-bottom:8px;">Step 02</span>
            <h3 class="iifr-pathway__title">Request forms &amp; details</h3>
            <p class="iifr-pathway__body">Email <?= htmlspecialchars(IIFR_INFO_EMAIL, ENT_QUOTES, 'UTF-8'); ?> with your programme choice. You will receive application materials, deadlines, and fee information.</p>
        </article>
        <article class="iifr-pathway">
            <span class="iifr-pathway__title" style="color:var(--iifr-gold);font-size:var(--iifr-fs-eyebrow);font-weight:700;letter-spacing:2px;text-transform:uppercase;display:block;margin-bottom:8px;">Step 03</span>
            <h3 class="iifr-pathway__title">Submit &amp; schedule</h3>
            <p class="iifr-pathway__body">Complete the application pack and return it by the stated deadline. We may invite you for a conversation as part of the review process.</p>
        </article>
    </div>
</section>

<!-- ============ FINAL CTA ============ -->
<section class="iifr-cta-final" id="apply-cta">
    <div class="iifr-cta-final__bg" style="background-image:url('assets/images/course/event-bg.jpg');"></div>
    <div class="iifr-cta-final__inner">
        <?php if ($apply_form_success) : ?>
            <div class="iifr-form-notice iifr-form-notice--success mb--30" role="status" style="max-width:640px;margin:0 auto 28px;text-align:left;">Thank you — your application enquiry has been sent to <?= htmlspecialchars(IIFR_INFO_EMAIL, ENT_QUOTES, 'UTF-8'); ?>. We will reply soon.</div>
        <?php elseif ($apply_form_error !== '') : ?>
            <div class="iifr-form-notice iifr-form-notice--error mb--30" role="alert" style="max-width:640px;margin:0 auto 28px;text-align:left;"><?= htmlspecialchars($apply_form_error, ENT_QUOTES, 'UTF-8'); ?></div>
        <?php endif; ?>

        <span class="iifr-eyebrow" style="color:#e3b85a;">Get Started</span>
        <h2>Download · Apply · Schedule a conversation.</h2>
        <p>Request the latest programme brochure, start your application enquiry, or speak with our team about fit and cohort timing.</p>
        <div class="iifr-cta-final__buttons">
            <a href="mailto:<?= rawurlencode(IIFR_INFO_EMAIL); ?>?subject=IIFR%20%E2%80%94%20Programme%20Brochure%20Request" class="iifr-btn-primary">Download brochure</a>
            <a href="#" class="iifr-btn-outline" data-bs-toggle="modal" data-bs-target="#iifrApplyModal" role="button">Apply now</a>
            <a href="contact.php" class="iifr-btn-outline">Schedule a conversation</a>
        </div>

        <p style="margin-top:32px;font-size:var(--iifr-fs-small);color:rgba(255,255,255,0.65);">
            Bharatiya Vidya Bhavan, KG Marg, Copernicus Marg, New Delhi, Delhi 110001 ·
            <a href="mailto:<?= htmlspecialchars(IIFR_INFO_EMAIL, ENT_QUOTES, 'UTF-8'); ?>" style="color:#e3b85a;text-decoration:none;"><?= htmlspecialchars(IIFR_INFO_EMAIL, ENT_QUOTES, 'UTF-8'); ?></a>
        </p>
    </div>
</section>

<?php
    $class = 'v__1';
    include_once 'partials/footer/footer__default.php';
    $content = ob_get_clean();
    include __DIR__ . '/base.php';
?>
