<?php
/** 
 * Header file
 * 
 * @package TPTF
*/
?>
<!doctype html>
<html amp lang="en">
  <head>
    <meta charset="<?php bloginfo('charset'); ?>">
    <meta name="viewport" content="width=device-width,minimum-scale=1,initial-scale=1">
    <meta name="description" content="This is the Google AMP Boilerplate.">
    <link rel="preload" as="script" href="https://cdn.ampproject.org/v0.js">
    <script async src="https://cdn.ampproject.org/v0.js"></script>
    <!-- Import other Google AMP Extensions here -->
    <script async custom-element="amp-fx-collection" src="https://cdn.ampproject.org/v0/amp-fx-collection-0.1.js"></script>
<!-- FORm -->
    <script async custom-element="amp-form" src="https://cdn.ampproject.org/v0/amp-form-0.1.js"></script>

    <style amp-custom>
    /* Add your styles here */
    <?php include "assets/src/library/css/amp-source-compiled.min.css"; ?>
    </style>

    <style amp-boilerplate>body{-webkit-animation:-amp-start 8s steps(1,end) 0s 1 normal both;-moz-animation:-amp-start 8s steps(1,end) 0s 1 normal both;-ms-animation:-amp-start 8s steps(1,end) 0s 1 normal both;animation:-amp-start 8s steps(1,end) 0s 1 normal both}@-webkit-keyframes -amp-start{from{visibility:hidden}to{visibility:visible}}@-moz-keyframes -amp-start{from{visibility:hidden}to{visibility:visible}}@-ms-keyframes -amp-start{from{visibility:hidden}to{visibility:visible}}@-o-keyframes -amp-start{from{visibility:hidden}to{visibility:visible}}@keyframes -amp-start{from{visibility:hidden}to{visibility:visible}}</style><noscript><style amp-boilerplate>body{-webkit-animation:none;-moz-animation:none;-ms-animation:none;animation:none}</style></noscript>

    <link rel="canonical" href="...">
		<?php if(is_page( 'Contact' )): ?>
    <title>My Contact</title>
    <?php else: ?>
    <title>My Google AMP Page</title>
    <?php endif; 
    wp_head(); 
    ?>
  </head>
  <body <?php body_class(); ?>>
  <?php 
  if(function_exists('wp_body_open')){
  wp_body_open(); 
}
?>

  <div id="page" class="site">
 
  <?php get_template_part('template-parts/header/nav-amp'); ?>
  <div id="content" class="site-content">

    
    

  
