<?php

// Extra functions
function the_slug() {
	$post_data = get_post($post->ID, ARRAY_A);
	$slug = $post_data['post_name'];
	return $slug; 
}


function change_post_menu_label() {
    global $menu;
    $menu[5][0] = 'Cases';
    echo '';
}

function redirect_users () {
	wp_redirect(get_option('siteurl'));
}
