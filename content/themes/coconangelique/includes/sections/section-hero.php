
<?php  
$image = get_field('hero_img');
$baseline = get_field('hero_baseline');
?>
<section class="section-hero" style="background-image: url(<?php echo $image['sizes']['hero'] ?>);">
  <div class="wrapper hero-content">
    
    <h1 class="hero-title">Angélique <span>VENTRE</span></h1>
    <?php if( !empty( $baseline ) ): ?>
      <h2 class="hero-baseline"><?php echo $baseline; ?></h2>
    <?php endif; ?> 

  </div>

</section>