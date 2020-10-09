<div class="restbeef_block restbeef_js_bg_image restbeef_height100 restbeef_fullwidth restbeef_js_margin restbeef_home01_block restbeef_content_on_left"
     data-background="<?php echo !empty($atts['awe_contact_bg']) ? wp_get_attachment_url($atts['awe_contact_bg']) : '' ?>"
     data-margin="0 0 71px 0"
>
    <div class="restbeef_block_inner">
        <div class="row row_no_gap restbeef_height100">
            <div class="col-6 restbeef_js_padding restbeef_align_middle" data-padding="50px 0 50px 50px">
                <div class="restbeef_content_box align_center">
                    <h2>
                        <?php echo !empty($atts['awe_contact_sub_title']) ? '<span class="restbeef_up_title">'.$atts['awe_contact_sub_title'].'</span>' : ''?>
                        <?php echo !empty($atts['awe_contact_title']) ? $atts['awe_contact_title'] : "" ?>
                    </h2>
                    <form method="post" id="contact_form">
                        <div class="row">
                            <div class="col-6">
                                <input type="text" class="awe-mess-name-js" placeholder="<?php echo !empty($atts['awe_contact_email']) ? $atts['awe_contact_email'] : '' ?>" name="your_name"/>
                            </div>
                            <div class="col-6">
                                <input type="email" class="awe-mess-email-js" placeholder="<?php echo !empty($atts['awe_contact_name']) ? $atts['awe_contact_name'] : '' ?>" name="your_email"/>
                            </div>
                        </div>
                        <textarea class="awe-mess-desc-js" placeholder="<?php echo !empty($atts['awe_contact_content']) ? $atts['awe_contact_content'] : '' ?>" name="your_message"></textarea>
                        <input type="button" class="awe-send-mess-js" value="<?php echo !empty($atts['awe_contact_btn_name']) ? $atts['awe_contact_btn_name'] : '' ?>"/>
                    </form>
                </div>
            </div>
            <div class="col-6 restbeef_js_padding" data-padding="50px 50px 50px 0">

            </div>
        </div>
    </div>
</div>