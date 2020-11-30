<section id="consultations" class="section-offers">
  <div class="wrapper">
    <?php 
      $title = get_field('offer_title'); 
      $tx = get_field('offer_intro'); 
      $link = get_field('offer_link'); 
      ?>
      
      <?php 
      if( !empty( $title ) ): ?>
        <h2 class="section-title"><?php echo $title; ?></h2>
      <?php endif; ?>
      <?php 
      if( !empty( $tx ) ): ?>
        <p class="section-intro"><?php echo $tx; ?></p>
      <?php endif; ?>

      <?php if( have_rows('offers') ): ?>
        <div class="offers-wrapper">
        <?php while( have_rows('offers') ): the_row(); 
          $image = get_sub_field('offer_bg');
          $title = get_sub_field('offer_title');
          $duration = get_sub_field('offer_duration');
          $price = get_sub_field('offer_price');
          $tx = get_sub_field('offer_tx');
          $pdf = get_sub_field('offer_pdf');
          ?>
          <div class="offer-item">
            <div class="offer-header">
              <?php if( $image ): ?>
                <img src="<?php echo esc_url($image['sizes']['square_big']); ?>" alt="<?php echo esc_attr($image['alt']); ?>"/>
              <?php endif; ?>
              <div class="offer-meta">
                <?php if( $title ): ?>
                  <h3 class="offer-title"><?php echo $title; ?></h3>
                <?php endif; ?>
                <?php if( $duration ): ?>
                  <p class="offer-duration"><?php echo $duration; ?></p>
                <?php endif; ?>
                <?php if( $price ): ?>
                  <p class="offer-price"><?php echo $price; ?></p>
                <?php endif; ?>
              </div>
            </div>
            <div class="offer-details">
              <?php echo $tx; ?>
              <?php if( $pdf ): ?>
                <a href="<?php echo $pdf ?>" target="_blank" class="btn">Télécharger le PDF</a>
              <?php endif; ?>
            </div>
          </div>
        <?php endwhile; ?>
        </div>
      <?php endif; ?>
      
      <?php 
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