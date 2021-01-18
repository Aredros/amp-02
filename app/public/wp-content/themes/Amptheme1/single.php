<?php
/** 
 * Single template file.
 * 
 * @package TPTF
*/
get_header();
?>


<div id="content" class="site-content">
      <?php esc_html_e('Single post', 'tptf'); ?>
      <h3><?php the_field('store_name'); ?></h3>
      <h3><?php the_field('store_name'); ?></h3>
      <h3><?php the_field('store_name'); ?></h3>
      <h3><?php the_field('store_name'); ?></h3>
      <h3><?php the_field('store_name'); ?></h3>
      <h3><?php the_field('store_name'); ?></h3>
      <h3><?php the_field('store_name'); ?></h3>

    
 </div>


  
 <?php
 get_footer();
 ?>