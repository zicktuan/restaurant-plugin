<div class="restbeef_block">
    <?php if(!empty($atts['awe_event_title'])): ?>
        <h2 class="align_center restbeef_js_padding" data-padding="0 0 35px 0">
            <?php echo !empty($atts['awe_event_sub_title']) ? '<span class="restbeef_up_title">'.$atts['awe_event_sub_title'].'</span>' : ''?>
            <?php echo $atts['awe_event_title'] ?>
        </h2>
    <?php endif; ?>
    <?php
        $listPost = get_posts([
            "order"       => isset($value['order_by']) ? $value['order_by'] : "DESC",
            "numberposts" => isset($atts['number_post']) ? $atts['number_post'] : 3,
            "category"    => isset($atts['awe_list_event']) ? $atts['awe_list_event'] : 0

        ]);
    ?>
    <div class="restbeef_block_inner">
        <div class="restbeef_recent_posts restbeef_grig_3columns">

            <?php if(!empty($listPost)): ?>
                <?php foreach ($listPost as $post):
                    $thumbnail = get_the_post_thumbnail_url($post->ID, '');
                $dateEvent = get_post_meta($post->ID, 'awe_event_meta', true);
                    ?>
                    <div class="restbeef_recent_post">
                        <div class="restbeef_recent_post_image">
                            <a href="<?php echo get_the_permalink($post->ID)?>">
                                <img src="<?php echo esc_url($thumbnail) ?>" alt="<?php echo $post->post_title ?>"/>
                            </a>
                        </div>
                        <div class="restbeef_recent_post_content">
                            <?php if(!empty($dateEvent)): ?>
                                <div class="restbeef_recent_post_date">
                                    <?php echo date('d M', strtotime($dateEvent))?>
                                </div>
                            <?php else: ?>
                                <div class="restbeef_recent_post_date">
                                    <?php echo date('d M', strtotime($post->post_date))?>
                                </div>
                            <?php endif ?>
                            <h5>
                                <a href="<?php echo get_the_permalink($post->ID)?>"><?php echo $post->post_title ?></a>
                            </h5>
                            <p><?php echo wp_trim_words( $post->post_content, 40, '...' ); ?></p>
                            <a href="<?php echo get_the_permalink($post->ID)?>" class="restbeef_button restbeef_button_small"><?php _e('Xem Tiếp', 'bookawesome') ?></a>
                        </div>
                    </div>
                <?php endforeach; ?>
            <?php endif ?>

        </div>
    </div>
</div>