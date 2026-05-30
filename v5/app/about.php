<?php
$page_title = 'About IIFR — IIFR';
$body_class = 'page iifr-redesign-scope';
ob_start();
include_once 'partials/header/transparent-header.php';
?>

<!-- ============ HERO ============ -->
<div class="iifr-page-hero">
    <div class="iifr-page-hero__bg" style="background-image:url('assets/images/about-hero.jpeg');"></div>
    <div class="iifr-page-hero__inner">
        <h1>About Us</h1>
        <p>The International Institute for Faculty &amp; Research advances higher education, research, and leadership across India and the Global South.</p>
        <div class="iifr-page-hero__cta">
            <a href="programmes.php" class="iifr-btn-primary">Explore Programmes</a>
            <a href="contact.php" class="iifr-btn-outline">Engage with Us</a>
        </div>
    </div>
</div>

<!-- ============ ABOUT IIFR ============ -->
<section class="iifr-section">
    <div class="iifr-about iifr-about--landscape">
        <div class="iifr-about__content">
            <h2>About IIFR</h2>
            <hr class="iifr-gold-line">
            <p>The International Institute of Faculty &amp; Research (IIFR) is a multidisciplinary global institute integrating academic and industry perspectives to advance education and professional practice.</p>
            <p>We bring together scholars, practitioners, and institutions to foster innovation in teaching, research, and leadership for a more connected and sustainable world.</p>
        </div>

        <div class="iifr-about__media">
            <img src="assets/images/about/about-iifr.jpeg" alt="IIFR inauguration lamp-lighting ceremony">
        </div>
    </div>
</section>

<!-- ============ WHY IIFR WAS CREATED ============ -->
<section class="iifr-section iifr-tint-blue">
    <div class="iifr-why">
        <div class="iifr-why__intro">
            <h2 class="iifr-why__title">Our Purpose</h2>
            <hr class="iifr-gold-line">
            <p>Higher education is evolving. IIFR was established to address critical gaps and create a future-ready ecosystem for faculty, research, and leadership development.</p>
        </div>
        <div class="iifr-why__points">
            <div class="iifr-why__point">
                <span class="iifr-why__icon"><i class="fa-light fa-graduation-cap" aria-hidden="true"></i></span>
                <h4 class="iifr-why__point-title">Bridge the gap</h4>
                <p class="iifr-why__point-text">between academia and industry.</p>
            </div>
            <div class="iifr-why__point">
                <span class="iifr-why__icon"><i class="fa-light fa-lightbulb" aria-hidden="true"></i></span>
                <h4 class="iifr-why__point-title">Advance innovation</h4>
                <p class="iifr-why__point-text">in pedagogy, research, and practice.</p>
            </div>
            <div class="iifr-why__point">
                <span class="iifr-why__icon"><i class="fa-light fa-users" aria-hidden="true"></i></span>
                <h4 class="iifr-why__point-title">Develop leaders</h4>
                <p class="iifr-why__point-text">who can navigate complex global challenges.</p>
            </div>
            <div class="iifr-why__point">
                <span class="iifr-why__icon"><i class="fa-light fa-globe" aria-hidden="true"></i></span>
                <h4 class="iifr-why__point-title">Build a global network</h4>
                <p class="iifr-why__point-text">for impact and influence.</p>
            </div>
        </div>
    </div>
</section>

<!-- ============ MISSION (4 priorities) — above Vision ============ -->
<section class="iifr-section iifr-cream">
    <div class="iifr-section__head iifr-section__head--center">
        <h2>Our Mission</h2>
        <hr class="iifr-gold-line-center">
        <p class="iifr-lead">To realise our vision, IIFR is committed to four enduring priorities:</p>
    </div>

    <div class="iifr-mission-grid">
        <article class="iifr-mission-card">
            <div class="iifr-mission-card__top">
                <span class="iifr-mission-card__icon"><i class="fa-light fa-chalkboard-user" aria-hidden="true"></i></span>
            </div>
            <h3 class="iifr-mission-card__title">Cultivating Academic Leaders</h3>
            <p class="iifr-mission-card__body">Cultivating a new generation of faculty and academic leaders equipped to integrate theory &amp; practice and drive pedagogical innovation and institutional transformation.</p>
        </article>
        <article class="iifr-mission-card">
            <div class="iifr-mission-card__top">
                <span class="iifr-mission-card__icon"><i class="fa-light fa-book-open" aria-hidden="true"></i></span>
            </div>
            <h3 class="iifr-mission-card__title">Advancing Applied Scholarship</h3>
            <p class="iifr-mission-card__body">Advancing interdisciplinary applied research that transcends boundaries to solve complex real-world challenges and shape global policy.</p>
        </article>
        <article class="iifr-mission-card">
            <div class="iifr-mission-card__top">
                <span class="iifr-mission-card__icon"><i class="fa-light fa-user-tie" aria-hidden="true"></i></span>
            </div>
            <h3 class="iifr-mission-card__title">Developing Scholar-Practitioners</h3>
            <p class="iifr-mission-card__body">Developing pracademics — scholar-practitioners who navigate and influence the fluid intersection of classroom, boardroom, and government.</p>
        </article>
        <article class="iifr-mission-card">
            <div class="iifr-mission-card__top">
                <span class="iifr-mission-card__icon"><i class="fa-light fa-globe" aria-hidden="true"></i></span>
            </div>
            <h3 class="iifr-mission-card__title">Building a Global Network</h3>
            <p class="iifr-mission-card__body">Building a high-impact global network that fosters seamless collaboration between the world's leading scholars and industry practitioners.</p>
        </article>
    </div>
</section>

<!-- ============ VISION — below Mission, dark band ============ -->
<section class="iifr-section iifr-vision">
    <div class="iifr-section__head iifr-section__head--center">
        <h2>Our Vision</h2>
        <hr class="iifr-gold-line-center">
        <p class="iifr-lead">To be a multidisciplinary global institute integrating academic and industry perspectives to advance education and professional practice.</p>
    </div>
</section>

<!-- ============ LEADERSHIP & GOVERNANCE (two-column) ============ -->
<?php
$iifr_council = [
    ['name' => 'Prof. Rajendra Srivastava', 'role' => 'Former Dean, Indian School of Business', 'initials' => 'RS', 'img' => 'assets/images/faculty/rajendra-srivastava.png', 'linkedin' => 'https://in.linkedin.com/in/rajendra-srivastava-816643118', 'bio' => 'Prof. Rajendra Srivastava is a globally recognised leader in marketing strategy and innovation. He has served as Dean of the Indian School of Business and held senior roles at leading international institutions. His research in marketing metrics and brand management has had significant academic and industry impact. He also advises leading organisations on strategic transformation. Prof. Srivastava continues to shape the future of business education and strategy.'],
    ['name' => 'Prof. Uday B. Desai', 'role' => 'Founding Director, IIT Hyderabad', 'initials' => 'UD', 'img' => 'assets/images/faculty/uday-desai.png', 'linkedin' => 'https://in.linkedin.com/in/ubdesai', 'bio' => 'Prof. Uday B. Desai is a distinguished academician and the founding Director of IIT Hyderabad. He is Professor Emeritus in Electrical Engineering and holds multiple leadership roles across academic institutions. He serves as Chancellor of ICFAI Dehradun and Anurag University, and Vice-President of INAE. He has contributed extensively to policy and institutional governance through roles in DST and MeitY. Prof. Desai is widely respected for his contributions to engineering education and research.'],
    ['name' => 'Prof. Alfons Sauquet', 'role' => 'Associate Director, EFMD Quality Services', 'initials' => 'AS', 'img' => 'assets/images/faculty/alfons-sauquet.png', 'linkedin' => 'https://www.linkedin.com/in/alfons-sauquet-53871211/', 'bio' => 'Prof. Alfons Sauquet is associate director at EFMD Quality Services and Director of EDAF. He has earlier served as Global Dean of ESADE Business and Law School and Dean of the Business School. He has been a lecturer at HEC Paris, Erasmus Universiteit Rotterdam and Wharton School of Business. He has published articles and books on Learning and Innovation. He has served as elected member in the governing Board of the European Institute of Technology (EiT), the largest funded European initiative on education and research for Innovation.'],
    ['name' => 'Mr. Manoj Kohli', 'role' => 'Chairman & Managing Partner, MK Knowledge LLP', 'initials' => 'MK', 'img' => 'assets/images/faculty/manoj-kohli.png', 'linkedin' => 'https://www.linkedin.com/in/manoj-kohli-34948b108/', 'bio' => 'Manoj Kohli is a professional entrepreneur who loves shaping industry growth transformations. With 46 years of industrial experience, he is now the Chairman and Managing Partner in MK Knowledge LLP. Manoj is known for building admired brands, agile cultures, and high-performance leadership teams. He served as the country head of Soft Bank, CEO & MD of Airtel, and executive chairman of SB Energy. He is an independent director, a business advisor to many large companies and a coach to young entrepreneurs. He teaches leadership and strategy in the leading schools across the world.'],
    ['name' => 'Prof. Baljit Sidhu', 'role' => 'Professor of Accounting, University of Sydney', 'initials' => 'BS', 'img' => 'assets/images/faculty/baljit-sidhu.png', 'linkedin' => 'https://www.linkedin.com/in/baljit-sidhu-66870a8/', 'bio' => 'Baljit K Sidhu is the Professor of Accounting at the University of Sydney Business School. She serves on the Academic Advisory Panel of the Australian Accounting Standards Board, and has served on the AFAANZ Board, and as Director of the Centre for Research in Finance at the AGSM. Baljit is Joint Editor-in-Chief at Abacus, Deputy Editor at Accounting & Finance, and is the former Editor-in-Chief of the Australian Journal of Management (2010-2016). She has experience in corporate banking and has held appointments at leading universities in Australasia and visited extensively at international business schools (e.g., LSE, Rice, Rochester, Stanford) including teaching at the London Business School and the University of Michigan.'],
    ['name' => 'Prof. Rishikesha T. Krishnan', 'role' => 'Professor of Strategy, IIM Bangalore', 'initials' => 'RK', 'img' => 'assets/images/faculty/rishikesha-krishnan.png', 'linkedin' => 'https://in.linkedin.com/in/rishikesha-krishnan-662601', 'bio' => 'Prof. Rishikesha T. Krishnan is Professor of Strategy at IIM Bangalore and a leading academic administrator. He has served as Director of IIM Indore and IIM Bangalore, shaping two of India\'s premier institutions. His work focuses on innovation, strategy, and technology management. He is recognised for driving institutional transformation and academic excellence. Prof. Krishnan continues to influence management education through research and leadership.'],
    ['name' => 'Mr. Nandu Nandkishore', 'role' => 'Professor of Practice, Indian School of Business', 'initials' => 'NN', 'img' => 'assets/images/faculty/nandu-nandkishore.png', 'linkedin' => 'https://ae.linkedin.com/in/nandu-nandkishore-7380a722', 'bio' => 'Mr. Nandkishore is a global C-suite leader with over three decades of experience across markets worldwide. He has held senior leadership roles at Nestle, including Global CEO of Nestle Nutrition. He is currently Professor of Practice at the Indian School of Business and engages actively in academia. Known for his expertise in marketing and strategy, he bridges industry and academic perspectives. He is also a frequent speaker at global platforms including the World Economic Forum.'],
    ['name' => 'Prof. Ashley Braganza', 'role' => 'Chair in Business Transformation, Brunel', 'initials' => 'AB', 'img' => 'assets/images/faculty/ashley-braganza.png', 'linkedin' => 'https://www.linkedin.com/in/ashley-braganza/', 'bio' => 'Professor Braganza is the Chair in Business Transformation and former Dean of Brunel Business School. He is an internationally recognised subject matter expert for organisational transformation. He is a passionate believer in student employability with a strong network of global contacts. He has extensive board level experience in academic and commercial environments. He is the Founder and co-Director of Brunel\'s interdisciplinary Research Centre for Artificial Intelligence.'],
    ['name' => 'Prof. Gerry George', 'role' => 'Group Managing Director, IMU Malaysia', 'initials' => 'GG', 'img' => 'assets/images/faculty/gerry-george.png', 'linkedin' => 'https://my.linkedin.com/in/gerry-george-a713505', 'bio' => 'Prof. Gerry George is Group Managing Director at International Medical University, Malaysia. He is a globally recognised scholar in entrepreneurship and innovation, with prior leadership roles at Singapore Management University and Imperial College Business School. He has also been associated with London Business School and leading global universities. His work bridges academia, policy, and impact investing. Prof. George continues to contribute to global entrepreneurship ecosystems and academic thought leadership.'],
    ['name' => 'Dr. S. Ramakrishna Velamuri', 'role' => 'Dean, School of Management, Mahindra University', 'initials' => 'RV', 'img' => 'assets/images/faculty/ramakrishna-velamuri.png', 'linkedin' => 'https://in.linkedin.com/in/ramavelamuri', 'bio' => 'Dr. Rama Velamuri is a Professor specialising in entrepreneurship, business model innovation, and business ethics. He serves as Dean of the School of Management at Mahindra University. He has previously taught at CEIBS (Shanghai) and IESE Business School. His research is widely cited and includes award-winning case studies. Dr. Velamuri contributes significantly to advancing entrepreneurship education and research globally.'],
    ['name' => 'Prof. John Roberts', 'role' => 'Scientia Professor, UNSW', 'initials' => 'JR', 'img' => 'assets/images/faculty/john-roberts.png', 'linkedin' => 'https://www.linkedin.com/in/john-roberts-b9823a21/', 'bio' => 'Prof. John Roberts is a Scientia Professor at the University of New South Wales. He is a Fellow of Fudan University, London Business School, and the Academy of Social Sciences in Australia. He is a highly acclaimed scholar in marketing science, recognised with the Buck Weaver Award. He also received the Sir Charles McGrath Award for lifetime achievement in marketing. Prof. Roberts founded the strategic consulting firm Marketing Insights. In 2023, he was appointed a Member of the Order of Australia.'],
    ['name' => 'Prof. Arvind Sahay', 'role' => 'Director, MDI Gurgaon', 'initials' => 'AS', 'img' => 'assets/images/faculty/arvind-sahay.png', 'linkedin' => 'https://in.linkedin.com/in/arvind-sahay-0944b02', 'bio' => 'Prof. Arvind Sahay is Director and Professor of Marketing and International Business at MDI Gurgaon. He previously served as a faculty member at IIM Ahmedabad and London Business School. With extensive experience in global academia, he brings deep expertise in marketing, strategy, and international business. His academic leadership spans research, teaching, and institutional development. Prof. Sahay is widely respected for his contributions to management education globally.'],
    ['name' => 'Dr. Koen Vandenbempt', 'role' => 'Professor of Strategic Management, U. Antwerp', 'initials' => 'KV', 'img' => 'assets/images/faculty/koen-vandenbempt.png', 'linkedin' => 'https://www.linkedin.com/in/koenvandenbempt/', 'bio' => 'Prof. Koen Vandenbempt is professor of Strategic Management and Associate Dean for Internationalization. He is a former dean at the Faculty of Business and Economics, University of Antwerp. Koen serves on the EFMD programme accreditation board. He is a researcher, advisor and management trainer in the field of strategy formation and strategic marketing. His expertise includes business model innovation and organizational mindfulness.'],
    ['name' => 'Prof. Ashish Sinha', 'role' => 'Professor of Marketing, UQ Business School', 'initials' => 'AS', 'img' => 'assets/images/faculty/ashish-sinha.png', 'linkedin' => 'https://au.linkedin.com/in/ashish-sinha-7a021522', 'bio' => 'Prof. Ashish Sinha is Professor of Marketing at UQ Business School and Visiting Professor at the Indian School of Business. He has held several senior academic leadership roles, including Academic Dean of Executive Education at ISB. His career spans academia and industry, including leadership roles in analytics at IRI, Chicago. His expertise lies in marketing, analytics, and research. Prof. Sinha brings a strong blend of academic rigour and industry insight.'],
    ['name' => 'Dr. Bhimaraya Metri', 'role' => 'Director, IIM Nagpur', 'initials' => 'BM', 'img' => 'assets/images/faculty/bhimaraya.png', 'linkedin' => 'https://in.linkedin.com/in/bhimaraya-metri-26b42137', 'bio' => 'Dr. Bhimaraya Metri is the Director of IIM Nagpur and a distinguished academic leader in management education. He is widely recognised for his contributions as a teacher, researcher, and institutional builder. Over his career, he has held key leadership roles across premier academic institutions and industry. His work focuses on strengthening academic excellence and governance in higher education. Dr. Metri continues to shape management education through his strategic vision and leadership.'],
    ['name' => 'Prof. Howard Hunter', 'role' => 'Academic Council', 'initials' => 'HH', 'img' => null, 'linkedin' => '', 'bio' => ''],
];
?>
<?php
/* Reusable static photo card for Executive Board (no popup) */
function iifr_board_card($img, $name, $role, $linkedin = '', $bio = '') {
    $img_e = htmlspecialchars($img, ENT_QUOTES);
    $name_e = htmlspecialchars($name, ENT_QUOTES);
    $role_e = htmlspecialchars($role, ENT_QUOTES);
    $hasProfile = ($linkedin !== '' || $bio !== '');
    if (!$hasProfile) {
        echo '<article class="iifr-gov-person">'
           . '<div class="iifr-gov-person__photo"><img src="' . $img_e . '" alt="' . $name_e . '"></div>'
           . '<h4 class="iifr-gov-person__name">' . $name_e . '</h4>'
           . '<span class="iifr-gov-person__role">' . $role_e . '</span>'
           . '</article>';
        return;
    }
    $atts = 'data-name="' . $name_e . '"'
          . ' data-role="' . $role_e . '"'
          . ' data-bio="' . htmlspecialchars($bio, ENT_QUOTES) . '"'
          . ' data-linkedin="' . htmlspecialchars($linkedin, ENT_QUOTES) . '"'
          . ' data-initials=""'
          . ' data-img="' . $img_e . '"';
    echo '<article class="iifr-gov-person iifr-gov-person--clickable" data-profile ' . $atts
       . ' role="button" tabindex="0" aria-label="View profile of ' . $name_e . '">'
       . '<div class="iifr-gov-person__photo"><img src="' . $img_e . '" alt="' . $name_e . '"></div>'
       . '<h4 class="iifr-gov-person__name">' . $name_e . '</h4>'
       . '<span class="iifr-gov-person__role">' . $role_e . '</span>'
       . '</article>';
}
?>
<section class="iifr-section iifr-paper" id="leadership">
    <div class="iifr-section__head iifr-section__head--center">
        <span class="iifr-eyebrow">Governance</span>
        <h2>Leadership &amp; Governance</h2>
        <hr class="iifr-gold-line-center">
    </div>

    <div class="iifr-govern">
        <!-- LEFT — Executive Board -->
        <div class="iifr-govern__card">
            <h3 class="iifr-govern__heading">Executive Board</h3>
            <p class="iifr-govern__intro">The Executive Board provides strategic oversight, institutional stewardship, and long-term leadership to guide IIFR's growth, governance, and strategic priorities.</p>

            <span class="iifr-govern__label">Leadership</span>
            <div class="iifr-gov-grid iifr-gov-grid--2">
                <?php iifr_board_card('assets/images/faculty/Shri%20Purohit%20%282%29.jpg', 'Banwarilal Purohit', 'Chairman, IIFR'); ?>
                <?php iifr_board_card('assets/images/faculty/rajendra-srivastava.png', 'Rajendra Srivastava', 'Vice Chairman, IIFR', 'https://in.linkedin.com/in/rajendra-srivastava-816643118'); ?>
            </div>

            <span class="iifr-govern__label">Members</span>
            <div class="iifr-gov-grid iifr-gov-grid--2 iifr-gov-grid--small">
                <?php iifr_board_card('assets/images/faculty/rohit-bansal.jpeg', 'Rohit Bansal', 'Member', 'https://www.linkedin.com/in/therohitbansal/'); ?>
                <?php iifr_board_card('assets/images/faculty/siva.jpeg', 'Siva Prasad', 'Member', 'https://www.linkedin.com/in/gitaacharan/'); ?>
                <?php iifr_board_card('assets/images/faculty/aruna-reddy.jpeg', 'Aruna Reddy', 'Member', 'https://www.linkedin.com/in/reddyaruna/'); ?>
                <?php iifr_board_card('assets/images/faculty/kaushik.jpeg', 'PR Kaushik', 'Member'); ?>
            </div>
        </div>

        <!-- RIGHT — Academic Council -->
        <div class="iifr-govern__card">
            <h3 class="iifr-govern__heading">Academic Council</h3>
            <p class="iifr-govern__intro">The Academic Council is central to IIFR's vision, offering strategic guidance on academic excellence, research priorities, and long-term institutional development.</p>
            <span class="iifr-govern__label">Advisory Body</span>
            <div class="iifr-gov-grid iifr-gov-grid--4">
                <?php foreach ($iifr_council as $m):
                    $hasProfile = !empty($m['bio']);
                    $atts = 'data-name="' . htmlspecialchars($m['name'], ENT_QUOTES) . '"'
                          . ' data-role="' . htmlspecialchars($m['role'], ENT_QUOTES) . '"'
                          . ' data-bio="' . htmlspecialchars($m['bio'], ENT_QUOTES) . '"'
                          . ' data-linkedin="' . htmlspecialchars($m['linkedin'], ENT_QUOTES) . '"'
                          . ' data-initials="' . htmlspecialchars($m['initials'], ENT_QUOTES) . '"'
                          . ' data-img="' . htmlspecialchars($m['img'] ?? '', ENT_QUOTES) . '"';
                ?>
                <?php if ($hasProfile): ?>
                <article class="iifr-gov-person iifr-gov-person--clickable" data-profile <?= $atts ?> role="button" tabindex="0" aria-label="View profile of <?= htmlspecialchars($m['name'], ENT_QUOTES) ?>">
                <?php else: ?>
                <article class="iifr-gov-person">
                <?php endif; ?>
                    <div class="iifr-gov-person__photo">
                        <?php if (!empty($m['img'])): ?>
                            <img src="<?= htmlspecialchars($m['img'], ENT_QUOTES) ?>" alt="<?= htmlspecialchars($m['name'], ENT_QUOTES) ?>">
                        <?php else: ?>
                            <div class="iifr-gov-person__ph"><?= htmlspecialchars($m['initials'], ENT_QUOTES) ?></div>
                        <?php endif; ?>
                    </div>
                    <h4 class="iifr-gov-person__name"><?= htmlspecialchars($m['name'], ENT_QUOTES) ?></h4>
                    <span class="iifr-gov-person__role"><?= htmlspecialchars($m['role'], ENT_QUOTES) ?></span>
                </article>
                <?php endforeach; ?>
            </div>
        </div>
    </div>
</section>

<!-- Profile popup (shared) -->
<div class="iifr-profile-modal" id="iifrProfileModal" aria-hidden="true" role="dialog" aria-modal="true">
    <div class="iifr-profile-modal__backdrop" data-pm-backdrop></div>
    <div class="iifr-profile-modal__dialog">
        <button type="button" class="iifr-profile-modal__close" data-pm-close aria-label="Close">&times;</button>
        <div class="iifr-profile-modal__head">
            <img class="iifr-profile-modal__avatar" data-pm-avatar alt="" style="display:none;">
            <div class="iifr-profile-modal__avatar-ph" data-pm-avatar-ph style="display:none;"></div>
            <div>
                <h3 class="iifr-profile-modal__name" data-pm-name></h3>
                <span class="iifr-profile-modal__role" data-pm-role></span>
            </div>
        </div>
        <div class="iifr-profile-modal__body">
            <p class="iifr-profile-modal__bio" data-pm-bio></p>
            <a class="iifr-profile-modal__li" data-pm-linkedin href="#" target="_blank" rel="noopener">
                <svg xmlns="http://www.w3.org/2000/svg" width="18" height="18" viewBox="0 0 24 24" fill="currentColor" aria-hidden="true"><path d="M19 3a2 2 0 0 1 2 2v14a2 2 0 0 1-2 2H5a2 2 0 0 1-2-2V5a2 2 0 0 1 2-2h14m-.5 15.5v-5.3a3.26 3.26 0 0 0-3.26-3.26c-.85 0-1.84.52-2.32 1.3v-1.11h-2.79v8.37h2.79v-4.93c0-.77.62-1.4 1.39-1.4a1.4 1.4 0 0 1 1.4 1.4v4.93h2.79M6.88 8.56a1.68 1.68 0 0 0 1.68-1.68c0-.93-.75-1.69-1.68-1.69a1.69 1.69 0 0 0-1.69 1.69c0 .93.76 1.68 1.69 1.68m1.39 9.94v-8.37H5.5v8.37h2.77Z"/></svg>
                View LinkedIn Profile
            </a>
        </div>
    </div>
</div>

<script>
(function () {
    var modal = document.getElementById('iifrProfileModal');
    if (!modal) return;
    var avatar = modal.querySelector('[data-pm-avatar]');
    var avatarPh = modal.querySelector('[data-pm-avatar-ph]');
    var nameEl = modal.querySelector('[data-pm-name]');
    var roleEl = modal.querySelector('[data-pm-role]');
    var bioEl = modal.querySelector('[data-pm-bio]');
    var liEl = modal.querySelector('[data-pm-linkedin]');

    function openProfile(el) {
        var img = el.getAttribute('data-img');
        if (img) {
            avatar.src = img; avatar.style.display = ''; avatarPh.style.display = 'none';
        } else {
            avatar.style.display = 'none'; avatarPh.style.display = 'flex';
            avatarPh.textContent = el.getAttribute('data-initials') || '';
        }
        nameEl.textContent = el.getAttribute('data-name') || '';
        roleEl.textContent = el.getAttribute('data-role') || '';
        var bioText = el.getAttribute('data-bio') || '';
        bioEl.textContent = bioText;
        bioEl.style.display = bioText ? '' : 'none';
        var liHref = el.getAttribute('data-linkedin') || '';
        if (liHref) { liEl.href = liHref; liEl.style.display = ''; }
        else { liEl.style.display = 'none'; }
        modal.classList.add('is-open');
        modal.setAttribute('aria-hidden', 'false');
        document.body.style.overflow = 'hidden';
    }
    function closeProfile() {
        modal.classList.remove('is-open');
        modal.setAttribute('aria-hidden', 'true');
        document.body.style.overflow = '';
    }
    document.querySelectorAll('[data-profile]').forEach(function (el) {
        el.addEventListener('click', function () { openProfile(el); });
        el.addEventListener('keydown', function (e) {
            if (e.key === 'Enter' || e.key === ' ') { e.preventDefault(); openProfile(el); }
        });
    });
    modal.querySelector('[data-pm-close]').addEventListener('click', closeProfile);
    modal.querySelector('[data-pm-backdrop]').addEventListener('click', closeProfile);
    document.addEventListener('keydown', function (e) { if (e.key === 'Escape') closeProfile(); });
})();
</script>

<!-- ============ STRATEGIC PARTNERS ============ -->
<section class="iifr-section iifr-paper">
    <div class="iifr-section__head iifr-section__head--center">
        <span class="iifr-eyebrow">Collaborations</span>
        <h2>Strategic Partners</h2>
        <hr class="iifr-gold-line-center">
        <p class="iifr-lead">Built in collaboration with trusted academic and institutional partners.</p>
    </div>

    <div class="iifr-partners-rich">
        <article class="iifr-partner-card">
            <div class="iifr-partner-card__logo"><img src="assets/images/logo/bvb.png" alt="BVB"></div>
            <h3 class="iifr-partner-card__name">BVB</h3>
            <p class="iifr-partner-card__desc">Since 1938, Bharatiya Vidya Bhavan has been one of India's foremost institutions shaping education and society — the home and host institution for IIFR.</p>
            <a href="#" class="iifr-btn-dark" style="margin-top:12px;">Learn More</a>
        </article>

        <article class="iifr-partner-card">
            <div class="iifr-partner-card__logo"><img src="assets/images/logo/efmd.png" alt="EFMD"></div>
            <h3 class="iifr-partner-card__name">EFMD</h3>
            <p class="iifr-partner-card__desc">EFMD is a global association fostering excellence in management development through accreditation, research, and collaboration.</p>
            <a href="#" class="iifr-btn-dark" style="margin-top:12px;">Learn More</a>
        </article>

        <article class="iifr-partner-card">
            <div class="iifr-partner-card__logo"><img src="assets/images/logo/latticed.png" alt="LatticeEd" onerror="this.style.display='none';this.parentNode.innerHTML='<div style=&quot;font-family:Playfair Display,Georgia,serif;font-size:28px;color:#0d1b3e;font-weight:700;&quot;>LatticeEd</div>';"></div>
            <h3 class="iifr-partner-card__name">LatticeEd</h3>
            <p class="iifr-partner-card__desc">LatticeEd empowers institutions with innovative solutions for learning, research, and academic transformation.</p>
            <a href="#" class="iifr-btn-dark" style="margin-top:12px;">Learn More</a>
        </article>
    </div>
</section>
<?php
    $class = 'v__1';
    include_once 'partials/footer/footer__default.php';
    $content = ob_get_clean();
    include __DIR__ . '/base.php';
?>
