<?php
	if ( ! defined( 'ABSPATH' ) ) exit;
	/*
 *
 * Product Slider Default
 */
 function electromix_get_product_default() {
	return apply_filters(
		'electromix_get_product_default', wp_json_encode(
				 array(
				array(
					'image_url'       	=> ECOMMERCE_COMP_PLUGIN_URL . 'inc/themes/electromix/assets/images/categories/smart_phone.png',
					'title'           	=> esc_html__( 'Noise Wireless Headphones', 'ecommerce-companion' ),
					'text'	  			=>  esc_html__( '$200', 'ecommerce-companion' ),
					'link'	  			=>  esc_html__( '#', 'ecommerce-companion' ),
					'id'              	=> 'customizer_repeater_product_001',
				),
				array(
					'image_url'       	=> ECOMMERCE_COMP_PLUGIN_URL . 'inc/themes/electromix/assets/images/categories/smart_phone.png',
					'title'           	=> esc_html__( 'Noise Wireless Headphones', 'ecommerce-companion' ),			
					'text'	  			=>  esc_html__( '$200', 'ecommerce-companion' ),
					'link'	  			=>  esc_html__( '#', 'ecommerce-companion' ),
					'id'              	=> 'customizer_repeater_product_002',
				),
				array(
					'image_url'       	=> ECOMMERCE_COMP_PLUGIN_URL . 'inc/themes/electromix/assets/images/categories/smart_phone.png',
					'title'           	=> esc_html__( 'Noise Wireless Headphones', 'ecommerce-companion' ),									
					'text'	  			=>  esc_html__( '$200', 'ecommerce-companion' ),
					'link'	  			=>  esc_html__( '#', 'ecommerce-companion' ),
					'id'              	=> 'customizer_repeater_product_003',
				),
				array(
					'image_url'       	=> ECOMMERCE_COMP_PLUGIN_URL . 'inc/themes/electromix/assets/images/categories/smart_phone.png',
					'title'           	=> esc_html__( 'Noise Wireless Headphones', 'ecommerce-companion' ),									
					'text'	  			=>  esc_html__( '$200', 'ecommerce-companion' ),
					'link'	  			=>  esc_html__( '#', 'ecommerce-companion' ),
					'id'              	=> 'customizer_repeater_product_004',
				),
				array(
					'image_url'       	=> ECOMMERCE_COMP_PLUGIN_URL . 'inc/themes/electromix/assets/images/categories/smart_phone.png',
					'title'           	=> esc_html__( 'Noise Wireless Headphones', 'ecommerce-companion' ),
					'text'	  			=>  esc_html__( '$200', 'ecommerce-companion' ),
					'link'	  			=>  esc_html__( '#', 'ecommerce-companion' ),
					'id'             	=> 'customizer_repeater_product_005',
				),
				array(
					'image_url'       	=> ECOMMERCE_COMP_PLUGIN_URL . 'inc/themes/electromix/assets/images/categories/smart_phone.png',
					'title'           	=> esc_html__( 'Noise Wireless Headphones', 'ecommerce-companion' ),			
					'text'	  			=>  esc_html__( '$200', 'ecommerce-companion' ),
					'link'	  			=>  esc_html__( '#', 'ecommerce-companion' ),
					'id'              	=> 'customizer_repeater_product_006',
				),
			)
		)
	);
}

/*
 *
 * Slider Default
 */
 function electromix_get_slider_default() {
	return apply_filters(
		'electromix_get_slider_default', wp_json_encode(
				 array(
				array(
					'image_url'       	=> ECOMMERCE_COMP_PLUGIN_URL . 'inc/themes/electromix/assets/images/sidebar/home_1.png',
					'image_url2'       	=> ECOMMERCE_COMP_PLUGIN_URL . 'inc/themes/electromix/assets/images/sidebar/bg_patter.png',
					'title'           	=> esc_html__( 'Top Best Season', 'ecommerce-companion' ),
					'subtitle'          => esc_html__( 'Sony DualSense', 'ecommerce-companion' ),
					'subtitle2'         => esc_html__( 'Wireless Controller', 'ecommerce-companion' ),
					'text'	  			=>  esc_html__( ' Textured grips', 'ecommerce-companion' ),
					'text2'	  			=>  esc_html__( ' Button Placement', 'ecommerce-companion' ),
					'text3'	  			=>  esc_html__( ' Overall Weight', 'ecommerce-companion' ),
					'text4'	  			=>  '',
					'text5'	  			=>  '',
					'button_text'	  	=>  esc_html__( 'Shop Now', 'ecommerce-companion' ),
					'button_link'	  	=>  esc_html__( '#', 'ecommerce-companion' ),
					'newtab'	  		=>  esc_html__( 'yes', 'ecommerce-companion' ),
					'nofollow'	  		=>  esc_html__( 'yes', 'ecommerce-companion' ),
					'slide_align' 		=> 'left', 
					'color' 			=> '#0088CC',
					'color2' 			=> '#000000',
					'color3' 			=> '#000000',
					'id'              	=> 'customizer_repeater_slider_001',
				),
				array(
					'image_url'       	=> ECOMMERCE_COMP_PLUGIN_URL . 'inc/themes/electromix/assets/images/sidebar/home_1.png',
					'image_url2'       	=> ECOMMERCE_COMP_PLUGIN_URL . 'inc/themes/electromix/assets/images/sidebar/bg_patter.png',
					'title'           	=> esc_html__( 'Top Best Season', 'ecommerce-companion' ),
					'subtitle'          => esc_html__( 'Sony DualSense', 'ecommerce-companion' ),
					'subtitle2'         => esc_html__( 'Wireless Controller', 'ecommerce-companion' ),
					'text'	  			=>  esc_html__( ' Textured grips', 'ecommerce-companion' ),
					'text2'	  			=>  esc_html__( ' Button Placement', 'ecommerce-companion' ),
					'text3'	  			=>  esc_html__( ' Overall Weight', 'ecommerce-companion' ),
					'text4'	  			=>  '',
					'text5'	  			=>  '',
					'button_text'	  	=>  esc_html__( 'Shop Now', 'ecommerce-companion' ),
					'button_link'	  	=>  esc_html__( '#', 'ecommerce-companion' ),
					'newtab'	  		=>  esc_html__( '1', 'ecommerce-companion' ),
					'nofollow'	  		=>  esc_html__( '1', 'ecommerce-companion' ),
					'slide_align' 		=> 'left', 
					'color' 			=> '#0088CC',
					'color2' 			=> '#000000',
					'color3' 			=> '#000000',
					'id'              	=> 'customizer_repeater_slider_002',
				),
				array(
					'image_url'       	=> ECOMMERCE_COMP_PLUGIN_URL . 'inc/themes/electromix/assets/images/sidebar/home_1.png',
					'image_url2'       	=> ECOMMERCE_COMP_PLUGIN_URL . 'inc/themes/electromix/assets/images/sidebar/bg_patter.png',
					'title'           	=> esc_html__( 'Top Best Season', 'ecommerce-companion' ),
					'subtitle'          => esc_html__( 'Sony DualSense', 'ecommerce-companion' ),
					'subtitle2'         => esc_html__( 'Wireless Controller', 'ecommerce-companion' ),
					'text'	  			=>  esc_html__( ' Textured grips', 'ecommerce-companion' ),
					'text2'	  			=>  esc_html__( ' Button Placement', 'ecommerce-companion' ),
					'text3'	  			=>  esc_html__( ' Overall Weight', 'ecommerce-companion' ),
					'text4'	  			=>  '',
					'text5'	  			=> '',
					'button_text'	  	=>  esc_html__( 'Shop Now', 'ecommerce-companion' ),
					'button_link'	  	=>  esc_html__( '#', 'ecommerce-companion' ),
					'newtab'	  		=>  esc_html__( '1', 'ecommerce-companion' ),
					'nofollow'	  		=>  esc_html__( '1', 'ecommerce-companion' ),
					'slide_align' 		=> 'left', 
					'color' 			=> '#0088CC',
					'color2' 			=> '#000000',
					'color3' 			=> '#000000',
					'id'              	=> 'customizer_repeater_slider_003',
				),
			)
		)
	);
}

/*
 *
 * Slider Default
 */
 function electromix_get_slider_r_default() {
	return apply_filters(
		'electromix_get_slider_r_default', wp_json_encode(
				 array(
				array(
					'image_url'       	=> ECOMMERCE_COMP_PLUGIN_URL . 'inc/themes/electromix/assets/images/banner/main/img_1.png',
					'image_url2'       	=> ECOMMERCE_COMP_PLUGIN_URL . 'inc/themes/electromix/assets/images/sidebar/bg_patter.png',
					'title'           	=> esc_html__( 'Save Up To 50% Off', 'ecommerce-companion' ),
					'subtitle'          => esc_html__( 'Best Deal To Grab', 'ecommerce-companion' ),
					'subtitle2'         => esc_html__( 'Strating', 'ecommerce-companion' ),
					'subtitle3'	  		=>  esc_html__( '$15.00', 'ecommerce-companion' ),					
					'button_text'	  	=>  esc_html__( 'Shop Now', 'ecommerce-companion' ),
					'button_link'	  	=>  esc_html__( '#', 'ecommerce-companion' ),
					'newtab'	  		=>  esc_html__( 'yes', 'ecommerce-companion' ),
					'nofollow'	  		=>  esc_html__( 'yes', 'ecommerce-companion' ),
					'slide_align' 		=> 'left', 
					'color' 			=> '#0088CC',
					'color2' 			=> '#000000',
					'color3' 			=> '#000000',
					'id'              	=> 'customizer_repeater_slider_r_001',
				),
				array(
					'image_url'       	=> ECOMMERCE_COMP_PLUGIN_URL . 'inc/themes/electromix/assets/images/banner/main/img_2.png',
					'image_url2'       	=> ECOMMERCE_COMP_PLUGIN_URL . 'inc/themes/electromix/assets/images/sidebar/bg_patter.png',
					'title'           	=> esc_html__( 'Save Up To 50% Off', 'ecommerce-companion' ),
					'subtitle'          => esc_html__( 'Best Deal To Grab', 'ecommerce-companion' ),
					'subtitle2'         => esc_html__( 'Strating', 'ecommerce-companion' ),
					'subtitle3'	  		=>  esc_html__( '$15.00', 'ecommerce-companion' ),					
					'button_text'	  	=>  esc_html__( 'Shop Now', 'ecommerce-companion' ),
					'button_link'	  	=>  esc_html__( '#', 'ecommerce-companion' ),
					'newtab'	  		=>  esc_html__( '1', 'ecommerce-companion' ),
					'nofollow'	  		=>  esc_html__( '1', 'ecommerce-companion' ),
					'slide_align' 		=> 'left', 
					'color' 			=> '#0088CC',
					'color2' 			=> '#000000',
					'color3' 			=> '#000000',
					'id'              	=> 'customizer_repeater_slider_r_002',
				),
			)
		)
	);
}

/*
 *
 * Slider Default
 */
 function electromix_get_slider_b_default() {
	return apply_filters(
		'electromix_get_slider_b_default', wp_json_encode(
				 array(
				array(
					'image_url'       	=> ECOMMERCE_COMP_PLUGIN_URL . 'inc/themes/electromix/assets/images/banner/main/img_3.png',
					'image_url2'       	=> ECOMMERCE_COMP_PLUGIN_URL . 'inc/themes/electromix/assets/images/sidebar/bg_patter.png',
					'title'           	=> esc_html__( 'Save Up To 50% Off', 'ecommerce-companion' ),
					'subtitle'          => esc_html__( 'Best Deal To Grab', 'ecommerce-companion' ),
					'subtitle2'         => esc_html__( 'Strating', 'ecommerce-companion' ),
					'subtitle3'	  		=>  esc_html__( '$15.00', 'ecommerce-companion' ),					
					'button_text'	  	=>  esc_html__( 'Shop Now', 'ecommerce-companion' ),
					'button_link'	  	=>  esc_html__( '#', 'ecommerce-companion' ),
					'newtab'	  		=>  esc_html__( 'yes', 'ecommerce-companion' ),
					'nofollow'	  		=>  esc_html__( 'yes', 'ecommerce-companion' ),
					'slide_align' 		=> 'left', 
					'color' 			=> '#0088CC',
					'color2' 			=> '#000000',
					'color3' 			=> '#000000',
					'id'              	=> 'customizer_repeater_slider_b_001',
				),
				array(
					'image_url'       	=> ECOMMERCE_COMP_PLUGIN_URL . 'inc/themes/electromix/assets/images/banner/main/img_4.png',
					'image_url2'       	=> ECOMMERCE_COMP_PLUGIN_URL . 'inc/themes/electromix/assets/images/sidebar/bg_patter.png',
					'title'           	=> esc_html__( 'UpTo 50% Off', 'ecommerce-companion' ),
					'subtitle'          => esc_html__( 'Best Deal To Grab', 'ecommerce-companion' ),
					'subtitle2'         => esc_html__( 'Strating', 'ecommerce-companion' ),
					'subtitle3'	  		=>  esc_html__( '$15.00', 'ecommerce-companion' ),					
					'button_text'	  	=>  esc_html__( 'Shop Now', 'ecommerce-companion' ),
					'button_link'	  	=>  esc_html__( '#', 'ecommerce-companion' ),
					'newtab'	  		=>  esc_html__( '1', 'ecommerce-companion' ),
					'nofollow'	  		=>  esc_html__( '1', 'ecommerce-companion' ),
					'slide_align' 		=> 'left', 
					'color' 			=> '#0088CC',
					'color2' 			=> '#000000',
					'color3' 			=> '#000000',
					'id'              	=> 'customizer_repeater_slider_b_002',
				),
				array(
					'image_url'       	=> ECOMMERCE_COMP_PLUGIN_URL . 'inc/themes/electromix/assets/images/banner/main/img_5.png',
					'image_url2'       	=> ECOMMERCE_COMP_PLUGIN_URL . 'inc/themes/electromix/assets/images/sidebar/bg_patter.png',
					'title'           	=> esc_html__( 'Save Up To 50% Off', 'ecommerce-companion' ),
					'subtitle'          => esc_html__( 'Best Deal To Grab', 'ecommerce-companion' ),
					'subtitle2'         => esc_html__( 'Strating', 'ecommerce-companion' ),
					'subtitle3'	  		=>  esc_html__( '$15.00', 'ecommerce-companion' ),					
					'button_text'	  	=>  esc_html__( 'Shop Now', 'ecommerce-companion' ),
					'button_link'	  	=>  esc_html__( '#', 'ecommerce-companion' ),
					'newtab'	  		=>  esc_html__( '1', 'ecommerce-companion' ),
					'nofollow'	  		=>  esc_html__( '1', 'ecommerce-companion' ),
					'slide_align' 		=> 'left', 
					'color' 			=> '#0088CC',
					'color2' 			=> '#000000',
					'color3' 			=> '#000000',
					'id'              	=> 'customizer_repeater_slider_b_003',
				),				
			)
		)
	);
}

/*
*
Info Section
*
*/ 
function electromix_info_default() {
	return apply_filters(
		'electromix_info_default', wp_json_encode(
				 array(
				array(
					'icon_value'       => 'fa-truck',
					'title'           => esc_html__( 'Fast & Free Shipping', 'ecommerce-companion' ),
					'text'            => 'Lorem ipsum dolor sit amet',
					'id'              => 'customizer_repeater_hdr_info_001',
				),
				array(
					'icon_value'       => 'fa-usd',
					'title'           => esc_html__( '07 Days Money Back', 'ecommerce-companion' ),
					'text'            => 'Lorem ipsum dolor sit amet',
					'id'              => 'customizer_repeater_hdr_info_002',
				),
				array(
					'icon_value'       => 'fa-user',
					'title'           => esc_html__( 'Online Support 24/7', 'ecommerce-companion' ),
					'text'            => 'Lorem ipsum dolor sit amet',
					'id'              => 'customizer_repeater_hdr_info_003',
				),
				array(
					'icon_value'       => 'fa-shield-alt',
					'title'           => esc_html__( 'Secure Payment', 'ecommerce-companion' ),
					'text'            => 'Lorem ipsum dolor sit amet',
					'id'              => 'customizer_repeater_hdr_info_004',
				)
			)
		)
	);
}

/**
	Bundled Product Slider
	**
*/
function electromix_get_default_pd_slider() {
	return apply_filters(
		'electromix_get_default_pd_slider', wp_json_encode(
				 array(
				array(
					'title'           	=> esc_html__( 'Gaming Computer', 'ecommerce-companion' ),
					'icon_value'        => esc_attr__( 'fa-desktop', 'ecommerce-companion' ),
					'text'	  			=>  '',
					'id'              	=> 'customizer_repeater_ps_slide_001',
				),
				array(
					'icon_value'       	=> 'fa-money',
					'title'           	=> esc_html__( 'Business Product', 'ecommerce-companion' ),
					'icon_value'        => esc_attr__( 'fa-print', 'ecommerce-companion' ),
					'text'	  			=>  '',
					'id'             	=> 'customizer_repeater_ps_slide_002',
				),
				array(
					'icon_value'       	=> 'fa-credit-card',
					'title'           	=> esc_html__( 'CCTV Combo', 'ecommerce-companion' ),
					'icon_value'        => esc_attr__( 'fa-video-camera', 'ecommerce-companion' ),
					'text'	  			=>  '',
					'id'             	=> 'customizer_repeater_ps_slide_003',
				)
			)
		)
	);	
}

/**
	Product Slider
	**
*/
function electromix_get_default_pd_slider2() {
	return apply_filters(
		'electromix_get_default_pd_slider2', wp_json_encode(
				 array(
				array(
					'title'           	=> esc_html__( 'CCTV Camera', 'ecommerce-companion' ),
					'icon_value'        => esc_attr__( 'fa-gamepad', 'ecommerce-companion' ),
					'text'	  			=>  '',
					'id'              	=> 'customizer_repeater_ps2_slide_001',
				),
				array(
					'icon_value'       	=> 'fa-money',
					'title'           	=> esc_html__( 'Smart Watch', 'ecommerce-companion' ),
					'icon_value'        => esc_attr__( 'fa-television', 'ecommerce-companion' ),
					'text'	  			=>  '',
					'id'             	=> 'customizer_repeater_ps2_slide_002',
				),
				array(
					'icon_value'       	=> 'fa-credit-card',
					'title'           	=> esc_html__( 'Speaker', 'ecommerce-companion' ),
					'icon_value'        => esc_attr__( 'fa-archive', 'ecommerce-companion' ),
					'text'	  			=>  '',
					'id'             	=> 'customizer_repeater_ps2_slide_003',
				)
			)
		)
	);	
}
/*
 *
 * Banner2 Default
 */
 function electromix_get_banner2_default() {
	return apply_filters(
		'electromix_get_banner2_default', wp_json_encode(
				 array(
				array(
					'image_url'       => ECOMMERCE_COMP_PLUGIN_URL . 'inc/themes/electromix/assets/images/banner/3/img_1.png',
					'image_url2'       => ECOMMERCE_COMP_PLUGIN_URL . 'inc/themes/electromix/assets/images/banner/3/bg_patter1.png',
					'title'         => esc_html__( 'POWERBEAT PRO', 'ecommerce-companion' ),
					'subtitle'         => esc_html__( 'Performance Earbuds', 'ecommerce-companion' ),
					'subtitle2'         => esc_html__( 'From Now', 'ecommerce-companion' ),
					'subtitle3'         => esc_html__( '$330.00', 'ecommerce-companion' ),
					'subtitle4'         => esc_html__( '$530.00', 'ecommerce-companion' ),
					'text'           => '',
					'text2'	  =>  esc_html__( '5', 'ecommerce-companion' ),
					'button_text'	  =>  esc_html__( 'Shop Now', 'ecommerce-companion' ),
					'button_link'	  =>  '',
					'newtab'	  =>  esc_html__( 'yes', 'ecommerce-companion' ),
					'nofollow'	  =>  esc_html__( 'yes', 'ecommerce-companion' ),
					'id'              => 'customizer_repeater_banner2_001',
				),
				array(
					'image_url'       => ECOMMERCE_COMP_PLUGIN_URL . 'inc/themes/electromix/assets/images/banner/3/img_2.png',
					'image_url2'       => ECOMMERCE_COMP_PLUGIN_URL . 'inc/themes/electromix/assets/images/banner/3/bg_patter2.png',
					'title'         => esc_html__( 'TOP SELLER', 'ecommerce-companion' ),
					'subtitle'         => esc_html__( 'Beauty on Your Wrist', 'ecommerce-companion' ),
					'subtitle2'         => esc_html__( 'From Now', 'ecommerce-companion' ),
					'subtitle3'         => esc_html__( '$210.00', 'ecommerce-companion' ),
					'subtitle4'         => esc_html__( '$350.00', 'ecommerce-companion' ),
					'text'           => '',
					'text2'           => esc_html__( '7', 'ecommerce-companion' ),
					'button_text'	  =>  esc_html__( 'Shop Now', 'ecommerce-companion' ),
					'button_link'	  =>  '',
					'newtab'	  =>  esc_html__( 'yes', 'ecommerce-companion' ),
					'nofollow'	  =>  esc_html__( 'yes', 'ecommerce-companion' ),
					'id'              => 'customizer_repeater_banner2_002',
				),
			)
		)
	);
}

/*
 *
 * Banner2 Default
 */
 function electromix_get_banner_default() {
	return apply_filters(
		'electromix_get_banner_default', wp_json_encode(
				 array(
				array(
					'image_url'       => ECOMMERCE_COMP_PLUGIN_URL . 'inc/themes/electromix-digital/assets/images/banner/1/img_1.png',
					'image_url2'       => ECOMMERCE_COMP_PLUGIN_URL . 'inc/themes/electromix-digital/assets/images/banner/1/bg_patter1.png',
					'title'         => esc_html__( 'Gaming', 'ecommerce-companion' ),
					'subtitle'         => esc_html__( 'LED Monitors', 'ecommerce-companion' ),
					'subtitle2'         => esc_html__( 'Starting', 'ecommerce-companion' ),
					'subtitle3'         => esc_html__( '$99.00', 'ecommerce-companion' ),
					'text'           => esc_html__( 'Best Offer', 'ecommerce-companion' ),
					'button_text'	  =>  esc_html__( 'Shop Now', 'ecommerce-companion' ),
					'button_link'	  =>  '',
					'newtab'	  =>  esc_html__( 'yes', 'ecommerce-companion' ),
					'nofollow'	  =>  esc_html__( 'yes', 'ecommerce-companion' ),
					'id'              => 'customizer_repeater_banner_001',
				),
				array(
					'image_url'       => ECOMMERCE_COMP_PLUGIN_URL . 'inc/themes/electromix-digital/assets/images/banner/1/img_2.png',
					'image_url2'       => ECOMMERCE_COMP_PLUGIN_URL . 'inc/themes/electromix-digital/assets/images/banner/1/bg_patter1.png',
					'title'         => esc_html__( 'Wireless', 'ecommerce-companion' ),
					'subtitle'         => esc_html__( 'FOR IPhone', 'ecommerce-companion' ),
					'subtitle2'         => esc_html__( 'Starting', 'ecommerce-companion' ),
					'subtitle3'         => esc_html__( '$66.00', 'ecommerce-companion' ),
					'text'           => esc_html__( 'Best Offer', 'ecommerce-companion' ),
					'button_text'	  =>  esc_html__( 'Shop Now', 'ecommerce-companion' ),
					'button_link'	  =>  '',
					'newtab'	  =>  esc_html__( 'yes', 'ecommerce-companion' ),
					'nofollow'	  =>  esc_html__( 'yes', 'ecommerce-companion' ),
					'id'              => 'customizer_repeater_banner_002',
				),
				array(
					'image_url'       => ECOMMERCE_COMP_PLUGIN_URL . 'inc/themes/electromix-digital/assets/images/banner/1/img_3.png',
					'image_url2'       => ECOMMERCE_COMP_PLUGIN_URL . 'inc/themes/electromix-digital/assets/images/banner/1/bg_patter1.png',
					'title'         => esc_html__( 'Boat PartyPal', 'ecommerce-companion' ),
					'subtitle'         => esc_html__( '390/400 Speaker', 'ecommerce-companion' ),
					'subtitle2'         => esc_html__( 'Starting', 'ecommerce-companion' ),
					'subtitle3'         => esc_html__( '$23.00', 'ecommerce-companion' ),
					'text'           => esc_html__( 'Best Offer', 'ecommerce-companion' ),
					'button_text'	  =>  esc_html__( 'Shop Now', 'ecommerce-companion' ),
					'button_link'	  =>  '',
					'newtab'	  =>  esc_html__( 'yes', 'ecommerce-companion' ),
					'nofollow'	  =>  esc_html__( 'yes', 'ecommerce-companion' ),
					'id'              => 'customizer_repeater_banner_003',
				),
			)
		)
	);
}

/*
 *
 * Banner4 Default
 */
 function electromix_get_banner4_default() {
	return apply_filters(
		'electromix_get_banner4_default', wp_json_encode(
				 array(
				array(
					'image_url'       => ECOMMERCE_COMP_PLUGIN_URL . 'inc/themes/electromix/assets/images/banner/4/img_1.png',
					'title'         => esc_html__( 'Wireless', 'ecommerce-companion' ),
					'subtitle'         => esc_html__( 'Latest Headphone', 'ecommerce-companion' ),
					'subtitle2'         => esc_html__( 'Use Code', 'ecommerce-companion' ),
					'text'           => esc_html__( 'NEW20', 'ecommerce-companion' ),
					'button_text'	  =>  esc_html__( 'Shop Now', 'ecommerce-companion' ),
					'button_link'	  =>  '',
					'newtab'	  =>  esc_html__( 'yes', 'ecommerce-companion' ),
					'nofollow'	  =>  esc_html__( 'yes', 'ecommerce-companion' ),
					'id'              => 'customizer_repeater_banner4_001',
				),
				array(
					'image_url'       => ECOMMERCE_COMP_PLUGIN_URL . 'inc/themes/electromix/assets/images/banner/4/img_2.png',
					'title'         => esc_html__( 'Speaker', 'ecommerce-companion' ),
					'subtitle'         => esc_html__( 'Cheap Price', 'ecommerce-companion' ),
					'subtitle2'         => esc_html__( 'Use Code', 'ecommerce-companion' ),
					'text'           => esc_html__( 'NEW20', 'ecommerce-companion' ),
					'button_text'	  =>  esc_html__( 'Shop Now', 'ecommerce-companion' ),
					'button_link'	  =>  '',
					'newtab'	  =>  esc_html__( 'yes', 'ecommerce-companion' ),
					'nofollow'	  =>  esc_html__( 'yes', 'ecommerce-companion' ),
					'id'              => 'customizer_repeater_banner4_002',
				),
				array(
					'image_url'       => ECOMMERCE_COMP_PLUGIN_URL . 'inc/themes/electromix/assets/images/banner/4/img_3.png',
					'title'         => esc_html__( 'i Phone', 'ecommerce-companion' ),
					'subtitle'         => esc_html__( 'Best Price', 'ecommerce-companion' ),
					'subtitle2'         => esc_html__( 'Use Code', 'ecommerce-companion' ),					
					'text'           => esc_html__( 'NEW20', 'ecommerce-companion' ),
					'button_text'	  =>  esc_html__( 'Shop Now', 'ecommerce-companion' ),
					'button_link'	  =>  '',
					'newtab'	  =>  esc_html__( 'yes', 'ecommerce-companion' ),
					'nofollow'	  =>  esc_html__( 'yes', 'ecommerce-companion' ),
					'id'              => 'customizer_repeater_banner4_003',
				),
			)
		)
	);
}

/*
 *
 * Sponsor Default
 */
 function electromix_get_sponsor_default() {
	return apply_filters(
		'electromix_get_sponsor_default', wp_json_encode(
				 array(
				array(
					'title'       	=> 'Acer',
					'icon'       	=> 'fa-laptop',
					'image_url'     => ECOMMERCE_COMP_PLUGIN_URL . 'inc/themes/electromix/assets/images/brand/acer.png',
					'text2'         => 'camera,ear buds',
					'link'       	=> '#',
					'id'            => 'customizer_repeater_sponsor_001',
				),
				array(
					'title'       	=> 'Apple',
					'icon'       	=> 'fa-camera',
					'image_url'     => ECOMMERCE_COMP_PLUGIN_URL . 'inc/themes/electromix/assets/images/brand/apple.png',
					'text2'         => 'smartwatch,controller',
					'link'       	=> '#',
					'id'            => 'customizer_repeater_sponsor_002',
				),
				array(
					'title'       	=> 'Asus',
					'icon'       	=> 'fa-headphone',
					'image_url'     => ECOMMERCE_COMP_PLUGIN_URL . 'inc/themes/electromix/assets/images/brand/asus.png',
					'text2'         => 'controller,smart phone',
					'link'       	=> '#',
					'id'            => 'customizer_repeater_sponsor_003',
				),
				array(
					'title'       	=> 'Dell',
					'icon'       	=> 'fa-gamepad',
					'image_url'     => ECOMMERCE_COMP_PLUGIN_URL . 'inc/themes/electromix/assets/images/brand/dell.png',
					'text2'         => 'laptop,ear buds,camera',
					'link'       	=> '#',
					'id'            => 'customizer_repeater_sponsor_004',
				),
				array(
					'title'       	=> 'HP',
					'icon'       	=> 'fa-clock-o',
					'image_url'     => ECOMMERCE_COMP_PLUGIN_URL . 'inc/themes/electromix/assets/images/brand/hp.png',
					'text2'         => 'headphone,laptop',
					'link'       	=> '#',
					'id'            => 'customizer_repeater_sponsor_005',
				),
				array(
					'title'       	=> 'Lenovo',
					'icon'       	=> 'fa-american-sign-language-interpreting',
					'image_url'     => ECOMMERCE_COMP_PLUGIN_URL . 'inc/themes/electromix/assets/images/brand/lenovo.png',
					'text2'         => 'smartwatch,smart phone,camera',
					'link'       	=> '#',
					'id'            => 'customizer_repeater_sponsor_006',
				),
				array(
					'title'       	=> 'Microsoft',
					'icon'       	=> 'fa-mobile',
					'image_url'     => ECOMMERCE_COMP_PLUGIN_URL . 'inc/themes/electromix/assets/images/brand/microsoft.png',
					'text2'         => 'controller,laptop',
					'link'       	=> '#',
					'id'            => 'customizer_repeater_sponsor_007',
				),
				array(
					'title'       	=> 'MSI',
					'icon'       	=> '',
					'image_url'     => ECOMMERCE_COMP_PLUGIN_URL . 'inc/themes/electromix/assets/images/brand/msi.png',
					'text2'         => 'laptop,camera',
					'link'       	=> '#',
					'id'            => 'customizer_repeater_sponsor_008',
				),
				array(
					'title'       	=> 'Samsung',
					'icon'       	=> '',
					'image_url'     => ECOMMERCE_COMP_PLUGIN_URL . 'inc/themes/electromix/assets/images/brand/samsung.png',
					'text2'         => 'smartwatch,ear buds',
					'link'       	=> '#',
					'id'            => 'customizer_repeater_sponsor_008',
				),
				array(
					'title'       	=> 'Zebronics',
					'icon'       	=> '',
					'image_url'     => ECOMMERCE_COMP_PLUGIN_URL . 'inc/themes/electromix/assets/images/brand/zebronics.png',
					'text2'         => 'smartwatch,controller',
					'link'       	=> '#',
					'id'            => 'customizer_repeater_sponsor_0010',
				),
			)
		)
	);
}

/**
 * 
 * Electromix Premium Links
 * 
 */
 
 if ( ! function_exists( 'electromix_premium_links' ) ) :
	function electromix_premium_links() {
		
		$theme = wp_get_theme(); // gets the current theme
		if( 'Electromix Digital' == $theme->name){
			$electromix_premium_url= 'https://sellerthemes.com/electromix-digital-premium/';
		
		}else if( 'Electromix Tech' == $theme->name){
			$electromix_premium_url= 'https://sellerthemes.com/electromix-tech-premium/';
		
		}else if( 'Electromix Store' == $theme->name){
			$electromix_premium_url= 'https://sellerthemes.com/electromix-store-premium/';
		
		}else{
			$electromix_premium_url= 'https://sellerthemes.com/electromix-premium/';
		}	
		return $electromix_premium_url;
	}
endif;