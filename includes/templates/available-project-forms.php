<?php

// Current user
$user_id = get_current_user_id();

/**
 * Depending on your setup, check if the user has permissions to edit_posts
 */
if ( current_user_can( 'edit_projects' ) ) {

	// String with select options for project types
	$project_types_options = '';
	$type_query = new WP_Term_Query( array(
		'taxonomy' 		=> 'noc_type',
		'hide_empty'	=> false,
		// 'get'			=> 'all',
	) );

	if ( ! empty( $type_query->terms ) ) {
	    foreach ( $type_query->terms as $term ) {
	        $project_types_options .= '<option value="' . $term->slug . '">' . $term->name . '</option>';
	    }
	}

	// Loop through plans
	$plan_query = new WP_Term_Query( array(
		'taxonomy' 		=> 'noc_plan',
		'hide_empty'	=> false,
		// 'get'			=> 'all',
	) );

	// TODO: grab page url for page for non js

	if ( ! empty( $plan_query->terms ) ) { ?>

	    <div id="available-projects">

	    <?php foreach ( $plan_query->terms as $term ) {

	    	$nonce = wp_create_nonce("load_project_form_nonce");
	    	?>

	    	<div class="available-projects-row">

	    		<div class="project-plan-name">
	    			<h3><?php echo $term->name; ?></h3>
	    		</div>

	    		<div class="project-availability">[disponibilidad]</div>

	    		<div class="project-form">
		    		<form data-plan="<?php echo $term->slug; ?>" data-project-type="" data-nonce="<?php echo $nonce; ?>" class="load-project-form" action="/anadir-proyecto-torres/" method="post">
		    			<input type="hidden" name="nonce" value="<?php echo $nonce; ?>">
		    			<input type="hidden" name="plan" value="<?php echo $term->slug; ?>">
		    			<select class="select-project-type" name="project-type">
							<option value="" selected="selected">Escoger tipo de proyecto</option>
							<?php echo $project_types_options; ?>
						</select>
						<input class="load-form-button" type="submit" value="Crear proyecto">
					</form>
					<!-- <a href="#" data-plan="<?php echo $term->slug; ?>" data-project-type="" data-nonce="<?php echo $nonce; ?>" class="btn load-project-form">Crear proyecto</a> -->
	    		</div>

	    	</div><!-- .available-projects-row -->

	    <?php } ?>

	    </div><!-- #available-project-forms -->

	    <div id="create-project-form"></div><!-- #create-project-form -->

	<?php }
}

