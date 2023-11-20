<?php
/**
 * TJM 2023 Redesign functions and definitions
 *
 * @link https://developer.wordpress.org/themes/basics/theme-functions/
 *
 * @package TJM_2023_Redesign
 */

if ( ! defined( '_S_VERSION' ) ) {
	// Replace the version number of the theme on each release.
	define( '_S_VERSION', '1.0.0' );
}

/**
 * Sets up theme defaults and registers support for various WordPress features.
 *
 * Note that this function is hooked into the after_setup_theme hook, which
 * runs before the init hook. The init hook is too late for some features, such
 * as indicating support for post thumbnails.
 */
function tjm_2023_redesign_setup() {

	// Add default posts and comments RSS feed links to head.
	add_theme_support( 'automatic-feed-links' );

	/*
		* Enable support for Post Thumbnails on posts and pages.
		*
		* @link https://developer.wordpress.org/themes/functionality/featured-images-post-thumbnails/
		*/
	add_theme_support( 'post-thumbnails' );

	// This theme uses wp_nav_menu() in one location.
	register_nav_menus(
		array(
			'menu-1' => esc_html__( 'Primary', 'tjm-2023-redesign' ),
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

}
add_action( 'after_setup_theme', 'tjm_2023_redesign_setup' );

/**
 * Set the content width in pixels, based on the theme's design and stylesheet.
 *
 * Priority 0 to make it available to lower priority callbacks.
 *
 * @global int $content_width
 */
function tjm_2023_redesign_content_width() {
	$GLOBALS['content_width'] = apply_filters( 'tjm_2023_redesign_content_width', 640 );
}
add_action( 'after_setup_theme', 'tjm_2023_redesign_content_width', 0 );

/**
 * Register widget area.
 *
 * @link https://developer.wordpress.org/themes/functionality/sidebars/#registering-a-sidebar
 */
function tjm_2023_redesign_widgets_init() {
	register_sidebar(
		array(
			'name'          => esc_html__( 'Sidebar', 'tjm-2023-redesign' ),
			'id'            => 'sidebar-1',
			'description'   => esc_html__( 'Add widgets here.', 'tjm-2023-redesign' ),
			'before_widget' => '<section id="%1$s" class="widget %2$s">',
			'after_widget'  => '</section>',
			'before_title'  => '<h2 class="widget-title">',
			'after_title'   => '</h2>',
		)
	);
}
add_action( 'widgets_init', 'tjm_2023_redesign_widgets_init' );

/**
 * Enqueue scripts and styles.
 */
function tjm_2023_redesign_scripts() {
	// Font Awesome
	wp_enqueue_script( 'font-awesome', 'https://kit.fontawesome.com/db9f4287e6.js', array(), null );

	// Google Fonts
    wp_enqueue_style( 'google-fonts', 'https://fonts.googleapis.com/css2?family=Averia+Serif+Libre:wght@300;700&display=swap', array(), null );

	// Core theme CSS (includes Bootstrap)
    wp_enqueue_style( 'bootstrap-css', get_template_directory_uri() . '/css/bootstrap.css', array(), _S_VERSION );
    wp_enqueue_style( 'theme-style', get_template_directory_uri() . '/css/styles.css', array(), _S_VERSION );

	wp_enqueue_script( 'tjm-2023-redesign-navigation', get_template_directory_uri() . '/js/navigation.js', array(), _S_VERSION, true );
	wp_enqueue_script( 'tjm-2023-redesign-custom-js', get_template_directory_uri() . '/js/scripts.js', array('bootstrap-js'), _S_VERSION, true );

	if ( is_singular() && comments_open() && get_option( 'thread_comments' ) ) {
		wp_enqueue_script( 'comment-reply' );
	}
}
add_action( 'wp_enqueue_scripts', 'tjm_2023_redesign_scripts' );

function tjm_2023_redesign_enqueue_bootstrap_script() {
    // Enqueue Bootstrap Script`
    wp_enqueue_script(
        'bootstrap-js', // Handle
        'https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js', // Source
        array(), // Dependencies (if any)
        '5.2.3', // Version number
        true // Load in footer
    );
}

add_action('wp_footer', 'tjm_2023_redesign_enqueue_bootstrap_script');


function add_preconnect_links() {
    echo '<link rel="preconnect" href="https://fonts.googleapis.com" />';
    echo '<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />';
}
add_action('wp_head', 'add_preconnect_links');

function add_crossorigin_to_script($tag, $handle, $src) {
    // Check if handle matches the handle you used while enqueueing the script
    if ('font-awesome' === $handle) {
        $tag = '<script src="' . esc_url($src) . '" crossorigin="anonymous"></script>';
    }
    return $tag;
}
add_filter('script_loader_tag', 'add_crossorigin_to_script', 10, 3);

remove_action('wp_head', 'wp_resource_hints', 2);

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

function tjm_2023_redesign_breadcrumb() {
	if ( ! is_home() && ! is_front_page() ) {
		echo '<nav aria-label="breadcrumb">';
		echo '<ol class="breadcrumb">';
		echo '<li class="breadcrumb-item"><a href="' . esc_url( home_url() ) . '">Home</a></li>';

		// Add the News page link for posts
		if ( is_single() && get_post_type() == 'news' ) {
			// Replace 'news-page-slug' with the actual slug of your News page
			$news_page_url = get_permalink( get_page_by_path( 'news' ) );
			echo '<li class="breadcrumb-item"><a href="' . esc_url( $news_page_url ) . '">News</a></li>';
		}

		if ( is_category() || is_single() ) {
			$categories = get_the_category();
			if ( $categories ) {
				foreach ( $categories as $category ) {
					echo '<li class="breadcrumb-item"><a href="' . esc_url( get_category_link( $category->term_id ) ) . '">' . esc_html( $category->name ) . '</a></li>';
				}
			}
		}

		if ( is_single() ) {
			echo '<li class="breadcrumb-item active" aria-current="page">' . esc_html( get_the_title() ) . '</li>';
		}

		echo '</ol>';
		echo '</nav>';
	}
}
