<section id="contact" class="section-contact">
  <div class="wrapper">
    <div class="grid">
      <div class="grid-2-4">
        <?php 
        $image = get_field('contact_map'); 
        $link = get_field('contact_link'); 
        ?>
        <?php 
        if( !empty( $image ) ): ?>
          <a href="<?php echo $link; ?>" target="_blank" class="contact-img">
            <img src="<?php echo esc_url($image['sizes']['square-lg']); ?>" alt="<?php echo esc_attr($image['alt']); ?>"/>
          </a>
        <?php endif; ?>
      </div>
      <div class="grid-2-4">
        <?php 
        $title = get_field('contact_title'); 
        $tx = get_field('contact_intro'); 
        ?>
        <?php 
        if( !empty( $title ) ): ?>
          <h2 class="section-title"><?php echo $title; ?></h2>
        <?php endif; ?>
        <?php 
        if( !empty( $tx ) ): ?>
          <p class="contact-intro"><?php echo $tx; ?></p>
        <?php endif; ?>

        <div class="contact-tx">
          <?php
          $address = get_field('address', 'option'); 
          $phone = get_field('phone', 'option');  
          $email = get_field('email', 'option');  
          ?>
          <p><?php echo $address; ?></p>
          <p>Téléphone : <?php echo $phone; ?></p>

          <div class="btn-wrapper">
            <a href="mailto:<?php echo $email; ?>" class="btn">Me contacter</a>
          </div>
        </div>

      </div>
    </div>

</div>
</section>