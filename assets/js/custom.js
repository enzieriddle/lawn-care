// menus 
function lawn_care_menu_open_nav() {
	window.lawn_care_responsiveMenu=true;
	jQuery(".sidenav").addClass('show');
}
function lawn_care_menu_close_nav() {
	window.lawn_care_responsiveMenu=false;
 	jQuery(".sidenav").removeClass('show');
}
jQuery(function($){
 	"use strict";
 	jQuery('.main-menu > ul').superfish({
		delay: 500,
		animation: {opacity:'show',height:'show'},
		speed: 'fast'
 	});
});

jQuery(document).ready(function () {
	window.lawn_care_currentfocus=null;
  	lawn_care_checkfocusdElement();
	var lawn_care_body = document.querySelector('body');
	lawn_care_body.addEventListener('keyup', lawn_care_check_tab_press);
	var lawn_care_gotoHome = false;
	var lawn_care_gotoClose = false;
	window.lawn_care_responsiveMenu=false;
 	function lawn_care_checkfocusdElement(){
	 	if(window.lawn_care_currentfocus=document.activeElement.className){
		 	window.lawn_care_currentfocus=document.activeElement.className;
	 	}
 	}
 	function lawn_care_check_tab_press(e) {
		"use strict";
		// pick passed event or global event object if passed one is empty
		e = e || event;
		var activeElement;

		if(window.innerWidth < 999){
		if (e.keyCode == 9) {
			if(window.lawn_care_responsiveMenu){
			if (!e.shiftKey) {
				if(lawn_care_gotoHome) {
					jQuery( ".main-menu ul:first li:first a:first-child" ).focus();
				}
			}
			if (jQuery("a.closebtn.mobile-menu").is(":focus")) {
				lawn_care_gotoHome = true;
			} else {
				lawn_care_gotoHome = false;
			}

		}else{

			if(window.lawn_care_currentfocus=="responsivetoggle"){
				jQuery( "" ).focus();
			}}}
		}
		if (e.shiftKey && e.keyCode == 9) {
		if(window.innerWidth < 999){
			if(window.lawn_care_currentfocus=="header-search"){
				jQuery(".responsivetoggle").focus();
			}else{
				if(window.lawn_care_responsiveMenu){
				if(lawn_care_gotoClose){
					jQuery("a.closebtn.mobile-menu").focus();
				}
				if (jQuery( ".main-menu ul:first li:first a:first-child" ).is(":focus")) {
					lawn_care_gotoClose = true;
				} else {
					lawn_care_gotoClose = false;
				}

			}else{

			if(window.lawn_care_responsiveMenu){
			}}}}
		}
	 	lawn_care_checkfocusdElement();
	}
});

jQuery('document').ready(function($){
	// preloader
  setTimeout(function () {
		jQuery("#preloader").fadeOut("slow");
  },1000);

  // Sticky Header
  $(window).scroll(function(){
		var sticky = $('.header-sticky'),
			scroll = $(window).scrollTop();

		if (scroll >= 100) sticky.addClass('header-fixed');
		else sticky.removeClass('header-fixed');
	});
});

// Scroller
jQuery(document).ready(function () {
	jQuery(window).scroll(function () {
    if (jQuery(this).scrollTop() > 100) {
      jQuery('.scrollup i').fadeIn();
    } else {
      jQuery('.scrollup i').fadeOut();
    }
	});
	jQuery('.scrollup i').click(function () {
    jQuery("html, body").animate({
      scrollTop: 0
    }, 600);
    return false;
	});
});

// search
jQuery(document).ready(function () {
    function lawn_care_search_loop_focus(element) {
    var lawn_care_focus = element.find('select, input, textarea, button, a[href]');
    var lawn_care_firstFocus = lawn_care_focus[0];  
    var lawn_care_lastFocus = lawn_care_focus[lawn_care_focus.length - 1];
    var KEYCODE_TAB = 9;

    element.on('keydown', function lawn_care_search_loop_focus(e) {
      var isTabPressed = (e.key === 'Tab' || e.keyCode === KEYCODE_TAB);

      if (!isTabPressed) { 
        return; 
      }

      if ( e.shiftKey ) /* shift + tab */ {
        if (document.activeElement === lawn_care_firstFocus) {
          lawn_care_lastFocus.focus();
            e.preventDefault();
          }
        } else /* tab */ {
        if (document.activeElement === lawn_care_lastFocus) {
          lawn_care_firstFocus.focus();
            e.preventDefault();
          }
        }
    });
  }
  jQuery('.search-box span a').click(function(){
      jQuery(".serach_outer").slideDown(1000);
      lawn_care_search_loop_focus(jQuery('.serach_outer'));
  });

  jQuery('.closepop a').click(function(){
      jQuery(".serach_outer").slideUp(1000);
  });
});

// Category Section
jQuery(document).ready(function($) {
    // Initially hide all posts
    $('#category-posts .post-item').hide();

    // Show posts from the first category by default
    var firstCategoryId = $('.drp_dwn_menu').first().data('category-id');
    $('.drp_dwn_menu').first().addClass('active');
    $('#category-posts .category-' + firstCategoryId).show();

    // Handle category selection
    $('.drp_dwn_menu').on('click', function(e) {
        e.preventDefault();

        // Get selected category ID
        var categoryId = $(this).data('category-id');

        // Hide all posts and show posts of the selected category
        $('#category-posts .post-item').hide();
        $('#category-posts .category-' + categoryId).show();

        // Update active class on category links
        $('.drp_dwn_menu').removeClass('active');
        $(this).addClass('active');
    });
});
