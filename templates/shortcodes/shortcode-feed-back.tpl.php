<div class="restbeef_block restbeef_js_margin" data-margin="0 0 100px 0">
    <div class="restbeef_block_inner">
        <?php if(!empty($atts['awe_fb_title'])): ?>
            <h2 class="align_center restbeef_js_padding" data-padding="0 0 15px 0">
                <?php echo !empty($atts['awe_fb_sub_title']) ? '<span class="restbeef_up_title">'.$atts['awe_fb_sub_title'].'</span>' : ''?>
                <?php echo $atts['awe_fb_title'] ?>
            </h2>
        <?php endif; ?>

        <div class="restbeef_testimonials_wrapper restbeef_testimonials_grid restbeef_grig_3columns align_center">

            <?php if(!empty($listItems[0])): ?>
                <?php foreach ($listItems as $item): ?>
                <div class="restbeef_testimonials_item">
                    <div class="restbeef_testimonials_author">
                        <img src="<?php echo !empty($item['avt']) ? wp_get_attachment_url($item['avt']) : '' ?>" alt="<?php echo !empty($item['name']) ? $item['name'] : ''?>"/>
                        <?php echo !empty($item['name']) ? '<div class="restbeef_testimonials_author_name">'.$item['name'].'</div>' : ''?>
                    </div>

                    <?php echo !empty($item['fb']) ? '<div class="restbeef_testimonial_content">'.$item['fb'].'</div>' : ''?>
                </div>
                <?php endforeach;?>
            <?php endif; ?>

        </div>
    </div>
</div>