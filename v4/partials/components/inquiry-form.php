<?php
/**
 * Embedded inquiry form. Set before include:
 *   $iifr_form_context — 'Contact' | 'ECP'
 *   $iifr_form_return — 'contact.php' | 'ecp.php'
 *   $iifr_form_heading — optional string
 *   $iifr_form_intro — optional string
 */
if (session_status() === PHP_SESSION_NONE) {
    session_start();
}

$iifr_form_context = isset($iifr_form_context) && is_string($iifr_form_context) ? $iifr_form_context : 'Contact';
$iifr_form_return = isset($iifr_form_return) && is_string($iifr_form_return) ? $iifr_form_return : 'contact.php';
$iifr_form_heading = isset($iifr_form_heading) && is_string($iifr_form_heading) ? $iifr_form_heading : 'Send us a message';
$iifr_form_intro = isset($iifr_form_intro) && is_string($iifr_form_intro) ? $iifr_form_intro : 'Share your question or enquiry and we will get back to you.';

$formError = isset($_SESSION['iifr_form_error']) ? (string) $_SESSION['iifr_form_error'] : '';
$formSuccess = !empty($_SESSION['iifr_form_success']);
unset($_SESSION['iifr_form_error'], $_SESSION['iifr_form_success']);
?>
<div class="row justify-content-center">
    <div class="col-lg-8 wow fadeInUp">
        <div class="rts-section rt-center mb--40">
            <h2 class="rts__section--title text-capitalize"><?= htmlspecialchars($iifr_form_heading, ENT_QUOTES, 'UTF-8'); ?></h2>
            <p class="rts-section-description" style="max-width:560px;margin-left:auto;margin-right:auto;"><?= htmlspecialchars($iifr_form_intro, ENT_QUOTES, 'UTF-8'); ?></p>
        </div>
        <?php if ($formError !== '') : ?>
            <div class="iifr-form-notice iifr-form-notice--error mb--30" role="alert"><?= htmlspecialchars($formError, ENT_QUOTES, 'UTF-8'); ?></div>
        <?php endif; ?>
        <?php if ($formSuccess) : ?>
            <div class="iifr-form-notice iifr-form-notice--success mb--30" role="status">Thank you — your message has been sent. We will reply soon.</div>
        <?php endif; ?>
        <form class="iifr-inquiry-form" method="post" action="contact-form-submit.php" novalidate>
            <input type="hidden" name="return_to" value="<?= htmlspecialchars($iifr_form_return, ENT_QUOTES, 'UTF-8'); ?>">
            <input type="hidden" name="context" value="<?= htmlspecialchars($iifr_form_context, ENT_QUOTES, 'UTF-8'); ?>">
            <div class="iifr-form-hp" aria-hidden="true">
                <label for="website">Website</label>
                <input type="text" name="website" id="website" tabindex="-1" autocomplete="off">
            </div>
            <div class="row g-4">
                <div class="col-md-6">
                    <div class="form-group mb-0">
                        <label for="iifr-name">Name <span class="text-danger">*</span></label>
                        <input type="text" name="name" id="iifr-name" required maxlength="200" autocomplete="name">
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="form-group mb-0">
                        <label for="iifr-email">Email <span class="text-danger">*</span></label>
                        <input type="email" name="email" id="iifr-email" required maxlength="320" autocomplete="email">
                    </div>
                </div>
                <div class="col-12">
                    <div class="form-group mb-0">
                        <label for="iifr-phone">Phone <span class="text-muted">(optional)</span></label>
                        <input type="tel" name="phone" id="iifr-phone" maxlength="40" autocomplete="tel">
                    </div>
                </div>
                <div class="col-12">
                    <div class="form-group mb-0">
                        <label for="iifr-message">Message <span class="text-danger">*</span></label>
                        <textarea name="message" id="iifr-message" required maxlength="8000" placeholder="How can we help?"></textarea>
                    </div>
                </div>
                <div class="col-12 rt-center">
                    <button type="submit" class="rts-theme-btn btn-arrow">Send message <span><i class="fa-regular fa-arrow-right"></i></span></button>
                </div>
            </div>
        </form>
    </div>
</div>
