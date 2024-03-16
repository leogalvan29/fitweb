<?php

/**
 * The header for our theme
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package fitness_theme
 */

?>
<!doctype html>
<html <?php language_attributes(); ?>>

<head>
	<meta charset="<?php bloginfo('charset'); ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="profile" href="https://gmpg.org/xfn/11">

	<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
	<?php wp_body_open(); ?>
	<div id="page" class="site">
		<a class="skip-link screen-reader-text" href="#primary"><?php esc_html_e('Skip to content', 'fitness_theme'); ?></a>

		<header id="masthead" class="site-header" x-data="{ open: !open }">
			<div class="row-header">
				<div class="site-branding">

					<?php echo the_custom_logo() ?>

					<style>
						.custom-logo-link img {
							width: <?php echo get_theme_mod('ancho_logo', 50) ?>px;
						}

						@media(min-width:768px) {
							.custom-logo-link img {
								width: <?php echo get_theme_mod('ancho_logo_desktop', 50) ?>px;
							}
						} 
					</style>  
				</div> 


				<div class="contenedor-navegacion" x-data="{ close: close}">
					<div class="bars" x-on:click="open = !open" @click.outside="open = !open">

						<svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6">
							<path stroke-linecap="round" stroke-linejoin="round" d="M3.75 6.75h16.5M3.75 12h16.5M12 17.25h8.25" />
						</svg>


					</div>
				
					<style>
						.bars svg {
							width: 28px;
							height: 28px;
							color: #ff4100;
						}

						@media(min-width:768px) {
							.bars {
								display: none;
							}
						}
					</style>
					<nav class="nav-movil" x-show="open">


						<?php
						wp_nav_menu(
							array(
								'theme_location' => 'menu-1',
								'menu_id'        => 'primary-menu',
							)
						);
						?>



					</nav>

					<script>
						const close = document.createElement('a')
						close.innerHTML = `
						

						 
						`
						
					</script>

					<style>
					 @media(max-width:768px){
						#primary-menu{
						width: 90%;
						position: absolute;
						right: 0;
						top: 0;
						height: 100%;
						background-color: #fff;
						color:red;
						display: flex;
						flex-direction: column;
						justify-content: center;
						align-items:flex-start ;
						list-style: none;
					  }

					  

					  #primary-menu  li {
                           text-decoration: none;
						   font-family: "Raleway", sans-serif;
						   
						   margin: 10px;
						   
						   
					  }

					  #primary-menu li a{
						text-decoration: none;
						color:#000000;
						font-weight: 600;
						text-transform: uppercase;
					  }

					 }
					</style>



				</div>

				<nav id="site-navigation" class="main-navigation">

					<?php
					wp_nav_menu(
						array(
							'theme_location' => 'menu-1',
							'menu_id'        => 'primary-menu',
						)
					);
					?>

					<a href="<?php  echo get_theme_mod('url_cta_header')  ?>" class="cta_header"><?php echo get_theme_mod('cta_txt_header') ?></a>
					<style>

						.main-navigation a{
							display: none;
						}
						.cta_header{
							display: none;
						}
						@media(min-width:991px){
							.cta_header{
								display: flex;
								color:#fff !important;
								text-transform: uppercase;
								background-color: <?php  echo get_theme_mod('color_cta_header') ?>;
								width: 220px;
								text-decoration: none;
								padding: 5px 15px;
								justify-content: center;
								align-items: center;
								font-family: "Raleway", sans-serif;
								font-weight: 700;
								font-style: italic;
							}
							.main-navigation a{
							display: flex;
						}
						} 
					</style>

				</nav>

				<style>
					.main-navigation {
						display: none;
					}

					@media(min-width:768px){
						.menu-menu-1-container{
							width: 100%;
						
						}
						.menu-menu-1-container #primary-menu{
							width: 100%;
							display: flex;
							justify-content: flex-end;
						}
						.menu-menu-1-container #primary-menu li{
                           margin: 0px 10px;
						 
						}

						.menu-menu-1-container #primary-menu li a{
							font-family: "Raleway", sans-serif;
						   text-transform: uppercase;
						   color:#000000;
						   font-weight: 700;
						}
					}

					@media(min-width:768px) {
						.main-navigation {
							display: flex;
							justify-content: space-around;
							align-items: center;
						}

						.main-navigation .menu {
							width: 100%;
						}
						.main-navigation .menu ul{
                           width: 100%;
						   display: flex;
						   justify-content: center;  

						}
					}
				</style>




			</div>
		</header><!-- #masthead -->

		<style>
			.row-header {
				max-width: 1140px;
				width: 90%;
				margin: 0px auto;
				padding: 30px 0px;
				display: flex;
				justify-content: space-between;
				justify-items: center;

			}

			.site-branding {
				width: 50%;
			}

			.main-navigation {
				width: 50%;

			}
		</style>