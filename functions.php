<?php
/**
 * Lean functions and definitions
 *
 * @link https://developer.wordpress.org/themes/basics/theme-functions/
 *
 * @package Lean
 */

@ini_set( 'upload_max_size' , '300M' );
@ini_set( 'post_max_size', '300M');
@ini_set( 'max_execution_time', '300' );

if ( ! defined( '_S_VERSION' ) ) {
	// Replace the version number of the theme on each release.
	define( '_S_VERSION', '1.0.0' );
}

if ( ! function_exists( 'lean_setup' ) ) :
	/**
	 * Sets up theme defaults and registers support for various WordPress features.
	 *
	 * Note that this function is hooked into the after_setup_theme hook, which
	 * runs before the init hook. The init hook is too late for some features, such
	 * as indicating support for post thumbnails.
	 */
	function lean_setup() {
		/*
		 * Make theme available for translation.
		 * Translations can be filed in the /languages/ directory.
		 * If you're building a theme based on Lean, use a find and replace
		 * to change 'lean' to the name of your theme in all the template files.
		 */
		load_theme_textdomain( 'lean', get_template_directory() . '/languages' );

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
				'menu-1' => esc_html__( 'Primary', 'lean' ),
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

		// Set up the WordPress core custom background feature.
		add_theme_support(
			'custom-background',
			apply_filters(
				'lean_custom_background_args',
				array(
					'default-color' => 'ffffff',
					'default-image' => '',
				)
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
				'height'      => 250,
				'width'       => 250,
				'flex-width'  => true,
				'flex-height' => true,
			)
		);
	}
endif;
add_action( 'after_setup_theme', 'lean_setup' );


/**
 * Enqueue scripts and styles.
 */
function lean_scripts() {
	wp_enqueue_style( 'lean-style', get_stylesheet_uri() . '?n=47', array(), _S_VERSION );
	wp_enqueue_style('lean-mobile', get_template_directory_uri() . '/mobile.css?n=21', array(), _S_VERSION);

	wp_enqueue_script('lean-main', get_template_directory_uri() . '/js/main.js?n=10', array('gsap', 'siema'), _S_VERSION, true);
	wp_enqueue_script('siema', get_template_directory_uri() . '/js/siema.js', array(), _S_VERSION, true);

    wp_enqueue_script( 'scroll-trigger', 'https://cdnjs.cloudflare.com/ajax/libs/gsap/3.5.1/ScrollTrigger.min.js', array('gsap'), null, true );
    wp_register_script( 'gsap', 'https://cdnjs.cloudflare.com/ajax/libs/gsap/3.6.0/gsap.min.js', null, null, true );


	if ( is_singular() && comments_open() && get_option( 'thread_comments' ) ) {
		wp_enqueue_script( 'comment-reply' );
	}
}
add_action( 'wp_enqueue_scripts', 'lean_scripts' );

// Add Konferencja post type
function lean_add_konferencje_post_type() {
    $supports = array(
        'title',
    );

    $labels = array(
        'name' => 'Konferencje'
    );

    $args = array(
        'labels'               => $labels,
        'supports'             => $supports,
        'public'               => true,
        'capability_type'      => 'post',
        'has_archive'          => true,
        'menu_position'        => 30,
        'menu_icon'            => 'dashicons-calendar-alt'
    );

    register_post_type("Konferencje", $args);
}

add_action("init", "lean_add_konferencje_post_type");

// Add Prelegenci post type
function lean_add_prelegenci_post_type() {
    $supports = array(
        'title',
    );

    $labels = array(
        'name' => 'Prelegenci'
    );

    $args = array(
        'labels'               => $labels,
        'supports'             => $supports,
        'public'               => true,
        'capability_type'      => 'post',
        'has_archive'          => true,
        'menu_position'        => 30,
        'menu_icon'            => 'dashicons-universal-access'
    );

    register_post_type("Prelegenci", $args);
}

add_action("init", "lean_add_prelegenci_post_type");

// Add Prelegenci post type
function lean_add_agenda_post_type() {
    $supports = array(
        'title',
    );

    $labels = array(
        'name' => 'Agenda'
    );

    $args = array(
        'labels'               => $labels,
        'supports'             => $supports,
        'public'               => true,
        'capability_type'      => 'post',
        'has_archive'          => true,
        'menu_position'        => 30,
        'menu_icon'            => 'dashicons-list-view'
    );

    register_post_type("Agenda", $args);
}

add_action("init", "lean_add_agenda_post_type");

// Add Galeria konferencji post type
function lean_add_galeria_konferencji_post_type() {
    $supports = array(
        'title',
    );

    $labels = array(
        'name' => 'Galeria konferencji'
    );

    $args = array(
        'labels'               => $labels,
        'supports'             => $supports,
        'public'               => true,
        'capability_type'      => 'post',
        'has_archive'          => true,
        'menu_position'        => 30,
        'menu_icon'            => 'dashicons-format-gallery'
    );

    register_post_type("Galeria konferencji", $args);
}

add_action("init", "lean_add_galeria_konferencji_post_type");

// Add Prelegenci post type
function lean_add_sponsorzy_post_type() {
    $supports = array(
        'title',
    );

    $labels = array(
        'name' => 'Sponsorzy konferencji'
    );

    $args = array(
        'labels'               => $labels,
        'supports'             => $supports,
        'public'               => true,
        'capability_type'      => 'post',
        'has_archive'          => true,
        'menu_position'        => 30,
        'menu_icon'            => 'dashicons-money'
    );

    register_post_type("Sponsorzy konferencji", $args);
}

add_action("init", "lean_add_sponsorzy_post_type");

// Add Referencje post type
function lean_add_referencje_post_type() {
    $supports = array(
        'title',
    );

    $labels = array(
        'name' => 'Referencje'
    );

    $args = array(
        'labels'               => $labels,
        'supports'             => $supports,
        'public'               => true,
        'capability_type'      => 'post',
        'has_archive'          => true,
        'menu_position'        => 30,
        'menu_icon'            => 'dashicons-welcome-add-page'
    );

    register_post_type("Referencje", $args);
}

add_action("init", "lean_add_referencje_post_type");

// Add Slider post type
function lean_add_slider_post_type() {
    $supports = array(
        'title',
    );

    $labels = array(
        'name' => 'Slider'
    );

    $args = array(
        'labels'               => $labels,
        'supports'             => $supports,
        'public'               => true,
        'capability_type'      => 'post',
        'has_archive'          => true,
        'menu_position'        => 30,
        'menu_icon'            => 'dashicons-desktop'
    );

    register_post_type("Slider", $args);
}

add_action("init", "lean_add_slider_post_type");

/* Remove editor from specific pages */
function remove_editor() {
    if (isset($_GET['post'])) {
        $id = $_GET['post'];
        $template = get_post_meta($id, '_wp_page_template', true);
        switch ($template) {
            case 'misja.php':
            case 'page-dofinansowania.php':
            case 'page-eksperci.php':
            case 'page-produkty.php':
                // the below removes 'editor' support for 'pages'
                // if you want to remove for posts or custom post types as well
                // add this line for posts:
                // remove_post_type_support('post', 'editor');
                // add this line for custom post types and replace
                // custom-post-type-name with the name of post type:
                // remove_post_type_support('custom-post-type-name', 'editor');
                remove_post_type_support('page', 'editor');
                break;
            default :
                // Don't remove any other template.
                break;
        }
    }
}
add_action('init', 'remove_editor');