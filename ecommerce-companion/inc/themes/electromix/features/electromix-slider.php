<?php
if ( ! defined( 'ABSPATH' ) ) exit;
function electromix_slider_setting( $wp_customize ) {
	$selective_refresh = isset( $wp_customize->selective_refresh ) ? 'postMessage' : 'refresh';
	/*=========================================
	Slider Section Panel
	=========================================*/
	$wp_customize->add_panel(
		'electromix_frontpage_sections', array(
			'priority' => 32,
			'title' => esc_html__( 'Frontpage', 'ecommerce-companion' ),
		)
	);
	
	$wp_customize->add_section(
		'slider_setting', array(
			'title' => esc_html__( 'Slider Section', 'ecommerce-companion' ),
			'panel' => 'electromix_frontpage_sections',
		)
	);
	
	$wp_customize->add_setting( 
		'slider_hs' , 
			array(
			'capability' => 'edit_theme_options',
			'sanitize_callback' => 'electromix_sanitize_checkbox',
			'default' => '1'
		) 
	);

	$wp_customize->add_control(
	'slider_hs', 
		array(
			'label'	      => esc_html__( 'Show/Hide', 'ecommerce-companion' ),
			'section'     => 'slider_setting',
			'type'        => 'checkbox'
		) 
	);	
		
	// slider Contents
	$wp_customize->add_setting(
		'slider_content_head'
			,array(
			'capability'     	=> 'edit_theme_options',
			'sanitize_callback' => 'electromix_sanitize_text',
			'priority' => 4,
		)
	);

	$wp_customize->add_control(
	'slider_content_head',
		array(
			'type' => 'hidden',
			'label' => __('Contents','ecommerce-companion'),
			'section' => 'slider_setting',
		)
	);
	
	/**
	 * Customizer Repeater for add slides
	 */
	
		$wp_customize->add_setting( 'slider', 
			array(
			 'sanitize_callback' => 'electromix_repeater_sanitize',
			 'priority' => 5,
			  'default' => electromix_get_slider_default()
			)
		);
		
		$wp_customize->add_control( 
			new Electromix_Repeater( $wp_customize, 
				'slider', 
					array(
						'label'   => esc_html__('Slide','ecommerce-companion'),
						'section' => 'slider_setting',
						'add_field_label'                   => esc_html__( 'Add New Main Slide', 'ecommerce-companion' ),
						'item_name'                         => esc_html__( 'MainSlide', 'ecommerce-companion' ),
						'customizer_repeater_title_control' => true,
						'customizer_repeater_subtitle_control' => true,
						'customizer_repeater_subtitle2_control' => true,
						'customizer_repeater_button_text_control' => true,
						'customizer_repeater_button_link_control' => true,
						'customizer_repeater_image_control' => true,
						'customizer_repeater_image2_control' => true,
						'customizer_repeater_newtab_control' => true,
						'customizer_repeater_nofollow_control' => true,
					) 
				) 
			);
		
		// Upgrade To Pro //
		class  Electromix_main_slider_section_upgrade extends WP_Customize_Control {
			public function render_content() { 	
				
			?>
				<a class="customizer_main_slider_section_premium up-to-pro" style="padding:9px 0; text-align:center; display: none;" href="<?php echo esc_url(electromix_premium_links()); ?>" target="_blank"><?php esc_html_e('Upgrade To Pro For More','ecommerce-companion'); ?></a>
				
			<?php }
		}
		
		$wp_customize->add_setting( 'electromix_main_slider_upgrade_to_pro', array(
			'capability'			=> 'edit_theme_options',
			'electromix_sanitize_callback'	=> 'wp_filter_nohtml_kses',			
		));
		
		$wp_customize->add_control(
			new  Electromix_main_slider_section_upgrade(
			$wp_customize,
			'electromix_main_slider_upgrade_to_pro',
				array(
					'section'				=> 'slider_setting',
				)
			)
		);
		
		$wp_customize->add_setting( 'slider_r', 
			array(
			 'sanitize_callback' => 'electromix_repeater_sanitize',
			 'priority' => 5,
			  'default' => electromix_get_slider_r_default()
			)
		);
		
		$wp_customize->add_control( 
			new Electromix_Repeater( $wp_customize, 
				'slider_r', 
					array(
						'label'   => esc_html__('Right Slide','ecommerce-companion'),
						'section' => 'slider_setting',
						'add_field_label'                   => esc_html__( 'Add New Right Slide', 'ecommerce-companion' ),
						'item_name'                         => esc_html__( 'RightSlide', 'ecommerce-companion' ),
						'customizer_repeater_title_control' => true,
						'customizer_repeater_subtitle_control' => true,
						'customizer_repeater_subtitle2_control' => true,
						'customizer_repeater_subtitle3_control' => true,
						'customizer_repeater_button_text_control' => true,
						'customizer_repeater_button_link_control' => true,
						'customizer_repeater_image_control' => true,
						'customizer_repeater_newtab_control' => true,
						'customizer_repeater_nofollow_control' => true,
					) 
				) 
			);
		
		// Upgrade To Pro //
		class  Electromix_right_slider_section_upgrade extends WP_Customize_Control {
			public function render_content() { 	
				
			?>
				<a class="customizer_right_slider_section_premium up-to-pro" style="padding:9px 0; text-align:center; display: none;" href="<?php echo esc_url(electromix_premium_links()); ?>" target="_blank"><?php esc_html_e('Upgrade To Pro For More','ecommerce-companion'); ?></a>
				
			<?php }
		}
		
		$wp_customize->add_setting( 'electromix_right_slider_upgrade_to_pro', array(
			'capability'			=> 'edit_theme_options',
			'electromix_sanitize_callback'	=> 'wp_filter_nohtml_kses',			
		));
		
		$wp_customize->add_control(
			new  Electromix_right_slider_section_upgrade(
			$wp_customize,
			'electromix_right_slider_upgrade_to_pro',
				array(
					'section'				=> 'slider_setting',
				)
			)
		);
		
		$wp_customize->add_setting( 'slider_b', 
			array(
			 'sanitize_callback' => 'electromix_repeater_sanitize',
			 'priority' => 5,
			  'default' => electromix_get_slider_b_default()
			)
		);
		
		$wp_customize->add_control( 
			new Electromix_Repeater( $wp_customize, 
				'slider_b', 
					array(
						'label'   => esc_html__('Bottom Slide','ecommerce-companion'),
						'section' => 'slider_setting',
						'add_field_label'                   => esc_html__( 'Add New Bottom Slide', 'ecommerce-companion' ),
						'item_name'                         => esc_html__( 'BottomSlide', 'ecommerce-companion' ),
						'customizer_repeater_title_control' => true,
						'customizer_repeater_subtitle_control' => true,
						'customizer_repeater_subtitle2_control' => true,
						'customizer_repeater_subtitle3_control' => true,
						'customizer_repeater_button_text_control' => true,
						'customizer_repeater_button_link_control' => true,
						'customizer_repeater_image_control' => true,
						'customizer_repeater_newtab_control' => true,
						'customizer_repeater_nofollow_control' => true,
					) 
				) 
			);
			
		// Upgrade To Pro //
		class  Electromix_bottom_slider_section_upgrade extends WP_Customize_Control {
			public function render_content() { 	
				
			?>
				<a class="customizer_bottom_slider_section_premium up-to-pro" style="padding:9px 0; text-align:center; display: none;" href="<?php echo esc_url(electromix_premium_links()); ?>" target="_blank"><?php esc_html_e('Upgrade To Pro For More','ecommerce-companion'); ?></a>
				
			<?php }
		}
		
		$wp_customize->add_setting( 'electromix_bottom_slider_upgrade_to_pro', array(
			'capability'			=> 'edit_theme_options',
			'electromix_sanitize_callback'	=> 'wp_filter_nohtml_kses',			
		));
		
		$wp_customize->add_control(
			new  Electromix_bottom_slider_section_upgrade(
			$wp_customize,
			'electromix_bottom_slider_upgrade_to_pro',
				array(
					'section'				=> 'slider_setting',
				)
			)
		);
			
	//Overlay Enable 
	$wp_customize->add_setting( 
		'slider_autoplay' , 
			array(
			'capability' => 'edit_theme_options',
			'sanitize_callback' => 'electromix_sanitize_checkbox',
			'priority' => 6,
			'default' => '1'
		) 
	);
	
	$wp_customize->add_control(
	'slider_autoplay', 
		array(
			'label'	      => esc_html__( 'Autoplay ?', 'ecommerce-companion' ),
			'section'     => 'slider_setting',
			'type'        => 'checkbox'
		) 
	);	
		
	
	// slider opacity
	if ( class_exists( 'Electromix_Customizer_Range_Control' ) ) {
		$wp_customize->add_setting(
			'slider_animation_speed',
			array(
				'default' => '5000',
				'capability'     	=> 'edit_theme_options',
				'sanitize_callback' => 'electromix_sanitize_range_value',
				'priority' => 11,
			)
		);
		$wp_customize->add_control( 
		new Electromix_Customizer_Range_Control( $wp_customize, 'slider_animation_speed', 
			array(
				'label'      => __( 'Slider Speed', 'ecommerce-companion' ),
				'section'  => 'slider_setting',
				 'media_query'   => false,
					'input_attr'    => array(
						'desktop' => array(
							'min'           => 500,
							'max'           => 10000,
							'step'          => 500,
							'default_value' => 5000,
						),
					),
			) ) 
		);
	}
	
	// Upgrade To Pro //
	class  Electromix__slider_section_upgrade extends WP_Customize_Control {
		public function render_content() { 	
			
		?>
			<a class="customizer__slider_section_premium up-to-pro" style="padding:9px 0; text-align:center;" href="<?php echo esc_url(electromix_premium_links()); ?>" target="_blank"><?php esc_html_e('Unlock By Upgrade To Pro','ecommerce-companion'); ?></a>
			
		<?php }
	}
	
	$wp_customize->add_setting( 'electromix__slider_upgrade_to_pro', array(
		'capability'			=> 'edit_theme_options',
		'electromix_sanitize_callback'	=> 'wp_filter_nohtml_kses',			
	));
	
	$wp_customize->add_control(
		new  Electromix__slider_section_upgrade(
		$wp_customize,
		'electromix__slider_upgrade_to_pro',
			array(
				'section'				=> 'slider_setting',
			)
		)
	);
}

add_action( 'customize_register', 'electromix_slider_setting' );

//selective refresh
function electromix_slider_partials( $wp_customize ){	
	
	// banner content
	$wp_customize->selective_refresh->add_partial( 'slider', array(
		'selector'            => '.main-slider'
	) );
	
}
add_action( 'customize_register', 'electromix_slider_partials' );