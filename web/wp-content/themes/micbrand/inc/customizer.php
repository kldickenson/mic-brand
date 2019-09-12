<?php
/**
 * micbrand Theme Customizer
 *
 * @package micbrand
 */

/**
 * Add postMessage support for site title and description for the Theme Customizer.
 *
 * @param WP_Customize_Manager $wp_customize Theme Customizer object.
 */

function micbrand_customize_register( $wp_customize ) {

	// Add section
	$wp_customize->add_section( 'brand_section', array(
		'title' => __( 'Brand Homepage Settings', 'micbrand' ),
		'active_callback' => 'is_front_page',
		'priority' => - 10
	) );

	// Add settings to homepage section

	// Adding heading tagline
	$wp_customize->add_setting( 'micbrand_home_head', array(
		'sanitize_callback' => 'wp_kses_post'
	));
	$wp_customize->add_control( 'micbrand_home_head',
		array(
			'label' => __( 'Homepage Headline' ),
			'section' => 'brand_section',
			'settings' => 'micbrand_home_head',
			'type' => 'text'
		)
	);

	// Adding homepage copy
	$wp_customize->add_setting( 'micbrand_home_text', array(
		'sanitize_callback' => 'wp_kses_post'
	));
	$wp_customize->add_control( 'micbrand_home_text',
		array(
			'label' => __( 'Homepage Text - can use basic html' ),
			'section' => 'brand_section',
			'settings' => 'micbrand_home_text',
			'type' => 'textarea',
			'multiline' => 'p',
		)
	);
	$wp_customize->get_setting( 'blogname' )->transport         = 'postMessage';
	$wp_customize->get_setting( 'blogdescription' )->transport  = 'postMessage';
	$wp_customize->get_setting( 'header_textcolor' )->transport = 'postMessage';

	if ( isset( $wp_customize->selective_refresh ) ) {
		$wp_customize->selective_refresh->add_partial( 'blogname', array(
			'selector'        => '.site-title a',
			'render_callback' => 'micbrand_customize_partial_blogname',
		) );
		$wp_customize->selective_refresh->add_partial( 'blogdescription', array(
			'selector'        => '.site-description',
			'render_callback' => 'micbrand_customize_partial_blogdescription',
		) );
	}
}
add_action( 'customize_register', 'micbrand_customize_register' );

/**
 * Render the site title for the selective refresh partial.
 *
 * @return void
 */
function micbrand_customize_partial_blogname() {
	bloginfo( 'name' );
}

/**
 * Render the site tagline for the selective refresh partial.
 *
 * @return void
 */
function micbrand_customize_partial_blogdescription() {
	bloginfo( 'description' );
}

/**
 * Binds JS handlers to make Theme Customizer preview reload changes asynchronously.
 */
function micbrand_customize_preview_js() {
	wp_enqueue_script( 'micbrand-customizer', get_template_directory_uri() . '/js/vendor/customizer.js', array( 'customize-preview' ), '20151215', true );
}
add_action( 'customize_preview_init', 'micbrand_customize_preview_js' );
