<section id="cercles" class="section-presentation">
  <div class="wrapper">
    <div class="grid">
      <div class="grid-2-4">
        <?php 
        $title = get_field('presentation_title'); 
        $tx = get_field('presentation_tx'); 
        $link = get_field('presentation_link'); 
        $pdf = get_field('presentation_pdf'); 
        ?>
        
        <?php 
        if( !empty( $title ) ): ?>
          <h2 class="section-title"><?php echo $title; ?></h2>
        <?php endif; ?>
        <?php 
        if( !empty( $tx ) ): ?>
          <div class="section-text"><?php echo $tx; ?></div>
        <?php endif; ?>
        
        <?php 
        if( !empty( $pdf ) ): 
        ?>
          <div class="btn-wrapper">
            <a class="btn" href="<?php echo $pdf; ?>" target="_blank"><?php echo $link; ?></a>
          </div>
        <?php endif; ?>
      </div>

      <div class="grid-2-4">
        <?php 
        $images = get_field('presentation_img');
        if( $images ): ?>
          <div class="presentation-gallery">
            <?php foreach( $images as $image ): ?>
              <img src="<?php echo esc_url($image['sizes']['square']); ?>" alt="<?php echo esc_attr($image['alt']); ?>" />
            <?php endforeach; ?>
          </div>
        <?php endif; ?>
      </div>

    </div>

</div>
</section>