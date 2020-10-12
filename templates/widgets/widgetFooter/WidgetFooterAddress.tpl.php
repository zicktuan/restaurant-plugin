<div class="widget widget_contact">
    <h2><span class="restbeef_up_title"><?php echo (isset($instance['title']) && !empty($instance['title'])) ? $instance['title'] : '' ?></span></h2>
    <div class="textwidget">
        <?php echo (isset($instance['address']) && !empty($instance['address'])) ? '<p>'.$instance['address'].'</p>' : '' ?>
        <?php echo (isset($instance['phone']) && !empty($instance['phone'])) ? '<p>'.$instance['phone'].'</p>' : '' ?>
        <?php echo (isset($instance['time']) && !empty($instance['time'])) ? '<p>Everyday from '.$instance['time'].'</p>' : '' ?>
    </div>
</div>