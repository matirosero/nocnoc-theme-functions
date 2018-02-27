<?php

$tabs_array = array(
	'description'  => array(
		'label' => __( 'Description', 'noc-functions' ),
		// 'icon'  => 'dashicons-share', // Dashicon
	),
	'media'  => array(
		'label' => __( 'Images & video', 'noc-functions' ),
		// 'icon'  => 'dashicons-share', // Dashicon
	),
	'price'  => array(
		'label' => __( 'Price', 'noc-functions' ),
		// 'icon'  => 'dashicons-share', // Dashicon
	),
	'location'  => array(
		'label' => __( 'Location', 'noc-functions' ),
		// 'icon'  => 'dashicons-location-alt', // Dashicon
	),
	'contact' => array(
		'label' => __( 'Contact', 'noc-functions' ),
		//'show_on_cb' => 'yourprefix_show_if_front_page',
	),
    'boards'  => array(
        'label' => __( 'Tableros', 'noc-functions' ),
        // 'icon'  => 'dashicons-location-alt', // Dashicon
    ),
);

$frontend_metabox_array = array(
    // 'id'           => $prefix . 'apartments',
    'object_types' => array( 'noc_project' ),
    'hookup'       => false,
    'save_fields'  => false,
    'tabs'      => $tabs_array,
	'tab_style'   => 'default',
);

