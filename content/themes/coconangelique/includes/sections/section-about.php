<section class="section-about">
  <div class="wrapper">
    <?php 
      $title = get_field('about_title'); 
      $subtitle = get_field('about_subtitle'); 
      $image = get_field('about_img'); 
      $content = get_field('about_tx'); 
      $link = get_field('about_link'); 
    ?>   
    <div class="grid">
      <div class="grid-2-4 about-img">
        <?php 
        if( !empty( $image ) ): ?>
          <img src="<?php echo esc_url($image['sizes']['portrait']); ?>" alt="<?php echo esc_attr($image['alt']); ?>"/>
        <?php endif; ?>
      </div>
      <div class="grid-2-4 about-content">
        <?php 
        if( !empty( $title ) ): ?>
          <h2 class="section-title"><?php echo $title ?></h2>
        <?php endif; ?>
        <?php 
        if( !empty( $subtitle ) ): ?>
          <h3 class="section-subtitle"><?php echo $subtitle ?></h3>
        <?php endif; ?>
        <img src="<?php echo get_template_directory_uri(); ?>/images/arrow-pink.png" alt="" class="sep">
        <?php 
        if( !empty( $content ) ): ?>
          <div class="section-tx"><?php echo $content ?></div>
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