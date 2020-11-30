<?php 
$instagram = get_field('instagram', 'option');
$facebook = get_field('facebook', 'option');
$linkedin = get_field('linkedin', 'option');
?>

<ul class="socials-list list-inline">

  <?php if( !empty( $instagram ) ): ?>
    <li class="socials-item">
      <a href="<?php echo $instagram ?>" target="_blank"><i class="icon-instagram"></i></a>
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