<?php
/* this file contains functions that require a little more in depth defining */

  function get_image_alt_tag() {
    $image_id = get_post_thumbnail_id();
    $image_alt = get_post_meta($image_id, '_wp_attachment_image_alt', TRUE);
    if (empty($image_alt)) {
      return esc_html__('No Alt Text for Image');
    } else {
      return $image_alt;
    }
  }


  function display_portfolio_grid() {
    echo '<!---Portfolio Grid --->';
    echo '<div class="item-container">';
      $portfolioItems = new WP_Query(array(
        'post_type' => 'portfolio'
      ));
      while($portfolioItems->have_posts()) {
        $portfolioItems->the_post(); ?>
        <a class="item" href="<?php esc_html(the_permalink()); ?>">
          <img alt="<?php echo get_image_alt_tag(); ?>" src="<?php the_post_thumbnail_url(); ?>">
          <div class="item__title">
            <h3><?php the_title(); ?></h3>
          </div>
          <div class='item__details'><?php esc_html(the_excerpt()); ?></div>
        </a>
      <?php }
        wp_reset_postdata();
    echo '</div>';
  }
?>
