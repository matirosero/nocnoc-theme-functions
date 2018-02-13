<?php

add_action( 'cmb2_admin_init', 'mro_noc_register_project_basic_metabox' );
/**
 * Project general informaction
 */
function mro_noc_register_project_basic_metabox() {
	$prefix = 'noc_project_';

	$cmb_demo = new_cmb2_box( array(
		'id'            => $prefix . 'gen_info',
		'title'         => esc_html__( 'Project information', 'noc-functions' ),
		'object_types'  => array( 'noc_project' ), // Post type
		'context'    => 'normal',
		'priority'   => 'high',
		// 'show_names' => true, // Show field names on the left
		// 'cmb_styles' => false, // false to disable the CMB stylesheet
		// 'classes'    => 'extra-class', // Extra cmb2-wrap classes
		// 'classes_cb' => 'mro_cit_demo_add_some_classes', // Add classes through a callback.
	) );

	include(dirname( __FILE__ ) . '/parts/project-fields-basic.php');
}


add_action( 'cmb2_admin_init', 'mro_noc_register_project_contact_metabox' );
/**
 * Project contact information
 */
function mro_noc_register_project_contact_metabox() {
	$prefix = 'noc_project_';

	/**
	 * Sample metabox to demonstrate each field type included
	 */
	$cmb_demo = new_cmb2_box( array(
		'id'            => $prefix . 'contact',
		'title'         => esc_html__( 'Project contact information', 'noc-functions' ),
		'object_types'  => array( 'noc_project' ), // Post type
		'context'    => 'normal',
		'priority'   => 'high',
		// 'show_names' => true, // Show field names on the left
		// 'cmb_styles' => false, // false to disable the CMB stylesheet
		// 'closed'     => true, // true to keep the metabox closed by default
		// 'classes'    => 'extra-class', // Extra cmb2-wrap classes
		// 'classes_cb' => 'mro_cit_demo_add_some_classes', // Add classes through a callback.
	) );

	include(dirname( __FILE__ ) . '/parts/project-fields-contact.php');
}


add_action( 'cmb2_admin_init', 'mro_noc_register_project_price_metabox' );
/**
 * Project general informaction
 */
function mro_noc_register_project_price_metabox() {
	$prefix = 'noc_project_';

	$cmb_demo = new_cmb2_box( array(
		'id'            => $prefix . 'price',
		'title'         => esc_html__( 'Project price', 'noc-functions' ),
		'object_types'  => array( 'noc_project' ), // Post type
		'context'    => 'normal',
		'priority'   => 'high',
		// 'show_names' => true, // Show field names on the left
		// 'cmb_styles' => false, // false to disable the CMB stylesheet
		// 'classes'    => 'extra-class', // Extra cmb2-wrap classes
		// 'classes_cb' => 'mro_cit_demo_add_some_classes', // Add classes through a callback.
	) );

	include(dirname( __FILE__ ) . '/parts/project-fields-price.php');
}


add_action( 'cmb2_admin_init', 'mro_noc_register_project_location_metabox' );
/**
 * Project location
 */
function mro_noc_register_project_location_metabox() {
	$prefix = 'noc_project_';

	/**
	 * Sample metabox to demonstrate each field type included
	 */
	$cmb_demo = new_cmb2_box( array(
		'id'            => $prefix . 'location',
		'title'         => esc_html__( 'Project location', 'noc-functions' ),
		'object_types'  => array( 'noc_project' ), // Post type
		// 'show_on'      => array(
		// 	'id' => array( 2515 ),
		// ), // Specific post IDs to display this metabox
		// 'show_on_cb' => 'mro_cit_demo_show_if_front_page', // function should return a bool value
		'context'    => 'normal',
		'priority'   => 'high',
		// 'show_names' => true, // Show field names on the left
		// 'cmb_styles' => false, // false to disable the CMB stylesheet
		// 'closed'     => true, // true to keep the metabox closed by default
		// 'classes'    => 'extra-class', // Extra cmb2-wrap classes
		// 'classes_cb' => 'mro_cit_demo_add_some_classes', // Add classes through a callback.
	) );

	include(dirname( __FILE__ ) . '/parts/project-fields-location.php');

}


add_action( 'cmb2_admin_init', 'mro_noc_register_project_images_metabox' );
/**
 * Project images
 */
function mro_noc_register_project_images_metabox() {
	$prefix = 'noc_project_';

	$cmb_demo = new_cmb2_box( array(
		'id'            => $prefix . 'images',
		'title'         => esc_html__( 'Project images', 'noc-functions' ),
		'object_types'  => array( 'noc_project' ), // Post type
		// 'show_on'      => array(
		// 	'id' => array( 2515 ),
		// ), // Specific post IDs to display this metabox
		// 'show_on_cb' => 'mro_cit_demo_show_if_front_page', // function should return a bool value
		'context'    => 'normal',
		'priority'   => 'high',
		// 'show_names' => true, // Show field names on the left
		// 'cmb_styles' => false, // false to disable the CMB stylesheet
		// 'closed'     => true, // true to keep the metabox closed by default
		// 'classes'    => 'extra-class', // Extra cmb2-wrap classes
		// 'classes_cb' => 'mro_cit_demo_add_some_classes', // Add classes through a callback.
	) );

	include(dirname( __FILE__ ) . '/parts/project-fields-images.php');
}