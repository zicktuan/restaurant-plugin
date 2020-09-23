<div class="restbeef_block restbeef_js_margin restbeef_fullwidth restbeef_fullwidth_boxed restbeef_js_bg_image"
     data-background="<?php echo !empty($atts['awe_contact_img_bg']) ? wp_get_attachment_url($atts['awe_contact_img_bg']) : '' ?>"
     data-margin="0 0 70px 0"
>
    <div class="restbeef_block_overlay"></div>
    <div class="restbeef_block_inner">
        <div class="restbeef_promo_block align_center restbeef_js_padding" data-padding="187px 0 188px 0">
            <h2>
                <?php echo !empty($atts['awe_contact_img_sub_title']) ? '<span class="restbeef_up_title">'.$atts['awe_contact_img_sub_title'].'</span>' : '' ?>

                <?php echo !empty($atts['awe_contact_img_title']) ? $atts['awe_contact_img_title'] : '' ?>
            </h2>
            <?php echo !empty($atts['awe_contact_img_btn_name']) ? '<a href="'.$atts['awe_contact_img_btn_url'].'" class="restbeef_button">'.$atts['awe_contact_img_btn_name'].'</a>' : '' ?>
        </div>
    </div>
</div>