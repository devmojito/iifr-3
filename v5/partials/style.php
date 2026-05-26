
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
<?php if (!empty($base_href)): ?>
    <base href="<?= htmlspecialchars($base_href, ENT_QUOTES, 'UTF-8') ?>">
<?php endif; ?>
    <title>IIFR - <?php echo htmlspecialchars($page_title) ?? 'International Institute for Faculty & Research'; ?></title>
    <link rel="shortcut icon" type="image/x-icon" href="assets/images/fav.svg">
    <!-- animate css -->
    <link rel="stylesheet" href="assets/css/plugins/animate.min.css">
    <!-- fontawesome 6.4.2 -->
    <link rel="stylesheet" href="assets/css/plugins/fontawesome.min.css">
    <!-- bootstrap min css -->
    <link rel="stylesheet" href="assets/css/vendor/bootstrap.min.css">
    <!-- swiper Css 10.2.0 -->
    <link rel="stylesheet" href="assets/css/plugins/swiper.min.css">
    <!-- Bootstrap 5.0.2 -->
    <link rel="stylesheet" href="assets/css/vendor/magnific-popup.css">
    <!-- metismenu scss -->
    <link rel="stylesheet" href="assets/css/vendor/metismenu.css">
    <!-- nice select js -->
    <link rel="stylesheet" href="assets/css/plugins/nice-select.css">
    <link rel="stylesheet" href="assets/css/plugins/jquery-ui.css">
    <!-- custom style css -->
    <link rel="stylesheet" href="assets/css/style.css?v=<?= time(); ?>">

    <!-- IIFR redesign 2026: design system + component overrides -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Playfair+Display:ital,wght@0,400;0,500;0,600;0,700;0,800;1,400;1,600&family=Source+Sans+3:wght@300;400;500;600;700&family=JetBrains+Mono:wght@400;500;600&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="assets/css/iifr-redesign.css?v=<?= time(); ?>">
