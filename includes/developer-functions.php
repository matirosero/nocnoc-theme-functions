<?php

add_action("wp_ajax_noc_get_new_project_form", "noc_get_new_project_form");
add_action("wp_ajax_nopriv_noc_get_new_project_form", "noc_must_login");

function noc_get_new_project_form() {

	if ( !wp_verify_nonce( $_REQUEST['nonce'], "load_project_form_nonce")) {
	  	exit("No naughty business please");
	}

	$plan = $_REQUEST["plan"];
	$type = $_REQUEST["type"];


   	// $result['type'] = "success";
    // $result['content'] = do_shortcode( '[new-project-form type="'.$type.'" plan="'.$plan.'"]' );

   	// if(!empty($_SERVER['HTTP_X_REQUESTED_WITH']) && strtolower($_SERVER['HTTP_X_REQUESTED_WITH']) == 'xmlhttprequest') {
    //   	$result = json_encode($result);
    //   	echo $result;
   	// } else {
    //   	// header("Location: ".$_SERVER["HTTP_REFERER"]);
    //   	return $result['content'];
   	// }

   	die();

}

