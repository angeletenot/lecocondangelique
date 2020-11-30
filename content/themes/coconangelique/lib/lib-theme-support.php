<?php
/*
 * Set up the content width value based on the theme's design.
 */
if (!isset($content_width))
{
  $content_width = 960;
}
if ( ! function_exists('custom_theme_features') ) {
  // Register Theme Features
  function custom_theme_features()  {
    // Add theme support for Automatic Feed Links
    add_theme_support( 'automatic-feed-links' );

    // Add theme support for Featured Images
    add_theme_support( 'post-thumbnails' );
     // Set custom thumbnail dimensions
    add_image_size('hero', 1440, 850, true);
    add_image_size('news-thumb', 1200, 490, true);
    add_image_size('news-thumb-sm', 385, 385, true);

    // Add theme support for HTML5 Semantic Markup
    add_theme_support( 'html5', array( 'search-form', 'comment-form', 'comment-list', 'gallery', 'caption' ) );

    // Add theme support for document Title tag
    add_theme_support( 'title-tag' );

    // Add theme support for custom CSS in the TinyMCE visual editor
    add_editor_style();

  }
  add_action( 'after_setup_theme', 'custom_theme_features' );
}