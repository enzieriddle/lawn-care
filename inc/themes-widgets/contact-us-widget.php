<?php
/**
 * Custom Contact us Widget
 */

class Lawn_Care_Contact_Widget extends WP_Widget {
	function __construct() {
		parent::__construct(
			'Lawn_Care_Contact_Widget', 
			__('VW Contact us', 'lawn-care'),
			array( 'description' => __( 'Widget for contact us section in sidebar', 'lawn-care' ), ) 
		);
	}
	
	public function widget( $lawn_care_args, $lawn_care_instance ) {
		?>
		<aside class="widget">
			<?php
			$lawn_care_title = isset( $lawn_care_instance['title'] ) ? $lawn_care_instance['title'] : '';
			$lawn_care_phone = isset( $lawn_care_instance['phone'] ) ? $lawn_care_instance['phone'] : '';
			$lawn_care_email = isset( $lawn_care_instance['email'] ) ? $lawn_care_instance['email'] : '';
			$lawn_care_address = isset( $lawn_care_instance['address'] ) ? $lawn_care_instance['address'] : '';
			$lawn_care_timing = isset( $lawn_care_instance['timing'] ) ? $lawn_care_instance['timing'] : '';
			$lawn_care_longitude = isset( $lawn_care_instance['longitude'] ) ? $lawn_care_instance['longitude'] : '';
			$lawn_care_latitude = isset( $lawn_care_instance['latitude'] ) ? $lawn_care_instance['latitude'] : '';
			$lawn_care_contact_form = isset( $lawn_care_instance['contact_form'] ) ? $lawn_care_instance['contact_form'] : '';

	        echo '<div class="custom-contact-us">';
	        if(!empty($lawn_care_title) ){ ?><h3 class="custom_title1"><?php echo esc_html($lawn_care_title); ?></h3><?php } ?>
		        <?php if(!empty($lawn_care_phone) ){ ?>
		        	<div class="row contact-detail">
		        		<div class="col-lg-2 col-md-2 align-self-center">
		        			<span class="custom_details"><i class="fa-solid fa-phone-volume me-2"></i></span>
		        		</div>
		        		<div class="col-lg-10 col-md-10 align-self-center">
		        			<span class="contact-title"><?php echo esc_html('Contact', 'lawn-care'); ?></span><span class="custom_desc"><?php echo esc_html($lawn_care_phone); ?></span>
		        		</div>		        		
		        	</div>
		        <?php } ?>
		        <?php if(!empty($lawn_care_email) ){ ?>
		        	<div class="row contact-detail">
		        		<div class="col-lg-2 col-md-2 align-self-center">
		        			<span class="custom_details"><i class="fa-regular fa-envelope me-2"></i></span>
		        		</div>
		        		<div class="col-lg-10 col-md-10 align-self-center">
		        			<span class="contact-title"><?php echo esc_html('Mail Address', 'lawn-care'); ?></span><span class="custom_desc"><?php echo esc_html($lawn_care_email); ?></span>
		        		</div>
		        	</div>
		        <?php } ?>
		        <?php if(!empty($lawn_care_address) ){ ?>
		        	<div class="row contact-detail">
		        		<div class="col-lg-2 col-md-2 align-self-center">
		        			<span class="custom_details"><i class="fa-solid fa-location-dot me-2"></i></span>
		        		</div>
			        	<div class="col-lg-10 col-md-10 align-self-center">
			        		<span class="contact-title"><?php echo esc_html('Location', 'lawn-care'); ?></span><span class="custom_desc"><?php echo esc_html($lawn_care_address); ?></span>
			        	</div>
			        </div>
			    <?php } ?> 
		        <?php if(!empty($lawn_care_timing) ){ ?><p><span class="custom_details"><?php esc_html_e('Opening Time: ','lawn-care'); ?></span><span class="custom_desc"><?php echo esc_html($lawn_care_timing); ?></span></p><?php } ?>
		        <?php if(!empty($lawn_care_longitude) ){ ?><embed width="100%" height="200px" frameborder="0" scrolling="no" marginheight="0" marginwidth="0" src="https://maps.google.com/maps?q=<?php echo esc_html($lawn_care_longitude); ?>,<?php echo esc_html($lawn_care_latitude); ?>&hl=es;z=14&amp;output=embed"></embed><?php } ?>
		        <?php if(!empty($lawn_care_contact_form) ){ ?><?php echo do_shortcode($lawn_care_contact_form); ?><?php } ?>
	        <?php echo '</div>';
			?>
		</aside>
		<?php
	}
	
	// Widget Backend 
	public function form( $lawn_care_instance ) {

		$lawn_care_title= ''; $lawn_care_phone= ''; $lawn_care_email = ''; $lawn_care_address = ''; $lawn_care_timing = ''; $lawn_care_longitude = ''; $lawn_care_latitude = ''; $lawn_care_contact_form = ''; 
		
		$lawn_care_title = isset( $lawn_care_instance['title'] ) ? $lawn_care_instance['title'] : '';
		$lawn_care_phone = isset( $lawn_care_instance['phone'] ) ? $lawn_care_instance['phone'] : '';
		$lawn_care_email = isset( $lawn_care_instance['email'] ) ? $lawn_care_instance['email'] : '';
		$lawn_care_address = isset( $lawn_care_instance['address'] ) ? $lawn_care_instance['address'] : '';
		$lawn_care_timing = isset( $lawn_care_instance['timing'] ) ? $lawn_care_instance['timing'] : '';
		$lawn_care_longitude = isset( $lawn_care_instance['longitude'] ) ? $lawn_care_instance['longitude'] : '';
		$lawn_care_latitude = isset( $lawn_care_instance['latitude'] ) ? $lawn_care_instance['latitude'] : '';
		$lawn_care_contact_form = isset( $lawn_care_instance['contact_form'] ) ? $lawn_care_instance['contact_form'] : '';
		
		?>

		<p>
        	<label for="<?php echo esc_attr($this->get_field_id('title')); ?>"><?php esc_html_e('Title:','lawn-care'); ?></label>
        	<input class="widefat" id="<?php echo esc_attr($this->get_field_id('title')); ?>" name="<?php echo esc_attr($this->get_field_name('title')); ?>" type="text" value="<?php echo esc_attr($lawn_care_title); ?>">
    	</p>
    	<p>
        	<label for="<?php echo esc_attr($this->get_field_id('phone')); ?>"><?php esc_html_e('Phone Number:','lawn-care'); ?></label>
        	<input class="widefat" id="<?php echo esc_attr($this->get_field_id('phone')); ?>" name="<?php echo esc_attr($this->get_field_name('phone')); ?>" type="text" value="<?php echo esc_attr($lawn_care_phone); ?>">
    	</p>
    	<p>
        	<label for="<?php echo esc_attr($this->get_field_id('email')); ?>"><?php esc_html_e('Email id:','lawn-care'); ?></label>
        	<input class="widefat" id="<?php echo esc_attr($this->get_field_id('email')); ?>" name="<?php echo esc_attr($this->get_field_name('email')); ?>" type="text" value="<?php echo esc_attr($lawn_care_email); ?>">
    	</p>
    	<p>
        	<label for="<?php echo esc_attr($this->get_field_id('address')); ?>"><?php esc_html_e('Address:','lawn-care'); ?></label>
        	<input class="widefat" id="<?php echo esc_attr($this->get_field_id('address')); ?>" name="<?php echo esc_attr($this->get_field_name('address')); ?>" type="text" value="<?php echo esc_attr($lawn_care_address); ?>">
    	</p>
    	<p>
        	<label for="<?php echo esc_attr($this->get_field_id('timing')); ?>"><?php esc_html_e('Opening Time:','lawn-care'); ?></label>
        	<input class="widefat" id="<?php echo esc_attr($this->get_field_id('timing')); ?>" name="<?php echo esc_attr($this->get_field_name('timing')); ?>" type="text" value="<?php echo esc_attr($lawn_care_timing); ?>">
    	</p>
    	<p>
        	<label for="<?php echo esc_attr($this->get_field_id('longitude')); ?>"><?php esc_html_e('Longitude:','lawn-care'); ?></label>
        	<input class="widefat" id="<?php echo esc_attr($this->get_field_id('longitude')); ?>" name="<?php echo esc_attr($this->get_field_name('longitude')); ?>" type="text" value="<?php echo esc_attr($lawn_care_longitude); ?>">
    	</p>
    	<p>
        	<label for="<?php echo esc_attr($this->get_field_id('latitude')); ?>"><?php esc_html_e('Latitude:','lawn-care'); ?></label>
        	<input class="widefat" id="<?php echo esc_attr($this->get_field_id('latitude')); ?>" name="<?php echo esc_attr($this->get_field_name('latitude')); ?>" type="text" value="<?php echo esc_attr($lawn_care_latitude); ?>">
    	</p>
    	<p>
        	<label for="<?php echo esc_attr($this->get_field_id('contact_form')); ?>"><?php esc_html_e('Contact Form Shortcode:','lawn-care'); ?></label>
        	<input class="widefat" id="<?php echo esc_attr($this->get_field_id('contact_form')); ?>" name="<?php echo esc_attr($this->get_field_name('contact_form')); ?>" type="text" value="<?php echo esc_attr($lawn_care_contact_form); ?>">
    	</p>
		
		<?php 
	}
	
	// Updating widget replacing old instances with new
	public function update( $lawn_care_new_instance, $lawn_care_old_instance ) {
		$lawn_care_instance = array();	
		$lawn_care_instance['title'] = (!empty($lawn_care_new_instance['title']) ) ? strip_tags($lawn_care_new_instance['title']) : '';
		$lawn_care_instance['phone'] = (!empty($lawn_care_new_instance['phone']) ) ? lawn_care_sanitize_phone_number($lawn_care_new_instance['phone']) : '';
		$lawn_care_instance['email'] = (!empty($lawn_care_new_instance['email']) ) ? sanitize_email($lawn_care_new_instance['email']) : '';
		$lawn_care_instance['address'] = (!empty($lawn_care_new_instance['address']) ) ? strip_tags($lawn_care_new_instance['address']) : '';
		$lawn_care_instance['timing'] = (!empty($lawn_care_new_instance['timing']) ) ? strip_tags($lawn_care_new_instance['timing']) : '';
		$lawn_care_instance['longitude'] = (!empty($lawn_care_new_instance['longitude']) ) ? strip_tags($lawn_care_new_instance['longitude']) : '';
		$lawn_care_instance['latitude'] = (!empty($lawn_care_new_instance['latitude']) ) ? strip_tags($lawn_care_new_instance['latitude']) : '';
		$lawn_care_instance['contact_form'] = (!empty($lawn_care_new_instance['contact_form']) ) ? strip_tags($lawn_care_new_instance['contact_form']) : '';
        
		return $lawn_care_instance;
	}
}
// Register and load the widget
function lawn_care_contact_custom_load_widget() {
	register_widget( 'Lawn_Care_Contact_Widget' );
}
add_action( 'widgets_init', 'lawn_care_contact_custom_load_widget' );