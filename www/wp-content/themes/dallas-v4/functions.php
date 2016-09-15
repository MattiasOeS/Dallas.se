<?php
// Updates DB with new siteurl
// update_option('siteurl','http://dallas.dev');
// update_option('home','http://dallas.dev');

// Include functions
include_once('functions/post-types.php');
include_once('functions/post-thumbs.php');
include_once('functions/post-excerpts.php');
include_once('functions/menues.php');
include_once('functions/scripts.php');
include_once('functions/styles.php');
include_once('functions/admin-thumbs.php');
include_once('functions/extra.php');


// Add Actions
add_action('init', 'custom_post_type');
add_action('init', 'register_menus');
add_action( 'init', 'change_post_object_label' );
add_action('wp_enqueue_scripts', 'ni_scripts');
add_action('wp_enqueue_scripts', 'ni_styles');
add_action('admin_menu', 'change_post_menu_label');

add_theme_support( 'nav-menus' );

// Add Filters
add_filter('nav_menu_css_class', 'auto_custom_type_class', 10, 2 );


function new_excerpt_more( $more ) {
	global $post;
	return '… <a class="readMore" href="'. get_permalink($post->ID) . '">' . 'Läs mer' . '</a>';
}

function new_excerpt_length($length) {
    return 20;
}


add_filter('excerpt_length', 'new_excerpt_length');
add_filter('excerpt_more', 'new_excerpt_more');


add_filter( 'wp_default_scripts', 'remove_jquery_migrate' );

function remove_jquery_migrate( &$scripts)
{
    if(!is_admin())
    {
        $scripts->remove( 'jquery');
        $scripts->add( 'jquery', false, array( 'jquery-core' ), '1.10.2' );
    }
}

/*
*  Change the Options Page menu to 'Theme Options'
*/

if( function_exists('acf_set_options_page_title') )
{
    acf_set_options_page_title( __('Clients / Contact') );
}

if( function_exists('acf_set_options_page_menu') )
{
    acf_set_options_page_menu( __('Clients/Contact') );
}
?>