<?php

namespace MyPlugin\Widgets;

class WidgetSearch extends AbstractWidget
{
    function __construct() {
        // Instantiate the parent object
        parent::__construct( false, 'Awesome Search' );
    }

    function widget( $args, $instance ) {
        include $this->locateTemplate('WidgetSearch.tpl.php');
    }

    function update( $new_instance, $old_instance ) {
        $instance = $old_instance;
        $instance['title'] = sanitize_text_field($new_instance['title']);

        return $instance;
    }

    function form( $instance ) {
        $title  = isset( $instance['title'] ) ? $instance['title'] : '';
        ?>
        <p>
            <label for="<?php echo $this->get_field_id( 'title' ); ?>"><?php _e( 'Title:', 'bookawesome' ); ?></label>
            <input class="widefat" id="<?php echo $this->get_field_id( 'title' ); ?>" name="<?php echo $this->get_field_name( 'title' ); ?>" type="text" value="<?php echo esc_attr($title); ?>" />
        </p>
        <?php

    }
}
