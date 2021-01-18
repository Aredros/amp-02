<?php
/** 
 * Main template file.
 * 
 * @package TPTF
*/
get_header();
?>

<div id="primary">
		<main id="main" class="site-main mt-5" role="main">
			<?php
			if ( have_posts() ) :
				?>
				<div class="container-fluid">
					<?php
					if ( is_home() && ! is_front_page() ) {
						?>
						<header class="mb-5">
							<h1 class="page-title screen-reader-text">
								<?php single_post_title(); ?>
							</h1>
						</header>

						<?php
					}
					?>


		 <?php //ONLY TO DIFFERENCIATE ARCHIVES
						if ( is_post_type_archive('book') ) { ?>
						<h4>This is the archive of the book posts</h4>
						<h4>This is the archive of the blog posts</h4>
							<h4>This is the archive of the blog posts</h4>
							<h4>This is the archive of the blog posts</h4>
							<h4>This is the archive of the blog posts</h4>
							<h4>This is the archive of the blog posts</h4>
							<h4>This is the archive of the book posts</h4>
							
						<?php } else{ ?>
							<?php
									//GO TO THE ORGANIZER THAT WILL GET THE TEMPLATE OF THE PAGE
								get_template_part('template-parts/templates-tptf/organizer-archives'); ?>
					<?php	} ?>
         
        </div>
		  <?php

		else:
			get_template_part('template-parts/content-none');
		endif; 
		get_template_part('template-parts/content-none');?>
  </main>
</div>

  
 <?php
 get_footer();
 ?>