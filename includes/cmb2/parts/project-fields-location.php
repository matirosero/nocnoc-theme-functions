<?php

	$cmb_demo->add_field( array(
		'name' => esc_html__( 'Address', 'noc-functions' ),
		// 'desc' => esc_html__( 'field description (optional)', 'noc-functions' ),
		'id'   => $prefix . 'address',
		'type' => 'textarea',
	) );


	$cmb_demo->add_field( array(
		'name' => esc_html__( 'Google Maps location', 'noc-functions' ),
		'desc' => esc_html__( 'Drag the marker to set the exact location', 'noc-functions' ),
		'id'   => $prefix . 'map',
		'type' => 'pw_map',
	) );


	$cmb_demo->add_field( array(
		'name' => esc_html__( 'Waze', 'noc-functions' ),
		'desc' => esc_html__( 'field description (optional)', 'noc-functions' ),
		'id'   => $prefix . 'waze',
		'type' => 'text_medium',
	) );