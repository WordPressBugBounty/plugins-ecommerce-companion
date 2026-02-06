<?php
if ( ! defined( 'ABSPATH' ) ) exit;
$ecommerce_companion_MediaId = get_option('pet_bazaar_media_id');
$ecommerce_companion_content = '<p>The bond between human and pet is built on love, trust, loyalty, and mutual affection, creating an unbreakable connection.</p>';
$ecommerce_companion_product_ttl1 = "Purepet Dog";
$ecommerce_companion_product_ttl2 = "Exotic Fruit";
$ecommerce_companion_product_ttl3 = "Rainbow Fish";
$ecommerce_companion_product_ttl4 = "Macaw";
$ecommerce_companion_product_ttl5 = "Cat";
$ecommerce_companion_product_ttl6 = "Dog";
$ecommerce_companion_product_ttl7 = "TetraBits";
$ecommerce_companion_product_ttl8 = "Purepet Cat";

// Create post categories
$ecommerce_companion_relax_category = wp_insert_term('Relax', 'category', array('slug' => 'relax'));
$ecommerce_companion_joy_category = wp_insert_term('Joy', 'category', array('slug' => 'joy'));
$ecommerce_companion_lifestyle_category = wp_insert_term('Lifestyle', 'category', array('slug' => 'lifestyle'));

// Product categories (using WooCommerce)
if (class_exists('woocommerce')) {
    $ecommerce_companion_all_category = wp_insert_term('All', 'product_cat', array('slug' => 'all'));
    $ecommerce_companion_birds_category = wp_insert_term('Birds', 'product_cat', array('slug' => 'birds'));
    $ecommerce_companion_cats_category = wp_insert_term('Cats', 'product_cat', array('slug' => 'cats'));
    $ecommerce_companion_dogs_category = wp_insert_term('Dogs', 'product_cat', array('slug' => 'dogs'));
    $ecommerce_companion_fish_category = wp_insert_term('Fish', 'product_cat', array('slug' => 'fish'));
    $ecommerce_companion_food_category = wp_insert_term('Food', 'product_cat', array('slug' => 'food'));
}

// Prepare post data for blog and products
$ecommerce_companion_postData = array(
    // Blog Posts
    array(
        'post_title' => 'Cozy Moments with a Pet',
        'post_status' => 'publish',
        'post_content' => $ecommerce_companion_content,
        'post_author' => 1,
        'post_type' => 'post',
        'post_category' => array($ecommerce_companion_relax_category['term_id']),
        'tax_input' => array('post_tag' => array('Relax')),
    ),
    array(
        'post_title' => 'Capturing Joy with a Pet',
        'post_status' => 'publish',
        'post_content' => $ecommerce_companion_content,
        'post_author' => 1,
        'post_type' => 'post',
        'post_category' => array($ecommerce_companion_joy_category['term_id']),
        'tax_input' => array('post_tag' => array('Joy')),
    ),
    array(
        'post_title' => 'Embracing Technology and Love',
        'post_status' => 'publish',
        'post_content' => $ecommerce_companion_content,
        'post_author' => 1,
        'post_type' => 'post',
        'post_category' => array($ecommerce_companion_lifestyle_category['term_id']),
        'tax_input' => array('post_tag' => array('Lifestyle')),
    ),
    // Product Posts
    array(
        'post_title' => $ecommerce_companion_product_ttl1,
        'post_status' => 'publish',
        'post_content' => $ecommerce_companion_content,
        'post_author' => 1,
        'post_type' => 'product',
        'post_category' => array($ecommerce_companion_dogs_category['term_id'], $ecommerce_companion_food_category['term_id'], $ecommerce_companion_all_category['term_id']),
    ),
    array(
        'post_title' => $ecommerce_companion_product_ttl2,
        'post_status' => 'publish',
        'post_content' => $ecommerce_companion_content,
        'post_author' => 1,
        'post_type' => 'product',
        'post_category' => array($ecommerce_companion_birds_category['term_id'], $ecommerce_companion_food_category['term_id'], $ecommerce_companion_all_category['term_id']),
    ),
    array(
        'post_title' => $ecommerce_companion_product_ttl3,
        'post_status' => 'publish',
        'post_content' => $ecommerce_companion_content,
        'post_author' => 1,
        'post_type' => 'product',
        'post_category' => array($ecommerce_companion_fish_category['term_id'], $ecommerce_companion_all_category['term_id']),
    ),
    array(
        'post_title' => $ecommerce_companion_product_ttl4,
        'post_status' => 'publish',
        'post_content' => $ecommerce_companion_content,
        'post_author' => 1,
        'post_type' => 'product',
        'post_category' => array($ecommerce_companion_birds_category['term_id'], $ecommerce_companion_all_category['term_id']),
    ),
    array(
        'post_title' => $ecommerce_companion_product_ttl5,
        'post_status' => 'publish',
        'post_content' => $ecommerce_companion_content,
        'post_author' => 1,
        'post_type' => 'product',
        'post_category' => array($ecommerce_companion_cats_category['term_id'], $ecommerce_companion_all_category['term_id']),
    ),
    array(
        'post_title' => $ecommerce_companion_product_ttl6,
        'post_status' => 'publish',
        'post_content' => $ecommerce_companion_content,
        'post_author' => 1,
        'post_type' => 'product',
        'post_category' => array($ecommerce_companion_dogs_category['term_id'], $ecommerce_companion_all_category['term_id']),
    ),
    array(
        'post_title' => $ecommerce_companion_product_ttl7,
        'post_status' => 'publish',
        'post_content' => $ecommerce_companion_content,
        'post_author' => 1,
        'post_type' => 'product',
        'post_category' => array($ecommerce_companion_fish_category['term_id'], $ecommerce_companion_all_category['term_id']),
    ),
    array(
        'post_title' => $ecommerce_companion_product_ttl8,
        'post_status' => 'publish',
        'post_content' => $ecommerce_companion_content,
        'post_author' => 1,
        'post_type' => 'product',
        'post_category' => array($ecommerce_companion_cats_category['term_id'], $ecommerce_companion_all_category['term_id']),
    ),
);

kses_remove_filters();

foreach ($ecommerce_companion_postData as $ecommerce_companion_i => $ecommerce_companion_postData1) :
    $ecommerce_companion_id = wp_insert_post($ecommerce_companion_postData1);
    set_post_thumbnail($ecommerce_companion_id, $ecommerce_companion_MediaId[$ecommerce_companion_i + 1]); // Assuming MediaId contains the image IDs for each post

    // Set product meta information (only for product posts)
    if (class_exists('woocommerce') && $ecommerce_companion_i >= 3) {
        wp_set_object_terms($ecommerce_companion_id, 'simple', 'product_type'); // Set product type as simple
        update_post_meta($ecommerce_companion_id, '_visibility', 'visible');
        update_post_meta($ecommerce_companion_id, '_stock_status', 'instock');
        update_post_meta($ecommerce_companion_id, 'total_sales', '0');
        update_post_meta($ecommerce_companion_id, '_downloadable', 'no');
        update_post_meta($ecommerce_companion_id, '_virtual', 'no'); // Changed from 'yes' to 'no' to indicate physical product
        update_post_meta($ecommerce_companion_id, '_regular_price', '10');
        update_post_meta($ecommerce_companion_id, '_sale_price', '8');
        update_post_meta($ecommerce_companion_id, '_price', '10');
        update_post_meta($ecommerce_companion_id, '_sku', 'SKU-' . $i);
        wc_update_product_stock($ecommerce_companion_id, 100, 'set'); // Set 100 in stock
    }
endforeach;

kses_init_filters();

if (class_exists('woocommerce')) {
    wp_set_object_terms(34, [$ecommerce_companion_food_category['term_id'], $ecommerce_companion_all_category['term_id'], $ecommerce_companion_dogs_category['term_id']], 'product_cat'); //32 : Product Id 
    wp_set_object_terms(35, [$ecommerce_companion_food_category['term_id'], $ecommerce_companion_all_category['term_id'], $ecommerce_companion_birds_category['term_id']], 'product_cat');
    wp_set_object_terms(36, [$ecommerce_companion_fish_category['term_id'], $ecommerce_companion_all_category['term_id']], 'product_cat');
    wp_set_object_terms(37,	[$ecommerce_companion_birds_category['term_id'], $ecommerce_companion_all_category['term_id']], 'product_cat');
    wp_set_object_terms(38, [$ecommerce_companion_cats_category['term_id'], $ecommerce_companion_all_category['term_id']], 'product_cat');
    wp_set_object_terms(39, [$ecommerce_companion_dogs_category['term_id'], $ecommerce_companion_all_category['term_id']], 'product_cat');
    wp_set_object_terms(40, [$ecommerce_companion_food_category['term_id'], $ecommerce_companion_all_category['term_id'], $ecommerce_companion_fish_category['term_id']], 'product_cat');
    wp_set_object_terms(41, [$ecommerce_companion_food_category['term_id'], $ecommerce_companion_all_category['term_id'], $ecommerce_companion_cats_category['term_id']], 'product_cat');

	
	$ecommerce_companion_category_icons = array(
        'all' => 'fa-home',  // category with slug 'all' gets 'fa-home' icon
        'food' => 'fa-bowl-food', 
        'fish' => 'fa-fish', 
        'birds' => 'fa-dove',        
        'cats' => 'fa-cat',        
        'dogs' => 'fa-dog',        
        'uncategorized' => 'fa-code-fork',        
    );
	
	$ecommerce_companion_category_images = array(
        'cats' => 23,        
        'dogs' => 24,        
        'birds' => 25,        
        'food' => 26, 
        'fish' => 27, 
        'all' => 28, // 26 is the media ID of the image in the WordPress media library
        'uncategorized' => 29,
    );

    // Loop through each category in the mapping
    foreach ($ecommerce_companion_category_icons as $ecommerce_companion_category_slug => $ecommerce_companion_icon_text) {
        // Get the category by slug
        $ecommerce_companion_category = get_term_by('slug', $ecommerce_companion_category_slug, 'product_cat');

        if ($ecommerce_companion_category) {
            // Update the category's meta field with the Font Awesome icon text
            update_term_meta($ecommerce_companion_category->term_id, 'pet_bazaar_product_cat_icon', $ecommerce_companion_icon_text);
			
			 // Get the image ID from the mapping (this can be the ID of an image from the media library)
             if (isset($ecommerce_companion_category_images[$ecommerce_companion_category_slug])) {
                $ecommerce_companion_image_id = $ecommerce_companion_category_images[$ecommerce_companion_category_slug];
				
				clean_term_cache($ecommerce_companion_category->term_id);

				if (get_post($ecommerce_companion_image_id)) {
                // Update the category's thumbnail (image) using the media ID
                update_term_meta($ecommerce_companion_category->term_id, 'thumbnail_id', $ecommerce_companion_image_id);
                }
            } 
        }
    }	
}

?>