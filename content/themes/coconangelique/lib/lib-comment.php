<?php 

// Remove url field in comment form
function wpbeginner_remove_comment_url($arg) {
    $arg['url'] = '';
    return $arg;
}
add_filter('comment_form_default_fields', 'wpbeginner_remove_comment_url');

// Move comment field to bottom 
function wpb_move_comment_field_to_bottom( $fields ) {
$comment_field = $fields['comment'];
unset( $fields['comment'] );
$fields['comment'] = $comment_field;
return $fields;
}
  
add_filter( 'comment_form_fields', 'wpb_move_comment_field_to_bottom'); 


// Add text
function wpbeginner_comment_text_before($arg) {
    $arg['comment_notes_before'] = "<p class='comments-intro'>Partage les trucs que tu as à dire sur le sujet avant les autres ! <span>Ton adresse e-mail restera secrète. Les champs avec des * sont obligatoires. #dictaturedesastérisques</span></p>";
    return $arg;
}
  
add_filter('comment_form_defaults', 'wpbeginner_comment_text_before');