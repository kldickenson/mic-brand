<?php
/**
 * The sidebar containing the main widget area
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package micbrand
 */
if ( ! is_active_sidebar( 'sidebar-1' ) ) {
	return;
}
?>

<aside id="secondary" class="widget-area sidebar">
<div class="sidebar-header">
	<?php if ( 0 == $post->post_parent ) { ?>
			<h3 class="sidebar-page-title alone"><?php echo the_title(); ?></h3>
	<?php } else {
		$parents = get_ancestors( $post->ID, 'page', 'post_type' );
		foreach( $parents as $parent ) { ?>
			<h4 class="sidebar-parent-title"><?php echo get_the_title( $parent ); ?></h4>
			<h3 class="sidebar-page-title"><?php echo the_title(); ?></h3>
		<?php }
	} ?>
	</div>
	<?php dynamic_sidebar( 'sidebar-1' ); ?>
</aside><!-- #secondary -->
