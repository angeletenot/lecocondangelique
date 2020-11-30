<section class="section-news">
  <div class="wrapper">
    <h2 class="section-title">Les derniers articles</h2>
    <div class="news-list">
      <?php
      $args = array(
        'post_type' => 'post',
        'posts_per_page' => 3
      );
      $my_query = new WP_Query( $args ); while ( $my_query->have_posts() ) : $my_query->the_post(); ?>  
        <?php include get_template_directory() . '/includes/thumbnails/thumbnail-news.php';  ?>
      <?php endwhile; wp_reset_postdata(); ?>
    </div>
    <div class="news-list news-list-sm">
      <?php
      $args = array(
        'post_type' => 'post',
        'posts_per_page' => 3,
        'offset' => 3
      );
      $my_query = new WP_Query( $args ); while ( $my_query->have_posts() ) : $my_query->the_post(); ?>  
        <?php include get_template_directory() . '/includes/thumbnails/thumbnail-news-sm.php';  ?>
      <?php endwhile; wp_reset_postdata(); ?>
    </div>
  </div>
  <div class="btn-wrapper">
    <a href="<?php echo get_permalink( get_option( 'page_for_posts' ) ); ?>" class="btn">Voir tous les articles</a>
  </div>
</section>