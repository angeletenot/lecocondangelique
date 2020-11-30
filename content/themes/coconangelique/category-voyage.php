<?php get_header(); ?>

  <div class="blog-header">
    <div class="wrapper">


     
    </div>
  </div>



  <div class="page-content-wrapper blog-content" id="news">
    <div class="wrapper">

      <section class="page-content">
        <h1 class="section-title">Les articles d'aventures</h1>

        <?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
          <?php include get_template_directory() . '/includes/thumbnails/thumbnail-news.php';  ?>
        <?php endwhile; ?>
          <div class="pagination">
            <?php wp_pagenavi(); ?>
          </div> 
        <?php else : ?>
          <p><?php _e( 'Oups, il n\'y à pasencore d\'article par ici' ); ?></p>
        <?php endif; ?>
      </section>

    </div>
  </div>


  <?php include get_template_directory() . '/includes/sections/section-instagram.php';  ?>


<?php get_footer(); ?>
