<?php
if ( function_exists( 'add_theme_support' ) ) {
	add_theme_support( 'post-thumbnails' );
    set_post_thumbnail_size( 2560, 2560, false); // default Post Thumbnail dimensions   
}

if ( function_exists( 'add_image_size' ) ) { 
	// News thumbs
	add_image_size( 'background', 1680, 1050, true );
	
	add_image_size( 'large-normal', 1280, 720, false );
	add_image_size( 'large-retina', 2560, 1280, false );

	add_image_size( 'normal-normal', 360, 360, true );
	add_image_size( 'normal-retina', 720, 720, true );
	
	add_image_size( 'medium-normal', 640, 360, true );
	add_image_size( 'medium-retina', 1280, 720, true );
	
	add_image_size( 'small-normal', 250, 250, true );
	add_image_size( 'small-retina', 500, 500, true );

}

function the_xc1_thumbnail($xc1_image_request_size, $xc1_image_request_ID = null) {
	$xc1_image_normal_size = $xc1_image_request_size . '-normal';
	$xc1_image_retina_size = $xc1_image_request_size . '-retina';
	
	$xc1_image_fallback = XC1_THEME_IMAGES_URI . '/fallback-' . $xc1_image_request_size . '.jpg';
		
	if($xc1_image_request_ID != null) {
		$xc1_image_id = $xc1_image_request_ID;
	} else {
		$xc1_image_id = get_post_thumbnail_id();
	}
	
	$xc1_image_normal = wp_get_attachment_image_src ($xc1_image_id, $xc1_image_normal_size);
	$xc1_image_retina = wp_get_attachment_image_src ($xc1_image_id, $xc1_image_retina_size);
	
	global $_wp_additional_image_sizes;

	if($xc1_image_normal[1] < $_wp_additional_image_sizes[$xc1_image_normal_size]['width'] ||  $xc1_image_normal[2] < $_wp_additional_image_sizes[$xc1_image_normal_size]['height']) {
		$xc1_image_normal[0] = $xc1_image_retina[0] = $xc1_image_fallback;
	} else if($xc1_image_retina[1] < $_wp_additional_image_sizes[$xc1_image_retina_size]['width'] ||  $xc1_image_retina[2] < $_wp_additional_image_sizes[$xc1_image_retina_size]['height']) { 
		$xc1_image_retina = $xc1_image_normal; 
	}
	echo '<img class="xc1-thumbnail" data-normal="' . $xc1_image_normal[0] . '" data-retina="' . $xc1_image_retina[0] . '" src="' . $xc1_image_fallback . '" />';
}