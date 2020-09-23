<div class="restbeef_block" style="margin-bottom: 100px">
    <h2 class="restbeef_block_title align_center restbeef_js_margin" data-margin="0 0 40px 0">
        <?php echo !empty($atts['awe_about_gallery_sub_title']) ? '<span class="restbeef_up_title">'.$atts['awe_about_gallery_sub_title'].'</span>' : ''?>
        <?php echo !empty($atts['awe_about_gallery_title']) ? $atts['awe_about_gallery_title'] : ''?>
    </h2>
    <?php
        if(!empty($atts['awe_about_gallery'])) :
        $argsId = explode(',', $atts['awe_about_gallery']);
        $i = 0;
    ?>
    <div class="restbeef_block_inner">
        <div class="restbeef_grig_gallery_wrapper restbeef_grig_3columns restbeef_photoswipe_wrapper" data-uniqid="624">
            <?php foreach ($argsId as $id): $i++;
                $imageUrl = wp_get_attachment_image_src($id, 'full');
            ?>
            <div class="restbeef_grig_gallery_item">
                <a href="<?php echo $imageUrl[0] ?>" class="restbeef_pswp_slide" data-size="1920x1280" data-count="<?php echo ($i-1) ?>">
                    <img src="<?php echo $imageUrl[0] ?>" alt="Gallery Image 0<?php echo $i ?>"/>
                </a>
            </div>
            <?php endforeach; ?>
        </div>
    </div>
    <?php endif; ?>
</div>
