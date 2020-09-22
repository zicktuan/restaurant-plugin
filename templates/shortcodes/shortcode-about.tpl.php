<div class="restbeef_block restbeef_js_bg_image restbeef_height100 restbeef_fullwidth restbeef_js_margin restbeef_home01_block restbeef_content_on_right"
     data-background="<?php echo !empty($atts['awe_about_bg']) ? wp_get_attachment_url($atts['awe_about_bg']) : '' ?>"
     data-margin="0 0 71px 0"
>
    <div class="restbeef_block_inner">
        <div class="row row_no_gap restbeef_align_middle restbeef_height100">
            <div class="col-6 restbeef_js_padding" data-padding="50px 0 50px 50px"></div>

            <div class="col-6 restbeef_js_padding" data-padding="50px 50px 50px 0">
                <div class="restbeef_content_box align_center">
                    <?php if(!empty($atts['awe_about_title'])): ?>
                    <h2>
                        <?php echo !empty($atts['awe_about_sub_title']) ? '<span class="restbeef_up_title">'.$atts['awe_about_sub_title'].'</span>' : ''?>
                        <?php echo $atts['awe_about_title'] ?>
                    </h2>
                    <?php endif; ?>

                    <?php echo !empty($atts['awe_about_desc']) ? '<p class="align_center restbeef_js_margin" data-margin="0 0 43px 0">'.$atts['awe_about_desc'].'</p>' : ''?>

                    <?php if(!empty($atts['awe_about_btn_name'])): ?>
                        <a href="<?php echo !empty($atts['awe_about_btn_url']) ? $atts['awe_about_btn_url'] : '#'?>" class="restbeef_button">
                            <?php echo $atts['awe_about_btn_name'] ?>
                        </a>
                    <?php endif; ?>
                </div>
            </div>
        </div>
    </div>
</div>