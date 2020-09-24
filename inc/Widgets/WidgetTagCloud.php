<?php 
namespace MyPlugin\Widgets;

class WidgetTagCloud extends AbstractWidget {

	function __construct() {
		// Instantiate the parent object
		parent::__construct( false, 'Awesome Tag Cloud' );
	}

	function widget( $args, $instance ) {
        include $this->locateTemplate('widget-tag-cloud.tpl.php');
	}

	function update( $new_instance, $old_instance ) {
		$instance = array();
		$instance['title'] = sanitize_text_field( $new_instance['title'] );
		$instance['tags'] = stripslashes($new_instance['tags']);

		return $instance;
	}

	function form( $instance ) {
	    $title = isset( $instance['title'] ) ? $instance['title'] : 'Popular Tags';
        $tags = isset( $instance['tags'] ) ? $instance['tags'] : [];

        $getTags = get_tags(array(
            'hide_empty' => false
        ));
        $argsItem = [];
        foreach ($getTags as $value) {
            $argsL          = [];
            $argsL['label'] = $value->name;
            $argsL['value'] = $value->term_id;
            $argsItem[]     = $argsL;
        }
        ?>
        <p>
            <label for="<?php echo $this->get_field_id( 'title' ); ?>"><?php _e( 'Title:', 'bookawesome' ); ?></label>
            <input class="widefat" id="<?php echo $this->get_field_id( 'title' ); ?>" name="<?php echo $this->get_field_name( 'title' ); ?>" type="text" value="<?php echo esc_attr($title); ?>" />
        </p>
        <div class="awe-res-tags-wrap">
            <label><?php _e( 'List Tag:', 'bookawesome' ); ?></label>
            <div class="awe-widget-tag-list">
                <span class="bas-widget-travel-list-remove">x</span>
            </div>
        </div>
        <textarea class="awe-res-data-tags" style="display: none;"><?php echo esc_textarea( json_encode( $argsItem ) ); ?></textarea>
        <?php
	}
}
