<?php 
$quote = get_field('quote'); 
?>
<?php 
if( !empty( $quote ) ): ?>
  
  <section class="section-quote">
    <div class="wrapper">
      <p class="quote"><?php echo $quote; ?></p>
    </div>
  </section>

<?php endif; ?>
