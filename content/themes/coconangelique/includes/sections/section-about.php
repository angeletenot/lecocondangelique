<section class="section-about">
  <div class="wrapper">
    <?php 
      $image = get_field('about_img'); 
      $content = get_field('about_tx'); 
      $link = get_field('about_link'); 
    ?>   
    <div class="grid">
      <div class="grid-2-4 about-img">
        <?php 
        if( !empty( $image ) ): ?>
          <img src="<?php echo esc_url($image['sizes']['square_big']); ?>" alt="<?php echo esc_attr($image['alt']); ?>"/>
        <?php endif; ?>
      </div>
      <div class="grid-2-4 about-content">
        <?php 
        if( !empty( $content ) ): ?>
          <div class="about-tx"><?php echo $content ?></div>
        <?php endif; ?>
        <?php 
        if( !empty( $link ) ): 
          $link_url = $link['url'];
          $link_title = $link['title'];
          $link_target = $link['target'] ? $link['target'] : '_self';
        ?>
          <a class="btn" href="<?php echo esc_url( $link_url ); ?>" target="<?php echo esc_attr( $link_target ); ?>"><?php echo esc_html( $link_title ); ?></a>
        <?php endif; ?>
      </div>
    </div> 
  </div>
</section>