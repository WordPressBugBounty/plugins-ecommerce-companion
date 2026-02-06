<?php
	if ( ! defined( 'ABSPATH' ) ) exit;
	//post status and options
	$post = array(
		  'comment_status' => 'closed',
		  'ping_status' =>  'closed' ,
		  'post_author' => 1,
		  'post_date' => gmdate('Y-m-d H:i:s'),
		  'post_name' => 'Home',
		  'post_status' => 'publish' ,
		  'post_title' => 'Home',
		  'post_type' => 'page',
	);  
	//insert page and save the id
	$ecommerce_companion_newvalue = wp_insert_post( $post, false );
	if ( $ecommerce_companion_newvalue && ! is_wp_error( $ecommerce_companion_newvalue ) ){
		update_post_meta( $ecommerce_companion_newvalue, '_wp_page_template', 'templates/template-homepage.php' );
		
		// Use a static front page
		$ecommerce_companion_array_of_objects = get_posts([
			'title' => 'Home',
			'post_type' => 'any',
		]);
		$page = $ecommerce_companion_array_of_objects[0];//Be sure you have an array with single post or page
		update_option( 'show_on_front', 'page' );
		update_option( 'page_on_front', $page->ID );		
	}
?>