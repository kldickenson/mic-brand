<?php
/**
 * The template for displaying search results pages
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/#search-result
 *
 * @package micmicbrand
 */

get_header();
?>

<div id="content" class="site-content container mx-auto px-4 pt-2 flex flex-wrap md:flex-none">
	<div id="primary" class="content-area w-full order-2 ">
		<main id="main" class="site-main">

		<?php if ( have_posts() ) : ?>

			<header class="page-header">
				<h2 class="page-title">
					<?php
					/* translators: %s: search query. */
					printf( esc_html__( 'Search Results for: %s', 'micbrand' ), '<br /><span>' . get_search_query() . '</span>' );
					?>
				</h2>
			</header><!-- .page-header -->

			<?php
			/* Start the Loop */
			while ( have_posts() ) :
				the_post(); ?>

				<div class="mb-4 pb-4 border-b">
                <a href="<?php echo get_permalink(); ?>">
                    <h3><?php echo get_the_title(); ?></h3>
                </a>
                <p><?php echo get_the_excerpt(); ?></p>
				</div>


			<?php endwhile; ?>
			<?php the_posts_pagination( array(
				'mid_size'  => 2,
				'prev_text' => __( 'Previous', 'obp' ),
				'next_text' => __( 'Next', 'obp' ),
			) ); ?>

		<?php else: ?>
			<h1>No results found.</h1>
			<p>Please modify your search and try again.</p>
		<?php endif; ?>

		</main><!-- #main -->
	</div><!-- #primary -->

<?php //get_sidebar(); ?>

</div><!-- #content -->

<?php get_footer();
