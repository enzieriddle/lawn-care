<?php

	$lawn_care_custom_css= "";

	/*-------------------- Highlight Color -------------------*/

	$lawn_care_first_color = get_theme_mod('lawn_care_first_color');

	if($lawn_care_first_color != false){
		$lawn_care_custom_css .='#sidebar .wp-block-tag-cloud a:hover, .header-fixed .menu-header, #footer, .custom-about-us a.custom_read_more, #footer .wp-block-tag-cloud a:hover, table.compare-list .add-to-cart td a:not(.unstyled_button), .serach_outer i, .top-header, .home-page-header, #sidebar .wp-block-search .wp-block-search__button:hover, .main-header .main-topbar, #slider .slider-img:after, #slider .slider-btn span, #slider .about-box .about-icon i, #slider .slider-dots, #slider .carousel-control-prev i, #slider .carousel-control-next i, #project-sec .project-text:before, #project-sec .project-text:after, #project-sec .category-box .post-category .drp_dwn_menu.active a, #project-sec .post-content, .main-navigation ul .current_page_item:before, .more-btn a , #comments input[type="submit"],#comments a.comment-reply-link,input[type="submit"],.woocommerce #respond input#submit, .woocommerce button.button, .woocommerce input.button,.woocommerce #respond input#submit.alt, .woocommerce a.button.alt, .woocommerce button.button.alt, .woocommerce input.button.alt,.pro-button a, .woocommerce a.added_to_cart.wc-forward, .woocommerce nav.woocommerce-pagination ul li a, .woocommerce nav.woocommerce-pagination ul li span, .woocommerce nav.woocommerce-pagination ul li span.current, #preloader, #footer-2, #footer .wp-block-search .wp-block-search__button, #sidebar .wp-block-search .wp-block-search__button, .copyright .custom-social-icons i:hover, .bradcrumbs a, .post-categories li a, .bradcrumbs a:hover, .post-categories li a:hover, .bradcrumbs span, nav.navigation.posts-navigation .nav-previous a, nav.navigation.posts-navigation .nav-next a, #sidebar .custom-social-icons a, #sidebar .custom-social-icons a:hover, #footer .custom-social-icons a:hover, #sidebar h3:before,#sidebar .widget_block h3:before, #sidebar h2:before, #sidebar label.wp-block-search__label:before, #sidebar .tagcloud a:hover, .pagination span, .pagination a, .post-nav-links span, .post-nav-links a, .pagination a:hover, .pagination .current, .woocommerce span.onsale, nav.woocommerce-MyAccount-navigation ul li, nav.woocommerce-MyAccount-navigation ul li:hover, .woocommerce ul.products li.product .button, .woocommerce a.added_to_cart.wc-forward,a.added_to_cart.wc-forward, a.button.product_type_simple.add_to_cart_button.ajax_add_to_cart:hover, a.button.product_type_simple.add_to_cart_button.ajax_add_to_cart, header.woocommerce-Address-title.title a, #tag-cloud-sec .tag-cloud-link, .wp-block-button__link{';
			$lawn_care_custom_css .='background: '.esc_attr($lawn_care_first_color).';';
		$lawn_care_custom_css .='}';
	}

	if($lawn_care_first_color != false){
		$lawn_care_custom_css .='a.added_to_cart.wc-forward:hover,header.woocommerce-Address-title.title a:hover,#tag-cloud-sec .tag-cloud-link:hover,.wc-block-grid__product-add-to-cart.wp-block-button .wp-block-button__link:hover, #sidebar ul li::before, .wc-block-grid__product-onsale, .wp-block-woocommerce-cart .wc-block-cart__submit-button, .wc-block-components-checkout-place-order-button, .wc-block-components-totals-coupon__button, .wp-block-woocommerce-cart .wc-block-cart__submit-button:hover, .wc-block-components-checkout-place-order-button:hover, .wc-block-components-totals-coupon__button:hover, .wp-block-woocommerce-cart .wc-block-components-product-badge, .wc-block-components-order-summary-item__quantity, header.woocommerce-Address-title.title a:hover,#tag-cloud-sec .tag-cloud-link:hover,.wc-block-grid__product-add-to-cart.wp-block-button .wp-block-button__link:hover{';
			$lawn_care_custom_css .='background: '.esc_attr($lawn_care_first_color).'!important;';
		$lawn_care_custom_css .='}';
	}

	if($lawn_care_first_color != false){
		$lawn_care_custom_css .='a, a:hover, .sticky .post-main-box h2:before, .page-template-custom-home-page p.site-title a, .page-template-custom-home-page .logo h1 a, .page-template-custom-home-page .logo p.site-description, .menu-bar-sec i, .page-template-custom-home-page .home-page-header .main-navigation a:hover, .main-navigation ul.sub-menu a:hover, .page-template-custom-home-page .home-page-header .main-navigation .current_page_item a, .post-main-box:hover h2 a, .post-main-box:hover .post-info span a, .single-post .post-info:hover a, .middle-bar h6, .grid-post-main-box:hover h2 a, .grid-post-main-box:hover .post-info span a, #sidebar ul li:hover, .woocommerce-error::before, .post-navigation span.meta-nav:hover, .woocommerce-message::before,.woocommerce-info::before, .wp-block-quote, .wp-block-quote:not(.is-large):not(.is-style-large), .wp-block-pullquote{';
			$lawn_care_custom_css .='color: '.esc_attr($lawn_care_first_color).';';
		$lawn_care_custom_css .='}';
	}

	if($lawn_care_first_color != false){
		$lawn_care_custom_css .='#footer .tagcloud a:hover, .tags-bg a:hover, #footer .custom-social-icons a:hover{';
			$lawn_care_custom_css .='color: '.esc_attr($lawn_care_first_color).'!important;';
		$lawn_care_custom_css .='}';
	}

	if($lawn_care_first_color != false){
		$lawn_care_custom_css .='#project-sec .category-box .post-category .drp_dwn_menu.active, .post-main-box, .grid-post-main-box, #sidebar .widget{';
			$lawn_care_custom_css .='border-color: '.esc_attr($lawn_care_first_color).';';
		$lawn_care_custom_css .='}';
	}

	if($lawn_care_first_color != false){
		$lawn_care_custom_css .='.main-navigation ul ul, #sidebar .widget{';
			$lawn_care_custom_css .='border-bottom-color: '.esc_attr($lawn_care_first_color).';';
		$lawn_care_custom_css .='}';
	}

	if($lawn_care_first_color != false){
		$lawn_care_custom_css .='.main-navigation ul ul, #sidebar .widget, .woocommerce-error, .woocommerce-message,.woocommerce-info{';
			$lawn_care_custom_css .='border-top-color: '.esc_attr($lawn_care_first_color).';';
		$lawn_care_custom_css .='}';
	}

	if($lawn_care_first_color != false){
		$lawn_care_custom_css .='#slider .about-box .about-sub:first-child, #sidebar .widget{';
			$lawn_care_custom_css .='border-right-color: '.esc_attr($lawn_care_first_color).';';
		$lawn_care_custom_css .='}';
	}

	if($lawn_care_first_color != false){
		$lawn_care_custom_css .='#sidebar .widget, .wp-block-quote, .wp-block-quote:not(.is-large):not(.is-style-large), .wp-block-pullquote{';
			$lawn_care_custom_css .='border-left-color: '.esc_attr($lawn_care_first_color).';';
		$lawn_care_custom_css .='}';
	}

	if($lawn_care_first_color != false){
		$lawn_care_custom_css .='#footer .custom-social-icons a:hover{';
			$lawn_care_custom_css .='outline: 6px double '.esc_attr($lawn_care_first_color).';';
		$lawn_care_custom_css .='}';
	}

	if($lawn_care_first_color != false || $lawn_care_first_color != false){
		$lawn_care_custom_css .='@media screen and (max-width:1000px) {';
			$lawn_care_custom_css .='.page-template-custom-home-page .toggle-nav i, .page-template-custom-home-page .menu-header .search-box a, #mySidenav .closebtn, .admin-bar .home-page-header, .page-template-custom-home-page .home-page-header{';
				$lawn_care_custom_css .='background: '.esc_attr($lawn_care_first_color).';';
			$lawn_care_custom_css .='}';
			$lawn_care_custom_css .='.main-navigation a:hover{';
				$lawn_care_custom_css .='color: '.esc_attr($lawn_care_first_color).'!important;';
			$lawn_care_custom_css .='}';
		$lawn_care_custom_css .='}';
	}


	/*---------------------------Width Layout -------------------*/

	$lawn_care_theme_lay = get_theme_mod( 'lawn_care_width_option','Full Width');
    if($lawn_care_theme_lay == 'Boxed'){
		$lawn_care_custom_css .='body{';
			$lawn_care_custom_css .='max-width: 1140px; width: 100%; margin-right: auto; margin-left: auto;';
		$lawn_care_custom_css .='}';
		$lawn_care_custom_css .='.scrollup i{';
			$lawn_care_custom_css .='right: 100px;';
		$lawn_care_custom_css .='}';
		$lawn_care_custom_css .='.row.outer-logo{';
			$lawn_care_custom_css .='margin-left: 0px;';
		$lawn_care_custom_css .='}';
	}else if($lawn_care_theme_lay == 'Wide Width'){
		$lawn_care_custom_css .='body{';
			$lawn_care_custom_css .='width: 100%;padding-right: 15px;padding-left: 15px;margin-right: auto;margin-left: auto;';
		$lawn_care_custom_css .='}';
		$lawn_care_custom_css .='.scrollup i{';
			$lawn_care_custom_css .='right: 30px;';
		$lawn_care_custom_css .='}';
		$lawn_care_custom_css .='.row.outer-logo{';
			$lawn_care_custom_css .='margin-left: 0px;';
		$lawn_care_custom_css .='}';
	}else if($lawn_care_theme_lay == 'Full Width'){
		$lawn_care_custom_css .='body{';
			$lawn_care_custom_css .='max-width: 100%;';
		$lawn_care_custom_css .='}';
	}

	/*-------------- Sticky Header Padding ----------------*/

	$lawn_care_sticky_header_padding = get_theme_mod('lawn_care_sticky_header_padding');
	if($lawn_care_sticky_header_padding != false){
		$lawn_care_custom_css .='.header-fixed{';
			$lawn_care_custom_css .='padding: '.esc_attr($lawn_care_sticky_header_padding).';';
		$lawn_care_custom_css .='}';
	}

	/*----------------Responsive Media -----------------------*/

	$lawn_care_resp_stickyheader = get_theme_mod( 'lawn_care_stickyheader_hide_show',false);
	if($lawn_care_resp_stickyheader == true && get_theme_mod( 'lawn_care_sticky_header',false) != true){
    	$lawn_care_custom_css .='.header-fixed{';
			$lawn_care_custom_css .='position:static;';
		$lawn_care_custom_css .='} ';
	}
    if($lawn_care_resp_stickyheader == true){
    	$lawn_care_custom_css .='@media screen and (max-width:575px) {';
		$lawn_care_custom_css .='.header-fixed{';
			$lawn_care_custom_css .='position:fixed;';
		$lawn_care_custom_css .='} }';
	}else if($lawn_care_resp_stickyheader == false){
		$lawn_care_custom_css .='@media screen and (max-width:575px){';
		$lawn_care_custom_css .='.header-fixed{';
			$lawn_care_custom_css .='position:static;';
		$lawn_care_custom_css .='} }';
	}

	$lawn_care_resp_sidebar = get_theme_mod( 'lawn_care_sidebar_hide_show',true);
    if($lawn_care_resp_sidebar == true){
    	$lawn_care_custom_css .='@media screen and (max-width:575px) {';
		$lawn_care_custom_css .='#sidebar{';
			$lawn_care_custom_css .='display:block;';
		$lawn_care_custom_css .='} }';
	}else if($lawn_care_resp_sidebar == false){
		$lawn_care_custom_css .='@media screen and (max-width:575px) {';
		$lawn_care_custom_css .='#sidebar{';
			$lawn_care_custom_css .='display:none;';
		$lawn_care_custom_css .='} }';
	}

	$lawn_care_responsive_topbar_hide = get_theme_mod('lawn_care_responsive_topbar_hide',true);
	if($lawn_care_responsive_topbar_hide == true && get_theme_mod('lawn_care_hide_show_topbar',true) == false){
		$lawn_care_custom_css .='@media screen and (min-width:575px){
			.main-topbar{';
			$lawn_care_custom_css .='display:none !important;';
		$lawn_care_custom_css .='} }';
	}

	if($lawn_care_responsive_topbar_hide == false){
		$lawn_care_custom_css .='@media screen and (max-width:575px){
			.main-topbar{';
			$lawn_care_custom_css .='display:none !important;';
		$lawn_care_custom_css .='} }';
	}

	$lawn_care_responsive_slider_hide = get_theme_mod('lawn_care_responsive_slider_hide',true);
	if($lawn_care_responsive_slider_hide == true && get_theme_mod('lawn_care_hide_show_slider_section',true) == false){
		$lawn_care_custom_css .='@media screen and (min-width:575px){
			#slider{';
			$lawn_care_custom_css .='display:none !important;';
		$lawn_care_custom_css .='} }';
	}

	if($lawn_care_responsive_slider_hide == false){
		$lawn_care_custom_css .='@media screen and (max-width:575px){
			#slider{';
			$lawn_care_custom_css .='display:none !important;';
		$lawn_care_custom_css .='} }';
	}

	$lawn_care_responsive_preloader_hide = get_theme_mod('lawn_care_responsive_preloader_hide',false);
	if($lawn_care_responsive_preloader_hide == true && get_theme_mod('lawn_care_loader_enable',false) == false){
		$lawn_care_custom_css .='@media screen and (min-width:575px){
			#preloader{';
			$lawn_care_custom_css .='display:none !important;';
		$lawn_care_custom_css .='} }';
	}

	if($lawn_care_responsive_preloader_hide == false){
		$lawn_care_custom_css .='@media screen and (max-width:575px){
			#preloader{';
			$lawn_care_custom_css .='display:none !important;';
		$lawn_care_custom_css .='} }';
	}

	$lawn_care_resp_scroll_top = get_theme_mod( 'lawn_care_resp_scroll_top_hide_show',true);
	if($lawn_care_resp_scroll_top == true && get_theme_mod( 'lawn_care_hide_show_scroll',true) == false){
    	$lawn_care_custom_css .='.scrollup i{';
			$lawn_care_custom_css .='visibility:hidden !important;';
		$lawn_care_custom_css .='} ';
	}
    if($lawn_care_resp_scroll_top == true){
    	$lawn_care_custom_css .='@media screen and (max-width:575px) {';
		$lawn_care_custom_css .='.scrollup i{';
			$lawn_care_custom_css .='visibility:visible !important;';
		$lawn_care_custom_css .='} }';
	}else if($lawn_care_resp_scroll_top == false){
		$lawn_care_custom_css .='@media screen and (max-width:575px){';
		$lawn_care_custom_css .='.scrollup i{';
			$lawn_care_custom_css .='visibility:hidden !important;';
		$lawn_care_custom_css .='} }';
	}

	
	/*------------- Slider Content Padding Settings ------------------*/

	$lawn_care_slider_content_padding_top_bottom = get_theme_mod('lawn_care_slider_content_padding_top_bottom');
	$lawn_care_slider_content_padding_left_right = get_theme_mod('lawn_care_slider_content_padding_left_right');
	if($lawn_care_slider_content_padding_top_bottom != false || $lawn_care_slider_content_padding_left_right != false){
		$lawn_care_custom_css .='#slider .carousel-caption{';
			$lawn_care_custom_css .='top: '.esc_attr($lawn_care_slider_content_padding_top_bottom).'; bottom: '.esc_attr($lawn_care_slider_content_padding_top_bottom).';left: '.esc_attr($lawn_care_slider_content_padding_left_right).';right: '.esc_attr($lawn_care_slider_content_padding_left_right).';';
		$lawn_care_custom_css .='}';
	}
	
	/*-------------- Copyright Alignment ----------------*/

	$lawn_care_copyright_alingment = get_theme_mod('lawn_care_copyright_alingment');
	if($lawn_care_copyright_alingment != false){
		$lawn_care_custom_css .='.copyright p{';
			$lawn_care_custom_css .='text-align: '.esc_attr($lawn_care_copyright_alingment).';';
		$lawn_care_custom_css .='}';
	}

	$lawn_care_footer_background_color = get_theme_mod('lawn_care_footer_background_color');
	if($lawn_care_footer_background_color != false){
		$lawn_care_custom_css .='#footer{';
			$lawn_care_custom_css .='background-color: '.esc_attr($lawn_care_footer_background_color).';';
		$lawn_care_custom_css .='}';
	}

	/*------------- Preloader Background Color  -------------------*/

	$lawn_care_preloader_bg_color = get_theme_mod('lawn_care_preloader_bg_color');
	if($lawn_care_preloader_bg_color != false){
		$lawn_care_custom_css .='#preloader{';
			$lawn_care_custom_css .='background-color: '.esc_attr($lawn_care_preloader_bg_color).';';
		$lawn_care_custom_css .='}';
	}

	$lawn_care_preloader_border_color = get_theme_mod('lawn_care_preloader_border_color');
	if($lawn_care_preloader_border_color != false){
		$lawn_care_custom_css .='.loader-line{';
			$lawn_care_custom_css .='border-color: '.esc_attr($lawn_care_preloader_border_color).'!important;';
		$lawn_care_custom_css .='}';
	}

	$lawn_care_preloader_bg_img = get_theme_mod('lawn_care_preloader_bg_img');
	if($lawn_care_preloader_bg_img != false){
		$lawn_care_custom_css .='#preloader{';
			$lawn_care_custom_css .='background: url('.esc_attr($lawn_care_preloader_bg_img).');-webkit-background-size: cover; -moz-background-size: cover; -o-background-size: cover; background-size: cover;';
		$lawn_care_custom_css .='}';
	}

	/*---------------------- Slider ------------------------*/

	$lawn_care_slider_background_color = get_theme_mod('lawn_care_slider_background_color');
	if($lawn_care_slider_background_color != false){
		$lawn_care_custom_css .='#slider{';
			$lawn_care_custom_css .='background-color: '.esc_attr($lawn_care_slider_background_color).';';
		$lawn_care_custom_css .='}';
	}

	$lawn_care_product_background_color = get_theme_mod('lawn_care_product_background_color');
	if($lawn_care_product_background_color != false){
		$lawn_care_custom_css .='#slider:after{';
			$lawn_care_custom_css .='background-color: '.esc_attr($lawn_care_product_background_color).';';
		$lawn_care_custom_css .='}';
	}

	$lawn_care_about_sec_background_color = get_theme_mod('lawn_care_about_sec_background_color');
	if($lawn_care_about_sec_background_color != false){
		$lawn_care_custom_css .='#about-us{';
			$lawn_care_custom_css .='background-color: '.esc_attr($lawn_care_about_sec_background_color).';';
		$lawn_care_custom_css .='}';
	}

	/*-------------- Copyright Alignment ----------------*/

	$lawn_care_copyright_alingment = get_theme_mod('lawn_care_copyright_alingment');
	if($lawn_care_copyright_alingment != false){
		$lawn_care_custom_css .='.copyright p{';
			$lawn_care_custom_css .='text-align: '.esc_attr($lawn_care_copyright_alingment).';';
		$lawn_care_custom_css .='}';
	}

	$lawn_care_copyright_background_color = get_theme_mod('lawn_care_copyright_background_color');
	if($lawn_care_copyright_background_color != false){
		$lawn_care_custom_css .='#footer-2{';
			$lawn_care_custom_css .='background-color: '.esc_attr($lawn_care_copyright_background_color).';';
		$lawn_care_custom_css .='}';
	}

	$lawn_care_footer_background_image = get_theme_mod('lawn_care_footer_background_image');
	if($lawn_care_footer_background_image != false){
		$lawn_care_custom_css .='#footer{';
			$lawn_care_custom_css .='background: url('.esc_attr($lawn_care_footer_background_image).')no-repeat;background-size:cover';
		$lawn_care_custom_css .='}';
	}

	$lawn_care_theme_lay = get_theme_mod( 'lawn_care_img_footer','scroll');
	if($lawn_care_theme_lay == 'fixed'){
		$lawn_care_custom_css .='#footer{';
			$lawn_care_custom_css .='background-attachment: fixed !important; background-position: center !important;';
		$lawn_care_custom_css .='}';
	}elseif ($lawn_care_theme_lay == 'scroll'){
		$lawn_care_custom_css .='#footer{';
			$lawn_care_custom_css .='background-attachment: scroll !important; background-position: center !important;';
		$lawn_care_custom_css .='}';
	}

	$lawn_care_footer_img_position = get_theme_mod('lawn_care_footer_img_position','center center');
	if($lawn_care_footer_img_position != false){
		$lawn_care_custom_css .='#footer{';
			$lawn_care_custom_css .='background-position: '.esc_attr($lawn_care_footer_img_position).'!important;';
		$lawn_care_custom_css .='}';
	}

	$lawn_care_footer_widgets_heading = get_theme_mod( 'lawn_care_footer_widgets_heading','Left');
    if($lawn_care_footer_widgets_heading == 'Left'){
		$lawn_care_custom_css .='#footer h3, #footer .wp-block-search .wp-block-search__label{';
		$lawn_care_custom_css .='text-align: left;';
		$lawn_care_custom_css .='}';
	}else if($lawn_care_footer_widgets_heading == 'Center'){
		$lawn_care_custom_css .='#footer h3, #footer .wp-block-search .wp-block-search__label{';
			$lawn_care_custom_css .='text-align: center;';
		$lawn_care_custom_css .='}';
	}else if($lawn_care_footer_widgets_heading == 'Right'){
		$lawn_care_custom_css .='#footer h3, #footer .wp-block-search .wp-block-search__label{';
			$lawn_care_custom_css .='text-align: right;';
		$lawn_care_custom_css .='}';
	}

	$lawn_care_footer_widgets_content = get_theme_mod( 'lawn_care_footer_widgets_content','Left');
    if($lawn_care_footer_widgets_content == 'Left'){
		$lawn_care_custom_css .='#footer .widget{';
		$lawn_care_custom_css .='text-align: left;';
		$lawn_care_custom_css .='}';
	}else if($lawn_care_footer_widgets_content == 'Center'){
		$lawn_care_custom_css .='#footer .widget{';
			$lawn_care_custom_css .='text-align: center;';
		$lawn_care_custom_css .='}';
	}else if($lawn_care_footer_widgets_content == 'Right'){
		$lawn_care_custom_css .='#footer .widget{';
			$lawn_care_custom_css .='text-align: right;';
		$lawn_care_custom_css .='}';
	}

	$lawn_care_copyright_font_size = get_theme_mod('lawn_care_copyright_font_size');
	if($lawn_care_copyright_font_size != false){
		$lawn_care_custom_css .='#footer-2 a, #footer-2 p{';
			$lawn_care_custom_css .='font-size: '.esc_attr($lawn_care_copyright_font_size).';';
		$lawn_care_custom_css .='}';
	}

	$lawn_care_copyright_alingment = get_theme_mod('lawn_care_copyright_alingment');
	if($lawn_care_copyright_alingment != false){
		$lawn_care_custom_css .='#footer-2 p{';
			$lawn_care_custom_css .='text-align: '.esc_attr($lawn_care_copyright_alingment).';';
		$lawn_care_custom_css .='}';
	}

	$lawn_care_copyright_padding_top_bottom = get_theme_mod('lawn_care_copyright_padding_top_bottom');
	if($lawn_care_copyright_padding_top_bottom != false){
		$lawn_care_custom_css .='#footer-2{';
			$lawn_care_custom_css .='padding-top: '.esc_attr($lawn_care_copyright_padding_top_bottom).'; padding-bottom: '.esc_attr($lawn_care_copyright_padding_top_bottom).';';
		$lawn_care_custom_css .='}';
	}

	$lawn_care_footer_padding = get_theme_mod('lawn_care_footer_padding');
	if($lawn_care_footer_padding != false){
		$lawn_care_custom_css .='#footer{';
			$lawn_care_custom_css .='padding: '.esc_attr($lawn_care_footer_padding).' 0;';
		$lawn_care_custom_css .='}';
	}
	/*-------------- Copyright Alignment ----------------*/

	$lawn_care_copyright_alingment = get_theme_mod('lawn_care_copyright_alingment');
	if($lawn_care_copyright_alingment != false){
		$lawn_care_custom_css .='.copyright p{';
			$lawn_care_custom_css .='text-align: '.esc_attr($lawn_care_copyright_alingment).';';
		$lawn_care_custom_css .='}';
	}

	/*----------------Scroll to top Settings ------------------*/

	$lawn_care_scroll_to_top_font_size = get_theme_mod('lawn_care_scroll_to_top_font_size');
	if($lawn_care_scroll_to_top_font_size != false){
		$lawn_care_custom_css .='.scrollup i{';
			$lawn_care_custom_css .='font-size: '.esc_attr($lawn_care_scroll_to_top_font_size).';';
		$lawn_care_custom_css .='}';
	}

	$lawn_care_scroll_to_top_padding = get_theme_mod('lawn_care_scroll_to_top_padding');
	$lawn_care_scroll_to_top_padding = get_theme_mod('lawn_care_scroll_to_top_padding');
	if($lawn_care_scroll_to_top_padding != false){
		$lawn_care_custom_css .='.scrollup i{';
			$lawn_care_custom_css .='padding-top: '.esc_attr($lawn_care_scroll_to_top_padding).';padding-bottom: '.esc_attr($lawn_care_scroll_to_top_padding).';';
		$lawn_care_custom_css .='}';
	}

	$lawn_care_scroll_to_top_width = get_theme_mod('lawn_care_scroll_to_top_width');
	if($lawn_care_scroll_to_top_width != false){
		$lawn_care_custom_css .='.scrollup i{';
			$lawn_care_custom_css .='width: '.esc_attr($lawn_care_scroll_to_top_width).';';
		$lawn_care_custom_css .='}';
	}

	$lawn_care_scroll_to_top_height = get_theme_mod('lawn_care_scroll_to_top_height');
	if($lawn_care_scroll_to_top_height != false){
		$lawn_care_custom_css .='.scrollup i{';
			$lawn_care_custom_css .='height: '.esc_attr($lawn_care_scroll_to_top_height).';';
		$lawn_care_custom_css .='}';
	}

	$lawn_care_scroll_to_top_border_radius = get_theme_mod('lawn_care_scroll_to_top_border_radius');
	if($lawn_care_scroll_to_top_border_radius != false){
		$lawn_care_custom_css .='.scrollup i{';
			$lawn_care_custom_css .='border-radius: '.esc_attr($lawn_care_scroll_to_top_border_radius).'px;';
		$lawn_care_custom_css .='}';
	}

	/*------------------ Logo  -------------------*/

	$lawn_care_logo_padding = get_theme_mod('lawn_care_logo_padding');
	if($lawn_care_logo_padding != false){
		$lawn_care_custom_css .='.logo{';
			$lawn_care_custom_css .='padding: '.esc_attr($lawn_care_logo_padding).' !important;';
		$lawn_care_custom_css .='}';
	}

	$lawn_care_logo_margin = get_theme_mod('lawn_care_logo_margin');
	if($lawn_care_logo_margin != false){
		$lawn_care_custom_css .='.logo{';
			$lawn_care_custom_css .='margin: '.esc_attr($lawn_care_logo_margin).';';
		$lawn_care_custom_css .='}';
	}

	// Site title Font Size
	$lawn_care_site_title_font_size = get_theme_mod('lawn_care_site_title_font_size');
	if($lawn_care_site_title_font_size != false){
		$lawn_care_custom_css .='.logo p.site-title, .logo h1{';
			$lawn_care_custom_css .='font-size: '.esc_attr($lawn_care_site_title_font_size).';';
		$lawn_care_custom_css .='}';
	}

	// Site tagline Font Size
	$lawn_care_site_tagline_font_size = get_theme_mod('lawn_care_site_tagline_font_size');
	if($lawn_care_site_tagline_font_size != false){
		$lawn_care_custom_css .='.logo p.site-description{';
			$lawn_care_custom_css .='font-size: '.esc_attr($lawn_care_site_tagline_font_size).';';
		$lawn_care_custom_css .='}';
	}

	$lawn_care_site_title_color = get_theme_mod('lawn_care_site_title_color');
	if($lawn_care_site_title_color != false){
		$lawn_care_custom_css .='p.site-title a, .logo h1 a{';
			$lawn_care_custom_css .='color: '.esc_attr($lawn_care_site_title_color).'!important;';
		$lawn_care_custom_css .='}';
	}

	$lawn_care_site_tagline_color = get_theme_mod('lawn_care_site_tagline_color');
	if($lawn_care_site_tagline_color != false){
		$lawn_care_custom_css .='.logo p.site-description{';
			$lawn_care_custom_css .='color: '.esc_attr($lawn_care_site_tagline_color).';';
		$lawn_care_custom_css .='}';
	}

	$lawn_care_logo_width = get_theme_mod('lawn_care_logo_width');
	if($lawn_care_logo_width != false){
		$lawn_care_custom_css .='.logo img{';
			$lawn_care_custom_css .='width: '.esc_attr($lawn_care_logo_width).';';
		$lawn_care_custom_css .='}';
	}

	$lawn_care_logo_height = get_theme_mod('lawn_care_logo_height');
	if($lawn_care_logo_height != false){
		$lawn_care_custom_css .='.logo img{';
			$lawn_care_custom_css .='height: '.esc_attr($lawn_care_logo_height).';object-fit:cover;';
		$lawn_care_custom_css .='}';
	}

	// Header Background Color
	$lawn_care_header_background_color = get_theme_mod('lawn_care_header_background_color');
	if($lawn_care_header_background_color != false){
		$lawn_care_custom_css .='.page-template-custom-home-page .home-page-header, .home-page-header{';
			$lawn_care_custom_css .='background-color: '.esc_attr($lawn_care_header_background_color).';';
		$lawn_care_custom_css .='}';
	}

	$lawn_care_header_img_position = get_theme_mod('lawn_care_header_img_position','center top');
	if($lawn_care_header_img_position != false){
		$lawn_care_custom_css .='.page-template-custom-home-page .home-page-header, .home-page-header{';
			$lawn_care_custom_css .='background-position: '.esc_attr($lawn_care_header_img_position).'!important;';
		$lawn_care_custom_css .='}';
	}

	/*---------------------------Blog Layout -------------------*/

	$lawn_care_theme_lay = get_theme_mod( 'lawn_care_blog_layout_option','Default');
    if($lawn_care_theme_lay == 'Default'){
		$lawn_care_custom_css .='.post-main-box{';
			$lawn_care_custom_css .='';
		$lawn_care_custom_css .='}';
	}else if($lawn_care_theme_lay == 'Center'){
		$lawn_care_custom_css .='.post-main-box, .post-main-box h2, .post-info, .new-text p, .content-bttn{';
			$lawn_care_custom_css .='text-align:center;';
		$lawn_care_custom_css .='}';
		$lawn_care_custom_css .='.post-info{';
			$lawn_care_custom_css .='margin-top:10px;';
		$lawn_care_custom_css .='}';
		$lawn_care_custom_css .='.post-info hr{';
			$lawn_care_custom_css .='margin:15px auto;';
		$lawn_care_custom_css .='}';
	}else if($lawn_care_theme_lay == 'Left'){
		$lawn_care_custom_css .='.post-main-box, .post-main-box h2, .post-info, .new-text p, .content-bttn, #our-services p{';
			$lawn_care_custom_css .='text-align:Left;';
		$lawn_care_custom_css .='}';
		$lawn_care_custom_css .='.post-info hr{';
			$lawn_care_custom_css .='margin-bottom:10px;';
		$lawn_care_custom_css .='}';
		$lawn_care_custom_css .='.post-main-box h2{';
			$lawn_care_custom_css .='margin-top:10px;';
		$lawn_care_custom_css .='}';
		$lawn_care_custom_css .='.service-text .more-btn{';
			$lawn_care_custom_css .='display:inline-block;';
		$lawn_care_custom_css .='}';
	}

	/*--------------------- Blog Page Posts -------------------*/

	$lawn_care_blog_page_posts_settings = get_theme_mod( 'lawn_care_blog_page_posts_settings','Into Blocks');
    if($lawn_care_blog_page_posts_settings == 'Without Blocks'){
		$lawn_care_custom_css .='.post-main-box{';
			$lawn_care_custom_css .='box-shadow: none; border: none; margin:30px 0;';
		$lawn_care_custom_css .='}';
	}

	// featured image dimention
	$lawn_care_blog_post_featured_image_dimension = get_theme_mod('lawn_care_blog_post_featured_image_dimension', 'default');
	$lawn_care_blog_post_featured_image_custom_width = get_theme_mod('lawn_care_blog_post_featured_image_custom_width',250);
	$lawn_care_blog_post_featured_image_custom_height = get_theme_mod('lawn_care_blog_post_featured_image_custom_height',250);
	if($lawn_care_blog_post_featured_image_dimension == 'custom'){
		$lawn_care_custom_css .='.post-main-box img{';
			$lawn_care_custom_css .='width: '.esc_attr($lawn_care_blog_post_featured_image_custom_width).'!important; height: '.esc_attr($lawn_care_blog_post_featured_image_custom_height).';';
		$lawn_care_custom_css .='}';
	}

	/*---------------- Posts Settings ------------------*/

	$lawn_care_featured_image_border_radius = get_theme_mod('lawn_care_featured_image_border_radius', 0);
	if($lawn_care_featured_image_border_radius != false){
		$lawn_care_custom_css .='.box-image img, .feature-box img{';
			$lawn_care_custom_css .='border-radius: '.esc_attr($lawn_care_featured_image_border_radius).'px;';
		$lawn_care_custom_css .='}';
	}

	$lawn_care_featured_image_box_shadow = get_theme_mod('lawn_care_featured_image_box_shadow',0);
	if($lawn_care_featured_image_box_shadow != false){
		$lawn_care_custom_css .='.box-image img, #content-vw img{';
			$lawn_care_custom_css .='box-shadow: '.esc_attr($lawn_care_featured_image_box_shadow).'px '.esc_attr($lawn_care_featured_image_box_shadow).'px '.esc_attr($lawn_care_featured_image_box_shadow).'px #cccccc;';
		$lawn_care_custom_css .='}';
	}

	$lawn_care_related_image_box_shadow = get_theme_mod('lawn_care_related_image_box_shadow',0);
	if($lawn_care_related_image_box_shadow != false){
		$lawn_care_custom_css .='.related-post .box-image img{';
			$lawn_care_custom_css .='box-shadow: '.esc_attr($lawn_care_related_image_box_shadow).'px '.esc_attr($lawn_care_related_image_box_shadow).'px '.esc_attr($lawn_care_related_image_box_shadow).'px #cccccc;';
		$lawn_care_custom_css .='}';
	}

	/*---------------- Button Settings ------------------*/

	$lawn_care_button_letter_spacing = get_theme_mod('lawn_care_button_letter_spacing',14);
	$lawn_care_custom_css .='.post-main-box .more-btn{';
		$lawn_care_custom_css .='letter-spacing: '.esc_attr($lawn_care_button_letter_spacing).';';
	$lawn_care_custom_css .='}';

	$lawn_care_button_border_radius = get_theme_mod('lawn_care_button_border_radius');
	if($lawn_care_button_border_radius != false){
		$lawn_care_custom_css .='.post-main-box .more-btn a{';
			$lawn_care_custom_css .='border-radius: '.esc_attr($lawn_care_button_border_radius).'px !important;';
		$lawn_care_custom_css .='}';
	}

	$lawn_care_button_top_bottom_padding = get_theme_mod('lawn_care_button_top_bottom_padding');
	$lawn_care_button_left_right_padding = get_theme_mod('lawn_care_button_left_right_padding');
	if($lawn_care_button_top_bottom_padding != false || $lawn_care_button_left_right_padding != false){
		$lawn_care_custom_css .='.post-main-box .more-btn{';
			$lawn_care_custom_css .='padding-top: '.esc_attr($lawn_care_button_top_bottom_padding).'!important; padding-bottom: '.esc_attr($lawn_care_button_top_bottom_padding).'!important;padding-left: '.esc_attr($lawn_care_button_left_right_padding).'!important;padding-right: '.esc_attr($lawn_care_button_left_right_padding).'!important;';
		$lawn_care_custom_css .='}';
	}

	$lawn_care_button_font_size = get_theme_mod('lawn_care_button_font_size',14);
	$lawn_care_custom_css .='.post-main-box .more-btn a{';
		$lawn_care_custom_css .='font-size: '.esc_attr($lawn_care_button_font_size).';';
	$lawn_care_custom_css .='}';

	$lawn_care_theme_lay = get_theme_mod( 'lawn_care_button_text_transform','Capitalize');
	if($lawn_care_theme_lay == 'Capitalize'){
		$lawn_care_custom_css .='.post-main-box .more-btn a{';
			$lawn_care_custom_css .='text-transform:Capitalize;';
		$lawn_care_custom_css .='}';
	}
	if($lawn_care_theme_lay == 'Lowercase'){
		$lawn_care_custom_css .='.post-main-box .more-btn a{';
			$lawn_care_custom_css .='text-transform:Lowercase;';
		$lawn_care_custom_css .='}';
	}
	if($lawn_care_theme_lay == 'Uppercase'){
		$lawn_care_custom_css .='.post-main-box .more-btn a{';
			$lawn_care_custom_css .='text-transform:Uppercase;';
		$lawn_care_custom_css .='}';
	}

	/*---------------- Single Blog Page Settings ------------------*/

	$lawn_care_single_blog_comment_button_text = get_theme_mod('lawn_care_single_blog_comment_button_text', 'Post Comment');
	if($lawn_care_single_blog_comment_button_text == ''){
		$lawn_care_custom_css .='#comments p.form-submit {';
			$lawn_care_custom_css .='display: none;';
		$lawn_care_custom_css .='}';
	}

	$lawn_care_comment_width = get_theme_mod('lawn_care_single_blog_comment_width');
	if($lawn_care_comment_width != false){
		$lawn_care_custom_css .='#comments textarea{';
			$lawn_care_custom_css .='width: '.esc_attr($lawn_care_comment_width).';';
		$lawn_care_custom_css .='}';
	}

	$lawn_care_single_blog_post_navigation_show_hide = get_theme_mod('lawn_care_single_blog_post_navigation_show_hide',true);
	if($lawn_care_single_blog_post_navigation_show_hide != true){
		$lawn_care_custom_css .='.post-navigation{';
			$lawn_care_custom_css .='display: none;';
		$lawn_care_custom_css .='}';
	}

	/*--------------------- Grid Posts Posts -------------------*/

	$lawn_care_display_grid_posts_settings = get_theme_mod( 'lawn_care_display_grid_posts_settings','Into Blocks');
    if($lawn_care_display_grid_posts_settings == 'Without Blocks'){
		$lawn_care_custom_css .='.grid-post-main-box{';
			$lawn_care_custom_css .='box-shadow: none; border: none; margin:30px 0;';
		$lawn_care_custom_css .='}';
	}

	$lawn_care_grid_featured_image_box_shadow = get_theme_mod('lawn_care_grid_featured_image_box_shadow',0);
	if($lawn_care_grid_featured_image_box_shadow != false){
		$lawn_care_custom_css .='.grid-post-main-box .box-image img, .grid-post-main-box .feature-box img, #content-vw img{';
			$lawn_care_custom_css .='box-shadow: '.esc_attr($lawn_care_grid_featured_image_box_shadow).'px '.esc_attr($lawn_care_grid_featured_image_box_shadow).'px '.esc_attr($lawn_care_grid_featured_image_box_shadow).'px #cccccc;';
		$lawn_care_custom_css .='}';
	}

	$lawn_care_grid_featured_image_border_radius = get_theme_mod('lawn_care_grid_featured_image_border_radius', 0);
	if($lawn_care_grid_featured_image_border_radius != false){
		$lawn_care_custom_css .='.grid-post-main-box .box-image img, .grid-post-main-box .feature-box img, #content-vw img{';
			$lawn_care_custom_css .='border-radius: '.esc_attr($lawn_care_grid_featured_image_border_radius).'px;';
		$lawn_care_custom_css .='}';
	}
	/*----------------Woocommerce Products Settings ------------------*/

	$lawn_care_related_product_show_hide = get_theme_mod('lawn_care_related_product_show_hide',true);
	if($lawn_care_related_product_show_hide != true){
		$lawn_care_custom_css .='.related.products{';
			$lawn_care_custom_css .='display: none;';
		$lawn_care_custom_css .='}';
	}

	/*----------------Woocommerce Products Settings ------------------*/

	$lawn_care_products_padding_top_bottom = get_theme_mod('lawn_care_products_padding_top_bottom');
	if($lawn_care_products_padding_top_bottom != false){
		$lawn_care_custom_css .='.woocommerce ul.products li.product, .woocommerce-page ul.products li.product{';
			$lawn_care_custom_css .='padding-top: '.esc_attr($lawn_care_products_padding_top_bottom).'!important; padding-bottom: '.esc_attr($lawn_care_products_padding_top_bottom).'!important;';
		$lawn_care_custom_css .='}';
	}

	$lawn_care_products_padding_left_right = get_theme_mod('lawn_care_products_padding_left_right');
	if($lawn_care_products_padding_left_right != false){
		$lawn_care_custom_css .='.woocommerce ul.products li.product, .woocommerce-page ul.products li.product{';
			$lawn_care_custom_css .='padding-left: '.esc_attr($lawn_care_products_padding_left_right).'!important; padding-right: '.esc_attr($lawn_care_products_padding_left_right).'!important;';
		$lawn_care_custom_css .='}';
	}

	$lawn_care_products_box_shadow = get_theme_mod('lawn_care_products_box_shadow');
	if($lawn_care_products_box_shadow != false){
		$lawn_care_custom_css .='.woocommerce ul.products li.product, .woocommerce-page ul.products li.product{';
				$lawn_care_custom_css .='box-shadow: '.esc_attr($lawn_care_products_box_shadow).'px '.esc_attr($lawn_care_products_box_shadow).'px '.esc_attr($lawn_care_products_box_shadow).'px #ddd;';
		$lawn_care_custom_css .='}';
	}

	$lawn_care_products_border_radius = get_theme_mod('lawn_care_products_border_radius');
	if($lawn_care_products_border_radius != false){
		$lawn_care_custom_css .='.woocommerce ul.products li.product, .woocommerce-page ul.products li.product{';
			$lawn_care_custom_css .='border-radius: '.esc_attr($lawn_care_products_border_radius).'px;';
		$lawn_care_custom_css .='}';
	}

	$lawn_care_products_btn_padding_top_bottom = get_theme_mod('lawn_care_products_btn_padding_top_bottom');
	if($lawn_care_products_btn_padding_top_bottom != false){
		$lawn_care_custom_css .='.woocommerce a.button{';
			$lawn_care_custom_css .='padding-top: '.esc_attr($lawn_care_products_btn_padding_top_bottom).' !important; padding-bottom: '.esc_attr($lawn_care_products_btn_padding_top_bottom).' !important;';
		$lawn_care_custom_css .='}';
	}

	$lawn_care_products_btn_padding_left_right = get_theme_mod('lawn_care_products_btn_padding_left_right');
	if($lawn_care_products_btn_padding_left_right != false){
		$lawn_care_custom_css .='.woocommerce a.button{';
			$lawn_care_custom_css .='padding-left: '.esc_attr($lawn_care_products_btn_padding_left_right).' !important; padding-right: '.esc_attr($lawn_care_products_btn_padding_left_right).' !important;';
		$lawn_care_custom_css .='}';
	}

	$lawn_care_products_button_border_radius = get_theme_mod('lawn_care_products_button_border_radius', 0);
	if($lawn_care_products_button_border_radius != false){
		$lawn_care_custom_css .='.woocommerce ul.products li.product .button, a.checkout-button.button.alt.wc-forward,.woocommerce #respond input#submit, .woocommerce a.button, .woocommerce button.button, .woocommerce input.button, .woocommerce #respond input#submit.alt, .woocommerce a.button.alt, .woocommerce button.button.alt, .woocommerce input.button.alt,.woocommerce a.button{';
			$lawn_care_custom_css .='border-radius: '.esc_attr($lawn_care_products_button_border_radius).'px !important;';
		$lawn_care_custom_css .='}';
	}

	$lawn_care_woocommerce_sale_position = get_theme_mod( 'lawn_care_woocommerce_sale_position','right');
    if($lawn_care_woocommerce_sale_position == 'left'){
		$lawn_care_custom_css .='.woocommerce ul.products li.product .onsale{';
			$lawn_care_custom_css .='left: 14px !important; right: auto !important;';
		$lawn_care_custom_css .='}';
	}else if($lawn_care_woocommerce_sale_position == 'right'){
		$lawn_care_custom_css .='.woocommerce ul.products li.product .onsale{';
			$lawn_care_custom_css .='left: auto!important; right: 14px !important;';
		$lawn_care_custom_css .='}';
	}

	$lawn_care_woocommerce_sale_font_size = get_theme_mod('lawn_care_woocommerce_sale_font_size');
	if($lawn_care_woocommerce_sale_font_size != false){
		$lawn_care_custom_css .='.woocommerce span.onsale{';
			$lawn_care_custom_css .='font-size: '.esc_attr($lawn_care_woocommerce_sale_font_size).';';
		$lawn_care_custom_css .='}';
	}

	$lawn_care_woocommerce_sale_padding_top_bottom = get_theme_mod('lawn_care_woocommerce_sale_padding_top_bottom');
	if($lawn_care_woocommerce_sale_padding_top_bottom != false){
		$lawn_care_custom_css .='.woocommerce span.onsale{';
			$lawn_care_custom_css .='padding-top: '.esc_attr($lawn_care_woocommerce_sale_padding_top_bottom).'; padding-bottom: '.esc_attr($lawn_care_woocommerce_sale_padding_top_bottom).';';
		$lawn_care_custom_css .='}';
	}

	$lawn_care_woocommerce_sale_padding_left_right = get_theme_mod('lawn_care_woocommerce_sale_padding_left_right');
	if($lawn_care_woocommerce_sale_padding_left_right != false){
		$lawn_care_custom_css .='.woocommerce span.onsale{';
			$lawn_care_custom_css .='padding-left: '.esc_attr($lawn_care_woocommerce_sale_padding_left_right).'; padding-right: '.esc_attr($lawn_care_woocommerce_sale_padding_left_right).';';
		$lawn_care_custom_css .='}';
	}

	$lawn_care_woocommerce_sale_border_radius = get_theme_mod('lawn_care_woocommerce_sale_border_radius', 0);
	if($lawn_care_woocommerce_sale_border_radius != false){
		$lawn_care_custom_css .='.woocommerce span.onsale{';
			$lawn_care_custom_css .='border-radius: '.esc_attr($lawn_care_woocommerce_sale_border_radius).'px;';
		$lawn_care_custom_css .='}';
	}

	/*-------------- Sticky Header Padding ----------------*/

	$lawn_care_sticky_header_padding = get_theme_mod('lawn_care_sticky_header_padding');
	if($lawn_care_sticky_header_padding != false){
		$lawn_care_custom_css .='.header-fixed{';
			$lawn_care_custom_css .='padding: '.esc_attr($lawn_care_sticky_header_padding).';';
		$lawn_care_custom_css .='}';
	}

	/*----------------Social Icons Settings ------------------*/

	$lawn_care_social_icon_font_size = get_theme_mod('lawn_care_social_icon_font_size');
	if($lawn_care_social_icon_font_size != false){
		$lawn_care_custom_css .='#sidebar .custom-social-icons i, #footer .custom-social-icons i{';
			$lawn_care_custom_css .='font-size: '.esc_attr($lawn_care_social_icon_font_size).';';
		$lawn_care_custom_css .='}';
	}

	$lawn_care_social_icon_padding = get_theme_mod('lawn_care_social_icon_padding');
	if($lawn_care_social_icon_padding != false){
		$lawn_care_custom_css .='#sidebar .custom-social-icons i, #footer .custom-social-icons i{';
			$lawn_care_custom_css .='padding: '.esc_attr($lawn_care_social_icon_padding).';';
		$lawn_care_custom_css .='}';
	}

	$lawn_care_social_icon_width = get_theme_mod('lawn_care_social_icon_width');
	if($lawn_care_social_icon_width != false){
		$lawn_care_custom_css .='#sidebar .custom-social-icons i, #footer .custom-social-icons i{';
			$lawn_care_custom_css .='width: '.esc_attr($lawn_care_social_icon_width).';';
		$lawn_care_custom_css .='}';
	}

	$lawn_care_social_icon_height = get_theme_mod('lawn_care_social_icon_height');
	if($lawn_care_social_icon_height != false){
		$lawn_care_custom_css .='#sidebar .custom-social-icons i, #footer .custom-social-icons i{';
			$lawn_care_custom_css .='height: '.esc_attr($lawn_care_social_icon_height).';';
		$lawn_care_custom_css .='}';
	}

	$lawn_care_social_icon_border_radius = get_theme_mod('lawn_care_social_icon_border_radius');
	if($lawn_care_social_icon_border_radius != false){
		$lawn_care_custom_css .='#sidebar .custom-social-icons i, #footer .custom-social-icons i{';
			$lawn_care_custom_css .='border-radius: '.esc_attr($lawn_care_social_icon_border_radius).'px;';
		$lawn_care_custom_css .='}';
	}

	$lawn_care_resp_menu_toggle_btn_bg_color = get_theme_mod('lawn_care_resp_menu_toggle_btn_bg_color');
	if($lawn_care_resp_menu_toggle_btn_bg_color != false){
		$lawn_care_custom_css .='.toggle-nav i,#mySidenav .closebtn{';
			$lawn_care_custom_css .='background: '.esc_attr($lawn_care_resp_menu_toggle_btn_bg_color).';';
		$lawn_care_custom_css .='}';
	}

	$lawn_care_singlepost_image_box_shadow = get_theme_mod('lawn_care_singlepost_image_box_shadow',0);
	if($lawn_care_singlepost_image_box_shadow != false){
		$lawn_care_custom_css .='.feature-box img{';
			$lawn_care_custom_css .='box-shadow: '.esc_attr($lawn_care_singlepost_image_box_shadow).'px '.esc_attr($lawn_care_singlepost_image_box_shadow).'px '.esc_attr($lawn_care_singlepost_image_box_shadow).'px #cccccc;';
		$lawn_care_custom_css .='}';
	}

	/*-------------- Menus Setings ----------------*/

	$lawn_care_navigation_menu_font_size = get_theme_mod('lawn_care_navigation_menu_font_size');
	if($lawn_care_navigation_menu_font_size != false){
		$lawn_care_custom_css .='.main-navigation ul a{';
			$lawn_care_custom_css .='font-size: '.esc_attr($lawn_care_navigation_menu_font_size).';';
		$lawn_care_custom_css .='}';
	}

	$lawn_care_navigation_menu_font_weight = get_theme_mod('lawn_care_navigation_menu_font_weight','600');
	if($lawn_care_navigation_menu_font_weight != false){
		$lawn_care_custom_css .='.main-navigation ul a{';
			$lawn_care_custom_css .='font-weight: '.esc_attr($lawn_care_navigation_menu_font_weight).';';
		$lawn_care_custom_css .='}';
	}

	$lawn_care_theme_lay = get_theme_mod( 'lawn_care_menu_text_transform','Capitalize');
	if($lawn_care_theme_lay == 'Capitalize'){
		$lawn_care_custom_css .='.main-navigation ul a{';
			$lawn_care_custom_css .='text-transform:Capitalize;';
		$lawn_care_custom_css .='}';
	}
	if($lawn_care_theme_lay == 'Lowercase'){
		$lawn_care_custom_css .='.main-navigation ul a{';
			$lawn_care_custom_css .='text-transform:Lowercase;';
		$lawn_care_custom_css .='}';
	}
	if($lawn_care_theme_lay == 'Uppercase'){
		$lawn_care_custom_css .='.main-navigation ul a{';
			$lawn_care_custom_css .='text-transform:Uppercase;';
		$lawn_care_custom_css .='}';
	}

	$lawn_care_header_menus_color = get_theme_mod('lawn_care_header_menus_color');
	if($lawn_care_header_menus_color != false){
		$lawn_care_custom_css .='.main-navigation ul a{';
			$lawn_care_custom_css .='color: '.esc_attr($lawn_care_header_menus_color).';';
		$lawn_care_custom_css .='}';
	}

	$lawn_care_header_menus_hover_color = get_theme_mod('lawn_care_header_menus_hover_color');
	if($lawn_care_header_menus_hover_color != false){
		$lawn_care_custom_css .='.main-navigation ul a:hover{';
			$lawn_care_custom_css .='color: '.esc_attr($lawn_care_header_menus_hover_color).';';
		$lawn_care_custom_css .='}';
	}

	$lawn_care_header_submenus_color = get_theme_mod('lawn_care_header_submenus_color');
	if($lawn_care_header_submenus_color != false){
		$lawn_care_custom_css .='.main-navigation ul ul a{';
			$lawn_care_custom_css .='color: '.esc_attr($lawn_care_header_submenus_color).';';
		$lawn_care_custom_css .='}';
	}

	$lawn_care_header_submenus_hover_color = get_theme_mod('lawn_care_header_submenus_hover_color');
	if($lawn_care_header_submenus_hover_color != false){
		$lawn_care_custom_css .='.main-navigation ul.sub-menu a:hover{';
			$lawn_care_custom_css .='color: '.esc_attr($lawn_care_header_submenus_hover_color).'!important;';
		$lawn_care_custom_css .='}';
	}

	$lawn_care_menus_item = get_theme_mod( 'lawn_care_menus_item_style','None');
    if($lawn_care_menus_item == 'None'){
		$lawn_care_custom_css .='.main-navigation ul a{';
			$lawn_care_custom_css .='';
		$lawn_care_custom_css .='}';
	}else if($lawn_care_menus_item == 'Zoom In'){
		$lawn_care_custom_css .='.main-navigation ul a:hover{';
			$lawn_care_custom_css .='transition: all 0.3s ease-in-out !important; transform: scale(1.2) !important;';
		$lawn_care_custom_css .='}';
	}

	/*---------------------------Footer Style -------------------*/

	$lawn_care_theme_lay = get_theme_mod( 'lawn_care_footer_template','lawn_care-footer-one');
    if($lawn_care_theme_lay == 'lawn_care-footer-one'){
		$lawn_care_custom_css .='#footer{';
			$lawn_care_custom_css .='';
		$lawn_care_custom_css .='}';

	}else if($lawn_care_theme_lay == 'lawn_care-footer-two'){
		$lawn_care_custom_css .='#footer{';
			$lawn_care_custom_css .='background: linear-gradient(to right, #f9f8ff, #dedafa);';
		$lawn_care_custom_css .='}';
		$lawn_care_custom_css .='#footer p, #footer li a, #footer, #footer h3, #footer a.rsswidget, #footer #wp-calendar a, .copyright a, #footer .custom_details, #footer ins span, #footer .tagcloud a, .main-inner-box span.entry-date a, nav.woocommerce-MyAccount-navigation ul li:hover a, #footer ul li a, #footer table, #footer th, #footer td, #footer caption, #sidebar caption,#footer nav.wp-calendar-nav a,#footer .search-form .search-field{';
			$lawn_care_custom_css .='color:#000;';
		$lawn_care_custom_css .='}';
		$lawn_care_custom_css .='#footer ul li::before{';
			$lawn_care_custom_css .='background:#000;';
		$lawn_care_custom_css .='}';
		$lawn_care_custom_css .='#footer table, #footer th, #footer td,#footer .search-form .search-field,#footer .tagcloud a{';
			$lawn_care_custom_css .='border: 1px solid #000;';
		$lawn_care_custom_css .='}';

	}else if($lawn_care_theme_lay == 'lawn_care-footer-three'){
		$lawn_care_custom_css .='#footer{';
			$lawn_care_custom_css .='background: #232524;';
		$lawn_care_custom_css .='}';
	}
	else if($lawn_care_theme_lay == 'lawn_care-footer-four'){
		$lawn_care_custom_css .='#footer{';
			$lawn_care_custom_css .='background: #299922;';
		$lawn_care_custom_css .='}';
		$lawn_care_custom_css .='#footer p, #footer li a, #footer, #footer h3, #footer a.rsswidget, #footer #wp-calendar a, .copyright a, #footer .custom_details, #footer ins span, #footer .tagcloud a, .main-inner-box span.entry-date a, nav.woocommerce-MyAccount-navigation ul li:hover a, #footer ul li a, #footer table, #footer th, #footer td, #footer caption, #sidebar caption,#footer nav.wp-calendar-nav a,#footer .search-form .search-field{';
			$lawn_care_custom_css .='color:#fff;';
		$lawn_care_custom_css .='}';
		$lawn_care_custom_css .='#footer ul li::before{';
			$lawn_care_custom_css .='background:#fff;';
		$lawn_care_custom_css .='}';
		$lawn_care_custom_css .='#footer table, #footer th, #footer td,#footer .search-form .search-field,#footer .tagcloud a{';
			$lawn_care_custom_css .='border: 1px solid #fff;';
		$lawn_care_custom_css .='}';
	}
	else if($lawn_care_theme_lay == 'lawn_care-footer-five'){
		$lawn_care_custom_css .='#footer{';
			$lawn_care_custom_css .='background: linear-gradient(to right, #01093a, #2d0b00);';
		$lawn_care_custom_css .='}';
	}

	/*---------------- Footer Settings ------------------*/

	$lawn_care_button_footer_heading_letter_spacing = get_theme_mod('lawn_care_button_footer_heading_letter_spacing',1);
	$lawn_care_custom_css .='#footer h3, a.rsswidget.rss-widget-title{';
		$lawn_care_custom_css .='letter-spacing: '.esc_attr($lawn_care_button_footer_heading_letter_spacing).'px;';
	$lawn_care_custom_css .='}';

	$lawn_care_button_footer_font_size = get_theme_mod('lawn_care_button_footer_font_size','30');
	$lawn_care_custom_css .='#footer h3, a.rsswidget.rss-widget-title{';
		$lawn_care_custom_css .='font-size: '.esc_attr($lawn_care_button_footer_font_size).'px;';
	$lawn_care_custom_css .='}';

	$lawn_care_theme_lay = get_theme_mod( 'lawn_care_button_footer_text_transform','Capitalize');
	if($lawn_care_theme_lay == 'Capitalize'){
		$lawn_care_custom_css .='#footer h3{';
			$lawn_care_custom_css .='text-transform:Capitalize;';
		$lawn_care_custom_css .='}';
	}
	if($lawn_care_theme_lay == 'Lowercase'){
		$lawn_care_custom_css .='#footer h3, a.rsswidget.rss-widget-title{';
			$lawn_care_custom_css .='text-transform:Lowercase;';
		$lawn_care_custom_css .='}';
	}
	if($lawn_care_theme_lay == 'Uppercase'){
		$lawn_care_custom_css .='#footer h3, a.rsswidget.rss-widget-title{';
			$lawn_care_custom_css .='text-transform:Uppercase;';
		$lawn_care_custom_css .='}';
	}

	$lawn_care_footer_heading_weight = get_theme_mod('lawn_care_footer_heading_weight','600');
	if($lawn_care_footer_heading_weight != false){
		$lawn_care_custom_css .='#footer h3, a.rsswidget.rss-widget-title{';
			$lawn_care_custom_css .='font-weight: '.esc_attr($lawn_care_footer_heading_weight).';';
		$lawn_care_custom_css .='}';
	}
	
	$lawn_care_slider_first_color = get_theme_mod('lawn_care_slider_first_color');

	$lawn_care_slider_second_color = get_theme_mod('lawn_care_slider_second_color');

	if($lawn_care_slider_first_color != false || $lawn_care_slider_second_color != false){
		$lawn_care_custom_css .='.box{
		background: linear-gradient(to top, '.esc_attr($lawn_care_slider_first_color).', '.esc_attr($lawn_care_slider_second_color).');
		}';
	}

	$lawn_care_services_icon_color = get_theme_mod('lawn_care_services_icon_color');
	if($lawn_care_services_icon_color != false){
		$lawn_care_custom_css .='#about-sec i{';
			$lawn_care_custom_css .='color: '.esc_attr($lawn_care_services_icon_color).';';
		$lawn_care_custom_css .='}';
	}


	$lawn_care_breadcrumbs_alignment = get_theme_mod( 'lawn_care_breadcrumbs_alignment','Left');
    if($lawn_care_breadcrumbs_alignment == 'Left'){
		$lawn_care_custom_css .='.bradcrumbs{';
			$lawn_care_custom_css .='text-align:start;';
		$lawn_care_custom_css .='}';
	}else if($lawn_care_breadcrumbs_alignment == 'Center'){
		$lawn_care_custom_css .='.bradcrumbs{';
			$lawn_care_custom_css .='text-align:center;';
		$lawn_care_custom_css .='}';
	}else if($lawn_care_breadcrumbs_alignment == 'Right'){
		$lawn_care_custom_css .='.bradcrumbs{';
			$lawn_care_custom_css .='text-align:end;';
		$lawn_care_custom_css .='}';
	}