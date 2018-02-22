<?php

	$cmb->add_field( array(
		'name' => __( 'Apartment sizes', 'noc-functions' ),
		// 'desc' => __( 'Square meters', 'noc-functions' ),
		'id'   => $prefix . 'apartment_sizes',
		'type' => 'text',
		'repeatable'  => true,
		'attributes' => array(
			// 'type' => 'number',
			// 'pattern' => '\d*',
			// 'placeholder' => '1',
			// 'data-conditional-id' => $prefix . 'apartment_storage',
			// Works too: 'data-conditional-value' => 'on'.
		),
		'tab'  => 'description',
		'render_row_cb' => array( 'CMB2_Tabs', 'tabs_render_row_cb' ),
		// 'sanitization_cb' => 'absint',
        // 'escape_cb'       => 'absint',
	) );

	$cmb->add_field( array(
		'name' => __( 'Parking spaces per unit', 'noc-functions' ),
		// 'desc' => __( 'Numbers only: 00000000', 'noc-functions' ),
		'id'   => $prefix . 'parking',
		'type' => 'text',
		'attributes' => array(
			'type' => 'number',
			'pattern' => '\d*',
			'placeholder' => '1',
		),
		'tab'  => 'description',
		'render_row_cb' => array( 'CMB2_Tabs', 'tabs_render_row_cb' ),
		'sanitization_cb' => 'absint',
        // 'escape_cb'       => 'absint',
	) );

	$cmb->add_field( array(
		'name' => __( 'Storage unit', 'noc-functions' ),
		// 'desc' => __( 'Numbers only: 00000000', 'noc-functions' ),
		'id'   => $prefix . 'apartment_storage',
		'type' => 'checkbox',
		'tab'  => 'description',
		'render_row_cb' => array( 'CMB2_Tabs', 'tabs_render_row_cb' ),
	) );

	$cmb->add_field( array(
		'name' => __( 'Storage unit size', 'noc-functions' ),
		'desc' => __( 'Metros cuadrados', 'noc-functions' ),
		'id'   => $prefix . 'apartment_storage_size',
		'type' => 'text',
		'attributes' => array(
			// 'type' => 'number',
			// 'pattern' => '\d*',
			// 'placeholder' => '1',
			'data-conditional-id' => $prefix . 'apartment_storage',
			// Works too: 'data-conditional-value' => 'on'.
		),
		'tab'  => 'description',
		'render_row_cb' => array( 'CMB2_Tabs', 'tabs_render_row_cb' ),
		// 'sanitization_cb' => 'absint',
        // 'escape_cb'       => 'absint',
	) );
