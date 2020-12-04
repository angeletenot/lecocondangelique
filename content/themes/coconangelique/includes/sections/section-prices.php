<section class="section-prices">
  <div class="wrapper">
    <?php 
    $image = get_field('price_img');
    $text = get_field('price_tx');
    ?>
    <div class="grid">
      <div class="grid-2-4">
        <img src="<?php echo esc_url($image['sizes']['square-lg']); ?>" alt="<?php echo esc_attr($image['alt']); ?>" class="offer-img"/>
      </div>
      <div class="grid-2-4">
        <h2 class="section-title">Tarifs</h2>
        <div class="prices-tx">
          <?php echo $text; ?>
        </div>
      </div>
    </div>
  </div>
</section>