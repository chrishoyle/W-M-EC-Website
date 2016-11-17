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
					<img src="<?php //header_image(); ?>">
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
		<!-- <div class="flex_nav">

			<button id="flex_nav_button"> </button> -->
		<!-- 	<button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
						<span class="sr-only">Toggle navigation</span>
						<span class="icon-bar"></span>
						<span class="icon-bar"></span>
						<span class="icon-bar"></span>
					</button> -->
		<div class="navbar navbar-default navbar-fixed-top menu-top menu-shrink" role="navigation">
			<div class="container">
				<div class="navbar-header">
					<button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
						<span class="sr-only">Toggle navigation</span>
						<span class="icon-bar"></span>
						<span class="icon-bar"></span>
						<span class="icon-bar"></span>
					</button>
					<a class="navbar-brand" href="http://tribeventures.org/"><img src="./Tribe Ventures_files/logo.png" alt="logo"></a>
				</div>
				<div class="navbar-collapse collapse">
					<ul class="nav navbar-nav navbar-right">
						<li><a href="http://tribeventures.org/#more">about</a></li>
						<li><a href="http://tribeventures.org/#why_choose">why</a></li>
						<li><a href="http://tribeventures.org/#team">team</a></li>						
						<li><a href="http://tribeventures.org/#events">Events</a></li>	
						<li><a href="http://tribeventures.org/bmc">BMC</a></li>					
					</ul>
				</div>
			</div>
		</div> 
			<?php 
			wp_nav_menu( 
				array (
					'theme_location' => 'nav-bar',
					'container_class'=> 'navbar',
					'menu_id'=>'Navigation',
					'fallback_cb' => '',
					'depth'=>2)
				);
			?>
		</div> <!-- .flex_nav -->
		
	</header><!-- #masthead -->

	<div id="content" class="site-content">
