<div class="restbeef_block restbeef_js_margin" data-margin="0 0 90px 0">
    <h2 class="restbeef_block_title align_center">
        <?php echo !empty($atts['awe_contact_form_sub_title']) ? '<span class="restbeef_up_title">'.$atts['awe_contact_form_sub_title'].'</span>' : '' ?>

        <?php echo !empty($atts['awe_contact_form_title']) ? $atts['awe_contact_form_title'] : '' ?>
    </h2>
    <div class="restbeef_block_inner">
        <div class="row restbeef_keep_tablet_row">
            <div class="col-2"></div>
            <div class="col-8">
                <form method="post" id="contact_form">
                    <div class="row">
                        <div class="col-6">
                            <input type="text" class="awe-contact-name-mess-js" placeholder="<?php echo !empty($atts['awe_contact_form_name']) ? $atts['awe_contact_form_name'] : '' ?>" name="your_name"/>
                        </div>
                        <div class="col-6">
                            <input type="email" class="awe-contact-email-mess-js" placeholder="<?php echo !empty($atts['awe_contact_email']) ? $atts['awe_contact_email'] : '' ?>" name="your_email"/>
                        </div>
                    </div>
                    <textarea class="awe-contact-send-desc-js" placeholder="<?php echo !empty($atts['awe_contact_form_content']) ? $atts['awe_contact_form_content'] : '' ?>" name="your_message"></textarea>
                    <input type="submit" class="awe-contact-send-mess-js" value="<?php echo !empty($atts['awe_contact_form_btn_name']) ? $atts['awe_contact_form_btn_name'] : '' ?>"/>
                </form>
            </div>
            <div class="col-2"></div>
        </div>
    </div>
</div>