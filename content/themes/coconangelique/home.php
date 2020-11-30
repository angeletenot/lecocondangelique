<?php get_header(); ?>

  <div class="blog-header">
    <div class="wrapper">
      <?php 
      $image = get_field('logo_black', 'option');
      if( !empty( $image ) ): ?>
          <img src="<?php echo esc_url($image['url']); ?>" alt="<?php echo esc_attr($image['alt']); ?>" class="blog-logo"/>
      <?php endif; ?>
      <h1 class="page-title"><?php echo get_the_title(8116); ?></h1>

      <div class="category-list">
        <?php
        $categories = get_categories( array(
          'orderby' => 'name',
          'parent'  => 0,
          'exclude' => array(3,11),
        ) );
        foreach ( $categories as $category ) { 
          $parentcat = $category->term_id;
          $parentname = $category->name;
        ?>
         <form method="GET" action="<?php echo esc_url( home_url( '/' ) ); ?>" class="category-form js-autosubmit">
            <?php
            $args = array(
              'show_option_all'    => $parentname,
              'option_none_value'  => '-1',
              'orderby'            => 'ID',
              'order'              => 'ASC',
              'show_count'         => 0,
              'hide_empty'         => 1,
              'child_of'           => 0,
              'echo'               => 0,
              'selected'           => 0,
              'hierarchical'       => 1,
              'parent'             => $parentcat,
              'name'               => 'cat',
              'id'                 => '',
              'class'              => 'js-easydropdown',
              'depth'              => 0,
              'tab_index'          => 0,
              'taxonomy'           => 'category',
              'hide_if_empty'      => true,
              'value_field'      => 'term_id',
            ); 

            echo wp_dropdown_categories( $args );  
            ?>
        </form>
        <?php } ?>
      </div>
    </div>
  </div>


  
  <?php
  $featured_posts = get_field('push_articles', 8116);
  if( $featured_posts ): ?>
    <div class="push-news">
      <div class="wrapper">
      <?php foreach( $featured_posts as $post ): 
          // Setup this post for WP functions (variable must be named $post).
          setup_postdata($post); ?>
          <?php include get_template_directory() . '/includes/thumbnails/thumbnail-news-push.php';  ?>
      <?php endforeach; ?>
      </div>
    </div>
      <?php 
      // Reset the global post object so that the rest of the page works correctly.
      wp_reset_postdata(); ?>
  <?php endif; ?>


  <div class="page-content-wrapper with-sidebar blog-content" id="news">
    <div class="wrapper">

      <section class="page-content">
        <h2 class="section-title">Les derniers articles</h2>
        <?php
        $paged = ( get_query_var( 'paged' ) ) ? get_query_var( 'paged' ) : 1;
        $args = array(
          'post_type' => 'post',
          'posts_per_page' => 3,
          'paged' => $paged
        );
        $my_query = new WP_Query( $args ); while ( $my_query->have_posts() ) : $my_query->the_post(); ?>  
          <?php include get_template_directory() . '/includes/thumbnails/thumbnail-news.php';  ?>
        <?php endwhile; ?>
        <div class="pagination">
          <?php wp_pagenavi(); ?>
        </div>
        <?php wp_reset_postdata(); ?>
      </section>

      <aside class="page-sidebar">
        <?php dynamic_sidebar( 'widget-area-1' ); ?> 
      </aside>

    </div>
  </div>


  <?php include get_template_directory() . '/includes/sections/section-instagram.php';  ?>


<?php get_footer(); ?>
