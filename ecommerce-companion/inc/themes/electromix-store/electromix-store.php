<?php
	/**
 * @package   Electromix Store
 */
if ( ! defined( 'ABSPATH' ) ) exit;

require ECOMMERCE_COMP_PLUGIN_DIR . 'inc/themes/electromix/theme-functions/extras.php';
require ECOMMERCE_COMP_PLUGIN_DIR . 'inc/themes/storely/theme-functions/functions-style.php';
require ECOMMERCE_COMP_PLUGIN_DIR . 'inc/themes/electromix/theme-functions/dynamic_style.php';
require ECOMMERCE_COMP_PLUGIN_DIR . 'inc/themes/electromix/features/electromix-product-one.php';
require ECOMMERCE_COMP_PLUGIN_DIR . 'inc/themes/electromix/features/electromix-slider.php';
require ECOMMERCE_COMP_PLUGIN_DIR . 'inc/themes/electromix/features/electromix-product-two.php';
require ECOMMERCE_COMP_PLUGIN_DIR . 'inc/themes/electromix-digital/features/electromix-info.php';
require ECOMMERCE_COMP_PLUGIN_DIR . 'inc/themes/electromix/features/electromix-cat-one.php';
require ECOMMERCE_COMP_PLUGIN_DIR . 'inc/themes/electromix-digital/features/electromix-banner.php';
require ECOMMERCE_COMP_PLUGIN_DIR . 'inc/themes/electromix/features/electromix-products-slider.php';
require ECOMMERCE_COMP_PLUGIN_DIR . 'inc/themes/electromix/features/electromix-banner3.php';
require ECOMMERCE_COMP_PLUGIN_DIR . 'inc/themes/electromix-tech/features/electromix-products-slider-two.php';
require ECOMMERCE_COMP_PLUGIN_DIR . 'inc/themes/electromix/features/electromix-filter-products-one.php';
require ECOMMERCE_COMP_PLUGIN_DIR . 'inc/themes/electromix-tech/features/electromix-banner5.php';
require ECOMMERCE_COMP_PLUGIN_DIR . 'inc/themes/electromix/features/electromix-sponsors.php';
require ECOMMERCE_COMP_PLUGIN_DIR . 'inc/themes/electromix/features/electromix-typography.php';

if ( ! function_exists( 'ecommerce_comp_electromix_frontpage_sections' ) ) :
	function ecommerce_comp_electromix_frontpage_sections() {	
		 require ECOMMERCE_COMP_PLUGIN_DIR . 'inc/themes/electromix/sections/section-product-one.php';
		 require ECOMMERCE_COMP_PLUGIN_DIR . 'inc/themes/electromix/sections/section-slider.php';
		 require ECOMMERCE_COMP_PLUGIN_DIR . 'inc/themes/electromix/sections/section-product-two.php';
		 require ECOMMERCE_COMP_PLUGIN_DIR . 'inc/themes/electromix-digital/sections/section-banner-two.php';
		 require ECOMMERCE_COMP_PLUGIN_DIR . 'inc/themes/electromix/sections/section-category-one.php';
		 require ECOMMERCE_COMP_PLUGIN_DIR . 'inc/themes/electromix/sections/section-products-slider.php';
		 require ECOMMERCE_COMP_PLUGIN_DIR . 'inc/themes/electromix/sections/section-banner-three.php';
		 require ECOMMERCE_COMP_PLUGIN_DIR . 'inc/themes/electromix-digital/sections/section-category-two.php';
		 require ECOMMERCE_COMP_PLUGIN_DIR . 'inc/themes/electromix-tech/sections/section-products-slider-two.php';
		 require ECOMMERCE_COMP_PLUGIN_DIR . 'inc/themes/electromix/sections/section-filter-products-one.php';
		 require ECOMMERCE_COMP_PLUGIN_DIR . 'inc/themes/electromix-tech/sections/section-banner-five.php';
		 require ECOMMERCE_COMP_PLUGIN_DIR . 'inc/themes/electromix/sections/section-sponsors.php';
    }
	add_action( 'electromix_sections', 'ecommerce_comp_electromix_frontpage_sections' );
endif;