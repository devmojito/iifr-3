<?php
$page_title = 'Applied Research Programme — IIFR';
$body_class = 'page iifr-redesign-scope';
ob_start();
include_once 'partials/header/transparent-header.php';
?>

<!-- ============ HERO ============ -->
<div class="iifr-page-hero">
    <div class="iifr-page-hero__bg" style="background-image:url('assets/images/academy/7.jpeg');"></div>
    <div class="iifr-page-hero__inner">
        <span class="iifr-page-hero__eyebrow">Short-Format Programmes</span>
        <h1>Research &amp; Faculty Workshops</h1>
        <p>Short-format programmes focused on teaching excellence, research capability, and leadership development for academic and institutional teams.</p>
        <div class="iifr-page-hero__cta">
            <a href="contact.php" class="iifr-btn-primary">Talk to Us</a>
            <a href="#tracks" class="iifr-btn-outline">View Tracks</a>
        </div>
    </div>
</div>

<!-- ============ DETAIL LAYOUT (main + sticky sidebar) ============ -->
<section class="iifr-section">
    <div class="iifr-detail-layout">

        <!-- ── MAIN COLUMN ── -->
        <div class="iifr-detail-main">

            <div class="iifr-detail-section" id="overview">
                <h2 class="iifr-detail-section__title">Workshop Overview</h2>
                <p>IIFR's short-format workshops are designed for faculty, research teams, and institutional leaders who need focused capability-building in a compressed window. Each workshop is built around a specific outcome — sharper pedagogy, publishable research, stronger leadership — and can be delivered as a standalone open programme or as an in-house intervention for your institution.</p>
            </div>

            <div class="iifr-detail-section" id="tracks">
                <h2 class="iifr-detail-section__title">Workshop Tracks</h2>

                <div class="iifr-grid iifr-grid--2" style="gap:20px;">
                    <article class="iifr-module-card">
                        <span class="iifr-module-card__num">Track A</span>
                        <h3 class="iifr-module-card__title">Teaching Excellence</h3>
                        <ul class="iifr-module-card__topics">
                            <li><span>Case-based teaching</span></li>
                            <li><span>AI-enabled pedagogy</span></li>
                            <li><span>Classroom design &amp; assessment</span></li>
                            <li><span>Learner engagement</span></li>
                        </ul>
                    </article>

                    <article class="iifr-module-card">
                        <span class="iifr-module-card__num">Track B</span>
                        <h3 class="iifr-module-card__title">Research Capability</h3>
                        <ul class="iifr-module-card__topics">
                            <li><span>Research design</span></li>
                            <li><span>Scholarly writing</span></li>
                            <li><span>Publishing readiness</span></li>
                            <li><span>Applied-research methodology</span></li>
                        </ul>
                    </article>

                    <article class="iifr-module-card">
                        <span class="iifr-module-card__num">Track C</span>
                        <h3 class="iifr-module-card__title">Academic Leadership</h3>
                        <ul class="iifr-module-card__topics">
                            <li><span>Department leadership</span></li>
                            <li><span>Programme design</span></li>
                            <li><span>Accreditation readiness</span></li>
                            <li><span>Institutional change</span></li>
                        </ul>
                    </article>

                    <article class="iifr-module-card">
                        <span class="iifr-module-card__num">Track D</span>
                        <h3 class="iifr-module-card__title">Pracademic Practice</h3>
                        <ul class="iifr-module-card__topics">
                            <li><span>Translating senior practice into teaching cases</span></li>
                            <li><span>Scholarship development</span></li>
                            <li><span>Institutional contributions</span></li>
                        </ul>
                    </article>
                </div>
            </div>

            <div class="iifr-detail-section" id="delivery">
                <h2 class="iifr-detail-section__title">How We Deliver</h2>
                <ul class="iifr-list">
                    <li><p><strong>Open enrolment</strong> — cohorts at the BVB Delhi campus, typically 1–3 days</p></li>
                    <li><p><strong>In-house</strong> — custom delivery at your institution, configured to your faculty needs</p></li>
                    <li><p><strong>Hybrid</strong> — formats combining short residency with virtual follow-through</p></li>
                </ul>
            </div>

            <div class="iifr-detail-section" id="audience">
                <h2 class="iifr-detail-section__title">Who Participates</h2>
                <ul class="iifr-list">
                    <li><p>Faculty members at universities, business schools, and professional institutes</p></li>
                    <li><p>Research scholars and early-career academics</p></li>
                    <li><p>Department heads, deans, and academic administrators</p></li>
                    <li><p>L&amp;D teams adopting academic-grade learning practices</p></li>
                </ul>
            </div>
        </div>

        <!-- ── SIDEBAR ── -->
        <aside class="iifr-detail-aside">
            <div class="iifr-detail-aside__card">
                <h3 class="iifr-detail-aside__title">At a Glance</h3>
                <ul class="iifr-detail-aside__list">
                    <li><strong>Duration</strong>1–5 Days</li>
                    <li><strong>Format</strong>In-house · Open · Hybrid</li>
                    <li><strong>Tracks</strong>4 Core + Custom</li>
                    <li><strong>Audience</strong>Faculty &amp; Research Teams</li>
                    <li><strong>Fee</strong>On Request</li>
                </ul>
            </div>

            <div class="iifr-detail-aside__card iifr-detail-aside__card--cta">
                <h3 class="iifr-detail-aside__title">Request a Workshop</h3>
                <p class="iifr-detail-aside__cta-text">Tell us about your team and goals — we'll design the right workshop for you.</p>
                <a href="contact.php" class="iifr-btn-primary" style="width:100%;">Request a Workshop</a>
                <a href="apply.php" class="iifr-btn-dark" style="width:100%;margin-top:10px;">Open Enrolment</a>
            </div>

            <div class="iifr-detail-aside__card">
                <h3 class="iifr-detail-aside__title">Contact</h3>
                <p class="iifr-detail-aside__contact">
                    <a href="mailto:<?= htmlspecialchars(IIFR_INFO_EMAIL, ENT_QUOTES, 'UTF-8'); ?>"><?= htmlspecialchars(IIFR_INFO_EMAIL, ENT_QUOTES, 'UTF-8'); ?></a>
                </p>
            </div>
        </aside>
    </div>
</section>

<!-- ============ ENQUIRY FORM ============ -->
<section class="iifr-section iifr-paper" id="inquiry-form">
    <?php
        $iifr_form_context = 'Applied Research Workshop';
        $iifr_form_return = 'applied-research.php';
        $iifr_form_heading = 'Enquire about Workshops';
        $iifr_form_intro = 'Interested in a research or faculty workshop? Leave your details and we\'ll get back to you with upcoming dates and custom options.';
        include __DIR__ . '/partials/components/inquiry-form.php';
    ?>
</section>

<!-- ============ FINAL CTA ============ -->
<section class="iifr-cta-final">
    <div class="iifr-cta-final__bg" style="background-image:url('assets/images/course/event-bg.jpg');"></div>
    <div class="iifr-cta-final__inner">
        <span class="iifr-eyebrow" style="color:#e3b85a;">Build Capability</span>
        <h2>Short-format impact for faculty and research teams.</h2>
        <p>Partner, learn, collaborate, and lead transformation with IIFR.</p>
        <div class="iifr-cta-final__buttons">
            <a href="contact.php" class="iifr-btn-primary">Talk to Us</a>
            <a href="programmes.php" class="iifr-btn-outline">All Programmes</a>
        </div>
    </div>
</section>

<?php
    $class = 'v__1';
    include_once 'partials/footer/footer__default.php';
    $content = ob_get_clean();
    include __DIR__ . '/base.php';
?>
