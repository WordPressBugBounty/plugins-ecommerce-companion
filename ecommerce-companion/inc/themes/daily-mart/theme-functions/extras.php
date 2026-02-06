<?php
if ( ! defined( 'ABSPATH' ) ) exit;
/* Brands default */
if(! function_exists('ecommerce_companion_get_brand_default')) {
	function ecommerce_companion_get_brand_default() {
		return apply_filters(
		'ecommerce_companion_get_brand_default', wp_json_encode(
				 array(
					array(												
						'title' 		=> esc_html__('Brand-1','ecommerce-companion'),
						'image_url' 	=> esc_url(ECOMMERCE_COMP_PLUGIN_URL . 'inc/themes/daily-mart/assets/images/brand/brand-1.png'),
						'link'  		=>  '',
						'newtab'  		=>  'yes',
						'nofollow'  	=>  'yes',
						'id'        	=> 'customizer_repeater_brand_001',
					),
					array(
						'title' 		=> esc_html__('Brand-2','ecommerce-companion'),
						'image_url' 	=> esc_url(ECOMMERCE_COMP_PLUGIN_URL . 'inc/themes/daily-mart/assets/images/brand/brand-2.png'),
						'link'  		=>  '',
						'newtab'  		=>  'yes',
						'nofollow'  	=>  'yes',
						'id'        	=> 'customizer_repeater_brand_002',
					),
					array(
						'title' 		=> esc_html__('Brand-3','ecommerce-companion'),
						'image_url' 	=> esc_url(ECOMMERCE_COMP_PLUGIN_URL . 'inc/themes/daily-mart/assets/images/brand/brand-3.png'),
						'link'  		=>  '',
						'newtab'  		=>  'yes',
						'nofollow'  	=>  'yes',
						'id'        	=> 'customizer_repeater_brand_003',
					),
					array(
						'title' 		=> esc_html__('Brand-4','ecommerce-companion'),
						'image_url' 	=> esc_url(ECOMMERCE_COMP_PLUGIN_URL . 'inc/themes/daily-mart/assets/images/brand/brand-4.png'),
						'link'  		=>  '',
						'newtab'  		=>  'yes',
						'nofollow'  	=>  'yes',
						'id'        	=> 'customizer_repeater_brand_004',
					),
					array(
						'title' 		=> esc_html__('Brand-5','ecommerce-companion'),
						'image_url' 	=> esc_url(ECOMMERCE_COMP_PLUGIN_URL . 'inc/themes/daily-mart/assets/images/brand/brand-5.png'),
						'link'  		=>  '',
						'newtab'  		=>  'yes',
						'nofollow'  	=>  'yes',
						'id'        	=> 'customizer_repeater_brand_005',
					),
					array(
						'title' 		=> esc_html__('Brand-6','ecommerce-companion'),
						'image_url' 	=> esc_url(ECOMMERCE_COMP_PLUGIN_URL . 'inc/themes/daily-mart/assets/images/brand/brand-6.png'),
						'link'  		=>  '',
						'newtab'  		=>  'yes',
						'nofollow'  	=>  'yes',
						'id'        	=> 'customizer_repeater_brand_006',
					),
				)
			)
		);
	}
}