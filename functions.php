<?php
/**
 * Blog da Loja Integrada functions and definitions
 *
 * @link https://developer.wordpress.org/themes/basics/theme-functions/
 *
 * @package Blog_da_Loja_Integrada
 */

if ( ! defined( '_S_VERSION' ) ) {
	// Replace the version number of the theme on each release.
	//define( '_S_VERSION', '1.0.0' );
	define( '_S_VERSION', rand(0,1000) );
}

/**
 * Sets up theme defaults and registers support for various WordPress features.
 *
 * Note that this function is hooked into the after_setup_theme hook, which
 * runs before the init hook. The init hook is too late for some features, such
 * as indicating support for post thumbnails.
 */
function loja_integrada_blog_setup() {
	/*
		* Make theme available for translation.
		* Translations can be filed in the /languages/ directory.
		* If you're building a theme based on Blog da Loja Integrada, use a find and replace
		* to change 'loja_integrada_blog' to the name of your theme in all the template files.
		*/
	load_theme_textdomain( 'loja_integrada_blog', get_template_directory() . '/languages' );

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
	register_nav_menus(
		array(
			'menu-1' => esc_html__( 'Primary', 'loja_integrada_blog' ),
		)
	);

	/*
		* Switch default core markup for search form, comment form, and comments
		* to output valid HTML5.
		*/
	add_theme_support(
		'html5',
		array(
			'search-form',
			'comment-form',
			'comment-list',
			'gallery',
			'caption',
			'style',
			'script',
		)
	);


	// Add theme support for selective refresh for widgets.
	add_theme_support( 'customize-selective-refresh-widgets' );

	/**
	 * Add support for core custom logo.
	 *
	 * @link https://codex.wordpress.org/Theme_Logo
	 */
	add_theme_support(
		'custom-logo',
		array(
			'height'      => 124,
			'width'       => 1024,
			'flex-width'  => true,
			'flex-height' => true,
		)
	);
}
add_action( 'after_setup_theme', 'loja_integrada_blog_setup' );

/**
 * Set the content width in pixels, based on the theme's design and stylesheet.
 *
 * Priority 0 to make it available to lower priority callbacks.
 *
 * @global int $content_width
 */
function loja_integrada_blog_content_width() {
	$GLOBALS['content_width'] = apply_filters( 'loja_integrada_blog_content_width', 640 );
}
add_action( 'after_setup_theme', 'loja_integrada_blog_content_width', 0 );

/**
 * Register widget area.
 *
 * @link https://developer.wordpress.org/themes/functionality/sidebars/#registering-a-sidebar
 */
function loja_integrada_blog_widgets_init() {
	register_sidebar(
		array(
			'name'          => esc_html__( 'Sidebar', 'loja_integrada_blog' ),
			'id'            => 'sidebar-1',
			'description'   => esc_html__( 'Add widgets here.', 'loja_integrada_blog' ),
			'before_widget' => '<section id="%1$s" class="widget %2$s">',
			'after_widget'  => '</section>',
			'before_title'  => '<h2 class="widget-title">',
			'after_title'   => '</h2>',
		)
	);
}
add_action( 'widgets_init', 'loja_integrada_blog_widgets_init' );

/**
 * Enqueue scripts and styles.
 */
function loja_integrada_blog_scripts() {
	// google-fonts
	wp_enqueue_style( 'google-fonts-style-css', 'https://fonts.googleapis.com/css2?family=Source+Sans+Pro:wght@400;600;700&display=swap', array() );
	wp_enqueue_style( 'google-fonts-style-poppins', 'https://fonts.googleapis.com/css2?family=Material+Icons&display=swap', array() );
	wp_style_add_data( 'google-fonts-googleapis', 'rel', 'stylesheet' );

	wp_enqueue_style( 'loja_integrada_blog-materialize', get_template_directory_uri(). '/css/materialize.min.css', array(), _S_VERSION );
	wp_enqueue_style( 'loja_integrada_blog-style', get_stylesheet_uri(), array('loja_integrada_blog-materialize'), _S_VERSION );
	wp_style_add_data( 'loja_integrada_blog-style', 'rtl', 'replace' );
	wp_enqueue_style( 'loja_integrada_blog-style-custom', get_template_directory_uri(). '/css/style.css', array('loja_integrada_blog-style'), _S_VERSION );

	wp_enqueue_script( 'loja_integrada_blog-materialize-js', get_template_directory_uri() . '/js/materialize.min.js', array('jquery'), _S_VERSION, true );
	wp_enqueue_script( 'loja_integrada_blog-init-js', get_template_directory_uri() . '/js/init.js', array('loja_integrada_blog-materialize-js'), _S_VERSION, true );



	wp_enqueue_style( 'loja_integrada_blog-style', get_stylesheet_uri(), array(), _S_VERSION );
	wp_style_add_data( 'loja_integrada_blog-style', 'rtl', 'replace' );

	wp_enqueue_script( 'loja_integrada_blog-navigation', get_template_directory_uri() . '/js/navigation.js', array(), _S_VERSION, true );

	if ( is_singular() && comments_open() && get_option( 'thread_comments' ) ) {
		wp_enqueue_script( 'comment-reply' );
	}
}
add_action( 'wp_enqueue_scripts', 'loja_integrada_blog_scripts' );

function webp_upload_mimes( $existing_mimes ) {
    // add webp to the list of mime types
    $existing_mimes['webp'] = 'image/webp';
    // return the array back to the function with our added mime type
    return $existing_mimes;
}
add_filter( 'mime_types', 'webp_upload_mimes' );
//** * Enable preview / thumbnail for webp image files.*/
function webp_is_displayable($result, $path) {
    if ($result === false) {
        $displayable_image_types = array( IMAGETYPE_WEBP );
        $info = @getimagesize( $path );
        if (empty($info)) {
            $result = false;
        } elseif (!in_array($info[2], $displayable_image_types)) {
            $result = false;
        } else {
            $result = true;
        }
    }
    return $result;
}
add_filter('file_is_displayable_image', 'webp_is_displayable', 10, 2);

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
require get_template_directory() . '/inc/customizer.php';

/**
 * Load Jetpack compatibility file.
 */
if ( defined( 'JETPACK__VERSION' ) ) {
	require get_template_directory() . '/inc/jetpack.php';
}

