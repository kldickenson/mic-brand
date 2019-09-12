<?php
/**
 * The header for our theme
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package micbrand
 */

?>
<!doctype html>
<html <?php language_attributes(); ?>>
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="profile" href="https://gmpg.org/xfn/11">

	<?php wp_head(); ?>
</head>

<body <?php body_class('bg-gray-200'); ?>>
<div id="page" class="relative site">
	<a class="skip-link screen-reader-text" href="#content"><?php esc_html_e( 'Skip to content', 'micbrand' ); ?></a>

	<header id="masthead" class="site-header bg-umblue relative">
		<div class="container mx-auto relative logo-title-search">
			<button id="hamburger" class="menu-toggle hamburger" aria-controls="primary-menu" aria-expanded="false"><?php //esc_html_e( 'Primary Menu', 'micbrand' ); ?>
				<span class="hamburger-box">
					<span class="hamburger-inner"></span>
				</span>
			</button>
			<div class="logo inline-block p-3 lg:p-5 lg:pb-0 lg:m-0 lg:w-1/2"><a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home"><img src="/wp-content/themes/micbrand/img/VPComm_Logo_header.svg" alt="Vice President for Communications, University of Michigan" class="logo-image" /></a></div>
			<div class="site-branding py-2 mx-auto lg:text-right lg:m-0 lg:mr-5 lg:p-0">
				<?php
				if ( is_front_page() && is_home() ) :
					?>
					<h1 class="site-title p-0 mt-4 text-2xl font-bold antialiased uppercase text-ummaize text-center lg:text-right"><a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home"><?php bloginfo( 'name' ); ?></a></h1>
					<?php else : ?>
					<p class="site-title p-0 mt-4 text-2xl font-bold antialiased uppercase text-ummaize text-center lg:text-right"><a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home"><?php bloginfo( 'name' ); ?></a></p>
					<?php endif; ?>
			</div><!-- .site-branding -->
			<div class="search mx-auto py-2 mb-4 text-center lg:absolute lg:right-0 lg:top-0 lg:pt-5"><?php get_search_form(); ?></div>
		</div>
		<div id="site-navigation" class="container mx-auto main-nav">
				<nav class="main-navigation lg:p-5 lg:pt-0 lg:pb-0 relative">
					<!-- <button class="menu-toggle" aria-controls="primary-menu" aria-expanded="false"><?php //esc_html_e( 'Primary Menu', 'micbrand' ); ?></button> -->
					<?php wp_nav_menu( array(
						'theme_location' => 'header-menu',
						'menu_id'        => 'primary-menu',
						'menu_class'     => 'lg:flex-no-wrap lg:justify-between lg:items-stretch lg:content-center bg-umblue lg:bg-transparent text-white',
						'depth'          => 1,
					) ); ?>
			</nav><!-- #site-navigation -->

		</div>
	</header><!-- #masthead -->
	<div id="hamburger-fade" class="absolute inset-0 bg-umblue opacity-75 hamburger-fade"></div>
