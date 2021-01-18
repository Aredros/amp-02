<?php
/**
 *  Bootstraps the theme.
 * 
 * @package TPTF
 */

namespace Amptheme1\inc;

use Amptheme1\inc\traits\singleton;

class Amptheme1 {
     use Singleton;

     protected function __construct(){

        // load class.
        
        Assets::get_instance();
        Menus::get_instance();
        Meta_Boxes::get_instance();

        $this->setup_hooks();
        
     }


    public function setup_theme(){
        add_theme_support('title-tag');

        add_theme_support('custom-logo', [
            'header-text'  => [ 'site-title' , 'site-description' ],
            'height'       => 50,
            'width'        => 50,
            'flex-height'  => true,
            'flex-width'   => true,
        ]);

        add_theme_support('custom-background', [
            'default-color' => '#fff',
            'default-image' => '',
        ] );

        add_theme_support( 'post-thumbnails' );

            /* 
            *Register image sizes.
            */
        add_image_size('featured-thumbnail', 350, 233, true);

        add_theme_support( 'customize-selective-refresh-widgets' );

        add_theme_support( 'automatic-feed-links' );

        add_theme_support( 
            'html5',
            [
                'search-form',
                'comment-form',
                'comment-list',
                'gallery',
                'caption',
                'script',
                'style',
            ]
         );

         add_editor_style();

         add_theme_support('wp-block-styles');

         add_theme_support( 'align-wide' );

         global $content_width;
         if( ! isset($content_width)){
             $content_width = 1240;
         }
    }

    protected function setup_hooks() {

		/**
		 * Actions.
		 */
		add_action( 'after_setup_theme', [ $this, 'setup_theme' ] );
	}
}