<?php
if ( ! defined( 'ABSPATH' ) ) exit;
function electromix_banner3_setting( $wp_customize ) {
$selective_refresh = isset( $wp_customize->selective_refresh ) ? 'postMessage' : 'refresh';
	/*=========================================
	Banner Section
	=========================================*/
	$wp_customize->add_section(
		'banner3_setting', array(
			'title' => esc_html__( 'Banner Three Section', 'ecommerce-companion' ),
			'panel' => 'electromix_frontpage_sections',
		)
	);
	
	$wp_customize->add_setting( 
		'banner3_hs' , 
			array(
			'capability' => 'edit_theme_options',
			'sanitize_callback' => 'electromix_sanitize_checkbox',
			'default' => '1'
		) 
	);

	$wp_customize->add_control(
	'banner3_hs', 
		array(
			'label'	      => esc_html__( 'Show/Hide', 'ecommerce-companion' ),
			'section'     => 'banner3_setting',
			'type'        => 'checkbox'
		) 
	);	
	

	// Banner content Section // 
	$wp_customize->add_setting(
		'banner3_content_head'
			,array(
			'capability'     	=> 'edit_theme_options',
			'sanitize_callback' => 'electromix_sanitize_text',
			'priority' => 7,
		)
	);

	$wp_customize->add_control(
	'banner3_content_head',
		array(
			'type' => 'hidden',
			'label' => __('Content','ecommerce-companion'),
			'section' => 'banner3_setting',
		)
	);
	
	/**
	 * Customizer Repeater for add banner32
	 */
	
		$wp_customize->add_setting( 'banner3_contents', 
			array(
			 'sanitize_callback' => 'electromix_repeater_sanitize',
			 // 'transport'         => $selective_refresh,
			 'priority' => 8,
			 'default' => electromix_get_banner2_default()
			)
		);
		
		$wp_customize->add_control( 
			new Electromix_Repeater( $wp_customize, 
				'banner3_contents', 
					array(
						'label'   => esc_html__('Banners','ecommerce-companion'),
						'section' => 'banner3_setting',
						'add_field_label'                   => esc_html__( 'Add New Banner3', 'ecommerce-companion' ),
						'item_name'                         => esc_html__( 'Banner3', 'ecommerce-companion' ),
						'customizer_repeater_image_control' => true,
						'customizer_repeater_image2_control' => true,
						'customizer_repeater_title_control' => true,
						'customizer_repeater_subtitle_control' => true,
						'customizer_repeater_subtitle2_control' => true,
						'customizer_repeater_subtitle3_control' => true,
						'customizer_repeater_subtitle4_control' => true,
						'customizer_repeater_text_control' => true,
						'customizer_repeater_button_text_control' => true,
						'customizer_repeater_button_link_control' => true,
						'customizer_repeater_newtab_control' => true,
						'customizer_repeater_nofollow_control' => true,
					) 
				) 
			);
		
		// Upgrade To Pro //
		class  Electromix_banner3_section_upgrade extends WP_Customize_Control {
			public function render_content() { 	
				
			?>
				<a class="customizer_banner3_section_premium up-to-pro" style="padding:9px 0; text-align:center; display: none;" href="<?php echo esc_url(electromix_premium_links()); ?>" target="_blank"><?php esc_html_e('Upgrade To Pro For More','ecommerce-companion'); ?></a>
				
			<?php }
		}
		
		$wp_customize->add_setting( 'electromix_banner3_upgrade_to_pro', array(
			'capability'			=> 'edit_theme_options',
			'electromix_sanitize_callback'	=> 'wp_filter_nohtml_kses',
		));
		$wp_customize->add_control(
			new  Electromix_banner3_section_upgrade(
			$wp_customize,
			'electromix_banner3_upgrade_to_pro',
				array(
					'section'				=> 'banner3_setting',
				)
			)
		);	
}

add_action( 'customize_register', 'electromix_banner3_setting' );

//selective refresh
function electromix_banner3_section_partials( $wp_customize ){	
	
	// banner content
	$wp_customize->selective_refresh->add_partial( 'banner3_contents', array(
		'selector'            => '#banner-three .banner-item .banner-content',
		'settings'            => 'banner3_contents',
		// 'render_callback'  => 'electromix_banner_three_render_callback',
	) );
	
}
add_action( 'customize_register', 'electromix_banner3_section_partials' );

// category_product_one_ttl
function electromix_banner_three_render_callback() {
	return get_theme_mod( 'banner3_contents' );
}