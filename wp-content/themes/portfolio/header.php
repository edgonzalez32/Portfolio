<?php
/**
 * The header for our theme
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package LM_Custom_Theme
 */

?><!doctype html>
<html <?php language_attributes(); ?>>
<head>
<meta charset="<?php bloginfo( 'charset' ); ?>">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="profile" href="http://gmpg.org/xfn/11">

<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
<div id="page" class="site">
	<!-- <a class="skip-link screen-reader-text" href="#content"><?php esc_html_e( 'Skip to content', 'lm-custom-theme' ); ?></a> -->
	

	<div class="navbar-fixed">
		<nav class="z-depth-2" role="navigation">
			<div class="nav-wrapper container">
				<a id="logo-container" href="<?php echo get_site_url(); ?>" class="valign-wrapper brand-logo left">
					Ed Gonzalez
				</a>
				<ul class="right hide-on-med-and-down">
					<!-- <li><a href="#">Navbar Link</a></li> -->
					<?php if ( has_nav_menu( 'menu-1' ) ) : ?>
					
						<?php
							wp_nav_menu( array(
								'theme_location' => 'menu-1'
								// 'menu_class'     => 'primary-menu',
							 ) );
						?>
					<?php endif; ?>
				</ul>
		
				<ul id="nav-mobile" class="side-nav">
					<?php if ( has_nav_menu( 'menu-1' ) ) : ?>
						<?php
							wp_nav_menu( array(
								'theme_location' => 'menu-1'
								) );
						?>
					<?php endif; ?>
				</ul>
		
				<a href="#" data-activates="nav-mobile" class="button-collapse"><i class="material-icons">menu</i></a>
			</div>
		</nav>
	</div>


