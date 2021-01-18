<?php
/**
 * Page template
 * 
 * @package TPTF
 */
if(is_page( 'map' )):
	get_header("no-amp");
else:
	get_header();
endif;

?>


<?php
	//GO TO THE ORGANIZER THAT WILL GET THE TEMPLATE OF THE PAGE
get_template_part('template-parts/templates-tptf/organizer') ?>

<?php get_footer(); ?>