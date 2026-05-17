<?php
$page_title = 'Our Programmes — IIFR';
$body_class = 'page iifr-redesign-scope';
ob_start();
include_once 'partials/header/transparent-header.php';
?>

<!-- ============ HERO ============ -->
<div class="iifr-page-hero">
    <div class="iifr-page-hero__bg" style="background-image:url('assets/images/academy/5.jpeg');"></div>
    <div class="iifr-page-hero__inner">
        <span class="iifr-page-hero__eyebrow">Programmes</span>
        <h1>Our Programmes</h1>
        <p>Two flagship pathways: an intensive certificate for educators bridging industry and academia, and a doctoral-equivalent fellowship for senior practitioners who want scholarly rigour without leaving practice.</p>
        <div class="iifr-page-hero__cta">
            <a href="#" class="iifr-btn-primary" data-bs-toggle="modal" data-bs-target="#iifrApplyModal" role="button">Apply Now</a>
            <a href="contact.php" class="iifr-btn-outline">Talk to Admissions</a>
        </div>
    </div>
</div>

<!-- ============ TWO FLAGSHIP CARDS ============ -->
<section class="iifr-section iifr-cream">
    <div class="iifr-section__head iifr-section__head--center">
        <span class="iifr-eyebrow">Two Flagship Pathways</span>
        <h2>Choose the path that fits your trajectory.</h2>
        <hr class="iifr-gold-line-center">
    </div>

    <div class="iifr-programmes">
        <a href="#ecp" class="iifr-programme">
            <img src="assets/images/academy/5.jpeg" alt="" class="iifr-programme__img">
            <span class="iifr-programme__overlay" aria-hidden="true"></span>
            <span class="iifr-programme__tag">8-Day Intensive · Flagship</span>
            <h3 class="iifr-programme__title">Educators' Certificate Programme (ECP)</h3>
            <p class="iifr-programme__desc">Build a new category of educators who move seamlessly between industry and academia. AI-powered course design, case writing, and academic leadership.</p>
            <span class="iifr-programme__more">Read about ECP</span>
        </a>
        <a href="#efm" class="iifr-programme">
            <img src="assets/images/academy/6.jpeg" alt="" class="iifr-programme__img">
            <span class="iifr-programme__overlay" aria-hidden="true"></span>
            <span class="iifr-programme__tag">3-Year Doctoral · Fellowship</span>
            <h3 class="iifr-programme__title">Executive Fellow in Management (EFM)</h3>
            <p class="iifr-programme__desc">India's most ambitious academic credential for senior executives. Earn a doctoral-equivalent degree certified by BVB, IIFR, and EFMD.</p>
            <span class="iifr-programme__more">Read about EFM</span>
        </a>
    </div>
</section>

<!-- ============ ECP — INTRO + WHO IT'S FOR ============ -->
<section class="iifr-section" id="ecp">
    <div class="iifr-about">
        <div class="iifr-about__media">
            <img src="assets/images/academy/1.jpeg" alt="ECP — Educators' Certificate Programme">
            <div class="iifr-about__media-tag">
                <strong>ECP</strong>
                <span style="display:flex;flex-direction:column;line-height:1.2;">
                    <span style="font-size:var(--iifr-fs-eyebrow);color:rgba(255,255,255,0.7);text-transform:uppercase;letter-spacing:0.14em;">8-Day Intensive</span>
                    <span>Flagship Programme</span>
                </span>
            </div>
        </div>

        <div class="iifr-about__content">
            <span class="iifr-eyebrow">Programme · ECP</span>
            <h2>Educators' Certificate Programme.</h2>
            <hr class="iifr-gold-line">
            <p>The ECP is designed to build a new category of educators — one that moves seamlessly between industry and academia. ECP bridges the gap between what industry knows and what academia teaches.</p>

            <p style="margin-top:8px;"><strong style="color:var(--iifr-navy);">Consider the ECP if you are:</strong></p>
            <ul class="iifr-list" style="margin-top:14px;">
                <li><p>A senior executive transitioning into academic roles as visiting faculty or Professor of Practice</p></li>
                <li><p>An academic or faculty seeking to deepen practical relevance and climb the capability ladder</p></li>
                <li><p>A corporate trainer or L&amp;D professional seeking internal training and upskilling</p></li>
            </ul>

            <div style="margin-top:32px;display:flex;gap:14px;flex-wrap:wrap;">
                <a href="ecp.php" class="iifr-btn-dark">Full ECP Details</a>
                <a href="#" class="iifr-btn-ghost" data-bs-toggle="modal" data-bs-target="#iifrApplyModal" role="button">Apply Now</a>
            </div>
        </div>
    </div>
</section>

<!-- ============ ECP — WHAT YOU'LL LEARN (4 modules) ============ -->
<section class="iifr-section iifr-paper">
    <div class="iifr-section__head iifr-section__head--center">
        <span class="iifr-eyebrow">Curriculum</span>
        <h2>What you'll learn.</h2>
        <hr class="iifr-gold-line-center">
        <p class="iifr-lead">Four modules across eight intensive days, designed for working educators and practitioners.</p>
    </div>

    <div class="iifr-pathways-rich iifr-grid--4">
        <article class="iifr-pathway">
            <h3 class="iifr-pathway__title">Curriculum Development</h3>
            <p class="iifr-pathway__body">Architecting a course from scratch. Learning-objective setting. Module sequencing.</p>
        </article>
        <article class="iifr-pathway">
            <h3 class="iifr-pathway__title">Pedagogy &amp; Case Writing</h3>
            <p class="iifr-pathway__body">Writing cases using AI and web resources. Case-teaching technique. Facilitating case discussions.</p>
        </article>
        <article class="iifr-pathway">
            <h3 class="iifr-pathway__title">Advanced Tools in AI</h3>
            <p class="iifr-pathway__body">Using LLMs and AI tools for case development and AI-powered course design.</p>
        </article>
        <article class="iifr-pathway">
            <h3 class="iifr-pathway__title">Academic Leadership</h3>
            <p class="iifr-pathway__body">Four days covering major business frameworks. Integrating multiple disciplinary lenses.</p>
        </article>
    </div>
</section>

<!-- ============ ECP — AI FOCUS ============ -->
<section class="iifr-section">
    <div class="iifr-about iifr-about--reverse">
        <div class="iifr-about__content">
            <span class="iifr-eyebrow">Key Focus</span>
            <h2>AI in Learning &amp; Teaching.</h2>
            <hr class="iifr-gold-line">
            <p>AI is not one tool in the kit. It is a new mode of pedagogical delivery running through every module. At the ECP, you will learn how to reduce the 12-month traditional case-study development cycle to days through:</p>

            <ul class="iifr-list" style="margin-top:18px;">
                <li><p><strong>Assisted case writing</strong> — AI-assisted case development using LLMs and web resources.</p></li>
                <li><p><strong>Course design</strong> — AI-powered curriculum architecture and learning-objective setting.</p></li>
                <li><p><strong>Content creation</strong> — AI-integrated teaching materials and assessments.</p></li>
                <li><p><strong>Student engagement</strong> — AI-enabled personalised learning pathways and classroom analytics.</p></li>
            </ul>
        </div>

        <div class="iifr-about__media">
            <img src="assets/images/academy/4.jpeg" alt="AI in pedagogy">
        </div>
    </div>
</section>

<!-- ============ STATS DIVIDER ============ -->
<div class="iifr-stats-bar">
    <div class="iifr-stats-bar__row">
        <div class="iifr-stats-bar__item">
            <span class="iifr-stats-bar__num">8</span>
            <p class="iifr-stats-bar__label">Day intensive ECP</p>
        </div>
        <div class="iifr-stats-bar__item">
            <span class="iifr-stats-bar__num">4</span>
            <p class="iifr-stats-bar__label">Learning modules</p>
        </div>
        <div class="iifr-stats-bar__item">
            <span class="iifr-stats-bar__num">3<em>yr</em></span>
            <p class="iifr-stats-bar__label">EFM fellowship</p>
        </div>
    </div>
</div>

<!-- ============ EFM — INTRO + WHO IT'S FOR ============ -->
<section class="iifr-section iifr-paper" id="efm">
    <div class="iifr-about iifr-about--reverse">
        <div class="iifr-about__content">
            <span class="iifr-eyebrow">Programme · EFM</span>
            <h2>Executive Fellow in Management.</h2>
            <hr class="iifr-gold-line">
            <p>The EFM is a doctoral-equivalent fellowship for senior practitioners ready to engage with the rigour of academic scholarship — without abandoning the world of practice. India's most ambitious academic credential for senior corporate executives.</p>

            <p style="margin-top:8px;"><strong style="color:var(--iifr-navy);">Consider the EFM if you are:</strong></p>
            <ul class="iifr-list" style="margin-top:14px;">
                <li><p>Ready to explore a comprehensive research fellowship equivalent to an Executive PhD</p></li>
                <li><p>Looking to earn your Executive PhD in approximately 3 years vs. 5 years for a full-time PhD</p></li>
                <li><p>Bringing minimum 10 years' work experience; Bachelor's degree required, MBA preferred</p></li>
                <li><p>Passionate about personal branding by mentoring next-generation leaders</p></li>
            </ul>

            <div style="margin-top:32px;display:flex;gap:14px;flex-wrap:wrap;">
                <a href="efm.php" class="iifr-btn-dark">Full EFM Details</a>
                <a href="#" class="iifr-btn-ghost" data-bs-toggle="modal" data-bs-target="#iifrApplyModal" role="button">Apply Now</a>
            </div>
        </div>

        <div class="iifr-about__media">
            <img src="assets/images/academy/6.jpeg" alt="EFM — Executive Fellow in Management">
            <div class="iifr-about__media-tag">
                <strong>EFM</strong>
                <span style="display:flex;flex-direction:column;line-height:1.2;">
                    <span style="font-size:var(--iifr-fs-eyebrow);color:rgba(255,255,255,0.7);text-transform:uppercase;letter-spacing:0.14em;">3-Year Doctoral</span>
                    <span>Executive Fellowship</span>
                </span>
            </div>
        </div>
    </div>
</section>

<!-- ============ EFM — KEY OUTCOMES ============ -->
<section class="iifr-section">
    <div class="iifr-about">
        <div class="iifr-about__media">
            <img src="assets/images/academy/1.jpeg" alt="EFM outcomes">
        </div>

        <div class="iifr-about__content">
            <span class="iifr-eyebrow">Key Outcomes · After 3 Years</span>
            <h2>What you walk away with.</h2>
            <hr class="iifr-gold-line">

            <ul class="iifr-list">
                <li><p>Earned your doctoral-equivalent degree certified by BVB, IIFR, and EFMD</p></li>
                <li><p>Leveraged your industry experience and tacit knowledge, blending it with decision-making frameworks</p></li>
                <li><p>Capable of analysing and presenting findings based on sound scientific evidence</p></li>
                <li><p>Capable of designing and conducting research that can be applied directly to practice</p></li>
                <li><p>Enhanced competence, credibility, and credentials to teach at a business school</p></li>
            </ul>

            <div class="iifr-cert-row">
                <span class="iifr-cert-row__label">Co-certified by</span>
                <div class="iifr-cert-row__logos">
                    <img src="assets/images/logo/bvb.png" alt="Bharatiya Vidya Bhavan">
                    <img src="assets/images/logo/efmd.png" alt="EFMD">
                </div>
            </div>

            <a href="#" class="iifr-btn-primary" data-bs-toggle="modal" data-bs-target="#iifrApplyModal" role="button" style="margin-top:8px;">Register Now</a>
        </div>
    </div>
</section>

<!-- ============ FINAL CTA ============ -->
<section class="iifr-cta-final">
    <div class="iifr-cta-final__bg" style="background-image:url('assets/images/course/event-bg.jpg');"></div>
    <div class="iifr-cta-final__inner">
        <span class="iifr-eyebrow" style="color:#e3b85a;">Pracademic Pathway</span>
        <h2>ECP is the stepping stone. EFM is the pinnacle.</h2>
        <p>Begin your journey towards the Pracademic identity. Whether you're an industry leader entering academia or a faculty member seeking deeper relevance, IIFR has a pathway for you.</p>
        <div class="iifr-cta-final__buttons">
            <a href="contact.php" class="iifr-btn-primary">Contact Us</a>
            <a href="ecp.php" class="iifr-btn-outline">Explore ECP</a>
        </div>
    </div>
</section>

<?php
    $class = 'v__1';
    include_once 'partials/footer/footer__default.php';
    $content = ob_get_clean();
    include __DIR__ . '/base.php';
?>
