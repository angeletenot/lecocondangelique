<?php get_header(); ?>

<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>

  <?php
  $featured_img_url = get_the_post_thumbnail_url(get_the_ID(),'blog');  
  ?>

  <div class="blog-header" style="background-image: url('<?php echo $featured_img_url; ?>')">
    <div class="wrapper">
      <h2 class="page-subtitle">Le Cocon d'Angélique</h2>
      <h1 class="page-title"><?php echo get_the_title(9); ?></h1>
    </div>
  </div>

  <?php 
  $categories = get_the_category($post->ID); 
  $terms = get_the_terms($post->ID, 'category' ); 
  $intro = get_field('intro');
  ?>

  <div class="blog-wrapper">
    <div class="news-single">
      <div class="wrapper">

        <div class="news-image">
          <?php the_post_thumbnail('news-thumb-lg'); ?>
        </div>

        <div class="news-meta">
          <h1 class="news-title"><?php the_title(); ?></h1>
        </div>

        <div class="news-content">
          <?php if( !empty( $intro ) ): ?>
            <p class="news-intro"><?php echo $intro; ?></p>
          <?php endif; ?> 
          <?php the_content(); ?>
        </div>
        
        <div class="news-infos">
          <p class="news-date"><?php the_time('d F Y'); ?></p>
          <p class="news-cat">
            <?php foreach( $categories as $category ): 
            echo '<a href="' . get_category_link($category->term_id) . '">' . $category->cat_name . '</a>'; 
            endforeach; ?>
          </p>
        </div>

      </div>
    </div>

    <?php endwhile; ?>

      <div class="wrapper">

        <div class="pagination">
          <?php previous_post_link('%link', '<i class="icon-slider"></i> Précédent'); ?>
          <?php next_post_link('%link', 'Suivant <i class="icon-slider"></i>'); ?>
          <div class="clearfix"></div>
        </div>

      </div>

    <?php else : ?>
      <p><?php _e( 'Sorry, no posts matched your criteria.' ); ?></p>
    <?php endif; ?>
  </div>


  <?php 
  $post_id = get_the_ID();
  $cat_ids = array();
  $categories = get_the_category( $post_id );
  if ( $categories && !is_wp_error( $categories ) ) {
    foreach ( $categories as $category ) {
        array_push( $cat_ids, $category->term_id );
    }
  } ?>
  <div class="news-related push-news">
    <div class="wrapper">
      <h2 class="section-title">D'autres articles</h2>
      <div class="news-wrapper">
        <?php
        $args = array(
          'post_type' => 'post',
          'posts_per_page' => 3,
          'category__in' => $cat_ids,
          'posts_per_page' => '5',
          'post__not_in' => array( $post_id )
        );
        $my_query = new WP_Query( $args ); while ( $my_query->have_posts() ) : $my_query->the_post(); ?>  
          <?php include get_template_directory() . '/includes/thumbnails/thumbnail-news-push.php';  ?>
        <?php endwhile; wp_reset_postdata(); ?>           
      </div>
    </div>
  </div>


  <div class="news-footer">
    <div class="wrapper">
      <?php include get_template_directory() . '/includes/sections/section-instagram.php';  ?>
    </div>
  </div>

<?php get_footer(); ?>
