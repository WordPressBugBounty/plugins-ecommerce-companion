<?php
if ( ! defined( 'ABSPATH' ) ) exit;
function electromix_filter_products_one_setting( $wp_customize ) {
$selective_refresh = isset( $wp_customize->selective_refresh ) ? 'postMessage' : 'refresh';
	/*=========================================
	Modern Product  Section
	=========================================*/
	$wp_customize->add_section(
		'filter_products_one_setting', array(
			'title' => esc_html__( 'Filter Product One', 'ecommerce-companion' ),
			'panel' => 'electromix_frontpage_sections',
		)
	);
	
	$wp_customize->add_setting( 
		'filter_products_one_hs' , 
			array(
			'capability' => 'edit_theme_options',
			'sanitize_callback' => 'electromix_sanitize_checkbox',
			'default' => '1'
		) 
	);

	$wp_customize->add_control(
	'filter_products_one_hs', 
		array(
			'label'	      => esc_html__( 'Show/Hide', 'ecommerce-companion' ),
			'section'     => 'filter_products_one_setting',
			'type'        => 'checkbox'
		) 
	);	
	
	
	/*=========================================
	Header
	=========================================*/
	$wp_customize->add_setting(
		'filter_products_one_header'
			,array(
			'capability'     	=> 'edit_theme_options',
			'sanitize_callback' => 'electromix_sanitize_text',
			'priority' => 1,
		)
	);

	$wp_customize->add_control(
	'filter_products_one_header',
		array(
			'type' => 'hidden',
			'label' => __('Header','ecommerce-companion'),
			'section' => 'filter_products_one_setting',
		)
	);
	
	$wp_customize->add_setting(
		'filter_one_section_icon',
		array(
			'default' => 'fa-list-ul',
			'sanitize_callback' => 'sanitize_text_field',
			'capability' => 'edit_theme_options',
		)
	);	

	$wp_customize->add_control(new Electromix_Icon_Picker_Control($wp_customize, 
		'filter_one_section_icon',
		array(
			'label'   		=> __('Icon','ecommerce-companion'),
			'section' 		=> 'filter_products_one_setting',
			'iconset' => 'fa',
			
		))  
	);
		
	//  Title // 
	$wp_customize->add_setting(
    	'filter_products_one_ttl',
    	array(
	        'default'			=> __('All Products','ecommerce-companion'),
			'capability'     	=> 'edit_theme_options',
			'sanitize_callback' => 'electromix_sanitize_html',
			'transport'         => $selective_refresh,
			'priority' => 2,
		)
	);	
	
	$wp_customize->add_control( 
		'filter_products_one_ttl',
		array(
		    'label'   => __('Title','ecommerce-companion'),
		    'section' => 'filter_products_one_setting',
			'type'           => 'text',
		)  
	);	
	
	
	//Timer	
	$wp_customize->add_setting(
		'filter_products_one_time_head'
			,array(
			'capability'     	=> 'edit_theme_options',
			'sanitize_callback' => 'electromix_sanitize_text',
		)
	);

	$wp_customize->add_control(
	'filter_products_one_time_head',
		array(
			'type' => 'hidden',
			'label' => __('Time','ecommerce-companion'),
			'section' => 'filter_products_one_setting',
		)
	);
	
	$wp_customize->add_setting(
    	'filter_products_one_date',
    	array(
	        'default'			=> __('2030-12-31','ecommerce-companion'),
			'capability'     	=> 'edit_theme_options',
			'sanitize_callback' => 'electromix_sanitize_html',
		)
	);	
	$wp_customize->add_control( 
		'filter_products_one_date',
		array(
		    'section' => 'filter_products_one_setting',
			'type'     => 'date',
		)  
	);
	
	$wp_customize->add_setting(
    	'filter_products_one_time',
    	array(
	        'default'			=> __('00:00','ecommerce-companion'),
			'capability'     	=> 'edit_theme_options',
			'sanitize_callback' => 'electromix_sanitize_html',
		)
	);
	
	$wp_customize->add_control( 
		'filter_products_one_time',
		array(
		    'section' => 'filter_products_one_setting',
			'type'     => 'time',
		)  
	);
	
	
	
	/*=========================================
	Content
	=========================================*/
	$wp_customize->add_setting(
		'filter_products_one_content'
			,array(
			'capability'     	=> 'edit_theme_options',
			'sanitize_callback' => 'electromix_sanitize_text',
			'priority' => 3,
		)
	);

	$wp_customize->add_control(
	'filter_products_one_content',
		array(
			'type' => 'hidden',
			'label' => __('Content','ecommerce-companion'),
			'section' => 'filter_products_one_setting',
		)
	);
	
	
	// Hide/ShowTab
	$wp_customize->add_setting(
		'hs_filter_products_one_tab'
			,array(
			'default'     	=> '1',
			'capability'     	=> 'edit_theme_options',
			'sanitize_callback' => 'electromix_sanitize_checkbox',
			'priority' => 4,
		)
	);

	$wp_customize->add_control(
	'hs_filter_products_one_tab',
		array(
			'type' => 'checkbox',
			'label' => __('Hide/ShowTab','ecommerce-companion'),
			'section' => 'filter_products_one_setting',
		)
	);
	
	// Product Category
	$wp_customize->add_setting(
    'filter_products_one_cat',
		array(
		'capability' => 'edit_theme_options',
		'priority' => 5,
		)
	);	
	$wp_customize->add_control( new Electromix_Product_Category_Control( $wp_customize, 
	'filter_products_one_cat', 
		array(
		'label'   => __('Select category','ecommerce-companion'),
		'section' => 'filter_products_one_setting',
		) 
	) );
	
	// No. of Products Display
	if ( class_exists( 'Electromix_Customizer_Range_Control' ) ) {
		$wp_customize->add_setting(
			'filter_products_one_num',
			array(
				'default' => '20',
				'capability'     	=> 'edit_theme_options',
				'sanitize_callback' => 'electromix_sanitize_range_value',
				'priority' => 6,
			)
		);
		$wp_customize->add_control( 
		new Electromix_Customizer_Range_Control( $wp_customize, 'filter_products_one_num', 
			array(
				'label'      => __( 'No of Products Display', 'ecommerce-companion' ),
				'section'  => 'filter_products_one_setting',
				 'media_query'   => false,
					'input_attr'    => array(
						'desktop' => array(
							'min'    => 1,
							'max'    => 500,
							'step'   => 1,
							'default_value' => 20,
						),
					),
			) ) 
		);
	}
	

}

add_action( 'customize_register', 'electromix_filter_products_one_setting' );

// selective refresh
function electromix_filter_product_one_section_partials( $wp_customize ){
	
	// filter_products_one_ttl
	$wp_customize->selective_refresh->add_partial( 'filter_products_one_ttl', array(
		'selector'            => '#filter-product-one .main-title h2',
		'settings'            => 'filter_products_one_ttl',
		'render_callback'  => 'electromix_filter_product_one_ttl_render_callback',
	) );
	
	}

add_action( 'customize_register', 'electromix_filter_product_one_section_partials' );

// category_product_one_ttl
function electromix_filter_product_one_ttl_render_callback() {
	return get_theme_mod( 'filter_products_one_ttl' );
}