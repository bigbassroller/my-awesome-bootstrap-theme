<?php
/**
 * My Awesome Bootstrap Theme functions and definitions
 *
 * @package My Awesome Bootstrap Theme
 */


/**
 * Set the content width based on the theme's design and stylesheet.
 */
if ( ! isset( $content_width ) ) {
	$content_width = 640; /* pixels */
}

if ( ! function_exists( 'my_awesome_bootstrap_theme_setup' ) ) :
/**
 * Sets up theme defaults and registers support for various WordPress features.
 *
 * Note that this function is hooked into the after_setup_theme hook, which
 * runs before the init hook. The init hook is too late for some features, such
 * as indicating support for post thumbnails.
 */
function my_awesome_bootstrap_theme_setup() {

	/*
	 * Make theme available for translation.
	 * Translations can be filed in the /languages/ directory.
	 * If you're building a theme based on My Awesome Bootstrap Theme, use a find and replace
	 * to change 'my-awesome-bootstrap-theme' to the name of your theme in all the template files
	 */
	load_theme_textdomain( 'my-awesome-bootstrap-theme', get_template_directory() . '/languages' );

	// Add default posts and comments RSS feed links to head.
	add_theme_support( 'automatic-feed-links' );

	/*
	 * Enable support for Post Thumbnails on posts and pages.
	 *
	 * @link http://codex.wordpress.org/Function_Reference/add_theme_support#Post_Thumbnails
	 */
	//add_theme_support( 'post-thumbnails' );

	// This theme uses wp_nav_menu() in one location.
	register_nav_menus( array(
		'primary' => __( 'Primary Menu', 'my-awesome-bootstrap-theme' ),
	) );

	// Enable support for Post Formats.
	add_theme_support( 'post-formats', array( 'aside', 'image', 'video', 'quote', 'link' ) );

	// Setup the WordPress core custom background feature.
	add_theme_support( 'custom-background', apply_filters( 'my_awesome_bootstrap_theme_custom_background_args', array(
		'default-color' => 'ffffff',
		'default-image' => '',
	) ) );
}
endif; // my_awesome_bootstrap_theme_setup
add_action( 'after_setup_theme', 'my_awesome_bootstrap_theme_setup' );

/**
 * Register widgetized area and update sidebar with default widgets.
 */
function my_awesome_bootstrap_theme_widgets_init() {
	register_sidebar( array(
		'name'          => __( 'Sidebar', 'my-awesome-bootstrap-theme' ),
		'id'            => 'sidebar-1',
		'before_widget' => '<aside id="%1$s" class="widget %2$s">',
		'after_widget'  => '</aside>',
		'before_title'  => '<h1 class="widget-title">',
		'after_title'   => '</h1>',
	) );
}
add_action( 'widgets_init', 'my_awesome_bootstrap_theme_widgets_init' );

/**
 * Enqueue scripts and styles.
 */
function my_awesome_bootstrap_theme_scripts() {
		wp_enqueue_script( 'My Awesome Bootstrap Theme-skip-link-focus-fix', get_template_directory_uri() . '/assets/js/skip-link-focus-fix.js', array(), '20130115', true );
		wp_enqueue_style( 'mabs', get_template_directory_uri() . '/assets/css/mabs.css', array( ), false, 'all' );
		wp_enqueue_style( 'responsive', get_template_directory_uri() . '/assets/css/responsive.css', array( ), false, 'all' );
		wp_enqueue_script( 'affix', get_template_directory_uri() . '/assets/js/affix.js', array('jquery'), false, true );
		wp_enqueue_script( 'alert', get_template_directory_uri() . '/assets/js/alert.js', array('jquery'), false, true );
		wp_enqueue_script( 'button', get_template_directory_uri() . '/assets/js/button.js', array('jquery'), false, true );
		wp_enqueue_script( 'carousel', get_template_directory_uri() . '/assets/js/carousel.js', array('jquery'), false, true );
		wp_enqueue_script( 'collapse', get_template_directory_uri() . '/assets/js/collapse.js', array('jquery'), false, true );
		wp_enqueue_script( 'customizer', get_template_directory_uri() . '/assets/js/customizer.js', array('jquery'), false, true );
		wp_enqueue_script( 'dropdown', get_template_directory_uri() . '/assets/js/dropdown.js', array('jquery'), false, true );
		wp_enqueue_script( 'modal', get_template_directory_uri() . '/assets/js/modal.js', array('jquery'), false, true );
		wp_enqueue_script( 'navigation', get_template_directory_uri() . '/assets/js/navigation.js', array('jquery'), false, true );
		wp_enqueue_script( 'tooltip', get_template_directory_uri() . '/assets/js/tooltip.js', array('jquery'), false, true );
		wp_enqueue_script( 'popover', get_template_directory_uri() . '/assets/js/popover.js', array('jquery'), false, true );
		wp_enqueue_script( 'scrollspy', get_template_directory_uri() . '/assets/js/scrollspy.js', array('jquery'), false, true );
		wp_enqueue_script( 'skip-link-focus-fix', get_template_directory_uri() . '/assets/js/skip-link-focus-fix.js', array('jquery'), false, true );
		wp_enqueue_script( 'tab', get_template_directory_uri() . '/assets/js/tab.js', array('jquery'), false, true );
		wp_enqueue_script( 'tooltip', get_template_directory_uri() . '/assets/js/tooltip.js', array('jquery'), false, true );
		wp_enqueue_script( 'holder', get_template_directory_uri() . '/assets/js/holder.js', array('jquery'), false, true );
		wp_enqueue_script( 'transition', get_template_directory_uri() . '/assets/js/transition.js', array('jquery'), false, true );
		wp_enqueue_script('angular-min', get_template_directory_uri() . '/assets/js/plugins/angular.js', array(), false, true );
		wp_enqueue_script('angular-app', get_template_directory_uri() . '/assets/js/plugins/app.js', array(), false, true );
		wp_enqueue_script('angular-controllers', get_template_directory_uri() . '/assets/js/plugins/controllers.js', array(), false, true );
		wp_enqueue_script('angular-services', get_template_directory_uri() . '/assets/js/plugins/services.js', array(), false, true );
		wp_enqueue_script('angular-directives', get_template_directory_uri() . '/assets/js/plugins/directives.js', array(), false, true );
		
		if ( is_singular() && comments_open() && get_option( 'thread_comments' ) ) {
		wp_enqueue_script( 'comment-reply' );}
		if ( is_singular() && wp_attachment_is_image() ) {
		wp_enqueue_script( 'My Awesome Bootstrap Theme-keyboard-image-navigation', get_template_directory_uri() . '/js/keyboard-image-navigation.js', array( 'jquery' ), '20120202' );
	}
}
add_action( 'wp_enqueue_scripts', 'my_awesome_bootstrap_theme_scripts' );

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

/**
 * Use Bootstrap Mobile Navigation.
 */
require get_template_directory() . '/inc/wp_bootstrap_navwalker.php';

/**
 * Use Angular.js
 */
require get_template_directory() . '/inc/custom-ajax.php';



