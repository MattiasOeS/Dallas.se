<?php
function parhaggstrom_scripts() {
    global $compress_scripts, $concatenate_scripts;
    $compress_scripts = 1;
    $concatenate_scripts = 1;
    define('ENFORCE_GZIP', true); 
 
    /*if ( !is_admin() ) {
		wp_enqueue_script('easing', XC1_THEME_STATIC_URI . 'assets/javascripts/jquery.easing.1.3.min.js',array('jquery'),'',true);
		wp_enqueue_script('ui', XC1_THEME_STATIC_URI . 'assets/javascripts/jquery-ui-1.10.0.custom.min.js',array('jquery'),'',true);
		wp_enqueue_script('flexslider', XC1_THEME_STATIC_URI . 'assets/javascripts/jquery.flexslider-min.js',array('jquery'),'',true);
		wp_enqueue_script('jquery-xc1', XC1_THEME_STATIC_URI . 'assets/javascripts/jquery-xc1.js',array('jquery', 'easing', 'ui', 'flexslider'),'',true);
    }*/
}