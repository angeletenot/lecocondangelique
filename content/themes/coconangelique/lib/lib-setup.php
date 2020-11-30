<?php
/*
 * Add page slug to body class, love this - Credit: Starkers Wordpress Theme
 */
function add_slug_to_body_class($classes)
{
  global $post;
  if (is_home()) {
    $key = array_search('blog', $classes);
    if ($key > -1) {
      unset($classes[$key]);
    }
  } elseif (is_page()) {
    $classes[] = sanitize_html_class($post->post_name);
  } elseif (is_singular()) {
    $classes[] = sanitize_html_class($post->post_name);
  }
  return $classes;
}
add_filter('body_class', 'add_slug_to_body_class');


/*
* Custom excerpt lenght
*/
function excerpt($limit) {
  $excerpt = explode(' ', get_the_excerpt(), $limit);
      if (count($excerpt)>=$limit) {
        array_pop($excerpt);
        $excerpt = implode(" ",$excerpt).' ...';
      } else {
        $excerpt = implode(" ",$excerpt);
      }
      $excerpt = preg_replace('`\[[^\]]*\]`','',$excerpt);
      return $excerpt;
    }

    function content($limit) {
      $content = explode(' ', get_the_content(), $limit);
      if (count($content)>=$limit) {
        array_pop($content);
        $content = implode(" ",$content).'...';
      } else {
        $content = implode(" ",$content);
      }
      $content = preg_replace('/\[.+\]/','', $content);
      $content = apply_filters('the_content', $content);
      $content = str_replace(']]>', ']]&gt;', $content);
      return $content;
    }


function new_excerpt_more( $more ) {
  return '...';
}
add_filter('excerpt_more', 'new_excerpt_more');


/*
 * No Duplicate content
 * http://www.geekpress.fr/wordpress/astuce/duplicate-content-categorie-1416/
 */
function baw_non_duplicate_content( $wp )
{
  global $wp_query;
  if( isset( $wp_query->query_vars['category_name'], $wp_query->query['category_name'] )
  && $wp_query->query_vars['category_name'] != $wp_query->query['category_name'] ) :
  $correct_url = str_replace( $wp_query->query['category_name'], $wp_query->query_vars['category_name'], $wp->request );
    wp_redirect( home_url( $correct_url ), 301 );
  die();
  endif;
}
add_action('wp', 'baw_non_duplicate_content' );

/*
 * Remove WordPress custom field
 */
function baw_remove_custom_field_meta_boxes()
{
  remove_post_type_support( 'post','custom-fields' );
  remove_post_type_support( 'page','custom-fields' );
}
add_action('init','baw_remove_custom_field_meta_boxes');

/*
 * Remove Widget Calendar
 */
function remove_calendar_widget()
{
  unregister_widget('WP_Widget_Calendar');
}
add_action( 'widgets_init', 'remove_calendar_widget' );

/*
 * Load theme textdomain
 */
function my_theme_setup(){
  load_theme_textdomain('my_theme', get_template_directory() . '/languages');
}
add_action('after_setup_theme', 'my_theme_setup');
