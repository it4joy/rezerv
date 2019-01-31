<?php
/*
Plugin Name: SG Forms
Description: Simple Forms by Sensitive Graphics
Version: 1.0
Author: Sensitive Graphics
Author URI: http://sensitivegraphics.com/
*/

/*  Copyright 2016  Sensitive Graphics  (email: info@sensitivegraphics.com)

    This program is free software; you can redistribute it and/or modify
    it under the terms of the GNU General Public License as published by
    the Free Software Foundation; either version 2 of the License, or
    (at your option) any later version.

    This program is distributed in the hope that it will be useful,
    but WITHOUT ANY WARRANTY; without even the implied warranty of
    MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the
    GNU General Public License for more details.

    You should have received a copy of the GNU General Public License
    along with this program; if not, write to the Free Software
    Foundation, Inc., 51 Franklin St, Fifth Floor, Boston, MA  02110-1301  USA
*/

// If this file is called directly, abort.
if ( ! defined( 'WPINC' ) ) {
	die;
}

define( 'SGF_DIR', dirname( __FILE__ ) . '/' );
define( 'SGF_URL', plugins_url( '', __FILE__ ) . '/' );

/**
 * The code that runs during plugin activation.
 * This action is documented in includes/class-plugin-name-activator.php
 */
function activate_sg_forms() {
	require_once( SGF_DIR . 'includes/class-sg-forms-activator.php' );
	SG_Forms_Activator::activate();
}

/**
 * The code that runs during plugin deactivation.
 * This action is documented in includes/class-plugin-name-deactivator.php
 */
function deactivate_sg_forms() {
	require_once( SGF_DIR . 'includes/class-sg-forms-deactivator.php' );
	SG_Forms_Deactivator::deactivate();
}

register_activation_hook( __FILE__, 'activate_sg_forms' );
register_deactivation_hook( __FILE__, 'deactivate_sg_forms' );


require_once( SGF_DIR . 'includes/form-templates.php' );
require_once( SGF_DIR . 'includes/sgf-handler.php' );


function sg_forms_reg_shortcode() {
	add_shortcode("order-form", "order_form_shortcode");
}
add_action( 'init', 'sg_forms_reg_shortcode' );

function sg_forms_styles() {
	wp_register_style( 'sg_forms', SGF_URL . 'css/form-styles.css' );
	wp_enqueue_style( 'sg_forms' );
}
add_action( 'wp_enqueue_scripts', 'sg_forms_styles' );

function sg_forms_scripts() {
	// wp_register_script( 'my-ajax-request', SGF_URL . 'js/sg-forms.js', array( 'jquery' ) );
	// wp_enqueue_script( 'my-ajax-request' );

	wp_register_script( 'form-validation', 'https://cdnjs.cloudflare.com/ajax/libs/jquery-validate/1.15.0/jquery.validate.js', array( 'jquery' ), '1', false ); // v. 1.15.0
	wp_enqueue_script( 'form-validation' );
}
add_action( 'wp_enqueue_scripts', 'sg_forms_scripts' );