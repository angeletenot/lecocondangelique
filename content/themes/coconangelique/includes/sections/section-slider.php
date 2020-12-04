<section class="section-slider">
  <div class="wrapper">
    <?php if( have_rows('cabinet-slider') ): ?>
      <div class="slider js-slider">
        <?php while( have_rows('cabinet-slider') ): the_row(); 
          $image = get_sub_field('img');
          $title = get_sub_field('text');
        ?>
          <div class="slider-item">
            <?php 
            if( !empty( $image ) ): ?>
                <img src="<?php echo esc_url($image['sizes']['slider']); ?>" alt="<?php echo esc_attr($image['alt']); ?>"/>
            <?php endif; ?>
            <?php 
            if( !empty( $title ) ): ?>
              <p class="slider-title"><?php echo $title; ?></p>
            <?php endif; ?>
          </div>
        <?php endwhile; ?>
      </div>
    <?php endif; ?>

    <?php 
    $link = get_field('slider_link');
    if( !empty( $link ) ): 
      $link_url = $link['url'];
      $link_title = $link['title'];
      $link_target = $link['target'] ? $link['target'] : '_self';
    ?>
      <div class="btn-wrapper">
        <img src="<?php echo get_template_directory_uri(); ?>/images/sep-arrows.svg" alt="" class="sep-arrow">
        <a class="btn" href="<?php echo esc_url( $link_url ); ?>" target="<?php echo esc_attr( $link_target ); ?>"><?php echo esc_html( $link_title ); ?></a>
      </div>
    <?php endif; ?>

  </div>
</section>