<?php
function custom_post_type() {
	
	// Post Types
	$labels_xc1 = array(
		'name' => _x( 'XC1', 'post type general name' ),
		'singular_name' => _x( 'XC1', 'post type singular name' ),
		'add_new' => _x( 'Add new', 'xc1' ),
		'add_new_item' => __( 'Add new item' ),
		'edit_item' => __( 'Edit' ),
		'new_item' => __( 'New' ),
		'view_item' => __( 'Show' ),
		'search_items' => __( 'Search' ),
		'not_found' =>  __( 'Found nothing' ),
		'not_found_in_trash' => __( 'Nothing in trash' ),
		'parent_item_colon' => ''
	);

	$args_xc1 = array( 
		'labels' => $labels_xc1,
		'public' => true,
		'publicly_queryable' => true,
		'show_ui' => true,
		'query_var' => true,
		'rewrite' => true,
		'capability_type' => 'post',
		'hierarchical' => false,
		'menu_position' => 4,
		'menu_icon' => '/assets/images/xc1-favicon.png', // 16px16
		'supports' => array( 'title', 'editor', 'author', 'thumbnail', 'excerpt', 'comments', 'custom-fields', 'entry-views' )
	); 
	
	// Taxonomies
	$labels_tax = array(
		'name' => _x( 'Custom tax', 'taxonomy general name' ),
		'singular_name' => _x( 'Custom tax', 'taxonomy singular name' ),
		'search_items' =>  __( 'Search' ),
		'all_items' => __( 'All' ),
		'parent_item' => __( 'Parent' ),
		'parent_item_colon' => __( 'Parent' ),
		'edit_item' => __( 'Edit' ), 
		'update_item' => __( 'Update' ),
		'add_new_item' => __( 'Add new item' ),
		'new_item_name' => __( 'New' ),
		'menu_name' => __( 'Custom tax' ),
	);
	
	$args_tax = array(
		'hierarchical' => true,
		'labels' => $labels_tax,
		'show_ui' => true,
		'query_var' => true,
		'rewrite' => array( 'slug' => 'tax' ),
	);
		
	/* Post types */
	
	/*
	register_post_type( 'xc1', $args_xc1 );
	
	register_taxonomy('tax', 'xc1', $args_tax );
	*/
}