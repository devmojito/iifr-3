<?php
$page_title = 'Insights — IIFR';
$body_class = 'page iifr-redesign-scope';
ob_start();
include_once 'partials/header/transparent-header.php';
?>

<!-- ============ HERO ============ -->
<div class="iifr-page-hero">
    <div class="iifr-page-hero__bg" style="background-image:url('assets/images/academy/3.jpeg');"></div>
    <div class="iifr-page-hero__inner">
        <span class="iifr-page-hero__eyebrow">Insights</span>
        <h1>Insights</h1>
        <p>IIFR is committed to generating and disseminating knowledge that influences education, industry, and policy.</p>
        <div class="iifr-page-hero__cta">
            <a href="programmes.php" class="iifr-btn-primary">Explore Programmes</a>
            <a href="contact.php" class="iifr-btn-outline">Contribute an Insight</a>
        </div>
    </div>
</div>

<!-- ============ INSIGHTS RESOURCES ============ -->
<section class="iifr-section">
    <div class="iifr-section__head iifr-section__head--center">
        <span class="iifr-eyebrow">Resources</span>
        <h2>Insights Resources.</h2>
        <hr class="iifr-gold-line-center">
        <p class="iifr-lead">Articles, white papers, case studies, webinars, and research from IIFR faculty and the broader pracademic community.</p>
    </div>

    <div class="iifr-grid iifr-grid--3">
        <a href="#" class="iifr-prog-card">
            <div class="iifr-prog-img">
                <img src="assets/images/academy/1.jpeg" alt="">
            </div>
            <div class="iifr-prog-body">
                <h3>Blog / IIFR Journal</h3>
                <p>Perspectives on faculty development, pedagogy, research, and the changing landscape of higher education in India and the Global South.</p>
                <div class="iifr-prog-arrow">→</div>
            </div>
        </a>

        <a href="#" class="iifr-prog-card">
            <div class="iifr-prog-img">
                <img src="assets/images/academy/5.jpeg" alt="">
            </div>
            <div class="iifr-prog-body">
                <h3>White Papers</h3>
                <p>Evidence-based analysis on the structural challenges in Indian higher education and the pracademic opportunity.</p>
                <div class="iifr-prog-arrow">→</div>
            </div>
        </a>

        <a href="#" class="iifr-prog-card">
            <div class="iifr-prog-img">
                <img src="assets/images/academy/4.jpeg" alt="">
            </div>
            <div class="iifr-prog-body">
                <h3>Case Studies</h3>
                <p>Applied research and case writing emerging from IIFR programmes and faculty collaboration.</p>
                <div class="iifr-prog-arrow">→</div>
            </div>
        </a>

        <a href="#" class="iifr-prog-card">
            <div class="iifr-prog-img">
                <img src="assets/images/academy/7.jpeg" alt="">
            </div>
            <div class="iifr-prog-body">
                <h3>Webinar Archive</h3>
                <p>Recordings from the Delhi Business &amp; Policy Dialogue, Doc-Ed series, and faculty development workshops.</p>
                <div class="iifr-prog-arrow">→</div>
            </div>
        </a>

        <a href="#" class="iifr-prog-card">
            <div class="iifr-prog-img">
                <img src="assets/images/academy/6.jpeg" alt="">
            </div>
            <div class="iifr-prog-body">
                <h3>Research</h3>
                <p>Publications and working papers from IIFR faculty and ECP/EFM participants.</p>
                <div class="iifr-prog-arrow">→</div>
            </div>
        </a>
    </div>

    <p style="text-align:center;margin-top:48px;font-size:var(--iifr-fs-body);color:var(--iifr-text-light);font-style:italic;">
        Content for the Insights hub is currently being developed. Check back soon for articles, white papers, and research from the IIFR community.
    </p>
</section>

<!-- ============ FINAL CTA ============ -->
<section class="iifr-cta-final">
    <div class="iifr-cta-final__bg" style="background-image:url('assets/images/course/event-bg.jpg');"></div>
    <div class="iifr-cta-final__inner">
        <span class="iifr-eyebrow" style="color:#e3b85a;">Contribute</span>
        <h2>Have a research idea or want to contribute?</h2>
        <p>IIFR welcomes contributions from faculty, practitioners, and researchers. Get in touch to explore collaboration opportunities.</p>
        <div class="iifr-cta-final__buttons">
            <a href="contact.php" class="iifr-btn-primary">Contact Us</a>
        </div>
    </div>
</section>

<?php
    $class = 'v__1';
    include_once 'partials/footer/footer__default.php';
    $content = ob_get_clean();
    include __DIR__ . '/base.php';
?>
