<section class="section-offers">
  <div class="wrapper">
    
    <section class="offer-section" id="kinesiologie">
      <?php 
        $title = get_field('offer_title_1'); 
        $intro = get_field('offer_intro_1'); 
        $tx = get_field('offer_tx_1'); 
        $link = get_field('offer_link_1');
      ?>
      <?php 
      if( !empty( $title ) ): ?>
        <h2 class="offer-title"><?php echo $title; ?></h2>
      <?php endif; ?>
      <?php 
      if( !empty( $intro ) ): ?>
        <p class="offer-intro"><?php echo $intro; ?></p>
      <?php endif; ?>
      <div class="grid">
        <div class="grid-2-4">
          <?php 
          if( !empty( $tx ) ): ?>
            <div class="offer-text"><?php echo $tx; ?></div>
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
        <div class="grid-2-4">
          <?php if( have_rows('offer_img_1') ): ?>
            <?php while( have_rows('offer_img_1') ): the_row(); 
              $image = get_sub_field('photo');
            ?>
              <?php 
              if( !empty( $image ) ): ?>
                <img src="<?php echo esc_url($image['sizes']['square']); ?>" alt="<?php echo esc_attr($image['alt']); ?>" class="offer-img"/>
              <?php endif; ?>
            <?php endwhile; ?>
          <?php endif; ?>
        </div>
      </div>  
    </section>

    <section class="offer-section" id="coaching">
      <?php 
        $title = get_field('offer_title_2'); 
        $intro = get_field('offer_intro_2'); 
        $tx = get_field('offer_tx_2'); 
        $link = get_field('offer_link_2');
      ?>
      <?php 
      if( !empty( $title ) ): ?>
        <h2 class="offer-title"><?php echo $title; ?></h2>
      <?php endif; ?>
      <?php 
      if( !empty( $intro ) ): ?>
        <div class="offer-intro"><?php echo $intro; ?></div>
      <?php endif; ?>
      <div class="grid">
        <div class="grid-2-4">
          <?php if( have_rows('offer_img_2') ): ?>
            <?php while( have_rows('offer_img_2') ): the_row(); 
              $image = get_sub_field('photo');
            ?>
              <?php 
              if( !empty( $image ) ): ?>
                  <img src="<?php echo esc_url($image['sizes']['square']); ?>" alt="<?php echo esc_attr($image['alt']); ?>" class="offer-img"/>
              <?php endif; ?>
            <?php endwhile; ?>
          <?php endif; ?>
        </div>
        <div class="grid-2-4">
          <?php 
          if( !empty( $tx ) ): ?>
            <div class="offer-text"><?php echo $tx; ?></div>
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
    </section>

    <section class="offer-section" id="massage">
      <?php 
        $title = get_field('offer_title_3'); 
        $intro = get_field('offer_intro_3'); 
        $tx = get_field('offer_tx_3'); 
        $link = get_field('offer_link_3');
      ?>
      <?php 
      if( !empty( $title ) ): ?>
        <h2 class="offer-title"><?php echo $title; ?></h2>
      <?php endif; ?>
      <?php 
      if( !empty( $intro ) ): ?>
        <p class="offer-intro"><?php echo $intro; ?></p>
      <?php endif; ?>
      <div class="grid">
        <div class="grid-2-4">
          <?php 
          if( !empty( $tx ) ): ?>
            <div class="offer-text"><?php echo $tx; ?></div>
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
        <div class="grid-2-4">
          <?php if( have_rows('offer_img_3') ): ?>
            <?php while( have_rows('offer_img_3') ): the_row(); 
              $image = get_sub_field('photo');
            ?>
              <?php 
              if( !empty( $image ) ): ?>
                  <img src="<?php echo esc_url($image['sizes']['square']); ?>" alt="<?php echo esc_attr($image['alt']); ?>" class="offer-img"/>
              <?php endif; ?>
            <?php endwhile; ?>
          <?php endif; ?>
        </div>
      </div>  
    </section>

</div>
</section>