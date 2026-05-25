<?php
require_once __DIR__ . '/../../iifr-config.php';
?>
<!-- header style two -->
<div id="side-bar" class="side-bar">
    <button class="close-icon-menu"><i class="far fa-times"></i></button>
    <!-- inner menu area desktop start -->
    <div class="inner-main-wrapper-desk">
        <div class="thumbnail">
            <a href="<?= IIFR_BASE ?>"><img src="assets/main-dark.png" alt="IIFR" style="height:150px;width:auto;"></a>
        </div>
        <div class="inner-content">
            <p class="disc">
                International Institute for Faculty &amp; Research — for India and the Global South.
            </p>
            <div class="offcanvase__info">
                <div class="offcanvase__info--content">
                    <a href="mailto:<?= htmlspecialchars(IIFR_INFO_EMAIL, ENT_QUOTES, 'UTF-8'); ?>"><span><i class="fa-sharp fa-light fa-envelope"></i></span><?= htmlspecialchars(IIFR_INFO_EMAIL, ENT_QUOTES, 'UTF-8'); ?></a>
                    <a href="https://www.google.com/maps?q=Bharatiya+Vidya+Bhavan%2C+KG+Marg%2C+Copernicus+Marg%2C+New+Delhi%2C+Delhi+110001" target="_blank" rel="noopener"><span><i class="fa-sharp fa-light fa-location-dot"></i></span>Bharatiya Vidya Bhavan, KG Marg, New Delhi</a>
                    <div class="offcanvase__info--content--social">
                        <p class="title">Follow Us:</p>
                        <div class="social__links">
                            <a href="#"><i class="fa-brands fa-linkedin"></i></a>
                            <a href="#"><i class="fa-brands fa-youtube"></i></a>
                            <a href="#"><i class="fa-brands fa-instagram"></i></a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- mobile menu area start -->
    <div class="mobile-menu-main">
        <nav class="nav-main mainmenu-nav mt--30">
            <ul class="mainmenu metismenu" id="mobile-menu-active">
                <li><a href="<?= IIFR_BASE ?>" class="main">Home</a></li>
                <li><a href="about.php" class="main">About Us</a></li>
                <li class="has-droupdown">
                    <a href="#" class="main" aria-expanded="false">Programmes</a>
                    <ul class="sub-menu">
                        <li><a href="programmes.php">All programmes</a></li>
                        <li><a href="ecp.php">ECP — Educators' Certificate Programme</a></li>
                        <li><a href="efm.php">EFM — Executive Fellow in Management</a></li>
                        <li><a href="applied-research.php">Applied Research</a></li>
                    </ul>
                </li>
                <li><a href="research.php" class="main">Research and Faculty</a></li>
                <li><a href="insights.php" class="main">Insights</a></li>
                <li><a href="apply.php" class="main">Apply</a></li>
                <li><a href="contact.php" class="main iifr-nav-contact">Contact</a></li>
            </ul>
        </nav>

        <div class="offcanvase__info--content mt--30">
            <a href="mailto:<?= htmlspecialchars(IIFR_INFO_EMAIL, ENT_QUOTES, 'UTF-8'); ?>"><span><i class="fa-sharp fa-light fa-envelope"></i></span><?= htmlspecialchars(IIFR_INFO_EMAIL, ENT_QUOTES, 'UTF-8'); ?></a>
            <a href="https://www.google.com/maps?q=Bharatiya+Vidya+Bhavan%2C+KG+Marg%2C+Copernicus+Marg%2C+New+Delhi%2C+Delhi+110001" target="_blank" rel="noopener"><span><i class="fa-sharp fa-light fa-location-dot"></i></span>Bharatiya Vidya Bhavan, KG Marg, New Delhi</a>
            <div class="offcanvase__info--content--social">
                <p class="title">Follow Us:</p>
                <div class="social__links">
                    <a href="#"><i class="fa-brands fa-linkedin"></i></a>
                    <a href="#"><i class="fa-brands fa-youtube"></i></a>
                    <a href="#"><i class="fa-brands fa-instagram"></i></a>
                </div>
            </div>
        </div>
    </div>
    <!-- mobile menu area end -->
</div>
<!-- header style two End -->
