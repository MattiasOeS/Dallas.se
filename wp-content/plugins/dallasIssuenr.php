<?php
/*
Plugin Name: Dallas Issuenr
Plugin URI: http://www.earthpeople.se/wp/dallasissuenr
Description: Increases the publish issue on new post
Version: 1.0
Author: Peder Fjällström
Author URI: http://www.earthpeople.se
*/

function iterate_issuenr($post){
	$issuenr=get_option("issuenr")+0;
	$issuenr++;
	update_option("issuenr", $issuenr);
}
function get_issuenr(){
	return get_option("issuenr")+0;
}
add_action('publish_post', 'iterate_issuenr'); 
?>