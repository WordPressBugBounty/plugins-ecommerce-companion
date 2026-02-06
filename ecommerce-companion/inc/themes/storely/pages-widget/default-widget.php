<?php
if ( ! defined( 'ABSPATH' ) ) exit;
$ecommerce_companion_activate = array(
        'storely-sidebar-primary' => array(
            'search-1',
            'recent-posts-1',
            'archives-1',
        ),
		'storely-footer-widget' => array(
            'categories-1',
            'archives-1',
			'search-1',
        )
    );
    /* the default titles will appear */
		 update_option('widget_categories', array(
			1 => array('title' => 'Categories'), 
			2 => array('title' => 'Categories')));

		update_option('widget_archives', array(
			1 => array('title' => 'Archives'), 
			2 => array('title' => 'Archives')));
			
		update_option('widget_search', array(
			1 => array('title' => 'Search'), 
			2 => array('title' => 'Search')));	
		
    update_option('sidebars_widgets',  $ecommerce_companion_activate);
	$ecommerce_companion_MediaId = get_option('storely_media_id');
	set_theme_mod( 'custom_logo', $ecommerce_companion_MediaId[0] );
?>