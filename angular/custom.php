<?php 

function test_ajax()
{
	header( "content-type: applications/json" );
	$query = new WP_Query( array( 'numberposts' => 10, 'order'=> 'DESC', 'orderby' => 'title', 'post_type' => 'post', 'thumbnail' => 'post' ) );
	echo json_encode($query->get_posts());
	die();
}
add_action("wp_ajax_nopriv_test_ajax", "test_ajax");
add_action("wp_ajax_test_ajax", "test_ajax");

