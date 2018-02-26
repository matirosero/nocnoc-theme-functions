<?php

// TODO: limit choices

	$cmb->add_field( array(
		'name'           => 'Escoger tableros',
		// 'desc'           => 'Description Goes Here',
		'id'             => $prefix . 'board_tax',
		'taxonomy'       => 'noc_board', //Enter Taxonomy Slug
		'type'           => 'taxonomy_multicheck',
		'remove_default' => 'true', // Removes the default metabox provided by WP core. Pending release as of Aug-10-16,
        'tab'       => 'boards',
        'render_row_cb' => array( 'CMB2_Tabs', 'tabs_render_row_cb' ),
	) );