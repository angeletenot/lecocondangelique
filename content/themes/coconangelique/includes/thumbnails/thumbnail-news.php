<?php 
$categories = get_the_category($post->ID); 
?>

<div class="news-item">
  <h3 class="news-title"><a href="<?php the_permalink() ?>"><?php the_title(); ?></a></h3>
  <div class="news-meta">
    <p class="news-date"><?php the_time('d F Y'); ?></p>
    <?php the_tags( '<ul class="news-tags list-inline"><li> | ', '</li><li> | ', '</li></ul>' ); ?>
  </div>
  <?php 
  if ( has_post_thumbnail() ) { ?>
  <a href="<?php the_permalink() ?>" class="news-thumbnail">
    <?php the_post_thumbnail('news-thumb'); ?>
  </a>
  <?php } ?>
  <p class="news-cat">
    <?php foreach( $categories as $category ): 
    echo '<a href="' . get_category_link($category->term_id) . '">' . $category->cat_name . '</a>'; 
    endforeach; ?>
  </p>
  <p class="news-excerpt">
    <?php 
    $excerpt = wp_trim_words( get_the_content(), 50 );
    echo $excerpt; ?>
  </p>
  <div class="btn-wrapper">
    <a href="<?php the_permalink() ?>" class="btn">Voir plus</a>
  </div>
</div>