<?php

$cmb = new_cmb2_box( array(
    'id'           => $prefix . 'apartments',
    'object_types' => array( 'noc_project' ),
    'hookup'       => false,
    'save_fields'  => false,
    // 'cmb_styles' => false,
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