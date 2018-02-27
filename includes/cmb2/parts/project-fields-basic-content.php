<?php

    $cmb->add_field( array(
        'name' => esc_html__( 'Nombre del proyecto', 'noc-functions' ),
        'id'   => 'submitted_post_title',
        'type' => 'text',
        'tab'       => 'description',
        'render_row_cb' => array( 'CMB2_Tabs', 'tabs_render_row_cb' ),
    ) );

	$cmb->add_field( array(
		'name' => esc_html__( 'Short description', 'noc-functions' ),
		'desc' => esc_html__( '180 caracteres. Aparece en los tableros.', 'noc-functions' ),
		'id'   => 'submitted_post_excerpt',
		'type' => 'textarea_small',
		'tab'  		=> 'description',
		'render_row_cb' => array( 'CMB2_Tabs', 'tabs_render_row_cb' ),
	) );

    $cmb->add_field( array(
        'name'    => __( 'Long description', 'noc-functions' ),
        'id'      => 'submitted_post_content',
        'desc' => esc_html__( 'Aparece en la página individual del proyecto.', 'noc-functions' ),
        'type'    => 'wysiwyg',
        'options' => array(
            'textarea_rows' => 12,
            'media_buttons' => false,
        ),
        'tab'  		=> 'description',
		'render_row_cb' => array( 'CMB2_Tabs', 'tabs_render_row_cb' ),
    ) );

    $cmb->add_field( array(
        'name'           => esc_html__( 'Seleccionar etapa', 'noc-functions' ),
        // 'desc'           => 'Description Goes Here',
        'id'             => $prefix . 'stage_tax',
        'taxonomy'       => 'noc_stage', //Enter Taxonomy Slug
        'type'           => 'taxonomy_radio',
        'remove_default' => 'true', // Removes the default metabox provided by WP core. Pending release as of Aug-10-16,
        'tab'       => 'description',
        'render_row_cb' => array( 'CMB2_Tabs', 'tabs_render_row_cb' ),
    ) );