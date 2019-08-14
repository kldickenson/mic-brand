<?php
/**
 * micbrand functions and definitions
 *
 * @link https://developer.wordpress.org/themes/basics/theme-functions/
 *
 * @package micbrand
 */

if ( ! function_exists( 'micbrand_setup' ) ) :
	/**
	 * Sets up theme defaults and registers support for various WordPress features.
	 *
	 * Note that this function is hooked into the after_setup_theme hook, which
	 * runs before the init hook. The init hook is too late for some features, such
	 * as indicating support for post thumbnails.
	 */
	function micbrand_setup() {
		/*
		 * Make theme available for translation.
		 * Translations can be filed in the /languages/ directory.
		 * If you're building a theme based on micbrand, use a find and replace
		 * to change 'micbrand' to the name of your theme in all the template files.
		 */
		load_theme_textdomain( 'micbrand', get_template_directory() . '/languages' );

		// Add default posts and comments RSS feed links to head.
		add_theme_support( 'automatic-feed-links' );

		/*
		 * Let WordPress manage the document title.
		 * By adding theme support, we declare that this theme does not use a
		 * hard-coded <title> tag in the document head, and expect WordPress to
		 * provide it for us.
		 */
		add_theme_support( 'title-tag' );

		/*
		 * Enable support for Post Thumbnails on posts and pages.
		 *
		 * @link https://developer.wordpress.org/themes/functionality/featured-images-post-thumbnails/
		 */
		add_theme_support( 'post-thumbnails' );

		// This theme uses wp_nav_menu() in one location.
		function register_micbrand_menus() {
			register_nav_menus(
				array(
					'header-menu' => esc_html__( 'Header Menu', 'micbrand' ),
					'full-menu' => esc_html__( 'Full Menu', 'micbrand' ),
					'footer-menu' => esc_html__( 'Footer', 'micbrand' ),
					'footer-contact' => esc_html__( 'Footer Contact', 'micbrand' )
				)
			);
		}
		add_action( 'init', 'register_micbrand_menus' );

		/*
		 * Switch default core markup for search form, comment form, and comments
		 * to output valid HTML5.
		 */
		add_theme_support( 'html5', array(
			'search-form',
			'comment-form',
			'comment-list',
			'gallery',
			'caption',
		) );

		// Set up the WordPress core custom background feature.
		add_theme_support( 'custom-background', apply_filters( 'micbrand_custom_background_args', array(
			'default-color' => 'ffffff',
			'default-image' => '',
		) ) );

		// Add theme support for selective refresh for widgets.
		add_theme_support( 'customize-selective-refresh-widgets' );

		/**
		 * Add support for core custom logo.
		 *
		 * @link https://codex.wordpress.org/Theme_Logo
		 */
		add_theme_support( 'custom-logo', array(
			'height'      => 250,
			'width'       => 250,
			'flex-width'  => true,
			'flex-height' => true,
		) );
	}
endif;
add_action( 'after_setup_theme', 'micbrand_setup' );

/**
 * Set the content width in pixels, based on the theme's design and stylesheet.
 *
 * Priority 0 to make it available to lower priority callbacks.
 *
 * @global int $content_width
 */
function micbrand_content_width() {
	// This variable is intended to be overruled from themes.
	// Open WPCS issue: {@link https://github.com/WordPress-Coding-Standards/WordPress-Coding-Standards/issues/1043}.
	// phpcs:ignore WordPress.NamingConventions.PrefixAllGlobals.NonPrefixedVariableFound
	$GLOBALS['content_width'] = apply_filters( 'micbrand_content_width', 640 );
}
add_action( 'after_setup_theme', 'micbrand_content_width', 0 );

/**
 * Register widget area.
 *
 * @link https://developer.wordpress.org/themes/functionality/sidebars/#registering-a-sidebar
 */
function micbrand_widgets_init() {
	register_sidebar( array(
		'name'          => esc_html__( 'Sidebar', 'micbrand' ),
		'id'            => 'sidebar-1',
		'description'   => esc_html__( 'Add widgets here.', 'micbrand' ),
		'before_widget' => '<section id="%1$s" class="widget %2$s">',
		'after_widget'  => '</section>',
		'before_title'  => '<h2 class="widget-title">',
		'after_title'   => '</h2>',
	) );
		register_sidebar( array(
		'name'          => esc_html__( 'Footer', 'micbrand' ),
		'id'            => 'footer-1',
		'description'   => esc_html__( 'Add widgets here.', 'micbrand' ),
		'before_widget' => '<section id="%1$s" class="footer-widget %2$s">',
		'after_widget'  => '</section>',
		'before_title'  => '<h4 class="footer-widget-title">',
		'after_title'   => '</h4>',
	) );
}
add_action( 'widgets_init', 'micbrand_widgets_init' );

/**
 * Enqueue scripts and styles.
 */
function micbrand_scripts() {
	wp_enqueue_style( $handle='micbrand-style', $src=get_template_directory_uri() . '/css/dist/style.css', $deps=array(), $ver=null, $media='all' );

	wp_enqueue_script( 'micbrand-custom-js', get_template_directory_uri() . '/js/dist/app.js', array(), '20151215', true );

	wp_enqueue_script( 'micbrand-navigation', get_template_directory_uri() . '/js/vendor/navigation.js', array(), '20151215', true );

	wp_enqueue_script( 'micbrand-skip-link-focus-fix', get_template_directory_uri() . '/js/vendor/skip-link-focus-fix.js', array(), '20151215', true );

	wp_enqueue_script( 'micbrand-customizer', get_template_directory_uri() . '/js/vendor/customizer.js', array( 'customize-preview' ), '20151215', true );

	if ( is_singular() && comments_open() && get_option( 'thread_comments' ) ) {
		wp_enqueue_script( 'comment-reply' );
	}
}
add_action( 'wp_enqueue_scripts', 'micbrand_scripts' );

// Only allow blocks we need

// add_filter( 'allowed_block_types', 'micbrand_allowed_block_types', 10, 2 );

// function micbrand_allowed_block_types( $allowed_blocks, $post ) {

// 	$allowed_blocks = array(
// 		'core/image',
// 		'core/paragraph',
// 		'core/heading',
// 		'core/list',
// 		'core/gallery',
// 		'core/quote',
// 		'core/video',
// 		'core/table',
// 		'core/button',
// 		'core/separator',
// 		'core/spacer',
// 		'mic-blocks/card-container',
// 		'mic-blocks/card',
// 		'mic-blocks/card-img-bottom',
// 		'mic-blocks/detail-block',
// 		'mic-blocks/accordion-wrapper',
// 		'mic-blocks/accordion-item',
// 		'core/embed',
// 		'core/html',
// 		'core/columns'
// 	);

// 	if( $post->post_type === 'page' ) {
// 		$allowed_blocks[] = 'core/shortcode';
// 	}

// 	return $allowed_blocks;

// }

//  For converting linebreaks into separate paragraphs
function the_textarea_value( $textarea ){
        $lines = explode("\n", $textarea);
        foreach( $lines as $line ){
          echo ('<p>' . $line . '</p>');
        }
}

/**
 * Implement the Custom Header feature.
 */
require get_template_directory() . '/inc/custom-header.php';

/**
 * Custom template tags for this theme.
 */
require get_template_directory() . '/inc/template-tags.php';

/**
 * Functions which enhance the theme by hooking into WordPress.
 */
require get_template_directory() . '/inc/template-functions.php';

/**
 * Customizer additions.
 */
include get_template_directory() . '/inc/customizer.php';

/**
 * Load Jetpack compatibility file.
 */
if ( defined( 'JETPACK__VERSION' ) ) {
	require get_template_directory() . '/inc/jetpack.php';
}

