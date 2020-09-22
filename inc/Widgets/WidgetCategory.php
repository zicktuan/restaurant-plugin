<?php 
namespace MyPlugin\Widgets;

class WidgetCategory extends AbstractWidget
{
	function __construct() {
		// Instantiate the parent object
		parent::__construct( false, 'Awesome Categories' );
	}

	function widget( $args, $instance ) {
		$categories = get_categories();
        include $this->locateTemplate('widget-categories.tpl.php');
	}

	function update( $new_instance, $old_instance ) {
		$instance = [];
		$instance['title']   	 = sanitize_text_field( $new_instance['title'] );
		return $instance;
	}

	function form( $instance ) {
		$title = isset( $instance['title'] ) ? esc_attr( $instance['title'] ) : '';
		?>
		<p>
			<label for="<?php echo $this->get_field_id( 'title' ); ?>"><?php _e( 'Title:', 'bookawesome' ); ?></label>
			<input class="widefat" id="<?php echo $this->get_field_id( 'title' ); ?>" name="<?php echo $this->get_field_name( 'title' ); ?>" type="text" value="<?php echo $title; ?>">
		</p>
		<?php
	}
}
