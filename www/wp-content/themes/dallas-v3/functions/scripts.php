<?php
function parhaggstrom_scripts() {
    global $compress_scripts, $concatenate_scripts;
    $compress_scripts = 1;
    $concatenate_scripts = 1;
    define('ENFORCE_GZIP', true); 
 
    if ( !is_admin() ) {
    
        wp_deregister_script( 'jquery' );
        wp_register_script( 'jquery', XC1_THEME_STATIC_URI . 'assets/javascripts/jquery-1.10.2.min.js');
        wp_enqueue_script( 'jquery' );
        
        wp_enqueue_script('main', XC1_THEME_STATIC_URI . 'assets/javascripts/main.js',array('jquery'),'',true);
    }
}