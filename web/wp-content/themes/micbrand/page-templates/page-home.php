<?php
/**
 * Template Name: Homepage
 * @package micbrand
* The template for just the HOMEPAGE!
*/
?>

<?php get_header(); ?>
<?php while ( have_posts() ) : the_post(); ?>
<section class="home--banner">
	<h2 class="container mx-auto">
	<span class="font-light"><?php echo get_theme_mod( 'micbrand_home_head' ); ?>. </span>
	<span class="font-semibold" ><?php echo get_theme_mod( 'micbrand_home_head' ); ?>. </span>
	<span class="font-extrabold" ><?php echo get_theme_mod( 'micbrand_home_head' ); ?>.</span>
	</h2>
</section>
<img src="/wp-content/themes/micbrand/img/UM_logo_footer.svg" alt="University of Michigan logo" class="homepage-bug" />
<div id="content" class="site-content container mx-auto px-4 pt-2">
	<div id="primary" class="content-area py-8 md:p-0">
		<main id="main" class="site-main">

			<div class="intro font-normal text-center">
				<?php echo get_theme_mod('micbrand_home_text'); ?>
			</div>

			<?php get_template_part( 'template-parts/content', 'page' );?>

		</main><!-- #main -->
	</div><!-- #primary -->
</div><!-- #content -->
<?php endwhile; ?>
<?php get_footer();