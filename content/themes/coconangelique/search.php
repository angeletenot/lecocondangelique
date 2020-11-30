<?php get_header(); ?>

  <div class="page-content-wrapper with-sidebar blog-content search-results">
    <div class="wrapper">
      <section class="page-content">
        <?php
          global $wp_query;
          $total_results = $wp_query->found_posts;
        ?>
        <h1 class="search-title section-title"><?php echo $total_results ?> Résultats pour <span>«<?php the_search_query(); ?>»</span></h1>
        <div class="search-results-wrapper">
          <?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
            <?php include get_template_directory() . '/includes/thumbnails/thumbnail-news.php';  ?>
          <?php endwhile; ?>
          <div class="pagination">
            <?php wp_pagenavi(); ?>
          </div>
          <?php else : ?>
            <p>Désolé, aucun article ne correspond à votre recherche.</p>
          <?php endif; ?>
        </div>  
      </section>

      <aside class="page-sidebar">
        <?php dynamic_sidebar( 'widget-area-1' ); ?> 
      </aside>    

    </div>
  </div>

<?php get_footer(); ?>



