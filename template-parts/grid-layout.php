<?php
/**
 * The template part for displaying grid post
 *
 * @package Lawn Care 
 * @subpackage lawn-care
 * @since lawn-care 1.0
 */
?>

<?php
    $lawn_care_archive_year  = esc_html(get_the_time('Y'));
    $lawn_care_archive_month = esc_html(get_the_time('m'));
    $lawn_care_archive_day   = esc_html(get_the_time('d'));
?>
<div class="col-lg-4 col-md-6">
	<article id="post-<?php the_ID(); ?>" <?php post_class('inner-service'); ?>>
	    <div class="grid-post-main-box p-3 mb-3 wow zoomIn" data-wow-duration="2s">
	      	<div class="box-image">
	          	<?php
		            if(has_post_thumbnail() && get_theme_mod( 'lawn_care_grid_image_hide_show',true) == 1) {
		              the_post_thumbnail();
		            }
	          	?>
	        </div>
	        <h2 class="section-title mt-0 pt-0"><a href="<?php the_permalink(); ?>"><?php the_title();?><span class="screen-reader-text"><?php the_title(); ?></span></a></h2>
	        <?php if( get_theme_mod( 'lawn_care_grid_postdate',true) == 1 || get_theme_mod( 'lawn_care_grid_author',true) == 1 || get_theme_mod( 'lawn_care_grid_comments',true) == 1 || get_theme_mod( 'lawn_care_grid_time',true) == 1) { ?>
	          <div class="post-info p-2 mb-3">
	            <?php if(get_theme_mod('lawn_care_grid_postdate',true)==1){ ?>
	              <i class="<?php echo esc_attr(get_theme_mod('lawn_care_grid_postdate_icon','fas fa-calendar-alt')); ?> me-2"></i><span class="entry-date"><a href="<?php echo esc_url( get_day_link( $lawn_care_archive_year, $lawn_care_archive_month, $lawn_care_archive_day)); ?>"><?php echo esc_html( get_the_date() ); ?><span class="screen-reader-text"><?php echo esc_html( get_the_date() ); ?></span></a></span><span><?php echo esc_html(get_theme_mod('lawn_care_grid_post_meta_field_separator', '|'));?></span>
	            <?php } ?>

	            <?php if(get_theme_mod('lawn_care_grid_author',true)==1){ ?>
	               <i class="<?php echo esc_attr(get_theme_mod('lawn_care_grid_author_icon','fas fa-user')); ?> me-2"></i><span class="entry-author"><a href="<?php echo esc_url( get_author_posts_url( get_the_author_meta( 'ID' )) ); ?>"><?php the_author(); ?><span class="screen-reader-text"><?php the_author(); ?></span></a></span><span><?php echo esc_html(get_theme_mod('lawn_care_grid_post_meta_field_separator', '|'));?></span>
	            <?php } ?>

	            <?php if(get_theme_mod('lawn_care_grid_comments',true)==1){ ?>
	               <i class="<?php echo esc_attr(get_theme_mod('lawn_care_grid_comments_icon','fa fa-comments')); ?> me-2" aria-hidden="true"></i><span class="entry-comments"><?php comments_number( __('0 Comment', 'lawn-care'), __('0 Comments', 'lawn-care'), __('% Comments', 'lawn-care') ); ?></span>
	            <?php } ?>

	            <?php if(get_theme_mod('lawn_care_grid_time',true)==1){ ?>
	               <i class="<?php echo esc_attr(get_theme_mod('lawn_care_grid_time_icon','fas fa-clock')); ?> me-2"></i> <span class="entry-time"><?php echo esc_html( get_the_time() ); ?></span>
	            <?php } ?>
	            <?php echo esc_html (lawn_care_edit_link()); ?>
	          </div>
        	<?php } ?>
	        <div class="new-text">
	        	<div class="entry-content">
	        		<p>
			          <?php $lawn_care_theme_lay = get_theme_mod( 'lawn_care_grid_excerpt_settings','Excerpt');
				          if($lawn_care_theme_lay == 'Content'){ ?>
				            <?php the_content(); ?>
				          <?php }
				          if($lawn_care_theme_lay == 'Excerpt'){ ?>
				            <?php if(get_the_excerpt()) { ?>
				              <?php $lawn_care_excerpt = get_the_excerpt(); echo esc_html( lawn_care_string_limit_words( $lawn_care_excerpt, esc_attr(get_theme_mod('lawn_care_grid_excerpt_number','30')))); ?><?php echo esc_html(get_theme_mod('lawn_care_grid_excerpt_suffix',''));?>
				            <?php }?>
				          <?php }?>
			        </p>
	        	</div>
	        </div>
	        <?php if( get_theme_mod('lawn_care_grid_button_text','Read More') != ''){ ?>
	          <div class="more-btn mt-4 mb-4">
	            <a href="<?php the_permalink(); ?>"><?php echo esc_html(get_theme_mod('lawn_care_grid_button_text',__('Read More','lawn-care')));?><span class="screen-reader-text"><?php echo esc_html(get_theme_mod('lawn_care_grid_button_text',__('Read More','lawn-care')));?></span><span class="top-icon"></span></a>
	          </div>
	        <?php } ?>
	    </div>
	    <div class="clearfix"></div>
  	</article>
</div>
