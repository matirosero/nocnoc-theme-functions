<?php

	$cmb->add_field( array(
		'name'     => __( 'Precio', 'noc-functions' ),
		'id'       => $prefix . 'price-tile',
		'type'     => 'title',
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
	) );


	$cmb->add_field( array(
		'name'             => esc_html__( 'Financing', 'noc-functions' ),
		// 'desc'             => esc_html__( 'Choose the currency', 'noc-functions' ),
		'id'               => $prefix . 'financing_options',
		'type'             => 'radio_inline',
		// 'show_option_none' => 'No Selection',
		'options'          => array(
			'percentage'	=> esc_html__( 'Porcentaje', 'noc-functions' ),
			'custom'   => esc_html__( 'Personalizado', 'noc-functions' ),
			'not_shown'  => esc_html__( 'No mostrar', 'noc-functions' ),
		),
	) );


	$cmb->add_field( array(
		'name' => esc_html__( 'Porcentaje de financiamiento', 'noc-functions' ),
		'desc' => esc_html__( '%', 'noc-functions' ),
		'id'   => $prefix . 'financing-percentage',
		'type' => 'text_small',
		// 'repeatable' => true,
		// 'column' => array(
		// 	'name'     => esc_html__( 'Column Title', 'noc-functions' ), // Set the admin column title
		// 	'position' => 2, // Set as the second column.
		// );
		// 'display_cb' => 'mro_cit_demo_display_text_small_column', // Output the display of the column values through a callback.
		'attributes' => array(
			'type' => 'number',
			'pattern' => '\d*',
			'data-conditional-id'    => $prefix . 'financing_options',
			'data-conditional-value' => 'percentage',
		),
		// 'sanitization_cb' => 'absint',
	 //    'escape_cb'       => 'absint',
	) );

	$cmb->add_field( array(
		'name'       => esc_html__( 'Personalizado', 'noc-functions' ),
		// 'desc'       => esc_html__( 'field description (optional)', 'noc-functions' ),
		'id'         => $prefix . 'financing_custom',
		'type'       => 'text',
		// 'sanitization_cb' => 'my_custom_sanitization', // custom sanitization callback parameter
		// 'escape_cb'       => 'my_custom_escaping',  // custom escaping callback parameter
		// 'on_front'        => false, // Optionally designate a field to wp-admin only
		// 'repeatable'      => true,
		// 'column'          => true, // Display field value in the admin post-listing columns
		'attributes' => array(
			// 'required'               => true, // Will be required only if visible.
			'data-conditional-id'    => $prefix . 'financing_options',
			'data-conditional-value' => 'custom',
		),
	) );