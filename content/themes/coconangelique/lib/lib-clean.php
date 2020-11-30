<?php
/* Add Filters
-------------------------- */
// Allow shortcodes in Dynamic Sidebar
add_filter('widget_text', 'do_shortcode');
// Remove <p> tags in Dynamic Sidebars (better!)
add_filter('widget_text', 'shortcode_unautop');



/* Remove Filters
-------------------------- */
