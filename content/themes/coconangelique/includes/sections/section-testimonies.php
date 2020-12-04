<section class="section-testimonies">
  <div class="wrapper">
    <h2 class="section-title">Témoignages</h2>
    <?php if( have_rows('testimonies') ): ?>
      <div class="testimonies-slider js-testimonies-slider">
        <?php while( have_rows('testimonies') ): the_row(); 
        $title = get_sub_field('testimony_info');
        $text = get_sub_field('testimony_tx');
        ?>
        <div class="testimony-item">
          <?php if( $title ): ?>
            <p class="testimony-name"><?php echo $title; ?></p>
          <?php endif; ?>
          <?php if( $text ): ?>
            <p class="testimony-text"><?php echo $text; ?></p>
          <?php endif; ?>
        </div>
        <?php endwhile; ?>
      </div>
    <?php endif; ?>

    <?php 
    $link = get_field('testimonies_link');
    if( !empty( $link ) ): 
      $link_url = $link['url'];
      $link_title = $link['title'];
      $link_target = $link['target'] ? $link['target'] : '_self';
    ?>
      <a class="btn-light" href="<?php echo esc_url( $link_url ); ?>" target="<?php echo esc_attr( $link_target ); ?>"><?php echo esc_html( $link_title ); ?></a>
    <?php endif; ?>

  </div>
</section>