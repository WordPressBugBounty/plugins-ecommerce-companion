<?php
if ( ! defined( 'ABSPATH' ) ) exit;
function electromix_info( $wp_customize ) {
$selective_refresh = isset( $wp_customize->selective_refresh ) ? 'postMessage' : 'refresh';
	/*=========================================
	Banner Section
	=========================================*/
	$wp_customize->add_section(
		'info_setting', array(
			'title' => esc_html__( 'Info Section', 'ecommerce-companion' ),
			'panel' => 'electromix_frontpage_sections',
		)
	);
	
	$wp_customize->add_setting( 
		'info_hs' , 
			array(
			'capability' => 'edit_theme_options',
			'sanitize_callback' => 'electromix_sanitize_checkbox',
			'default' => '1'
		) 
	);

	$wp_customize->add_control(
	'info_hs', 
		array(
			'label'	      => esc_html__( 'Show/Hide', 'ecommerce-companion' ),
			'section'     => 'info_setting',
			'type'        => 'checkbox'
		) 
	);

	// Banner content Section // 
	$wp_customize->add_setting(
		'info_head'
			,array(
			'capability'     	=> 'edit_theme_options',
			'sanitize_callback' => 'electromix_sanitize_text',
		)
	);

	$wp_customize->add_control(
	'info_head',
		array(
			'type' => 'hidden',
			'label' => __('Content','ecommerce-companion'),
			'section' => 'info_setting',
		)
	);
	
	/**
	 * Customizer Repeater for add banner
	 */
	
		$wp_customize->add_setting( 'info_contents', 
			array(
			 'sanitize_callback' => 'electromix_repeater_sanitize',
			 'default' => electromix_info_default()
			)
		);
		
		$wp_customize->add_control( 
			new Electromix_Repeater( $wp_customize, 
				'info_contents', 
					array(
						'label'   => esc_html__('Infos','ecommerce-companion'),
						'section' => 'info_setting',
						'add_field_label'                   => esc_html__( 'Add New Info Box', 'ecommerce-companion' ),
						'item_name'                         => esc_html__( 'InfoBox', 'ecommerce-companion' ),
						'customizer_repeater_icon_control' => true,
						'customizer_repeater_title_control' => true,
						'customizer_repeater_text_control' => true,
						'customizer_repeater_link_control' => true,
					) 
				) 
			);
			
	// Upgrade To Pro //
	class  Electromix_info_section_upgrade extends WP_Customize_Control {
		public function render_content() { 	
			
		?>
			<a class="customizer_infobox_section_premium up-to-pro" style="padding:9px 0; text-align:center; display: none;" href="<?php echo esc_url(electromix_premium_links()); ?>" target="_blank"><?php esc_html_e('Upgrade To Pro For More','ecommerce-companion'); ?></a>
			
		<?php }
	}
	
	$wp_customize->add_setting( 'electromix_info_upgrade_to_pro', array(
		'capability'			=> 'edit_theme_options',
		'electromix_sanitize_callback'	=> 'wp_filter_nohtml_kses',
	));
	$wp_customize->add_control(
		new  Electromix_info_section_upgrade(
		$wp_customize,
		'electromix_info_upgrade_to_pro',
			array(
				'section'				=> 'info_setting',
			)
		)
	);	
			
	// Autoplay
	$wp_customize->add_setting(
		'info_cols',
		array(
			'default'			=> '3',
			'capability'     	=> 'edit_theme_options',
			'sanitize_callback' => 'electromix_sanitize_select',
		)
	);	

	$wp_customize->add_control(
		'info_cols',
		array(
			'label'   		=> __('Select Column','ecommerce-companion'),
			'section' 		=> 'info_setting',
			'settings'   	 => 'info_cols',
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
	class  Electromix_dis_info_section_upgrade extends WP_Customize_Control {
		public function render_content() { 	
			
		?>
			<a class="customizer_dis_info_section_premium up-to-pro" style="padding:9px 0; text-align:center;" href="<?php echo esc_url(electromix_premium_links()); ?>" target="_blank"><?php esc_html_e('Unlock By Upgrade To Pro','ecommerce-companion'); ?></a>
			
		<?php }
	}
	
	$wp_customize->add_setting( 'electromix_dis_info_upgrade_to_pro', array(
		'capability'			=> 'edit_theme_options',
		'electromix_sanitize_callback'	=> 'wp_filter_nohtml_kses',
	));
	$wp_customize->add_control(
		new  Electromix_dis_info_section_upgrade(
		$wp_customize,
		'electromix_dis_info_upgrade_to_pro',
			array(
				'section'				=> 'info_setting',
			)
		)
	);
}

add_action( 'customize_register', 'electromix_info' );

//selective refresh
function electromix_info_section_partials( $wp_customize ){	
	
	// banner content
	$wp_customize->selective_refresh->add_partial( 'info_contents', array(
		'selector'            => '#info > .container > .row',
		'settings'            => 'info_contents',
		'render_callback'  => 'electromix_info_render_callback',
	) );
	
}
add_action( 'customize_register', 'electromix_info_section_partials' );

// category_product_one_ttl
function electromix_info_render_callback() {
	return get_theme_mod( 'info_contents' );
}