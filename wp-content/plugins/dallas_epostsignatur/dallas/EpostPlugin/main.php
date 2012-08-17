<?php

require_once('meta.php');
require_once('image.php');

class Dallas_EpostPlugin_Main {

    var $key = 'Dallas_Epostsignatur';
    var $config = array(
        'label' => 'EpostSignatur',
        'labels' => array(
            'name' => 'dallas_epostsignatur',
            'sigular_name' => 'epostsignatur',
            'menu_name' => 'Signaturer',
        ),
        'public' => true,
        'exclude_from_search' => true,
        'show_in_nav_menus' => false,
        'menu_position' => 100,
        'supports' => array('title', 'author', 'thumbnail')
    );
    

    function __construct($config = array()) {
        array_merge_recursive($this->config, $config);
    }

    function init() {
    	require_once(dirname(__FILE__).'/image.php');
		require_once(dirname(__FILE__).'/meta.php');
          if (function_exists('register_post_type')) {
          	register_post_type($this->key, $this->config);
          }

	    $meta = new Dallas_EpostPlugin_Meta();
   	    add_action( 'add_meta_boxes', array($meta, 'register'));
   	    add_action( 'save_post', array($meta, 'save') );
        
    }
    
    function registerMeta(){
        
    }
    

    function register() {
        register_post_type($this->key, $this->config);
    }

    function activate() {
        
    }

    function deactivate() {
        
    }

    function getRandomImage($id = null) {

            if (!$id) {
                $query = new WP_Query(array(
                            'post_type' => 'Dallas_Epostsignatur',
                            //'orderby' => 'rand',
                            'posts_per_page' => 10
                        ));

                $id = $query->post->ID;
            }
            
            shuffle($query->posts);
            
            while ($query->posts && !$thumb) {
            
            	$a_id = get_post_thumbnail_id( $query->posts[0]->ID );
            	
            	if ((bool) $a_id) {
            		$thumb = wp_get_attachment_image_src( get_post_meta( $query->posts[0]->ID, '_thumbnail_id', true ), 'full'); 
            		$thumb = $thumb[0];
            		if ($thumb) {
                            $_SESSION['Dallas_Epostsignatur_ID'] = $query->posts[0]->ID;
                            break;
                        }
            	}
            	array_shift($query->posts);
            }
			       
            return $thumb;      
                                 
    }
    
    function randomImage($id = null) {
    
    	$img = $this->getRandomImage();

        if ($img) {
        	$url = str_replace('http://www.dallas.se',  rtrim(ABSPATH, '/\\'), $img);
        	$img = new Dallas_EpostPlugin_Image($url);
        	$img->output();
        }
    }

    
    
    /**
     * @return string - redirect url  
     */
    function proxy() {
        $redirect = null;

        if (isset($_SESSION['Dallas_Epostsignatur_ID'])) {
            $post = get_post($_SESSION['Dallas_Epostsignatur_ID']);
            $url = get_post_meta($post->ID, 'redirect_url', TRUE);

            if ($url) {
                $redirect = $url;
            }
        }

        if (!$redirect) {
            $redirect = 'http://www.dallas.se';
        }
		//echo ABSPATH;
        return $redirect;
    }

}