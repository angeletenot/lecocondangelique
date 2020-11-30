<a href="<?php the_permalink(); ?>" class="news-item news-item-push">
  <h2 class="news-title"><?php the_title(); ?></h2>
  <?php 
  if ( has_post_thumbnail() ) { ?>
    <?php the_post_thumbnail('news-thumb-sm'); ?>
  <?php } ?>
</a>