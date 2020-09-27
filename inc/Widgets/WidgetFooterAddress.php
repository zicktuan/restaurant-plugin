<?php

namespace MyPlugin\Widgets;

class WidgetFooterAddress extends AbstractWidget
{
    function __construct() {
        // Instantiate the parent object
        parent::__construct( false, 'Awesome Footer Contacts' );
    }

    function widget( $args, $instance ) {
        include $this->locateTemplate('widgetFooter/WidgetFooterAddress.tpl.php');
    }

    function update( $new_instance, $old_instance ) {
        $instance = $old_instance;
        $instance['title'] = sanitize_text_field($new_instance['title']);
        $instance['address'] = sanitize_text_field($new_instance['address']);
        $instance['phone'] = sanitize_text_field($new_instance['phone']);
        $instance['time'] = sanitize_text_field($new_instance['time']);
        return $instance;
    }

    function form( $instance ) {
        $title = !empty($instance['title']) ? $instance['title'] : '';
        $address = !empty($instance['address']) ? $instance['address'] : '';
        $phone = !empty($instance['phone']) ? $instance['phone'] : '';
        $time = !empty($instance['time']) ? $instance['time'] : '';

        ?>
        <p>
            <label for="<?php echo $this->get_field_id('title'); ?>"><?php _e('Title:', 'bookawesome'); ?></label>
            <input class="widefat" id="<?php echo $this->get_field_id('title'); ?>"
                   name="<?php echo $this->get_field_name('title'); ?>" type="text"
                   value="<?php echo esc_attr($title); ?>"/>
        </p>
        <p>
            <label for="<?php echo $this->get_field_id('address'); ?>"><?php _e('Address:', 'bookawesome'); ?></label>
            <input class="widefat" id="<?php echo $this->get_field_id('address'); ?>"
                   name="<?php echo $this->get_field_name('address'); ?>" type="text"
                   value="<?php echo esc_attr($address); ?>"/>
        </p>
        <p>
            <label for="<?php echo $this->get_field_id('phone'); ?>"><?php _e('Phone:', 'bookawesome'); ?></label>
            <input class="widefat" id="<?php echo $this->get_field_id('phone'); ?>"
                   name="<?php echo $this->get_field_name('phone'); ?>" type="text"
                   value="<?php echo esc_attr($phone); ?>"/>
        </p>
        <p>
            <label for="<?php echo $this->get_field_id('time'); ?>"><?php _e('Time:', 'bookawesome'); ?></label>
            <input class="widefat" id="<?php echo $this->get_field_id('time'); ?>"
                   name="<?php echo $this->get_field_name('time'); ?>" type="text"
                   value="<?php echo esc_attr($time); ?>"/>
        </p>
        <?php
    }
}
