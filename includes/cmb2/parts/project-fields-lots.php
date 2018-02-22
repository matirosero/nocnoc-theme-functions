<?php

	$cmb->add_field( array(
		'name' => __( 'Lot sizes', 'noc-functions' ),
		// 'desc' => __( 'Square meters', 'noc-functions' ),
		'id'   => $prefix . 'lot_sizes',
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