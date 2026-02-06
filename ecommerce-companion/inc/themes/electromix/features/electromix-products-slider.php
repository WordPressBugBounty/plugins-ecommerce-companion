<?php
if ( ! defined( 'ABSPATH' ) ) exit;
function electromix_ps_one_customize_register( $wp_customize ) {
    // Section for bundled products slider on homepage
    $wp_customize->add_section( 'home_bundled_products_section', [
        'title'    => __('Bundled Products Slider', 'ecommerce-companion'),
        'panel'    => 'electromix_frontpage_sections',
    ] );
	
	
	$wp_customize->add_setting( 
		'ps_hs' , 
			array(
			'capability' => 'edit_theme_options',
			'sanitize_callback' => 'electromix_sanitize_checkbox',
			'default' => '1'
		) 
	);

	$wp_customize->add_control(
	'ps_hs', 
		array(
			'label'	      => esc_html__( 'Show/Hide', 'ecommerce-companion' ),
			'section'     => 'home_bundled_products_section',
			'type'        => 'checkbox'
		) 
	);	
	
	
	/**
	 * Customizer Repeater for add slides
	 */
	
	$wp_customize->add_setting( 'ps', 
		array(
		 'sanitize_callback' => 'electromix_repeater_sanitize',
		  'default' => electromix_get_default_pd_slider()
		)
	);
	
	$wp_customize->add_control( 
		new Electromix_Repeater( $wp_customize, 
			'ps', 
				array(
					'label'   => esc_html__('Products Bundles','ecommerce-companion'),
					'section' => 'home_bundled_products_section',
					'add_field_label'                   => esc_html__( 'Add New Product Bundle', 'ecommerce-companion' ),
					'item_name'                         => esc_html__( 'ProductBundle', 'ecommerce-companion' ),
					'customizer_repeater_title_control' => true,
					'customizer_repeater_icon_control' => true,
					'customizer_repeater_text_control' => true,
				) 
			) 
		);
		
	// Upgrade To Pro //
	class  Electromix_product_bundle_section_upgrade extends WP_Customize_Control {
		public function render_content() { 	
			
		?>
			<a class="customizer_product_bundle_section_premium up-to-pro" style="padding:9px 0; text-align:center; display: none;" href="<?php echo esc_url(electromix_premium_links()); ?>" target="_blank"><?php esc_html_e('Upgrade To Pro For More','ecommerce-companion'); ?></a>
			
		<?php }
	}
	
	$wp_customize->add_setting( 'electromix_product_bundle_upgrade_to_pro', array(
		'capability'			=> 'edit_theme_options',
		'electromix_sanitize_callback'	=> 'wp_filter_nohtml_kses',
	));
	$wp_customize->add_control(
		new  Electromix_product_bundle_section_upgrade(
		$wp_customize,
		'electromix_product_bundle_upgrade_to_pro',
			array(
				'section'				=> 'home_bundled_products_section',
			)
		)
	);

	$wp_customize->add_setting(
		'ps_cols',
		array(
			'default'			=> '4',
			'capability'     	=> 'edit_theme_options',
			'sanitize_callback' => 'electromix_sanitize_select',
		)
	);	

	$wp_customize->add_control(
		'ps_cols',
		array(
			'label'   		=> __('Select Column','ecommerce-companion'),
			'section' 		=> 'home_bundled_products_section',
			'settings'   	 => 'pd_cols',
			'type'			=> 'select',
			'choices'        => 
			array(
				'6' => __( '2 Column', 'ecommerce-companion' ),
				'4' => __( '3 Column', 'ecommerce-companion' ),
				'3' => __( '4 Column', 'ecommerce-companion' ),
				) 
		) 
	);
}
add_action( 'customize_register', 'electromix_ps_one_customize_register' );


//selective refresh
function electromix_product_slider_partials( $wp_customize ){	
	
	// banner content
	$wp_customize->selective_refresh->add_partial( 'ps', array(
		'selector'            => '#product-slider .main-title h2',
		'settings'            => 'ps',
		'render_callback'  => 'electromix_product_slider_render_callback',
	) );
	
}
add_action( 'customize_register', 'electromix_product_slider_partials' );

// category_product_one_ttl
function electromix_product_slider_render_callback() {
	return get_theme_mod( 'ps' );
}