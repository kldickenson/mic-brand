<?php
/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package micbrand
 */

?>

	</div><!-- #content -->

	<footer id="colophon" class="site-footer bg-umblue text-white p-3 pt-8">
		<div class="container mx-auto">
			<div class="footer-logo mx-auto md:inline-block md:m-0 md:mr-8 align-top">
				<img src="/wp-content/themes/micbrand/img/UM_logo_footer.svg" alt="University of Michigan Logo" />
			</div>
			<?php if ( is_active_sidebar( 'footer-1' ) ) : ?>
				<div class="contact-info inline-block align-top my-4 w-auto text-white text-xs" role="complementary">
					<?php dynamic_sidebar( 'footer-1' ); ?>
				</div>
			<?php endif; ?>
			<nav class="my-4 w-full">
				<?php wp_nav_menu(
					array(
						'theme_location' => 'footer-contact',
						'menu_id'        => 'footer-contact',
						'menu_class'     => 'block',
					)
				); ?>
				</nav>
				<nav class="my-4 pt-2 md:pt-4 md:pt-0 border-t border-white w-full footer-menu">
				<?php wp_nav_menu(
					array(
						'theme_location' => 'footer-menu',
						'menu_id'        => 'footer-menu',
						'menu_class'     => 'md:flex md:justify-start md:content-center md:bg-transparent text-ummaize text-xs',			)
				); ?>
			</nav>
		  <div class="md:flex md:justify-between w-full my-8 mb-0 copyright">
            <p class="mb-4 text-xs">&copy; 2019 <a href="http://regents.umich.edu/">Regents of the University of Michigan</a> </p>
            <p class="mb-4 text-xs">Site produced by <a class="white no-underline hover-white" href="https://creative.umich.edu/">Michigan Creative</a>, a unit of the Vice President for Communications</p>
        </div>
		</div>
	</footer><!-- #colophon -->
</div><!-- #page -->

<?php wp_footer(); ?>

</body>
</html>
