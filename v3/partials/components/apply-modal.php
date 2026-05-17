<?php
/**
 * Application enquiry modal for apply.php — posts to contact-form-submit.php (info@iifr.global).
 */
?>
<div class="modal fade" id="iifrApplyModal" tabindex="-1" aria-labelledby="iifrApplyModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered modal-lg">
        <div class="modal-content iifr-apply-modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="iifrApplyModalLabel">Apply — ECP or EFM</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <p class="rts-section-description mb--25" style="font-size:16px;line-height:1.55;margin-bottom:1.25rem;">
                    Leave your details and we will respond with programme-specific application steps.
                </p>
                <form class="iifr-inquiry-form" method="post" action="contact-form-submit.php" novalidate>
                    <input type="hidden" name="return_to" value="apply.php">
                    <input type="hidden" name="context" value="Apply">
                    <div class="iifr-form-hp" aria-hidden="true">
                        <label for="iifr-apply-website">Website</label>
                        <input type="text" name="website" id="iifr-apply-website" tabindex="-1" autocomplete="off">
                    </div>
                    <div class="row g-4">
                        <div class="col-md-6">
                            <div class="form-group mb-0">
                                <label for="iifr-apply-name">Name <span class="text-danger">*</span></label>
                                <input type="text" name="name" id="iifr-apply-name" required maxlength="200" autocomplete="name">
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group mb-0">
                                <label for="iifr-apply-email">Email <span class="text-danger">*</span></label>
                                <input type="email" name="email" id="iifr-apply-email" required maxlength="320" autocomplete="email">
                            </div>
                        </div>
                        <div class="col-12">
                            <div class="form-group mb-0">
                                <label for="iifr-apply-phone">Phone <span class="text-muted">(optional)</span></label>
                                <input type="tel" name="phone" id="iifr-apply-phone" maxlength="40" autocomplete="tel">
                            </div>
                        </div>
                        <div class="col-12 rt-center">
                            <button type="submit" class="rts-theme-btn btn-arrow">Submit application enquiry <span><i class="fa-regular fa-arrow-right"></i></span></button>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
