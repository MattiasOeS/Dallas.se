<?php
/**
 * @package WordPress
 * @subpackage Default_Theme
 */
add_theme_support( 'post-thumbnails' );

function filter_excerpt($str){
	#$str=str_replace("&","&amp;",$str);
	return remove_target($str);
}
function remove_target($str){
 	$str=preg_replace('/ target="_(.*)"/', '', $str);
	return $str;
}
function truncate($text,$numb,$etc = "...") {
   $text=utf8_decode($text);
   $text = html_entity_decode($text, ENT_QUOTES);
   if (strlen($text) > $numb) {
       $text = substr($text, 0, $numb);
       $text = substr($text,0,strrpos($text," "));

       $punctuation = ".!?:;,-";

       $text = (strspn(strrev($text),  $punctuation)!=0)
           ?
           substr($text, 0, -strspn(strrev($text),  $punctuation))
           :
       $text;

       $text = $text.$etc;
   }
   $text = htmlentities($text, ENT_QUOTES);
   $text=utf8_encode($text);
   return $text;
}
function htmlentities_utf8($str){
	return htmlentities($str, ENT_QUOTES, "UTF-8");
}
function get_post_images($postid=0,$size="thumbnail"){
	$images=&get_children(array(
		'post_parent' => $postid,
		'post_status' => 'inherit',
		'post_type' => 'attachment',
		'post_mime_type' => 'image',
		'order' => 'ASC',
		'orderby' => 'menu_order'
		)
	);
	if($images === FALSE){
		return array();
	}else{
		foreach($images as $image){
			$imagesarray[]=wp_get_attachment_image_src($image->ID, $size, false);
		}
		return $imagesarray;
	}
}
function get_orig_image($str){
	$pattern="/-(\d+)x(\d+)/";
	$orig_image=preg_replace($pattern,"",$str);
	if(stristr($orig_image,"/uploads/")){
		return $orig_image;	
	}else{
		return "";
	}
}
function get_post_media($postid=0,$size="thumbnail",$order="image"){
	$images=get_post_images($postid,$size);
	$videos=get_post_meta($postid, "youtubeid");
	$videowidth=get_option($size.'_size_w');
	$videoheight=round($videowidth*0.6495);
	$media=array();
	$i=0;
	if($order=="video"){
		if($videos){
			foreach($videos as $video){
				$media[]='<div class="mediawrapper"><div id="post-'.$postid.'-youtube-'.$i.'" class="youtubevideo size-'.$size.' w_'.$videowidth.' h_'.$videoheight.' y_'.$video.'"></div></div>';
				$i++;
			}
		}
		if($images){
			foreach($images as $image){
				$media[]='<div class="mediawrapper"><img id="post-'.$postid.'-img-'.$i.'" class="image size-'.$size.'" alt="'.get_orig_image($image[0]).'" src="'.$image[0].'" /></div>';
				$i++;
			}
		}
	}else{
		if($images){
			foreach($images as $image){
				$media[]='<div class="mediawrapper"><img id="post-'.$postid.'-img-'.$i.'" class="image size-'.$size.'" alt="'.get_orig_image($image[0]).'" src="'.$image[0].'" /></div>';
				$i++;
			}
		}
		if($videos){
			foreach($videos as $video){
				$media[]='<div class="mediawrapper"><div id="post-'.$postid.'-youtube-'.$i.'" class="youtubevideo size-'.$size.' w_'.$videowidth.' h_'.$videoheight.' y_'.$video.'"></div></div>';
				$i++;
			}
		}
	}
	if(!$media){
		$media[]='<div class="mediawrapper"></div>';
	}
	return $media;
}
function get_post_media_html($postid=0,$size="thumbnail",$order="images",$limit=0){
	$media_array = get_post_media($postid,$size,$order);
	$str="";
	$i=0;
	foreach($media_array as $media){
		if($limit){
			if($i<$limit){
				$str.=$media."\n";
			}
		}else{
			$str.=$media."\n";		
		}
		$i++;
	}
	return $str;
}
function oddeven($int){
	if($int & 1){
		return "odd";
	}else{
		return "even";
	}
}
function get_current_nav_class($page){
	global $wp_query;
	$post_obj = $wp_query->get_queried_object();
	if($post_obj->post_type=="post"){
		if($page=="cases"){
			return ' class="current_page_item"';
		}
	}else{
		if($post_obj->post_name==$page){
			return ' class="current_page_item"';
		}
	}
}
function get_clients_by_postid($post=0){
	$clients = get_categories("child_of=6&depth=1&echo=0");
	$current_clients = array();
	foreach($clients as $client){
		if(in_category($client->cat_ID, $post)){
			$current_clients[] = $client;
		}
	}
	return $current_clients;
}
function get_clients(){
	$cats = get_categories('child_of=6&hide_empty=1&depth=0&echo=0');
	return $cats;
}
function get_tasks_by_postid($post=0) {
	$post =& get_post($post);
	$taxonomies = array();
	if ( !$post ){
		return $taxonomies;
	}
	$template = apply_filters('taxonomy_template', '%s: %l.');
	foreach ( get_object_taxonomies($post) as $taxonomy ) {
		$t = (array) get_taxonomy($taxonomy);
		if ( empty($t['label']) ){
			$t['label'] = $taxonomy;
		}
		if ( empty($t['args']) ){
			$t['args'] = array();
		}
		if ( empty($t['template']) ){
			$t['template'] = $template;
		}
		$terms = get_object_term_cache($post->ID, $taxonomy);
		if ( empty($terms) ){
			$terms = wp_get_object_terms($post->ID, $taxonomy, $t['args']);
		}
		$links = array();
		foreach ( $terms as $term ){
			if($term->taxonomy=="post_tag"){
				$links[] = $term;
			}
		}
		if ( $links ){
			return $links;
		}
	}
	return $taxonomies;
}
function the_underlinks($post=0,$divider=' &amp; '){
	$str="";
	$clients=get_clients_by_postid($post);
	foreach($clients as $client){
		$items[]='<a href="#" rel="clients--'.$client->slug.'" title="'.$client->slug.'">'.$client->name.'</a>';
	}
	$tasks=get_tasks_by_postid($post);
	foreach($tasks as $task){
		$items[]='<a href="#" rel="tasks--'.$task->slug.'" title="'.$task->slug.'">'.$task->name.'</a>';
	}
	$str=implode($divider,$items);
	echo $str;
}
function get_post_trail($post=0){
	$clients=get_clients_by_postid($post);
	$clienttrail = array();
	foreach($clients as $client){
		$clienttrail[]=$client->slug;
	}
	return implode("|||",$clienttrail);
}
function get_task_class_string($post=0){
	$taskclassarray=array();
	$taskclasses=get_tasks_by_postid($post->ID);
	foreach($taskclasses as $taskclass){
		$taskclassarray[]='tasks--'.$taskclass->slug.'_item';
	}
	$str=implode(" ",$taskclassarray);
	return $str;
}
function get_client_class_string($post=0){
	$clientclassarray=array();
	$clientclasses=get_clients_by_postid($post->ID);
	foreach($clientclasses as $clientclass){
		$clientclassarray[]='clients--'.$clientclass->slug.'_item';
	}
	$str=implode(" ",$clientclassarray);
	return $str;
}
?>