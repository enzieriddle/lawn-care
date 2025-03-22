<?php
/**
 * The template part for Top Header
 *
 * @package Lawn Care 
 * @subpackage lawn-care
 * @since lawn-care 1.0
 */
?>

<div class="main-header <?php if( get_theme_mod( 'lawn_care_sticky_header', false) == 1 || get_theme_mod( 'lawn_care_stickyheader_hide_show', false) == 1) { ?> header-sticky"<?php } else { ?>close-sticky <?php } ?>">
  <?php if (get_theme_mod('lawn_care_hide_show_topbar', true) || get_theme_mod('lawn_care_responsive_topbar_hide',true)) { ?>
    <div class="main-topbar py-2">
      <div class="container">
        <div class="row">
          <div class="col-xl-4 col-lg-4 col-md-4 col-sm-6 col-12 align-self-center">
            <?php if(get_theme_mod('lawn_care_phone_number') != ''){ ?>
              <span class="phone-number">
                <i class="<?php echo esc_attr( get_theme_mod('lawn_care_phone_icon', 'fa-solid fa-phone') ); ?> me-2"></i>
                <?php esc_html_e('Toll Free :  ', 'lawn-care'); ?>
                <a href="tel:<?php echo esc_attr( get_theme_mod('lawn_care_phone_number', '') ); ?>">
                  <?php echo esc_html( get_theme_mod('lawn_care_phone_number', '') ); ?>
                </a>
              </span>
            <?php } ?>
          </div>
          <div class="col-xl-3 col-lg-3 col-md-4 col-sm-6 col-12 align-self-center mail">
            <?php if(get_theme_mod('lawn_care_email_address') != ''){ ?>
              <a href="mailto:<?php echo esc_attr(get_theme_mod('lawn_care_email_address',''));?>"><i class="<?php echo esc_attr(get_theme_mod('lawn_care_email_address_icon','fa-solid fa-envelope-open-text')); ?> me-2"></i><span><?php echo esc_html(get_theme_mod('lawn_care_email_address',''));?></span></a>
            <?php } ?>
          </div>
          <div class="col-xl-5 col-lg-5 col-md-4 col-sm-12 col-12 align-self-center">
            <div class="topbar-social-icon">
              <?php if (is_active_sidebar('topbar-social-icon')) : ?>
                <?php dynamic_sidebar('topbar-social-icon'); ?>
              <?php else : ?>
                <!-- Default Social Icons Widgets -->
                <div class="widget py-3 text-end">
                  <a href="https://facebook.com" target="_blank"><i class="fab fa-facebook"></i></a>
                  <a href="https://twitter.com" target="_blank"><i class="fab fa-twitter"></i></a>
                  <a href="https://instgram.com" target="_blank"><i class="fab fa-instagram"></i></a>
                  <a href="https://linkedin.com" target="_blank"><i class="fab fa-linkedin"></i></a>
                  <a href="https://pinterest.com" target="_blank"><i class="fab fa-pinterest"></i></a>
                  <a href="https://youtube.com" target="_blank"><i class="fab fa-youtube"></i></a>
                </div>
              <?php endif; ?>
            </div>
          </div>
        </div>
      </div>
    </div>
  <?php }?>
  <div class="menu-header">
    <div class="container py-1">
      <div class="top-menu-box">
        <div class="row">
          <div class="col-xxl-3 col-xl-3 col-lg-3 col-md-3 col-sm-6 col-6 align-self-center logo-img-sec">
            <div class="logo text-start pb-0 pb-md-0">
              <?php if ( has_custom_logo() ) : ?>
                <div class="site-logo"><?php the_custom_logo(); ?></div>
              <?php endif; ?>
              <?php $lawn_care_blog_info = get_bloginfo( 'name' ); ?>
                <?php if ( ! empty( $lawn_care_blog_info ) ) : ?>
                  <?php if ( is_front_page() && is_home() ) : ?>
                    <?php if( get_theme_mod('lawn_care_logo_title_hide_show',true) == 1){ ?>
                      <p class="site-title mb-0"><a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home"><?php bloginfo( 'name' ); ?></a></p>
                    <?php } ?>
                  <?php else : ?>
                    <?php if( get_theme_mod('lawn_care_logo_title_hide_show',true) == 1){ ?>
                      <p class="site-title mb-0"><a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home"><?php bloginfo( 'name' ); ?></a></p>
                    <?php } ?>
                  <?php endif; ?>
                <?php endif; ?>
                <?php
                  $lawn_care_description = get_bloginfo( 'description', 'display' );
                  if ( $lawn_care_description || is_customize_preview() ) :
                ?>
                <?php if( get_theme_mod('lawn_care_tagline_hide_show',false) == 1){ ?>
                  <p class="site-description mb-0">
                    <?php echo esc_html($lawn_care_description); ?>
                  </p>
                <?php } ?>
              <?php endif; ?>
            </div>
          </div>
          <div class="col-xxl-8 col-xl-8 col-lg-8 col-md-3 col-sm-3 col-3 align-self-center header-sec-top">
            <?php get_template_part('template-parts/header/navigation'); ?>
          </div>
          <div class="col-xxl-1 col-xl-1 col-lg-1 col-md-6 col-sm-3 col-3 align-self-center d-flex justify-content-end gap-2 top-btn">
            <?php if (get_theme_mod('lawn_care_search_hide_show', true)){ ?>
              <div class="search-box">
                <span><a href="#"><i class='<?php echo esc_attr(get_theme_mod('lawn_care_search_open_icon','fas fa-search')); ?>'></i></a></span>
              </div>
              <div class="serach_outer">
                <div class="closepop"><a href="#maincontent"><i class="<?php echo esc_attr(get_theme_mod('lawn_care_search_close_icon','fa fa-window-close')); ?>"></i></a></div>
                <div class="serach_inner">
                  <?php get_search_form(); ?>
                </div>
              </div>
            <?php } ?>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>