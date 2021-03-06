<?php

add_action( 'cmb2_admin_init', 'mro_noc_register_project_basic_metabox' );
/**
 * Apartments
 */
function mro_noc_register_project_basic_metabox() {
	global $tabs_array;

	$prefix = 'noc_project_';

	$cmb = new_cmb2_box( array(
		'id'            => $prefix . 'general_info',
		'title'         => esc_html__( 'Project information', 'noc-functions' ),
		'object_types'  => array( 'noc_project' ), // Post type
		'context'    	=> 'normal',
		'priority'   	=> 'high',
		'tabs'      	=> $tabs_array,
		'tab_style'   	=> 'default',
	) );

	// TAB: description
	include(dirname( __FILE__ ) . '/parts/project-fields-basic-images.php');
	include(dirname( __FILE__ ) . '/parts/project-fields-tax-type.php');
	include(dirname( __FILE__ ) . '/parts/project-fields-tax-stage.php');
	include(dirname( __FILE__ ) . '/parts/project-fields-basic.php');
	include(dirname( __FILE__ ) . '/parts/project-fields-pdf.php');

    // TAB: images
    include(dirname( __FILE__ ) . '/parts/project-fields-images.php');
    include(dirname( __FILE__ ) . '/parts/project-fields-video.php');

    // TAB: price
    include(dirname( __FILE__ ) . '/parts/project-fields-price.php');
    
    // TAB: location
    include(dirname( __FILE__ ) . '/parts/project-fields-location.php');
    
    // TAB: contact
    include(dirname( __FILE__ ) . '/parts/project-fields-contact.php');

	// TAB: boards
    include(dirname( __FILE__ ) . '/parts/project-fields-boards.php');

}

add_action( 'cmb2_admin_init', 'mro_noc_register_project_admin_metabox' );
/**
 * Houses
 */
function mro_noc_register_project_admin_metabox() {
	$prefix = 'noc_project_admin';

	$cmb = new_cmb2_box( array(
		'id'            => $prefix . 'admin_information',
		'title'         => esc_html__( 'Admin information', 'noc-functions' ),
		'object_types'  => array( 'noc_project' ), // Post type
		'context'    => 'side',
		'priority'   => 'default',
	) );

	$cmb->add_field( array(
		'name' => esc_html__( 'Expiration date', 'noc-functions' ),
		// 'desc' => esc_html__( 'field description (optional)', 'noc-functions' ),
		'id'   => $prefix . 'expiration-date',
		'type' => 'text_date',
		// 'date_format' => 'Y-m-d',
	) );
}


add_action( 'cmb2_admin_init', 'mro_noc_register_project_houses_metabox' );
/**
 * Houses
 */
function mro_noc_register_project_houses_metabox() {
	$prefix = 'noc_project_';

	$cmb = new_cmb2_box( array(
		'id'            => $prefix . 'houses_information',
		'title'         => esc_html__( 'Información casas', 'noc-functions' ),
		'object_types'  => array( 'noc_project' ), // Post type
		'context'    => 'normal',
		'priority'   => 'high',
		'show_on_cb' => 'noc_taxonomy_show_on_filter', // function should return a bool value
		'show_on_terms' => array(
			'noc_type' => array( 'casas' ),
		),
	) );

	include(dirname( __FILE__ ) . '/parts/project-fields-houses.php');
}


add_action( 'cmb2_admin_init', 'mro_noc_register_project_lots_metabox' );
/**
 * Lots
 */
function mro_noc_register_project_lots_metabox() {
	$prefix = 'noc_project_';

	$cmb = new_cmb2_box( array(
		'id'            => $prefix . 'lots_information',
		'title'         => esc_html__( 'Información lotes', 'noc-functions' ),
		'object_types'  => array( 'noc_project' ), // Post type
		'context'    => 'normal',
		'priority'   => 'high',
		'show_on_cb' => 'noc_taxonomy_show_on_filter', // function should return a bool value
		'show_on_terms' => array(
			'noc_type' => array( 'lotes' ),
		),
	) );

	include(dirname( __FILE__ ) . '/parts/project-fields-lots.php');
}


add_action( 'cmb2_admin_init', 'mro_noc_register_project_apartment_metabox' );
/**
 * Project images
 */
function mro_noc_register_project_apartment_metabox() {
	$prefix = 'noc_project_';

	$cmb = new_cmb2_box( array(
		'id'            => $prefix . 'apartments_information',
		'title'         => esc_html__( 'Información torres', 'noc-functions' ),
		'object_types'  => array( 'noc_project' ), // Post type
		'context'    => 'normal',
		'priority'   => 'high',
		'show_on_cb' => 'noc_taxonomy_show_on_filter', // function should return a bool value
		'show_on_terms' => array(
			'noc_type' => array( 'torres' ),
		),
	) );

	include(dirname( __FILE__ ) . '/parts/project-fields-apartments.php');
}