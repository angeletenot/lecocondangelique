<?php 
$categories = get_the_category($post->ID); 
?>

<div class="news-item news-item-sm">
  <h3 class="news-title"><a href="<?php the_permalink() ?>"><?php the_title(); ?></a></h3>
  <div class="news-meta">
    <p class="news-date"><?php the_time('d F Y'); ?></p>
  </div>
  <?php 
  if ( has_post_thumbnail() ) { ?>
  <a href="<?php the_permalink() ?>" class="news-thumbnail">
    <?php the_post_thumbnail('news-thumb-sm'); ?>
  </a>
  <?php } ?>
  <p class="news-cat">
    <?php foreach( $categories as $category ): 
    echo '<a href="' . get_category_link($category->term_id) . '">' . $category->cat_name . '</a>'; 
    endforeach; ?>
  </p>
  <div class="btn-wrapper">
    <a href="<?php the_permalink() ?>" class="btn">Voir plus</a>
  </div>
</div>