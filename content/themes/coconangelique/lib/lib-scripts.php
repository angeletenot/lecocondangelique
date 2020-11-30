<?php
// Enqueue Theme Scripts
function enqueue_theme_scripts() {
  if ($GLOBALS['pagenow'] != 'wp-login.php' && !is_admin()) {
      wp_register_script('theme-scripts', get_template_directory_uri() . '/scripts/scripts.js', array('jquery'), '1.0.0');

      wp_enqueue_script('theme-scripts');
      wp_localize_script('theme-scripts', 'ajaxurl', admin_url( 'admin-ajax.php' ) );
  }
}

// Add Actions
add_action('init', 'enqueue_theme_scripts');

?>
