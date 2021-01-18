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
        
