<?php 
    $page_title = 'Page Not Found — IIFR';
    ob_start();
    include_once 'partials/header/transparent-header-v5.php';
?>

    <section style="min-height:60vh;display:flex;align-items:center;justify-content:center;padding:80px 0;">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-lg-7 rt-center">
                    <div style="font-family:var(--font-secondary);font-size:120px;font-weight:700;color:#02132D;line-height:1;margin-bottom:20px;">404</div>
                    <h3 class="rts-section-title">Page Not Found</h3>
                    <p class="rts-section-description" style="margin-top:16px;">The page you're looking for doesn't exist or has been moved. Let's get you back on track.</p>
                    <div style="display:flex;gap:14px;justify-content:center;align-items:center;flex-wrap:wrap;margin-top:32px;">
                        <a href="/" class="rts-theme-btn btn-arrow">Back to Home <span><i class="fa-regular fa-arrow-right"></i></span></a>
                        <a href="programmes.php" class="rts-nbg-btn btn-arrow">Explore Programmes <span><i class="fa-sharp fa-regular fa-arrow-right"></i></span></a>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- CTA -->
    <section style="padding:100px 0;background:url(assets/images/course/event-bg.jpg) center/cover no-repeat;position:relative;">
        <div style="position:absolute;inset:0;background:rgba(26,0,6,0.85);"></div>
        <div class="container" style="position:relative;z-index:1;">
            <div class="row justify-content-center rt-center">
                <div class="col-lg-8 wow fadeInUp">
                    <h3 class="iifr-cta-heading">Looking for Something Specific?</h3>
                    <p class="iifr-cta-body">Get in touch with us — we're happy to help you find what you need.</p>
                    <div style="display:flex;gap:16px;justify-content:center;flex-wrap:wrap;">
                        <a href="contact.php" class="rts-theme-btn btn-arrow btn-white">Contact Us <span><i class="fa-regular fa-arrow-right"></i></span></a>
                    </div>
                </div>
            </div>
        </div>
    </section>

<?php
    $class= 'v__1';
    include_once 'partials/footer/footer__default.php';
    $content = ob_get_clean();
    include __DIR__ . '/base.php';
?>
