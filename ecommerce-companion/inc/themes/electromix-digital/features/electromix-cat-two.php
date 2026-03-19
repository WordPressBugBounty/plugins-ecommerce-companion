<?php
if ( ! defined( 'ABSPATH' ) ) exit;
function electromix_category_product_two_setting( $wp_customize ) {
$selective_refresh = isset( $wp_customize->selective_refresh ) ? 'postMessage' : 'refresh';
	/*=========================================
	Category Product  Section
	=========================================*/
	$wp_customize->add_section(
		'category_product_two_setting', array(
			'title' => esc_html__( 'Category Product Section Two', 'ecommerce-companion' ),
			'panel' => 'electromix_frontpage_sections',
		)
	);	
	
	$wp_customize->add_setting( 
		'cat_two_hs' , 
			array(
			'capability' => 'edit_theme_options',
			'sanitize_callback' => 'electromix_sanitize_checkbox',
			'default' => '1'
		) 
	);

	$wp_customize->add_control(
	'cat_two_hs', 
		array(
			'label'	      => esc_html__( 'Show/Hide', 'ecommerce-companion' ),
			'section'     => 'category_product_two_setting',
			'type'        => 'checkbox'
		) 
	);

	
	/*=========================================
	Content
	=========================================*/
	$wp_customize->add_setting(
		'category_product_two_content'
			,array(
			'capability'     	=> 'edit_theme_options',
			'sanitize_callback' => 'electromix_sanitize_text',
			'priority' => 3,
		)
	);

	$wp_customize->add_control(
	'category_product_two_content',
		array(
			'type' => 'hidden',
			'label' => __('Content','ecommerce-companion'),
			'section' => 'category_product_two_setting',
		)
	);
	
	
	// Hide/ShowTab
	$wp_customize->add_setting(
		'hs_cat_two_tab'
			,array(
			'default'     	=> '1',
			'capability'     	=> 'edit_theme_options',
			'sanitize_callback' => 'electromix_sanitize_checkbox',
			'priority' => 4,
		)
	);

	$wp_customize->add_control(
	'hs_cat_two_tab',
		array(
			'type' => 'checkbox',
			'label' => __('Hide/Show Tab','ecommerce-companion'),
			'section' => 'category_product_two_setting',
		)
	);
	
	
	
	// Product Category
	$wp_customize->add_setting(
    'cat_two_cat',
		array(
		'capability' => 'edit_theme_options',
		'priority' => 5,
		)
	);	
	$wp_customize->add_control( new Electromix_Product_Category_Control( $wp_customize, 
	'cat_two_cat', 
		array(
		'label'   => __('Select category','ecommerce-companion'),
		'section' => 'category_product_two_setting',
		) 
	) );
	
	// No. of Products Display
		$wp_customize->add_setting(
			'cat_two_num',
			array(
				'default' => '20',
				'capability'     	=> 'edit_theme_options',
				'sanitize_callback' => 'electromix_sanitize_range_value',
				'priority' => 6,
			)
		);
		$wp_customize->add_control( 
		new Electromix_Customizer_Range_Control( $wp_customize, 'cat_two_num', 
			array(
				'label'      => __( 'No of Products Display', 'ecommerce-companion' ),
				'section'  => 'category_product_two_setting',
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
	
	//  column // 
	$wp_customize->add_setting(
    	'cat_two_cols',
    	array(
	        'default'			=> '6',
			'capability'     	=> 'edit_theme_options',
			'sanitize_callback' => 'electromix_sanitize_select',
			'priority' => 5,
		)
	);	

	$wp_customize->add_control(
		'cat_two_cols',
		array(
		    'label'   		=> __('Select Column','ecommerce-companion'),
		    'section' 		=> 'category_product_two_setting',
			'type'			=> 'select',
			'choices'        => 
			array(
				'2' => __( '2 column', 'ecommerce-companion' ),
				'3' => __( '3 column', 'ecommerce-companion' ),
				'4' => __( '4 column', 'ecommerce-companion' ),
				'5' => __( '5 column', 'ecommerce-companion' ),
				'6' => __( '6 column', 'ecommerce-companion' ),
			) 
		) 
	);	
	
	// Upgrade To Pro
	class  Electromix_cat2_section_upgrade extends WP_Customize_Control {
		public function render_content() { 	
			
		?>
			<a class="customizer_cat2_section_premium up-to-pro" style="padding:9px 0; text-align:center;" href="<?php echo esc_url(electromix_premium_links()); ?>" target="_blank"><?php esc_html_e('Unlock By Upgrade To Pro','ecommerce-companion'); ?></a>
			
		<?php }
	}
	
	$wp_customize->add_setting( 'electromix_cat2_upgrade_to_pro', array(
		'capability'			=> 'edit_theme_options',
		'electromix_sanitize_callback'	=> 'wp_filter_nohtml_kses',
	));
	$wp_customize->add_control(
		new  Electromix_cat2_section_upgrade(
		$wp_customize,
		'electromix_cat2_upgrade_to_pro',
			array(
				'section'				=> 'category_product_two_setting',
			)
		)
	);
}

add_action( 'customize_register', 'electromix_category_product_two_setting' );

// selective refresh
function electromix_category_product_two_section_partials( $wp_customize ){
	
	// cat_two_cat
	$wp_customize->selective_refresh->add_partial( 'cat_two_cat', array(
		'selector'            => '#category-two .tab-filter-slider a',
		'settings'            => 'cat_two_cat',
		'render_callback'  => 'electromix_cat_two_render_callback',
	) );
	
	}

add_action( 'customize_register', 'electromix_category_product_two_section_partials' );

// category_product_one_ttl
function electromix_cat_two_render_callback() {
	return get_theme_mod( 'cat_two_cat' );
}