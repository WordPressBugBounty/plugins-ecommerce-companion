<?php
if ( ! defined( 'ABSPATH' ) ) exit;
function electromix_banner_setting( $wp_customize ) {
$selective_refresh = isset( $wp_customize->selective_refresh ) ? 'postMessage' : 'refresh';
	/*=========================================
	Banner Section
	=========================================*/
	$wp_customize->add_section(
		'banner_setting', array(
			'title' => esc_html__( 'Banner Section', 'ecommerce-companion' ),
			'panel' => 'electromix_frontpage_sections',
		)
	);
	
	$wp_customize->add_setting( 
		'banner_hs' , 
			array(
			'capability' => 'edit_theme_options',
			'sanitize_callback' => 'electromix_sanitize_checkbox',
			'default' => '1'
		) 
	);

	$wp_customize->add_control(
	'banner_hs', 
		array(
			'label'	      => esc_html__( 'Show/Hide', 'ecommerce-companion' ),
			'section'     => 'banner_setting',
			'type'        => 'checkbox'
		) 
	);

	// Banner content Section // 
	$wp_customize->add_setting(
		'banner_content_head'
			,array(
			'capability'     	=> 'edit_theme_options',
			'sanitize_callback' => 'electromix_sanitize_text',
			'priority' => 7,
		)
	);

	$wp_customize->add_control(
	'banner_content_head',
		array(
			'type' => 'hidden',
			'label' => __('Content','ecommerce-companion'),
			'section' => 'banner_setting',
		)
	);
	
	/**
	 * Customizer Repeater for add banner2
	 */
	
		$wp_customize->add_setting( 'banner_contents', 
			array(
			 'sanitize_callback' => 'electromix_repeater_sanitize',
			 'default' => electromix_get_banner_default()
			)
		);
		
		$wp_customize->add_control( 
			new Electromix_Repeater( $wp_customize, 
				'banner_contents', 
					array(
						'label'   => esc_html__('Banners','ecommerce-companion'),
						'section' => 'banner_setting',
						'add_field_label'                   => esc_html__( 'Add New Banner', 'ecommerce-companion' ),
						'item_name'                         => esc_html__( 'Banner', 'ecommerce-companion' ),
						'customizer_repeater_image_control' => true,
						'customizer_repeater_image2_control' => true,
						'customizer_repeater_title_control' => true,
						'customizer_repeater_subtitle_control' => true,
						'customizer_repeater_subtitle2_control' => true,
						'customizer_repeater_subtitle3_control' => true,
						'customizer_repeater_text_control' => true,
						'customizer_repeater_button_text_control' => true,
						'customizer_repeater_button_link_control' => true,
						'customizer_repeater_newtab_control' => true,
						'customizer_repeater_nofollow_control' => true,
					) 
				) 
			);	
		
	// Upgrade To Pro //
	class  Electromix_banner_section_upgrade extends WP_Customize_Control {
		public function render_content() { 	
			
		?>
			<a class="customizer_banner_section_premium up-to-pro" style="padding:9px 0; text-align:center; display: none;" href="<?php echo esc_url(electromix_premium_links()); ?>" target="_blank"><?php esc_html_e('Upgrade To Pro For More','ecommerce-companion'); ?></a>
			
		<?php }
	}
	
	$wp_customize->add_setting( 'electromix_banner_upgrade_to_pro', array(
		'capability'			=> 'edit_theme_options',
		'electromix_sanitize_callback'	=> 'wp_filter_nohtml_kses',
	));
	$wp_customize->add_control(
		new  Electromix_banner_section_upgrade(
		$wp_customize,
		'electromix_banner_upgrade_to_pro',
			array(
				'section'				=> 'banner_setting',
			)
		)
	);
	
	//  column // 
	$wp_customize->add_setting(
    	'banner_cols',
    	array(
	        'default'			=> '5',
			'capability'     	=> 'edit_theme_options',
			'sanitize_callback' => 'electromix_sanitize_select',
			'priority' => 5,
		)
	);	
	// banner2 column // 
	$wp_customize->add_setting(
    	'banner_cols',
    	array(
	        'default'			=> '4',
			'capability'     	=> 'edit_theme_options',
			'sanitize_callback' => 'electromix_sanitize_select',
		)
	);	

	$wp_customize->add_control(
		'banner_cols',
		array(
		    'label'   		=> __('Select Column','ecommerce-companion'),
		    'section' 		=> 'banner_setting',
			'settings'   	 => 'banner_cols',
			'type'			=> 'select',
			'choices'        => 
			array(
				'6' => __( '2 Column', 'ecommerce-companion' ),
				'4' => __( '3 Column', 'ecommerce-companion' ),
				'3' => __( '4 Column', 'ecommerce-companion' ),
			) 
		) 
	);	
	
	// Upgrade To Pro
	class  Electromix_ban_section_upgrade extends WP_Customize_Control {
		public function render_content() { 	
			
		?>
			<a class="customizer_ban_section_premium up-to-pro" style="padding:9px 0; text-align:center;" href="<?php echo esc_url(electromix_premium_links()); ?>" target="_blank"><?php esc_html_e('Unlock By Upgrade To Pro','ecommerce-companion'); ?></a>
			
		<?php }
	}
	
	$wp_customize->add_setting( 'electromix_ban_upgrade_to_pro', array(
		'capability'			=> 'edit_theme_options',
		'electromix_sanitize_callback'	=> 'wp_filter_nohtml_kses',
	));
	$wp_customize->add_control(
		new  Electromix_ban_section_upgrade(
		$wp_customize,
		'electromix_ban_upgrade_to_pro',
			array(
				'section'				=> 'banner_setting',
			)
		)
	);
}

add_action( 'customize_register', 'electromix_banner_setting' );

//selective refresh
function electromix_banner_section_partials( $wp_customize ){	
	
	// banner content
	$wp_customize->selective_refresh->add_partial( 'banner_contents', array(
		'selector'            => '#banner-one .banner-item .banner-content',
		'settings'            => 'banner_contents',
		// 'render_callback'  => 'electromix_banner_one_render_callback',
	) );
	
}
add_action( 'customize_register', 'electromix_banner_section_partials' );

// category_product_one_ttl
function electromix_banner_one_render_callback() {
	return get_theme_mod( 'banner_contents' );
}