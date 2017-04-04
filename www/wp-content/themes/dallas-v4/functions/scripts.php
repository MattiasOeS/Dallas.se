<?php
function ni_scripts() {
    global $compress_scripts, $concatenate_scripts;
    $compress_scripts = 1;
    $concatenate_scripts = 1;
    define('ENFORCE_GZIP', true); 
 
    if ( !is_admin() ) {
		/* wp_enqueue_script( 'lazy-load', XC1_THEME_STATIC_URI . 'assets/javascripts/jquery.lazyload.min.js', array('jquery'),'',true); */
		
    	wp_enqueue_script( 'froogaloop', 'https://f.vimeocdn.com/js/froogaloop2.min.js',array('jquery'),'',true);
		wp_enqueue_script( 'main_v2', '/assets/javascripts/main_v2.js?v=3',array('jquery'),'',true);
    }
}