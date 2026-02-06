<?php
if ( ! defined( 'ABSPATH' ) ) exit;
function electromix_category_product_one_setting( $wp_customize ) {
$selective_refresh = isset( $wp_customize->selective_refresh ) ? 'postMessage' : 'refresh';
	/*=========================================
	Category Product  Section
	=========================================*/
	$wp_customize->add_section(
		'category_product_one_setting', array(
			'title' => esc_html__( 'Category Product Section', 'ecommerce-companion' ),
			'panel' => 'electromix_frontpage_sections',
		)
	);
	
	
	$wp_customize->add_setting( 
		'cat_one_hs' , 
			array(
			'capability' => 'edit_theme_options',
			'sanitize_callback' => 'electromix_sanitize_checkbox',
			'default' => '1'
		) 
	);

	$wp_customize->add_control(
	'cat_one_hs', 
		array(
			'label'	      => esc_html__( 'Show/Hide', 'ecommerce-companion' ),
			'section'     => 'category_product_one_setting',
			'type'        => 'checkbox'
		) 
	);	
	
	
	$wp_customize->add_setting(
		'cat_one_header'
			,array(
			'capability'     	=> 'edit_theme_options',
			'sanitize_callback' => 'electromix_sanitize_text',
			'priority' => 1,
		)
	);

	$wp_customize->add_control(
	'cat_one_header',
		array(
			'type' => 'hidden',
			'label' => __('Header','ecommerce-companion'),
			'section' => 'category_product_one_setting',
		)
	);
	
	$wp_customize->add_setting(
		'cat_one_icon',
		array(
			'default' => 'fa-list-ul',
			'sanitize_callback' => 'sanitize_text_field',
			'capability' => 'edit_theme_options',
		)
	);	

	$wp_customize->add_control(new Electromix_Icon_Picker_Control($wp_customize, 
		'cat_one_icon',
		array(
			'label'   		=> __('Icon','ecommerce-companion'),
			'section' 		=> 'category_product_one_setting',
			'iconset' => 'fa',
			
		))  
	);
		
	//  Title // 
	$wp_customize->add_setting(
    	'cat_one_ttl',
    	array(
	        'default'			=> __('All Category','ecommerce-companion'),
			'capability'     	=> 'edit_theme_options',
			'sanitize_callback' => 'electromix_sanitize_html',
			'transport'         => $selective_refresh,
			'priority' => 2,
		)
	);	
	
	$wp_customize->add_control( 
		'cat_one_ttl',
		array(
		    'label'   => __('Title','ecommerce-companion'),
		    'section' => 'category_product_one_setting',
			'type'           => 'text',
		)  
	);	
	
	
	//Timer	
	$wp_customize->add_setting(
		'cat_one_time_head'
			,array(
			'capability'     	=> 'edit_theme_options',
			'sanitize_callback' => 'electromix_sanitize_text',
		)
	);

	$wp_customize->add_control(
	'cat_one_time_head',
		array(
			'type' => 'hidden',
			'label' => __('Time','ecommerce-companion'),
			'section' => 'category_product_one_setting',
		)
	);
	
	$wp_customize->add_setting(
    	'cat_one_date',
    	array(
	        'default'			=> __('2030-12-31','ecommerce-companion'),
			'capability'     	=> 'edit_theme_options',
			'sanitize_callback' => 'electromix_sanitize_html',
		)
	);	
	$wp_customize->add_control( 
		'cat_one_date',
		array(
		    'section' => 'category_product_one_setting',
			'type'     => 'date',
		)  
	);
	
	$wp_customize->add_setting(
    	'cat_one_time',
    	array(
	        'default'			=> __('00:00','ecommerce-companion'),
			'capability'     	=> 'edit_theme_options',
			'sanitize_callback' => 'electromix_sanitize_html',
		)
	);
	
	$wp_customize->add_control( 
		'cat_one_time',
		array(
		    'section' => 'category_product_one_setting',
			'type'     => 'time',
		)  
	);
	
	/*=========================================
	Content
	=========================================*/
	$wp_customize->add_setting(
		'category_product_one_content'
			,array(
			'capability'     	=> 'edit_theme_options',
			'sanitize_callback' => 'electromix_sanitize_text',
			'priority' => 3,
		)
	);

	$wp_customize->add_control(
	'category_product_one_content',
		array(
			'type' => 'hidden',
			'label' => __('Content','ecommerce-companion'),
			'section' => 'category_product_one_setting',
		)
	);
	
	
	// Hide/ShowTab
	$wp_customize->add_setting(
		'hs_cat_one_tab'
			,array(
			'default'     	=> '1',
			'capability'     	=> 'edit_theme_options',
			'sanitize_callback' => 'electromix_sanitize_checkbox',
			'priority' => 4,
		)
	);

	$wp_customize->add_control(
	'hs_cat_one_tab',
		array(
			'type' => 'checkbox',
			'label' => __('Hide/ShowTab','ecommerce-companion'),
			'section' => 'category_product_one_setting',
		)
	);
		
	// Product Category
	$wp_customize->add_setting(
    'cat_one_cat',
		array(
		'capability' => 'edit_theme_options',
		'priority' => 5,
		)
	);	
	$wp_customize->add_control( new Electromix_Product_Category_Control( $wp_customize, 
	'cat_one_cat', 
		array(
		'label'   => __('Select category','ecommerce-companion'),
		'section' => 'category_product_one_setting',
		) 
	) );

	//  column // 
	$wp_customize->add_setting(
    	'cat_one_cols',
    	array(
	        'default'			=> '7',
			'capability'     	=> 'edit_theme_options',
			'sanitize_callback' => 'electromix_sanitize_select',
			'priority' => 5,
		)
	);	

	$wp_customize->add_control(
		'cat_one_cols',
		array(
		    'label'   		=> __('Select Column','ecommerce-companion'),
		    'section' 		=> 'category_product_one_setting',
			'type'			=> 'select',
			'choices'        => 
			array(
				'2' => __( '2 column', 'ecommerce-companion' ),
				'3' => __( '3 column', 'ecommerce-companion' ),
				'4' => __( '4 column', 'ecommerce-companion' ),
				'5' => __( '5 column', 'ecommerce-companion' ),
				'6' => __( '6 column', 'ecommerce-companion' ),
				'7' => __( '7 column', 'ecommerce-companion' ),
			) 
		) 
	);
	
	// Upgrade To Pro //
	class  Electromix_cat_one_section_upgrade extends WP_Customize_Control {
		public function render_content() { 	
			
		?>
			<a class="customizer_cat_one_section_premium up-to-pro" style="padding:9px 0; text-align:center;" href="<?php echo esc_url(electromix_premium_links()); ?>" target="_blank"><?php esc_html_e('Unlock By Upgrade To Pro','ecommerce-companion'); ?></a>
			
		<?php }
	}
	
	$wp_customize->add_setting( 'electromix_cat_one_upgrade_to_pro', array(
		'capability'			=> 'edit_theme_options',
		'electromix_sanitize_callback'	=> 'wp_filter_nohtml_kses',
	));
	$wp_customize->add_control(
		new  Electromix_cat_one_section_upgrade(
		$wp_customize,
		'electromix_cat_one_upgrade_to_pro',
			array(
				'section'				=> 'category_product_one_setting',
			)
		)
	);
}

add_action( 'customize_register', 'electromix_category_product_one_setting' );

// selective refresh
function electromix_category_product_one_section_partials( $wp_customize ){
	
	// cat_one_ttl
	$wp_customize->selective_refresh->add_partial( 'cat_one_ttl', array(
		'selector'            => '#category-one .main-title h2',
		'settings'            => 'cat_one_ttl',
		'render_callback'  => 'electromix_cat_one_ttl_render_callback',
	) );
	
	}

add_action( 'customize_register', 'electromix_category_product_one_section_partials' );

// category_product_one_ttl
function electromix_cat_one_ttl_render_callback() {
	return get_theme_mod( 'cat_one_ttl' );
}