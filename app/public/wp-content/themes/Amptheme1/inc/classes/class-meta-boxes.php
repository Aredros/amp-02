<?php
/**
 * REGISTER META BOXES
 * 
 * @package TPTF
 */

 namespace Amptheme1\inc;

 use Amptheme1\inc\traits\singleton;

 class Meta_Boxes {
     use Singleton;

     protected function __construct(){

        // load class.
        $this->setup_hooks();
     }

     protected function setup_hooks(){
         //actions and filters 
            //Actions
        
        add_action('add_meta_boxes', [$this, 'add_custom_meta_box'] );
    //    add_action( 'save_post', [ $this, 'save_post_meta_data' ] );

     }

     public function add_custom_meta_box(){
         $screens = ['post', 'store', 'ville'];
         foreach($screens as $screen){
             add_meta_box(
                 'hide-page-title',            //Unique ID
                 __('Hide page title', 'TPTF'),   //Box Title
                 [$this,'custom_meta_box_html'],   //Content callback, must be of type callable
                 $screen,                    //Post Type
                 'side'
             );
         }
     }

     public function custom_meta_box_html($post){
          $value = get_post_meta( $post->ID, '_hide_page_title', true );
          ?>

        <label for="tptf-field"><?php esc_html_e('Hide the page title', 'TPTF '); ?></label>
        <select name="tptf_hide_title_field" id="tptf-field" class="postbox">
            <option value=""><?php esc_html_e('Select', 'TPTF'); ?></option>
            <option value="yes" <?php selected($value, 'yes'); ?>>
                <?php esc_html_e('Yes', 'TPTF'); ?>
            </option>
            <option value="no" <?php selected($value, 'no'); ?>>
                <?php esc_html_e('No', 'TPTF'); ?>
            </option>
        </select>
        <?php
     }

 } 
 ?>