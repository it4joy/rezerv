<?php
/**
 * Rezerv Theme functions and definitions
 * For more information on hooks, actions, and filters,
 * {@link https://codex.wordpress.org/Plugin_API}
 *
 * @package WordPress
 * @subpackage Rezerv_Theme
 * @since Rezerv Theme 1.0
 */
 
define("THEME_DIR", get_template_directory_uri());

//REMOVE GENERATOR META TAG

remove_action('wp_head', 'wp_generator');

// ENQUEUE STYLES

function enqueue_styles() {

    // Register CSS
    wp_register_style( 'main-styles', THEME_DIR . '/style.css', array(), '1', 'all' );
    wp_enqueue_style( 'main-styles' );
	
	wp_register_style( 'bootstrap-styles', THEME_DIR . '/bootstrap-3.3.6-dist/css/bootstrap.css', array(), '1', 'all' );
    wp_enqueue_style( 'bootstrap-styles' );
	
	wp_register_style( 'font-awesome', 'https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.6.3/css/font-awesome.min.css', array(), '4.6.3', 'all' ); // v. 4.6.3
    wp_enqueue_style( 'font-awesome' );
}
add_action( 'wp_enqueue_scripts', 'enqueue_styles' );

// ENQUEUE SCRIPTS

function enqueue_scripts() {

    // Latest jQuery
	wp_deregister_script( 'jquery' );
	wp_register_script( 'jquery', '//ajax.googleapis.com/ajax/libs/jquery/1/jquery.min.js' );
	wp_enqueue_script( 'jquery' );
	
	// REGISTER HTML5 Shim
    wp_register_script( 'html5-shim', 'https://cdnjs.cloudflare.com/ajax/libs/html5shiv/3.7.3/html5shiv.min.js', array( 'jquery' ), '3', false ); // v. 3.7.3
    wp_enqueue_script( 'html5-shim' );
	wp_script_add_data('html5-shim', 'conditional', 'lt IE 9');
	
	// REGISTER HTML5 Shim
    wp_register_script( 'css3-support', 'https://cdnjs.cloudflare.com/ajax/libs/respond.js/1.4.2/respond.min.js', array( 'jquery' ), '1', false ); // v. 1.4.2
    wp_enqueue_script( 'css3-support' );
	wp_script_add_data('css3-support', 'conditional', 'lt IE 9');
	
	// jQuery Validation Plugin
	// wp_register_script( 'form-validation', 'https://cdnjs.cloudflare.com/ajax/libs/jquery-validate/1.15.0/jquery.validate.js', array( 'jquery' ), '1', false ); // v. 1.15.0
	// wp_enqueue_script( 'form-validation' );

    // Bootstrap JS
	wp_register_script( 'bootstrap-js', THEME_DIR . '/bootstrap-3.3.6-dist/js/bootstrap.min.js', array( 'jquery' ), '3', false ); // v. 3.3.6
	wp_enqueue_script( 'bootstrap-js' );
	
	// Технологии Яндекса :: Блок "Поделиться"
	wp_register_script( 'yandex-share', 'https://yastatic.net/share2/share.js' );
	wp_enqueue_script( 'yandex-share' );
	
	// Custom Script
	wp_register_script( 'custom-js', THEME_DIR . '/js/custom.js', array('jquery') );
	wp_enqueue_script( 'custom-js' );
}
add_action( 'wp_enqueue_scripts', 'enqueue_scripts' );

// THEME SETUP

function rezerv_theme_setup() {
	register_nav_menu( 'top-nav', 'Top Navigation' );
	// register_nav_menus( array('top-nav' => __( 'Top Navigation', 'Rezerv Theme' ) ) );
	
	add_theme_support( 'title-tag' );
}
add_action( 'after_setup_theme', 'rezerv_theme_setup' );

// WIDGETS

function register_custom_widgets() {
	register_sidebar( array(
		'name' => 'Primary Sidebar',
		'id' => 'sidebar-primary',
		'description' => 'Left Primary Sidebar',
		'class' => 'primary-sidebar',
		'before_widget' => '<div class="widgets-item">',
		'after_widget' => '</div>',
		'before_title' => '<h3 class="widget-title">',
		'after_title' => '</h3>'
	) );
}
add_action( 'widgets_init', 'register_custom_widgets' );

// Register Custom Navigation Walker
require_once('wp_bootstrap_navwalker.php');

// FILTERS

// TAXONOMIES

// POSTMETA

?>