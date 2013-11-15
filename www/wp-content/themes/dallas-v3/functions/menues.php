<?php
function register_menus() {
	register_nav_menu( 'company-menu', __( 'Company' ) );
	register_nav_menu( 'how-to-shop-menu', __( 'How to shop' ) );
	register_nav_menu( 'more-sailracing-menu', __( 'More Sailracing' ) );
}

function auto_custom_type_class($classes, $item) {
	//var_dump($item);
	if ($item->type_label == "Custom") {
	 	$classes[] = 'menu-item-ajax menu-item-' . $item->menu_order;
	} else {
		$classes[] = 'menu-item-' . $item->menu_order;
	}
    return $classes;
}