<?php
/**
 * ClearFrame: theme setup.
 *
 * @package ClearFrame
 */

if ( ! defined( 'ABSPATH' ) ) {
	exit;
}

define( 'CLEARFRAME_VERSION', '1.0.1' );

if ( ! isset( $content_width ) ) {
	$content_width = 720;
}

/** Theme support and menus. */
function clearframe_setup() {
	add_theme_support( 'title-tag' );
	add_theme_support( 'automatic-feed-links' );
	add_theme_support( 'post-thumbnails' );
	add_theme_support( 'html5', array( 'search-form', 'comment-form', 'comment-list', 'gallery', 'caption', 'style', 'script', 'navigation-widgets' ) );
	add_theme_support( 'align-wide' );
	add_theme_support( 'responsive-embeds' );
	add_theme_support( 'wp-block-styles' );
	add_theme_support( 'editor-styles' );
	add_theme_support(
		'custom-logo',
		array(
			'height'      => 80,
			'width'       => 240,
			'flex-height' => true,
			'flex-width'  => true,
		)
	);
	add_editor_style( 'assets/clearframe.css' );
	register_nav_menus(
		array(
			'primary' => __( 'Primary menu', 'clearframe' ),
			'footer'  => __( 'Footer menu', 'clearframe' ),
		)
	);
}
add_action( 'after_setup_theme', 'clearframe_setup' );

/** Styles and the small menu script. */
function clearframe_assets() {
	wp_enqueue_style( 'clearframe', get_template_directory_uri() . '/assets/clearframe.css', array(), CLEARFRAME_VERSION );
	wp_enqueue_script(
		'clearframe-nav',
		get_template_directory_uri() . '/assets/nav.js',
		array(),
		CLEARFRAME_VERSION,
		array(
			'in_footer' => true,
			'strategy'  => 'defer',
		)
	);
	if ( is_singular() && comments_open() && get_option( 'thread_comments' ) ) {
		wp_enqueue_script( 'comment-reply' );
	}
}
add_action( 'wp_enqueue_scripts', 'clearframe_assets' );

/** Widget area for the footer. */
function clearframe_widgets() {
	register_sidebar(
		array(
			'name'          => __( 'Footer widgets', 'clearframe' ),
			'id'            => 'footer-1',
			'description'   => __( 'Shown above the footer text.', 'clearframe' ),
			'before_widget' => '<section id="%1$s" class="cf-widget %2$s">',
			'after_widget'  => '</section>',
			'before_title'  => '<h2 class="cf-widget__title">',
			'after_title'   => '</h2>',
		)
	);
}
add_action( 'widgets_init', 'clearframe_widgets' );

require_once get_template_directory() . '/inc/customizer.php';
require_once get_template_directory() . '/inc/template-tags.php';
