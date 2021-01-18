<?php
/** 
 * Nav Amp file
 * 
 * @package TPTF
*/

$menu_class = \Amptheme1\inc\menus::get_instance();
$header_menu_id = $menu_class->get_menu_id('tptf-header-menu');
$header_menus = wp_get_nav_menu_items($header_menu_id);
?>

	<header class="mega-menu full-width" amp-fx="float-in-top">
		<div class="container-fluid">
        	<div class="row">
				<div class="header">
					<div class="container">
				  	    <nav class="main-menu" id="main-menu">
					  		<!-- Mobile -->
							<label for="mobile" id="mobile-menu">
								<a href="" target="_top" title="Google AMP CSS Framework">
									<?php
								 		$custom_logo_id = get_theme_mod( 'custom_logo' );
										$custom_logo_url = wp_get_attachment_image_url( $custom_logo_id , 'full' );
										echo '<amp-img src="' . esc_url( $custom_logo_url ) . '" 
													   alt="logo tptf" 
													   layout="fixed"
													   height="40"
													   width="90"></amp-img>';
									?>
									
				  				</a>

					  			<span class="main-menu-dropdown-icon">
					  				<i class="hamburger"></i>
								</span>
							</label>
	
							<input type="checkbox" id="mobile">

							<!-- Main-menu -->

							
							<?php
							if(! empty($header_menus) && is_array($header_menus)){
								?>
							<ul class="main-menu">
							<li class="main-menu-logo">
							  	<a href="https://www.ampcssframework.com" target="_top">
							  		<?php
								 		$custom_logo_id = get_theme_mod( 'custom_logo' );
$custom_logo_url = wp_get_attachment_image_url( $custom_logo_id , 'full' );
echo '<amp-img src="' . esc_url( $custom_logo_url ) . '" 
				alt="logo tptf" 
				layout="fixed"
				height="70"
				width="100"></amp-img>';
								  ?>
								</a>
							  </li>
								<?php //this foreach will make the difference between menu items with parents and loop them
									foreach ( $header_menus as $menu_item ) {
										if ( ! $menu_item->menu_item_parent ) {
												
											$child_menu_items = $menu_class->get_child_menu_items( $header_menus, $menu_item->ID );
											$has_children = ! empty( $child_menu_items ) && is_array( $child_menu_items );
											$has_sub_menu_class = ! empty( $has_children ) ? 'has-submenu' : '';

											if(! $has_children){
												?>
												                <!-- Links right -->
												<li class="main-menu-right">
                  									<a style="font-family:'Montserrat-Bold'" href="<?php echo esc_url($menu_item->url); ?>"
													   target="_blank">
													   <i class="fab fa-google"></i> <?php echo esc_html($menu_item->title); ?></a>
							  					</li>
												<?php
											}else{
												?>
											<li class="main-menu-dropdown main-menu-right">
							  					<a title="Google AMP · Framework Tutorials" href="<?php echo esc_url($menu_item->url); ?>">
                   									<i class="fa fa-file-text m-none"></i> <?php echo esc_html($menu_item->title); ?>
								  						<span class="main-menu-dropdown-icon"> <i class="arrow-down"></i> </span>
								  				</a>
								  				<label class="main-menu-dropdown-icon" for="main-menu-dropdown-list-tutorials">
								  					<i class="arrow-down arrow-down-mobile"></i>
								  				</label>
								  				<input type="checkbox" id="main-menu-dropdown-list-tutorials">
								  				<ul class="main-menu-dropdown-list">
												  <?php 
												 	foreach($child_menu_items as $child_menu_item){
														 ?>
															<li>
													   			<a href="<?php echo esc_url($child_menu_item->url); ?>">
																   <?php echo esc_html($child_menu_item->title); ?> 
																</a>
															</li>
														 <?php
													 } 
												  ?>
												</ul>
											</li>
											<?php
											}
										}
									}
								?>

							</ul>
							<?php
							}
							?>
					

			        <!-- /main-menu -->
			      		</nav>					
					</div>
        		</div>
        	</div>
		</div>
    </header>