
<?php  
$image = get_field('hero_img');
$baseline = get_field('hero_baseline');
?>
<section class="section-hero" style="background-image: url(<?php echo $image['url'] ?>);">
  <div class="wrapper hero-content">
    <?php 
    $image = get_field('logo_light', 'option');
    if( !empty( $image ) ): ?>
        <img src="<?php echo esc_url($image['url']); ?>" alt="<?php echo esc_attr($image['alt']); ?>" class="hero-logo"/>
    <?php endif; ?>

    <?php if( !empty( $baseline ) ): ?>
      <h1 class="hero-title"><?php echo $baseline; ?></h1>
    <?php endif; ?> 

    <?php if( have_rows('hero_links') ): ?>
      <div class="hero-entries">
        <?php while( have_rows('hero_links') ) : the_row();
          $title = get_sub_field('title');
          $picto = get_sub_field('picto');
          $text = get_sub_field('text');
          $link = get_sub_field('link');
        ?>
          <div class="hero-entry">
            <h2 class="hero-entry-title"><?php echo $title; ?></h2>
            <div class="hero-entry-picto">
              <img src="<?php echo esc_url($picto['url']); ?>" alt="<?php echo esc_attr($picto['alt']); ?>"/>
            </div>
            <p class="hero-entry-tx"><?php echo $text; ?></p>
            <?php if( !empty( $link ) ): 
              $link_url = $link['url'];
              $link_title = $link['title'];
              $link_target = $link['target'] ? $link['target'] : '_self';
            ?>
              <a class="btn" href="<?php echo esc_url( $link_url ); ?>" target="<?php echo esc_attr( $link_target ); ?>"><?php echo esc_html( $link_title ); ?></a>
            <?php endif; ?>
          </div>
        <?php endwhile; ?>
      </div>
    <?php endif; ?>
  </div>

</section>