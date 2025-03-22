<?php
/**
 * Custom Social Widget
 */

class Lawn_Care_Social_Widget extends WP_Widget {
	
	function __construct() {
		parent::__construct(
			'Lawn_Care_Social_Widget',
			__('VW Social Icon', 'lawn-care'),
			array( 'description' => __( 'Widget for Social icons section', 'lawn-care' ), ) 
		);
	}

	public function widget( $lawn_care_args, $lawn_care_instance ) { ?>
		<div class="widget">
			<?php
			$lawn_care_title = isset( $lawn_care_instance['title'] ) ? $lawn_care_instance['title'] : '';
			$lawn_care_facebook = isset( $lawn_care_instance['facebook'] ) ? $lawn_care_instance['facebook'] : '';
			$lawn_care_twitter = isset( $lawn_care_instance['twitter'] ) ? $lawn_care_instance['twitter'] : '';
			$lawn_care_instagram = isset( $lawn_care_instance['instagram'] ) ? $lawn_care_instance['instagram'] : '';
			$lawn_care_youtube = isset( $lawn_care_instance['youtube'] ) ? $lawn_care_instance['youtube'] : '';
			$lawn_care_dribbal = isset( $lawn_care_instance['dribbal'] ) ? $lawn_care_instance['dribbal'] : '';
			$lawn_care_linkedin = isset( $lawn_care_instance['linkedin'] ) ? $lawn_care_instance['linkedin'] : '';
			$lawn_care_pinterest = isset( $lawn_care_instance['pinterest'] ) ? $lawn_care_instance['pinterest'] : '';
			$lawn_care_tumblr = isset( $lawn_care_instance['tumblr'] ) ? $lawn_care_instance['tumblr'] : '';
			

	        echo '<div class="custom-social-icons">';

	        if(!empty($lawn_care_title) ){ ?><h3 class="custom_title"><?php echo esc_html($lawn_care_title); ?></h3><?php } ?>
	        <?php if(!empty($lawn_care_facebook) ){ ?><p class="mb-0"><a class="custom_facebook fff" target= "_blank" href="<?php echo esc_url($lawn_care_facebook); ?>"><i class="fab fa-facebook-f"></i><span class="screen-reader-text"><?php esc_html_e( 'Facebook','lawn-care' );?></span></a></p><?php } ?>

	        <?php if(!empty($lawn_care_twitter) ){ ?><p class="mb-0"><a class="custom_twitter" target= "_blank" href="<?php echo esc_url($lawn_care_twitter); ?>"><i class="fa-brands fa-x-twitter"></i><span class="screen-reader-text"><?php esc_html_e( 'Twitter','lawn-care' );?></span></a></p><?php } ?>
	        
	        <?php if(!empty($lawn_care_instagram) ){ ?><p class="mb-0"><a class="custom_instagram" target= "_blank" href="<?php echo esc_url($lawn_care_instagram); ?>"><i class="fab fa-instagram"></i><span class="screen-reader-text"><?php esc_html_e( 'Instagram','lawn-care' );?></span></a></p><?php } ?>

	        <?php if(!empty($lawn_care_youtube) ){ ?><p class="mb-0"><a class="custom_youtube" target= "_blank" href="<?php echo esc_url($lawn_care_youtube); ?>"><i class="fab fa-youtube"></i><span class="screen-reader-text"><?php esc_html_e( 'Youtube','lawn-care' );?></span></a></p><?php } ?>

	        <?php if(!empty($lawn_care_dribbal) ){ ?><p class="mb-0"><a class="custom_dribbal" target= "_blank" href="<?php echo esc_url($lawn_care_dribbal); ?>"><i class="fa-solid fa-basketball"></i><span class="screen-reader-text"><?php esc_html_e( 'Dribbal','lawn-care' );?></span></a></p><?php } ?>

	        <?php if(!empty($lawn_care_linkedin) ){ ?><p class="mb-0"><a class="custom_linkedin" target= "_blank" href="<?php echo esc_url($lawn_care_linkedin); ?>"><i class="fab fa-linkedin-in"></i><span class="screen-reader-text"><?php esc_html_e( 'Linkedin','lawn-care' );?></span></a></p><?php } ?>
	        

	        <?php if(!empty($lawn_care_pinterest) ){ ?><p class="mb-0"><a class="custom_pinterest" target= "_blank" href="<?php echo esc_url($lawn_care_pinterest); ?>"><i class="fab fa-pinterest-p"></i><span class="screen-reader-text"><?php esc_html_e( 'Pinterest','lawn-care' );?></span></a></p><?php } ?>
	        

	        <?php if(!empty($lawn_care_tumblr) ){ ?><p class="mb-0"><a class="custom_tumblr" target= "_blank" href="<?php echo esc_url($lawn_care_tumblr); ?>"><i class="fab fa-tumblr"></i><span class="screen-reader-text"><?php esc_html_e( 'Tumblr','lawn-care' );?></span></a></p><?php } ?>

	        <?php echo '</div>';
			?>
		</div>
		<?php
	}
	
	// Widget Backend 
	public function form( $lawn_care_instance ) {

		$lawn_care_title= ''; $lawn_care_facebook = ''; $lawn_care_twitter = ''; $lawn_care_linkedin = '';  $lawn_care_pinterest = '';$lawn_care_tumblr = ''; $lawn_care_instagram = ''; $lawn_care_youtube = ''; 

		$lawn_care_title = isset( $lawn_care_instance['title'] ) ? $lawn_care_instance['title'] : '';
		$lawn_care_facebook = isset( $lawn_care_instance['facebook'] ) ? $lawn_care_instance['facebook'] : '';
		$lawn_care_instagram = isset( $lawn_care_instance['instagram'] ) ? $lawn_care_instance['instagram'] : '';
		$lawn_care_twitter = isset( $lawn_care_instance['twitter'] ) ? $lawn_care_instance['twitter'] : '';
		$lawn_care_youtube = isset( $lawn_care_instance['youtube'] ) ? $lawn_care_instance['youtube'] : '';
		$lawn_care_dribbal = isset( $lawn_care_instance['dribbal'] ) ? $lawn_care_instance['dribbal'] : '';
		$lawn_care_linkedin = isset( $lawn_care_instance['linkedin'] ) ? $lawn_care_instance['linkedin'] : '';
		$lawn_care_pinterest = isset( $lawn_care_instance['pinterest'] ) ? $lawn_care_instance['pinterest'] : '';
		$lawn_care_tumblr = isset( $lawn_care_instance['tumblr'] ) ? $lawn_care_instance['tumblr'] : '';
		
		?>
		<p>
        <label for="<?php echo esc_attr($this->get_field_id('title')); ?>"><?php esc_html_e('Title:','lawn-care'); ?></label>
        <input class="widefat" id="<?php echo esc_attr($this->get_field_id('title')); ?>" name="<?php echo esc_attr($this->get_field_name('title')); ?>" type="text" value="<?php echo esc_attr($lawn_care_title); ?>">
    	</p>
		<p>
		<label for="<?php echo esc_attr($this->get_field_id('facebook')); ?>"><?php esc_html_e('Facebook:','lawn-care'); ?></label>
		<input class="widefat" id="<?php echo esc_attr($this->get_field_id('facebook')); ?>" name="<?php echo esc_attr($this->get_field_name('facebook')); ?>" type="text" value="<?php echo esc_attr($lawn_care_facebook); ?>">
		</p>
		<p>
		<label for="<?php echo esc_attr($this->get_field_id('twitter')); ?>"><?php esc_html_e('Twitter:','lawn-care'); ?></label>
		<input class="widefat" id="<?php echo esc_attr($this->get_field_id('twitter')); ?>" name="<?php echo esc_attr($this->get_field_name('twitter')); ?>" type="text" value="<?php echo esc_attr($lawn_care_twitter); ?>">
		</p>
		<p>
		<label for="<?php echo esc_attr($this->get_field_id('instagram')); ?>"><?php esc_html_e('Instagram:','lawn-care'); ?></label>
		<input class="widefat" id="<?php echo esc_attr($this->get_field_id('instagram')); ?>" name="<?php echo esc_attr($this->get_field_name('instagram')); ?>" type="text" value="<?php echo esc_attr($lawn_care_instagram); ?>">
		</p>
		<p>
		<label for="<?php echo esc_attr($this->get_field_id('youtube')); ?>"><?php esc_html_e('Youtube:','lawn-care'); ?></label>
		<input class="widefat" id="<?php echo esc_attr($this->get_field_id('youtube')); ?>" name="<?php echo esc_attr($this->get_field_name('youtube')); ?>" type="text" value="<?php echo esc_attr($lawn_care_youtube); ?>">
		</p>
		<label for="<?php echo esc_attr($this->get_field_id('dribbal')); ?>"><?php esc_html_e('Dribbal:','lawn-care'); ?></label>
		<input class="widefat" id="<?php echo esc_attr($this->get_field_id('dribbal')); ?>" name="<?php echo esc_attr($this->get_field_name('dribbal')); ?>" type="text" value="<?php echo esc_attr($lawn_care_dribbal); ?>">
		</p>

		<label for="<?php echo esc_attr($this->get_field_id('linkedin')); ?>"><?php esc_html_e('Linkedin:','lawn-care'); ?></label>
		<input class="widefat" id="<?php echo esc_attr($this->get_field_id('linkedin')); ?>" name="<?php echo esc_attr($this->get_field_name('linkedin')); ?>" type="text" value="<?php echo esc_attr($lawn_care_linkedin); ?>">
		</p>
		<p>
		
		<label for="<?php echo esc_attr($this->get_field_id('pinterest')); ?>"><?php esc_html_e('Pinterest:','lawn-care'); ?></label>
		<input class="widefat" id="<?php echo esc_attr($this->get_field_id('pinterest')); ?>" name="<?php echo esc_attr($this->get_field_name('pinterest')); ?>" type="text" value="<?php echo esc_attr($lawn_care_pinterest); ?>">
		</p>
		<p>
		<label for="<?php echo esc_attr($this->get_field_id('tumblr')); ?>"><?php esc_html_e('Tumblr:','lawn-care'); ?></label>
		<input class="widefat" id="<?php echo esc_attr($this->get_field_id('tumblr')); ?>" name="<?php echo esc_attr($this->get_field_name('tumblr')); ?>" type="text" value="<?php echo esc_attr($lawn_care_tumblr); ?>">
		</p>
		<p>
		
		<?php 
	}
	
	public function update( $lawn_care_new_instance, $lawn_care_old_instance ) {
		$lawn_care_instance = array();
		$lawn_care_instance['title'] = (!empty($lawn_care_new_instance['title']) ) ? strip_tags($lawn_care_new_instance['title']) : '';	
        $lawn_care_instance['facebook'] = (!empty($lawn_care_new_instance['facebook']) ) ? esc_url_raw($lawn_care_new_instance['facebook']) : '';
        $lawn_care_instance['twitter'] = (!empty($lawn_care_new_instance['twitter']) ) ? esc_url_raw($lawn_care_new_instance['twitter']) : '';
        $lawn_care_instance['instagram'] = (!empty($lawn_care_new_instance['instagram']) ) ? esc_url_raw($lawn_care_new_instance['instagram']) : '';
        $lawn_care_instance['youtube'] = (!empty($lawn_care_new_instance['youtube']) ) ? esc_url_raw($lawn_care_new_instance['youtube']) : '';
        $lawn_care_instance['dribbal'] = (!empty($lawn_care_new_instance['dribbal']) ) ? esc_url_raw($lawn_care_new_instance['dribbal']) : '';
        $lawn_care_instance['linkedin'] = (!empty($lawn_care_new_instance['linkedin']) ) ? esc_url_raw($lawn_care_new_instance['linkedin']) : '';
        $lawn_care_instance['pinterest'] = (!empty($lawn_care_new_instance['pinterest']) ) ? esc_url_raw($lawn_care_new_instance['pinterest']) : '';
        $lawn_care_instance['tumblr'] = (!empty($lawn_care_new_instance['tumblr']) ) ? esc_url_raw($lawn_care_new_instance['tumblr']) : '';
     	
     	
		return $lawn_care_instance;
	}
}

function lawn_care_custom_load_widget() {
	register_widget( 'Lawn_Care_Social_Widget' );
}
add_action( 'widgets_init', 'lawn_care_custom_load_widget' );