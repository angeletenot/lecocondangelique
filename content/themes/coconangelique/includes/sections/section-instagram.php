<section class="section-instagram">
  <div class="wrapper">
    <?php  
    $insta = get_field('instagram', 'option');
    ?>
    <h2 class="section-title">Suivez moi sur insta : <a href="<?php echo $insta; ?>" target="_blank">@destrucsbien</a></h2>
    <?php echo do_shortcode('[instagram-feed]'); ?>
  </div>
</section>