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
        <span class="iifr-page-hero__eyebrow">Thought Leadership</span>
        <h1>Insights</h1>
        <p>IIFR is committed to generating and disseminating knowledge that influences education, industry, and policy.</p>
        <div class="iifr-page-hero__cta">
            <a href="programmes.php" class="iifr-btn-primary">Explore Programmes</a>
            <a href="contact.php" class="iifr-btn-outline">Contribute an Insight</a>
        </div>
    </div>
</div>

<!-- ============ INSIGHTS — ARTICLES ============ -->
<section class="iifr-section">
    <div class="iifr-section__head iifr-section__head--center">
        <span class="iifr-eyebrow">Explore</span>
        <h2>Insights from IIFR</h2>
        <hr class="iifr-gold-line-center">
        <p class="iifr-lead">Articles and essays on faculty development, applied research, academic leadership, and the evolving intersection of industry and academia.</p>
    </div>

    <div class="iifr-grid iifr-grid--3">
        <a href="insight/blog/faculty-development.php" class="iifr-prog-card">
            <div class="iifr-prog-img">
                <img src="assets/images/insights/rethinking.png" alt="Rethinking Faculty Development in India">
            </div>
            <div class="iifr-prog-body">
                <span class="iifr-prog-date">May 15, 2026</span>
                <h3>Rethinking Faculty Development in India</h3>
                <p>Why continuous learning, mentoring, and capability building are essential for the future of higher education.</p>
                <div class="iifr-prog-arrow">Read More →</div>
            </div>
        </a>

        <a href="insight/blog/academia-industry.php" class="iifr-prog-card">
            <div class="iifr-prog-img">
                <img src="assets/images/insights/academia.png" alt="Bridging Academia and Industry">
            </div>
            <div class="iifr-prog-body">
                <span class="iifr-prog-date">April 28, 2026</span>
                <h3>Bridging Academia and Industry</h3>
                <p>Building meaningful partnerships to create relevant learning and real-world impact.</p>
                <div class="iifr-prog-arrow">Read More →</div>
            </div>
        </a>

        <a href="insight/blog/applied-research.php" class="iifr-prog-card">
            <div class="iifr-prog-img">
                <img src="assets/images/insights/future.png" alt="The Future of Applied Research">
            </div>
            <div class="iifr-prog-body">
                <span class="iifr-prog-date">April 10, 2026</span>
                <h3>The Future of Applied Research</h3>
                <p>How applied research can address real-world challenges and shape societal progress.</p>
                <div class="iifr-prog-arrow">Read More →</div>
            </div>
        </a>
    </div>
</section>
<?php
    $class = 'v__1';
    include_once 'partials/footer/footer__default.php';
    $content = ob_get_clean();
    include __DIR__ . '/base.php';
?>
