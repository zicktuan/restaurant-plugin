<div data-section="sections/bg-image-paralax-overlay.html">
    <div class="space-lg bg-image overlay" data-image-src="<?php echo !empty( $atts['awe_slogan_bg'] ) ? wp_get_attachment_url($atts['awe_slogan_bg']) : '' ?>"
         data-stellar-background-ratio="0.6" style="background: url(<?php echo !empty( $atts['awe_slogan_bg'] ) ? wp_get_attachment_url($atts['awe_slogan_bg']) : '' ?>) 0% -68.1437px / cover no-repeat;">
        <div class="container">
            <div class="row vertical-align">
                <div class="col-sm-8 col-sm-offset-2 col-xs-10 col-xs-offset-1">
                    <div class="quote margin-auto text-center">
                        <h3 class="font-white font-serif">
                            <?php echo ( !empty( $atts['awe_slogan_title'] ) ) ? $atts['awe_slogan_title'] : '' ?>
                        </h3>
                        <?php if ( !empty( $atts['awe_slogan_author'] )): ?>
                            <p class="font-white small">
                                <?php echo $atts['awe_slogan_author'] ?>
                            </p>
                        <?php endif; ?>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>