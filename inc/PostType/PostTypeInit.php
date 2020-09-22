<?php
namespace MyPlugin\PostType;

use MyPlugin\PostType\MetaBox\Post\PostMetaBox;

/**
 * @author lookawesome team
 * @version 1.0
 * @package PostType
 * 
 * Register post type for theme designer
 */
class PostTypeInit {

	public function __construct(){
        add_action( 'add_meta_boxes', array(new PostMetaBox($this), 'register') );
	}

    public function register(){

    }
}