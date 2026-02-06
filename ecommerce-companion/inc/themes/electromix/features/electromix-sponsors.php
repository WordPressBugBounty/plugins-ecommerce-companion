<?php
if ( ! defined( 'ABSPATH' ) ) exit;
function electromix_sponsor_setting( $wp_customize ) {
$selective_refresh = isset( $wp_customize->selective_refresh ) ? 'postMessage' : 'refresh';
	/*=========================================
	Modern Product  Section
	=========================================*/
	$wp_customize->add_section(
		'sponsor_setting', array(
			'title' => esc_html__( 'Sponsor Section', 'ecommerce-companion' ),
			'panel' => 'electromix_frontpage_sections',
		)
	);	
	
	$wp_customize->add_setting( 
		'sponsor_hs' , 
			array(
			'capability' => 'edit_theme_options',
			'sanitize_callback' => 'electromix_sanitize_checkbox',
			'default' => '1'
		) 
	);

	$wp_customize->add_control(
	'sponsor_hs', 
		array(
			'label'	      => esc_html__( 'Show/Hide', 'ecommerce-companion' ),
			'section'     => 'sponsor_setting',
			'type'        => 'checkbox'
		) 
	);	
	
	
	/*=========================================
	Content
	=========================================*/
	$wp_customize->add_setting(
		'sponsor_content'
			,array(
			'capability'     	=> 'edit_theme_options',
			'sanitize_callback' => 'electromix_sanitize_text',
			'priority' => 3,
		)
	);

	$wp_customize->add_control(
	'sponsor_content',
		array(
			'type' => 'hidden',
			'label' => __('Content','ecommerce-companion'),
			'section' => 'sponsor_setting',
		)
	);
	
	
	// Hide/ShowTab
	$wp_customize->add_setting(
		'hs_sponsor_tab'
			,array(
			'default'     	=> '1',
			'capability'     	=> 'edit_theme_options',
			'sanitize_callback' => 'electromix_sanitize_checkbox',
			'priority' => 4,
		)
	);

	$wp_customize->add_control(
	'hs_sponsor_tab',
		array(
			'type' => 'checkbox',
			'label' => __('Hide/Show Tab','ecommerce-companion'),
			'section' => 'sponsor_setting',
		)
	);
	
	
	/**
	 * Customizer Repeater for add team
	 */
	
	$wp_customize->add_setting( 'electromix_sponsor', 
		array(
		 'sanitize_callback' => 'electromix_repeater_sanitize',
		 // 'transport'         => $selective_refresh,
		 'priority' => 8,
		 'default' => electromix_get_sponsor_default()
		)
	);
	
	$wp_customize->add_control( 
		new Electromix_Repeater( $wp_customize, 
			'electromix_sponsor', 
				array(
					'label'   => esc_html__('Sponsors','ecommerce-companion'),
					'section' => 'sponsor_setting',
					'add_field_label'                   => esc_html__( 'Add New Sponsor', 'ecommerce-companion' ),
					'item_name'                         => esc_html__( 'Sponsor', 'ecommerce-companion' ),
					'customizer_repeater_title_control' => true,
					'customizer_repeater_text2_control' => true,
					'customizer_repeater_image_control' => true,
					'customizer_repeater_link_control' => true,
				) 
			) 
		);	
	
	// Upgrade To Pro //
	class  Electromix_sponsor_section_upgrade extends WP_Customize_Control {
		public function render_content() { 	
			
		?>
			<a class="customizer_sponsor_section_premium up-to-pro" style="padding:9px 0; text-align:center; display: none;" href="<?php echo esc_url(electromix_premium_links()); ?>" target="_blank"><?php esc_html_e('Upgrade To Pro For More','ecommerce-companion'); ?></a>
			
		<?php }
	}
	
	$wp_customize->add_setting( 'electromix_sponsor_upgrade_to_pro', array(
		'capability'			=> 'edit_theme_options',
		'electromix_sanitize_callback'	=> 'wp_filter_nohtml_kses',
	));
	$wp_customize->add_control(
		new  Electromix_sponsor_section_upgrade(
		$wp_customize,
		'electromix_sponsor_upgrade_to_pro',
			array(
				'section'				=> 'sponsor_setting',
			)
		)
	);
	
	//  column // 
	$wp_customize->add_setting(
    	'sponsor_cols',
    	array(
	        'default'			=> '5',
			'capability'     	=> 'edit_theme_options',
			'sanitize_callback' => 'electromix_sanitize_select',
			'priority' => 5,
		)
	);	

	$wp_customize->add_control(
		'sponsor_cols',
		array(
		    'label'   		=> __('Select Column','ecommerce-companion'),
		    'section' 		=> 'sponsor_setting',
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
	class  Electromix_spon_section_upgrade extends WP_Customize_Control {
		public function render_content() { 	
			
		?>
			<a class="customizer_spon_section_premium up-to-pro" style="padding:9px 0; text-align:center;" href="<?php echo esc_url(electromix_premium_links()); ?>" target="_blank"><?php esc_html_e('Unlock By Upgrade To Pro','ecommerce-companion'); ?></a>
			
		<?php }
	}
	
	$wp_customize->add_setting( 'electromix_spon_upgrade_to_pro', array(
		'capability'			=> 'edit_theme_options',
		'electromix_sanitize_callback'	=> 'wp_filter_nohtml_kses',
	));
	$wp_customize->add_control(
		new  Electromix_spon_section_upgrade(
		$wp_customize,
		'electromix_spon_upgrade_to_pro',
			array(
				'section'				=> 'sponsor_setting',
			)
		)
	);
}

add_action( 'customize_register', 'electromix_sponsor_setting' );

//selective refresh
function electromix_sponsors_section_partials( $wp_customize ){	
	
	// banner content
	$wp_customize->selective_refresh->add_partial( 'electromix_sponsor', array(
		'selector'            => '#sponsors .tab-filter-slider a',
		'settings'            => 'electromix_sponsor',
		'render_callback'  => 'electromix_sponsors_render_callback',
	) );
	
}
add_action( 'customize_register', 'electromix_sponsors_section_partials' );

// category_product_one_ttl
function electromix_sponsors_render_callback() {
	return get_theme_mod( 'electromix_sponsor' );
}