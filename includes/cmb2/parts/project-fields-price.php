<?php

	$cmb->add_field( array(
		'name'     => __( 'Precio', 'noc-functions' ),
		'id'       => $prefix . 'price-tile',
		'type'     => 'title',
		'tab'  		=> 'price',
		'render_row_cb' => array( 'CMB2_Tabs', 'tabs_render_row_cb' ),
	) );

	// $cmb->add_field( array(
	// 	'name'             => esc_html__( 'Currency', 'noc-functions' ),
	// 	// 'desc'             => esc_html__( 'Choose the currency', 'noc-functions' ),
	// 	'id'               => $prefix . 'currency',
	// 	'type'             => 'radio_inline',
	// 	// 'show_option_none' => 'No Selection',
	// 	'options'          => array(
	// 		'CRC'	=> esc_html__( 'Costa Rica colón', 'noc-functions' ),
	// 		'USD'   => esc_html__( 'US dollar', 'noc-functions' ),
	// 		'both'  => esc_html__( 'Both', 'noc-functions' ),
	// 	),
	// ) );

	$cmb->add_field( array(
		'name' => esc_html__( 'Price from (colones)', 'noc-functions' ),
		// 'desc' => esc_html__( 'field description (optional)', 'noc-functions' ),
		'id'   => $prefix . 'price_colones',
		'type' => 'text_money',
		'before_field' => '₡', // override '$' symbol if needed
		// 'repeatable' => true,
		'attributes' => array(
			// 'required'               => true, // Will be required only if visible.
			'data-conditional-id'    => $prefix . 'currency',
			'data-conditional-value' => wp_json_encode( array( 'CRC', 'both' ) ),
		),
		'tab'  		=> 'price',
		'render_row_cb' => array( 'CMB2_Tabs', 'tabs_render_row_cb' ),
	) );

	$cmb->add_field( array(
		'name' => esc_html__( 'Price from (US dollars)', 'noc-functions' ),
		// 'desc' => esc_html__( 'field description (optional)', 'noc-functions' ),
		'id'   => $prefix . 'price_dollars',
		'type' => 'text_money',
		// 'before_field' => '£', // override '$' symbol if needed
		// 'repeatable' => true,
		'attributes' => array(
			// 'required'               => true, // Will be required only if visible.
			'data-conditional-id'    => $prefix . 'currency',
			'data-conditional-value' => wp_json_encode( array( 'USD', 'both' ) ),
		),
		'tab'  		=> 'price',
		'render_row_cb' => array( 'CMB2_Tabs', 'tabs_render_row_cb' ),
	) );


	$cmb->add_field( array(
		'name'             => esc_html__( 'Financing', 'noc-functions' ),
		'id'               => $prefix . 'financing',
		'type' 		=> 'textarea_small',
		'tab'  		=> 'price',
		'render_row_cb' => array( 'CMB2_Tabs', 'tabs_render_row_cb' ),
	) );