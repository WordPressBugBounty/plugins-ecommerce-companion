<?php
/**
 * @package   Pet Bazaar
 */

require ECOMMERCE_COMP_PLUGIN_DIR . 'inc/themes/pet-bazaar/theme-functions/extras.php';
require ECOMMERCE_COMP_PLUGIN_DIR . 'inc/themes/storely/theme-functions/functions-style.php';
require ECOMMERCE_COMP_PLUGIN_DIR . 'inc/themes/pet-bazaar/theme-functions/dynamic_style.php';
require ECOMMERCE_COMP_PLUGIN_DIR . 'inc/themes/pet-bazaar/features/pet-bazaar-header.php';
require ECOMMERCE_COMP_PLUGIN_DIR . 'inc/themes/pet-bazaar/features/pet-bazaar-slider.php';
require ECOMMERCE_COMP_PLUGIN_DIR . 'inc/themes/pet-bazaar/features/pet-bazaar-category.php';
require ECOMMERCE_COMP_PLUGIN_DIR . 'inc/themes/pet-bazaar/features/pet-bazaar-feature-product.php';
require ECOMMERCE_COMP_PLUGIN_DIR . 'inc/themes/pet-bazaar/features/pet-bazaar-banner.php';
require ECOMMERCE_COMP_PLUGIN_DIR . 'inc/themes/pet-bazaar/features/pet-bazaar-funfact.php';
require ECOMMERCE_COMP_PLUGIN_DIR . 'inc/themes/pet-bazaar/features/pet-bazaar-typography.php';

if ( ! function_exists( 'ecommerce_comp_pet_bazaar_frontpage_sections' ) ) :
	function ecommerce_comp_pet_bazaar_frontpage_sections() {	
		 require ECOMMERCE_COMP_PLUGIN_DIR . 'inc/themes/pet-bazaar/sections/section-slider.php';
		 require ECOMMERCE_COMP_PLUGIN_DIR . 'inc/themes/pet-bazaar/sections/section-category.php';
		 require ECOMMERCE_COMP_PLUGIN_DIR . 'inc/themes/pet-bazaar/sections/section-feature-product.php';
		 require ECOMMERCE_COMP_PLUGIN_DIR . 'inc/themes/pet-bazaar/sections/section-banner.php';
		 require ECOMMERCE_COMP_PLUGIN_DIR . 'inc/themes/pet-bazaar/sections/section-funfact.php';
    }
	add_action( 'pet_bazaar_sections', 'ecommerce_comp_pet_bazaar_frontpage_sections' );
endif;

set_theme_mod('abv_hdr_antext', __('Save up 35% off today, Supper Value Deals, Welcome To Our Pet Bazaar!'));
set_theme_mod('header_button_label', __('Find Store'));
set_theme_mod('header_button_link', '#');
set_theme_mod('hdr_contact_ttl', __('Contact Us Free'));
set_theme_mod('hdr_contact_subttl', __('+1234567890'));
set_theme_mod('visa_icon', 'fa-cc-visa');
set_theme_mod('visa_link', '#');
set_theme_mod('paypal_icon', 'fa-cc-paypal');
set_theme_mod('paypal_link', '#');
set_theme_mod('mastercard_icon', 'fa-cc-mastercard');
set_theme_mod('mastercard_link', '#');
set_theme_mod('amex_icon', 'fa-cc-amex');
set_theme_mod('amex_link', '#');
set_theme_mod('discover_icon', 'fa-cc-discover');
set_theme_mod('discover_link', '#');
set_theme_mod('jcb_icon', 'fa-cc-jcb');
set_theme_mod('jcb_link', '#');