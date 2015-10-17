<?php
/**
 * Horizon Theme functions and definitions.
 *
 * Sets up the theme and provides some helper functions, which are used in the
 * theme as custom template tags. Others are attached to action and filter
 * hooks in WordPress to change core functionality.
 *
 * For more information on hooks, actions, and filters,
 * see http://codex.wordpress.org/Plugin_API
 *
 * @package Horizon_Theme
 */

/**
 * Sets content width.
 */
if ( ! isset( $content_width ) ) {
	$content_width = 600;
}

if ( ! function_exists( 'horizon_theme_setup_features' ) ) {

	/**
	 * Setup theme features.
	 *
	 * @return void
	 */
	function horizon_theme_setup_features() {

		/**
		 * Add support for multiple languages.
		 */
		load_theme_textdomain( 'horizon-theme', get_template_directory() . '/languages' );

		/**
		 * Register nav menus.
		 */
		register_nav_menus(
			array(
				'main-menu' => __( 'Main Menu', 'horizon-theme' )
			)
		);

		/*
		 * Add post_thumbnails suport.
		 */
		add_theme_support( 'post-thumbnails' );

		/**
		 * Add thumbnail blog size
		 */
		add_image_size( 'horizon-thumbnail', 700, 365, true );

		/**
		 * Add portfolio thumbnail size
		 */
		add_image_size( 'horizon-portfolio-thumbnail', 480, 400, true);


		/**
		 * Add feed link.
		 */
		add_theme_support( 'automatic-feed-links' );

		/**
		 * Support Custom Header.
		 */
		$default = array(
			'width'         => 1920,
			'height'        => 940,
			'flex-height'   => false,
			'flex-width'    => false,
			'header-text'   => false,
			'default-image' => get_template_directory_uri() . '/assets/images/banner.jpg',
			'uploads'       => true,
		);

		add_theme_support( 'custom-header', $default );

		/**
		 * Support Custom Background.
		 */
		$defaults = array(
			'default-color' => '',
			'default-image' => '',
		);

		add_theme_support( 'custom-background', $defaults );

		/**
		 * Support Custom Editor Style.
		 */
		add_editor_style( 'editor-style.css' );

		/**
		 * Add support for infinite scroll.
		 */
		add_theme_support(
			'infinite-scroll',
			array(
				'type'           => 'scroll',
				'footer_widgets' => false,
				'container'      => 'content',
				'wrapper'        => false,
				'render'         => false,
				'posts_per_page' => get_option( 'posts_per_page' )
			)
		);

		/**
		 * Add support for Post Formats.
		 */
		// add_theme_support( 'post-formats', array(
		//     'aside',
		//     'gallery',
		//     'link',
		//     'image',
		//     'quote',
		//     'status',
		//     'video',
		//     'audio',
		//     'chat'
		// ) );

		/**
		 * Support The Excerpt on pages.
		 */
		// add_post_type_support( 'page', 'excerpt' );

		/**
		 * Switch default core markup for search form, comment form, and comments to output valid HTML5.
		 */
		add_theme_support(
			'html5',
			array(
				'search-form',
				'comment-form',
				'comment-list',
				'gallery',
				'caption'
			)
		);

		/*
		 * Let WordPress manage the document title.
		 * By adding theme support, we declare that this theme does not use a
		 * hard-coded <title> tag in the document head, and expect WordPress to
		 * provide it for us.
		 */
		add_theme_support( 'title-tag' );
	}
}

add_action( 'after_setup_theme', 'horizon_theme_setup_features' );

/**
 * Register widget areas.
 *
 * @return void
 */
function horizon_theme_widgets_init() {
	register_sidebar(
		array(
			'name' => __( 'Main Sidebar', 'horizon-theme' ),
			'id' => 'main-sidebar',
			'description' => __( 'Site Main Sidebar', 'horizon-theme' ),
			'before_widget' => '<aside id="%1$s" class="widget %2$s">',
			'after_widget' => '</aside>',
			'before_title' => '<h3 class="widgettitle widget-title">',
			'after_title' => '</h3>',
		)
	);
}

add_action( 'widgets_init', 'horizon_theme_widgets_init' );

/**
 * Load site scripts.
 *
 * @return void
 */
function horizon_theme_enqueue_scripts() {
	$template_url = get_template_directory_uri();

	// Register and enqueues Open Sans
	wp_register_style( 'horizon_theme-open-sans', '//fonts.googleapis.com/css?family=Open+Sans:300italic,400italic,600italic,700italic,800italic,400,300,600,700,800', array(), null, 'all' );
    wp_enqueue_style( 'horizon_theme-open-sans' );

	// Loads Horizon Theme main stylesheet.
	wp_enqueue_style( 'horizon-theme-style', get_stylesheet_uri(), array( 'dashicons' ), null, 'all' );

	// jQuery.
	wp_enqueue_script( 'jquery' );

	// Google Maps
	if ( is_front_page() ) {
		// Google Maps V3 Engine
		wp_enqueue_script( 'google-maps-v3', 'http://maps.googleapis.com/maps/api/js?sensor=false', array(), null, true );

		// Google Maps Configuration
		wp_enqueue_script( 'google-maps-config', $template_url . '/assets/js/googleMaps.js', array( 'google-maps-v3' ), null, true );

		wp_localize_script( 'google-maps-config', 'google_maps_data', array(
			'address' => "Belo Horizonte - MG", //TODO Entrada de endereço personalizado (Theme options)
			'icon' => $template_url . '/assets/images/marker.png' //TODO Entrada de icone personalizado (Theme options)
		));
	}

	// General scripts.
	if ( defined( 'SCRIPT_DEBUG' ) && SCRIPT_DEBUG ) {
		// Bootstrap.
		wp_enqueue_script( 'owl-carousel', $template_url . '/assets/js/libs/owl.carousel.js', array( 'jquery' ), null, true );

		// Bootstrap.
		wp_enqueue_script( 'bootstrap', $template_url . '/assets/js/libs/bootstrap.min.js', array( 'jquery' ), null, true );

		// FitVids.
		wp_enqueue_script( 'fitvids', $template_url . '/assets/js/libs/jquery.fitvids.js', array( 'jquery' ), null, true );

		// Main jQuery.
		wp_enqueue_script( 'horizon-theme-main', $template_url . '/assets/js/main.js', array( 'jquery' ), null, true );
	} else {
		// Grunt main file with Bootstrap, FitVids and others libs.
		wp_enqueue_script( 'horizon-theme-main-min', $template_url . '/assets/js/main.min.js', array( 'jquery' ), null, true );
	}

	// Load Thread comments WordPress script.
	if ( is_singular() && get_option( 'thread_comments' ) ) {
		wp_enqueue_script( 'comment-reply' );
	}
}

add_action( 'wp_enqueue_scripts', 'horizon_theme_enqueue_scripts', 1 );

/**
 * Custom Hooks
 */
require_once get_template_directory() . '/inc/structure/hooks.php';

/**
 * Comments loop.
 */
require_once get_template_directory() . '/inc/structure/comments-loop.php';

/**
 * Custom template tags.
 */
require_once get_template_directory() . '/inc/structure/template-tags.php';

/**
 * Nav Walker.
 */
require_once get_template_directory() . '/inc/class-horizon-theme-nav-walker.php';

/**
 * Customizer additions.
 */
require_once get_template_directory() . '/inc/customizer/customizer.php';

/**
 * TGM Plugin Activation
 */
require_once get_template_directory() . '/inc/class-tgm-plugin-activation.php';
require_once get_template_directory() . '/inc/register_plugins.php';
