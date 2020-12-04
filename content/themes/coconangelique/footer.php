      <div class="clearfix"></div>
    </main>

    <footer class="footer">
      <div class="wrapper">
        <p class="footer-title">Le Cocon d'Angélique</p>

        <?php include get_template_directory() . '/includes/tools/socials.php';  ?>

        <nav class="footer-menu">
          <?php nav_footer() ?>
        </nav>

        <?php 
        $copyright = get_field('copyright', 'option');
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
