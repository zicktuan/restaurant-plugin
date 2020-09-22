<div class="single-sidebar-widget tag-cloud-widget">
    <h4 class="tagcloud-title"><?php echo isset($instance['title']) ? esc_html__($instance['title'], 'bookawesome') : '' ?></h4>
    <ul>
        <?php foreach ($listCloud as $value) : ?>
            <li>
                <a href="<?php echo site_url() . '/tag/' . $value->slug; ?>"><?php _e($value->name, 'bookawesome') ?></a>
            </li>
        <?php endforeach ?>

    </ul>
</div>