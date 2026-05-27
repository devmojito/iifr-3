<?php
require_once dirname(__DIR__, 2) . '/iifr-config.php';

/* Determine the active nav item for highlight */
$iifr_path = parse_url($_SERVER['REQUEST_URI'] ?? '/', PHP_URL_PATH) ?: '/';
$iifr_basename = basename($iifr_path, '.php');
$iifr_nav_active = in_array($iifr_basename, ['ecp', 'efm', 'applied-research', 'programmes'], true) ? 'programmes' : $iifr_basename;
$iifr_nav_active = in_array($iifr_basename, ['faculty'], true) ? 'research' : $iifr_nav_active;
$active = function ($p) use ($iifr_nav_active) {
    return $iifr_nav_active === $p ? ' active' : '';
};
?>
<!-- ================================================================
     IIFR header — fixed white navbar, IIFR logo image, original nav set
     ================================================================ -->
<header class="header header__sticky v__1" id="iifrHeader">

    <nav class="iifr-nav" aria-label="Primary">
        <a href="<?= IIFR_BASE ?>" class="iifr-nav-logo" aria-label="IIFR — Home">
            <img src="assets/main-dark.png" alt="IIFR" class="iifr-nav-logo-img">
        </a>

        <ul class="iifr-nav-links">
            <li><a href="about.php" class="<?= trim($active('about')); ?>">About Us</a></li>
            <li class="iifr-nav-has-sub">
                <a href="programmes.php" class="<?= trim($active('programmes')); ?>">
                    Programmes <span class="iifr-nav-caret" aria-hidden="true"></span>
                </a>
                <ul class="iifr-nav-submenu">
                    <li><a href="ecp.php">ECP</a></li>
                    <li><a href="efm.php">EFM</a></li>
                    <li><a href="applied-research.php">Applied Research</a></li>
                </ul>
            </li>
            <li><a href="research.php" class="<?= trim($active('research')); ?>">Research and Faculty</a></li>
            <li><a href="insights.php" class="<?= trim($active('insights')); ?>">Insights</a></li>
        </ul>

        <div class="iifr-nav-ctas">
            <a href="apply.php" class="iifr-btn-engage">Apply</a>
            <a href="contact.php" class="iifr-btn-engage iifr-btn-engage--dark">Contact Us</a>
        </div>

        <button type="button"
                class="iifr-nav__burger"
                aria-label="Open menu"
                onclick="document.getElementById('side-bar').classList.add('show');document.getElementById('anywhere-home').classList.add('bgshow');">
            <i class="fa-solid fa-bars" aria-hidden="true"></i>
        </button>
    </nav>

</header>
<!-- header end -->
