<?php get_header(); ?>

<?php
$featured_img_url = get_the_post_thumbnail_url(9,'blog');  
?>

  <div class="blog-header" style="background-image: url('<?php echo $featured_img_url; ?>')">
    <div class="wrapper">
      <h2 class="page-subtitle">Le Cocon d'Angélique</h2>
      <h1 class="page-title"><?php echo get_the_title(9); ?></h1>
    </div>
  </div>


  <div class="blog-wrapper">
    <div class="page-content-wrapper blog-content">
      <div class="wrapper">

        <section class="page-content">
          <h2 class="section-title"><?php single_cat_title(); ?></h2>

          <?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
            <?php include get_template_directory() . '/includes/thumbnails/thumbnail-news.php';  ?>
          <?php endwhile; ?>
            <div class="pagination">
              <?php wp_pagenavi(); ?>
            </div> 
          <?php else : ?>
            <p><?php _e( 'Oups, il n\'y à pas encore d\'article par ici' ); ?></p>
          <?php endif; ?>
        </section>

      </div>
    </div>
  </div>


  <?php include get_template_directory() . '/includes/sections/section-instagram.php';  ?>


<?php get_footer(); ?>
