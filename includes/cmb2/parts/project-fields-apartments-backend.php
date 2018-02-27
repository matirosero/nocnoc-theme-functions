<?php

	$cmb->add_field( array(
		'name' => __( 'Apartment sizes', 'noc-functions' ),
		// 'desc' => __( 'Square meters', 'noc-functions' ),
		'id'   => $prefix . 'apartment_sizes',
		'type' => 'text',
		'repeatable'  => true,
		'attributes' => array(
			'data-conditional-id' => $prefix . 'type_tax',
			'data-conditional-value' => 'torres',
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
			'data-conditional-id' => $prefix . 'type_tax',
			'data-conditional-value' => 'torres',
		),
		'tab'  => 'description',
		'render_row_cb' => array( 'CMB2_Tabs', 'tabs_render_row_cb' ),
		'sanitization_cb' => 'absint',
        // 'escape_cb'       => 'absint',
	) );