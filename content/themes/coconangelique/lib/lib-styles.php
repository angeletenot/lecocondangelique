<?php

/*
* Enqueue Theme Styles
*/
function enqueue_theme_styles() {
  wp_register_style('theme-styles', get_template_directory_uri() . '/style.css', array(), '1.0', 'all');
  wp_enqueue_style('theme-styles'); // Enqueue it!
}

// Add Actions
add_action('wp_enqueue_scripts', 'enqueue_theme_styles');

?>
