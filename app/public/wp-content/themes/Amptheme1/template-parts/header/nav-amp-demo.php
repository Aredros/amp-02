<?php
/** 
 * Nav Amp file
 * 
 * @package TPTF
*/
?>
<header class="mega-menu full-width fixed">
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
echo '<amp-img src="' . esc_url( $custom_logo_url ) . '" alt="logo tptf" layout="responsive"></amp-img>';
								  ?>
							<span class="logo">TPTF LOGO</span>
				  			</a>

							  
					  		<span class="main-menu-dropdown-icon">
					  			<i class="hamburger"></i>
								</span>
							</label>
							
							<input type="checkbox" id="mobile">
							
							<!-- Main-menu -->
							<ul class="main-menu">
                
                <!-- Links left -->
							  <li class="main-menu-logo">
							  	<a href="https://www.ampcssframework.com" target="_top">
							  		<?php
								 		$custom_logo_id = get_theme_mod( 'custom_logo' );
$custom_logo_url = wp_get_attachment_image_url( $custom_logo_id , 'full' );
echo '<amp-img src="' . esc_url( $custom_logo_url ) . '" alt="logo tptf" layout="responsive"></amp-img>';
								  ?>
								  <span class="logo">The place to frip</span>
								</a>
							  </li>
							  <!-- HOME:ACTIVE button
							  <li class="main-menu-right">
							  	<a href="https://www.ampcssframework.com" target="_top" class="active" title="Back to index"><i class="fa fa-home m-none"></i> Home</a>
							  </li> -->
							  
							  <li class="main-menu-dropdown main-menu-right">
							  	<a title="Google AMP · Framework Components">
                  <i class="fa fa-file m-none"></i> Contact
								  	<span class="main-menu-dropdown-icon">
								  		<i class="arrow-down"></i>
										</span>
								  </a>
								  <label class="main-menu-dropdown-icon" for="main-menu-dropdown-list-components">
								  	<i class="arrow-down arrow-down-mobile"></i>
								  </label>
								  <input type="checkbox" id="main-menu-dropdown-list-components">
								  
								  <ul class="main-menu-dropdown-list">
										<li>
											<a>Typography
												<span class="main-menu-dropdown-icon">
													<i class="arrow-right"></i>
												</span>
											</a>
										
											<label class="main-menu-dropdown-icon" for="main-menu-dropdown-list-components-typography">
												<i class="arrow-down arrow-down-mobile"></i>
											</label>
											<input type="checkbox" id="main-menu-dropdown-list-components-typography">
											
											<ul class="main-menu-dropdown-list">
												<li><a href="/typography" title="Google AMP · Typography">Basics</a></li>	
												<li>
													<a>Fonts
														<span class="main-menu-dropdown-icon">
															<i class="arrow-right"></i>
														</span>
													</a>
													
													<label class="main-menu-dropdown-icon" for="main-menu-dropdown-list-components-typography-custom-fonts">
														<i class="arrow-down arrow-down-mobile"></i>
													</label>
													<input type="checkbox" id="main-menu-dropdown-list-components-typography-custom-fonts">
													
													<ul class="main-menu-dropdown-list">
														<li>
															<a href="/typography/fonts/custom-fonts" title="Google AMP · Custom Fonts">Custom Fonts</a>
														</li>
													</ul>
												</li>
												<li>
													<a>Icons
														<span class="main-menu-dropdown-icon">
															<i class="arrow-right"></i>
														</span>
													</a>
													
													<label class="main-menu-dropdown-icon" for="main-menu-dropdown-list-components-typography-icons">
														<i class="arrow-down arrow-down-mobile"></i>
													</label>
													<input type="checkbox" id="main-menu-dropdown-list-components-typography-icons">
													
													<ul class="main-menu-dropdown-list">
														<li>
															<a href="/typography/icons/fontawesome" title="Google AMP · Font Awesome Icons">Font Awesome Icons <span class="tip">v5.8.1</span></a>
														</li>
													</ul>
												</li>
											</ul>
										</li>
				            <li><a href="/badges" title="Google AMP · Badges">Badges</a></li>
									</ul>
								</li>
							  
							  <li class="main-menu-dropdown main-menu-right">
							  	<a title="Google AMP · Framework Tutorials">
                   <i class="fa fa-file-text m-none"></i> Blog
								  	<span class="main-menu-dropdown-icon">
								  		<i class="arrow-down"></i>
										</span>
								  </a>
								  <label class="main-menu-dropdown-icon" for="main-menu-dropdown-list-tutorials">
								  	<i class="arrow-down arrow-down-mobile"></i>
								  </label>
								  <input type="checkbox" id="main-menu-dropdown-list-tutorials">
								  
								  <ul class="main-menu-dropdown-list">
                   <li><a href="/amp-web-push-notifications" title="Google AMP Web Push Notifications">Web Push Notifications <span class="tip">New</span><br><span class="main-menu-dropdown-item-subtitle">PushEngage</span></a></li>
									</ul>
								</li>

                
                <!-- Links right -->
							  <li class="main-menu-right">
                  <a href="https://search.google.com/test/amp" target="_blank" title="Is your Google AMP page valid?"><i class="fab fa-google"></i> Philosophie</a>
							  </li>
							  <li class="main-menu-right">
                  <a href="https://search.google.com/test/amp" target="_blank" title="Is your Google AMP page valid?"><i class="fab fa-google"></i> Les Villes</a>
							  </li>
			        </ul>
			        <!-- /main-menu -->
			      </nav>					</div>
        </div>
        </div>
			</div>
    </header>