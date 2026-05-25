<?php
$page_title = 'IIFR — International Institute for Faculty & Research';
$body_class = 'page iifr-redesign-scope';
ob_start();
include_once 'partials/header/transparent-header.php';
?>

<!-- ============ HERO — Welcome to IIFR ============ -->
<div class="iifr-page-hero">
    <div class="iifr-page-hero__bg iifr-page-hero__bg--home" style="background-image:url('assets/images/hero-home.png');"></div>
    <div class="iifr-page-hero__inner">
        <span class="iifr-page-hero__eyebrow">Welcome to IIFR</span>
        <h1>Building the Future of Faculty, Research, and Academic Leadership</h1>
        <p>Empowering educators, driving research excellence, nurturing pracademics and building great practice-academic synthesis.</p>
        <div class="iifr-page-hero__cta">
            <a href="programmes.php" class="iifr-btn-primary">Explore Programmes</a>
            <a href="contact.php" class="iifr-btn-outline">Engage with Us</a>
        </div>
    </div>
</div>

<!-- ============ WHAT IS IIFR ============ -->
<section class="iifr-section">
    <div class="iifr-about">
        <div class="iifr-about__media">
            <img src="assets/images/academy/1.jpeg" alt="IIFR campus">
        </div>

        <div class="iifr-about__content">
            <span class="iifr-eyebrow">About IIFR</span>
            <h2>What is IIFR</h2>
            <hr class="iifr-gold-line">
            <p>The International Institute for Faculty &amp; Research (IIFR) is an autonomous academic institute established to strengthen faculty capability, research excellence, and academic leadership across India and the Global South.</p>
            <p>Designed for the evolving needs of higher education and professional practice, IIFR brings practitioners &amp; academicians together and integrates relevance &amp; rigor to support impactful pedagogy and applied research.</p>

            <div style="margin-top:32px;display:flex;gap:14px;flex-wrap:wrap;">
                <a href="about.php" class="iifr-btn-dark">Our Vision</a>
                <a href="faculty.php" class="iifr-btn-dark">Meet Our Faculty</a>
            </div>
        </div>
    </div>
</section>

<!-- ============ STRATEGIC PARTNERS ============ -->
<section class="iifr-section iifr-paper">
    <div class="iifr-section__head iifr-section__head--center">
        <span class="iifr-eyebrow">Strategic Partners</span>
        <h2>Built in collaboration with trusted academic and institutional partners.</h2>
        <hr class="iifr-gold-line-center">
    </div>

    <div class="iifr-partners-rich">
        <article class="iifr-partner-card">
            <div class="iifr-partner-card__logo">
                <img src="assets/images/logo/bvb.png" alt="Bharatiya Vidya Bhavan">
            </div>
            <h3 class="iifr-partner-card__name">Bharatiya Vidya Bhavan</h3>
            <p class="iifr-partner-card__desc">Since 1938 — Shaping Education &amp; Society.</p>
        </article>

        <article class="iifr-partner-card">
            <div class="iifr-partner-card__logo">
                <img src="assets/images/logo/efmd.png" alt="EFMD Global Network">
            </div>
            <h3 class="iifr-partner-card__name">EFMD Global Network</h3>
            <p class="iifr-partner-card__desc">Advancing Excellence in Management Development.</p>
        </article>

        <article class="iifr-partner-card">
            <div class="iifr-partner-card__logo">
                <img src="assets/images/logo/latticed.png" alt="LatticEd" onerror="this.style.display='none';this.parentNode.innerHTML='<div style=&quot;font-family:Playfair Display,Georgia,serif;font-size:28px;color:#0d1b3e;font-weight:700;&quot;>LatticEd</div>';">
            </div>
            <h3 class="iifr-partner-card__name">LatticEd</h3>
            <p class="iifr-partner-card__desc">Pioneering Learning Impact &amp; Academic Innovation.</p>
        </article>
    </div>
</section>

<!-- ============ THREE PATHWAYS (rich) ============ -->
<section class="iifr-section">
    <div class="iifr-section__head iifr-section__head--center">
        <span class="iifr-eyebrow">Your Journey</span>
        <h2>Three Pathways to Transform Your Impact</h2>
        <hr class="iifr-gold-line-center">
        <p class="iifr-lead">Designed for leaders in academia, industry, and research seeking to create lasting influence.</p>
    </div>

    <div class="iifr-pathways-rich">
        <article class="iifr-pathway">
            <div class="iifr-pathway__num">01</div>
            <h3 class="iifr-pathway__title">Industry to Academia</h3>
            <p class="iifr-pathway__body">For senior professionals and CXOs ready to move from the boardroom to the classroom lectern, without leaving their expertise at the door. The Pracademic credential enables you to teach, mentor, and lead at any management institution, with both practitioner authority and academic credibility.</p>
        </article>
        <article class="iifr-pathway">
            <div class="iifr-pathway__num">02</div>
            <h3 class="iifr-pathway__title">Academic Faculty Excellence</h3>
            <p class="iifr-pathway__body">For faculty who want the credential to match their experience and the framework to make their teaching create impact. Elevate pedagogy, research output, and global credibility with a recognized certification that opens doors.</p>
        </article>
        <article class="iifr-pathway">
            <div class="iifr-pathway__num">03</div>
            <h3 class="iifr-pathway__title">Applied Research</h3>
            <p class="iifr-pathway__body">For senior executives, CXOs, and experts who want their years of experience to outlive them — converted into a scholarship that institutions cite, students read, and the world actually uses. Legacy-building for people who still have work to do.</p>
        </article>
    </div>
</section>

<!-- ============ PROGRAMMES (3 cards) ============ -->
<section class="iifr-section iifr-cream">
    <div class="iifr-section__head iifr-section__head--center">
        <span class="iifr-eyebrow">Excellence Pathways</span>
        <h2>Programmes Designed for Academic and Professional Excellence</h2>
        <hr class="iifr-gold-line-center">
        <p class="iifr-lead">Practice-oriented learning experiences for educators, leaders, and researchers.</p>
    </div>

    <div class="iifr-programmes iifr-programmes--three">
        <a href="ecp.php" class="iifr-programme">
            <img src="assets/images/academy/5.jpeg" alt="" class="iifr-programme__img">
            <span class="iifr-programme__overlay" aria-hidden="true"></span>
            <h3 class="iifr-programme__title">Educator Certification Programme (ECP)</h3>
            <p class="iifr-programme__desc">For professionals and aspiring educators preparing for impactful academic careers, integrating theory &amp; practice, AI-led pedagogy, and meta-frameworks for multi-disciplinary orientation.</p>
            <span class="iifr-programme__more">Learn More</span>
        </a>
        <a href="efm.php" class="iifr-programme">
            <img src="assets/images/academy/6.jpeg" alt="" class="iifr-programme__img">
            <span class="iifr-programme__overlay" aria-hidden="true"></span>
            <h3 class="iifr-programme__title">Executive Fellow in Management (EFM)</h3>
            <p class="iifr-programme__desc">For CXOs and senior leaders seeking to contribute via applied research, teaching, mentoring, and thought leadership.</p>
            <span class="iifr-programme__more">Learn More</span>
        </a>
        <a href="programmes.php" class="iifr-programme">
            <img src="assets/images/academy/4.jpeg" alt="" class="iifr-programme__img">
            <span class="iifr-programme__overlay" aria-hidden="true"></span>
            <h3 class="iifr-programme__title">Research &amp; Faculty Workshops</h3>
            <p class="iifr-programme__desc">Short-format programmes focused on teaching excellence, research capability, and leadership development.</p>
            <span class="iifr-programme__more">Learn More</span>
        </a>
    </div>

    <div style="text-align:center;margin-top:40px;">
        <a href="programmes.php" class="iifr-btn-dark">Explore All Programmes</a>
    </div>
</section>

<!-- ============ INSIGHTS FROM IIFR ============ -->
<section class="iifr-section">
    <div class="iifr-section__head iifr-section__head--center">
        <span class="iifr-eyebrow">Latest</span>
        <h2>Insights from IIFR</h2>
        <hr class="iifr-gold-line-center">
        <p class="iifr-lead">Perspectives on higher education, faculty development, research, leadership, and professional practice.</p>
    </div>

    <div class="iifr-news-grid">
        <a href="insights.php" class="iifr-news-card">
            <span class="iifr-news-card__date">May 15, 2026</span>
            <h3 class="iifr-news-card__title">Rethinking Faculty Development in India</h3>
            <p class="iifr-news-card__desc">Why continuous learning, mentoring, and capability building are essential for the future of higher education.</p>
            <span class="iifr-news-card__more">Read More</span>
        </a>
        <a href="insights.php" class="iifr-news-card">
            <span class="iifr-news-card__date">April 28, 2026</span>
            <h3 class="iifr-news-card__title">Bridging Academia and Industry</h3>
            <p class="iifr-news-card__desc">Building meaningful partnerships to create relevant learning and real-world impact.</p>
            <span class="iifr-news-card__more">Read More</span>
        </a>
        <a href="insights.php" class="iifr-news-card">
            <span class="iifr-news-card__date">April 10, 2026</span>
            <h3 class="iifr-news-card__title">The Future of Applied Research</h3>
            <p class="iifr-news-card__desc">How applied research can address real-world challenges and shape societal progress.</p>
            <span class="iifr-news-card__more">Read More</span>
        </a>
    </div>

    <div style="text-align:center;margin-top:40px;">
        <a href="insights.php" class="iifr-btn-dark">View All Insights</a>
    </div>
</section>
<?php
    $class = 'v__1';
    include_once 'partials/footer/footer__default.php';
    $content = ob_get_clean();
    include __DIR__ . '/base.php';
?>
