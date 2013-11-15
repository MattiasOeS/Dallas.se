<?php
// Updates DB with new siteurl
//update_option('siteurl','http://xc1.dev');
//update_option('home','http://xc1.dev');

// Include functions
include_once('functions/post-types.php');
include_once('functions/post-thumbs.php');
include_once('functions/post-excerpts.php');
include_once('functions/menues.php');
include_once('functions/scripts.php');
include_once('functions/admin-thumbs.php');
include_once('functions/extra.php');


// Add Actions
add_action('init', 'custom_post_type');
add_action('init', 'register_menus');
add_action('wp_enqueue_scripts', 'parhaggstrom_scripts');
add_action('admin_menu', 'change_post_menu_label');

add_theme_support( 'nav-menus' );

// Add Filters
add_filter('nav_menu_css_class', 'auto_custom_type_class', 10, 2 );

?>