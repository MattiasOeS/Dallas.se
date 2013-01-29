<?php

/*
 * To change this template, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of meta
 *
 * @author maxcal
 */
class Dallas_EpostPlugin_Meta {
       
    
    protected static $fields = array(        
            array(
                'name' => 'Redirect Url',
                'desc' => 'Redirect url for this banner.',
                'id' => 'dallas_epostplugin_url',
                'type' => 'text',
                'std' => 'http://www.dallas.se'
            )
        );
    
    public function __construct(){
    }

    public function register(){
        add_meta_box( 'Dallas_Epost_Plugin', 'Dallas EpostPlugin', array($this,'render'), 'Dallas_Epostsignatur', 'normal', 'core');
       
        
    }
    
    public function render($post){
        require_once dirname(__FILE__).'/metabox.php';
    } 
    
    static function getFields() {
         return self::$fields;
    }
    
    public function save($post_id){
        
        if (!current_user_can('edit_post', $post_id)) {
            return $post_id;
        }
        
        foreach (self::$fields as $field) {
            
            $id = $field['id'];
            
            if (isset($_POST[$id])){
               
                if (!empty($_POST[$id])) {
                    update_post_meta($post_id, $id, $_POST[$id]);
                }
                else {
                    delete_post_meta($post_id, $id);
                }
            }
        }
    }
    
}