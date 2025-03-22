<div class="theme-offer">
	<?php 
        // Check if the demo import has been completed
        $lawn_care_demo_import_completed = get_option('lawn_care_demo_import_completed', false);

        // If the demo import is completed, display the "View Site" button
        if ($lawn_care_demo_import_completed) {
        echo '<p class="notice-text">' . esc_html__('Your demo import has been completed successfully.', 'lawn-care') . '</p>';
        echo '<span><a href="' . esc_url(home_url()) . '" class="button button-primary site-btn" target="_blank">' . esc_html__('VIEW SITE', 'lawn-care') . '</a></span>';
        }

		// POST and update the customizer and other related data of THE COURIER SERVICESPRO
        if (isset($_POST['submit'])) {

        // ------- Create Nav Menu --------
        $lawn_care_menuname = 'Main Menus';
        $lawn_care_bpmenulocation = 'primary';
        $lawn_care_menu_exists = wp_get_nav_menu_object($lawn_care_menuname);

        if (!$lawn_care_menu_exists) {
            $lawn_care_menu_id = wp_create_nav_menu($lawn_care_menuname);

            // Create Home Page
            $lawn_care_home_title = 'Home';
            $lawn_care_home = array(
                'post_type' => 'page',
                'post_title' => $lawn_care_home_title,
                'post_content' => '',
                'post_status' => 'publish',
                'post_author' => 1,
                'post_slug' => 'home'
            );
            $lawn_care_home_id = wp_insert_post($lawn_care_home);
            // Assign Home Page Template
            add_post_meta($lawn_care_home_id, '_wp_page_template', 'page-template/custom-home-page.php');
            // Update options to set Home Page as the front page
            update_option('page_on_front', $lawn_care_home_id);
            update_option('show_on_front', 'page');
            // Add Home Page to Menu
            wp_update_nav_menu_item($lawn_care_menu_id, 0, array(
                'menu-item-title' => __('Home', 'lawn-care'),
                'menu-item-classes' => 'home',
                'menu-item-url' => home_url('/'),
                'menu-item-status' => 'publish',
                'menu-item-object-id' => $lawn_care_home_id,
                'menu-item-object' => 'page',
                'menu-item-type' => 'post_type'
            ));

            // Create Pages Page with Dummy Content
            $lawn_care_pages_title = 'Pages';
            $lawn_care_pages_content = '
            Explore all the pages we have on our website. Find information about our services, company, and more.
            Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry standard dummy text ever since the 1500, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960 with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.<br>
            All the Lorem Ipsum generators on the Internet tend to repeat predefined chunks as necessary, making this the first true generator on the Internet. It uses a dictionary of over 200 Latin words, combined with a handful of model sentence structures, to generate Lorem Ipsum which looks reasonable. The generated Lorem Ipsum is therefore always free from repetition, injected humour, or non-characteristic words etc.';
            $lawn_care_pages = array(
                'post_type' => 'page',
                'post_title' => $lawn_care_pages_title,
                'post_content' => $lawn_care_pages_content,
                'post_status' => 'publish',
                'post_author' => 1,
                'post_slug' => 'pages'
            );
            $lawn_care_pages_id = wp_insert_post($lawn_care_pages);
            // Add Pages Page to Menu
            wp_update_nav_menu_item($lawn_care_menu_id, 0, array(
                'menu-item-title' => __('Pages', 'lawn-care'),
                'menu-item-classes' => 'pages',
                'menu-item-url' => home_url('/pages/'),
                'menu-item-status' => 'publish',
                'menu-item-object-id' => $lawn_care_pages_id,
                'menu-item-object' => 'page',
                'menu-item-type' => 'post_type'
            ));

            // Create About Us Page with Dummy Content
            $lawn_care_about_title = 'About Us';
            $lawn_care_about_content = 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam...<br>
            Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry standard dummy text ever since the 1500, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960 with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.<br>
            There are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration in some form, by injected humour, or randomised words which dont look even slightly believable. If you are going to use a passage of Lorem Ipsum, you need to be sure there isnt anything embarrassing hidden in the middle of text.<br>
            All the Lorem Ipsum generators on the Internet tend to repeat predefined chunks as necessary, making this the first true generator on the Internet. It uses a dictionary of over 200 Latin words, combined with a handful of model sentence structures, to generate Lorem Ipsum which looks reasonable. The generated Lorem Ipsum is therefore always free from repetition, injected humour, or non-characteristic words etc.';
            $lawn_care_about = array(
                'post_type' => 'page',
                'post_title' => $lawn_care_about_title,
                'post_content' => $lawn_care_about_content,
                'post_status' => 'publish',
                'post_author' => 1,
                'post_slug' => 'about-us'
            );
            $lawn_care_about_id = wp_insert_post($lawn_care_about);
            // Add About Us Page to Menu
            wp_update_nav_menu_item($lawn_care_menu_id, 0, array(
                'menu-item-title' => __('About Us', 'lawn-care'),
                'menu-item-classes' => 'about-us',
                'menu-item-url' => home_url('/about-us/'),
                'menu-item-status' => 'publish',
                'menu-item-object-id' => $lawn_care_about_id,
                'menu-item-object' => 'page',
                'menu-item-type' => 'post_type'
            ));

            // Set the menu location if it's not already set
            if (!has_nav_menu($lawn_care_bpmenulocation)) {
                $locations = get_theme_mod('nav_menu_locations'); // Use 'nav_menu_locations' to get locations array
                if (empty($locations)) {
                    $locations = array();
                }
                $locations[$lawn_care_bpmenulocation] = $lawn_care_menu_id;
                set_theme_mod('nav_menu_locations', $locations);
            }
        }

        // Set the demo import completion flag
		update_option('lawn_care_demo_import_completed', true);
		// Display success message and "View Site" button
		echo '<p class="notice-text">' . esc_html__('Your demo import has been completed successfully.', 'lawn-care') . '</p>';
		echo '<span><a href="' . esc_url(home_url()) . '" class="button button-primary site-btn" target="_blank">' . esc_html__('VIEW SITE', 'lawn-care') . '</a></span>';
        //end 

        // Top Bar
        set_theme_mod( 'lawn_care_phone_number', '(123) 456-7890' );
        set_theme_mod( 'lawn_care_email_address', 'xyz123@example.com' );

        // Slider Settings
        set_theme_mod( 'lawn_care_slide_number', '3' );

        for($lawn_care_i=1; $lawn_care_i<=3; $lawn_care_i++) {       
            set_theme_mod( 'lawn_care_slider_bg_img'.$lawn_care_i, get_template_directory_uri().'/assets/images/slider' . ($lawn_care_i + 1) . '.png' );
            set_theme_mod( 'lawn_care_slider_small_title'.$lawn_care_i, 'Get the Right Grass with Us' );
            set_theme_mod( 'lawn_care_slider_title'.$lawn_care_i, 'The Green Light to a Gorgeous Lawn' );
            set_theme_mod( 'lawn_care_slider_text'.$lawn_care_i, 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam' );

            // Define an array for button texts and links
            $lawn_care_buttons = array(
                array(
                    'text' => 'Read More',
                    'link' => '#read-more'
                ),
                array(
                    'text' => 'Request a Quote',
                    'link' => '#request-quote'
                )
            );
            for ($lawn_care_j = 1; $lawn_care_j <= count($lawn_care_buttons); $lawn_care_j++) {
                set_theme_mod('lawn_care_slider_button_text' . $lawn_care_i . $lawn_care_j, $lawn_care_buttons[$lawn_care_j - 1]['text']);
                set_theme_mod('lawn_care_slider_button_link' . $lawn_care_i . $lawn_care_j, $lawn_care_buttons[$lawn_care_j - 1]['link']);
            }
        }
        // Define an array for titles
        $lawn_care_titles = array(
            'Residential Area',
            'Commercial Area'
        );
        for ($lawn_care_k = 1; $lawn_care_k <= count($lawn_care_titles); $lawn_care_k++) {
            set_theme_mod('lawn_care_slider_about_title' . $lawn_care_k, $lawn_care_titles[$lawn_care_k - 1]);
            set_theme_mod('lawn_care_slider_about_text' . $lawn_care_k, 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut');
        }

        // Project Section
        set_theme_mod( 'lawn_care_special_text', 'Our Work' );
        set_theme_mod( 'lawn_care_special_heading', 'OUR PROJECT' );

        // Define post category names and post titles
        $lawn_care_category_names = array('Garden Care', 'Gardening & Lawn', 'Lawn Care', 'Planting');
        $lawn_care_title_array = array(
            array("Post 1", "Post 2", "Post 3"),
            array("Post 3", "Post 1", "Post 2"),
            array("Post 2", "Post 3", "Post 1"),
            array("Post 1", "Post 2", "Post 3")
        );

        foreach ($lawn_care_category_names as $lawn_care_index => $lawn_care_category_name) {
            // Create or retrieve the post category term ID
            $lawn_care_term = term_exists($lawn_care_category_name, 'category');
            if ($lawn_care_term === 0 || $lawn_care_term === null) {
                // If the term does not exist, create it
                $lawn_care_term = wp_insert_term($lawn_care_category_name, 'category');
            }

            if (is_wp_error($lawn_care_term)) {
                error_log('Error creating category: ' . $lawn_care_term->get_error_message());
                continue; // Skip to the next iteration if category creation fails
            }

            for ($lawn_care_i = 0; $lawn_care_i < 3; $lawn_care_i++) {
                // Create post content
                $lawn_care_title = $lawn_care_title_array[$lawn_care_index][$lawn_care_i];
                $lawn_care_content = 'Lorem Ipsum has been the industry\'s standard dummy text ever since the 1500s.';

                // Create post object
                $lawn_care_my_post = array(
                    'post_title'    => wp_strip_all_tags($lawn_care_title),
                    'post_content'  => $lawn_care_content,
                    'post_status'   => 'publish',
                    'post_type'     => 'post', // Post type set to 'post'
                );

                // Insert the post into the database
                $lawn_care_post_id = wp_insert_post($lawn_care_my_post);

                if (is_wp_error($lawn_care_post_id)) {
                    error_log('Error creating post: ' . $lawn_care_post_id->get_error_message());
                    continue; // Skip to the next post if creation fails
                }

                // Assign the category to the post
                wp_set_post_categories($lawn_care_post_id, array((int)$lawn_care_term['term_id']));

                // Handle the featured image using media_sideload_image
                $lawn_care_image_url = get_template_directory_uri() . '/assets/images/image' . ($lawn_care_i + 1) . '.png';
                $lawn_care_image_id = media_sideload_image($lawn_care_image_url, $lawn_care_post_id, null, 'id');

                if (!is_wp_error($lawn_care_image_id)) {
                    // Assign featured image to post
                    set_post_thumbnail($lawn_care_post_id, $lawn_care_image_id);
                }
            }
        }

        //Copyright Text
        set_theme_mod( 'lawn_care_footer_text', 'By VWThemes' );  
     
        }
    ?>
  
	<p><?php esc_html_e('Please back up your website if it’s already live with data. This importer will overwrite your existing settings with the new customizer values for Lawn Care', 'lawn-care'); ?></p>
    <form action="<?php echo esc_url(home_url()); ?>/wp-admin/themes.php?page=lawn_care_guide" method="POST" onsubmit="return validate(this);">
        <?php if (!get_option('lawn_care_demo_import_completed')) : ?>
            <input class="run-import" type="submit" name="submit" value="<?php esc_attr_e('Run Importer', 'lawn-care'); ?>" class="button button-primary button-large">
        <?php endif; ?>
        <div id="spinner" style="display:none;">         
            <img src="<?php echo esc_url(get_template_directory_uri()); ?>/assets/images/spinner.png" alt="" />
        </div>
    </form>
    <script type="text/javascript">
        function validate(form) {
            if (confirm("Do you really want to import the theme demo content?")) {
                // Show the spinner
                document.getElementById('spinner').style.display = 'block';
                // Allow the form to be submitted
                return true;
            } 
            else {
                return false;
            }
        }
    </script>
</div>
