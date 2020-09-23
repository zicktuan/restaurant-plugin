<div class="restbeef_block restbeef_js_bg_image restbeef_height100 restbeef_fullwidth restbeef_js_margin restbeef_home01_block restbeef_content_on_right"
     data-background="<?php echo !empty($atts['awe_about_right_bg']) ? wp_get_attachment_url($atts['awe_about_right_bg']) : '' ?>"
     data-margin="0 0 71px 0"
>
    <div class="restbeef_block_inner">
        <div class="row row_no_gap restbeef_align_middle restbeef_height100">
            <div class="col-6 restbeef_js_padding" data-padding="50px 0 50px 50px"></div>

            <div class="col-6 restbeef_js_padding" data-padding="50px 50px 50px 0">
                <div class="restbeef_content_box align_center">
                    <h2>
                        <?php echo !empty($atts['awe_about_right_sub_title']) ? '<span class="restbeef_up_title">'.$atts['awe_about_right_sub_title'].'</span>' : ''?>
                        <?php echo !empty($atts['awe_about_right_title']) ? $atts['awe_about_right_title'] : ''?>
                    </h2>

                    <?php echo !empty($atts['awe_about_right_desc']) ? '<p class="restbeef_js_margin" data-margin="0 0 43px 0">'.$atts['awe_about_right_desc'].'</p>' : ''?>

<!--                    <a href="team_member.html" class="restbeef_button">Learn More</a>-->
                </div>
            </div>
        </div>
    </div>
</div>