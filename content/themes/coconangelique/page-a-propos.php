<?php /* Template name: A propos */ ?>
<?php get_header(); ?>

<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>

  <div class="page-wrapper page-about">
    <div class="wrapper">
      <h1 class="page-title"><?php the_title(); ?></h1>

      <?php 
      $text = get_field('main_tx');
      $baseline = get_field('baseline');
      $projects_title = get_field('projects_title');
      $projects_intro = get_field('projects_intro');
      $btn = get_field('projects_btn');
      ?>

      <div class="grid">
        <div class="grid-2-4 about-img">
          <?php the_post_thumbnail('full'); ?>
        </div>
        <div class="grid-2-4 about-tx">
          <?php echo $text; ?>
        </div>
      </div>

      <?php if( !empty( $baseline ) ): ?>
        <p class="about-baseline"><?php echo $baseline; ?></p>
      <?php endif; ?> 

      <div class="projects">
        <?php if( !empty( $projects_title ) ): ?>
          <h2 class="projects-title"><?php echo $projects_title; ?></h2>
        <?php endif; ?>
        <?php if( !empty( $projects_intro ) ): ?>
          <p class="projects-intro"><?php echo $projects_intro; ?></p>
        <?php endif; ?>

        <?php if( have_rows('projects') ): ?>
          <div class="projects-list">
            <?php while( have_rows('projects') ) : the_row();
              $image = get_sub_field('image');
              $link = get_sub_field('link');
            ?>
            <a href="<?php echo $link; ?>" class="project-item" target="_blank">
              <img src="<?php echo esc_url($image['sizes']['news-thumb-sm']); ?>" alt="<?php echo esc_attr($image['alt']); ?>" />
            </a>
            <?php endwhile; ?>
          </div>
          <?php if( !empty( $btn ) ): 
            $link_url = $btn['url'];
            $link_title = $btn['title'];
            $link_target = $btn['target'] ? $btn['target'] : '_self';
          ?>
            <div class="btn-wrapper">
              <a class="btn" href="<?php echo esc_url( $link_url ); ?>" target="<?php echo esc_attr( $link_target ); ?>"><?php echo esc_html( $link_title ); ?></a>
            </div>
          <?php endif; ?>
          <p class="follow-me">Pour voir mes projets</p>
          <?php 
          $behance = get_field('behance', 'option');
          $facebook = get_field('facebook', 'option');
          $linkedin = get_field('linkedin', 'option');
          ?>

          <ul class="socials-list list-inline">

            <?php if( !empty( $behance ) ): ?>
              <li class="socials-item">
                <a href="<?php echo $behance ?>" target="_blank"><i class="icon-behance"></i></a>
              </li>
            <?php endif; ?>

            <?php if( !empty( $facebook ) ): ?>
              <li class="socials-item">
                <a href="<?php echo $facebook ?>" target="_blank"><i class="icon-facebook"></i></a>
              </li>
            <?php endif; ?>

            <?php if( !empty( $linkedin ) ): ?>
              <li class="socials-item">
                <a href="<?php echo $linkedin ?>" target="_blank"><i class="icon-linkedin"></i></a>
              </li>
            <?php endif; ?>

          </ul>
            
        <?php endif; ?>
      </div>

      <?php include get_template_directory() . '/includes/sections/section-instagram.php';  ?>

    </div>
  </div>

  <?php endwhile; else : ?>
    <p><?php _e( 'Sorry, no posts matched your criteria.' ); ?></p>
  <?php endif; ?>


<?php get_footer(); ?>
