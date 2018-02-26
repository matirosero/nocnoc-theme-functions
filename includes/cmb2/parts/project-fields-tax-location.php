<?php

$cmb->add_field( array(
	'name'           => esc_html__( 'Seleccionar ubicación', 'noc-functions' ),
	// 'desc'           => 'Description Goes Here',
	'id'             => $prefix . 'location_tax',
	'taxonomy'       => 'noc_location', //Enter Taxonomy Slug
	'type'           => 'taxonomy_select',
	'remove_default' => 'true' // Removes the default metabox provided by WP core. Pending release as of Aug-10-16
) );