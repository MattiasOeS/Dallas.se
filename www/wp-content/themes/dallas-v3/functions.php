<?php
// Updates DB with new siteurl
//update_option('siteurl','http://xc1.dev');
//update_option('home','http://xc1.dev');

// Include functions
include_once('functions/post-types.php');
include_once('functions/post-thumbs.php');
include_once('functions/post-excerpts.php');
include_once('functions/scripts.php');
include_once('functions/admin-thumbs.php');
include_once('functions/extra.php');


// Add Actions
add_action('init', 'custom_post_type');
add_action('wp_enqueue_scripts', 'parhaggstrom_scripts');
add_action('admin_menu', 'change_post_menu_label');

add_theme_support( 'nav-menus' );
add_theme_support( 'post-thumbnails' );


?>