<?php
namespace MyPlugin\Widgets;

class WidgetsFooterSocial extends AbstractWidget
{
    function __construct()
    {
        // Instantiate the parent object
        parent::__construct(false, 'Awesome Footer Social');
    }

    function widget($args, $instance)
    {
        include $this->locateTemplate('widgetFooter/WidgetsFooterSocial.tpl.php');
    }

    function update($new_instance, $old_instance)
    {
        $instance = $old_instance;
        $instance['title'] = sanitize_text_field($new_instance['title']);
        $instance['fb'] = sanitize_text_field($new_instance['fb']);
        $instance['gplus'] = sanitize_text_field($new_instance['gplus']);
        $instance['pin'] = sanitize_text_field($new_instance['pin']);
        $instance['ins'] = sanitize_text_field($new_instance['ins']);
        $instance['twitter'] = sanitize_text_field($new_instance['twitter']);
        $instance['ytb'] = sanitize_text_field($new_instance['ytb']);

        return $instance;
    }

    function form($instance)
    {
        $title = !empty($instance['title']) ? $instance['title'] : '';
        $fb = !empty($instance['fb']) ? $instance['fb'] : '';
        $gplus = !empty($instance['gplus']) ? $instance['gplus'] : '';
        $pin = !empty($instance['pin']) ? $instance['pin'] : '';
        $ins = !empty($instance['ins']) ? $instance['ins'] : '';
        $twitter = !empty($instance['twitter']) ? $instance['twitter'] : '';
        $ytb = !empty($instance['ytb']) ? $instance['ytb'] : '';

        ?>
        <p>
            <label for="<?php echo $this->get_field_id('title'); ?>"><?php _e('Title:', 'bookawesome'); ?></label>
            <input class="widefat" id="<?php echo $this->get_field_id('title'); ?>"
                   name="<?php echo $this->get_field_name('title'); ?>" type="text"
                   value="<?php echo esc_attr($title); ?>"/>
        </p>

        <p>
            <label for="<?php echo $this->get_field_id('fb'); ?>"><?php _e('Facebook:', 'bookawesome'); ?></label>
            <input class="widefat" id="<?php echo $this->get_field_id('fb'); ?>"
                   name="<?php echo $this->get_field_name('fb'); ?>" type="text"
                   value="<?php echo esc_attr($fb); ?>"/>
        </p>

        <p>
            <label for="<?php echo $this->get_field_id('ins'); ?>"><?php _e('Instagram:', 'bookawesome'); ?></label>
            <input class="widefat" id="<?php echo $this->get_field_id('ins'); ?>"
                   name="<?php echo $this->get_field_name('ins'); ?>" type="text"
                   value="<?php echo esc_attr($ins); ?>"/>
        </p>

        <p>
            <label for="<?php echo $this->get_field_id('twitter'); ?>"><?php _e('Twitter:', 'bookawesome'); ?></label>
            <input class="widefat" id="<?php echo $this->get_field_id('twitter'); ?>"
                   name="<?php echo $this->get_field_name('twitter'); ?>" type="text"
                   value="<?php echo esc_attr($twitter); ?>"/>
        </p>

        <p>
            <label for="<?php echo $this->get_field_id('ytb'); ?>"><?php _e('Youtube:', 'bookawesome'); ?></label>
            <input class="widefat" id="<?php echo $this->get_field_id('ytb'); ?>"
                   name="<?php echo $this->get_field_name('ytb'); ?>" type="text"
                   value="<?php echo esc_attr($ytb); ?>"/>
        </p>

        <?php
    }

}
