<?php
/**
 * Custom About us Widget
 */

class Lawn_Care_About_Widget extends WP_Widget {
	function __construct() {
		parent::__construct(
			'Lawn_Care_About_Widget',
			__('VW About us', 'lawn-care'),
			array( 'description' => __( 'Widget for about us section in sidebar', 'lawn-care' ), ) 
		);
	}
	
	public function widget( $lawn_care_args, $lawn_care_instance ) {
		?>
		<aside class="widget">
			<?php
			$lawn_care_title = isset( $lawn_care_instance['title'] ) ? $lawn_care_instance['title'] : '';
			$lawn_care_author = isset( $lawn_care_instance['author'] ) ? $lawn_care_instance['author'] : '';
			$lawn_care_designation = isset( $lawn_care_instance['designation'] ) ? $lawn_care_instance['designation'] : '';
			$lawn_care_description = isset( $lawn_care_instance['description'] ) ? $lawn_care_instance['description'] : '';
			$lawn_care_read_more_url = isset( $lawn_care_instance['read_more_url'] ) ? $lawn_care_instance['read_more_url'] : '';
			$lawn_care_read_more_text = isset( $lawn_care_instance['read_more_text'] ) ? $lawn_care_instance['read_more_text'] : '';
			$lawn_care_upload_image = isset( $lawn_care_instance['upload_image'] ) ? $lawn_care_instance['upload_image'] : '';

	        echo '<div class="custom-about-us">';
	        if(!empty($lawn_care_title) ){ ?><h3 class="custom_title"><?php echo esc_html($lawn_care_title); ?></h3><?php } ?>
		        <?php if($lawn_care_upload_image): ?>
	      			<img src="<?php echo esc_url($lawn_care_upload_image); ?>" alt="">
				<?php endif; ?>
				<?php if(!empty($lawn_care_author) ){ ?><p class="custom_author"><?php echo esc_html($lawn_care_author); ?></p><?php } ?>
				<?php if(!empty($lawn_care_designation) ){ ?><p class="custom_designation"><?php echo esc_html($lawn_care_designation); ?></p><?php } ?>
		        <?php if(!empty($lawn_care_description) ){ ?><p class="custom_desc"><?php echo esc_html($lawn_care_description); ?></p><?php } ?>
		        <?php if(!empty($lawn_care_read_more_url) ){ ?><div class="more-button"><a class="custom_read_more" href="<?php echo esc_url($lawn_care_read_more_url); ?>"><?php if(!empty($lawn_care_read_more_text) ){ ?><?php echo esc_html($lawn_care_read_more_text); ?><?php } ?></a></div><?php } ?>
	        <?php echo '</div>';
			?>
		</aside>
		<?php
	}
	
	// Widget Backend 
	public function form( $lawn_care_instance ) {	

		$lawn_care_title= ''; $lawn_care_author = ''; $lawn_care_designation = ''; $lawn_care_description= ''; $lawn_care_read_more_text = ''; $lawn_care_read_more_url = ''; $lawn_care_upload_image = '';

		$lawn_care_title = isset( $lawn_care_instance['title'] ) ? $lawn_care_instance['title'] : '';
		$lawn_care_author = isset( $lawn_care_instance['author'] ) ? $lawn_care_instance['author'] : '';
		$lawn_care_designation = isset( $lawn_care_instance['designation'] ) ? $lawn_care_instance['designation'] : '';
		$lawn_care_description = isset( $lawn_care_instance['description'] ) ? $lawn_care_instance['description'] : '';
		$lawn_care_read_more_url = isset( $lawn_care_instance['read_more_url'] ) ? $lawn_care_instance['read_more_url'] : '';
		$lawn_care_read_more_text = isset( $lawn_care_instance['read_more_text'] ) ? $lawn_care_instance['read_more_text'] : '';
		$lawn_care_upload_image = isset( $lawn_care_instance['upload_image'] ) ? $lawn_care_instance['upload_image'] : '';
	?>
		<p>
        <label for="<?php echo esc_attr($this->get_field_id('title')); ?>"><?php esc_html_e('Title:','lawn-care'); ?></label>
        <input class="widefat" id="<?php echo esc_attr($this->get_field_id('title')); ?>" name="<?php echo esc_attr($this->get_field_name('title')); ?>" type="text" value="<?php echo esc_attr($lawn_care_title); ?>">
    	</p>
    	<p>
        <label for="<?php echo esc_attr($this->get_field_id('author')); ?>"><?php esc_html_e('Author Name:','lawn-care'); ?></label>
        <input class="widefat" id="<?php echo esc_attr($this->get_field_id('author')); ?>" name="<?php echo esc_attr($this->get_field_name('author')); ?>" type="text" value="<?php echo esc_attr($lawn_care_author); ?>">
    	</p>
    	<p>
        <label for="<?php echo esc_attr($this->get_field_id('designation')); ?>"><?php esc_html_e('Designation:','lawn-care'); ?></label>
        <input class="widefat" id="<?php echo esc_attr($this->get_field_id('designation')); ?>" name="<?php echo esc_attr($this->get_field_name('designation')); ?>" type="text" value="<?php echo esc_attr($lawn_care_designation); ?>">
    	</p>
    	<p>
        <label for="<?php echo esc_attr($this->get_field_id('description')); ?>"><?php esc_html_e('Description:','lawn-care'); ?></label>
        <input class="widefat" id="<?php echo esc_attr($this->get_field_id('description')); ?>" name="<?php echo esc_attr($this->get_field_name('description')); ?>" type="text" value="<?php echo esc_attr($lawn_care_description); ?>">
    	</p>
    	<p>
		<label for="<?php echo esc_attr($this->get_field_id('read_more_text')); ?>"><?php esc_html_e('Button Text:','lawn-care'); ?></label>
		<input class="widefat" id="<?php echo esc_attr($this->get_field_id('read_more_text')); ?>" name="<?php echo esc_attr($this->get_field_name('read_more_text')); ?>" type="text" value="<?php echo esc_attr($lawn_care_read_more_text); ?>">
		</p>
		<p>
		<label for="<?php echo esc_attr($this->get_field_id('read_more_url')); ?>"><?php esc_html_e('Button Url:','lawn-care'); ?></label>
		<input class="widefat" id="<?php echo esc_attr($this->get_field_id('read_more_url')); ?>" name="<?php echo esc_attr($this->get_field_name('read_more_url')); ?>" type="text" value="<?php echo esc_attr($lawn_care_read_more_url); ?>">
		</p>
		<p>
		<label for="<?php echo esc_attr($this->get_field_id( 'upload_image' )); ?>"><?php esc_html_e( 'Image Url:','lawn-care'); ?></label>
		<?php
			if ( $lawn_care_upload_image != '' ) :
			echo '<img class="custom_media_image" src="' . esc_url($lawn_care_upload_image) . '" style="margin:10px 0;padding:0;max-width:100%;float:left;display:inline-block" /><br />';
			endif;
		?>
		<input class="widefat" id="<?php echo esc_attr( $this->get_field_id( 'upload_image' ) ); ?>" name="<?php echo esc_attr($this->get_field_name( 'upload_image' )); ?>" type="text" value="<?php echo esc_url( $lawn_care_upload_image ); ?>" />
	   	</p>
		<?php 
	}
	
	// Updating widget replacing old instances with new
	public function update( $lawn_care_new_instance, $lawn_care_old_instance ) {
		$lawn_care_instance = array();	
		$lawn_care_instance['title'] = (!empty($lawn_care_new_instance['title']) ) ? strip_tags($lawn_care_new_instance['title']) : '';
		$lawn_care_instance['author'] = ( ! empty( $lawn_care_new_instance['author'] ) ) ? strip_tags($lawn_care_new_instance['author']) : '';
		$lawn_care_instance['designation'] = ( ! empty( $lawn_care_new_instance['designation'] ) ) ? strip_tags($lawn_care_new_instance['designation']) : '';
		$lawn_care_instance['description'] = (!empty($lawn_care_new_instance['description']) ) ? strip_tags($lawn_care_new_instance['description']) : '';
        $lawn_care_instance['read_more_text'] = (!empty($lawn_care_new_instance['read_more_text']) ) ? strip_tags($lawn_care_new_instance['read_more_text']) : '';
        $lawn_care_instance['read_more_url'] = (!empty($lawn_care_new_instance['read_more_url']) ) ? esc_url_raw($lawn_care_new_instance['read_more_url']) : '';
        $lawn_care_instance['upload_image'] = ( ! empty( $lawn_care_new_instance['upload_image'] ) ) ? strip_tags($lawn_care_new_instance['upload_image']) : '';

		return $lawn_care_instance;
	}
}
// Register and load the widget
function lawn_care_about_custom_load_widget() {
	register_widget( 'Lawn_Care_About_Widget' );
}
add_action( 'widgets_init', 'lawn_care_about_custom_load_widget' );