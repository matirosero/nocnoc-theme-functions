<?php

add_action( 'cmb2_admin_init', 'mro_noc_register_project_basic_metabox' );
/**
 * Project general informaction
 */
function mro_noc_register_project_basic_metabox() {
	$prefix = 'noc_project_';

	$cmb = new_cmb2_box( array(
		'id'            => $prefix . 'gen_info',
		'title'         => esc_html__( 'Project information', 'noc-functions' ),
		'object_types'  => array( 'noc_project' ), // Post type
		'context'    => 'normal',
		'priority'   => 'high',
		// 'show_names' => true, // Show field names on the left
		// 'cmb_styles' => false, // false to disable the CMB stylesheet
		// 'classes'    => 'extra-class', // Extra cmb2-wrap classes
		// 'classes_cb' => 'mro_cit_demo_add_some_classes', // Add classes through a callback.
		'tabs'      => array(
			'description'  => array(
				'label' => __( 'Description', 'cmb2' ),
				// 'icon'  => 'dashicons-share', // Dashicon
			),
			'price'  => array(
				'label' => __( 'Price', 'cmb2' ),
				// 'icon'  => 'dashicons-share', // Dashicon
			),
			'location'  => array(
				'label' => __( 'Location', 'cmb2' ),
				// 'icon'  => 'dashicons-location-alt', // Dashicon
			),
			'contact' => array(
				'label' => __( 'Contact', 'cmb2' ),
				//'show_on_cb' => 'yourprefix_show_if_front_page',
			),
		),
		'tab_style'   => 'default',
	) );

	$cmb->add_field( array(
		'name'     	=> __( 'Información del proyecto', 'noc-functions' ),
		'id'      	=> $prefix . 'basic-tile',
		'type'     	=> 'title',
		'tab'  		=> 'description',
		'render_row_cb' => array( 'CMB2_Tabs', 'tabs_render_row_cb' ),
	) );
	include(dirname( __FILE__ ) . '/parts/project-fields-basic-images.php');
	// include(dirname( __FILE__ ) . '/parts/project-fields-basic-content.php');
    include(dirname( __FILE__ ) . '/parts/project-fields-basic.php');

	include(dirname( __FILE__ ) . '/parts/project-fields-basic.php');
	include(dirname( __FILE__ ) . '/parts/project-fields-price.php');
	include(dirname( __FILE__ ) . '/parts/project-fields-location.php');
	include(dirname( __FILE__ ) . '/parts/project-fields-contact.php');

}





add_action( 'cmb2_admin_init', 'mro_noc_register_project_images_metabox' );
/**
 * Project images
 */
function mro_noc_register_project_images_metabox() {
	$prefix = 'noc_project_';

	$cmb = new_cmb2_box( array(
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