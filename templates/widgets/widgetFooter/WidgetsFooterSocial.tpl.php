<div class="widget widget_in_touch">
    <h3 class="restbeef_up_title">
        <?php echo (isset($instance['title']) && !empty($instance['title'])) ? $instance['title'] : ''?>
    </h3>
    <div class="restbeef_in_touch">
        <ul class="restbeef_intouch_socials">
            <?php if (isset($instance['fb']) && !empty($instance['fb'])):?>
            <li>
                <a href="<?php echo $instance['fb'] ?>">
                    <i class="fa fa-facebook"></i>
                </a>
            </li>
            <?php endif ?>

            <?php if (isset($instance['twitter']) && !empty($instance['twitter'])):?>
            <li>
                <a href="<?php echo $instance['twitter'] ?>#">
                    <i class="fa fa-twitter"></i>
                </a>
            </li>
            <?php endif ?>

            <?php if (isset($instance['ins']) && !empty($instance['ins'])):?>
            <li>
                <a href="<?php echo $instance['ins'] ?>">
                    <i class="fa fa-instagram"></i>
                </a>
            </li>
            <?php endif ?>

            <?php if (isset($instance['ytb']) && !empty($instance['ytb'])):?>
            <li>
                <a href="<?php echo $instance['ytb'] ?>">
                    <i class="fa fa-youtube-play"></i>
                </a>
            </li>
            <?php endif ?>
        </ul>
    </div>
</div>