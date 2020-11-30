<?php
/*
* Add class to previous/next post link
*/
function add_class_next_post_link($html){
  $html = str_replace('<a','<a class="next-post"',$html);
  return $html;
  }
  add_filter('next_post_link','add_class_next_post_link',10,1);
  function add_class_previous_post_link($html){
  $html = str_replace('<a','<a class="prev-post"',$html);
  return $html;
  }
add_filter('previous_post_link','add_class_previous_post_link',10,1);

?>
