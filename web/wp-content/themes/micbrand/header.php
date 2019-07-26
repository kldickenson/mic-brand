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
<div id="page" class="site">
	<a class="skip-link screen-reader-text" href="#content"><?php esc_html_e( 'Skip to content', 'micbrand' ); ?></a>

	<header id="masthead" class="site-header bg-umblue border-b-2 border-gray-200 border-solid">
		<div class="container mx-auto relative">
			<div class="logo p-5 text-center md:pb-0 md:m-0 md:w-1/2 md:text-left "><a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home"><img src="/wp-content/themes/micbrand/img/VPComm_Logo_header.svg'?>" alt="Vice President for Communications, University of Michigan" class="logo-image mx-auto md:m-0" /></a></div>
			<div class="site-branding py-2 mx-auto md:text-right md:m-0 md:mr-5 md:p-0">
				<?php
				if ( is_front_page() && is_home() ) :
					?>
					<h1 class="site-title p-0 text-2xl font-bold antialiased uppercase text-ummaize text-center md:text-right"><a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home"><?php bloginfo( 'name' ); ?></a></h1>
					<?php else : ?>
					<p class="site-title p-0 text-2xl font-bold antialiased uppercase text-ummaize text-center md:text-right"><a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home"><?php bloginfo( 'name' ); ?></a></p>
					<?php endif; ?>
			</div><!-- .site-branding -->
			<div class="search mx-auto py-2 text-center md:absolute md:right-0 md:top-0 md:pt-5"><?php get_search_form(); ?></div>
		</div>
		<div class="container mx-auto relative">
			<nav id="site-navigation" class="main-navigation w-full p-5 pt-0 pb-0">
				<button class="menu-toggle" aria-controls="primary-menu" aria-expanded="false"><?php esc_html_e( 'Primary Menu', 'micbrand' ); ?></button>
				<?php wp_nav_menu( array(
					'theme_location' => 'menu-1',
					'menu_id'        => 'primary-menu',
					'menu_class'     => 'flex flex-no-wrap justify-between item-stretch content-center py-2 text-white text-sm',
					'depth'          => 1,
				) ); ?>
			</nav><!-- #site-navigation -->
		</div>
	</header><!-- #masthead -->

	<div id="content" class="site-content container mx-auto px-4">
