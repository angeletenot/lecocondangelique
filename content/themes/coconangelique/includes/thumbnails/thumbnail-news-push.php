<?php 
$categories = get_the_category($post->ID); 
?>

<div class="news-item news-item-push">
  <?php 
  if ( has_post_thumbnail() ) { ?>
  <a href="<?php the_permalink() ?>" class="news-thumbnail">
    <?php the_post_thumbnail('square'); ?>
  </a>
  <?php } ?>
  <h3 class="news-title"><a href="<?php the_permalink() ?>"><?php the_title(); ?></a></h3>
  <div class="news-meta">
    <p class="news-date"><?php the_time('d F Y'); ?></p>
    <p class="news-cat">
      <?php foreach( $categories as $category ): 
      echo '<a href="' . get_category_link($category->term_id) . '">' . $category->cat_name . '</a>'; 
      endforeach; ?>
    </p>
  </div>
  <p class="news-excerpt">
    <?php 
    $intro = get_field('intro');
    if( !empty( $intro ) ): 
      $excerpt = wp_trim_words( $intro, 25 );
      echo $excerpt;
    else :
      $excerpt = wp_trim_words( get_the_content(), 25 );
      echo $excerpt;
    endif; ?>
  </p>
  <div class="btn-wrapper">
    <a href="<?php the_permalink() ?>" class="btn">Lire</a>
  </div>
</div>