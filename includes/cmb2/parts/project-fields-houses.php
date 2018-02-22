<?php


	$cmb->add_field( array(
		'name' => esc_html__( 'Modelos de casa', 'noc-functions' ),
		'desc' => esc_html__( 'Describa cada casa: tamaño, número de dormitorios, etc.', 'noc-functions' ),
		'id'   => $prefix . 'house_models',
		'type' => 'textarea_small',
		'repeatable'  => true,
		'tab'  		=> 'description',
		'render_row_cb' => array( 'CMB2_Tabs', 'tabs_render_row_cb' ),
	) );


/*
	$group_field_id = $cmb->add_field( array(
		'id'          => $prefix . 'house_models',
		'type'        => 'group',
		'description' => esc_html__( 'Modelos de casas', 'noc-functions' ),
		'options'     => array(
			'group_title'   => esc_html__( 'Modelo {#}', 'noc-functions' ), // {#} gets replaced by row number
			'add_button'    => esc_html__( 'Add Another Entry', 'noc-functions' ),
			'remove_button' => esc_html__( 'Remove Entry', 'noc-functions' ),
			'sortable'      => true, // beta
			// 'closed'     => true, // true to have the groups closed by default
			'tab'  => 'description',
			'render_row_cb' => array( 'CMB2_Tabs', 'tabs_render_row_cb' ),
		),
	) );


	$cmb->add_group_field( $group_field_id, array(
		'name' => __( 'House size', 'noc-functions' ),
		// 'desc' => __( 'Square meters', 'noc-functions' ),
		'id'   => 'house_size',
		'type' => 'text',
		// 'repeatable'  => true,
		'attributes' => array(
			// 'type' => 'number',
			// 'pattern' => '\d*',
			// 'placeholder' => '1',
			// 'data-conditional-id' => $prefix . 'apartment_storage',
			// Works too: 'data-conditional-value' => 'on'.
		),
		// 'tab'  => 'description',
		// 'render_row_cb' => array( 'CMB2_Tabs', 'tabs_render_row_cb' ),
		// 'sanitization_cb' => 'absint',
        // 'escape_cb'       => 'absint',
	) );

	$cmb->add_group_field( $group_field_id, array(
		'name' => __( 'Bedrooms', 'noc-functions' ),
		// 'desc' => __( 'Square meters', 'noc-functions' ),
		'id'   => 'bedrooms',
		'type' => 'text',
		// 'repeatable'  => true,
		'attributes' => array(
			'type' => 'number',
			'pattern' => '\d*',
			'placeholder' => '1',
			// 'data-conditional-id' => $prefix . 'apartment_storage',
			// Works too: 'data-conditional-value' => 'on'.
		),
		// 'tab'  => 'description',
		// 'render_row_cb' => array( 'CMB2_Tabs', 'tabs_render_row_cb' ),
		'sanitization_cb' => 'absint',
        // 'escape_cb'       => 'absint',
	) );

	$cmb->add_group_field( $group_field_id, array(
		'name' => __( 'Parking spaces', 'noc-functions' ),
		// 'desc' => __( 'Numbers only: 00000000', 'noc-functions' ),
		'id'   => 'parking',
		'type' => 'text',
		'attributes' => array(
			'type' => 'number',
			'pattern' => '\d*',
			'placeholder' => '1',
		),
		// 'tab'  => 'description',
		// 'render_row_cb' => array( 'CMB2_Tabs', 'tabs_render_row_cb' ),
		'sanitization_cb' => 'absint',
        // 'escape_cb'       => 'absint',
	) );
*/