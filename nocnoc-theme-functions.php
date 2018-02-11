<?php
/*
Plugin Name: NocNoc Theme Functions
Plugin URI: https://github.com/matirosero/nocnoc-theme-functions
Description: Custom functions for the Club de Investigación Tecnológica website.
Version: 0.1
Author: Mat Rosero
Author URI: https://www.matilderosero.com/
This plugin is released under the GPLv2 license. The images packaged with this plugin are the property of their respective owners, and do not, necessarily, inherit the GPLv2 license.
*/


/**
 * Get the CMB2 bootstrap!
 *
 * @since 0.1.0
 */
if ( file_exists( __DIR__ . '/vendor/cmb2/init.php' ) ) {
  	require_once __DIR__ . '/vendor/cmb2/init.php';
} elseif ( file_exists(  __DIR__ . '/vendor/CMB2/init.php' ) ) {
  	require_once __DIR__ . '/vendor/CMB2/init.php';
}


/**
 * Load plugin textdomain.
 *
 * @since 0.1.0
 */
function mro_noc_load_textdomain() {
	load_plugin_textdomain( 'mro-nocf', false, basename( dirname( __FILE__ ) ) . '/languages' );
}
add_action( 'plugins_loaded', 'mro_noc_load_textdomain' );


/**
 * Post types.
 *
 * @since 0.1.0
 */
require_once( dirname( __FILE__ ) . '/includes/register-cpt.php' );


/**
 * Taxonomies.
 *
 * @since 0.1.0
 */
require_once( dirname( __FILE__ ) . '/includes/register-taxonomies.php' );