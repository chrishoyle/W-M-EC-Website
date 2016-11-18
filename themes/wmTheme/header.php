<?php
/**
 * The header for our theme.
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package Entrepreneurship
 */

?><!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
<meta charset="<?php bloginfo( 'charset' ); ?>">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="profile" href="http://gmpg.org/xfn/11">
<title> <?php wp_title()?> William &amp; Mary Center </title>
<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
<div id="page" class="site">
	<a class="skip-link screen-reader-text" href="#content"><?php esc_html_e( 'Skip to content', 'entrepreneurship' ); ?></a>

	<header id="masthead" class="site-header" role="banner">
		<div class="site-branding">
			<?php
			if ( is_home() ) : ?>
				<div id="home_banner">
					
				</div>
			<?php else : ?>
				<div id="page_banner">
					<img src=""> <!-- William and Mary Branding Logo -->
				</div>
			<?php 
			endif; ?>
			<?php
			if ( is_front_page() && is_home() ) : ?>
				
			<?php endif; ?>
		</div> 
		<!-- .site-branding -->

		<!-- #Navigation -->
		<div class="flex_nav">

			<button id="flex_nav_button"> </button> 
			
		
			<?php 
			wp_nav_menu( 
				array (
					'theme_location' => 'nav-bar',
					'container_class'=> 'navigation_bar',
					'menu_id'=>'Navigation',
					'fallback_cb' => '',
					'depth'=>2)
				);
			?>
		</div> <!-- .flex_nav -->
		
	</header><!-- #masthead -->

	<div id="content" class="site-content">
