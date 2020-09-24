
<div class="widget widget_restbeef_featured_posts">
    <h5 class="widgettitle"><span><?php echo isset($instance['title']) ? esc_html__($instance['title'], 'bookawesome') : '' ?></span></h5>

    <div class="restbeef_recent_posts_widget">

        <?php if (!empty($listPost)) : ?>
            <?php foreach ($listPost as $value) : ?>
                <div class="restbeef_posts_item restbeef_block_with_fi">
                    <a href="<?php echo get_the_permalink($value->ID)?>" class="restbeef_posts_item_image">
                        <img class="restbeef_fimage" src="<?php echo get_the_post_thumbnail_url($value->ID, '70x70'); ?>" alt="<?php echo !empty($value->post_title) ? $value->post_title : '' ?>">
                    </a>
                    <div class="restbeef_posts_item_content">
                        <a class="restbeef_featured_post_widget_title" href="<?php echo get_the_permalink($value->ID)?>">
                            <?php echo !empty($value->post_title) ? $value->post_title : '' ?>
                        </a>
                        <div class="restbeef_widget_meta">
                            <div><?php echo date('F j, Y', strtotime($value->post_date)) ?></div>
                        </div>
                    </div>
                </div>
            <?php endforeach ?>
        <?php endif ?>

    </div>

</div>
