<?php
/**
 * The template for displaying 404 pages (not found)
 *
 * @link https://codex.wordpress.org/Creating_an_Error_404_Page
 *
 * @package micbrand
 */

get_header();
?>

<div id="content" class="site-content container mx-auto px-4 pt-2 flex flex-wrap md:flex-none">
	<div id="primary" class="content-area w-full order-2 ">
		<main id="main" class="site-main">

			<section class="error-404 not-found">
				<header class="page-header">
					<h2 class="page-title mb-8">Those who stay <span>(on brand)</span> will be champions.</h2>
				</header><!-- .page-header -->

				<div class="page-content">
					<p>This link is not working, please go to the <a href="/">brand home page</a> to get back on track.</p>
					<p>It looks like nothing was found at this location.</p>
					<p><a href="#search">Search</a> the site to find what you are looking for.</p>
				</div><!-- .page-content -->
			</section><!-- .error-404 -->

		</main><!-- #main -->
	</div><!-- #primary -->
	<aside id="secondary" class="widget-area sidebar w-full order-1">
		<figure class="wp-block-image w-full">
			<div class="wrapper spartan">
				<img src="/wp-content/uploads/2019/11/greece-sparta-statue.jpg" alt="Greek Sparta warrior statue">
			</div>
			<figcaption></figcaption>
		</figure>
		<figure class="wp-block-image w-full">
			<div class="wrapper buckeye">
				<img src="/wp-content/uploads/2019/11/seeds-buckeye-tree.jpg" alt="Buckeye tree seeds">
			</div>
			<figcaption></figcaption>
		</figure>
	</aside>
</div><!-- #content -->

<?php get_footer();
