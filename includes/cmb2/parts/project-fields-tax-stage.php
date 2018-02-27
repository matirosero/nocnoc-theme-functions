<?php

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