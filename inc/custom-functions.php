<?php

Class Lawn_Care_My_Recent_Posts_Widget extends WP_Widget_Recent_Posts {
  function widget($lawn_care_args, $lawn_care_instance) {
      if ( ! isset( $lawn_care_args['widget_id'] ) ) {
      $lawn_care_args['widget_id'] = $this->id;
    }
    $lawn_care_title = ( ! empty( $lawn_care_instance['title'] ) ) ? $lawn_care_instance['title'] : __( 'Recent Posts', 'lawn-care' );
    /** This filter is documented in wp-includes/widgets/class-wp-widget-pages.php */
    $lawn_care_title = apply_filters( 'widget_title', $lawn_care_title, $lawn_care_instance, $this->id_base );
    $lawn_care_number = ( ! empty( $lawn_care_instance['number'] ) ) ? absint( $lawn_care_instance['number'] ) : 5;
    if ( ! $lawn_care_number )
        $lawn_care_number = 5;
    $lawn_care_show_date = isset( $lawn_care_instance['show_date'] ) ? $lawn_care_instance['show_date'] : false;
    /**
     * Filter the arguments for the Recent Posts widget.
     *
     * @since 3.4.0
     *
     * @see WP_Query::get_posts()
     *
     * @param array $lawn_care_args An array of arguments used to retrieve the recent posts.
     */
    $lawn_care_r = new WP_Query( apply_filters( 'widget_posts_args', array(
        'posts_per_page'      => $lawn_care_number,
        'no_found_rows'       => true,
        'post_status'         => 'publish',
        'ignore_sticky_posts' => true
    ) ) );
    if ($lawn_care_r->have_posts()) :
    ?>
    <?php echo $lawn_care_args['before_widget']; ?>
    <?php if ( $lawn_care_title ) {
        echo $lawn_care_args['before_title'] . esc_html($lawn_care_title) . $lawn_care_args['after_title'];
    } ?>
    <ul>
      <?php while ( $lawn_care_r->have_posts() ) : $lawn_care_r->the_post(); ?>
      <li>
        <div class="recent-post-box">
          <div class="media post-thumb">
            <?php if(has_post_thumbnail()) { the_post_thumbnail(); } ?>
            <div class="media-body post-content">
              <a href="<?php the_permalink(); ?>"><?php the_title(); ?></a>
              <div class="d-flex date-comment">
               <?php if ( $lawn_care_show_date ) : ?>
                <p class="post-date"><?php the_date(); ?></p>
               <?php endif; ?>
               <div class="date-comment1"><?php comments_number( __('0 Comment', 'lawn-care'), __('0 Comments', 'lawn-care'), __('% Comments', 'lawn-care') ); ?></div>
              </div>
            </div>
          </div>
        </div>
      </li>
      <?php endwhile;
      wp_reset_postdata(); ?>
    </ul>

    <?php echo $lawn_care_args['after_widget'];

    endif;
  }
}
function lawn_care_my_recent_widget_registration() {
  unregister_widget('WP_Widget_Recent_Posts');
  register_widget('Lawn_Care_My_Recent_Posts_Widget');
}
add_action('widgets_init', 'lawn_care_my_recent_widget_registration');
