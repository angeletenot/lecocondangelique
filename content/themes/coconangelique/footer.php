      <div class="clearfix"></div>
    </main>

    <footer class="footer">
      <div class="wrapper">
        <?php 
        $image = get_field('logo_light', 'option');
        if( !empty( $image ) ): ?>
            <img src="<?php echo esc_url($image['url']); ?>" alt="<?php echo esc_attr($image['alt']); ?>" class="footer-logo"/>
        <?php endif; ?>

        <?php include get_template_directory() . '/includes/tools/socials.php';  ?>

        <nav class="footer-menu">
          <?php nav_footer() ?>
        </nav>

        <?php 
        $baseline = get_field('baseline_footer', 'option');
        $copyright = get_field('copyright', 'option');
        if( !empty( $baseline ) ): ?>
          <p class="footer-baseline"><?php echo $baseline; ?></p>
        <?php endif; 
        if( !empty( $copyright ) ): ?>
          <p class="footer-copyright"><?php echo $copyright; ?> <br>
            Site réalisé par <a href="http://mademoiselle-angele.fr" target="_blank">Angèle</a> & <a href="https://destrucsbien.fr/" target="_blank">Laura</a></p>
        <?php endif;
        ?>
      </div>
    </footer>


    <?php wp_footer(); ?>

  </body>
</html>
