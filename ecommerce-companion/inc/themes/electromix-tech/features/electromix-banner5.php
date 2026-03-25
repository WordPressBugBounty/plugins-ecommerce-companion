<?php
if ( ! defined( 'ABSPATH' ) ) exit;
function electromix_banner5_setting( $wp_customize ) {
$selective_refresh = isset( $wp_customize->selective_refresh ) ? 'postMessage' : 'refresh';
	/*=========================================
	Banner Section
	=========================================*/
	$wp_customize->add_section(
		'banner5_setting', array(
			'title' => esc_html__( 'Banner Five Section', 'ecommerce-companion' ),
			'panel' => 'electromix_frontpage_sections',
		)
	);
	
	$wp_customize->add_setting( 
		'banner5_hs' , 
			array(
			'capability' => 'edit_theme_options',
			'sanitize_callback' => 'electromix_sanitize_checkbox',
			'default' => '1'
		) 
	);

	$wp_customize->add_control(
	'banner5_hs', 
		array(
			'label'	      => esc_html__( 'Show/Hide', 'ecommerce-companion' ),
			'section'     => 'banner5_setting',
			'type'        => 'checkbox'
		) 
	);

	// Banner content Section // 
	$wp_customize->add_setting(
		'banner5_content_head'
			,array(
			'capability'     	=> 'edit_theme_options',
			'sanitize_callback' => 'electromix_sanitize_text',
			'priority' => 7,
		)
	);

	$wp_customize->add_control(
	'banner5_content_head',
		array(
			'type' => 'hidden',
			'label' => __('Left Content','ecommerce-companion'),
			'section' => 'banner5_setting',
		)
	);
	
	//  Title // 
	$wp_customize->add_setting(
    	'banner_left_offer',
    	array(
	        'default'			=> __('20% OFF','ecommerce-companion'),
			'capability'     	=> 'edit_theme_options',
			'sanitize_callback' => 'electromix_sanitize_html',
			'priority' => 2,
		)
	);	
	
	$wp_customize->add_control( 
		'banner_left_offer',
		array(
		    'label'   => __('Offer Text','ecommerce-companion'),
		    'section' => 'banner5_setting',
			'type'    => 'text',
		)  
	);
	
	$wp_customize->add_setting(
    	'banner_left_title',
    	array(
	        'default'			=> __('Irusu Play VR Ultra VR Headset 3D Virtual Reality','ecommerce-companion'),
			'capability'     	=> 'edit_theme_options',
			'sanitize_callback' => 'electromix_sanitize_html',
			'priority' => 2,
		)
	);	
	
	$wp_customize->add_control( 
		'banner_left_title',
		array(
		    'label'   => __('Title','ecommerce-companion'),
		    'section' => 'banner5_setting',
			'type'    => 'text',
		)  
	);
	
	$wp_customize->add_setting(
    	'banner_left_subtitle_one',
    	array(
	        'default'			=> __('STARTING AT','ecommerce-companion'),
			'capability'     	=> 'edit_theme_options',
			'sanitize_callback' => 'electromix_sanitize_html',
			'priority' => 2,
		)
	);	
	
	$wp_customize->add_control( 
		'banner_left_subtitle_one',
		array(
		    'label'   => __('Title','ecommerce-companion'),
		    'section' => 'banner5_setting',
			'type'    => 'text',
		)  
	);
	
	$wp_customize->add_setting(
    	'banner_left_subtitle_two',
    	array(
	        'default'			=> __('$999.00','ecommerce-companion'),
			'capability'     	=> 'edit_theme_options',
			'sanitize_callback' => 'electromix_sanitize_html',
			'priority' => 2,
		)
	);	
	
	$wp_customize->add_control( 
		'banner_left_subtitle_two',
		array(
		    'label'   => __('Title','ecommerce-companion'),
		    'section' => 'banner5_setting',
			'type'    => 'text',
		)  
	);
	
	$wp_customize->add_setting(
    	'banner_left_button_label',
    	array(
	        'default'			=> __('Shop Now','ecommerce-companion'),
			'capability'     	=> 'edit_theme_options',
			'sanitize_callback' => 'electromix_sanitize_html',
			'priority' => 2,
		)
	);	
	
	$wp_customize->add_control( 
		'banner_left_button_label',
		array(
		    'label'   => __('Button Label','ecommerce-companion'),
		    'section' => 'banner5_setting',
			'type'    => 'text',
		)  
	);
	
	$wp_customize->add_setting(
    	'banner_left_button_link',
    	array(
			'capability'     	=> 'edit_theme_options',
			'sanitize_callback' => 'electromix_sanitize_url',
			'priority' => 2,
		)
	);	
	
	$wp_customize->add_control( 
		'banner_left_button_link',
		array(
		    'label'   => __('Button Link','ecommerce-companion'),
		    'section' => 'banner5_setting',
			'type'    => 'text',
		)  
	);
		
	$wp_customize->add_setting(
    	'banner_left_button_newtab',
    	array(
	        'default'			=> __('yes','ecommerce-companion'),
			'capability'     	=> 'edit_theme_options',
			'sanitize_callback' => 'electromix_sanitize_html',
			'priority' => 2,
		)
	);	
	
	$wp_customize->add_control( 
		'banner_left_button_newtab',
		array(
		    'label'   => __('Open Link In New Tab ?','ecommerce-companion'),
		    'section' => 'banner5_setting',
			'type'    => 'checkbox',
		)  
	);
		
	$wp_customize->add_setting(
    	'banner_left_button_nofollow',
    	array(
	        'default'			=> __('yes','ecommerce-companion'),
			'capability'     	=> 'edit_theme_options',
			'sanitize_callback' => 'electromix_sanitize_html',
			'priority' => 2,
		)
	);	
	
	$wp_customize->add_control( 
		'banner_left_button_nofollow',
		array(
		    'label'   => __('Add "nofollow" To Link','ecommerce-companion'),
		    'section' => 'banner5_setting',
			'type'    => 'checkbox',
		)  
	);
	
	/* Background Images */
	$wp_customize->add_setting( 
		'banner_left_bg_img' , 
		array(
			'default'			=> esc_url(ECOMMERCE_COMP_PLUGIN_URL . 'inc/themes/electromix-tech/assets/images/banner/5/img_1.png'),
			'capability'     	=> 'edit_theme_options',
			'sanitize_callback' => 'electromix_sanitize_url',
		) 
	);

	$wp_customize->add_control( new WP_Customize_Image_Control( $wp_customize , 'banner_left_bg_img' ,
		array(
			'label'          => esc_html__( 'Background Image', 'ecommerce-companion'),
			'section'        => 'banner5_setting'
		) 
	));

	// Banner Right content Section // 	
	$electromix_content_box = [
		'top' => ['off' =>'20% OFF', 'ttl' => 'Samsung Tab s9', 'sbttl_1' => 'STARTING AT', 'sbttl_2' => '$919.00', 'btn_lbl' => 'Shop Now', 'newtab' => 'yes', 'nofollow' => 'yes', 'img' => ECOMMERCE_COMP_PLUGIN_URL . 'inc/themes/electromix-tech/assets/images/banner/5/img_2.png' ],
		'bottom' => ['off' =>'15% OFF', 'ttl' => 'Full HD Camera', 'sbttl_1' => 'STARTING AT', 'sbttl_2' => '$199.00', 'btn_lbl' => 'Shop Now', 'newtab' => 'yes', 'nofollow' => 'yes', 'img' => ECOMMERCE_COMP_PLUGIN_URL . 'inc/themes/electromix-tech/assets/images/banner/5/img_3.png' ]
	];
	
	foreach($electromix_content_box as $electromix_key => $electromix_value) {
	
	$wp_customize->add_setting(
		'banner5_content'.$electromix_key.'_head'
			,array(
			'capability'     	=> 'edit_theme_options',
			'sanitize_callback' => 'electromix_sanitize_text',
			'priority' => 7,
		)
	);

	$wp_customize->add_control(
	'banner5_content'.$electromix_key.'_head',
		array(
			'type' => 'hidden',			
			'label' => sprintf(/* Translators: %s:Heading Text */__('Right %s Content','ecommerce-companion'),ucfirst($electromix_key)),
			'section' => 'banner5_setting',
		)
	);
	//  Title // 
	$wp_customize->add_setting(
    	'banner_right_'.$electromix_key.'_offer',
    	array(
	        'default'			=> $electromix_value['off'],
			'capability'     	=> 'edit_theme_options',
			'sanitize_callback' => 'electromix_sanitize_html',
			'priority' => 2,
		)
	);	
	
	$wp_customize->add_control( 
		'banner_right_'.$electromix_key.'_offer',
		array(
		    'label'   => __('Offer Text','ecommerce-companion'),
		    'section' => 'banner5_setting',
			'type'    => 'text',
		)  
	);
	
	$wp_customize->add_setting(
    	'banner_right_'.$electromix_key.'_title',
    	array(
	        'default'			=> $electromix_value['ttl'],
			'capability'     	=> 'edit_theme_options',
			'sanitize_callback' => 'electromix_sanitize_html',
			'priority' => 2,
		)
	);	
	
	$wp_customize->add_control( 
		'banner_right_'.$electromix_key.'_title',
		array(
		    'label'   => __('Title','ecommerce-companion'),
		    'section' => 'banner5_setting',
			'type'    => 'text',
		)  
	);
	
	$wp_customize->add_setting(
    	'banner_right_'.$electromix_key.'_subtitle_one',
    	array(
	        'default'			=> $electromix_value['sbttl_1'],
			'capability'     	=> 'edit_theme_options',
			'sanitize_callback' => 'electromix_sanitize_html',
			'priority' => 2,
		)
	);	
	
	$wp_customize->add_control( 
		'banner_right_'.$electromix_key.'_subtitle_one',
		array(
		    'label'   => __('Subtitle One','ecommerce-companion'),
		    'section' => 'banner5_setting',
			'type'    => 'text',
		)  
	);
	
	$wp_customize->add_setting(
    	'banner_right_'.$electromix_key.'_subtitle_two',
    	array(
	        'default'			=> $electromix_value['sbttl_2'],
			'capability'     	=> 'edit_theme_options',
			'sanitize_callback' => 'electromix_sanitize_html',
			'priority' => 2,
		)
	);	
	
	$wp_customize->add_control( 
		'banner_right_'.$electromix_key.'_subtitle_two',
		array(
		    'label'   => __('Subtitle Two','ecommerce-companion'),
		    'section' => 'banner5_setting',
			'type'    => 'text',
		)  
	);
	
	$wp_customize->add_setting(
    	'banner_right_'.$electromix_key.'_button_label',
    	array(
	        'default'			=> $electromix_value['btn_lbl'],
			'capability'     	=> 'edit_theme_options',
			'sanitize_callback' => 'electromix_sanitize_html',
			'priority' => 2,
		)
	);	
	
	$wp_customize->add_control( 
		'banner_right_'.$electromix_key.'_button_label',
		array(
		    'label'   => __('Button Label','ecommerce-companion'),
		    'section' => 'banner5_setting',
			'type'    => 'text',
		)  
	);
	
	$wp_customize->add_setting(
    	'banner_right_'.$electromix_key.'_button_link',
    	array(
			'capability'     	=> 'edit_theme_options',
			'sanitize_callback' => 'electromix_sanitize_url',
			'priority' => 2,
		)
	);	
	
	$wp_customize->add_control( 
		'banner_right_'.$electromix_key.'_button_link',
		array(
		    'label'   => __('Button Link','ecommerce-companion'),
		    'section' => 'banner5_setting',
			'type'    => 'text',
		)  
	);
		
	$wp_customize->add_setting(
    	'banner_right_'.$electromix_key.'_button_newtab',
    	array(
	        'default'			=> $electromix_value['newtab'],
			'capability'     	=> 'edit_theme_options',
			'sanitize_callback' => 'electromix_sanitize_html',
			'priority' => 2,
		)
	);	
	
	$wp_customize->add_control( 
		'banner_right_'.$electromix_key.'_button_newtab',
		array(
		    'label'   => __('Open Link In New Tab ?','ecommerce-companion'),
		    'section' => 'banner5_setting',
			'type'    => 'checkbox',
		)  
	);
		
	$wp_customize->add_setting(
    	'banner_right_'.$electromix_key.'_button_nofollow',
    	array(
	        'default'			=> $electromix_value['nofollow'],
			'capability'     	=> 'edit_theme_options',
			'sanitize_callback' => 'electromix_sanitize_html',
			'priority' => 2,
		)
	);	
	
	$wp_customize->add_control( 
		'banner_right_'.$electromix_key.'_button_nofollow',
		array(
		    'label'   => __('Add "nofollow" To Link','ecommerce-companion'),
		    'section' => 'banner5_setting',
			'type'    => 'checkbox',
		)  
	);
	
	/* Background Images */
	$wp_customize->add_setting( 
		'banner_right_'.$electromix_key.'_bg_img' , 
		array(
			'default'			=> $electromix_value['img'],
			'capability'     	=> 'edit_theme_options',
			'sanitize_callback' => 'electromix_sanitize_url',
		) 
	);

	$wp_customize->add_control( new WP_Customize_Image_Control( $wp_customize , 'banner_right_'.$electromix_key.'_bg_img' ,
		array(
			'label'          => esc_html__( 'Image', 'ecommerce-companion'),
			'section'        => 'banner5_setting'
		) 
	));
	}
}

add_action( 'customize_register', 'electromix_banner5_setting' );

//selective refresh
function electromix_banner5_section_partials( $wp_customize ){	
	
	// banner content
	$wp_customize->selective_refresh->add_partial( 'banner_left_title', array(
		'selector'            => '#banner-five .banner-content',
		'settings'            => 'banner_left_title',
		// 'render_callback'  => 'electromix_banner5_render_callback',
	) );
	
}
add_action( 'customize_register', 'electromix_banner5_section_partials' );

// category_product_one_ttl
function electromix_banner5_render_callback() {
	return get_theme_mod( 'banner_left_title' );
}