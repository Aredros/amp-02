<?php
/** 
 * Templates organizer
 * 
 * @package TPTF
*/
$slug = basename(get_permalink());
//FOR BASIC PAGES 

if(is_page( $slug )):
    get_template_part("template-parts/templates-tptf/". $slug ."/". $slug ."-area");
endif;
        
//FOR ARCHIVE PAGES

if ( is_post_type_archive('book') ):
    echo '<h4>hola</h4>';
else:
    get_template_part('template-parts/templates-tptf/blog/blog-area');
endif;