<?php 
/** 
* Custom functions
*/


// function enable_ajax_functionality()
// {

// 	wp_localize_script( 'ajaxify', 'ajaxify_function', array('ajaxurl' => admin_url('admin-ajax.php') ) );

// }
// add_action('template_redirect', 'enable_ajax_funtionality');

function test_ajax()
{
	header( "content-type: applications/json" );
	$query = new WP_Query();
	echo json_encode($query->get_posts());
	die();
}
add_action("wp_ajax_nopriv_test_ajax", "test_ajax");
add_action("wp_ajax_test_ajax", "test_ajax");

