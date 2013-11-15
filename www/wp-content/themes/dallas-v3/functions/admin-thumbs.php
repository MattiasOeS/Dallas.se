<?php
// GET FEATURED IMAGE  
function xc1_get_featured_image($post_ID) {  
    $post_thumbnail_id = get_post_thumbnail_id($post_ID);  
    if ($post_thumbnail_id) {  
        $post_thumbnail_img = wp_get_attachment_image_src($post_thumbnail_id, 'thumbnail');  
        return $post_thumbnail_img[0];  
    }  
}

// ADD NEW COLUMN  
function xc1_columns_head($defaults) {  
    $defaults['featured_image'] = 'Featured Image';  
    return $defaults;  
}  
  
// SHOW THE FEATURED IMAGE  
function xc1_columns_content($column_name, $post_ID) {  
    if ($column_name == 'featured_image') {  
        $post_featured_image = xc1_get_featured_image($post_ID);  
        if ($post_featured_image) {  
            echo '<img src="' . $post_featured_image . '" />';  
        }  
    }  
}

