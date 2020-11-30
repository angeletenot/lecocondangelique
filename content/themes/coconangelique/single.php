<?php get_header(); ?>

<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>

  <div class="blog-header">
    <div class="wrapper">
      <h2 class="page-title"><?php echo get_the_title(8116); ?></h2>

      <div class="category-list">
        <?php
        $categories = get_categories( array(
          'orderby' => 'name',
          'parent'  => 0
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
  $categories = get_the_category($post->ID); 
  $terms = get_the_terms($post->ID, 'category' ); 
  $intro = get_field('intro');
  ?>

  <div class="news-single">
    <div class="wrapper">

      <div class="news-image">
        <?php the_post_thumbnail('full'); ?>
      </div>

      <div class="news-meta">
        <?php if ($terms) {
          foreach( $terms as $term ) { 
            $picto = get_field('picto', $term);  
            $picto_url = $picto['url'];
            $picto_url = parse_url( $picto_url );
            echo file_get_contents( '.' . $picto_url['path'] );
          }
        } ?>
        <div>
          <h1 class="news-title"><?php the_title(); ?></h1>
          <a href="#comments">Ajouter un commentaire</a>
          <p class="news-date"> - <?php the_time('d F Y'); ?></p>

          <div class="post-share">
            <?php echo do_shortcode("[wp_social_sharing social_options='facebook,twitter,pinterest' twitter_username='destrucsbien' twitter_text='' pinterest_text='' facebook_text='' icon_order='f,t,l,p,x,r' show_icons='0' before_button_text='' text_position='' social_image='']") ?>
          </div>
        </div>
      </div>

      <div class="news-content">
        <?php if( !empty( $intro ) ): ?>
          <p class="news-intro"><?php echo $intro; ?></p>
        <?php endif; ?> 
        <?php the_content(); ?>
      </div>


      <div class="news-infos">
        <p>Auteur.e : <?php the_author(); ?></p>
        <p class="news-tags"><b>Tags :</b> <br>
          <?php the_tags( '<ul class="news-tags list-inline"><li>', '</li><li>  ', '</li></ul>' ); ?>
        </p>
      </div>

    </div>
  </div>

  <?php endwhile; ?>

    <div class="wrapper">

      <div class="post-share footer-share">
        <h3>Partager</h3>
        <?php echo do_shortcode("[wp_social_sharing social_options='facebook,twitter,pinterest' twitter_username='destrucsbien' twitter_text='' pinterest_text='' facebook_text='' icon_order='f,t,l,p,x,r' show_icons='0' before_button_text='' text_position='' social_image='']") ?>
      </div>

      <div class="pagination">
        <?php previous_post_link('%link', '<i class="icon-arrow-secondary"></i> Juste avant'); ?>
        <?php next_post_link('%link', 'Juste après <i class="icon-arrow-secondary"></i>'); ?>
        <div class="clearfix"></div>
      </div>

      <div class="news-comments">
        <?php 
        if ( comments_open() || get_comments_number() ) :
           comments_template();
       endif; 
       ?>
      </div>

    </div>

  <?php else : ?>
    <p><?php _e( 'Sorry, no posts matched your criteria.' ); ?></p>
  <?php endif; ?>

  <div class="news-footer">
    <div class="wrapper">
      <?php include get_template_directory() . '/includes/sections/section-instagram.php';  ?>
    </div>
  </div>

<?php get_footer(); ?>
