<div data-section="sections/icons-paralax-img.html">
    <section class="space-lg bg-image overlay" data-image-src="<?php echo !empty( $atts['awe_contact_bg'] ) ? wp_get_attachment_url($atts['awe_contact_bg']) : '' ?>"
             data-stellar-background-ratio="0.3" style="background: url(<?php echo !empty( $atts['awe_contact_bg'] ) ? wp_get_attachment_url($atts['awe_contact_bg']) : '' ?>) 0% -51.3516px / cover no-repeat;">
        <div class="container" data-cloneable="">
            <div class="row text-center">
                <?php if( !empty( $listItems ) ): ?>
                    <?php foreach ( $listItems as $item ): ?>
                        <div class="col-xs-12 col-sm-3 wow fadeIn">
                            <div class="icon">
                                <i class="az-icon <?php echo !empty( $item['awe_contact_item_icon'] ) ? $item['awe_contact_item_icon'] : 'icon-pencil' ?> icon-xl font-white"></i>
                            </div>
                            <h6 class="font-white"><?php echo !empty( $item['awe_contact_item_desc'] ) ? $item['awe_contact_item_desc'] : '' ?></h6>
                            <p class="font-white"><?php echo !empty( $item['awe_contact_item_title'] ) ? $item['awe_contact_item_title'] : '' ?></p>
                        </div>
                    <?php endforeach; ?>
                <?php endif; ?>
            </div>
        </div>
    </section>
</div>