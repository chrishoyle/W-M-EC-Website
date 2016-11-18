<?php
/**
 * Entrepreneurship functions and definitions.
 *
 * @link https://developer.wordpress.org/themes/basics/theme-functions/
 *
 * @package Entrepreneurship
 */

if ( ! function_exists( 'entrepreneurship_setup' ) ) :
/**
 * Sets up theme defaults and registers support for various WordPress features.
 *
 * Note that this function is hooked into the after_setup_theme hook, which
 * runs before the init hook. The init hook is too late for some features, such
 * as indicating support for post thumbnails.
 */
function entrepreneurship_setup() {
	/*
	 * Make theme available for translation.
	 * Translations can be filed in the /languages/ directory.
	 * If you're building a theme based on Entrepreneurship, use a find and replace
	 * to change 'entrepreneurship' to the name of your theme in all the template files.
	 */
	load_theme_textdomain( 'entrepreneurship', get_template_directory() . '/languages' );

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

	// Register navigation bars
	register_menus();
	/*
	register_nav_menus( array(
		'primary' => esc_html__( 'Primary', 'entrepreneurship' ),
	) );
	*/

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
	add_theme_support( 'custom-background', apply_filters( 'entrepreneurship_custom_background_args', array(
		'default-color' => 'ffffff',
		'default-image' => '',
	) ) );

	// Custom header images
	add_theme_support( 'custom-header' , array(
		'default-image' => '', // get_template_directory_uri() . '/images/header.jpg'
		'uploads' 		=> true
	) );
}
endif;
add_action( 'after_setup_theme', 'entrepreneurship_setup' );

/**
 * Set the content width in pixels, based on the theme's design and stylesheet.
 *
 * Priority 0 to make it available to lower priority callbacks.
 *
 * @global int $content_width
 */
function entrepreneurship_content_width() {
	$GLOBALS['content_width'] = apply_filters( 'entrepreneurship_content_width', 640 );
}
add_action( 'after_setup_theme', 'entrepreneurship_content_width', 0 );

/**
 * Register widget area.
 *
 * @link https://developer.wordpress.org/themes/functionality/sidebars/#registering-a-sidebar
 */
function entrepreneurship_widgets_init() {
	register_sidebar( array(
		'name'          => esc_html__( 'Sidebar', 'entrepreneurship' ),
		'id'            => 'sidebar-1',
		'description'   => esc_html__( 'Add widgets here.', 'entrepreneurship' ),
		'before_widget' => '<section id="%1$s" class="widget %2$s">',
		'after_widget'  => '</section>',
		'before_title'  => '<h2 class="widget-title">',
		'after_title'   => '</h2>',
	) );
}
add_action( 'widgets_init', 'entrepreneurship_widgets_init' );

/**
 * Enqueue scripts and styles.
 */
function entrepreneurship_scripts() {
	////////////////// styles ///////////////////
	wp_enqueue_style( 'entrepreneurship-style', get_stylesheet_uri() );

	if  (is_home()) {
		wp_enqueue_style( 'home', get_template_directory_uri() . '/css/home.css' );
	}

	if (is_page()){
		wp_enqueue_style( 'page' , get_template_directory_uri() . '/css/page.css' );
	}
	wp_enqueue_style( 'main', get_template_directory_uri() . '/css/main.css' );

	wp_enqueue_style( 'animate', get_template_directory_uri() . '/css/animate.css' );
	wp_enqueue_style( 'bootstrap', get_template_directory_uri() . '/css/bootstrap.min.css', array(), '3.3.6' );
	wp_enqueue_style( 'font-awesome', get_template_directory_uri() . '/css/font-awesome.min.css',  array(), '4.5.0' );

	wp_enqueue_style( 'navbar', get_template_directory_uri() . '/css/nav.css' );

	wp_enqueue_style( 'footer', get_template_directory_uri() . '/css/footer.css' );

	

	///////////////// scripts ///////////////////
	wp_enqueue_script( 'entrepreneurship-navigation', get_template_directory_uri() . '/js/navigation.js', array(), '20151215', true );
	wp_enqueue_script( 'bootstrap', get_template_directory_uri() . '/js/bootstrap.min.js', array('jquery'), '3.3.6', true );

	wp_enqueue_script( 'entrepreneurship-skip-link-focus-fix', get_template_directory_uri() . '/js/skip-link-focus-fix.js', array(), '20151215', true );

	if ( is_singular() && comments_open() && get_option( 'thread_comments' ) ) {
		wp_enqueue_script( 'comment-reply' );
	}
}
add_action( 'wp_enqueue_scripts', 'entrepreneurship_scripts' );

function register_menus() {
	register_nav_menus(
		array(
			'nav-bar' => __('Navigaton Bar'),
			'extra' => __('Extra Navigation Menu')
			)
			);
}
//add_action( 'init');
/**
 * Implement the Custom Header feature.
 */
require get_template_directory() . '/inc/custom-header.php';

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
