<?php 

add_action('acf/init', 'my_acf_op_init');
function my_acf_op_init() {

    // Check function exists.
    if( function_exists('acf_add_options_page') ) {

        // Register options page.
        $option_page = acf_add_options_page(array(
            'page_title'    => __('Options générales'),
            'menu_title'    => __('Options générales'),
            'menu_slug'     => 'theme-general-settings',
            'capability'    => 'edit_posts',
            'redirect'      => false
        ));
    }
}


function my_acf_google_map_api( $api ){
    $api['key'] = 'AIzaSyA_oRWidbtnpUMkvb2kB581XmXdRWS1dlM';
    return $api;
}
add_filter('acf/fields/google_map/api', 'my_acf_google_map_api');