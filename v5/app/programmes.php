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
        <span class="iifr-page-hero__eyebrow">Explore</span>
        <h1>Our Programmes</h1>
        <p>Four distinct pathways for educators, researchers, and academic leaders — from intensive certification to doctoral fellowship to specialised development programmes.</p>
        <div class="iifr-page-hero__cta">
            <a href="#" class="iifr-btn-primary" data-bs-toggle="modal" data-bs-target="#iifrApplyModal" role="button">Apply Now</a>
            <a href="contact.php" class="iifr-btn-outline">Talk to Admissions</a>
        </div>
    </div>
</div>

<!-- ============ PROGRAMME CARDS ============ -->
<section class="iifr-section iifr-cream">
    <div class="iifr-section__head iifr-section__head--center">
        <span class="iifr-eyebrow">Our Pathways</span>
        <h2>Choose the path that fits your trajectory.</h2>
        <hr class="iifr-gold-line-center">
    </div>

    <div class="iifr-programmes iifr-programmes--four">
        <a href="#ecp" class="iifr-programme">
            <img src="assets/images/academy/5.jpeg" alt="" class="iifr-programme__img">
            <span class="iifr-programme__overlay" aria-hidden="true"></span>
            <h3 class="iifr-programme__title">Educators' Certificate Programme (ECP)</h3>
            <p class="iifr-programme__desc">Build a new category of educators who move seamlessly between industry and academia. AI-powered course design, case writing, and academic leadership.</p>
            <span class="iifr-programme__more">Read about ECP</span>
        </a>
        <a href="#efm" class="iifr-programme">
            <img src="assets/images/academy/6.jpeg" alt="" class="iifr-programme__img">
            <span class="iifr-programme__overlay" aria-hidden="true"></span>
            <h3 class="iifr-programme__title">Executive Fellow in Management (EFM)</h3>
            <p class="iifr-programme__desc">India's most ambitious academic credential for senior executives. Earn a doctoral-equivalent degree certified by BVB, IIFR, and EFMD.</p>
            <span class="iifr-programme__more">Read about EFM</span>
        </a>
        <a href="#alp" class="iifr-programme">
            <img src="assets/images/academy/3.jpeg" alt="" class="iifr-programme__img">
            <span class="iifr-programme__overlay" aria-hidden="true"></span>
            <h3 class="iifr-programme__title">Academic Leadership Programme (ALP)</h3>
            <p class="iifr-programme__desc">For Deans, Directors, and senior academic administrators ready to lead institutional transformation with strategic vision and operational excellence.</p>
            <span class="iifr-programme__more">Read about ALP</span>
        </a>
        <a href="#rfdp" class="iifr-programme">
            <img src="assets/images/academy/4.jpeg" alt="" class="iifr-programme__img">
            <span class="iifr-programme__overlay" aria-hidden="true"></span>
            <h3 class="iifr-programme__title">Research &amp; Faculty Development Programme (RFDP)</h3>
            <p class="iifr-programme__desc">Intensive workshops designed to sharpen research methodology, publication skills, and teaching pedagogy for faculty at all career stages.</p>
            <span class="iifr-programme__more">Read about RFDP</span>
        </a>
    </div>
</section>

<!-- ============ ECP — INTRO + WHO IT'S FOR ============ -->
<section class="iifr-section" id="ecp">
    <div class="iifr-about">
        <div class="iifr-about__media">
            <img src="assets/images/academy/1.jpeg" alt="ECP — Educators' Certificate Programme">
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
                <a href="#" class="iifr-btn-primary" data-bs-toggle="modal" data-bs-target="#iifrApplyModal" role="button">Apply Now</a>
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
                <a href="#" class="iifr-btn-primary" data-bs-toggle="modal" data-bs-target="#iifrApplyModal" role="button">Apply Now</a>
            </div>
        </div>

        <div class="iifr-about__media">
            <img src="assets/images/academy/6.jpeg" alt="EFM — Executive Fellow in Management">
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

<!-- ============ ALP — ACADEMIC LEADERSHIP PROGRAMME ============ -->
<section class="iifr-section iifr-cream" id="alp">
    <div class="iifr-about">
        <div class="iifr-about__media">
            <img src="assets/images/academy/3.jpeg" alt="Academic Leadership Programme">
        </div>

        <div class="iifr-about__content">
            <span class="iifr-eyebrow">Programme · ALP</span>
            <h2>Academic Leadership Programme.</h2>
            <hr class="iifr-gold-line">
            <p>The ALP is designed for senior academic administrators — Deans, Directors, Department Heads, and aspiring institutional leaders — who want to lead transformation in higher education with strategic clarity, governance excellence, and innovation.</p>

            <p style="margin-top:8px;"><strong style="color:var(--iifr-navy);">Consider the ALP if you are:</strong></p>
            <ul class="iifr-list" style="margin-top:14px;">
                <li><p>A Dean, Director, or Department Head seeking to drive institutional strategy and change</p></li>
                <li><p>A senior faculty member aspiring to academic leadership and administrative roles</p></li>
                <li><p>An academic administrator looking to strengthen governance, accreditation readiness, and stakeholder management</p></li>
            </ul>

            <div style="margin-top:32px;display:flex;gap:14px;flex-wrap:wrap;">
                <a href="#" class="iifr-btn-dark" data-bs-toggle="modal" data-bs-target="#iifrApplyModal" role="button">Apply Now</a>
                <a href="contact.php" class="iifr-btn-primary">Talk to Admissions</a>
            </div>
        </div>
    </div>
</section>

<!-- ============ ALP — KEY FOCUS AREAS ============ -->
<section class="iifr-section">
    <div class="iifr-section__head iifr-section__head--center">
        <span class="iifr-eyebrow">Key Focus Areas</span>
        <h2>What the ALP covers.</h2>
        <hr class="iifr-gold-line-center">
    </div>

    <div class="iifr-pathways-rich iifr-grid--4">
        <article class="iifr-pathway">
            <h3 class="iifr-pathway__title">Strategic Planning</h3>
            <p class="iifr-pathway__body">Institutional vision-setting, long-range academic planning, and resource allocation for sustainable growth.</p>
        </article>
        <article class="iifr-pathway">
            <h3 class="iifr-pathway__title">Governance &amp; Accreditation</h3>
            <p class="iifr-pathway__body">Navigating regulatory frameworks, quality assurance systems, and national/international accreditation standards.</p>
        </article>
        <article class="iifr-pathway">
            <h3 class="iifr-pathway__title">Change Management</h3>
            <p class="iifr-pathway__body">Leading organisational transformation, building consensus among diverse stakeholders, and managing institutional culture.</p>
        </article>
        <article class="iifr-pathway">
            <h3 class="iifr-pathway__title">Innovation in Education</h3>
            <p class="iifr-pathway__body">Leveraging technology, interdisciplinary approaches, and global best practices for academic innovation and impact.</p>
        </article>
    </div>
</section>

<!-- ============ RFDP — RESEARCH & FACULTY DEVELOPMENT PROGRAMME ============ -->
<section class="iifr-section iifr-paper" id="rfdp">
    <div class="iifr-about iifr-about--reverse">
        <div class="iifr-about__content">
            <span class="iifr-eyebrow">Programme · RFDP</span>
            <h2>Research &amp; Faculty Development Programme.</h2>
            <hr class="iifr-gold-line">
            <p>The RFDP is a series of intensive workshops and structured interventions designed to sharpen research capability, publication skills, and teaching pedagogy for faculty at all career stages — from early-career academics to senior professors seeking to renew their practice.</p>

            <p style="margin-top:8px;"><strong style="color:var(--iifr-navy);">Consider the RFDP if you are:</strong></p>
            <ul class="iifr-list" style="margin-top:14px;">
                <li><p>A faculty member looking to publish in high-impact journals and strengthen research methodology</p></li>
                <li><p>An early-career academic seeking mentorship, structured guidance, and peer networks</p></li>
                <li><p>A senior professor wanting to refresh teaching techniques, integrate AI tools, and stay current</p></li>
                <li><p>An institution seeking faculty development interventions for your team</p></li>
            </ul>

            <div style="margin-top:32px;display:flex;gap:14px;flex-wrap:wrap;">
                <a href="#" class="iifr-btn-dark" data-bs-toggle="modal" data-bs-target="#iifrApplyModal" role="button">Apply Now</a>
                <a href="contact.php" class="iifr-btn-primary">Talk to Admissions</a>
            </div>
        </div>

        <div class="iifr-about__media">
            <img src="assets/images/academy/4.jpeg" alt="Research & Faculty Development Programme">
        </div>
    </div>
</section>

<!-- ============ RFDP — KEY FOCUS AREAS ============ -->
<section class="iifr-section">
    <div class="iifr-section__head iifr-section__head--center">
        <span class="iifr-eyebrow">Workshop Tracks</span>
        <h2>What the RFDP covers.</h2>
        <hr class="iifr-gold-line-center">
    </div>

    <div class="iifr-pathways-rich iifr-grid--4">
        <article class="iifr-pathway">
            <h3 class="iifr-pathway__title">Research Methodology</h3>
            <p class="iifr-pathway__body">Qualitative and quantitative methods, research design, data analysis, and emerging methodological approaches.</p>
        </article>
        <article class="iifr-pathway">
            <h3 class="iifr-pathway__title">Publishing &amp; Dissemination</h3>
            <p class="iifr-pathway__body">Writing for high-impact journals, navigating peer review, conference presentations, and building a scholarly portfolio.</p>
        </article>
        <article class="iifr-pathway">
            <h3 class="iifr-pathway__title">Teaching Excellence</h3>
            <p class="iifr-pathway__body">Modern pedagogical techniques, experiential learning design, assessment innovation, and student engagement strategies.</p>
        </article>
        <article class="iifr-pathway">
            <h3 class="iifr-pathway__title">AI &amp; Digital Tools</h3>
            <p class="iifr-pathway__body">Integrating AI into research workflows, digital classroom tools, and technology-enhanced learning environments.</p>
        </article>
    </div>
</section>
<?php
    $class = 'v__1';
    include_once 'partials/footer/footer__default.php';
    $content = ob_get_clean();
    include __DIR__ . '/base.php';
?>
