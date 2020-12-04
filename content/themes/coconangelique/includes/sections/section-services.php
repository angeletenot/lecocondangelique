<section class="section-services" id="services">
  <div class="wrapper">
    <?php if( have_rows('services') ): ?>
      <div class="services-wrapper">
        <?php while( have_rows('services') ): the_row(); 
          $image = get_sub_field('service_photo');
          $title = get_sub_field('service_title');
          $tx = get_sub_field('service_tx');
          $link = get_sub_field('service_link');
          $link_url = $link['url'];
          $link_title = $link['title'];
          $link_target = $link['target'] ? $link['target'] : '_self';
        ?>
          <div class="service-item">
            <a href="<?php echo esc_url( $link_url ); ?>" target="<?php echo esc_attr( $link_target ); ?>" class="service-img-wrapper">
              <?php 
              if( !empty( $image ) ): ?>
                  <img src="<?php echo esc_url($image['sizes']['square']); ?>" alt="<?php echo esc_attr($image['alt']); ?>" class="service-img"/>
              <?php endif; ?>
              <?php 
              if( !empty( $title ) ): ?>
                <h2 class="service-title"><?php echo $title; ?></h2>
              <?php endif; ?>
            </a>
            <div>
              <?php 
              if( !empty( $tx ) ): ?>
                <p class="service-tx"><?php echo $tx; ?></p>
              <?php endif; ?>
              <?php 
              if( !empty( $link ) ): 
              ?>
                <a class="btn" href="<?php echo esc_url( $link_url ); ?>" target="<?php echo esc_attr( $link_target ); ?>"><?php echo esc_html( $link_title ); ?></a>
              <?php endif; ?>
            </div>
          </div>
        <?php endwhile; ?>
      </div>
    <?php endif; ?>

    <?php 
    $link = get_field('services_btn');
    if( !empty( $link ) ): 
      $link_url = $link['url'];
      $link_title = $link['title'];
      $link_target = $link['target'] ? $link['target'] : '_self';
    ?>
      <div class="btn-wrapper">
        <a class="btn" href="<?php echo esc_url( $link_url ); ?>" target="<?php echo esc_attr( $link_target ); ?>"><?php echo esc_html( $link_title ); ?></a>
      </div>
    <?php endif; ?>
    
  </div>
</section>