<?php
	$cmb->add_field( array(
		'name' => esc_html__( 'Logo del proyecto', 'noc-functions' ),
		'desc' => esc_html__( 'Upload an image or enter a URL.', 'noc-functions' ),
		'id'   => $prefix . 'logo',
		'type' => 'file',
	) );

	$cmb->add_field( array(
		'name' => esc_html__( 'Area', 'noc-functions' ),
		'desc' => esc_html__( 'En m2', 'noc-functions' ),
		'id'   => $prefix . 'area',
		'type' => 'text_small',
		'repeatable' => true,
		// 'column' => array(
		// 	'name'     => esc_html__( 'Column Title', 'noc-functions' ), // Set the admin column title
		// 	'position' => 2, // Set as the second column.
		// );
		// 'display_cb' => 'mro_cit_demo_display_text_small_column', // Output the display of the column values through a callback.
		'attributes' => array(
			'type' => 'number',
			'pattern' => '\d*',
		),
		//https://gist.github.com/jtsternberg/c09f5deb7d818d0d170b
		// 'sanitization_cb' => 'absint',
	    // 'escape_cb'       => 'absint',
	) );

	$cmb->add_field( array(
		'name' => esc_html__( 'Units', 'noc-functions' ),
		'desc' => esc_html__( 'Si es torre, es unidades por torre', 'noc-functions' ),
		'id'   => $prefix . 'units',
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
		),
	) );

	
	//Change to repeater with limit 
	//https://github.com/CMB2/CMB2-Snippet-Library/blob/master/javascript/limit-number-of-repeat-groups.php
	$cmb->add_field( array(
		'name' => esc_html__( 'Amenidades', 'noc-functions' ),
		// 'desc' => esc_html__( 'field description (optional)', 'noc-functions' ),
		'id'   => $prefix . 'amenities',
		'type' => 'textarea',
	) );

	//Change to repeater with limit 
	//https://github.com/CMB2/CMB2-Snippet-Library/blob/master/javascript/limit-number-of-repeat-groups.php
	$cmb->add_field( array(
		'name' => esc_html__( 'Facilidades', 'noc-functions' ),
		// 'desc' => esc_html__( 'field description (optional)', 'noc-functions' ),
		'id'   => $prefix . 'characteristics',
		'type' => 'textarea',
	) );


	$cmb->add_field( array(
		'name' => esc_html__( 'Parking spaces per unit*', 'noc-functions' ),
		'id'   => $prefix . 'parking',
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
		),
	) );