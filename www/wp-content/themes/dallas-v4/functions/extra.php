<?php
// Extra functions
function the_slug() {
	$post_data = get_post($post->ID, ARRAY_A);
	$slug = $post_data['post_name'];
	return $slug; 
}


function change_post_menu_label() {
    global $menu;
    global $submenu;
    $menu[5][0] = 'Case';
    $submenu['edit.php'][5][0] = 'Alla case';
    $submenu['edit.php'][10][0] = 'Nytt case';
    echo '';
}
function change_post_object_label() {
    global $wp_post_types;
    $labels = &$wp_post_types['post']->labels;
    $labels->name = 'Case';
    $labels->singular_name = 'Case';
    $labels->add_new = 'Nytt case';
    $labels->add_new_item = 'Nytt case';
    $labels->edit_item = 'Redigera case';
    $labels->new_item = 'Case';
    $labels->view_item = 'Se case';
    $labels->search_items = 'Sök case';
    $labels->not_found = 'Hittade inga case';
    $labels->not_found_in_trash = 'Inga case i papperskorgen';
}

function redirect_users () {
	wp_redirect(get_option('siteurl'));
}