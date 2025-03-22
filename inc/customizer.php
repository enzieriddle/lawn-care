<?php
/**
 * Lawn Care   Theme Customizer
 *
 * @package Lawn Care  
 */

/**
 * Add postMessage support for site title and description for the Theme Customizer.
 *
 * @param WP_Customize_Manager $wp_customize Theme Customizer object.
 */
function lawn_care_custom_controls() {
	load_template( trailingslashit( get_template_directory() ) . '/inc/custom-controls.php' );
}
add_action( 'customize_register', 'lawn_care_custom_controls' );

function lawn_care_customize_register( $wp_customize ) {

	$wp_customize->get_setting( 'blogname' )->transport = 'postMessage';
	$wp_customize->get_setting( 'blogdescription' )->transport = 'postMessage';

	load_template( trailingslashit( get_template_directory() ) . '/inc/icon-picker.php' );

	//Selective Refresh
	$wp_customize->selective_refresh->add_partial( 'blogname', array(
		'selector' => '.logo .site-title a',
	 	'render_callback' => 'lawn_care_Customize_partial_blogname',
	));

	$wp_customize->selective_refresh->add_partial( 'blogdescription', array(
		'selector' => 'p.site-description',
		'render_callback' => 'lawn_care_Customize_partial_blogdescription',
	));

	// add home page setting pannel
	$wp_customize->add_panel( 'lawn_care_panel_id', array(
		'capability' => 'edit_theme_options',
		'theme_supports' => '',
		'title' => esc_html__( 'Homepage Settings', 'lawn-care' ),
		'priority' => 10,
	));

	//Menus Settings
	$wp_customize->add_section( 'lawn_care_menu_section' , array(
    	'title' => __( 'Menus Settings', 'lawn-care' ),
		'panel' => 'lawn_care_panel_id'
	) );

	$wp_customize->add_setting('lawn_care_navigation_menu_font_size',array(
		'default'=> '',
		'sanitize_callback'	=> 'sanitize_text_field'
	));
	$wp_customize->add_control('lawn_care_navigation_menu_font_size',array(
		'label'	=> __('Menus Font Size','lawn-care'),
		'description'	=> __('Enter a value in pixels. Example:20px','lawn-care'),
		'input_attrs' => array(
            'placeholder' => __( '10px', 'lawn-care' ),
        ),
		'section'=> 'lawn_care_menu_section',
		'type'=> 'text'
	));

	$wp_customize->add_setting('lawn_care_navigation_menu_font_weight',array(
        'default' => 600,
        'transport' => 'refresh',
        'sanitize_callback' => 'lawn_care_sanitize_choices'
	));
	$wp_customize->add_control('lawn_care_navigation_menu_font_weight',array(
        'type' => 'select',
        'label' => __('Menus Font Weight','lawn-care'),
        'section' => 'lawn_care_menu_section',
        'choices' => array(
        	'100' => __('100','lawn-care'),
            '200' => __('200','lawn-care'),
            '300' => __('300','lawn-care'),
            '400' => __('400','lawn-care'),
            '500' => __('500','lawn-care'),
            '600' => __('600','lawn-care'),
            '700' => __('700','lawn-care'),
            '800' => __('800','lawn-care'),
            '900' => __('900','lawn-care'),
        ),
	) );

	// text trasform
	$wp_customize->add_setting('lawn_care_menu_text_transform',array(
		'default'=> 'Capitalize',
		'sanitize_callback'	=> 'lawn_care_sanitize_choices'
	));
	$wp_customize->add_control('lawn_care_menu_text_transform',array(
		'type' => 'radio',
		'label'	=> __('Menus Text Transform','lawn-care'),
		'choices' => array(
            'Uppercase' => __('Uppercase','lawn-care'),
            'Capitalize' => __('Capitalize','lawn-care'),
            'Lowercase' => __('Lowercase','lawn-care'),
        ),
		'section'=> 'lawn_care_menu_section',
	));

	$wp_customize->add_setting('lawn_care_menus_item_style',array(
        'default' => '',
        'transport' => 'refresh',
        'sanitize_callback' => 'lawn_care_sanitize_choices'
	));
	$wp_customize->add_control('lawn_care_menus_item_style',array(
        'type' => 'select',
        'section' => 'lawn_care_menu_section',
		'label' => __('Menu Item Hover Style','lawn-care'),
		'choices' => array(
            'None' => __('None','lawn-care'),
            'Zoom In' => __('Zoom In','lawn-care'),
        ),
	) );

	$wp_customize->add_setting('lawn_care_header_menus_color', array(
		'default'           => '',
		'sanitize_callback' => 'sanitize_hex_color',
	));
	$wp_customize->add_control(new WP_Customize_Color_Control($wp_customize, 'lawn_care_header_menus_color', array(
		'label'    => __('Menus Color', 'lawn-care'),
		'section'  => 'lawn_care_menu_section',
	)));

	$wp_customize->add_setting('lawn_care_header_menus_hover_color', array(
		'default'           => '',
		'sanitize_callback' => 'sanitize_hex_color',
	));
	$wp_customize->add_control(new WP_Customize_Color_Control($wp_customize, 'lawn_care_header_menus_hover_color', array(
		'label'    => __('Menus Hover Color', 'lawn-care'),
		'section'  => 'lawn_care_menu_section',
	)));

	$wp_customize->add_setting('lawn_care_header_submenus_color', array(
		'default'           => '',
		'sanitize_callback' => 'sanitize_hex_color',
	));
	$wp_customize->add_control(new WP_Customize_Color_Control($wp_customize, 'lawn_care_header_submenus_color', array(
		'label'    => __('Sub Menus Color', 'lawn-care'),
		'section'  => 'lawn_care_menu_section',
	)));

	$wp_customize->add_setting('lawn_care_header_submenus_hover_color', array(
		'default'           => '',
		'sanitize_callback' => 'sanitize_hex_color',
	));
	$wp_customize->add_control(new WP_Customize_Color_Control($wp_customize, 'lawn_care_header_submenus_hover_color', array(
		'label'    => __('Sub Menus Hover Color', 'lawn-care'),
		'section'  => 'lawn_care_menu_section',
	)));

	// Top Bar
	$wp_customize->add_section( 'lawn_care_top_bar' , array(
    	'title' => esc_html__( 'Top Bar', 'lawn-care' ),
		'panel' => 'lawn_care_panel_id'
	) );

	$wp_customize->add_setting( 'lawn_care_hide_show_topbar',array(
		'default' => 1,
		'transport' => 'refresh',
		'sanitize_callback' => 'lawn_care_switch_sanitization'
	));
	$wp_customize->add_control( new Lawn_Care_Toggle_Switch_Custom_Control( $wp_customize, 'lawn_care_hide_show_topbar',array(
		'label' => esc_html__( 'Show / Hide Topbar','lawn-care' ),
		'section' => 'lawn_care_top_bar'
	)));

  	$wp_customize->add_setting('lawn_care_phone_number',array(
		'default'=> '',
		'sanitize_callback'	=> 'lawn_care_sanitize_phone_number'
	));
	$wp_customize->add_control('lawn_care_phone_number',array(
		'label'	=> __('Add Phone number','lawn-care'),
		'input_attrs' => array(
      'placeholder' => __( '(123) 456-7890', 'lawn-care' ),
    ),
		'section'=> 'lawn_care_top_bar',
		'type'=> 'text'
	));

	$wp_customize->add_setting('lawn_care_phone_icon',array(
		'default'	=> 'fa-solid fa-phone',
		'sanitize_callback'	=> 'sanitize_text_field'
	));
	$wp_customize->add_control(new Lawn_Care_Fontawesome_Icon_Chooser(
        $wp_customize,'lawn_care_phone_icon',array(
		'label'	=> __('Add Phone Icon','lawn-care'),
		'transport' => 'refresh',
		'section'	=> 'lawn_care_top_bar',
		'setting'	=> 'lawn_care_phone_icon',
		'type'		=> 'icon'
	)));

	$wp_customize->add_setting('lawn_care_email_address',array(
		'default'=> '',
		'sanitize_callback'	=> 'sanitize_email'
	));
	$wp_customize->add_control('lawn_care_email_address',array(
		'label'	=> __('Add Email Address','lawn-care'),
		'input_attrs' => array(
            'placeholder' => __( 'xyz123@example.com', 'lawn-care' ),
        ),
		'section'=> 'lawn_care_top_bar',
		'type'=> 'text'
	));

	$wp_customize->add_setting('lawn_care_email_address_icon',array(
		'default'	=> 'fa-solid fa-envelope-open-text',
		'sanitize_callback'	=> 'sanitize_text_field'
	));
	$wp_customize->add_control(new Lawn_Care_Fontawesome_Icon_Chooser(
        $wp_customize,'lawn_care_email_address_icon',array(
		'label'	=> __('Add Email Icon','lawn-care'),
		'transport' => 'refresh',
		'section'	=> 'lawn_care_top_bar',
		'setting'	=> 'lawn_care_email_address_icon',
		'type'		=> 'icon'
	)));

	$wp_customize->add_setting('lawn_care_social_icons',array(
		'default'=> '',
		'sanitize_callback'	=> 'sanitize_text_field'
	));
	$wp_customize->add_control('lawn_care_social_icons',array(
		'label' =>  __('Steps to setup social icons','lawn-care'),
		'description' => __('<p>1. Go to Dashboard >> Appearance >> Widgets</p>
			<p>2. Add Vw Social Icon Widget in Social Widget area.</p>
			<p>3. Add social icons url and save.</p>','lawn-care'),
		'section'=> 'lawn_care_top_bar',
		'type'=> 'hidden'
	));

	$wp_customize->add_setting('lawn_care_social_icon_btn',array(
		'default'=> '',
		'sanitize_callback'	=> 'sanitize_text_field'
	));
	$wp_customize->add_control('lawn_care_social_icon_btn',array(
		'description' => "<a target='_blank' href='". admin_url('widgets.php') ." '>Setup Topbar Social Icons</a>",
		'section'=> 'lawn_care_top_bar',
		'type'=> 'hidden'
	));

  $wp_customize->add_setting( 'lawn_care_search_hide_show',array(
    'default' => 1,
    'transport' => 'refresh',
    'sanitize_callback' => 'lawn_care_switch_sanitization'
  ));
  $wp_customize->add_control( new Lawn_Care_Toggle_Switch_Custom_Control( $wp_customize, 'lawn_care_search_hide_show',array(
    'label' => esc_html__( 'Show / Hide Search','lawn-care' ),
    'section' => 'lawn_care_top_bar'
  )));

	$wp_customize->add_setting('lawn_care_search_open_icon',array(
		'default'	=> 'fas fa-search',
		'sanitize_callback'	=> 'sanitize_text_field'
	));
	$wp_customize->add_control(new Lawn_Care_Fontawesome_Icon_Chooser($wp_customize,'lawn_care_search_open_icon',array(
		'label'	=> __('Search Button Icon','lawn-care'),
		'transport' => 'refresh',
		'section'	=> 'lawn_care_top_bar',
		'type'		=> 'icon'
	)));

	$wp_customize->add_setting('lawn_care_search_close_icon',array(
		'default'	=> 'fa fa-window-close',
		'sanitize_callback'	=> 'sanitize_text_field'
	));
	$wp_customize->add_control(new Lawn_Care_Fontawesome_Icon_Chooser($wp_customize,'lawn_care_search_close_icon',array(
		'label'	=> __('Search Button Icon','lawn-care'),
		'transport' => 'refresh',
		'section'	=> 'lawn_care_top_bar',
		'type'		=> 'icon'
	)));

	//Sticky Header
	$wp_customize->add_setting( 'lawn_care_sticky_header',array(
    'default' => 0,
    'transport' => 'refresh',
    'sanitize_callback' => 'lawn_care_switch_sanitization'
  ) );
  $wp_customize->add_control( new Lawn_Care_Toggle_Switch_Custom_Control( $wp_customize, 'lawn_care_sticky_header',array(
    'label' => esc_html__( 'Sticky Header','lawn-care' ),
    'section' => 'lawn_care_top_bar'
  )));

  $wp_customize->add_setting('lawn_care_sticky_header_padding',array(
		'default'=> '',
		'sanitize_callback'	=> 'sanitize_text_field'
	));
	$wp_customize->add_control('lawn_care_sticky_header_padding',array(
		'label'	=> __('Sticky Header Padding','lawn-care'),
		'description'	=> __('Enter a value in pixels. Example:20px','lawn-care'),
		'input_attrs' => array(
      'placeholder' => __( '10px', 'lawn-care' ),
    ),
		'section'=> 'lawn_care_top_bar',
		'type'=> 'text'
	));

	//Slider
	$wp_customize->add_section( 'lawn_care_slider_section' , array(
	  	'title'      => __( 'Slider Settings', 'lawn-care' ),
		'panel' => 'lawn_care_panel_id',
		'description' => __('For more options of Slider section </br> <a class="go-pro-btn" target="blank" href="https://www.vwthemes.com/products/lawn-care-wordpress-theme">GET PRO</a>','lawn-care'),
	) );

	$wp_customize->add_setting( 'lawn_care_hide_show_slider_section',array(
		'default' => 1,
		'transport' => 'refresh',
		'sanitize_callback' => 'lawn_care_switch_sanitization'
	));
	$wp_customize->add_control( new Lawn_Care_Toggle_Switch_Custom_Control( $wp_customize, 'lawn_care_hide_show_slider_section',array(
		'label' => esc_html__( 'Show / Hide Slider Section','lawn-care' ),
		'section' => 'lawn_care_slider_section'
	)));

	$wp_customize->add_setting('lawn_care_slide_number',array(
		'default'	=> '',
		'sanitize_callback'	=> 'lawn_care_sanitize_choices',
	));
	$wp_customize->add_control('lawn_care_slide_number',array(
		'label'	=> __('Number of slides to show','lawn-care'),
		'description' => __('Selct Max 3 number Of slide and refresh page','lawn-care'),
		'section'	=> 'lawn_care_slider_section',
		'type'		=> 'select',
		'choices'  => array(
			'1' => '1',
			'2' => '2',
			'3' => '3',
		),
	));

	$lawn_care_count =  get_theme_mod('lawn_care_slide_number');

	for($lawn_care_i=1; $lawn_care_i<=$lawn_care_count; $lawn_care_i++) {		

		$wp_customize->add_setting('lawn_care_slider_bg_img'.$lawn_care_i,array(
			'default'	=> '',
			'sanitize_callback'	=> 'esc_url_raw',
		));
		$wp_customize->add_control( new WP_Customize_Image_Control($wp_customize,'lawn_care_slider_bg_img'.$lawn_care_i,array(
		   'label' => __('Add Image','lawn-care'),
		   'section' => 'lawn_care_slider_section',
		   'description' => __('Image Size (1200 × 750px) and use transparent image.','lawn-care'),
		)));

	 	$wp_customize->add_setting('lawn_care_slider_small_title'.$lawn_care_i,array(
			'default'	=> '',
			'sanitize_callback'	=> 'sanitize_text_field'
		));
		$wp_customize->add_control('lawn_care_slider_small_title'.$lawn_care_i,array(
			'label'	=> __('Slider Small Title','lawn-care'),
			'section'	=> 'lawn_care_slider_section',
			'input_attrs' => array(
	        'placeholder' => __( 'Get the Right Grass with Us', 'lawn-care' ),
	    	),
			'type'	=> 'text'
		));

	 	$wp_customize->add_setting('lawn_care_slider_title'.$lawn_care_i,array(
			'default'	=> '',
			'sanitize_callback'	=> 'sanitize_text_field'
		));
		$wp_customize->add_control('lawn_care_slider_title'.$lawn_care_i,array(
			'label'	=> __('Slider Title','lawn-care'),
			'section'	=> 'lawn_care_slider_section',
			'input_attrs' => array(
	        'placeholder' => __( 'The Green Light to a Gorgeous Lawn', 'lawn-care' ),
	    	),
			'type'	=> 'text'
		));

	 	$wp_customize->add_setting('lawn_care_slider_text'.$lawn_care_i,array(
			'default'	=> '',
			'sanitize_callback'	=> 'sanitize_text_field'
		));
		$wp_customize->add_control('lawn_care_slider_text'.$lawn_care_i,array(
			'label'	=> __('Slider Content','lawn-care'),
			'section'	=> 'lawn_care_slider_section',
			'type'		=> 'text'
		));

		for($lawn_care_j=1; $lawn_care_j<=2; $lawn_care_j++) {

			$wp_customize->add_setting('lawn_care_slider_button_text'.$lawn_care_i .$lawn_care_j,array(
				'default' => '',
				'sanitize_callback' => 'sanitize_text_field'
			));
			$wp_customize->add_control('lawn_care_slider_button_text'.$lawn_care_i .$lawn_care_j,array(
				'label' => __('Add Button Text','lawn-care'),
				'input_attrs' => array(
		        	'placeholder' => __( 'Read More', 'lawn-care' ),
		      	),
				'section' => 'lawn_care_slider_section',
				'setting' => 'lawn_care_slider_button_text'.$lawn_care_i .$lawn_care_j,
				'type' => 'text'
			));

			$wp_customize->add_setting('lawn_care_slider_button_link'.$lawn_care_i .$lawn_care_j,array(
				'default'	=> '',
				'sanitize_callback'	=> 'esc_url_raw'
			));
			$wp_customize->add_control('lawn_care_slider_button_link'.$lawn_care_i .$lawn_care_j,array(
				'label'	=> __('Add Button Link','lawn-care'),
				'input_attrs' => array(
		        	'placeholder' => __( 'www.example-info.com', 'lawn-care' ),
		      	),
				'section'	=> 'lawn_care_slider_section',
				'setting'	=> 'lawn_care_slider_button_link'.$lawn_care_i .$lawn_care_j,
				'type'	=> 'url'
			));
		}
	}

	$wp_customize->add_setting( 'lawn_care_hide_show_about_sec',array(
		'default' => 1,
		'transport' => 'refresh',
		'sanitize_callback' => 'lawn_care_switch_sanitization'
	));
	$wp_customize->add_control( new Lawn_Care_Toggle_Switch_Custom_Control( $wp_customize, 'lawn_care_hide_show_about_sec',array(
		'label' => esc_html__( 'Show / Hide About Box','lawn-care' ),
		'section' => 'lawn_care_slider_section'
	)));

	for($lawn_care_k=1; $lawn_care_k<=2; $lawn_care_k++) {

	 	$wp_customize->add_setting('lawn_care_slider_about_title'.$lawn_care_k,array(
			'default'	=> '',
			'sanitize_callback'	=> 'sanitize_text_field'
		));
		$wp_customize->add_control('lawn_care_slider_about_title'.$lawn_care_k,array(
			'label'	=> __('Slider Content','lawn-care'),
			'section'	=> 'lawn_care_slider_section',
			'input_attrs' => array(
	        'placeholder' => __( 'Residental Area', 'lawn-care' ),
	    	),
			'type'		=> 'text'
		));

	 	$wp_customize->add_setting('lawn_care_slider_about_text'.$lawn_care_k,array(
			'default'	=> '',
			'sanitize_callback'	=> 'sanitize_text_field'
		));
		$wp_customize->add_control('lawn_care_slider_about_text'.$lawn_care_k,array(
			'label'	=> __('Slider Content','lawn-care'),
			'section'	=> 'lawn_care_slider_section',
			'type'		=> 'text'
		));

		$wp_customize->add_setting('lawn_care_slider_about_icon'.$lawn_care_k,array(
			'default'	=> 'fa-solid fa-house',
			'sanitize_callback'	=> 'sanitize_text_field'
		));
		$wp_customize->add_control(new Lawn_Care_Fontawesome_Icon_Chooser(
	        $wp_customize,'lawn_care_slider_about_icon'.$lawn_care_k,array(
			'label'	=> __('Add Icon','lawn-care'),
			'transport' => 'refresh',
			'section'	=> 'lawn_care_slider_section',
			'setting'	=> 'lawn_care_slider_about_icon'.$lawn_care_k,
			'type'		=> 'icon'
		)));
	}

	$wp_customize->add_setting('lawn_care_slider_previous_icon',array(
		'default'	=> 'fa-solid fa-angle-left',
		'sanitize_callback'	=> 'sanitize_text_field'
	));
	$wp_customize->add_control(new Lawn_Care_Fontawesome_Icon_Chooser(
        $wp_customize,'lawn_care_slider_previous_icon',array(
		'label'	=> __('Slider Previous Icon','lawn-care'),
		'transport' => 'refresh',
		'section'	=> 'lawn_care_slider_section',
		'type'		=> 'icon'
	)));

	$wp_customize->add_setting('lawn_care_slider_next_icon',array(
		'default'	=> 'fa-solid fa-angle-right',
		'sanitize_callback'	=> 'sanitize_text_field'
	));
	$wp_customize->add_control(new Lawn_Care_Fontawesome_Icon_Chooser(
        $wp_customize,'lawn_care_slider_next_icon',array(
		'label'	=> __('Slider Next Icon','lawn-care'),
		'transport' => 'refresh',
		'section'	=> 'lawn_care_slider_section',
		'type'		=> 'icon'
	)));


	//Our Expertise Section
	$wp_customize->add_section('lawn_care_our_expertise', array(
		'title'       => __('Our Expertise Section', 'lawn-care'),
		'description' => __('<p class="premium-opt">Premium Theme Features</p>','lawn-care'),
		'priority'    => null,
		'panel'       => 'lawn_care_panel_id',
	));

	$wp_customize->add_setting('lawn_care_our_expertise_text',array(
		'default'=> '',
		'sanitize_callback'	=> 'sanitize_text_field'
	));
	$wp_customize->add_control('lawn_care_our_expertise_text',array(
		'description' => __('<p>1. More options for our expertise section.</p>
			<p>2. Unlimited images options.</p>
			<p>3. Color options for our expertise section.</p>','lawn-care'),
		'section'=> 'lawn_care_our_expertise',
		'type'=> 'hidden'
	));

	$wp_customize->add_setting('lawn_care_our_expertise_btn',array(
		'default'=> '',
		'sanitize_callback'	=> 'sanitize_text_field'
	));
	$wp_customize->add_control('lawn_care_our_expertise_btn',array(
		'description' => "<a class='go-pro' target='_blank' href=".esc_url(LAWN_CARE_BUY_NOW).">More Info</a>",
		'section'=> 'lawn_care_our_expertise',
		'type'=> 'hidden'
	));

	//About Us Section
	$wp_customize->add_section('lawn_care_about_us', array(
		'title'       => __('About Us Section', 'lawn-care'),
		'description' => __('<p class="premium-opt">Premium Theme Features</p>','lawn-care'),
		'priority'    => null,
		'panel'       => 'lawn_care_panel_id',
	));

	$wp_customize->add_setting('lawn_care_about_us_text',array(
		'default'=> '',
		'sanitize_callback'	=> 'sanitize_text_field'
	));
	$wp_customize->add_control('lawn_care_about_us_text',array(
		'description' => __('<p>1. More options for about us section.</p>
			<p>2. Unlimited images options.</p>
			<p>3. Color options for about us section.</p>','lawn-care'),
		'section'=> 'lawn_care_about_us',
		'type'=> 'hidden'
	));

	$wp_customize->add_setting('lawn_care_about_us_btn',array(
		'default'=> '',
		'sanitize_callback'	=> 'sanitize_text_field'
	));
	$wp_customize->add_control('lawn_care_about_us_btn',array(
		'description' => "<a class='go-pro' target='_blank' href=".esc_url(LAWN_CARE_BUY_NOW).">More Info</a>",
		'section'=> 'lawn_care_about_us',
		'type'=> 'hidden'
	));

	// Project Section
	$wp_customize->add_section('lawn_care_project_section',array(
		'title'	=> __('Project Section','lawn-care'),
		'panel' => 'lawn_care_panel_id',
		'description' => __('For more options of Project section </br> <a class="go-pro-btn" target="blank" href="https://www.vwthemes.com/products/lawn-care-wordpress-theme">GET PRO</a>','lawn-care'),
	));

	$wp_customize->add_setting( 'lawn_care_hide_show_project_section',array(
		'default' => 1,
		'transport' => 'refresh',
		'sanitize_callback' => 'lawn_care_switch_sanitization'
	));
	$wp_customize->add_control( new Lawn_Care_Toggle_Switch_Custom_Control( $wp_customize, 'lawn_care_hide_show_project_section',array(
		'label' => esc_html__( 'Show / Hide Project Section','lawn-care' ),
		'section' => 'lawn_care_project_section'
	)));

	$wp_customize->add_setting('lawn_care_special_text',array(
		'default'	=> '',
		'sanitize_callback'	=> 'sanitize_text_field'
	));
	$wp_customize->add_control('lawn_care_special_text',array(
		'label'	=> __('Project Text','lawn-care'),
		'section'	=> 'lawn_care_project_section',
		'type'		=> 'text',
		'input_attrs' => array(
      'placeholder' => __( 'Our Work', 'lawn-care' ),
      ),
	));

	$wp_customize->add_setting('lawn_care_special_heading',array(
		'default'	=> '',
		'sanitize_callback'	=> 'sanitize_text_field'
	));
	$wp_customize->add_control('lawn_care_special_heading',array(
		'label'	=> __('Project Title','lawn-care'),
		'section'	=> 'lawn_care_project_section',
		'type'		=> 'text',
		'input_attrs' => array(
      'placeholder' => __( 'OUR PROJECT', 'lawn-care' ),
      ),
	));

	//Working Process Section
	$wp_customize->add_section('lawn_care_working_process', array(
		'title'       => __('Working Process Section', 'lawn-care'),
		'description' => __('<p class="premium-opt">Premium Theme Features</p>','lawn-care'),
		'priority'    => null,
		'panel'       => 'lawn_care_panel_id',
	));

	$wp_customize->add_setting('lawn_care_working_process_text',array(
		'default'=> '',
		'sanitize_callback'	=> 'sanitize_text_field'
	));
	$wp_customize->add_control('lawn_care_working_process_text',array(
		'description' => __('<p>1. More options for working process section.</p>
			<p>2. Unlimited images options.</p>
			<p>3. Color options for working process section.</p>','lawn-care'),
		'section'=> 'lawn_care_working_process',
		'type'=> 'hidden'
	));

	$wp_customize->add_setting('lawn_care_working_process_btn',array(
		'default'=> '',
		'sanitize_callback'	=> 'sanitize_text_field'
	));
	$wp_customize->add_control('lawn_care_working_process_btn',array(
		'description' => "<a class='go-pro' target='_blank' href=".esc_url(LAWN_CARE_BUY_NOW).">More Info</a>",
		'section'=> 'lawn_care_working_process',
		'type'=> 'hidden'
	));

	//Our Services Section
	$wp_customize->add_section('lawn_care_our_services', array(
		'title'       => __('Our Services Section', 'lawn-care'),
		'description' => __('<p class="premium-opt">Premium Theme Features</p>','lawn-care'),
		'priority'    => null,
		'panel'       => 'lawn_care_panel_id',
	));

	$wp_customize->add_setting('lawn_care_our_services_text',array(
		'default'=> '',
		'sanitize_callback'	=> 'sanitize_text_field'
	));
	$wp_customize->add_control('lawn_care_our_services_text',array(
		'description' => __('<p>1. More options for our services section.</p>
			<p>2. Unlimited images options.</p>
			<p>3. Color options for our services section.</p>','lawn-care'),
		'section'=> 'lawn_care_our_services',
		'type'=> 'hidden'
	));

	$wp_customize->add_setting('lawn_care_our_services_btn',array(
		'default'=> '',
		'sanitize_callback'	=> 'sanitize_text_field'
	));
	$wp_customize->add_control('lawn_care_our_services_btn',array(
		'description' => "<a class='go-pro' target='_blank' href=".esc_url(LAWN_CARE_BUY_NOW).">More Info</a>",
		'section'=> 'lawn_care_our_services',
		'type'=> 'hidden'
	));

	//Pricing Plan Section
	$wp_customize->add_section('lawn_care_pricing_plan', array(
		'title'       => __('Pricing Plan Section', 'lawn-care'),
		'description' => __('<p class="premium-opt">Premium Theme Features</p>','lawn-care'),
		'priority'    => null,
		'panel'       => 'lawn_care_panel_id',
	));

	$wp_customize->add_setting('lawn_care_pricing_plan_text',array(
		'default'=> '',
		'sanitize_callback'	=> 'sanitize_text_field'
	));
	$wp_customize->add_control('lawn_care_pricing_plan_text',array(
		'description' => __('<p>1. More options for pricing plan section.</p>
			<p>2. Unlimited images options.</p>
			<p>3. Color options for pricing plan section.</p>','lawn-care'),
		'section'=> 'lawn_care_pricing_plan',
		'type'=> 'hidden'
	));

	$wp_customize->add_setting('lawn_care_pricing_plan_btn',array(
		'default'=> '',
		'sanitize_callback'	=> 'sanitize_text_field'
	));
	$wp_customize->add_control('lawn_care_pricing_plan_btn',array(
		'description' => "<a class='go-pro' target='_blank' href=".esc_url(LAWN_CARE_BUY_NOW).">More Info</a>",
		'section'=> 'lawn_care_pricing_plan',
		'type'=> 'hidden'
	));

	//Product Records Section
	$wp_customize->add_section('lawn_care_product_records', array(
		'title'       => __('Product Records Section', 'lawn-care'),
		'description' => __('<p class="premium-opt">Premium Theme Features</p>','lawn-care'),
		'priority'    => null,
		'panel'       => 'lawn_care_panel_id',
	));

	$wp_customize->add_setting('lawn_care_product_records_text',array(
		'default'=> '',
		'sanitize_callback'	=> 'sanitize_text_field'
	));
	$wp_customize->add_control('lawn_care_product_records_text',array(
		'description' => __('<p>1. More options for product records section.</p>
			<p>2. Unlimited images options.</p>
			<p>3. Color options for product records section.</p>','lawn-care'),
		'section'=> 'lawn_care_product_records',
		'type'=> 'hidden'
	));

	$wp_customize->add_setting('lawn_care_product_records_btn',array(
		'default'=> '',
		'sanitize_callback'	=> 'sanitize_text_field'
	));
	$wp_customize->add_control('lawn_care_product_records_btn',array(
		'description' => "<a class='go-pro' target='_blank' href=".esc_url(LAWN_CARE_BUY_NOW).">More Info</a>",
		'section'=> 'lawn_care_product_records',
		'type'=> 'hidden'
	));

	//Testimonials Section
	$wp_customize->add_section('lawn_care_testimonials', array(
		'title'       => __('Testimonials Section', 'lawn-care'),
		'description' => __('<p class="premium-opt">Premium Theme Features</p>','lawn-care'),
		'priority'    => null,
		'panel'       => 'lawn_care_panel_id',
	));

	$wp_customize->add_setting('lawn_care_testimonials_text',array(
		'default'=> '',
		'sanitize_callback'	=> 'sanitize_text_field'
	));
	$wp_customize->add_control('lawn_care_testimonials_text',array(
		'description' => __('<p>1. More options for testimonials section.</p>
			<p>2. Unlimited images options.</p>
			<p>3. Color options for testimonials section.</p>','lawn-care'),
		'section'=> 'lawn_care_testimonials',
		'type'=> 'hidden'
	));

	$wp_customize->add_setting('lawn_care_testimonials_btn',array(
		'default'=> '',
		'sanitize_callback'	=> 'sanitize_text_field'
	));
	$wp_customize->add_control('lawn_care_testimonials_btn',array(
		'description' => "<a class='go-pro' target='_blank' href=".esc_url(LAWN_CARE_BUY_NOW).">More Info</a>",
		'section'=> 'lawn_care_testimonials',
		'type'=> 'hidden'
	));

	//Our Team Section
	$wp_customize->add_section('lawn_care_our_team', array(
		'title'       => __('Our Team Section', 'lawn-care'),
		'description' => __('<p class="premium-opt">Premium Theme Features</p>','lawn-care'),
		'priority'    => null,
		'panel'       => 'lawn_care_panel_id',
	));

	$wp_customize->add_setting('lawn_care_our_team_text',array(
		'default'=> '',
		'sanitize_callback'	=> 'sanitize_text_field'
	));
	$wp_customize->add_control('lawn_care_our_team_text',array(
		'description' => __('<p>1. More options for our team section.</p>
			<p>2. Unlimited images options.</p>
			<p>3. Color options for our team section.</p>','lawn-care'),
		'section'=> 'lawn_care_our_team',
		'type'=> 'hidden'
	));

	$wp_customize->add_setting('lawn_care_our_team_btn',array(
		'default'=> '',
		'sanitize_callback'	=> 'sanitize_text_field'
	));
	$wp_customize->add_control('lawn_care_our_team_btn',array(
		'description' => "<a class='go-pro' target='_blank' href=".esc_url(LAWN_CARE_BUY_NOW).">More Info</a>",
		'section'=> 'lawn_care_our_team',
		'type'=> 'hidden'
	));

	//Choose Us Section
	$wp_customize->add_section('lawn_care_choose_us', array(
		'title'       => __('Choose Us Section', 'lawn-care'),
		'description' => __('<p class="premium-opt">Premium Theme Features</p>','lawn-care'),
		'priority'    => null,
		'panel'       => 'lawn_care_panel_id',
	));

	$wp_customize->add_setting('lawn_care_choose_us_text',array(
		'default'=> '',
		'sanitize_callback'	=> 'sanitize_text_field'
	));
	$wp_customize->add_control('lawn_care_choose_us_text',array(
		'description' => __('<p>1. More options for choose us section.</p>
			<p>2. Unlimited images options.</p>
			<p>3. Color options for choose us section.</p>','lawn-care'),
		'section'=> 'lawn_care_choose_us',
		'type'=> 'hidden'
	));

	$wp_customize->add_setting('lawn_care_choose_us_btn',array(
		'default'=> '',
		'sanitize_callback'	=> 'sanitize_text_field'
	));
	$wp_customize->add_control('lawn_care_choose_us_btn',array(
		'description' => "<a class='go-pro' target='_blank' href=".esc_url(LAWN_CARE_BUY_NOW).">More Info</a>",
		'section'=> 'lawn_care_choose_us',
		'type'=> 'hidden'
	));

	//Footer Text
	$wp_customize->add_section('lawn_care_footer',array(
		'title'	=> esc_html__('Footer Settings','lawn-care'),
		'panel' => 'lawn_care_panel_id',
		'description' => __('For more options of Footer section </br> <a class="go-pro-btn" target="blank" href="https://www.vwthemes.com/products/lawn-care-wordpress-theme">GET PRO</a>','lawn-care'),
	));

	$wp_customize->add_setting( 'lawn_care_footer_hide_show',array(
      'default' => 1,
      'transport' => 'refresh',
      'sanitize_callback' => 'lawn_care_switch_sanitization'
  ));
  $wp_customize->add_control( new Lawn_Care_Toggle_Switch_Custom_Control( $wp_customize, 'lawn_care_footer_hide_show',array(
      'label' => esc_html__( 'Show / Hide Footer','lawn-care' ),
      'section' => 'lawn_care_footer'
  )));

 	// font size
	$wp_customize->add_setting('lawn_care_button_footer_font_size',array(
		'default'=> 25,
		'sanitize_callback'	=> 'sanitize_text_field'
	));
	$wp_customize->add_control('lawn_care_button_footer_font_size',array(
		'label'	=> __('Footer Heading Font Size','lawn-care'),
  		'type'        => 'number',
		'input_attrs' => array(
			'step'             => 1,
			'min'              => 1,
			'max'              => 50,
		),
		'section'=> 'lawn_care_footer',
	));

	$wp_customize->add_setting('lawn_care_button_footer_heading_letter_spacing',array(
		'default'=> 1,
		'sanitize_callback'	=> 'sanitize_text_field'
	));
	$wp_customize->add_control('lawn_care_button_footer_heading_letter_spacing',array(
		'label'	=> __('Heading Letter Spacing','lawn-care'),
  		'type'        => 'number',
		'input_attrs' => array(
			'step'             => 1,
			'min'              => 1,
			'max'              => 50,
	),
		'section'=> 'lawn_care_footer',
	));

	// text trasform
	$wp_customize->add_setting('lawn_care_button_footer_text_transform',array(
		'default'=> 'Capitalize',
		'sanitize_callback'	=> 'lawn_care_sanitize_choices'
	));
	$wp_customize->add_control('lawn_care_button_footer_text_transform',array(
		'type' => 'radio',
		'label'	=> __('Heading Text Transform','lawn-care'),
		'choices' => array(
			'Uppercase' => __('Uppercase','lawn-care'),
			'Capitalize' => __('Capitalize','lawn-care'),
			'Lowercase' => __('Lowercase','lawn-care'),
		),
		'section'=> 'lawn_care_footer',
	));

	$wp_customize->add_setting('lawn_care_footer_heading_weight',array(
        'default' => '',
        'transport' => 'refresh',
        'sanitize_callback' => 'lawn_care_sanitize_choices'
	));
	$wp_customize->add_control('lawn_care_footer_heading_weight',array(
        'type' => 'select',
        'label' => __('Heading Font Weight','lawn-care'),
        'section' => 'lawn_care_footer',
        'choices' => array(
        	'100' => __('100','lawn-care'),
            '200' => __('200','lawn-care'),
            '300' => __('300','lawn-care'),
            '400' => __('400','lawn-care'),
            '500' => __('500','lawn-care'),
            '600' => __('600','lawn-care'),
            '700' => __('700','lawn-care'),
            '800' => __('800','lawn-care'),
            '900' => __('900','lawn-care'),
        ),
	) );

	$wp_customize->add_setting('lawn_care_footer_template',array(
		'default'	=> esc_html('lawn_care-footer-one'),
		'sanitize_callback'	=> 'lawn_care_sanitize_choices'
	));
	$wp_customize->add_control('lawn_care_footer_template',array(
		'label'	=> esc_html__('Footer style','lawn-care'),
		'section'	=> 'lawn_care_footer',
		'setting'	=> 'lawn_care_footer_template',
		'type' => 'select',
		'choices' => array(
			'lawn_care-footer-one' => esc_html__('Style 1', 'lawn-care'),
			'lawn_care-footer-two' => esc_html__('Style 2', 'lawn-care'),
			'lawn_care-footer-three' => esc_html__('Style 3', 'lawn-care'),
			'lawn_care-footer-four' => esc_html__('Style 4', 'lawn-care'),
			'lawn_care-footer-five' => esc_html__('Style 5', 'lawn-care'),
		)
	));

	$wp_customize->add_setting('lawn_care_footer_background_color', array(
		'default'           => '#299922',
		'sanitize_callback' => 'sanitize_hex_color',
	));
	$wp_customize->add_control(new WP_Customize_Color_Control($wp_customize, 'lawn_care_footer_background_color', array(
		'label'    => __('Footer Background Color', 'lawn-care'),
		'section'  => 'lawn_care_footer',
	)));

	$wp_customize->add_setting('lawn_care_footer_background_image',array(
		'default'	=> '',
		'sanitize_callback'	=> 'esc_url_raw',
	));
	$wp_customize->add_control( new WP_Customize_Image_Control($wp_customize,'lawn_care_footer_background_image',array(
        'label' => __('Footer Background Image','lawn-care'),
        'section' => 'lawn_care_footer'
	)));

	$wp_customize->add_setting('lawn_care_footer_img_position',array(
	  'default' => 'center center',
	  'transport' => 'refresh',
	  'sanitize_callback' => 'lawn_care_sanitize_choices'
	));
	$wp_customize->add_control('lawn_care_footer_img_position',array(
		'type' => 'select',
		'label' => __('Footer Image Position','lawn-care'),
		'section' => 'lawn_care_footer',
		'choices' 	=> array(
			'left top' 		=> esc_html__( 'Top Left', 'lawn-care' ),
			'center top'   => esc_html__( 'Top', 'lawn-care' ),
			'right top'   => esc_html__( 'Top Right', 'lawn-care' ),
			'left center'   => esc_html__( 'Left', 'lawn-care' ),
			'center center'   => esc_html__( 'Center', 'lawn-care' ),
			'right center'   => esc_html__( 'Right', 'lawn-care' ),
			'left bottom'   => esc_html__( 'Bottom Left', 'lawn-care' ),
			'center bottom'   => esc_html__( 'Bottom', 'lawn-care' ),
			'right bottom'   => esc_html__( 'Bottom Right', 'lawn-care' ),
		),
	));

  // Footer
  $wp_customize->add_setting('lawn_care_img_footer',array(
    'default'=> 'scroll',
    'sanitize_callback' => 'lawn_care_sanitize_choices'
  ));
  $wp_customize->add_control('lawn_care_img_footer',array(
    'type' => 'select',
    'label' => __('Footer Background Attatchment','lawn-care'),
    'choices' => array(
      'fixed' => __('fixed','lawn-care'),
      'scroll' => __('scroll','lawn-care'),
    ),
    'section'=> 'lawn_care_footer',
  ));

  // footer padding
  $wp_customize->add_setting('lawn_care_footer_padding',array(
    'default'=> '',
    'sanitize_callback' => 'sanitize_text_field'
  ));
  $wp_customize->add_control('lawn_care_footer_padding',array(
    'label' => __('Footer Top Bottom Padding','lawn-care'),
    'description' => __('Enter a value in pixels. Example:20px','lawn-care'),
    'input_attrs' => array(
      'placeholder' => __( '10px', 'lawn-care' ),
    ),
    'section'=> 'lawn_care_footer',
    'type'=> 'text'
  ));

  $wp_customize->add_setting('lawn_care_footer_widgets_heading',array(
    'default' => 'Left',
    'transport' => 'refresh',
    'sanitize_callback' => 'lawn_care_sanitize_choices'
  ));
  $wp_customize->add_control('lawn_care_footer_widgets_heading',array(
    'type' => 'select',
    'label' => __('Footer Widget Heading','lawn-care'),
    'section' => 'lawn_care_footer',
    'choices' => array(
      'Left' => __('Left','lawn-care'),
      'Center' => __('Center','lawn-care'),
      'Right' => __('Right','lawn-care')
    ),
  ) );

  $wp_customize->add_setting('lawn_care_footer_widgets_content',array(
    'default' => 'Left',
    'transport' => 'refresh',
    'sanitize_callback' => 'lawn_care_sanitize_choices'
  ));
  $wp_customize->add_control('lawn_care_footer_widgets_content',array(
    'type' => 'select',
    'label' => __('Footer Widget Content','lawn-care'),
    'section' => 'lawn_care_footer',
    'choices' => array(
      'Left' => __('Left','lawn-care'),
      'Center' => __('Center','lawn-care'),
      'Right' => __('Right','lawn-care')
  	),
	) );
	
	//Selective Refresh
	$wp_customize->selective_refresh->add_partial('lawn_care_footer_text', array(
		'selector' => '.copyright p',
		'render_callback' => 'lawn_care_Customize_partial_lawn_care_footer_text',
	));

	$wp_customize->add_setting('lawn_care_footer_text',array(
		'default'=> '',
		'sanitize_callback'	=> 'sanitize_text_field'
	));
	$wp_customize->add_control('lawn_care_footer_text',array(
		'label'	=> esc_html__('Copyright Text','lawn-care'),
		'input_attrs' => array(
      'placeholder' => esc_html__( 'Copyright 2024, .....', 'lawn-care' ),
      ),
		'section'=> 'lawn_care_footer',
		'type'=> 'text'
	));

	$wp_customize->add_setting( 'lawn_care_copyright_hide_show',array(
	  'default' => 1,
	  'transport' => 'refresh',
	  'sanitize_callback' => 'lawn_care_switch_sanitization'
	));
	$wp_customize->add_control( new Lawn_Care_Toggle_Switch_Custom_Control( $wp_customize, 'lawn_care_copyright_hide_show',array(
		'label' => esc_html__( 'Show / Hide Copyright','lawn-care' ),
		'section' => 'lawn_care_footer'
	)));

	$wp_customize->add_setting('lawn_care_copyright_alingment',array(
	    'default' => 'center',
	    'sanitize_callback' => 'lawn_care_sanitize_choices'
		));
		$wp_customize->add_control(new Lawn_Care_Image_Radio_Control($wp_customize, 'lawn_care_copyright_alingment', array(
	    'type' => 'select',
	    'label' => esc_html__('Copyright Alignment','lawn-care'),
	    'section' => 'lawn_care_footer',
	    'settings' => 'lawn_care_copyright_alingment',
	    'choices' => array(
	        'left' => esc_url(get_template_directory_uri()).'/assets/images/copyright1.png',
	        'center' => esc_url(get_template_directory_uri()).'/assets/images/copyright2.png',
	        'right' => esc_url(get_template_directory_uri()).'/assets/images/copyright3.png'
	))));

	$wp_customize->add_setting('lawn_care_copyright_background_color', array(
		'default'           => '',
		'sanitize_callback' => 'sanitize_hex_color',
	));
	$wp_customize->add_control(new WP_Customize_Color_Control($wp_customize, 'lawn_care_copyright_background_color', array(
		'label'    => __('Copyright Background Color', 'lawn-care'),
		'section'  => 'lawn_care_footer',
	)));

	$wp_customize->add_setting('lawn_care_copyright_font_size',array(
		'default'=> '',
		'sanitize_callback' => 'sanitize_text_field'
	));
	$wp_customize->add_control('lawn_care_copyright_font_size',array(
		'label' => __('Copyright Font Size','lawn-care'),
		'description' => __('Enter a value in pixels. Example:20px','lawn-care'),
		'input_attrs' => array(
      	'placeholder' => __( '10px', 'lawn-care' ),
	    ),
		'section'=> 'lawn_care_footer',
		'type'=> 'text'
	));

	$wp_customize->add_setting( 'lawn_care_hide_show_scroll',array(
		'default' => 1,
		'transport' => 'refresh',
		'sanitize_callback' => 'lawn_care_switch_sanitization'
	));
	$wp_customize->add_control( new Lawn_Care_Toggle_Switch_Custom_Control( $wp_customize, 'lawn_care_hide_show_scroll',array(
		'label' => esc_html__( 'Show / Hide Scroll to Top','lawn-care' ),
		'section' => 'lawn_care_footer'
	)));

  //Selective Refresh
	$wp_customize->selective_refresh->add_partial('lawn_care_scroll_to_top_icon', array(
		'selector' => '.scrollup i',
		'render_callback' => 'lawn_care_Customize_partial_lawn_care_scroll_to_top_icon',
	));

  $wp_customize->add_setting('lawn_care_scroll_top_alignment',array(
    'default' => 'Right',
    'sanitize_callback' => 'lawn_care_sanitize_choices'
	));
	$wp_customize->add_control(new Lawn_Care_Image_Radio_Control($wp_customize, 'lawn_care_scroll_top_alignment', array(
    'type' => 'select',
    'label' => esc_html__('Scroll To Top','lawn-care'),
    'section' => 'lawn_care_footer',
    'settings' => 'lawn_care_scroll_top_alignment',
    'choices' => array(
        'Left' => esc_url(get_template_directory_uri()).'/assets/images/layout1.png',
        'Center' => esc_url(get_template_directory_uri()).'/assets/images/layout2.png',
        'Right' => esc_url(get_template_directory_uri()).'/assets/images/layout3.png'
  ))));

 	$wp_customize->add_setting('lawn_care_scroll_top_icon',array(
    'default' => 'fas fa-long-arrow-alt-up',
    'sanitize_callback' => 'sanitize_text_field'
  ));
  $wp_customize->add_control(new Lawn_Care_Fontawesome_Icon_Chooser($wp_customize,'lawn_care_scroll_top_icon',array(
    'label' => __('Add Scroll to Top Icon','lawn-care'),
    'transport' => 'refresh',
    'section' => 'lawn_care_footer',
    'setting' => 'lawn_care_scroll_top_icon',
    'type'    => 'icon'
  )));

  $wp_customize->add_setting('lawn_care_scroll_to_top_font_size',array(
    'default'=> '',
    'sanitize_callback' => 'sanitize_text_field'
  ));
  $wp_customize->add_control('lawn_care_scroll_to_top_font_size',array(
    'label' => __('Icon Font Size','lawn-care'),
    'description' => __('Enter a value in pixels. Example:20px','lawn-care'),
    'input_attrs' => array(
      'placeholder' => __( '10px', 'lawn-care' ),
    ),
    'section'=> 'lawn_care_footer',
    'type'=> 'text'
  ));

  $wp_customize->add_setting('lawn_care_scroll_to_top_padding',array(
    'default'=> '',
    'sanitize_callback' => 'sanitize_text_field'
  ));
  $wp_customize->add_control('lawn_care_scroll_to_top_padding',array(
    'label' => __('Icon Top Bottom Padding','lawn-care'),
    'description' => __('Enter a value in pixels. Example:20px','lawn-care'),
    'input_attrs' => array(
      'placeholder' => __( '10px', 'lawn-care' ),
    ),
    'section'=> 'lawn_care_footer',
    'type'=> 'text'
  ));

  $wp_customize->add_setting('lawn_care_scroll_to_top_width',array(
    'default'=> '',
    'sanitize_callback' => 'sanitize_text_field'
  ));
  $wp_customize->add_control('lawn_care_scroll_to_top_width',array(
    'label' => __('Icon Width','lawn-care'),
    'description' => __('Enter a value in pixels Example:20px','lawn-care'),
    'input_attrs' => array(
      'placeholder' => __( '10px', 'lawn-care' ),
  ),
	  'section'=> 'lawn_care_footer',
	  'type'=> 'text'
  ));

  $wp_customize->add_setting('lawn_care_scroll_to_top_height',array(
    'default'=> '',
    'sanitize_callback' => 'sanitize_text_field'
  ));
  $wp_customize->add_control('lawn_care_scroll_to_top_height',array(
    'label' => __('Icon Height','lawn-care'),
    'description' => __('Enter a value in pixels. Example:20px','lawn-care'),
    'input_attrs' => array(
      'placeholder' => __( '10px', 'lawn-care' ),
    ),
    'section'=> 'lawn_care_footer',
    'type'=> 'text'
  ));

  $wp_customize->add_setting( 'lawn_care_scroll_to_top_border_radius', array(
    'default'              => '',
    'transport'        => 'refresh',
    'sanitize_callback'    => 'lawn_care_sanitize_number_range'
  ) );
  $wp_customize->add_control( 'lawn_care_scroll_to_top_border_radius', array(
    'label'       => esc_html__( 'Icon Border Radius','lawn-care' ),
    'section'     => 'lawn_care_footer',
    'type'        => 'range',
    'input_attrs' => array(
      'step'             => 1,
      'min'              => 1,
      'max'              => 50,
    ),
  ) );

 	//Blog Post
	$wp_customize->add_panel( 'lawn_care_blog_post_parent_panel', array(
		'title' => esc_html__( 'Blog Post Settings', 'lawn-care' ),
		'panel' => 'lawn_care_panel_id',
		'priority' => 20,
	));

	// Add example section and controls to the middle (second) panel
	$wp_customize->add_section( 'lawn_care_post_settings', array(
		'title' => esc_html__( 'Post Settings', 'lawn-care' ),
		'panel' => 'lawn_care_blog_post_parent_panel',
	));

	//Selective Refresh
	$wp_customize->selective_refresh->add_partial('lawn_care_toggle_postdate', array(
		'selector' => '.post-main-box h2 a',
		'render_callback' => 'lawn_care_Customize_partial_lawn_care_toggle_postdate',
	));

	//Blog layout
  $wp_customize->add_setting('lawn_care_blog_layout_option',array(
    'default' => 'Default',
    'sanitize_callback' => 'lawn_care_sanitize_choices'
  ));
  $wp_customize->add_control(new Lawn_Care_Image_Radio_Control($wp_customize, 'lawn_care_blog_layout_option', array(
    'type' => 'select',
    'label' => __('Blog Post Layouts','lawn-care'),
    'section' => 'lawn_care_post_settings',
    'choices' => array(
      'Default' => esc_url(get_template_directory_uri()).'/assets/images/blog-layout1.png',
      'Center' => esc_url(get_template_directory_uri()).'/assets/images/blog-layout2.png',
      'Left' => esc_url(get_template_directory_uri()).'/assets/images/blog-layout3.png',
  ))));

	$wp_customize->add_setting('lawn_care_theme_options',array(
    'default' => 'Right Sidebar',
    'sanitize_callback' => 'lawn_care_sanitize_choices'
	));
	$wp_customize->add_control('lawn_care_theme_options',array(
    'type' => 'select',
    'label' => esc_html__('Post Sidebar Layout','lawn-care'),
    'description' => esc_html__('Here you can change the sidebar layout for posts. ','lawn-care'),
    'section' => 'lawn_care_post_settings',
    'choices' => array(
        'Left Sidebar' => esc_html__('Left Sidebar','lawn-care'),
        'Right Sidebar' => esc_html__('Right Sidebar','lawn-care'),
        'One Column' => esc_html__('One Column','lawn-care'),
        'Three Columns' => esc_html__('Three Columns','lawn-care'),
        'Four Columns' => esc_html__('Four Columns','lawn-care'),
        'Grid Layout' => esc_html__('Grid Layout','lawn-care')
    ),
	) );


	$wp_customize->add_setting('lawn_care_toggle_postdate_icon',array(
		'default'	=> 'fas fa-calendar-alt',
		'sanitize_callback'	=> 'sanitize_text_field'
	));
	$wp_customize->add_control(new Lawn_Care_Fontawesome_Icon_Chooser(
  $wp_customize,'lawn_care_toggle_postdate_icon',array(
		'label'	=> __('Add Post Date Icon','lawn-care'),
		'transport' => 'refresh',
		'section'	=> 'lawn_care_post_settings',
		'setting'	=> 'lawn_care_toggle_postdate_icon',
		'type'		=> 'icon'
	)));

 	$wp_customize->add_setting( 'lawn_care_blog_toggle_postdate',array(
    'default' => 1,
    'transport' => 'refresh',
    'sanitize_callback' => 'lawn_care_switch_sanitization'
  ));
  $wp_customize->add_control( new Lawn_Care_Toggle_Switch_Custom_Control( $wp_customize, 'lawn_care_blog_toggle_postdate',array(
    'label' => esc_html__( 'Show / Hide Post Date','lawn-care' ),
    'section' => 'lawn_care_post_settings'
  )));

	$wp_customize->add_setting('lawn_care_toggle_author_icon',array(
		'default'	=> 'fas fa-user',
		'sanitize_callback'	=> 'sanitize_text_field'
	));
	$wp_customize->add_control(new Lawn_Care_Fontawesome_Icon_Chooser(
  $wp_customize,'lawn_care_toggle_author_icon',array(
		'label'	=> __('Add Author Icon','lawn-care'),
		'transport' => 'refresh',
		'section'	=> 'lawn_care_post_settings',
		'setting'	=> 'lawn_care_toggle_author_icon',
		'type'		=> 'icon'
	)));

  $wp_customize->add_setting( 'lawn_care_blog_toggle_author',array(
		'default' => 1,
		'transport' => 'refresh',
		'sanitize_callback' => 'lawn_care_switch_sanitization'
  ));
  $wp_customize->add_control( new Lawn_Care_Toggle_Switch_Custom_Control( $wp_customize, 'lawn_care_blog_toggle_author',array(
		'label' => esc_html__( 'Show / Hide Author','lawn-care' ),
		'section' => 'lawn_care_post_settings'
  )));

  $wp_customize->add_setting('lawn_care_toggle_comments_icon',array(
		'default'	=> 'fa fa-comments',
		'sanitize_callback'	=> 'sanitize_text_field'
	));
	$wp_customize->add_control(new Lawn_Care_Fontawesome_Icon_Chooser(
  $wp_customize,'lawn_care_toggle_comments_icon',array(
		'label'	=> __('Add Comments Icon','lawn-care'),
		'transport' => 'refresh',
		'section'	=> 'lawn_care_post_settings',
		'setting'	=> 'lawn_care_toggle_comments_icon',
		'type'		=> 'icon'
	)));

  $wp_customize->add_setting( 'lawn_care_blog_toggle_comments',array(
		'default' => 1,
		'transport' => 'refresh',
		'sanitize_callback' => 'lawn_care_switch_sanitization'
  ) );
  $wp_customize->add_control( new Lawn_Care_Toggle_Switch_Custom_Control( $wp_customize, 'lawn_care_blog_toggle_comments',array(
		'label' => esc_html__( 'Show / Hide Comments','lawn-care' ),
		'section' => 'lawn_care_post_settings'
  )));

  $wp_customize->add_setting('lawn_care_toggle_time_icon',array(
		'default'	=> 'fas fa-clock',
		'sanitize_callback'	=> 'sanitize_text_field'
	));
	$wp_customize->add_control(new Lawn_Care_Fontawesome_Icon_Chooser(
  $wp_customize,'lawn_care_toggle_time_icon',array(
		'label'	=> __('Add Time Icon','lawn-care'),
		'transport' => 'refresh',
		'section'	=> 'lawn_care_post_settings',
		'setting'	=> 'lawn_care_toggle_time_icon',
		'type'		=> 'icon'
	)));

  $wp_customize->add_setting( 'lawn_care_blog_toggle_time',array(
		'default' => 1,
		'transport' => 'refresh',
		'sanitize_callback' => 'lawn_care_switch_sanitization'
  ) );
  $wp_customize->add_control( new Lawn_Care_Toggle_Switch_Custom_Control( $wp_customize, 'lawn_care_blog_toggle_time',array(
		'label' => esc_html__( 'Show / Hide Time','lawn-care' ),
		'section' => 'lawn_care_post_settings'
  )));

  $wp_customize->add_setting( 'lawn_care_featured_image_hide_show',array(
		'default' => 1,
		'transport' => 'refresh',
		'sanitize_callback' => 'lawn_care_switch_sanitization'
	));
  $wp_customize->add_control( new Lawn_Care_Toggle_Switch_Custom_Control( $wp_customize, 'lawn_care_featured_image_hide_show', array(
		'label' => esc_html__( 'Show / Hide Featured Image','lawn-care' ),
		'section' => 'lawn_care_post_settings'
  )));

  $wp_customize->add_setting( 'lawn_care_featured_image_border_radius', array(
		'default'              => '0',
		'transport' 		   => 'refresh',
		'sanitize_callback'    => 'lawn_care_sanitize_number_range'
	) );
	$wp_customize->add_control( 'lawn_care_featured_image_border_radius', array(
		'label'       => esc_html__( 'Featured Image Border Radius','lawn-care' ),
		'section'     => 'lawn_care_post_settings',
		'type'        => 'range',
		'input_attrs' => array(
			'step'             => 1,
			'min'              => 1,
			'max'              => 50,
		),
	) );

	$wp_customize->add_setting( 'lawn_care_featured_image_box_shadow', array(
		'default'              => '0',
		'transport' 		   => 'refresh',
		'sanitize_callback'    => 'lawn_care_sanitize_number_range'
	) );
	$wp_customize->add_control( 'lawn_care_featured_image_box_shadow', array(
		'label'       => esc_html__( 'Featured Image Box Shadow','lawn-care' ),
		'section'     => 'lawn_care_post_settings',
		'type'        => 'range',
		'input_attrs' => array(
			'step'             => 1,
			'min'              => 1,
			'max'              => 50,
		),
	) );

	//Featured Image
	$wp_customize->add_setting('lawn_care_blog_post_featured_image_dimension',array(
   'default' => 'default',
   'sanitize_callback'	=> 'lawn_care_sanitize_choices'
	));
	$wp_customize->add_control('lawn_care_blog_post_featured_image_dimension',array(
		'type' => 'select',
		'label'	=> __('Blog Post Featured Image Dimension','lawn-care'),
		'section'	=> 'lawn_care_post_settings',
		'choices' => array(
		'default' => __('Default','lawn-care'),
		'custom' => __('Custom Image Size','lawn-care'),
      ),
	));

	$wp_customize->add_setting('lawn_care_blog_post_featured_image_custom_width',array(
		'default'=> '',
		'sanitize_callback'	=> 'sanitize_text_field'
		));
	$wp_customize->add_control('lawn_care_blog_post_featured_image_custom_width',array(
		'label'	=> __('Featured Image Custom Width','lawn-care'),
		'description'	=> __('Enter a value in pixels. Example:20px','lawn-care'),
		'input_attrs' => array(
    	'placeholder' => __( '10px', 'lawn-care' ),),
		'section'=> 'lawn_care_post_settings',
		'type'=> 'text',
		'active_callback' => 'lawn_care_blog_post_featured_image_dimension'
		));

	$wp_customize->add_setting('lawn_care_blog_post_featured_image_custom_height',array(
		'default'=> '',
		'sanitize_callback'	=> 'sanitize_text_field'
	));
	$wp_customize->add_control('lawn_care_blog_post_featured_image_custom_height',array(
		'label'	=> __('Featured Image Custom Height','lawn-care'),
		'description'	=> __('Enter a value in pixels. Example:20px','lawn-care'),
		'input_attrs' => array(
    	'placeholder' => __( '10px', 'lawn-care' ),),
		'section'=> 'lawn_care_post_settings',
		'type'=> 'text',
		'active_callback' => 'lawn_care_blog_post_featured_image_dimension'
	));

  $wp_customize->add_setting( 'lawn_care_excerpt_number', array(
		'default'              => 30,
		'type'                 => 'theme_mod',
		'transport' 		   => 'refresh',
		'sanitize_callback'    => 'lawn_care_sanitize_number_range',
		'sanitize_js_callback' => 'absint',
	) );
	$wp_customize->add_control( 'lawn_care_excerpt_number', array(
		'label'       => esc_html__( 'Excerpt length','lawn-care' ),
		'section'     => 'lawn_care_post_settings',
		'type'        => 'range',
		'settings'    => 'lawn_care_excerpt_number',
		'input_attrs' => array(
			'step'             => 5,
			'min'              => 0,
			'max'              => 50,
		),
	) );

	$wp_customize->add_setting('lawn_care_meta_field_separator',array(
		'default'=> '|',
		'sanitize_callback'	=> 'sanitize_text_field'
	));
	$wp_customize->add_control('lawn_care_meta_field_separator',array(
		'label'	=> __('Add Meta Separator','lawn-care'),
		'description' => __('Add the seperator for meta box. Example: "|", "/", etc.','lawn-care'),
		'section'=> 'lawn_care_post_settings',
		'type'=> 'text'
	));

  $wp_customize->add_setting('lawn_care_excerpt_settings',array(
    'default' => 'Excerpt',
    'transport' => 'refresh',
    'sanitize_callback' => 'lawn_care_sanitize_choices'
	));
	$wp_customize->add_control('lawn_care_excerpt_settings',array(
    'type' => 'select',
    'label' => esc_html__('Post Content','lawn-care'),
    'section' => 'lawn_care_post_settings',
    'choices' => array(
    	'Content' => esc_html__('Content','lawn-care'),
        'Excerpt' => esc_html__('Excerpt','lawn-care'),
        'No Content' => esc_html__('No Content','lawn-care')
        ),
	) );

  $wp_customize->add_setting('lawn_care_blog_page_posts_settings',array(
    'default' => 'Into Blocks',
    'transport' => 'refresh',
    'sanitize_callback' => 'lawn_care_sanitize_choices'
	));
	$wp_customize->add_control('lawn_care_blog_page_posts_settings',array(
    'type' => 'select',
    'label' => __('Display Blog Posts','lawn-care'),
    'section' => 'lawn_care_post_settings',
    'choices' => array(
    	'Into Blocks' => __('Into Blocks','lawn-care'),
        'Without Blocks' => __('Without Blocks','lawn-care')
        ),
	) );

	$wp_customize->add_setting( 'lawn_care_blog_pagination_hide_show',array(
		'default' => 1,
		'transport' => 'refresh',
		'sanitize_callback' => 'lawn_care_switch_sanitization'
  ));
  $wp_customize->add_control( new Lawn_Care_Toggle_Switch_Custom_Control( $wp_customize, 'lawn_care_blog_pagination_hide_show',array(
		'label' => esc_html__( 'Show / Hide Blog Pagination','lawn-care' ),
		'section' => 'lawn_care_post_settings'
  )));

	$wp_customize->add_setting('lawn_care_blog_excerpt_suffix',array(
		'default'=> '',
		'sanitize_callback'	=> 'sanitize_text_field'
	));
	$wp_customize->add_control('lawn_care_blog_excerpt_suffix',array(
		'label'	=> __('Add Excerpt Suffix','lawn-care'),
		'input_attrs' => array(
      'placeholder' => __( '[...]', 'lawn-care' ),
        ),
		'section'=> 'lawn_care_post_settings',
		'type'=> 'text'
	));

	$wp_customize->add_setting( 'lawn_care_blog_pagination_type', array(
    'default'			=> 'blog-page-numbers',
    'sanitize_callback'	=> 'lawn_care_sanitize_choices'
  ));
  $wp_customize->add_control( 'lawn_care_blog_pagination_type', array(
    'section' => 'lawn_care_post_settings',
    'type' => 'select',
    'label' => __( 'Blog Pagination', 'lawn-care' ),
    'choices'		=> array(
      'blog-page-numbers'  => __( 'Numeric', 'lawn-care' ),
      'next-prev' => __( 'Older Posts/Newer Posts', 'lawn-care' ),
  )));

  // Button Settings
	$wp_customize->add_section( 'lawn_care_button_settings', array(
		'title' => esc_html__( 'Button Settings', 'lawn-care' ),
		'panel' => 'lawn_care_blog_post_parent_panel',
	));

	//Selective Refresh
	$wp_customize->selective_refresh->add_partial('lawn_care_button_text', array(
		'selector' => '.post-main-box .more-btn a',
		'render_callback' => 'lawn_care_Customize_partial_lawn_care_button_text',
	));

  $wp_customize->add_setting('lawn_care_button_text',array(
		'default'=> esc_html__('Read More','lawn-care'),
		'sanitize_callback'	=> 'sanitize_text_field'
	));
	$wp_customize->add_control('lawn_care_button_text',array(
		'label'	=> esc_html__('Add Button Text','lawn-care'),
		'input_attrs' => array(
    'placeholder' => esc_html__( 'Read More', 'lawn-care' ),
        ),
		'section'=> 'lawn_care_button_settings',
		'type'=> 'text'
	));

	// font size button
	$wp_customize->add_setting('lawn_care_button_font_size',array(
		'default'=> '',
		'sanitize_callback'	=> 'sanitize_text_field'
	));
	$wp_customize->add_control('lawn_care_button_font_size',array(
		'label'	=> __('Button Font Size','lawn-care'),
		'description'	=> __('Enter a value in pixels. Example:20px','lawn-care'),
		'input_attrs' => array(
  		'placeholder' => __( '10px', 'lawn-care' ),
    ),
  	'type'        => 'text',
		'input_attrs' => array(
			'step'             => 1,
			'min'              => 1,
			'max'              => 50,
		),
		'section'=> 'lawn_care_button_settings',
	));


	$wp_customize->add_setting( 'lawn_care_button_border_radius', array(
		'default'              => 5,
		'type'                 => 'theme_mod',
		'transport' 		   => 'refresh',
		'sanitize_callback'    => 'lawn_care_sanitize_number_range',
		'sanitize_js_callback' => 'absint',
	) );
	$wp_customize->add_control( 'lawn_care_button_border_radius', array(
		'label'       => esc_html__( 'Button Border Radius','lawn-care' ),
		'section'     => 'lawn_care_button_settings',
		'type'        => 'range',
		'input_attrs' => array(
			'step'             => 1,
			'min'              => 1,
			'max'              => 50,
		),
	) );

	// button padding
	$wp_customize->add_setting('lawn_care_button_top_bottom_padding',array(
		'default'=> '',
		'sanitize_callback'	=> 'sanitize_text_field'
	));
	$wp_customize->add_control('lawn_care_button_top_bottom_padding',array(
		'label'	=> __('Button Top Bottom Padding','lawn-care'),
		'description'	=> __('Enter a value in pixels. Example:20px','lawn-care'),
		'input_attrs' => array(
      'placeholder' => __( '10px', 'lawn-care' ),
    ),
		'section'=> 'lawn_care_button_settings',
		'type'=> 'text'
	));

	$wp_customize->add_setting('lawn_care_button_left_right_padding',array(
		'default'=> '',
		'sanitize_callback'	=> 'sanitize_text_field'
	));
	$wp_customize->add_control('lawn_care_button_left_right_padding',array(
		'label'	=> __('Button Left Right Padding','lawn-care'),
		'description'	=> __('Enter a value in pixels. Example:20px','lawn-care'),
		'input_attrs' => array(
      'placeholder' => __( '10px', 'lawn-care' ),
    ),
		'section'=> 'lawn_care_button_settings',
		'type'=> 'text'
	));

	$wp_customize->add_setting('lawn_care_button_letter_spacing',array(
		'default'=> '',
		'sanitize_callback'	=> 'sanitize_text_field'
	));
	$wp_customize->add_control('lawn_care_button_letter_spacing',array(
		'label'	=> __('Button Letter Spacing','lawn-care'),
		'description'	=> __('Enter a value in pixels. Example:20px','lawn-care'),
		'input_attrs' => array(
      	'placeholder' => __( '10px', 'lawn-care' ),
  ),
  	'type'        => 'text',
		'input_attrs' => array(
			'step'             => 1,
			'min'              => 1,
			'max'              => 50,
	),
		'section'=> 'lawn_care_button_settings',
	));

	// text trasform
	$wp_customize->add_setting('lawn_care_button_text_transform',array(
		'default'=> 'Capitalize',
		'sanitize_callback'	=> 'lawn_care_sanitize_choices'
	));
	$wp_customize->add_control('lawn_care_button_text_transform',array(
		'type' => 'radio',
		'label'	=> __('Button Text Transform','lawn-care'),
		'choices' => array(
      'Uppercase' => __('Uppercase','lawn-care'),
      'Capitalize' => __('Capitalize','lawn-care'),
      'Lowercase' => __('Lowercase','lawn-care'),
    ),
		'section'=> 'lawn_care_button_settings',
	));

	// Related Post Settings
	$wp_customize->add_section( 'lawn_care_related_posts_settings', array(
		'title' => esc_html__( 'Related Posts Settings', 'lawn-care' ),
		'panel' => 'lawn_care_blog_post_parent_panel',
	));

	//Selective Refresh
	$wp_customize->selective_refresh->add_partial('lawn_care_related_post_title', array(
		'selector' => '.related-post h3',
		'render_callback' => 'lawn_care_Customize_partial_lawn_care_related_post_title',
	));

  $wp_customize->add_setting( 'lawn_care_related_post',array(
		'default' => 1,
		'transport' => 'refresh',
		'sanitize_callback' => 'lawn_care_switch_sanitization'
  ) );
  $wp_customize->add_control( new Lawn_Care_Toggle_Switch_Custom_Control( $wp_customize, 'lawn_care_related_post',array(
		'label' => esc_html__( 'Related Post','lawn-care' ),
		'section' => 'lawn_care_related_posts_settings'
  )));

  $wp_customize->add_setting('lawn_care_related_post_title',array(
		'default'=> '',
		'sanitize_callback'	=> 'sanitize_text_field'
	));
	$wp_customize->add_control('lawn_care_related_post_title',array(
		'label'	=> esc_html__('Add Related Post Title','lawn-care'),
		'input_attrs' => array(
      'placeholder' => esc_html__( 'Related Post', 'lawn-care' ),
        ),
		'section'=> 'lawn_care_related_posts_settings',
		'type'=> 'text'
	));

 	$wp_customize->add_setting('lawn_care_related_posts_count',array(
		'default'=> 3,
		'sanitize_callback'	=> 'lawn_care_sanitize_number_absint'
	));
	$wp_customize->add_control('lawn_care_related_posts_count',array(
		'label'	=> esc_html__('Add Related Post Count','lawn-care'),
		'input_attrs' => array(
      'placeholder' => esc_html__( '3', 'lawn-care' ),
        ),
		'section'=> 'lawn_care_related_posts_settings',
		'type'=> 'number'
	));

	$wp_customize->add_setting( 'lawn_care_related_posts_excerpt_number', array(
		'default'              => 20,
		'transport' 		   => 'refresh',
		'sanitize_callback'    => 'lawn_care_sanitize_number_range'
	) );
	$wp_customize->add_control( 'lawn_care_related_posts_excerpt_number', array(
		'label'       => esc_html__( 'Related Posts Excerpt length','lawn-care' ),
		'section'     => 'lawn_care_related_posts_settings',
		'type'        => 'range',
		'settings'    => 'lawn_care_related_posts_excerpt_number',
		'input_attrs' => array(
			'step'             => 5,
			'min'              => 0,
			'max'              => 50,
		),
	) );

	$wp_customize->add_setting( 'lawn_care_related_toggle_postdate',array(
    'default' => 1,
    'transport' => 'refresh',
    'sanitize_callback' => 'lawn_care_switch_sanitization'
  ));
  $wp_customize->add_control( new Lawn_Care_Toggle_Switch_Custom_Control( $wp_customize, 'lawn_care_related_toggle_postdate',array(
    'label' => esc_html__( 'Show / Hide Post Date','lawn-care' ),
    'section' => 'lawn_care_related_posts_settings'
  )));

  $wp_customize->add_setting('lawn_care_related_postdate_icon',array(
    'default' => 'fas fa-calendar-alt',
    'sanitize_callback' => 'sanitize_text_field'
  ));
  $wp_customize->add_control(new Lawn_Care_Fontawesome_Icon_Chooser(
  $wp_customize,'lawn_care_related_postdate_icon',array(
    'label' => __('Add Post Date Icon','lawn-care'),
    'transport' => 'refresh',
    'section' => 'lawn_care_related_posts_settings',
    'setting' => 'lawn_care_related_postdate_icon',
    'type'    => 'icon'
  )));

	$wp_customize->add_setting( 'lawn_care_related_toggle_author',array(
		'default' => 1,
		'transport' => 'refresh',
		'sanitize_callback' => 'lawn_care_switch_sanitization'
  ));
  $wp_customize->add_control( new Lawn_Care_Toggle_Switch_Custom_Control( $wp_customize, 'lawn_care_related_toggle_author',array(
		'label' => esc_html__( 'Show / Hide Author','lawn-care' ),
		'section' => 'lawn_care_related_posts_settings'
  )));

  $wp_customize->add_setting('lawn_care_related_author_icon',array(
    'default' => 'fas fa-user',
    'sanitize_callback' => 'sanitize_text_field'
  ));
  $wp_customize->add_control(new Lawn_Care_Fontawesome_Icon_Chooser(
  $wp_customize,'lawn_care_related_author_icon',array(
    'label' => __('Add Author Icon','lawn-care'),
    'transport' => 'refresh',
    'section' => 'lawn_care_related_posts_settings',
    'setting' => 'lawn_care_related_author_icon',
    'type'    => 'icon'
  )));

	$wp_customize->add_setting( 'lawn_care_related_toggle_comments',array(
		'default' => 1,
		'transport' => 'refresh',
		'sanitize_callback' => 'lawn_care_switch_sanitization'
  ) );
  $wp_customize->add_control( new Lawn_Care_Toggle_Switch_Custom_Control( $wp_customize, 'lawn_care_related_toggle_comments',array(
		'label' => esc_html__( 'Show / Hide Comments','lawn-care' ),
		'section' => 'lawn_care_related_posts_settings'
  )));

  $wp_customize->add_setting('lawn_care_related_comments_icon',array(
    'default' => 'fa fa-comments',
    'sanitize_callback' => 'sanitize_text_field'
  ));
  $wp_customize->add_control(new Lawn_Care_Fontawesome_Icon_Chooser(
  $wp_customize,'lawn_care_related_comments_icon',array(
    'label' => __('Add Comments Icon','lawn-care'),
    'transport' => 'refresh',
    'section' => 'lawn_care_related_posts_settings',
    'setting' => 'lawn_care_related_comments_icon',
    'type'    => 'icon'
  )));

	$wp_customize->add_setting( 'lawn_care_related_toggle_time',array(
		'default' => 1,
		'transport' => 'refresh',
		'sanitize_callback' => 'lawn_care_switch_sanitization'
  ) );
  $wp_customize->add_control( new Lawn_Care_Toggle_Switch_Custom_Control( $wp_customize, 'lawn_care_related_toggle_time',array(
		'label' => esc_html__( 'Show / Hide Time','lawn-care' ),
		'section' => 'lawn_care_related_posts_settings'
  )));

  $wp_customize->add_setting('lawn_care_related_time_icon',array(
    'default' => 'fas fa-clock',
    'sanitize_callback' => 'sanitize_text_field'
  ));
  $wp_customize->add_control(new Lawn_Care_Fontawesome_Icon_Chooser(
  $wp_customize,'lawn_care_related_time_icon',array(
    'label' => __('Add Time Icon','lawn-care'),
    'transport' => 'refresh',
    'section' => 'lawn_care_related_posts_settings',
    'setting' => 'lawn_care_related_time_icon',
    'type'    => 'icon'
  )));

  $wp_customize->add_setting('lawn_care_related_post_meta_field_separator',array(
		'default'=> '|',
		'sanitize_callback'	=> 'sanitize_text_field'
	));
	$wp_customize->add_control('lawn_care_related_post_meta_field_separator',array(
		'label'	=> __('Add Meta Separator','lawn-care'),
		'description' => __('Add the seperator for meta box. Example: "|", "/", etc.','lawn-care'),
		'section'=> 'lawn_care_related_posts_settings',
		'type'=> 'text'
	));

	$wp_customize->add_setting( 'lawn_care_related_image_hide_show',array(
		'default' => 1,
		'transport' => 'refresh',
		'sanitize_callback' => 'lawn_care_switch_sanitization'
	));
  $wp_customize->add_control( new Lawn_Care_Toggle_Switch_Custom_Control( $wp_customize, 'lawn_care_related_image_hide_show', array(
		'label' => esc_html__( 'Show / Hide Featured Image','lawn-care' ),
		'section' => 'lawn_care_related_posts_settings'
  )));

  $wp_customize->add_setting( 'lawn_care_related_image_box_shadow', array(
		'default'              => '0',
		'transport' 		   => 'refresh',
		'sanitize_callback'    => 'lawn_care_sanitize_number_range'
	) );
	$wp_customize->add_control( 'lawn_care_related_image_box_shadow', array(
		'label'       => esc_html__( 'Related post Image Box Shadow','lawn-care' ),
		'section'     => 'lawn_care_related_posts_settings',
		'type'        => 'range',
		'input_attrs' => array(
			'step'             => 1,
			'min'              => 1,
			'max'              => 50,
		),
	) );

  $wp_customize->add_setting('lawn_care_related_button_text',array(
		'default'=> esc_html__('Read More','lawn-care'),
		'sanitize_callback'	=> 'sanitize_text_field'
	));
	$wp_customize->add_control('lawn_care_related_button_text',array(
		'label'	=> esc_html__('Add Button Text','lawn-care'),
		'input_attrs' => array(
      'placeholder' => esc_html__( 'Read More', 'lawn-care' ),
        ),
		'section'=> 'lawn_care_related_posts_settings',
		'type'=> 'text'
	));

	// Single Posts Settings
	$wp_customize->add_section( 'lawn_care_single_blog_settings', array(
		'title' => __( 'Single Post Settings', 'lawn-care' ),
		'panel' => 'lawn_care_blog_post_parent_panel',
	));

	$wp_customize->add_setting('lawn_care_single_postdate_icon',array(
		'default'	=> 'fas fa-calendar-alt',
		'sanitize_callback'	=> 'sanitize_text_field'
	));
	$wp_customize->add_control(new Lawn_Care_Fontawesome_Icon_Chooser(
  $wp_customize,'lawn_care_single_postdate_icon',array(
		'label'	=> __('Add Post Date Icon','lawn-care'),
		'transport' => 'refresh',
		'section'	=> 'lawn_care_single_blog_settings',
		'setting'	=> 'lawn_care_single_postdate_icon',
		'type'		=> 'icon'
	)));

  $wp_customize->add_setting( 'lawn_care_single_postdate',array(
    'default' => 1,
    'transport' => 'refresh',
    'sanitize_callback' => 'lawn_care_switch_sanitization'
	) );
	$wp_customize->add_control( new Lawn_Care_Toggle_Switch_Custom_Control( $wp_customize, 'lawn_care_single_postdate',array(
		'label' => esc_html__( 'Show / Hide Date','lawn-care' ),
		'section' => 'lawn_care_single_blog_settings'
	)));

	$wp_customize->add_setting('lawn_care_single_author_icon',array(
		'default'	=> 'fas fa-user',
		'sanitize_callback'	=> 'sanitize_text_field'
	));
	$wp_customize->add_control(new Lawn_Care_Fontawesome_Icon_Chooser(
  $wp_customize,'lawn_care_single_author_icon',array(
		'label'	=> __('Add Author Icon','lawn-care'),
		'transport' => 'refresh',
		'section'	=> 'lawn_care_single_blog_settings',
		'setting'	=> 'lawn_care_single_author_icon',
		'type'		=> 'icon'
	)));

  $wp_customize->add_setting( 'lawn_care_single_author',array(
    'default' => 1,
    'transport' => 'refresh',
    'sanitize_callback' => 'lawn_care_switch_sanitization'
	) );
	$wp_customize->add_control( new Lawn_Care_Toggle_Switch_Custom_Control( $wp_customize, 'lawn_care_single_author',array(
    'label' => esc_html__( 'Show / Hide Author','lawn-care' ),
    'section' => 'lawn_care_single_blog_settings'
	)));

 	$wp_customize->add_setting('lawn_care_single_comments_icon',array(
		'default'	=> 'fa fa-comments',
		'sanitize_callback'	=> 'sanitize_text_field'
	));
	$wp_customize->add_control(new Lawn_Care_Fontawesome_Icon_Chooser(
  $wp_customize,'lawn_care_single_comments_icon',array(
		'label'	=> __('Add Comments Icon','lawn-care'),
		'transport' => 'refresh',
		'section'	=> 'lawn_care_single_blog_settings',
		'setting'	=> 'lawn_care_single_comments_icon',
		'type'		=> 'icon'
	)));

	$wp_customize->add_setting( 'lawn_care_single_comments',array(
    'default' => 1,
    'transport' => 'refresh',
    'sanitize_callback' => 'lawn_care_switch_sanitization'
	) );
	$wp_customize->add_control( new Lawn_Care_Toggle_Switch_Custom_Control( $wp_customize, 'lawn_care_single_comments',array(
    'label' => esc_html__( 'Show / Hide Comments','lawn-care' ),
    'section' => 'lawn_care_single_blog_settings'
	)));

	$wp_customize->add_setting('lawn_care_single_time_icon',array(
		'default'	=> 'fas fa-clock',
		'sanitize_callback'	=> 'sanitize_text_field'
	));
	$wp_customize->add_control(new Lawn_Care_Fontawesome_Icon_Chooser(
  $wp_customize,'lawn_care_single_time_icon',array(
		'label'	=> __('Add Time Icon','lawn-care'),
		'transport' => 'refresh',
		'section'	=> 'lawn_care_single_blog_settings',
		'setting'	=> 'lawn_care_single_time_icon',
		'type'		=> 'icon'
	)));

	$wp_customize->add_setting( 'lawn_care_single_time',array(
    'default' => 1,
    'transport' => 'refresh',
    'sanitize_callback' => 'lawn_care_switch_sanitization'
	) );
	$wp_customize->add_control( new Lawn_Care_Toggle_Switch_Custom_Control( $wp_customize, 'lawn_care_single_time',array(
    'label' => esc_html__( 'Show / Hide Time','lawn-care' ),
    'section' => 'lawn_care_single_blog_settings'
	)));

	$wp_customize->add_setting( 'lawn_care_toggle_tags',array(
		'default' => 0,
		'transport' => 'refresh',
		'sanitize_callback' => 'lawn_care_switch_sanitization'
	));
  $wp_customize->add_control( new Lawn_Care_Toggle_Switch_Custom_Control( $wp_customize, 'lawn_care_toggle_tags', array(
		'label' => esc_html__( 'Show / Hide Tags','lawn-care' ),
		'section' => 'lawn_care_single_blog_settings'
  )));

	$wp_customize->add_setting( 'lawn_care_single_post_breadcrumb',array(
		'default' => 1,
		'transport' => 'refresh',
		'sanitize_callback' => 'lawn_care_switch_sanitization'
  ) );
 	$wp_customize->add_control( new Lawn_Care_Toggle_Switch_Custom_Control( $wp_customize, 'lawn_care_single_post_breadcrumb',array(
		'label' => esc_html__( 'Show / Hide Breadcrumb','lawn-care' ),
		'section' => 'lawn_care_single_blog_settings'
  )));

	// Single Posts Category
 	 $wp_customize->add_setting( 'lawn_care_single_post_category',array(
		'default' => true,
		'transport' => 'refresh',
		'sanitize_callback' => 'lawn_care_switch_sanitization'
  	) );
	$wp_customize->add_control( new Lawn_Care_Toggle_Switch_Custom_Control( $wp_customize, 'lawn_care_single_post_category',array(
		'label' => esc_html__( 'Show / Hide Category','lawn-care' ),
		'section' => 'lawn_care_single_blog_settings'
  	)));

  	$wp_customize->add_setting( 'lawn_care_singlepost_image_box_shadow', array(
		'default'              => '0',
		'transport' 		   => 'refresh',
		'sanitize_callback'    => 'lawn_care_sanitize_number_range'
	) );
	$wp_customize->add_control( 'lawn_care_singlepost_image_box_shadow', array(
		'label'       => esc_html__( 'Single post Image Box Shadow','lawn-care' ),
		'section'     => 'lawn_care_single_blog_settings',
		'type'        => 'range',
		'input_attrs' => array(
			'step'             => 1,
			'min'              => 1,
			'max'              => 50,
		),
	) );

	$wp_customize->add_setting('lawn_care_single_post_meta_field_separator',array(
		'default'=> '|',
		'sanitize_callback'	=> 'sanitize_text_field'
	));
	$wp_customize->add_control('lawn_care_single_post_meta_field_separator',array(
		'label'	=> __('Add Meta Separator','lawn-care'),
		'description' => __('Add the seperator for meta box. Example: "|", "/", etc.','lawn-care'),
		'section'=> 'lawn_care_single_blog_settings',
		'type'=> 'text'
	));

	$wp_customize->add_setting( 'lawn_care_single_blog_post_navigation_show_hide',array(
		'default' => 1,
		'transport' => 'refresh',
		'sanitize_callback' => 'lawn_care_switch_sanitization'
	));
	$wp_customize->add_control( new Lawn_Care_Toggle_Switch_Custom_Control( $wp_customize, 'lawn_care_single_blog_post_navigation_show_hide', array(
	  'label' => esc_html__( 'Show / Hide Post Navigation','lawn-care' ),
	  'section' => 'lawn_care_single_blog_settings'
	)));

	$wp_customize->add_setting( 'lawn_care_single_post_breadcrumb',array(
		'default' => 1,
		'transport' => 'refresh',
		'sanitize_callback' => 'lawn_care_switch_sanitization'
    ) );
 	$wp_customize->add_control( new Lawn_Care_Toggle_Switch_Custom_Control( $wp_customize, 'lawn_care_single_post_breadcrumb',array(
		'label' => esc_html__( 'Show / Hide Breadcrumb','lawn-care' ),
		'section' => 'lawn_care_single_blog_settings'
  )));

	//navigation text
	$wp_customize->add_setting('lawn_care_single_blog_prev_navigation_text',array(
		'default'=> 'PREVIOUS',
		'sanitize_callback'	=> 'sanitize_text_field'
	));
	$wp_customize->add_control('lawn_care_single_blog_prev_navigation_text',array(
		'label'	=> __('Post Navigation Text','lawn-care'),
		'input_attrs' => array(
      'placeholder' => __( 'PREVIOUS', 'lawn-care' ),
      ),
		'section'=> 'lawn_care_single_blog_settings',
		'type'=> 'text'
	));

	$wp_customize->add_setting('lawn_care_single_blog_next_navigation_text',array(
		'default'=> 'NEXT',
		'sanitize_callback'	=> 'sanitize_text_field'
	));
	$wp_customize->add_control('lawn_care_single_blog_next_navigation_text',array(
		'label'	=> __('Post Navigation Text','lawn-care'),
		'input_attrs' => array(
      'placeholder' => __( 'NEXT', 'lawn-care' ),
        ),
		'section'=> 'lawn_care_single_blog_settings',
		'type'=> 'text'
	));

	$wp_customize->add_setting('lawn_care_single_blog_comment_title',array(
		'default'=> 'Leave a Reply',
		'sanitize_callback'	=> 'sanitize_text_field'
	));

	$wp_customize->add_control('lawn_care_single_blog_comment_title',array(
		'label'	=> __('Add Comment Title','lawn-care'),
		'input_attrs' => array(
      'placeholder' => __( 'Leave a Reply', 'lawn-care' ),
    	),
		'section'=> 'lawn_care_single_blog_settings',
		'type'=> 'text'
	));

	$wp_customize->add_setting('lawn_care_single_blog_comment_button_text',array(
		'default'=> 'Post Comment',
		'sanitize_callback'	=> 'sanitize_text_field'
	));

	$wp_customize->add_control('lawn_care_single_blog_comment_button_text',array(
		'label'	=> __('Add Comment Button Text','lawn-care'),
		'input_attrs' => array(
    'placeholder' => __( 'Post Comment', 'lawn-care' ),
        ),
		'section'=> 'lawn_care_single_blog_settings',
		'type'=> 'text'
	));

	$wp_customize->add_setting('lawn_care_single_blog_comment_width',array(
		'default'=> '',
		'sanitize_callback'	=> 'sanitize_text_field'
	));
	$wp_customize->add_control('lawn_care_single_blog_comment_width',array(
		'label'	=> __('Comment Form Width','lawn-care'),
		'description'	=> __('Enter a value in %. Example:50%','lawn-care'),
		'input_attrs' => array(
      'placeholder' => __( '100%', 'lawn-care' ),
        ),
		'section'=> 'lawn_care_single_blog_settings',
		'type'=> 'text'
	));

	 // Grid layout setting
	$wp_customize->add_section( 'lawn_care_grid_layout_settings', array(
		'title' => __( 'Grid Layout Settings', 'lawn-care' ),
		'panel' => 'lawn_care_blog_post_parent_panel',
	));

	$wp_customize->add_setting('lawn_care_grid_postdate_icon',array(
		'default'	=> 'fas fa-calendar-alt',
		'sanitize_callback'	=> 'sanitize_text_field'
	));
	$wp_customize->add_control(new Lawn_Care_Fontawesome_Icon_Chooser(
        $wp_customize,'lawn_care_grid_postdate_icon',array(
		'label'	=> __('Add Post Date Icon','lawn-care'),
		'transport' => 'refresh',
		'section'	=> 'lawn_care_grid_layout_settings',
		'setting'	=> 'lawn_care_grid_postdate_icon',
		'type'		=> 'icon'
	)));

	$wp_customize->add_setting( 'lawn_care_grid_postdate',array(
	  'default' => 1,
	  'transport' => 'refresh',
	  'sanitize_callback' => 'lawn_care_switch_sanitization'
  ) );
  $wp_customize->add_control( new Lawn_Care_Toggle_Switch_Custom_Control( $wp_customize, 'lawn_care_grid_postdate',array(
    'label' => esc_html__( 'Show / Hide Post Date','lawn-care' ),
    'section' => 'lawn_care_grid_layout_settings'
  )));

	$wp_customize->add_setting('lawn_care_grid_author_icon',array(
		'default'	=> 'fas fa-user',
		'sanitize_callback'	=> 'sanitize_text_field'
	));
	$wp_customize->add_control(new Lawn_Care_Fontawesome_Icon_Chooser(
        $wp_customize,'lawn_care_grid_author_icon',array(
		'label'	=> __('Add Author Icon','lawn-care'),
		'transport' => 'refresh',
		'section'	=> 'lawn_care_grid_layout_settings',
		'setting'	=> 'lawn_care_grid_author_icon',
		'type'		=> 'icon'
	)));

  $wp_customize->add_setting( 'lawn_care_grid_author',array(
		'default' => 1,
		'transport' => 'refresh',
		'sanitize_callback' => 'lawn_care_switch_sanitization'
  ) );
  $wp_customize->add_control( new Lawn_Care_Toggle_Switch_Custom_Control( $wp_customize, 'lawn_care_grid_author',array(
		'label' => esc_html__( 'Show / Hide Author','lawn-care' ),
		'section' => 'lawn_care_grid_layout_settings'
  )));

  $wp_customize->add_setting('lawn_care_grid_comments_icon',array(
		'default'	=> 'fa fa-comments',
		'sanitize_callback'	=> 'sanitize_text_field'
	));
	$wp_customize->add_control(new Lawn_Care_Fontawesome_Icon_Chooser(
        $wp_customize,'lawn_care_grid_comments_icon',array(
		'label'	=> __('Add Comments Icon','lawn-care'),
		'transport' => 'refresh',
		'section'	=> 'lawn_care_grid_layout_settings',
		'setting'	=> 'lawn_care_grid_comments_icon',
		'type'		=> 'icon'
	)));

  $wp_customize->add_setting( 'lawn_care_grid_time',array(
		'default' => 1,
		'transport' => 'refresh',
		'sanitize_callback' => 'lawn_care_switch_sanitization'
  ) );
  $wp_customize->add_control( new Lawn_Care_Toggle_Switch_Custom_Control( $wp_customize, 'lawn_care_grid_time',array(
		'label' => esc_html__( 'Show / Hide Time','lawn-care' ),
		'section' => 'lawn_care_grid_layout_settings'
  )));

  $wp_customize->add_setting('lawn_care_grid_time_icon',array(
		'default'	=> 'fas fa-clock',
		'sanitize_callback'	=> 'sanitize_text_field'
	));
	$wp_customize->add_control(new Lawn_Care_Fontawesome_Icon_Chooser(
        $wp_customize,'lawn_care_grid_time_icon',array(
		'label'	=> __('Add Time Icon','lawn-care'),
		'transport' => 'refresh',
		'section'	=> 'lawn_care_grid_layout_settings',
		'setting'	=> 'lawn_care_grid_time_icon',
		'type'		=> 'icon'
	)));

  	$wp_customize->add_setting( 'lawn_care_grid_comments',array(
		'default' => 1,
		'transport' => 'refresh',
		'sanitize_callback' => 'lawn_care_switch_sanitization'
  	) );
  	$wp_customize->add_control( new Lawn_Care_Toggle_Switch_Custom_Control( $wp_customize, 'lawn_care_grid_comments',array(
		'label' => esc_html__( 'Show / Hide Comments','lawn-care' ),
		'section' => 'lawn_care_grid_layout_settings'
  	)));

  $wp_customize->add_setting( 'lawn_care_grid_image_hide_show',array(
		'default' => 1,
		'transport' => 'refresh',
		'sanitize_callback' => 'lawn_care_switch_sanitization'
	));
  	$wp_customize->add_control( new Lawn_Care_Toggle_Switch_Custom_Control( $wp_customize, 'lawn_care_grid_image_hide_show', array(
		'label' => esc_html__( 'Show / Hide Featured Image','lawn-care' ),
		'section' => 'lawn_care_grid_layout_settings'
  	)));

 	$wp_customize->add_setting('lawn_care_grid_post_meta_field_separator',array(
		'default'=> '|',
		'sanitize_callback'	=> 'sanitize_text_field'
	));
	$wp_customize->add_control('lawn_care_grid_post_meta_field_separator',array(
		'label'	=> __('Add Meta Separator','lawn-care'),
		'description' => __('Add the seperator for meta box. Example: "|", "/", etc.','lawn-care'),
		'section'=> 'lawn_care_grid_layout_settings',
		'type'=> 'text'
	));

  $wp_customize->add_setting('lawn_care_display_grid_posts_settings',array(
    'default' => 'Into Blocks',
    'transport' => 'refresh',
    'sanitize_callback' => 'lawn_care_sanitize_choices'
	));
	$wp_customize->add_control('lawn_care_display_grid_posts_settings',array(
    'type' => 'select',
    'label' => __('Display Grid Posts','lawn-care'),
    'section' => 'lawn_care_grid_layout_settings',
    'choices' => array(
    	'Into Blocks' => __('Into Blocks','lawn-care'),
      'Without Blocks' => __('Without Blocks','lawn-care')
      ),
	) );

	$wp_customize->add_setting('lawn_care_grid_button_text',array(
		'default'=> esc_html__('Read More','lawn-care'),
		'sanitize_callback'	=> 'sanitize_text_field'
	));
	$wp_customize->add_control('lawn_care_grid_button_text',array(
		'label'	=> esc_html__('Add Button Text','lawn-care'),
		'input_attrs' => array(
      'placeholder' => esc_html__( 'Read More', 'lawn-care' ),
        ),
		'section'=> 'lawn_care_grid_layout_settings',
		'type'=> 'text'
	));

	$wp_customize->add_setting('lawn_care_grid_excerpt_suffix',array(
		'default'=> '',
		'sanitize_callback'	=> 'sanitize_text_field'
	));
	$wp_customize->add_control('lawn_care_grid_excerpt_suffix',array(
		'label'	=> __('Add Excerpt Suffix','lawn-care'),
		'input_attrs' => array(
        'placeholder' => __( '[...]', 'lawn-care' ),
        ),
		'section'=> 'lawn_care_grid_layout_settings',
		'type'=> 'text'
	));

  $wp_customize->add_setting('lawn_care_grid_excerpt_settings',array(
    'default' => 'Excerpt',
    'transport' => 'refresh',
    'sanitize_callback' => 'lawn_care_sanitize_choices'
	));
	$wp_customize->add_control('lawn_care_grid_excerpt_settings',array(
    'type' => 'select',
    'label' => esc_html__('Grid Post Content','lawn-care'),
    'section' => 'lawn_care_grid_layout_settings',
    'choices' => array(
    	'Content' => esc_html__('Content','lawn-care'),
      'Excerpt' => esc_html__('Excerpt','lawn-care'),
      'No Content' => esc_html__('No Content','lawn-care')
    ),
	) );

  $wp_customize->add_setting( 'lawn_care_grid_featured_image_border_radius', array(
		'default'              => '0',
		'transport' 		   => 'refresh',
		'sanitize_callback'    => 'lawn_care_sanitize_number_range'
	) );
	$wp_customize->add_control( 'lawn_care_grid_featured_image_border_radius', array(
		'label'       => esc_html__( 'Grid Featured Image Border Radius','lawn-care' ),
		'section'     => 'lawn_care_grid_layout_settings',
		'type'        => 'range',
		'input_attrs' => array(
			'step'             => 1,
			'min'              => 1,
			'max'              => 50,
		),
	) );

	$wp_customize->add_setting( 'lawn_care_grid_featured_image_box_shadow', array(
		'default'              => '0',
		'transport' 		   => 'refresh',
		'sanitize_callback'    => 'lawn_care_sanitize_number_range'
	) );
	$wp_customize->add_control( 'lawn_care_grid_featured_image_box_shadow', array(
		'label'       => esc_html__( 'Grid Featured Image Box Shadow','lawn-care' ),
		'section'     => 'lawn_care_grid_layout_settings',
		'type'        => 'range',
		'input_attrs' => array(
			'step'             => 1,
			'min'              => 1,
			'max'              => 50,
		),
	) );

	//Other
	$wp_customize->add_panel( 'lawn_care_other_parent_panel', array(
		'title' => esc_html__( 'Other Settings', 'lawn-care' ),
		'panel' => 'lawn_care_panel_id',
		'priority' => 20,
	));

	// Layout
	$wp_customize->add_section( 'lawn_care_left_right', array(
  	'title' => esc_html__('General Settings', 'lawn-care'),
		'panel' => 'lawn_care_other_parent_panel'
	) );

	$wp_customize->add_setting('lawn_care_width_option',array(
    'default' => 'Full Width',
    'sanitize_callback' => 'lawn_care_sanitize_choices'
	));
	$wp_customize->add_control(new Lawn_Care_Image_Radio_Control($wp_customize, 'lawn_care_width_option', array(
    'type' => 'select',
    'label' => esc_html__('Width Layouts','lawn-care'),
    'description' => esc_html__('Here you can change the width layout of Website.','lawn-care'),
    'section' => 'lawn_care_left_right',
    'choices' => array(
        'Full Width' => esc_url(get_template_directory_uri()).'/assets/images/full-width.png',
        'Wide Width' => esc_url(get_template_directory_uri()).'/assets/images/wide-width.png',
        'Boxed' => esc_url(get_template_directory_uri()).'/assets/images/boxed-width.png',
  ))));

	$wp_customize->add_setting('lawn_care_page_layout',array(
    'default' => 'One_Column',
    'sanitize_callback' => 'lawn_care_sanitize_choices'
	));
	$wp_customize->add_control('lawn_care_page_layout',array(
    'type' => 'select',
    'label' => esc_html__('Page Sidebar Layout','lawn-care'),
    'description' => esc_html__('Here you can change the sidebar layout for pages. ','lawn-care'),
    'section' => 'lawn_care_left_right',
    'choices' => array(
        'Left_Sidebar' => esc_html__('Left Sidebar','lawn-care'),
        'Right_Sidebar' => esc_html__('Right Sidebar','lawn-care'),
        'One_Column' => esc_html__('One Column','lawn-care')
    ),
	) );
	
    // Pre-Loader
	$wp_customize->add_setting( 'lawn_care_loader_enable',array(
    'default' => 0,
    'transport' => 'refresh',
    'sanitize_callback' => 'lawn_care_switch_sanitization'
  ) );
  $wp_customize->add_control( new Lawn_Care_Toggle_Switch_Custom_Control( $wp_customize, 'lawn_care_loader_enable',array(
    'label' => esc_html__( 'Pre-Loader','lawn-care' ),
    'section' => 'lawn_care_left_right'
  )));

	$wp_customize->add_setting('lawn_care_preloader_bg_color', array(
		'default'           => '#299922',
		'sanitize_callback' => 'sanitize_hex_color',
	));
	$wp_customize->add_control(new WP_Customize_Color_Control($wp_customize, 'lawn_care_preloader_bg_color', array(
		'label'    => __('Pre-Loader Background Color', 'lawn-care'),
		'section'  => 'lawn_care_left_right',
	)));

	$wp_customize->add_setting('lawn_care_preloader_border_color', array(
		'default'           => '#ffffff',
		'sanitize_callback' => 'sanitize_hex_color',
	));
	$wp_customize->add_control(new WP_Customize_Color_Control($wp_customize, 'lawn_care_preloader_border_color', array(
		'label'    => __('Pre-Loader Border Color', 'lawn-care'),
		'section'  => 'lawn_care_left_right',
	)));

	$wp_customize->add_setting('lawn_care_preloader_bg_img',array(
		'default'	=> '',
		'sanitize_callback'	=> 'esc_url_raw',
	));
	$wp_customize->add_control( new WP_Customize_Image_Control($wp_customize,'lawn_care_preloader_bg_img',array(
    'label' => __('Preloader Background Image','lawn-care'),
    'section' => 'lawn_care_left_right'
	)));

	$wp_customize->add_setting( 'lawn_care_single_page_breadcrumb1',array(
		'default' => 1,
		'transport' => 'refresh',
		'sanitize_callback' => 'lawn_care_switch_sanitization'
  ) );
  $wp_customize->add_control( new Lawn_Care_Toggle_Switch_Custom_Control( $wp_customize, 'lawn_care_single_page_breadcrumb1',array(
		'label' => esc_html__( 'Show / Hide Page Breadcrumb','lawn-care' ),
		'section' => 'lawn_care_left_right'
  )));

	$wp_customize->add_setting('lawn_care_breadcrumbs_alignment',array(
        'default' => 'Left',
        'sanitize_callback' => 'lawn_care_sanitize_choices'
	));
	$wp_customize->add_control('lawn_care_breadcrumbs_alignment',array(
        'type' => 'select',
        'label' => __('Breadcrumbs Alignment','lawn-care'),
        'section' => 'lawn_care_left_right',
        'choices' => array(
            'Left' => __('Left','lawn-care'),
            'Right' => __('Right','lawn-care'),
            'Center' => __('Center','lawn-care'),
        ),
	) );

  //404 Page Setting
	$wp_customize->add_section('lawn_care_404_page',array(
		'title'	=> __('404 Page Settings','lawn-care'),
		'panel' => 'lawn_care_other_parent_panel',
	));

	$wp_customize->add_setting('lawn_care_404_page_title',array(
		'default'=> '',
		'sanitize_callback'	=> 'sanitize_text_field'
	));

	$wp_customize->add_control('lawn_care_404_page_title',array(
		'label'	=> __('Add Title','lawn-care'),
		'input_attrs' => array(
            'placeholder' => __( '404 Not Found', 'lawn-care' ),
        ),
		'section'=> 'lawn_care_404_page',
		'type'=> 'text'
	));

	$wp_customize->add_setting('lawn_care_404_page_content',array(
		'default'=> '',
		'sanitize_callback'	=> 'sanitize_text_field'
	));
	$wp_customize->add_control('lawn_care_404_page_content',array(
		'label'	=> __('Add Text','lawn-care'),
		'input_attrs' => array(
            'placeholder' => __( 'Looks like you have taken a wrong turn, Dont worry, it happens to the best of us.', 'lawn-care' ),
        ),
		'section'=> 'lawn_care_404_page',
		'type'=> 'text'
	));

	$wp_customize->add_setting('lawn_care_404_page_button_text',array(
		'default'=> '',
		'sanitize_callback'	=> 'sanitize_text_field'
	));
	$wp_customize->add_control('lawn_care_404_page_button_text',array(
		'label'	=> __('Add Button Text','lawn-care'),
		'input_attrs' => array(
            'placeholder' => __( 'Go Back', 'lawn-care' ),
        ),
		'section'=> 'lawn_care_404_page',
		'type'=> 'text'
	));

	//No Result Page Setting
	$wp_customize->add_section('lawn_care_no_results_page',array(
		'title'	=> __('No Results Page Settings','lawn-care'),
		'panel' => 'lawn_care_other_parent_panel',
	));

	$wp_customize->add_setting('lawn_care_no_results_page_title',array(
		'default'=> '',
		'sanitize_callback'	=> 'sanitize_text_field'
	));

	$wp_customize->add_control('lawn_care_no_results_page_title',array(
		'label'	=> __('Add Title','lawn-care'),
		'input_attrs' => array(
            'placeholder' => __( 'Nothing Found', 'lawn-care' ),
        ),
		'section'=> 'lawn_care_no_results_page',
		'type'=> 'text'
	));

	$wp_customize->add_setting('lawn_care_no_results_page_content',array(
		'default'=> '',
		'sanitize_callback'	=> 'sanitize_text_field'
	));
	$wp_customize->add_control('lawn_care_no_results_page_content',array(
		'label'	=> __('Add Text','lawn-care'),
		'input_attrs' => array(
            'placeholder' => __( 'Sorry, but nothing matched your search terms. Please try again with some different keywords.', 'lawn-care' ),
        ),
		'section'=> 'lawn_care_no_results_page',
		'type'=> 'text'
	));

	//Social Icon Setting
	$wp_customize->add_section('lawn_care_social_icon_settings',array(
		'title'	=> __('Sidebar Social Icons Settings','lawn-care'),
		'panel' => 'lawn_care_other_parent_panel',
	));

	$wp_customize->add_setting('lawn_care_social_icon_font_size',array(
		'default'=> '',
		'sanitize_callback'	=> 'sanitize_text_field'
	));
	$wp_customize->add_control('lawn_care_social_icon_font_size',array(
		'label'	=> __('Icon Font Size','lawn-care'),
		'description'	=> __('Enter a value in pixels. Example:20px','lawn-care'),
		'input_attrs' => array(
            'placeholder' => __( '10px', 'lawn-care' ),
        ),
		'section'=> 'lawn_care_social_icon_settings',
		'type'=> 'text'
	));

	$wp_customize->add_setting('lawn_care_social_icon_padding',array(
		'default'=> '',
		'sanitize_callback'	=> 'sanitize_text_field'
	));
	$wp_customize->add_control('lawn_care_social_icon_padding',array(
		'label'	=> __('Icon Padding','lawn-care'),
		'description'	=> __('Enter a value in pixels. Example:20px','lawn-care'),
		'input_attrs' => array(
            'placeholder' => __( '10px', 'lawn-care' ),
        ),
		'section'=> 'lawn_care_social_icon_settings',
		'type'=> 'text'
	));

	$wp_customize->add_setting('lawn_care_social_icon_width',array(
		'default'=> '',
		'sanitize_callback'	=> 'sanitize_text_field'
	));
	$wp_customize->add_control('lawn_care_social_icon_width',array(
		'label'	=> __('Icon Width','lawn-care'),
		'description'	=> __('Enter a value in pixels. Example:20px','lawn-care'),
		'input_attrs' => array(
            'placeholder' => __( '10px', 'lawn-care' ),
        ),
		'section'=> 'lawn_care_social_icon_settings',
		'type'=> 'text'
	));

	$wp_customize->add_setting('lawn_care_social_icon_height',array(
		'default'=> '',
		'sanitize_callback'	=> 'sanitize_text_field'
	));
	$wp_customize->add_control('lawn_care_social_icon_height',array(
		'label'	=> __('Icon Height','lawn-care'),
		'description'	=> __('Enter a value in pixels. Example:20px','lawn-care'),
		'input_attrs' => array(
            'placeholder' => __( '10px', 'lawn-care' ),
        ),
		'section'=> 'lawn_care_social_icon_settings',
		'type'=> 'text'
	));

	//Responsive Media Settings
	$wp_customize->add_section('lawn_care_responsive_media',array(
		'title'	=> esc_html__('Responsive Media','lawn-care'),
		'panel' => 'lawn_care_other_parent_panel',
	));

	$wp_customize->add_setting( 'lawn_care_stickyheader_hide_show',array(
    'default' => 0,
    'transport' => 'refresh',
    'sanitize_callback' => 'lawn_care_switch_sanitization'
  ));  
  $wp_customize->add_control( new Lawn_Care_Toggle_Switch_Custom_Control( $wp_customize, 'lawn_care_stickyheader_hide_show',array(
    'label' => esc_html__( 'Show / Hide Sticky Header','lawn-care' ),
    'section' => 'lawn_care_responsive_media'
  )));

	$wp_customize->add_setting( 'lawn_care_sidebar_hide_show',array(
		'default' => 1,
		'transport' => 'refresh',
		'sanitize_callback' => 'lawn_care_switch_sanitization'
  ));
  $wp_customize->add_control( new Lawn_Care_Toggle_Switch_Custom_Control( $wp_customize, 'lawn_care_sidebar_hide_show',array(
    	'label' => esc_html__( 'Show / Hide Sidebar','lawn-care' ),
    	'section' => 'lawn_care_responsive_media'
  )));

	$wp_customize->add_setting( 'lawn_care_responsive_preloader_hide',array(
		'default' => false,
		'transport' => 'refresh',
		'sanitize_callback' => 'lawn_care_switch_sanitization'
	) );
	$wp_customize->add_control( new Lawn_Care_Toggle_Switch_Custom_Control( $wp_customize, 'lawn_care_responsive_preloader_hide',array(
		'label' => esc_html__( 'Show / Hide Preloader','lawn-care' ),
		'section' => 'lawn_care_responsive_media'
	)));

	$wp_customize->add_setting( 'lawn_care_responsive_topbar_hide',array(
		'default' => true,
		'transport' => 'refresh',
		'sanitize_callback' => 'lawn_care_switch_sanitization'
	) );
	$wp_customize->add_control( new Lawn_Care_Toggle_Switch_Custom_Control( $wp_customize, 'lawn_care_responsive_topbar_hide',array(
		'label' => esc_html__( 'Show / Hide Topbar','lawn-care' ),
		'section' => 'lawn_care_responsive_media'
	)));

	$wp_customize->add_setting( 'lawn_care_responsive_slider_hide',array(
		'default' => true,
		'transport' => 'refresh',
		'sanitize_callback' => 'lawn_care_switch_sanitization'
	) );
	$wp_customize->add_control( new Lawn_Care_Toggle_Switch_Custom_Control( $wp_customize, 'lawn_care_responsive_slider_hide',array(
		'label' => esc_html__( 'Show / Hide Slider','lawn-care' ),
		'section' => 'lawn_care_responsive_media'
	)));

  $wp_customize->add_setting( 'lawn_care_resp_scroll_top_hide_show',array(
		'default' => 1,
		'transport' => 'refresh',
		'sanitize_callback' => 'lawn_care_switch_sanitization'
	));
	$wp_customize->add_control( new Lawn_Care_Toggle_Switch_Custom_Control( $wp_customize, 'lawn_care_resp_scroll_top_hide_show',array(
    	'label' => esc_html__( 'Show / Hide Scroll To Top','lawn-care' ),
    	'section' => 'lawn_care_responsive_media'
	)));

	$wp_customize->add_setting('lawn_care_res_open_menu_icon',array(
		'default'	=> 'fas fa-bars',
		'sanitize_callback'	=> 'sanitize_text_field'
	));
	$wp_customize->add_control(new Lawn_Care_Fontawesome_Icon_Chooser(
        $wp_customize,'lawn_care_res_open_menu_icon',array(
		'label'	=> __('Add Open Menu Icon','lawn-care'),
		'transport' => 'refresh',
		'section'	=> 'lawn_care_responsive_media',
		'setting'	=> 'lawn_care_res_open_menu_icon',
		'type'		=> 'icon'
	)));

	$wp_customize->add_setting('lawn_care_res_close_menu_icon',array(
		'default'	=> 'fas fa-times',
		'sanitize_callback'	=> 'sanitize_text_field'
	));
	$wp_customize->add_control(new Lawn_Care_Fontawesome_Icon_Chooser(
        $wp_customize,'lawn_care_res_close_menu_icon',array(
		'label'	=> __('Add Close Menu Icon','lawn-care'),
		'transport' => 'refresh',
		'section'	=> 'lawn_care_responsive_media',
		'setting'	=> 'lawn_care_res_close_menu_icon',
		'type'		=> 'icon'
	)));

	$wp_customize->add_setting('lawn_care_resp_menu_toggle_btn_bg_color', array(
		'default'           => '#299922',
		'sanitize_callback' => 'sanitize_hex_color',
	));
	$wp_customize->add_control(new WP_Customize_Color_Control($wp_customize, 'lawn_care_resp_menu_toggle_btn_bg_color', array(
		'label'    => __('Toggle Button Bg Color', 'lawn-care'),
		'section'  => 'lawn_care_responsive_media',
	)));

  //Woocommerce settings
	$wp_customize->add_section('lawn_care_woocommerce_section', array(
		'title'    => __('WooCommerce Layout', 'lawn-care'),
		'priority' => null,
		'panel'    => 'woocommerce',
	));

	//Selective Refresh
	$wp_customize->selective_refresh->add_partial( 'lawn_care_woocommerce_shop_page_sidebar', array( 'selector' => '.post-type-archive-product #sidebar',
		'render_callback' => 'lawn_care_customize_partial_lawn_care_woocommerce_shop_page_sidebar', ) );

    //Woocommerce Shop Page Sidebar
	$wp_customize->add_setting( 'lawn_care_woocommerce_shop_page_sidebar',array(
		'default' => 0,
		'transport' => 'refresh',
		'sanitize_callback' => 'lawn_care_switch_sanitization'
  ) );
  $wp_customize->add_control( new Lawn_Care_Toggle_Switch_Custom_Control( $wp_customize, 'lawn_care_woocommerce_shop_page_sidebar',array(
		'label' => esc_html__( 'Show / Hide Shop Page Sidebar','lawn-care' ),
		'section' => 'lawn_care_woocommerce_section'
  )));

   $wp_customize->add_setting('lawn_care_shop_page_layout',array(
    'default' => 'Right Sidebar',
    'sanitize_callback' => 'lawn_care_sanitize_choices'
	));
	$wp_customize->add_control('lawn_care_shop_page_layout',array(
    'type' => 'select',
    'label' => __('Shop Page Sidebar Layout','lawn-care'),
    'section' => 'lawn_care_woocommerce_section',
    'choices' => array(
        'Left Sidebar' => __('Left Sidebar','lawn-care'),
        'Right Sidebar' => __('Right Sidebar','lawn-care'),
    ),
	) );

   //Selective Refresh
	$wp_customize->selective_refresh->add_partial( 'lawn_care_woocommerce_single_product_page_sidebar', array( 'selector' => '.single-product #sidebar',
		'render_callback' => 'lawn_care_customize_partial_lawn_care_woocommerce_single_product_page_sidebar', ) );

    //Woocommerce Single Product page Sidebar
	$wp_customize->add_setting( 'lawn_care_woocommerce_single_product_page_sidebar',array(
		'default' => 0,
		'transport' => 'refresh',
		'sanitize_callback' => 'lawn_care_switch_sanitization'
   ) );
 	$wp_customize->add_control( new Lawn_Care_Toggle_Switch_Custom_Control( $wp_customize, 'lawn_care_woocommerce_single_product_page_sidebar',array(
		'label' => esc_html__( 'Show / Hide Single Product Sidebar','lawn-care' ),
		'section' => 'lawn_care_woocommerce_section'
  )));

   $wp_customize->add_setting('lawn_care_single_product_layout',array(
    'default' => 'Right Sidebar',
    'sanitize_callback' => 'lawn_care_sanitize_choices'
	));
	$wp_customize->add_control('lawn_care_single_product_layout',array(
    'type' => 'select',
    'label' => __('Single Product Sidebar Layout','lawn-care'),
    'section' => 'lawn_care_woocommerce_section',
    'choices' => array(
        'Left Sidebar' => __('Left Sidebar','lawn-care'),
        'Right Sidebar' => __('Right Sidebar','lawn-care'),
    ),
	) );

	//Products per page
    $wp_customize->add_setting('lawn_care_products_per_page',array(
		'default'=> '9',
		'sanitize_callback'	=> 'lawn_care_sanitize_float'
	));
	$wp_customize->add_control('lawn_care_products_per_page',array(
		'label'	=> __('Products Per Page','lawn-care'),
		'description' => __('Display on shop page','lawn-care'),
		'input_attrs' => array(
            'step'             => 1,
			'min'              => 0,
			'max'              => 50,
        ),
		'section'=> 'lawn_care_woocommerce_section',
		'type'=> 'number',
	));

    //Products per row
    $wp_customize->add_setting('lawn_care_products_per_row',array(
		'default'=> '4',
		'sanitize_callback'	=> 'lawn_care_sanitize_choices'
	));
	$wp_customize->add_control('lawn_care_products_per_row',array(
		'label'	=> __('Products Per Row','lawn-care'),
		'description' => __('Display on shop page','lawn-care'),
		'choices' => array(
            '2' => '2',
			'3' => '3',
			'4' => '4',
        ),
		'section'=> 'lawn_care_woocommerce_section',
		'type'=> 'select',
		));

	//Products padding
	$wp_customize->add_setting('lawn_care_products_padding_top_bottom',array(
		'default'=> '',
		'sanitize_callback'	=> 'sanitize_text_field'
	));
	$wp_customize->add_control('lawn_care_products_padding_top_bottom',array(
		'label'	=> __('Products Padding Top Bottom','lawn-care'),
		'description'	=> __('Enter a value in pixels. Example:20px','lawn-care'),
		'input_attrs' => array(
        'placeholder' => __( '10px', 'lawn-care' ),
        ),
		'section'=> 'lawn_care_woocommerce_section',
		'type'=> 'text'
	));

	$wp_customize->add_setting('lawn_care_products_padding_left_right',array(
		'default'=> '',
		'sanitize_callback'	=> 'sanitize_text_field'
	));
	$wp_customize->add_control('lawn_care_products_padding_left_right',array(
		'label'	=> __('Products Padding Left Right','lawn-care'),
		'description'	=> __('Enter a value in pixels. Example:20px','lawn-care'),
		'input_attrs' => array(
            'placeholder' => __( '10px', 'lawn-care' ),
        ),
		'section'=> 'lawn_care_woocommerce_section',
		'type'=> 'text'
	));

	//Products box shadow
	$wp_customize->add_setting( 'lawn_care_products_box_shadow', array(
		'default'              => '',
		'transport' 		   => 'refresh',
		'sanitize_callback'    => 'lawn_care_sanitize_number_range'
	) );
	$wp_customize->add_control( 'lawn_care_products_box_shadow', array(
		'label'       => esc_html__( 'Products Box Shadow','lawn-care' ),
		'section'     => 'lawn_care_woocommerce_section',
		'type'        => 'range',
		'input_attrs' => array(
			'step'             => 1,
			'min'              => 1,
			'max'              => 50,
		),
	) );

	//Products border radius
    $wp_customize->add_setting( 'lawn_care_products_border_radius', array(
		'default'              => '0',
		'transport' 		   => 'refresh',
		'sanitize_callback'    => 'lawn_care_sanitize_number_range'
	) );
	$wp_customize->add_control( 'lawn_care_products_border_radius', array(
		'label'       => esc_html__( 'Products Border Radius','lawn-care' ),
		'section'     => 'lawn_care_woocommerce_section',
		'type'        => 'range',
		'input_attrs' => array(
			'step'             => 1,
			'min'              => 1,
			'max'              => 50,
		),
	) );

	$wp_customize->add_setting( 'lawn_care_products_button_border_radius', array(
		'default'              => '0',
		'transport' 		   => 'refresh',
		'sanitize_callback'    => 'lawn_care_sanitize_number_range'
	) );
	$wp_customize->add_control( 'lawn_care_products_button_border_radius', array(
		'label'       => esc_html__( 'Products Button Border Radius','lawn-care' ),
		'section'     => 'lawn_care_woocommerce_section',
		'type'        => 'range',
		'input_attrs' => array(
			'step'             => 1,
			'min'              => 1,
			'max'              => 50,
		),
	) );

	$wp_customize->add_setting('lawn_care_products_btn_padding_top_bottom',array(
		'default'=> '',
		'sanitize_callback'	=> 'sanitize_text_field'
	));
	$wp_customize->add_control('lawn_care_products_btn_padding_top_bottom',array(
		'label'	=> __('Products Button Padding Top Bottom','lawn-care'),
		'description'	=> __('Enter a value in pixels. Example:20px','lawn-care'),
		'input_attrs' => array(
        'placeholder' => __( '10px', 'lawn-care' ),
        ),
		'section'=> 'lawn_care_woocommerce_section',
		'type'=> 'text'
	));

	$wp_customize->add_setting('lawn_care_products_btn_padding_left_right',array(
		'default'=> '',
		'sanitize_callback'	=> 'sanitize_text_field'
	));
	$wp_customize->add_control('lawn_care_products_btn_padding_left_right',array(
		'label'	=> __('Products Button Padding Left Right','lawn-care'),
		'description'	=> __('Enter a value in pixels. Example:20px','lawn-care'),
		'input_attrs' => array(
        'placeholder' => __( '10px', 'lawn-care' ),
        ),
		'section'=> 'lawn_care_woocommerce_section',
		'type'=> 'text'
	));

	$wp_customize->add_setting('lawn_care_woocommerce_sale_font_size',array(
		'default'=> '',
		'sanitize_callback'	=> 'sanitize_text_field'
	));
	$wp_customize->add_control('lawn_care_woocommerce_sale_font_size',array(
		'label'	=> __('Sale Font Size','lawn-care'),
		'description'	=> __('Enter a value in pixels. Example:20px','lawn-care'),
		'input_attrs' => array(
        'placeholder' => __( '10px', 'lawn-care' ),
        ),
		'section'=> 'lawn_care_woocommerce_section',
		'type'=> 'text'
	));

	//Products Sale Badge
	$wp_customize->add_setting('lawn_care_woocommerce_sale_position',array(
    'default' => 'right',
    'sanitize_callback' => 'lawn_care_sanitize_choices'
	));
	$wp_customize->add_control('lawn_care_woocommerce_sale_position',array(
    'type' => 'select',
    'label' => __('Sale Badge Position','lawn-care'),
    'section' => 'lawn_care_woocommerce_section',
    'choices' => array(
        'left' => __('Left','lawn-care'),
        'right' => __('Right','lawn-care'),
    ),
	) );

	$wp_customize->add_setting('lawn_care_woocommerce_sale_padding_top_bottom',array(
		'default'=> '',
		'sanitize_callback'	=> 'sanitize_text_field'
	));
	$wp_customize->add_control('lawn_care_woocommerce_sale_padding_top_bottom',array(
		'label'	=> __('Sale Padding Top Bottom','lawn-care'),
		'description'	=> __('Enter a value in pixels. Example:20px','lawn-care'),
		'input_attrs' => array(
            'placeholder' => __( '10px', 'lawn-care' ),
        ),
		'section'=> 'lawn_care_woocommerce_section',
		'type'=> 'text'
	));

	$wp_customize->add_setting('lawn_care_woocommerce_sale_padding_left_right',array(
		'default'=> '',
		'sanitize_callback'	=> 'sanitize_text_field'
	));
	$wp_customize->add_control('lawn_care_woocommerce_sale_padding_left_right',array(
		'label'	=> __('Sale Padding Left Right','lawn-care'),
		'description'	=> __('Enter a value in pixels. Example:20px','lawn-care'),
		'input_attrs' => array(
            'placeholder' => __( '10px', 'lawn-care' ),
        ),
		'section'=> 'lawn_care_woocommerce_section',
		'type'=> 'text'
	));

	$wp_customize->add_setting( 'lawn_care_woocommerce_sale_border_radius', array(
		'default'              => '0',
		'transport' 		   => 'refresh',
		'sanitize_callback'    => 'lawn_care_sanitize_number_range'
	) );
	$wp_customize->add_control( 'lawn_care_woocommerce_sale_border_radius', array(
		'label'       => esc_html__( 'Sale Border Radius','lawn-care' ),
		'section'     => 'lawn_care_woocommerce_section',
		'type'        => 'range',
		'input_attrs' => array(
			'step'             => 1,
			'min'              => 1,
			'max'              => 50,
		),
	) );

	// Related Product
  $wp_customize->add_setting( 'lawn_care_related_product_show_hide',array(
    'default' => 1,
    'transport' => 'refresh',
    'sanitize_callback' => 'lawn_care_switch_sanitization'
  ) );
  $wp_customize->add_control( new Lawn_Care_Toggle_Switch_Custom_Control( $wp_customize, 'lawn_care_related_product_show_hide',array(
    'label' => esc_html__( 'Show / Hide Related product','lawn-care' ),
    'section' => 'lawn_care_woocommerce_section'
  )));

}

add_action( 'customize_register', 'lawn_care_customize_register' );

load_template( trailingslashit( get_template_directory() ) . '/inc/logo/logo-resizer.php' );

/**
 * Singleton class for handling the theme's customizer integration.
 *
 * @since  1.0.0
 * @access public
 */
final class Lawn_Care_Customize {

	/**
	 * Returns the instance.
	 *
	 * @since  1.0.0
	 * @access public
	 * @return object
	 */
	public static function get_instance() {

		static $instance = null;

		if ( is_null( $instance ) ) {
			$instance = new self;
			$instance->setup_actions();
		}

		return $instance;
	}

	/**
	 * Constructor method.
	 *
	 * @since  1.0.0
	 * @access private
	 * @return void
	 */
	private function __construct() {}

	/**
	 * Sets up initial actions.
	 *
	 * @since  1.0.0
	 * @access private
	 * @return void
	 */
	private function setup_actions() {

		// Register panels, sections, settings, controls, and partials.
		add_action( 'customize_register', array( $this, 'sections' ) );

		// Register scripts and styles for the controls.
		add_action( 'customize_controls_enqueue_scripts', array( $this, 'enqueue_control_scripts' ), 0 );
	}

	/**
	 * Sets up the customizer sections.
	 *
	 * @since  1.0.0
	 * @access public
	 * @param  object  $manager
	 * @return void
	*/
	public function sections( $manager ) {

		// Load custom sections.
		load_template( trailingslashit( get_template_directory() ) . '/inc/section-pro.php' );

		// Register custom section types.
		$manager->register_section_type( 'Lawn_Care_Customize_Section_Pro' );

		// Register sections.
		$manager->add_section( new Lawn_Care_Customize_Section_Pro( $manager,'lawn_care_go_pro', array(
			'priority'   => 1,
			'title'    => esc_html__( 'LAWN CARE PRO', 'lawn-care' ),
			'pro_text' => esc_html__( 'UPGRADE PRO', 'lawn-care' ),
			'pro_url'  => esc_url('https://www.vwthemes.com/products/lawn-care-wordpress-theme'),
		) )	);

		$manager->add_section(new Lawn_Care_Customize_Section_Pro($manager,'lawn_care_get_started_link',array(
			'priority'   => 1,
			'title'    => esc_html__( 'DOCUMENTATION', 'lawn-care' ),
			'pro_text' => esc_html__( 'DOCS', 'lawn-care' ),
			'pro_url'  => esc_url('https://preview.vwthemesdemo.com/docs/free-lawn-care/'),
		)));
	}

	/**
	 * Loads theme customizer CSS.
	 *
	 * @since  1.0.0
	 * @access public
	 * @return void
	 */
	public function enqueue_control_scripts() {

		wp_enqueue_script( 'lawn-care-customize-controls', trailingslashit( get_template_directory_uri() ) . '/assets/js/customize-controls.js', array( 'customize-controls' ) );

		wp_enqueue_style( 'lawn-care-customize-controls', trailingslashit( get_template_directory_uri() ) . '/assets/css/customize-controls.css' );
	}
}

// Doing this customizer thang!
Lawn_Care_Customize::get_instance();