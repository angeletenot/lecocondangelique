<?php
/*
 * Add Navigation
 */
if(!function_exists('custom_navigation_menus')) {
  function custom_navigation_menus() {
    $locations = array(
      'header-menu' => __( 'Header Menu', 'coconangelique' ),
      'footer-menu' => __( 'Footer Menu', 'coconangelique' ),
      'category-menu' => __( 'Category Menu', 'coconangelique' ),
      'socials-menu' => __( 'Socials Menu', 'coconangelique' ),
    );
    register_nav_menus( $locations );
  }
  add_action( 'init', 'custom_navigation_menus' );
}
/*
 * Navigation
 *
 * For option visit : http://codex.wordpress.org/Function_Reference/wp_nav_menu
 */
if(!function_exists('nav_header')) {
  function nav_header() {
    wp_nav_menu(
      array(
        'theme_location' => 'header-menu',
        'container'      => false,
        'items_wrap'     => '<ul class="menu-list">%3$s</ul>',
        'depth'          => 2
      )
    );
  }
}
if(!function_exists('nav_footer')) {
  function nav_footer() {
    $options =  array(
      'echo'           => false,
      'theme_location' => 'footer-menu',
      'container'      => false,
      'items_wrap'     => '%3$s',
      'depth'          => 1
    );
    $menu = wp_nav_menu($options);
    echo strip_tags($menu, '<a>');
  }
}
if(!function_exists('nav_category')) {
  function nav_category() {
    $options =  array(
      'echo'           => false,
      'theme_location' => 'category-menu',
      'container'      => false,
      'items_wrap'     => '%3$s',
      'depth'          => 1
    );
    $menu = wp_nav_menu($options);
    echo strip_tags($menu, '<a>');
  }
}
if(!function_exists('nav_socials')) {
  function nav_socials() {
    $options =  array(
      'echo'           => false,
      'theme_location' => 'socials-menu',
      'container'      => false,
      'items_wrap'     => '%3$s',
      'depth'          => 1
    );
    $menu = wp_nav_menu($options);
    echo strip_tags($menu, '<a>');
  }
}
/*
 * Add Class Active to nav
 */
if(!function_exists('custom_wp_nav_menu')) {
  function custom_wp_nav_menu($var) {
    return is_array($var) ? array_intersect($var, array(
        // List of allowed menu classes
        'current_page_item',
        'current_page_parent',
        'current_page_ancestor',
        'current-menu-ancestor',
        'menu-item',
        'is-active'
      )
    ) : '';
  }
  add_filter('nav_menu_css_class', 'custom_wp_nav_menu');
  add_filter('nav_menu_item_id', 'custom_wp_nav_menu');
  add_filter('page_css_class', 'custom_wp_nav_menu');
}
/*
 * Replaces "current-menu-item" with "is-active"
 */
if(!function_exists('current_to_active')) {
  function current_to_active($text) {
    $replace = array(
      // List of menu item classes that should be changed to "is-active"
      'current_page_item'     => 'is-active',
      'current_page_parent'   => 'is-active',
      'current_page_ancestor' => 'is-active',
      'current-menu-ancestor' => 'is-active'
    );
    $text = str_replace(array_keys($replace), $replace, $text);
    return $text;
  }
  add_filter('wp_nav_menu','current_to_active');
}
