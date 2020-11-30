<section id="contact" class="section-contact">
  <div class="wrapper">
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
        <p class="section-intro"><?php echo $tx; ?></p>
      <?php endif; ?>

      <div class="form-wrapper">
        <?php echo do_shortcode('[contact-form-7 id="184" title="Formulaire de contact 1"]') ?>
      </div>

</div>
</section>