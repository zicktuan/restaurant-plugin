<div class="restbeef_block restbeef_js_margin" data-margin="-20px 0 99px 0">
    <h2 class="align_center restbeef_js_padding" data-padding="0 0 15px 0">
        <?php echo !empty($atts['awe_ft_sub_title']) ? '<span class="restbeef_up_title">'.$atts['awe_ft_sub_title'].'</span>' : '' ?>
        <?php echo !empty($atts['awe_ft_title']) ? $atts['awe_ft_title'] : '' ?>
    </h2>
    <div class="restbeef_block_inner">
        <div class="restbeef_recent_products restbeef_grig_3columns">
            <?php if(!empty($listItems[0])): ?>
                <?php foreach ($listItems as $item): ?>
                <div class="restbeef_recent_product">
                    <div class="restbeef_recent_product_image">
                        <a href="#">
                            <img src="<?php echo !empty($item['img']) ? wp_get_attachment_url($item['img']) : '' ?>" alt="<?php echo !empty($item['dish_name']) ? $item['dish_name'] : ''?>">
                        </a>
                    </div>
                    <div class="restbeef_recent_product_content">
                        <?php if(!empty($item['price'])): ?>
                        <div class="restbeef_recent_product_price">
                            <?php echo !empty($item['old_price']) ? '<del>'.$item['old_price'].'</del>' : '' ?>
                            <span><?php echo $item['price'] ?></span>
                        </div>
                        <?php endif ?>
                        <h4>
                            <?php echo !empty($item['category']) ? '<span class="restbeef_up_title">'.$item['category'].'</span>' : '' ?>
                            <?php echo !empty($item['dish_name']) ? '<a href="#">'.$item['dish_name'].'</a>' : '' ?>
                        </h4>
                    </div>
                </div>
                <?php endforeach ?>
            <?php endif ?>

        </div>
    </div>
</div>