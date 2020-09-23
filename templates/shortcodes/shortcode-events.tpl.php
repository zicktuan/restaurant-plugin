<div class="restbeef_block">
    <?php if(!empty($atts['awe_event_title'])): ?>
        <h2 class="align_center restbeef_js_padding" data-padding="0 0 35px 0">
            <?php echo !empty($atts['awe_event_sub_title']) ? '<span class="restbeef_up_title">'.$atts['awe_event_sub_title'].'</span>' : ''?>
            <?php echo $atts['awe_event_title'] ?>
        </h2>
    <?php endif; ?>
    <?php $argsEvents = !empty($atts['awe_list_event']) ? explode(",", $atts['awe_list_event']) : [];?>
    <div class="restbeef_block_inner">
        <div class="restbeef_recent_posts restbeef_grig_3columns">

            <?php if(!empty($argsEvents) && is_array($argsEvents)): ?>
                <?php foreach ($argsEvents as $eventId):
                    $post = get_post($eventId);
                    $thumbnail = get_the_post_thumbnail_url($eventId, '');
                    ?>
                    <div class="restbeef_recent_post">
                        <div class="restbeef_recent_post_image">
                            <a href="<?php echo get_the_permalink($eventId)?>">
                                <img src="<?php echo esc_url($thumbnail) ?>" alt="<?php echo $post->post_title ?>"/>
                            </a>
                        </div>
                        <div class="restbeef_recent_post_content">
                            <div class="restbeef_recent_post_date">
                                25 Apr
                            </div>
                            <h5>
                                <a href="<?php echo get_the_permalink($eventId)?>"><?php echo $post->post_title ?></a>
                            </h5>
                            <p><?php echo wp_trim_words( $post->post_content, 40, '...' ); ?></p>
                            <a href="<?php echo get_the_permalink($eventId)?>" class="restbeef_button restbeef_button_small"><?php _e('Xem Tiếp', 'bookawesome') ?></a>
                        </div>
                    </div>
                <?php endforeach; ?>
            <?php endif ?>

        </div>
    </div>
</div>