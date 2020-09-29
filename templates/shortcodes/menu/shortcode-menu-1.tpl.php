<div class="restbeef_menu_block restbeef_fullwidth row row_no_gap">
    <div class="col-4 restbeef_height100 restbeef_js_bg_image" data-background="<?php echo !empty($atts['awe_menu_1_img']) ? wp_get_attachment_url($atts['awe_menu_1_img']) : '' ?>"></div>

    <div class="col-8">
        <div class="restbeef_block">
            <h2 class="restbeef_block_title align_center">
                <span class="restbeef_up_title">
                    <?php echo !empty($atts['awe_menu_1_sub_title']) ? $atts['awe_menu_1_sub_title'] : '' ?>
                </span>
                <?php echo !empty($atts['awe_menu_1_title']) ? $atts['awe_menu_1_title'] : '' ?>
            </h2>

            <div class="row">
                <div class="col-6">
                    <div class="restbeef_menu_list">
                        <?php $i = 0; if(!empty($listItems[0])): ?>
                            <?php foreach ($listItems as $item): $i++ ?>
                                <?php if(( $i % 2 ) != 0 ): ?>
                                    <div class="restbeef_menu_item">
                                        <div class="restbeef_menu_item_head">
                                            <h5><a href="#"><?php echo !empty($item['name']) ? $item['name'] : '' ?></a></h5>
                                            <h5 class="restbeef_menu_price">
                                                <del><?php echo !empty($item['old_price']) ? $item['old_price'] : '' ?></del>
                                                $<?php echo !empty($item['price']) ? $item['price'] : '' ?>
                                            </h5>
                                        </div>
                                        <div class="restbeef_menu_item_content">
                                            <div class="restbeef_menu_item_description">
                                                <?php echo !empty($item['desc']) ? $item['desc'] : '' ?>
                                            </div>
                                            <div class="restbeef_menu_item_weight">
                                                <?php echo !empty($item['size']) ? $item['size'] : '' ?>
                                            </div>
                                        </div>
                                    </div>
                                <?php endif ?>
                            <?php endforeach; ?>
                        <?php endif ?>
                    </div>
                </div>
                <div class="col-6">
                    <div class="restbeef_menu_list">
                        <?php $i = 0; if(!empty($listItems[0])): ?>
                            <?php foreach ($listItems as $item): $i++ ?>
                                <?php if(( $i % 2 ) == 0 ): ?>
                                    <div class="restbeef_menu_item">
                                        <div class="restbeef_menu_item_head">
                                            <h5><a href="#"><?php echo !empty($item['name']) ? $item['name'] : '' ?></a></h5>
                                            <h5 class="restbeef_menu_price">
                                                <del><?php echo !empty($item['old_price']) ? $item['old_price'] : '' ?></del>
                                                $<?php echo !empty($item['price']) ? $item['price'] : '' ?>
                                            </h5>
                                        </div>
                                        <div class="restbeef_menu_item_content">
                                            <div class="restbeef_menu_item_description">
                                                <?php echo !empty($item['desc']) ? $item['desc'] : '' ?>
                                            </div>
                                            <div class="restbeef_menu_item_weight">
                                                <?php echo !empty($item['size']) ? $item['size'] : '' ?>
                                            </div>
                                        </div>
                                    </div>
                                <?php endif ?>
                            <?php endforeach; ?>
                        <?php endif ?>
                    </div>
                </div>
            </div>
        </div>
    </div>

</div>
