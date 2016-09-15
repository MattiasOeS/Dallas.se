<?php
function excerpt($limit) {
      $excerpt = explode(' ', get_the_excerpt(), $limit);
      if (count($excerpt)>=$limit) {
        array_pop($excerpt);
        $excerpt = implode(" ",$excerpt).'...';
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


function split_content() {  
    global $more;  
    $more = true;  
    $content = preg_split('/<span id="more-\d+"><\/span>/i', get_the_content('more'));  
    for($c = 0, $csize = count($content); $c < $csize; $c++) {  
        $content[$c] = apply_filters('the_content', $content[$c]);  
    }  
    return $content;  
}  