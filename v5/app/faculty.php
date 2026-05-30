<?php
$page_title = 'Faculty — IIFR';
$body_class = 'page iifr-redesign-scope';
ob_start();
include_once 'partials/header/transparent-header.php';
?>

<!-- ============ HERO ============ -->
<div class="iifr-page-hero">
    <div class="iifr-page-hero__bg" style="background-image:url('assets/images/academy/1.jpeg');"></div>
    <div class="iifr-page-hero__inner">
        <span class="iifr-page-hero__eyebrow">Our People</span>
        <h1>Faculty</h1>
        <p>Globally connected scholars, accomplished practice leaders, and scholar-practitioners shaping IIFR's mission.</p>
        <div class="iifr-page-hero__cta">
            <a href="#" class="iifr-btn-primary" data-bs-toggle="modal" data-bs-target="#iifrApplyModal" role="button">Apply Now</a>
            <a href="programmes.php" class="iifr-btn-outline">Explore Programmes</a>
        </div>
    </div>
</div>

<!-- ============ FACULTY DIRECTORY (intro left, 4×2 cards right) ============ -->
<?php
$iifr_fac = [
    ['name' => 'Prof. Rajendra Srivastava', 'role' => 'Former Dean, Indian School of Business', 'img' => 'assets/images/faculty/rajendra-srivastava.png', 'linkedin' => 'https://in.linkedin.com/in/rajendra-srivastava-816643118', 'excerpt' => 'Globally recognised leader in marketing strategy and innovation. Former Dean of the Indian School of Business; advises leading organisations on strategic transformation.'],
    ['name' => 'Prof. Uday B. Desai', 'role' => 'Founding Director, IIT Hyderabad', 'img' => 'assets/images/faculty/uday-desai.png', 'linkedin' => 'https://in.linkedin.com/in/ubdesai', 'excerpt' => 'Distinguished academician and founding Director of IIT Hyderabad. Professor Emeritus contributing extensively to policy, institutional governance, and research.'],
    ['name' => 'Prof. Alfons Sauquet', 'role' => 'Associate Director, EFMD Quality Services', 'img' => 'assets/images/faculty/alfons-sauquet.png', 'linkedin' => 'https://www.linkedin.com/in/alfons-sauquet-53871211/', 'excerpt' => 'Associate Director at EFMD Quality Services and Director of EDAF. Former Global Dean of ESADE Business and Law School; published widely on learning and innovation.'],
    ['name' => 'Mr. Manoj Kohli', 'role' => 'Chairman & Managing Partner, MK Knowledge LLP', 'img' => 'assets/images/faculty/manoj-kohli.png', 'linkedin' => 'https://www.linkedin.com/in/manoj-kohli-34948b108/', 'excerpt' => 'Professional entrepreneur with 46 years of industrial experience. Former country head of SoftBank, CEO & MD of Airtel, and executive chairman of SB Energy.'],
    ['name' => 'Prof. Baljit Sidhu', 'role' => 'Professor of Accounting, University of Sydney', 'img' => 'assets/images/faculty/baljit-sidhu.png', 'linkedin' => 'https://www.linkedin.com/in/baljit-sidhu-66870a8/', 'excerpt' => 'Professor of Accounting at the University of Sydney Business School. Joint Editor-in-Chief at Abacus; serves on the Australian Accounting Standards Board.'],
    ['name' => 'Prof. Rishikesha T. Krishnan', 'role' => 'Professor of Strategy, IIM Bangalore', 'img' => 'assets/images/faculty/rishikesha-krishnan.png', 'linkedin' => 'https://in.linkedin.com/in/rishikesha-krishnan-662601', 'excerpt' => 'Professor of Strategy at IIM Bangalore. Former Director of IIM Indore and IIM Bangalore; focuses on innovation, strategy, and technology management.'],
    ['name' => 'Mr. Nandu Nandkishore', 'role' => 'Professor of Practice, Indian School of Business', 'img' => 'assets/images/faculty/nandu-nandkishore.png', 'linkedin' => 'https://ae.linkedin.com/in/nandu-nandkishore-7380a722', 'excerpt' => 'Global C-suite leader with three decades of experience. Former Global CEO of Nestle Nutrition; Professor of Practice at the Indian School of Business.'],
    ['name' => 'Prof. Ashley Braganza', 'role' => 'Chair in Business Transformation, Brunel', 'img' => 'assets/images/faculty/ashley-braganza.png', 'linkedin' => 'https://www.linkedin.com/in/ashley-braganza/', 'excerpt' => 'Chair in Business Transformation and former Dean of Brunel Business School. Co-Director of Brunel\'s Research Centre for Artificial Intelligence.'],
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

        <div class="iifr-fac-page__cards">
            <?php foreach ($iifr_fac as $f):
                $n = htmlspecialchars($f['name'], ENT_QUOTES);
                $r = htmlspecialchars($f['role'], ENT_QUOTES);
                $i = htmlspecialchars($f['img'], ENT_QUOTES);
                $li = htmlspecialchars($f['linkedin'], ENT_QUOTES);
                $e = htmlspecialchars($f['excerpt'], ENT_QUOTES);
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
                    <p class="iifr-fac-card__desc"><?= $e ?></p>
                    <a class="iifr-fac-card__more" href="about.php#leadership">Read More →</a>
                </div>
            </article>
            <?php endforeach; ?>
        </div>
    </div>
</section>
<?php
    $class = 'v__1';
    include_once 'partials/footer/footer__default.php';
    $content = ob_get_clean();
    include __DIR__ . '/base.php';
?>
