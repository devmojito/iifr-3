<?php
$page_title = 'Research — IIFR';
$body_class = 'page iifr-redesign-scope';
ob_start();
include_once 'partials/header/transparent-header.php';
?>

<!-- ============ HERO ============ -->
<div class="iifr-page-hero">
    <div class="iifr-page-hero__bg iifr-page-hero__bg--research" style="background-image:url('assets/images/research/research-banner.jpg');"></div>
    <div class="iifr-page-hero__inner">
        <span class="iifr-page-hero__eyebrow">Research</span>
        <h1>Faculty &amp; Research for Real-World Impact</h1>
        <p>IIFR brings together global scholars, practice faculty, and research leaders solving challenges at the intersection of academia, industry, and policy.</p>
        <div class="iifr-page-hero__cta">
            <a href="contact.php" class="iifr-btn-primary">Engage With Us</a>
            <a href="programmes.php" class="iifr-btn-outline">Explore Programmes</a>
        </div>
    </div>
</div>

<!-- ============ OUR FACULTY ============ -->
<?php
/* First 8 profiles from the About-page Academic Council (priority order),
   with short bios used for the card excerpts. */
$research_faculty = [
    ['name' => 'Dr. Rajendra Srivastava', 'role' => 'Former Dean, Indian School of Business', 'img' => 'assets/images/faculty/rajendra-srivastava.png', 'linkedin' => 'https://www.linkedin.com/in/rajendra-srivastava-816643118'],
    ['name' => 'Prof. Ramakrishna Velamuri', 'role' => 'Dean, School of Management, Mahindra University', 'img' => 'assets/images/faculty/ramakrishna-velamuri.png', 'linkedin' => 'https://www.linkedin.com/in/ramavelamuri/'],
    ['name' => 'Prof. Uday B. Desai', 'role' => 'Founding Director, IIT Hyderabad', 'img' => 'assets/images/faculty/uday-desai.png', 'linkedin' => 'https://www.linkedin.com/in/ubdesai/'],
    ['name' => 'Charles Dhanaraj', 'role' => 'Professor of Strategy', 'img' => 'assets/images/faculty/charles-dhanaraj.avif', 'linkedin' => 'https://www.linkedin.com/in/charles-dhanaraj-949566'],
    ['name' => 'Sundar Bharadwaj', 'role' => 'Professor of Marketing', 'img' => 'assets/images/faculty/bharadwaj.jpg', 'linkedin' => 'https://www.linkedin.com/in/sundarbharadwajmarketingprof'],
    ['name' => 'Vish Krishnan', 'role' => 'Professor, UC San Diego', 'img' => 'assets/images/faculty/Vish-Krishnan.avif', 'linkedin' => 'https://www.linkedin.com/in/vish-krishnan-0ab0601'],
    ['name' => 'Ashish Sinha', 'role' => 'Professor of Marketing, UQ Business School', 'img' => 'assets/images/faculty/ashish-sinha.jpg', 'linkedin' => 'https://www.linkedin.com/in/ashish-sinha-7a021522'],
    ['name' => 'Prakash Bagri', 'role' => 'Practice Faculty', 'img' => 'assets/images/faculty/prakash.avif', 'linkedin' => 'https://www.linkedin.com/in/prakashbagri'],
    ['name' => 'Shankar Prakash', 'role' => 'Practice Faculty', 'img' => 'assets/images/faculty/shankar-prakash.avif', 'linkedin' => 'https://www.linkedin.com/in/shankarprakash'],
    ['name' => 'Muralikrishnan B', 'role' => 'Practice Faculty', 'img' => 'assets/images/faculty/muralikrishnan-b.jpg', 'linkedin' => 'https://www.linkedin.com/in/muralikrishnan'],
];
?>
<section class="iifr-section">
    <div class="iifr-fac-page__row">
        <div class="iifr-fac-page__intro">
            <span class="iifr-eyebrow">Our Faculty</span>
            <h2 class="iifr-fac-page__title">A Diverse Faculty Ecosystem</h2>
            <hr class="iifr-gold-line">
            <p>IIFR's faculty model blends globally connected academics, accomplished practice leaders, and scholar-practitioners who bring contemporary relevance into teaching, research, and institutional transformation.</p>
            <p>Our faculty community includes internationally networked scholars, senior industry professionals, policy thinkers, and educators committed to pedagogical innovation.</p>
            <div style="margin-top:24px;">
                <a href="about.php#leadership" class="iifr-btn-ghost">View All Faculty Profiles →</a>
            </div>
        </div>

        <div class="iifr-fac-page__cards iifr-fac-page__cards--five">
            <?php foreach ($research_faculty as $f):
                $n = htmlspecialchars($f['name'], ENT_QUOTES);
                $r = htmlspecialchars($f['role'], ENT_QUOTES);
                $i = htmlspecialchars($f['img'], ENT_QUOTES);
                $li = htmlspecialchars($f['linkedin'], ENT_QUOTES);
            ?>
            <article class="iifr-fac-card">
                <div class="iifr-fac-card__photo">
                    <img src="<?= $i ?>" alt="<?= $n ?>">
                    <a class="iifr-fac-card__li" href="<?= $li ?>" target="_blank" rel="noopener" aria-label="<?= $n ?> on LinkedIn">
                        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor" aria-hidden="true"><path d="M20.45 20.45h-3.56v-5.57c0-1.33-.03-3.04-1.85-3.04-1.85 0-2.14 1.45-2.14 2.94v5.67H9.34V9h3.42v1.56h.05c.48-.9 1.64-1.85 3.37-1.85 3.6 0 4.27 2.37 4.27 5.45v6.29zM5.34 7.43a2.07 2.07 0 1 1 0-4.14 2.07 2.07 0 0 1 0 4.14zM7.12 20.45H3.56V9h3.56v11.45zM22.22 0H1.77C.79 0 0 .77 0 1.73v20.54C0 23.23.79 24 1.77 24h20.45c.98 0 1.78-.77 1.78-1.73V1.73C24 .77 23.2 0 22.22 0z"/></svg>
                    </a>
                </div>
                <div class="iifr-fac-card__body">
                    <h3 class="iifr-fac-card__name"><?= $n ?></h3>
                    <span class="iifr-fac-card__role"><?= $r ?></span>
                </div>
            </article>
            <?php endforeach; ?>
        </div>
    </div>
</section>

<!-- ============ RESEARCH THAT SOLVES REAL PROBLEMS ============ -->
<section class="iifr-section">
    <div class="iifr-section__head iifr-section__head--center">
        <span class="iifr-eyebrow">Our Approach</span>
        <h2>Research that Solves Real Problems</h2>
        <hr class="iifr-gold-line-center">
        <p class="iifr-lead">IIFR advances applied, interdisciplinary research shaped by contemporary organisational and societal challenges.</p>
    </div>

    <div class="iifr-pathways-rich iifr-grid--4">
        <article class="iifr-pathway">
            <div class="iifr-pathway__icon"><i class="fa-light fa-handshake" aria-hidden="true"></i></div>
            <h3 class="iifr-pathway__title">Industry–Academia Collaboration</h3>
            <p class="iifr-pathway__body">Bridging theory and practice through co-created research, joint projects, and real-world solutions.</p>
        </article>
        <article class="iifr-pathway">
            <div class="iifr-pathway__icon"><i class="fa-light fa-building-columns" aria-hidden="true"></i></div>
            <h3 class="iifr-pathway__title">Leadership &amp; Governance</h3>
            <p class="iifr-pathway__body">Research on board effectiveness, institutional excellence, ethical leadership, and organisational change.</p>
        </article>
        <article class="iifr-pathway">
            <div class="iifr-pathway__icon"><i class="fa-light fa-brain" aria-hidden="true"></i></div>
            <h3 class="iifr-pathway__title">Future of Work &amp; Learning</h3>
            <p class="iifr-pathway__body">Exploring talent, capability building, lifelong learning ecosystems, and the future of work.</p>
        </article>
        <article class="iifr-pathway">
            <div class="iifr-pathway__icon"><i class="fa-light fa-clipboard-list" aria-hidden="true"></i></div>
            <h3 class="iifr-pathway__title">Public Policy &amp; Institutions</h3>
            <p class="iifr-pathway__body">Evidence-based research to inform policy, strengthen institutions, and advance national development.</p>
        </article>
    </div>
</section>

<!-- ============ ADVANCING TEACHING EXCELLENCE THROUGH INNOVATION ============ -->
<section class="iifr-section iifr-cream">
    <div class="iifr-section__head iifr-section__head--center">
        <h2>Advancing Teaching Excellence Through Innovation</h2>
        <hr class="iifr-gold-line-center">
    </div>

    <div class="iifr-teach-grid">
        <div class="iifr-teach-item">
            <div class="iifr-teach-item__icon"><i class="fa-light fa-robot" aria-hidden="true"></i></div>
            <div class="iifr-teach-item__body">
                <h3 class="iifr-teach-item__title">AI-Enabled Pedagogy</h3>
                <p class="iifr-teach-item__desc">Our faculty pioneer new approaches to teaching through AI-enabled pedagogy, experiential learning, case-based instruction, and digitally enhanced academic delivery.</p>
            </div>
        </div>
        <div class="iifr-teach-item">
            <div class="iifr-teach-item__icon"><i class="fa-light fa-chalkboard-user" aria-hidden="true"></i></div>
            <div class="iifr-teach-item__body">
                <h3 class="iifr-teach-item__title">Transformative Learning Experiences</h3>
                <p class="iifr-teach-item__desc">We design executive learning journeys, immersive classroom experiences, and practical learning formats that build capability and drive real impact.</p>
            </div>
        </div>
    </div>
</section>

<!-- ============ COLLABORATE WITH IIFR ============ -->
<section class="iifr-section iifr-paper">
    <div class="iifr-collab">
        <div class="iifr-collab__intro">
            <div class="iifr-collab__lead-icon" aria-hidden="true"><i class="fa-light fa-handshake"></i></div>
            <div class="iifr-collab__text">
                <h2 class="iifr-collab__title">Collaborate With IIFR</h2>
                <p class="iifr-collab__lead">Partner with our faculty ecosystem to co-create knowledge, strengthen capability, and drive meaningful impact.</p>
            </div>
        </div>
        <div class="iifr-collab__items">
            <div class="iifr-collab__item">
                <div class="iifr-collab__item-icon"><i class="fa-light fa-book-open" aria-hidden="true"></i></div>
                <div class="iifr-collab__item-body">
                    <h3 class="iifr-collab__item-title">Research</h3>
                    <p class="iifr-collab__item-desc">Partner with IIFR to co-create applied research that solves organisational, educational, and policy challenges.</p>
                </div>
            </div>
            <div class="iifr-collab__item">
                <div class="iifr-collab__item-icon"><i class="fa-light fa-users" aria-hidden="true"></i></div>
                <div class="iifr-collab__item-body">
                    <h3 class="iifr-collab__item-title">Teaching</h3>
                    <p class="iifr-collab__item-desc">Engage with our faculty to design executive learning, pedagogy innovation, and capability-building initiatives.</p>
                </div>
            </div>
            <div class="iifr-collab__cta">
                <a href="contact.php" class="iifr-btn-dark" style="background:var(--iifr-gold);border-color:var(--iifr-gold);">Engage With Us</a>
                <a href="programmes.php" class="iifr-btn-ghost">Know More About Programmes</a>
            </div>
        </div>
    </div>
</section>
<?php
    $class = 'v__1';
    include_once 'partials/footer/footer__default.php';
    $content = ob_get_clean();
    include __DIR__ . '/base.php';
?>
