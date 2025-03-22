<?php
//about theme info
add_action( 'admin_menu', 'lawn_care_gettingstarted' );
function lawn_care_gettingstarted() {
	add_theme_page( esc_html__('About Lawn Care', 'lawn-care'), esc_html__('Theme Demo Imprt', 'lawn-care'), 'edit_theme_options', 'lawn_care_guide', 'lawn_care_mostrar_guide');
}

// Add a Custom CSS file to WP Admin Area
function lawn_care_admin_theme_style() {
	wp_enqueue_style('lawn-care-custom-admin-style', esc_url(get_template_directory_uri()) . '/inc/getstart/getstart.css');
	wp_enqueue_script('lawn-care-tabs', esc_url(get_template_directory_uri()) . '/inc/getstart/js/tab.js');
}
add_action('admin_enqueue_scripts', 'lawn_care_admin_theme_style');

//guidline for about theme
function lawn_care_mostrar_guide() { 
	//custom function about theme customizer
	$lawn_care_return = add_query_arg( array()) ;
	$lawn_care_theme = wp_get_theme( 'lawn-care' );
?>

<div class="wrapper-info">
    <div class="col-left sshot-section">
    	<h2><?php esc_html_e( 'Welcome to Lawn Care ', 'lawn-care' ); ?> <span class="version"><?php esc_html_e( 'Version', 'lawn-care' ); ?>: <?php echo esc_html($lawn_care_theme['Version']);?></span></h2>
    	<p><?php esc_html_e('All our WordPress themes are modern, minimalist, 100% responsive, seo-friendly,feature-rich, and multipurpose that best suit designers, bloggers and other professionals who are working in the creative fields.','lawn-care'); ?></p>
    </div>

    <div class="col-right coupen-section">
    	<div class="logo-section">
			<img src="<?php echo esc_url(get_template_directory_uri()); ?>/screenshot.png" alt="" />
		</div>
		<div class="logo-right">			
			<div class="update-now">
				<h4><?php esc_html_e('Try Premium ','lawn-care'); ?></h4>
				<h4><?php esc_html_e('Lawn Care Theme','lawn-care'); ?></h4>
				<h4 class="disc-text"><?php esc_html_e('at 20% Discount','lawn-care'); ?></h4>
				<h4><?php esc_html_e('Use Coupon','lawn-care'); ?> ( <span><?php esc_html_e('vwpro20','lawn-care'); ?></span> ) </h4> 
				<div class="info-link">
					<a href="<?php echo esc_url( LAWN_CARE_BUY_NOW ); ?>" target="_blank"> <?php esc_html_e( 'Upgrade to Pro', 'lawn-care' ); ?></a>
				</div>
			</div>
		</div>   
		<div class="logo-img">
			<img src="<?php echo esc_url(get_template_directory_uri()); ?>/inc/getstart/images/final-logo.png" alt="" />
		</div>
    </div>

    <div class="tab-sec">
    	<div class="tab">
    		<button class="tablinks" onclick="lawn_care_open_tab(event, 'theme_offer')"><?php esc_html_e( 'Demo Importer', 'lawn-care' ); ?></button>
			<button class="tablinks" onclick="lawn_care_open_tab(event, 'lite_theme')"><?php esc_html_e( 'Setup With Customizer', 'lawn-care' ); ?></button>
			<button class="tablinks" onclick="lawn_care_open_tab(event, 'theme_pro')"><?php esc_html_e( 'Get Premium', 'lawn-care' ); ?></button>
  			<button class="tablinks" onclick="lawn_care_open_tab(event, 'free_pro')"><?php esc_html_e( 'Free Vs Pro', 'lawn-care' ); ?></button>
  			<button class="tablinks" onclick="lawn_care_open_tab(event, 'get_bundle')"><?php esc_html_e( 'Get 250+ Themes Bundle at $99', 'lawn-care' ); ?></button>
		</div>

		<?php 
			$lawn_care_plugin_custom_css = '';
			if(class_exists('Ibtana_Visual_Editor_Menu_Class')){
				$lawn_care_plugin_custom_css ='display: block';
			}
		?>

		<div id="theme_offer" class="tabcontent open">
			<div class="demo-content">
				<h3><?php esc_html_e( 'Click the below run importer button to import demo content', 'lawn-care' ); ?></h3>
				<?php 
				/* Get Started. */ 
				require get_parent_theme_file_path( '/inc/getstart/demo-content.php' );
			 	?>
			</div> 	
		</div>

		<div id="lite_theme" class="tabcontent">
			<?php  if(!class_exists('Ibtana_Visual_Editor_Menu_Class')){ 
				$plugin_ins = Lawn_Care_Plugin_Activation_Settings::get_instance();
				$lawn_care_actions = $plugin_ins->recommended_actions;
				?>
				<div class="lawn-care-recommended-plugins">
				    <div class="lawn-care-action-list">
				        <?php if ($lawn_care_actions): foreach ($lawn_care_actions as $key => $lawn_care_actionValue): ?>
				                <div class="lawn-care-action" id="<?php echo esc_attr($lawn_care_actionValue['id']);?>">
			                        <div class="action-inner">
			                            <h3 class="action-title"><?php echo esc_html($lawn_care_actionValue['title']); ?></h3>
			                            <div class="action-desc"><?php echo esc_html($lawn_care_actionValue['desc']); ?></div>
			                            <?php echo wp_kses_post($lawn_care_actionValue['link']); ?>
			                            <a class="ibtana-skip-btn" get-start-tab-id="lite-theme-tab" href="javascript:void(0);"><?php esc_html_e('Skip','lawn-care'); ?></a>
			                        </div>
				                </div>
				            <?php endforeach;
				        endif; ?>
				    </div>
				</div>
			<?php } ?>
			<div class="lite-theme-tab" style="<?php echo esc_attr($lawn_care_plugin_custom_css); ?>">
				<h3><?php esc_html_e( 'Lite Theme Information', 'lawn-care' ); ?></h3>
				<hr class="h3hr">
				<p><?php esc_html_e('The Lawn Care WordPress Theme is a specialized design crafted for businesses offering lawn care services. Whether you run a lawn care company, provide seasonal lawn care packages, or share DIY lawn care tips, this theme is your go-to solution for building a professional online presence. It is ideal for lawn care experts, landscapers, and gardening enthusiasts looking to showcase their services and expertise. With a sleek, responsive layout, the theme ensures a seamless user experience across devices, making it easier for customers to find services like organic lawn care, lawn care fertilization, or pest control. This theme includes stunning visual elements such as banner images of lush lawns and customizable sections for promoting lawn care products, lawn care schedules, or eco-friendly solutions. The intuitive design incorporates call-to-action buttons, enabling quick bookings for services like mowing, edging, and aeration. It also supports integration with lawn care apps and software to streamline your business operations. Whether you target new homeowners, schools, parks, or golf courses, this theme adapts to various needs, making it an excellent choice for professionals in the lawn care business. With features like SEO optimization, testimonials, and blog support, you can share lawn care tips, advertise lawn care packages, and establish credibility.','lawn-care'); ?></p>
			  	<div class="col-left-inner">
			  		<h4><?php esc_html_e( 'Theme Documentation', 'lawn-care' ); ?></h4>
					<p><?php esc_html_e( 'If you need any assistance regarding setting up and configuring the Theme, our documentation is there.', 'lawn-care' ); ?></p>
					<div class="info-link">
						<a href="<?php echo esc_url( LAWN_CARE_FREE_THEME_DOC ); ?>" target="_blank"> <?php esc_html_e( 'Documentation', 'lawn-care' ); ?></a>
					</div>
					<hr>
					<h4><?php esc_html_e('Theme Customizer', 'lawn-care'); ?></h4>
					<p> <?php esc_html_e('To begin customizing your website, start by clicking "Customize".', 'lawn-care'); ?></p>
					<div class="info-link">
						<a target="_blank" href="<?php echo esc_url( admin_url('customize.php') ); ?>"><?php esc_html_e('Customizing', 'lawn-care'); ?></a>
					</div>
					<hr>
					<h4><?php esc_html_e('Having Trouble, Need Support?', 'lawn-care'); ?></h4>
					<p> <?php esc_html_e('Our dedicated team is well prepared to help you out in case of queries and doubts regarding our theme.', 'lawn-care'); ?></p>
					<div class="info-link">
						<a href="<?php echo esc_url( LAWN_CARE_SUPPORT ); ?>" target="_blank"><?php esc_html_e('Support Forum', 'lawn-care'); ?></a>
					</div>
					<hr>
					<h4><?php esc_html_e('Reviews & Testimonials', 'lawn-care'); ?></h4>
					<p> <?php esc_html_e('All the features and aspects of this WordPress Theme are phenomenal. I\'d recommend this theme to all.', 'lawn-care'); ?></p>
					<div class="info-link">
						<a href="<?php echo esc_url( LAWN_CARE_REVIEW ); ?>" target="_blank"><?php esc_html_e('Reviews', 'lawn-care'); ?></a>
					</div>

					<div class="link-customizer">
						<h3><?php esc_html_e( 'Link to customizer', 'lawn-care' ); ?></h3>
						<hr class="h3hr">
						<div class="first-row">
							<div class="row-box">
								<div class="row-box1">
									<span class="dashicons dashicons-buddicons-buddypress-logo"></span><a href="<?php echo esc_url( admin_url('customize.php?autofocus[control]=custom_logo') ); ?>" target="_blank"><?php esc_html_e('Upload your logo','lawn-care'); ?></a>
								</div>
								<div class="row-box2">
									<span class="dashicons dashicons-format-gallery"></span><a href="<?php echo esc_url( admin_url('customize.php?autofocus[section]=lawn_care_post_settings') ); ?>" target="_blank"><?php esc_html_e('Post settings','lawn-care'); ?></a>
								</div>
							</div>

							<div class="row-box">
								<div class="row-box1">
									<span class="dashicons dashicons-slides"></span><a href="<?php echo esc_url( admin_url('customize.php?autofocus[section]=lawn_care_top_bar') ); ?>" target="_blank"><?php esc_html_e('Top Bar','lawn-care'); ?></a>
								</div>
								<div class="row-box2">
									<span class="dashicons dashicons-category"></span><a href="<?php echo esc_url( admin_url('customize.php?autofocus[section]=lawn_care_slider_section') ); ?>" target="_blank"><?php esc_html_e('Slider Settings','lawn-care'); ?></a>
								</div>
							</div>
						
							<div class="row-box">
								<div class="row-box1">
									<span class="dashicons dashicons-category"></span><a href="<?php echo esc_url( admin_url('customize.php?autofocus[section]=lawn_care_project_section') ); ?>" target="_blank"><?php esc_html_e('Project Section','lawn-care'); ?></a>
								</div>

								<div class="row-box2">
									<span class="dashicons dashicons-menu"></span><a href="<?php echo esc_url( admin_url('customize.php?autofocus[panel]=nav_menus') ); ?>" target="_blank"><?php esc_html_e('Menus','lawn-care'); ?></a>
								</div>
							</div>
							
							<div class="row-box">
								<div class="row-box1">
									<span class="dashicons dashicons-screenoptions"></span><a href="<?php echo esc_url( admin_url('customize.php?autofocus[panel]=widgets') ); ?>" target="_blank"><?php esc_html_e('Footer Widget','lawn-care'); ?></a>
								</div>

								<div class="row-box2">
									<span class="dashicons dashicons-admin-generic"></span><a href="<?php echo esc_url( admin_url('customize.php?autofocus[section]=lawn_care_left_right') ); ?>" target="_blank"><?php esc_html_e('General Settings','lawn-care'); ?></a>
								</div>
							</div>

							<div class="row-box">
								<div class="row-box2">
									<span class="dashicons dashicons-text-page"></span><a href="<?php echo esc_url( admin_url('customize.php?autofocus[section]=lawn_care_footer') ); ?>" target="_blank"><?php esc_html_e('Footer Text','lawn-care'); ?></a>
								</div>
							</div>
						</div>
					</div>
			  	</div>
				<div class="col-right-inner">
					<h3 class="page-template"><?php esc_html_e('How to set up Home Page Template','lawn-care'); ?></h3>
				  	<hr class="h3hr">
					<p><?php esc_html_e('Follow these instructions to setup Home page.','lawn-care'); ?></p>
                  	<p><span class="strong"><?php esc_html_e('1. Create a new page :','lawn-care'); ?></span><?php esc_html_e(' Go to ','lawn-care'); ?>
					  	<b><?php esc_html_e(' Dashboard >> Pages >> Add New Page','lawn-care'); ?></b></p>
                  	<p><?php esc_html_e('Name it as "Home" then select the template "Custom Home Page".','lawn-care'); ?></p>
                  	<img src="<?php echo esc_url(get_template_directory_uri()); ?>/inc/getstart/images/home-page-template.png" alt="" />
                  	<p><span class="strong"><?php esc_html_e('2. Set the front page:','lawn-care'); ?></span><?php esc_html_e(' Go to ','lawn-care'); ?>
					  	<b><?php esc_html_e(' Settings >> Reading ','lawn-care'); ?></b></p>
				  	<p><?php esc_html_e('Select the option of Static Page, now select the page you created to be the homepage, while another page to be your default page.','lawn-care'); ?></p>
                  	<img src="<?php echo esc_url(get_template_directory_uri()); ?>/inc/getstart/images/set-front-page.png" alt="" />
                  	<p><?php esc_html_e(' Once you are done with setup, then follow the','lawn-care'); ?> <a class="doc-links" href="<?php echo esc_url( LAWN_CARE_FREE_THEME_DOC ); ?>" target="_blank"><?php esc_html_e('Documentation','lawn-care'); ?></a></p>
			  	</div>
			</div>
		</div>


		<div id="theme_pro" class="tabcontent">
		  	<h3><?php esc_html_e( 'Premium Theme Information', 'lawn-care' ); ?></h3>
			<hr class="h3hr">
		    <div class="col-left-pro">
		    	<p><?php esc_html_e('The Lawn Care WordPress Theme is specifically designed to cater to the needs of lawn care professionals, landscapers, and gardening businesses. It features an intuitive, easy-to-navigate interface and a fully responsive design, ensuring that your website looks professional and works flawlessly across all devices, from desktops to mobile phones. This theme comes with a wide range of customization options, allowing you to personalize layouts, colors, and fonts to perfectly reflect your brand identity. Whether you specialize in lawn mowing, trimming, pest control, aeration, or lawn maintenance, this theme is versatile enough to showcase your services in a clean and attractive way. Additional features like SEO optimization, social media integration, and contact forms are built-in, making it easier to engage with potential customers and boost your online visibility. The Lawn Care WordPress Theme is ideal for businesses offering services like organic lawn care, seasonal maintenance, or affordable lawn care packages, helping you connect with clients looking for professional lawn care solutions and build a stronger online presence.','lawn-care'); ?></p>
		    </div>
		    <div class="col-right-pro">
		    	<div class="pro-links">
			    	<a href="<?php echo esc_url( LAWN_CARE_LIVE_DEMO ); ?>" target="_blank"><?php esc_html_e('Live Demo', 'lawn-care'); ?></a>
					<a href="<?php echo esc_url( LAWN_CARE_BUY_NOW ); ?>" target="_blank"><?php esc_html_e('Buy Pro', 'lawn-care'); ?></a>
					<a href="<?php echo esc_url( LAWN_CARE_PRO_DOC ); ?>" target="_blank"><?php esc_html_e('Pro Documentation', 'lawn-care'); ?></a>
					<a href="<?php echo esc_url( LAWN_CARE_THEME_BUNDLE_BUY_NOW ); ?>" target="_blank"><?php esc_html_e('Get 250+ Themes Bundle at $99', 'lawn-care'); ?></a>
				</div>
		    	<img src="<?php echo esc_url(get_template_directory_uri()); ?>/inc/getstart/images/responsive.png" alt="" />
		    </div>
		</div>

		<div id="free_pro" class="tabcontent">
		  	<div class="featurebox">
			    <h3><?php esc_html_e( 'Theme Features', 'lawn-care' ); ?></h3>
				<hr class="h3hr">
				<div class="table-image">
					<table class="tablebox">
						<thead>
							<tr>
								<th></th>
								<th><?php esc_html_e('Free Themes', 'lawn-care'); ?></th>
								<th><?php esc_html_e('Premium Themes', 'lawn-care'); ?></th>
							</tr>
						</thead>
						<tbody>
							<tr>
								<td><?php esc_html_e('Theme Customization', 'lawn-care'); ?></td>
								<td class="table-img"><span class="dashicons dashicons-saved"></span></td>
								<td class="table-img"><span class="dashicons dashicons-saved"></span></td>
							</tr>
							<tr class="odd">
								<td><?php esc_html_e('Responsive Design', 'lawn-care'); ?></td>
								<td class="table-img"><span class="dashicons dashicons-saved"></span></td>
								<td class="table-img"><span class="dashicons dashicons-saved"></span></td>
							</tr>
							<tr>
								<td><?php esc_html_e('Logo Upload', 'lawn-care'); ?></td>
								<td class="table-img"><span class="dashicons dashicons-saved"></span></td>
								<td class="table-img"><span class="dashicons dashicons-saved"></span></td>
							</tr>
							<tr class="odd">
								<td><?php esc_html_e('Social Media Links', 'lawn-care'); ?></td>
								<td class="table-img"><span class="dashicons dashicons-saved"></span></td>
								<td class="table-img"><span class="dashicons dashicons-saved"></span></td>
							</tr>
							<tr>
								<td><?php esc_html_e('Slider Settings', 'lawn-care'); ?></td>
								<td class="table-img"><span class="dashicons dashicons-saved"></span></td>
								<td class="table-img"><span class="dashicons dashicons-saved"></span></td>
							</tr>
							<tr>
								<td><?php esc_html_e('Template Pages', 'lawn-care'); ?></td>
								<td class="table-img"><?php esc_html_e('3', 'lawn-care'); ?></td>
								<td class="table-img"><?php esc_html_e('10', 'lawn-care'); ?></td>
							</tr>
							<tr class="odd">
								<td><?php esc_html_e('Home Page Template', 'lawn-care'); ?></td>
								<td class="table-img"><?php esc_html_e('1', 'lawn-care'); ?></td>
								<td class="table-img"><?php esc_html_e('1', 'lawn-care'); ?></td>
							</tr>
							<tr>
								<td><?php esc_html_e('Theme sections', 'lawn-care'); ?></td>
								<td class="table-img"><?php esc_html_e('2', 'lawn-care'); ?></td>
								<td class="table-img"><?php esc_html_e('13', 'lawn-care'); ?></td>
							</tr>
							<tr class="odd">
								<td><?php esc_html_e('Contact us Page Template / Support Templates', 'lawn-care'); ?></td>
								<td class="table-img">0</td>
								<td class="table-img"><?php esc_html_e('1', 'lawn-care'); ?></td>
							</tr>
							<tr>
								<td><?php esc_html_e('Blog Templates & Layout', 'lawn-care'); ?></td>
								<td class="table-img">0</td>
								<td class="table-img"><?php esc_html_e('3(Full width/Left/Right Sidebar)', 'lawn-care'); ?></td>
							</tr>
							<tr class="odd">
								<td><?php esc_html_e('Page Templates & Layout', 'lawn-care'); ?></td>
								<td class="table-img">0</td>
								<td class="table-img"><?php esc_html_e('3(Left/Right Sidebar)', 'lawn-care'); ?></td>
							</tr>
							<tr>
								<td><?php esc_html_e('Color Pallete For Particular Sections', 'lawn-care'); ?></td>
								<td class="table-img"><span class="dashicons dashicons-no"></span></td>
								<td class="table-img"><span class="dashicons dashicons-saved"></span></td>
							</tr>
							<tr class="odd">
								<td><?php esc_html_e('Global Color Option', 'lawn-care'); ?></td>
								<td class="table-img"><span class="dashicons dashicons-saved"></span></td>
								<td class="table-img"><span class="dashicons dashicons-saved"></span></td>
							</tr>
							<tr>
								<td><?php esc_html_e('Section Reordering', 'lawn-care'); ?></td>
								<td class="table-img"><span class="dashicons dashicons-no"></span></td>
								<td class="table-img"><span class="dashicons dashicons-saved"></span></td>
							</tr>
							<tr class="odd">
								<td><?php esc_html_e('Demo Importer', 'lawn-care'); ?></td>
								<td class="table-img"><span class="dashicons dashicons-no"></span></td>
								<td class="table-img"><span class="dashicons dashicons-saved"></span></td>
							</tr>
							<tr>
								<td><?php esc_html_e('Allow To Set Site Title, Tagline, Logo', 'lawn-care'); ?></td>
								<td class="table-img"><span class="dashicons dashicons-no"></span></td>
								<td class="table-img"><span class="dashicons dashicons-saved"></span></td>
							</tr>
							<tr class="odd">
								<td><?php esc_html_e('Enable Disable Options On All Sections, Logo', 'lawn-care'); ?></td>
								<td class="table-img"><span class="dashicons dashicons-no"></span></td>
								<td class="table-img"><span class="dashicons dashicons-saved"></span></td>
							</tr>
							<tr>
								<td><?php esc_html_e('Full Documentation', 'lawn-care'); ?></td>
								<td class="table-img"><span class="dashicons dashicons-saved"></span></td>
								<td class="table-img"><span class="dashicons dashicons-saved"></span></td>
							</tr>
							<tr class="odd">
								<td><?php esc_html_e('Latest WordPress Compatibility', 'lawn-care'); ?></td>
								<td class="table-img"><span class="dashicons dashicons-saved"></span></td>
								<td class="table-img"><span class="dashicons dashicons-saved"></span></td>
							</tr>
							<tr class="odd">
								<td><?php esc_html_e('Support 3rd Party Plugins', 'lawn-care'); ?></td>
								<td class="table-img"><span class="dashicons dashicons-saved"></span></td>
								<td class="table-img"><span class="dashicons dashicons-saved"></span></td>
							</tr>
							<tr>
								<td><?php esc_html_e('Secure and Optimized Code', 'lawn-care'); ?></td>
								<td class="table-img"><span class="dashicons dashicons-saved"></span></td>
								<td class="table-img"><span class="dashicons dashicons-saved"></span></td>
							</tr>
							<tr class="odd">
								<td><?php esc_html_e('Exclusive Functionalities', 'lawn-care'); ?></td>
								<td class="table-img"><span class="dashicons dashicons-no"></span></td>
								<td class="table-img"><span class="dashicons dashicons-saved"></span></td>
							</tr>
							<tr>
								<td><?php esc_html_e('Section Enable / Disable', 'lawn-care'); ?></td>
								<td class="table-img"><span class="dashicons dashicons-no"></span></td>
								<td class="table-img"><span class="dashicons dashicons-saved"></span></td>
							</tr>
							<tr class="odd">
								<td><?php esc_html_e('Section Google Font Choices', 'lawn-care'); ?></td>
								<td class="table-img"><span class="dashicons dashicons-no"></span></td>
								<td class="table-img"><span class="dashicons dashicons-saved"></span></td>
							</tr>
							<tr>
								<td><?php esc_html_e('Video Gallery', 'lawn-care'); ?></td>
								<td class="table-img"><span class="dashicons dashicons-no"></span></td>
								<td class="table-img"><span class="dashicons dashicons-saved"></span></td>
							</tr>
							<tr class="odd">
								<td><?php esc_html_e('Simple & Mega Menu Option', 'lawn-care'); ?></td>
								<td class="table-img"><span class="dashicons dashicons-no"></span></td>
								<td class="table-img"><span class="dashicons dashicons-no"></span></td>
							</tr>
							<tr>
								<td><?php esc_html_e('Support to add custom CSS / JS ', 'lawn-care'); ?></td>
								<td class="table-img"><span class="dashicons dashicons-no"></span></td>
								<td class="table-img"><span class="dashicons dashicons-saved"></span></td>
							</tr>
							<tr class="odd">
								<td><?php esc_html_e('Shortcodes', 'lawn-care'); ?></td>
								<td class="table-img"><span class="dashicons dashicons-no"></span></td>
								<td class="table-img"><span class="dashicons dashicons-saved"></span></td>
							</tr>
							<tr>
								<td><?php esc_html_e('Custom Background, Colors, Header, Logo & Menu', 'lawn-care'); ?></td>
								<td class="table-img"><span class="dashicons dashicons-no"></span></td>
								<td class="table-img"><span class="dashicons dashicons-saved"></span></td>
							</tr>
							<tr class="odd">
								<td><?php esc_html_e('Premium Membership', 'lawn-care'); ?></td>
								<td class="table-img"><span class="dashicons dashicons-no"></span></td>
								<td class="table-img"><span class="dashicons dashicons-saved"></span></td>
							</tr>
							<tr>
								<td><?php esc_html_e('Budget Friendly Value', 'lawn-care'); ?></td>
								<td class="table-img"><span class="dashicons dashicons-no"></span></td>
								<td class="table-img"><span class="dashicons dashicons-saved"></span></td>
							</tr>
							<tr class="odd">
								<td><?php esc_html_e('Priority Error Fixing', 'lawn-care'); ?></td>
								<td class="table-img"><span class="dashicons dashicons-no"></span></td>
								<td class="table-img"><span class="dashicons dashicons-saved"></span></td>
							</tr>
							<tr>
								<td><?php esc_html_e('Custom Feature Addition', 'lawn-care'); ?></td>
								<td class="table-img"><span class="dashicons dashicons-no"></span></td>
								<td class="table-img"><span class="dashicons dashicons-saved"></span></td>
							</tr>
							<tr class="odd">
								<td><?php esc_html_e('All Access Theme Pass', 'lawn-care'); ?></td>
								<td class="table-img"><span class="dashicons dashicons-no"></span></td>
								<td class="table-img"><span class="dashicons dashicons-saved"></span></td>
							</tr>
							<tr>
								<td><?php esc_html_e('Seamless Customer Support', 'lawn-care'); ?></td>
								<td class="table-img"><span class="dashicons dashicons-no"></span></td>
								<td class="table-img"><span class="dashicons dashicons-saved"></span></td>
							</tr>
							<tr>
								<td><?php esc_html_e('Lawn Care ', 'lawn-care'); ?></td>
								<td class="table-img"><span class="dashicons dashicons-no"></span></td>
								<td class="table-img"><span class="dashicons dashicons-saved"></span></td>
							</tr>
							<tr>
								<td><?php esc_html_e('Detail Services', 'lawn-care'); ?></td>
								<td class="table-img"><span class="dashicons dashicons-no"></span></td>
								<td class="table-img"><span class="dashicons dashicons-saved"></span></td>
							</tr>
							<tr>
								<td><?php esc_html_e('About Business Page', 'lawn-care'); ?></td>
								<td class="table-img"><span class="dashicons dashicons-no"></span></td>
								<td class="table-img"><span class="dashicons dashicons-saved"></span></td>
							</tr>
							<tr>
								<td><?php esc_html_e('Team Member Page', 'lawn-care'); ?></td>
								<td class="table-img"><span class="dashicons dashicons-no"></span></td>
								<td class="table-img"><span class="dashicons dashicons-saved"></span></td>
							</tr>
							<tr>
								<td><?php esc_html_e('Project Description Page', 'lawn-care'); ?></td>
								<td class="table-img"><span class="dashicons dashicons-no"></span></td>
								<td class="table-img"><span class="dashicons dashicons-saved"></span></td>
							</tr>
							<tr>
								<td><?php esc_html_e('Support Page', 'lawn-care'); ?></td>
								<td class="table-img"><span class="dashicons dashicons-no"></span></td>
								<td class="table-img"><span class="dashicons dashicons-saved"></span></td>
							</tr>
							<tr>
								<td></td>
								<td class="table-img"></td>
								<td class="update-link"><a href="<?php echo esc_url( LAWN_CARE_BUY_NOW ); ?>" target="_blank"><?php esc_html_e('Upgrade to Pro', 'lawn-care'); ?></a></td>
							</tr>
						</tbody>
					</table>
				</div>
			</div>
		</div>

		<div id="get_bundle" class="tabcontent">		  	
		   	<div class="col-left-pro">
		   		<h3><?php esc_html_e( 'WP Theme Bundle', 'lawn-care' ); ?></h3>
		    	<p><?php esc_html_e('Enhance your website effortlessly with our WP Theme Bundle. Get access to 250+ premium WordPress themes and 5+ powerful plugins, all designed to meet diverse business needs. Enjoy seamless integration with any plugins, ultimate customization flexibility, and regular updates to keep your site current and secure. Plus, benefit from our dedicated customer support, ensuring a smooth and professional web experience.','lawn-care'); ?></p>
		    	<div class="feature">
		    		<h4><?php esc_html_e( 'Features:', 'lawn-care' ); ?></h4>
		    		<p><?php esc_html_e('250+ Premium Themes & 5+ Plugins.', 'lawn-care'); ?></p>
		    		<p><?php esc_html_e('Seamless Integration.', 'lawn-care'); ?></p>
		    		<p><?php esc_html_e('Customization Flexibility.', 'lawn-care'); ?></p>
		    		<p><?php esc_html_e('Regular Updates.', 'lawn-care'); ?></p>
		    		<p><?php esc_html_e('Dedicated Support.', 'lawn-care'); ?></p>
		    	</div>
		    	<p><?php esc_html_e('Upgrade now and give your website the professional edge it deserves, all at an unbeatable price of $99!', 'lawn-care'); ?></p>
		    	<div class="pro-links">
					<a href="<?php echo esc_url( LAWN_CARE_THEME_BUNDLE_BUY_NOW ); ?>" target="_blank"><?php esc_html_e('Buy Now', 'lawn-care'); ?></a>
					<a href="<?php echo esc_url( LAWN_CARE_THEME_BUNDLE_DOC ); ?>" target="_blank"><?php esc_html_e('Documentation', 'lawn-care'); ?></a>
				</div>
		   	</div>
		   	<div class="col-right-pro">
		    	<img src="<?php echo esc_url(get_template_directory_uri()); ?>/inc/getstart/images/bundle.png" alt="" />
		   	</div>		    
		</div>
	</div>
</div>

<?php } ?>