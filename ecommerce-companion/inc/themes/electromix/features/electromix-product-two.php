<?php
if ( ! defined( 'ABSPATH' ) ) exit;
function electromix_product_two( $wp_customize ) {
$selective_refresh = isset( $wp_customize->selective_refresh ) ? 'postMessage' : 'refresh';
	/*=========================================
	Banner Section
	=========================================*/
	$wp_customize->add_section(
		'product_two', array(
			'title' => esc_html__( 'Marquee Product Two', 'ecommerce-companion' ),
			'panel' => 'electromix_frontpage_sections',
		)
	);
	
	$wp_customize->add_setting( 
		'product_two_hs' , 
			array(
			'capability' => 'edit_theme_options',
			'sanitize_callback' => 'electromix_sanitize_checkbox',
			'default' => '1'
		) 
	);

	$wp_customize->add_control(
	'product_two_hs', 
		array(
			'label'	      => esc_html__( 'Show/Hide', 'ecommerce-companion' ),
			'section'     => 'product_two',
			'type'        => 'checkbox'
		) 
	);	
	

	// Banner content Section // 
	$wp_customize->add_setting(
		'product_two_head'
			,array(
			'capability'     	=> 'edit_theme_options',
			'sanitize_callback' => 'electromix_sanitize_text',
		)
	);

	$wp_customize->add_control(
	'product_two_head',
		array(
			'type' => 'hidden',
			'label' => __('Content','ecommerce-companion'),
			'section' => 'product_two',
		)
	);
	
	/**
	 * Customizer Repeater for add banner
	 */
	
		$wp_customize->add_setting( 'product_two_contents', 
			array(
			 'sanitize_callback' => 'electromix_repeater_sanitize',
			 'transport'         => $selective_refresh,
			 'default' => electromix_get_product_default()
			)
		);
		
		$wp_customize->add_control( 
			new Electromix_Repeater( $wp_customize, 
				'product_two_contents', 
					array(
						'label'   => esc_html__('Products','ecommerce-companion'),
						'section' => 'product_two',
						'add_field_label'                   => esc_html__( 'Add New Mrq2 Product', 'ecommerce-companion' ),
						'item_name'                         => esc_html__( 'mrq2Product', 'ecommerce-companion' ),
						'customizer_repeater_image_control' => true,
						'customizer_repeater_title_control' => true,
						'customizer_repeater_text_control' => true,
						'customizer_repeater_link_control' => true,
					) 
				) 
			);
			
	// Upgrade To Pro //
	class  Electromix_mrq2_section_upgrade extends WP_Customize_Control {
		public function render_content() { 	
			
		?>
			<a class="customizer_mrq2_section_premium up-to-pro" style="padding:9px 0; text-align:center; display: none;" href="<?php echo esc_url(electromix_premium_links()); ?>" target="_blank"><?php esc_html_e('Upgrade To Pro For More','ecommerce-companion'); ?></a>
			
		<?php }
	}
	
	$wp_customize->add_setting( 'electromix_mrq2_upgrade_to_pro', array(
		'capability'			=> 'edit_theme_options',
		'electromix_sanitize_callback'	=> 'wp_filter_nohtml_kses',
	));
	$wp_customize->add_control(
		new  Electromix_mrq2_section_upgrade(
		$wp_customize,
		'electromix_mrq2_upgrade_to_pro',
			array(
				'section'				=> 'product_two',
			)
		)
	);
			
	// Autoplay
	$wp_customize->add_setting( 
		'product_two_autoplay' , 
			array(
			'capability' => 'edit_theme_options',
			'sanitize_callback' => 'electromix_sanitize_checkbox',
			'default' => 'true'
		) 
	);
	
	$wp_customize->add_control(
	'product_two_autoplay', 
		array(
			'label'	      => esc_html__( 'Autoplay ?', 'ecommerce-companion' ),
			'section'     => 'product_two',
			'type'        => 'checkbox'
		) 
	);	
	
	// Speed
	if ( class_exists( 'Electromix_Customizer_Range_Control' ) ) {
		$wp_customize->add_setting(
			'product_two_animation_speed',
			array(
				'default' => '6000',
				'capability'     	=> 'edit_theme_options',
				'sanitize_callback' => 'electromix_sanitize_range_value'
			)
		);
		$wp_customize->add_control( 
		new Electromix_Customizer_Range_Control( $wp_customize, 'product_two_animation_speed', 
			array(
				'label'      => __( 'Slider Speed', 'ecommerce-companion' ),
				'section'  => 'product_two',
				 'media_query'   => false,
					'input_attr'    => array(
						'desktop' => array(
							'min'           => 500,
							'max'           => 10000,
							'step'          => 500,
							'default_value' => 6000,
						),
					),
			) ) 
		);
	}
	
	class  Electromix_mrq2p2_section_upgrade extends WP_Customize_Control {
		public function render_content() { 	
			
		?>
			<a class="customizer_mrq2p2_section_premium up-to-pro" style="padding:9px 0; text-align:center;" href="<?php echo esc_url(electromix_premium_links()); ?>" target="_blank"><?php esc_html_e('Unlock By Upgrade To Pro','ecommerce-companion'); ?></a>
			
		<?php }
	}
	
	$wp_customize->add_setting( 'electromix_mrq2p2_upgrade_to_pro', array(
		'capability'			=> 'edit_theme_options',
		'electromix_sanitize_callback'	=> 'wp_filter_nohtml_kses',
	));
	$wp_customize->add_control(
		new  Electromix_mrq2p2_section_upgrade(
		$wp_customize,
		'electromix_mrq2p2_upgrade_to_pro',
			array(
				'section'				=> 'product_two',
			)
		)
	);
}

add_action( 'customize_register', 'electromix_product_two' );

//selective refresh
function electromix_product_two_section_partials( $wp_customize ){	
	
	// banner content
	$wp_customize->selective_refresh->add_partial( 'product_two_contents', array(
		'selector'            => '#product-two .popular-product-item',
		'settings'            => 'product_two_contents',
		// 'render_callback'  => 'electromix_product_two_render_callback', //dont use on repeater's inside selector 
	) );
	
}
add_action( 'customize_register', 'electromix_product_two_section_partials' );

// category_product_one_ttl
function electromix_product_two_render_callback() {
	return get_theme_mod( 'product_two_contents' );
}