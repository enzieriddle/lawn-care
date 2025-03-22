<?php
/**
 * Template Name: Custom Home Page
 */
get_header();

?>
<!-- slider section -->
<main id="maincontent" role="main">
  <?php do_action( 'lawn_care_above_slider' ); ?>
  
  <?php if (get_theme_mod('lawn_care_hide_show_slider_section', true) || get_theme_mod('lawn_care_responsive_slider_hide',true)) { ?>
  <?php 
    $lawn_care_number = get_theme_mod('lawn_care_slide_number');
    if($lawn_care_number != ''){
  ?>
    <section class="slider-section wow fadeInRightBig position-relative" data-wow-delay=".25s">
      <div id="slider" class="mw-100 m-auto p-0">
        <div id="carouselExampleIndicators" class="carousel slide carousel-fade" data-bs-ride="carousel">
          <!-- Slider Items -->
          <div class="carousel-inner" role="listbox">
            <?php for ($lawn_care_i = 1; $lawn_care_i <= $lawn_care_number; $lawn_care_i++) { ?>
              <div class="carousel-item <?php echo $lawn_care_i == 1 ? 'active' : ''; ?>">
                <?php if (get_theme_mod('lawn_care_slider_bg_img' . $lawn_care_i) != "") { ?>
                  <div class="slider-img">
                    <img class="slider-carousel-img" src="<?php echo esc_url(get_theme_mod('lawn_care_slider_bg_img' . $lawn_care_i)); ?>" alt="Slide <?php echo $lawn_care_i; ?>">
                    <div class="slider-overlay"></div>
                  </div>
                <?php } ?>
                <div class="carousel-caption">
                  <div class="inner_carousel text-center">
                    <?php if (get_theme_mod('lawn_care_slider_small_title' . $lawn_care_i) != '') { ?>
                      <p class="slider-small-title text-capitalize"><?php echo esc_html(get_theme_mod('lawn_care_slider_small_title' . $lawn_care_i)); ?></p>
                    <?php } ?>
                    <?php if (get_theme_mod('lawn_care_slider_title' . $lawn_care_i) != '') { ?>
                      <h1 class="slider-title text-capitalize"><?php echo esc_html(get_theme_mod('lawn_care_slider_title' . $lawn_care_i)); ?></h1>
                    <?php } ?>
                    <?php if (get_theme_mod('lawn_care_slider_text' . $lawn_care_i) != '') { ?>
                      <p class="slider-text my-2"><?php echo esc_html(get_theme_mod('lawn_care_slider_text' . $lawn_care_i)); ?></p>
                    <?php } ?>
                    <div class="d-flex justify-content-center gap-2 mt-4 slider-main-btn">
                      <?php 
                        for ($lawn_care_j = 1; $lawn_care_j <= 2; $lawn_care_j++) {
                        if( get_theme_mod('lawn_care_slider_button_text'.$lawn_care_i .$lawn_care_j) != '' ){ ?>
                          <div class="slider-btn text-center">
                            <a href="<?php echo esc_html(get_theme_mod('lawn_care_slider_button_link'.$lawn_care_i .$lawn_care_j)); ?>"><span><?php echo esc_html( get_theme_mod('lawn_care_slider_button_text'.$lawn_care_i .$lawn_care_j)); ?></span><span class="screen-reader-text"><?php echo esc_html( get_theme_mod('lawn_care_slider_button_text'.$lawn_care_i .$lawn_care_j)); ?></span></a>
                          </div>
                      <?php }} ?>
                    </div>
                  </div>
                </div>
              </div>
            <?php } ?>
          </div>

          <!-- About Section -->
          <?php if (get_theme_mod('lawn_care_hide_show_about_sec', true) == 1) {?>
            <div class="about-box position-absolute p-2">
              <div class="row">
                <?php 
                  for ($lawn_care_k = 1; $lawn_care_k <= 2; $lawn_care_k++) { ?>
                  <div class="col-xl-6 col-lg-6 col-md-6 col-12 align-self-center about-sub">
                    <div class="row">
                      <?php if(get_theme_mod('lawn_care_slider_about_title'.$lawn_care_k) != '' || get_theme_mod('lawn_care_slider_about_text'.$lawn_care_k) != ''){ ?>
                        <div class="col-xl-3 col-lg-3 col-md-3 col-12 align-self-center about-icon">
                          <i class="<?php echo esc_attr( get_theme_mod('lawn_care_slider_about_icon'.$lawn_care_k, 'fa-solid fa-house') ); ?>"></i>
                        </div>
                        <div class="col-xl-9 col-lg-9 col-md-9 col-12 align-self-center">
                          <?php if(get_theme_mod('lawn_care_slider_about_title'.$lawn_care_k) != ''){ ?>
                            <h2 class="about-title my-2 text-capitalize"><?php echo esc_html(get_theme_mod('lawn_care_slider_about_title'.$lawn_care_k)); ?></h2>
                          <?php }?>
                          <?php if(get_theme_mod('lawn_care_slider_about_text'.$lawn_care_k) != ''){ ?>
                            <p class="about-text my-2"><?php echo esc_html(get_theme_mod('lawn_care_slider_about_text'.$lawn_care_k)); ?></p>
                          <?php }?>
                        </div>
                      <?php }?>
                    </div>
                  </div>
                <?php }  ?>
              </div>
            </div>
          <?php }?>

          <!-- Indicators -->
          <div class="slider-indicator carousel-indicators text-center">
            <div class="slider-dots">
              <?php for ($lawn_care_i = 1; $lawn_care_i <= $lawn_care_number; $lawn_care_i++) { ?>
                <button type="button"
                  data-bs-target="#carouselExampleIndicators"
                  data-bs-slide-to="<?php echo esc_html($lawn_care_i - 1); ?>"
                  class="<?php echo $lawn_care_i == 1 ? 'active' : ''; ?>">
                </button>
              <?php } ?>
            </div>
          </div>

          <!-- Navigation Controls -->
          <?php if( get_theme_mod( 'lawn_care_display_slider_icons', true) == true ) { ?>
            <a class="carousel-control-prev" data-bs-target="#carouselExampleIndicators" data-bs-slide="prev" role="button">
              <span class="carousel-control-prev-icon w-auto h-auto" aria-hidden="true"><i class="<?php echo esc_attr(get_theme_mod('lawn_care_slider_previous_icon','fa-solid fa-angle-left')); ?>" ></i></span>
              <span class="screen-reader-text"><?php esc_html_e( 'Previous','lawn-care' );?></span>
            </a>
            <a class="carousel-control-next" data-bs-target="#carouselExampleIndicators" data-bs-slide="next" role="button">
              <span class="carousel-control-next-icon w-auto h-auto" aria-hidden="true"><i class="<?php echo esc_attr(get_theme_mod('lawn_care_slider_next_icon','fa-solid fa-angle-right')); ?>" ></i></span>
              <span class="screen-reader-text"><?php esc_html_e( 'Next','lawn-care' );?></span>
            </a>  
          <?php }?>
        </div>
      </div>
    </section>
  <?php }}?>
  <?php do_action( 'lawn_care_below_slider' ); ?>

  <!-- About Us Section -->
  <?php if (get_theme_mod('lawn_care_hide_show_project_section', true) == 1) {?>
    <section id="project-sec" class="py-5">
      <div class="container">
        <div class="about-text text-center">
          <?php if(get_theme_mod('lawn_care_special_text') != ''){ ?>
            <p class="mb-3 project-text text-capitalize"><?php echo esc_html(get_theme_mod('lawn_care_special_text')); ?></p>
          <?php } ?>
          <?php if(get_theme_mod('lawn_care_special_heading') != ''){ ?>
            <h3 class="project-title text-uppercase"><?php echo esc_html(get_theme_mod('lawn_care_special_heading')); ?></h3>
          <?php } ?>
        </div>
        <div class="category-box my-4">
          <div class="post-category">
            <?php
              $lawn_care_args = array(
                'orderby'    => 'title',
                'order'      => 'ASC',
                'hide_empty' => 0,
                'parent'     => 0
              );
              $lawn_care_categories = get_categories($lawn_care_args);

              if (!empty($lawn_care_categories)) {
                // Limit to top 6 categories
                $lawn_care_categories = array_slice($lawn_care_categories, 0, 6);
                foreach ($lawn_care_categories as $lawn_care_category) { ?>
                  <li class="drp_dwn_menu" data-category-id="<?php echo esc_attr($lawn_care_category->term_id); ?>">
                    <a class="text-capitalize" href="<?php echo esc_url(get_category_link($lawn_care_category->term_id)); ?>">
                      <?php echo esc_html($lawn_care_category->name); ?>
                    </a>
                  </li>
                <?php
                }
              }
            ?>
          </div>
        </div>
        <div id="category-posts">
          <?php
            $lawn_care_query_args = array(
              'post_type'      => 'post',
              'posts_per_page' => -1,
              'post_status'    => 'publish',
              'category__in'   => wp_list_pluck($lawn_care_categories, 'term_id'),
            );
            $lawn_care_query = new WP_Query($lawn_care_query_args);
            if ($lawn_care_query->have_posts()) {
              echo '<div class="row">';
              while ($lawn_care_query->have_posts()) {
                $lawn_care_query->the_post();
                ?>
                <div class="col-xl-4 col-lg-4 col-md-6 col-12 mb-4 post-item category-<?php echo esc_attr(get_the_category()[0]->term_id); ?>">
                  <div class="post-card position-relative">
                    <div class="post-image">
                      <?php
                        if (has_post_thumbnail()) {
                          the_post_thumbnail('medium', array('class' => 'img-fluid'));
                        } else {
                          echo '<img src="' . esc_url(get_template_directory_uri() . '/assets/images/default-post.png') . '" alt="Default Image">';
                        }
                      ?>
                    </div>
                    <div class="post-content-box position-absolute">
                      <div class="post-content text-center p-2">
                        <h4 class="post-title mb-0 text-capitalize">
                          <a href="<?php the_permalink(); ?>"><?php the_title(); ?></a>
                        </h4>
                        <p class="post-excerpt">
                          <?php echo wp_trim_words(get_the_excerpt(), 15, '...'); ?>
                        </p>
                      </div>
                    </div>
                  </div>
                </div>
                <?php
              }
              echo '</div>';
            } else {
              echo '<p>No posts found in this category.</p>';
            }
            wp_reset_postdata();
          ?>
        </div>
      </div>
    </section>
  <?php }?>

  <div id="content-vw" class="entry-content">
    <div class="container">
      <?php while (have_posts()) : the_post(); ?>
        <?php the_content(); ?>
      <?php endwhile; // end of the loop. 
      ?>
    </div>
  </div>
  
</main>

<?php get_footer(); ?> 