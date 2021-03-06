<?php

	$cmb->add_field( array(
		'name'     => __( 'Ubicación', 'noc-functions' ),
		'id'       => $prefix . 'location-title',
		'type'     => 'title',
		'tab'  		=> 'location',
		'render_row_cb' => array( 'CMB2_Tabs', 'tabs_render_row_cb' ),
	) );

	$cmb->add_field( array(
		'name'           => esc_html__( 'Seleccionar ubicación', 'noc-functions' ),
		// 'desc'           => 'Description Goes Here',
		'id'             => $prefix . 'location_tax',
		'taxonomy'       => 'noc_location', //Enter Taxonomy Slug
		'type'           => 'taxonomy_select',
		'remove_default' => 'true', // Removes the default metabox provided by WP core. Pending release as of Aug-10-16
		'tab'  		=> 'location',
		'render_row_cb' => array( 'CMB2_Tabs', 'tabs_render_row_cb' ),
	) );

	$cmb->add_field( array(
		'name' => esc_html__( 'Address', 'noc-functions' ),
		// 'desc' => esc_html__( 'field description (optional)', 'noc-functions' ),
		'id'   => $prefix . 'address',
		'type' => 'textarea_small',
		'tab'  		=> 'location',
		'render_row_cb' => array( 'CMB2_Tabs', 'tabs_render_row_cb' ),
	) );


	$cmb->add_field( array(
		'name' => esc_html__( 'Google Maps location', 'noc-functions' ),
		'desc' => esc_html__( 'Drag the marker to set the exact location', 'noc-functions' ),
		'id'   => $prefix . 'map',
		'type' => 'pw_map',
		'tab'  		=> 'location',
		'render_row_cb' => array( 'CMB2_Tabs', 'tabs_render_row_cb' ),
	) );


	$cmb->add_field( array(
		'name' => esc_html__( 'Waze', 'noc-functions' ),
		'desc' => esc_html__( 'Enlace Waze', 'noc-functions' ),
		'id'   => $prefix . 'waze',
		'type' => 'text_medium',
		'tab'  		=> 'location',
		'render_row_cb' => array( 'CMB2_Tabs', 'tabs_render_row_cb' ),
	) );