<?php
/** 
 * Theme Functions
 * 
 * @package TPTF
*/


if(! defined( 'TPTF_DIR_PATH' )){
  define('TPTF_DIR_PATH', untrailingslashit( get_template_directory() ) );
}

if( ! defined('TPTF_DIR_URI')){
  define('TPTF_DIR_URI', untrailingslashit( get_template_directory_uri() ) );
}

require_once TPTF_DIR_PATH . '/inc/helpers/autoloader.php';
require_once TPTF_DIR_PATH . '/inc/helpers/template-tags.php';

//called from classes
function amp_get_theme_instance(){
  \Amptheme1\inc\Amptheme1::get_instance();
}

amp_get_theme_instance();

function amptheme_enqueue_scripts(){
 //   REGISTER STYLES
 //   old version
 //   wp_enqueue_style('main.css', get_template_directory_uri() . './main.css', ['stylesheet'] );
 //   wp_enqueue_style('style-css', get_stylesheet_uri(), [], filemtime(get_template_directory() . '/style.css'), 'all');


 
}

add_action('wp_enqueue_scripts', 'amptheme_enqueue_scripts');
 



/**
 * Filter the except length to 20 words.
 *
 * @param int $length Excerpt length.
 * @return int (Maybe) modified excerpt length.
 */
function wpdocs_custom_excerpt_length( $length ) {
  return 8;
}
add_filter( 'excerpt_length', 'wpdocs_custom_excerpt_length', 999 );
 ?>
