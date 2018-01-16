<?php
/**
 * txakolina functions and definitions.
 *
 * @link https://developer.wordpress.org/themes/basics/theme-functions/
 *
 * @package txakolina
 */

if ( ! function_exists( 'txakolina_setup' ) ) :
	/**
	 * Sets up theme defaults and registers support for various WordPress features.
	 *
	 * Note that this function is hooked into the after_setup_theme hook, which
	 * runs before the init hook. The init hook is too late for some features, such
	 * as indicating support for post thumbnails.
	 */
	function txakolina_setup() {
		/*
		 * Make theme available for translation.
		 * Translations can be filed in the /languages/ directory.
		 * If you're building a theme based on txakolina, use a find and replace
		 * to change 'txakolina' to the name of your theme in all the template files.
		 */
		load_theme_textdomain( 'txakolina', get_template_directory() . '/languages' );

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
		set_post_thumbnail_size( 800, 500, array( 'center', 'top' ) );
		add_image_size( 'txakolina-index-thumb', 390, 450, array( 'center', 'top' ) );
		add_image_size( 'txakolina-gallery-thumb', 800, 600, array( 'center', 'top' ) );

		// This theme uses wp_nav_menu() in one location.
		register_nav_menus( array(
			'primary' => esc_html__( 'Primary Menu', 'txakolina' ),
		) );

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

		/*
		 * Enable support for Post Formats.
		 * See https://developer.wordpress.org/themes/functionality/post-formats/
		 */
		add_theme_support( 'post-formats', array(
			'audio',
			'gallery',
			'video',
		) );

		/**
	* Set up the WordPress core custom header feature.
	*
	* @uses txakolina_header_style()
	*/
		add_theme_support( 'custom-header', apply_filters( 'txakolina_custom_header_args', array(
			'default-text-color'     => 'ffffff',
			'width'                  => 1600,
			'height'                 => 800,
			'flex-height'            => true,
			'wp-head-callback'       => 'txakolina_header_style',
		) ) );

	}
endif; // txakolina_setup.
add_action( 'after_setup_theme', 'txakolina_setup' );


/**
 * Set the content width in pixels, based on the theme's design and stylesheet.
 *
 * Priority 0 to make it available to lower priority callbacks.
 *
 * @global int $content_width
 */
function txakolina_content_width() {
	$GLOBALS['content_width'] = apply_filters( 'txakolina_content_width', 640 );
}
add_action( 'after_setup_theme', 'txakolina_content_width', 0 );

/**
 * Register widget area.
 *
 */
function txakolina_widgets_init() {
	register_sidebar( array(
		'name'          => esc_html__( 'Sidebar', 'txakolina' ),
		'id'            => 'sidebar-1',
		'description'   => '',
		'before_widget' => '<aside id="%1$s" class="widget %2$s">',
		'after_widget'  => '</aside>',
		'before_title'  => '<h2 class="widget-title">',
		'after_title'   => '</h2>',
	) );
}
add_action( 'widgets_init', 'txakolina_widgets_init' );

/**
 * Enqueue scripts and styles.
 */
function txakolina_scripts() {
	wp_enqueue_style( 'txakolina-style', get_stylesheet_uri() );

	// Load fontawesome.
	wp_enqueue_style( 'font-awesome', get_template_directory_uri() . '/font-awesome/css/font-awesome.min.css', array(), '4.4.0' );

	// Load txakolina dependencies and custom js.
	wp_enqueue_script( 'dependencies', get_template_directory_uri() . '/js/txakolina-dependencies-min.js', array( 'jquery' ), '1.0.0', true );
	wp_enqueue_script( 'txakolina-js', get_template_directory_uri() . '/js/txakolina.js', array( 'jquery', 'dependencies' ), '1.0.0', true );

	if ( is_singular() && comments_open() && get_option( 'thread_comments' ) ) {
		wp_enqueue_script( 'comment-reply' );
	}

}
add_action( 'wp_enqueue_scripts', 'txakolina_scripts' );

/**
 * Custom template tags for this theme.
 */
require get_template_directory() . '/inc/template-tags.php';

/**
 * Custom functions that act independently of the theme templates.
 */
require get_template_directory() . '/inc/extras.php';

/**
 * Customizer additions.
 */
require get_template_directory() . '/inc/customizer.php';

/**
 * Load Jetpack compatibility file.
 */
require get_template_directory() . '/inc/jetpack.php';

/**
 * Custom extra functions theme.
 */
require get_template_directory() . '/inc/txakolina-extras.php';
