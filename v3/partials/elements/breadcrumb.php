<?php
$iifr_breadcrumb_bg = $breadcrumb_bg ?? ('assets/images/banner/' . ($image ?? 'breadcrumb.jpg'));
?>
<!-- BREADCRUMB AREA -->
<section class="rts-breadcrumb <?= htmlspecialchars($class) ?? ''; ?>" data-background="<?= htmlspecialchars($iifr_breadcrumb_bg, ENT_QUOTES, 'UTF-8'); ?>" style="background-image: url(<?= htmlspecialchars($iifr_breadcrumb_bg, ENT_QUOTES, 'UTF-8'); ?>);">
    <div class="container">
        <div class="row">
            <div class="col-12">
                <div class="breadcrumb-content wow fadeInUp">
                    <ul class="breadcrumb">
                        <li class="breadcrumb-item"><a href="/">Home</a></li>
                        <li class="breadcrumb-item active" aria-current="page"><?= htmlspecialchars($page) ?? ''; ?></li>
                    </ul>
                    <h2 class="section-title"><?= htmlspecialchars($title) ?? ''; ?></h2>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- BREADCRUMB AREA END -->
