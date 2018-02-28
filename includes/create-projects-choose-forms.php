<?php

add_shortcode( 'list-available-forms', 'noc_do_list_available_forms_shortcode' );
/**
 * Shortcode to display a CMB2 form for a post ID.
 * @param  array  $atts Shortcode attributes
 * @return string       Form HTML markup
 */
function noc_do_list_available_forms_shortcode( $atts = array() ) {
	extract( shortcode_atts( array(
		// 'type' => 'torres',
		// 'package' => 'basico'
	), $atts ) );

	// Current user
    $user_id = get_current_user_id();

	/**
	 * Depending on your setup, check if the user has permissions to edit_posts
	 */
	if ( ! current_user_can( 'edit_projects' ) ) {
		return __( 'You do not have permissions to add new projects.', 'noc-functions' );
	}

	$project_types_options = '';
	$term_query = new WP_Term_Query( array( 
		'taxonomy' 		=> 'noc_type',
		'hide_empty'	=> false,
		// 'get'			=> 'all',
	) );

	// var_dump($term_query->terms);

	if ( ! empty( $term_query->terms ) ) {
	    foreach ( $term_query->terms as $term ) {
	        $project_types_options .= '<option value="' . $term->slug . '">' . $term->name . '</option>';
	    }
	}

	$output = '';

	$output .= '<div id="available-project-forms">
		<h2>Creación de proyectos</h2>
		<p>Desde aquí puede crear proyectos de acuerdo a los paquetes que ha adquirido</p>';

	$output .= '<div class="available-plan-row">
		<form>';

	$output .= '<h3>Plan Básico</h3>';

	$output .= '<div class="">
		<select class="select_project_type" name="select_project_type" id="select_project_type">
			<option value="" selected="selected">Ninguno</option>';

	$output .= $project_types_options;

	$output .= '</select>
	</div>';

	$output .= '<div class=""><input type="submit" value="Crear proyecto"></div>';

	$output .= '</div>';	

	$output .= '</form></div>';

	return $output;
}