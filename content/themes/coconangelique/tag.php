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



  <div class="page-content-wrapper with-sidebar blog-content" id="news">
    <div class="wrapper">

      <section class="page-content">
        <h2 class="section-title">Les articles <?php single_cat_title(); ?></h2>

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

      <aside class="page-sidebar">
        <?php dynamic_sidebar( 'widget-area-1' ); ?> 
      </aside>

    </div>
  </div>


  <?php include get_template_directory() . '/includes/sections/section-instagram.php';  ?>


<?php get_footer(); ?>
