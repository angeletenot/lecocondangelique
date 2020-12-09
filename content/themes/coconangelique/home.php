<?php get_header(); ?>

<?php
$featured_img_url = get_the_post_thumbnail_url(get_the_ID(),'blog');  
?>

  <div class="blog-header" style="background-image: url('<?php echo $featured_img_url; ?>')">
    <div class="wrapper">
      <h2 class="page-subtitle">Le Cocon d'Angélique</h2>
      <h1 class="page-title"><?php echo get_the_title(9); ?></h1>
    </div>
  </div>


  <div class="blog-wrapper">

    <?php
    $featured_posts = get_field('push_articles', 9);
    if( $featured_posts ): ?>
      <div class="push-news">
        <div class="wrapper">
          <h2 class="section-title">Mis en avant</h2>
          <div class="news-wrapper">
            <?php foreach( $featured_posts as $post ): 
              // Setup this post for WP functions (variable must be named $post).
              setup_postdata($post); ?>
              <?php include get_template_directory() . '/includes/thumbnails/thumbnail-news-push.php';  ?>
            <?php endforeach; ?>
          </div>
        </div>
      </div>
        <?php 
        // Reset the global post object so that the rest of the page works correctly.
        wp_reset_postdata(); ?>
    <?php endif; ?>


    <div class="page-content-wrapper blog-content" id="news">
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

      </div>
    </div>
    
  </div>

  <?php include get_template_directory() . '/includes/sections/section-instagram.php';  ?>


<?php get_footer(); ?>
