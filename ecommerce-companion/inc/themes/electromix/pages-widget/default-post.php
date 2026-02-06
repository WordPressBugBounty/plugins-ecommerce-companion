<?php
if ( ! defined( 'ABSPATH' ) ) exit;
$ecommerce_companion_MediaId = get_option('electromix_media_id');
$ecommerce_companion_content = '<p>Discover reliable electrical and electronic products designed for performance, safety, and durability. From everyday essentials to advanced solutions,</p><!--more--><p> our items deliver quality engineering, modern design, and dependable functionality for residential, commercial, and industrial applications worldwide.</p>';

$ecommerce_companion_product_titles = array(
    "CCTV Camera Cable 70/90m",
    "CCTV Storage 7TB/ 1080p/ H.265+",
    "CP Plus Servillance Cybersecurity",
    "Security Combo",
    "Bi-Direction USB Cable",
    "K-One A4 Super White Pages",
    "Epson Original 001 Ink Bottle",
    "Epson EcoTank L6490 A4 Printer",
    "Cooler Master MK770 hybrid wireless gaming keyboard",
    "Frontech MS-0050 Wired USB Mouse",
    "Zebronics Game Controller",
    "Ant Value CV200 Mini-Tower CPU Cabinet",
    "Computer Combo",
);

// Create blog post categories
$ecommerce_companion_blog_categories = array(
    'future-technology' => 'Future Technology',
    'buying-guide' => 'Buying Guide',
    'bluetooth' => 'Bluetooth',
    'all' => 'All',
);

$ecommerce_companion_created_blog_cats = [];
foreach ($ecommerce_companion_blog_categories as $ecommerce_companion_slug => $ecommerce_companion_name) {
    $ecommerce_companion_result = wp_insert_term($ecommerce_companion_name, 'category', ['slug' => $ecommerce_companion_slug]);
    $ecommerce_companion_created_blog_cats[$ecommerce_companion_slug] = !is_wp_error($ecommerce_companion_result) ? $ecommerce_companion_result['term_id'] : get_term_by('slug', $ecommerce_companion_slug, 'category')->term_id;
}

// Create WooCommerce product categories
$ecommerce_companion_woo_categories = array(
    'all' => 'All',
    'laptop-combo' => 'Laptop Combo',
    'computer' => 'Computer',
    'cpu-cabinet' => 'CPU Cabinet',
    'keyboard' => 'keyboard',
    'mouse' => 'Mouse',
    'printer' => 'Printer',
    'printing-combo' => 'Printing Combo',
    'bi-directional-cable' => 'Bi Directional Cable',
    'printer-ink' => 'Printer Ink',
    'printer-papers' => 'Printer Papers',
    'security-combo' => 'Security Combo',
    'cctv-cables' => 'CCTV Cables',
    'cctv-camera' => 'CCTV Camera',
    'cctv-recording-storage' => 'CCTV Recording Storage',
);

$ecommerce_companion_created_product_cats = [];
if (class_exists('woocommerce')) {
    foreach ($ecommerce_companion_woo_categories as $ecommerce_companion_slug => $ecommerce_companion_name) {
        $ecommerce_companion_result = wp_insert_term($ecommerce_companion_name, 'product_cat', ['slug' => $ecommerce_companion_slug]);
        $ecommerce_companion_created_product_cats[$ecommerce_companion_slug] = !is_wp_error($ecommerce_companion_result) ? $ecommerce_companion_result['term_id'] : get_term_by('slug', $ecommerce_companion_slug, 'product_cat')->term_id;
    }
}

// Prepare post data
$posts = [
    // Blog Posts
    [
        'post_title' => 'Choosing the Right Electronic Products',
        'post_category_slug' => ['all','buying-guide'],
        'tags' => ['Gadget'],
    ],
    [
        'post_title' => 'The Future of Electronic Products with Electromix',
        'post_category_slug' => ['all','future-technology'],
        'tags' => ['Electromix'],
    ],
    [
        'post_title' => 'Electromix and the Evolution of Consumer Electronics',
        'post_category_slug' => ['all','bluetooth'],
        'tags' => ['Innovation'],
    ],
];

// Add Product Posts
foreach ($ecommerce_companion_product_titles as $ecommerce_companion_index => $ecommerce_companion_title) {
    $ecommerce_companion_product_category_map = [
        [ 'all', 'cctv-cables','security-combo'],
        [ 'all', 'cctv-recording-storage', 'security-combo' ],       
        [ 'all', 'cctv-camera', 'security-combo' ],       
        [ 'all', 'cctv-camera', 'security-combo', 'cctv-cables', 'cctv-recording-storage' ],       
        [ 'all', 'bi-directional-cable', 'printer', 'printing-combo' ],       
        [ 'all', 'printer-papers', 'printer', 'printing-combo' ],       
        [ 'all', 'printer-ink', 'printer', 'printing-combo' ],       
        [ 'all', 'printer', 'printing-combo' ],       
        [ 'all', 'computer', 'laptop-combo', 'keyboard' ],       
        [ 'all', 'computer', 'laptop-combo', 'mouse' ],       
        [ 'all', 'computer', 'laptop-combo' ],       
        [ 'all', 'cpu-cabinet', 'laptop-combo' ],       
        [ 'all', 'cpu-cabinet', 'laptop-combo','keyboard', 'mouse', 'printer', 'computer' ],       
    ];

    $posts[] = [
        'post_title' => $ecommerce_companion_title,
        'product_cats' => $ecommerce_companion_product_category_map[$ecommerce_companion_index]
    ];
}

kses_remove_filters();

foreach ($posts as $ecommerce_companion_index => $ecommerce_companion_data) {
    $post_type = isset($ecommerce_companion_data['product_cats']) ? 'product' : 'post';
    $ecommerce_companion_post_args = [
        'post_title'   => $ecommerce_companion_data['post_title'],
        'post_status'  => 'publish',
        'post_content' => $ecommerce_companion_content,
        'post_author'  => 1,
        'post_type'    => $post_type,
    ];

    // Add categories and tags
    if ($post_type === 'post') {

		$ecommerce_companion_category_ids = [];

		foreach ($ecommerce_companion_data['post_category_slug'] as $ecommerce_companion_slug) {
			if (isset($ecommerce_companion_created_blog_cats[$ecommerce_companion_slug])) {
				$ecommerce_companion_category_ids[] = $ecommerce_companion_created_blog_cats[$ecommerce_companion_slug];
			}
		}

		$ecommerce_companion_post_args['post_category'] = $ecommerce_companion_category_ids;
		$ecommerce_companion_post_args['tax_input'] = [
			'post_tag' => $ecommerce_companion_data['tags']
		];
	}


    // 1. Insert post first
    $post_id = wp_insert_post($ecommerce_companion_post_args);
	
    if (!is_wp_error($post_id) && isset($ecommerce_companion_MediaId[$ecommerce_companion_index + 1])) {
        set_post_thumbnail($post_id, $ecommerce_companion_MediaId[$ecommerce_companion_index + 1]);
    }

    // Product metadata
    if ($post_type === 'product' && class_exists('woocommerce')) {
        wp_set_object_terms($post_id, 'simple', 'product_type');
        update_post_meta($post_id, '_visibility', 'visible');
        update_post_meta($post_id, '_stock_status', 'instock');
        update_post_meta($post_id, 'total_sales', '0');
        update_post_meta($post_id, '_downloadable', 'no');
        update_post_meta($post_id, '_virtual', 'no');
        update_post_meta($post_id, '_regular_price', '10');
        update_post_meta($post_id, '_sale_price', '8');
        update_post_meta($post_id, '_price', '10');
        update_post_meta($post_id, '_sku', 'SKU-' . $ecommerce_companion_index);
        wc_update_product_stock($post_id, 100, 'set');

        // Assign categories
        if (!empty($ecommerce_companion_data['product_cats'])) {
            $ecommerce_companion_cat_ids = array_map(fn($ecommerce_companion_slug) => $ecommerce_companion_created_product_cats[$ecommerce_companion_slug], $ecommerce_companion_data['product_cats']);
            wp_set_object_terms($post_id, $ecommerce_companion_cat_ids, 'product_cat');
        }
    }
}

kses_init_filters();

// Assign thumbnails/icons to categories
if (class_exists('woocommerce')) {
    $ecommerce_companion_category_icons = [
		'all' => '',
		'laptop-combo' => '',
		'computer' => '',
		'cpu-cabinet' => '',
		'keyboard' => '',
		'mouse' => '',
		'printer' => '',
		'printing-combo' => '',
		'bi-directional-cable' => '',
		'printer-ink' => '',
		'printer-papers' => '',
		'security-combo' => '',
		'cctv-cables' => '',
		'cctv-camera' => '',
		'cctv-recording-storage' => '',
        'uncategorized' => '',
    ];

    $ecommerce_companion_category_images = [
		'all' => 28,
		'laptop-combo' => 32,
		'computer' => 27,
		'cpu-cabinet' => 33,
		'keyboard' => 30,
		'mouse' => 24,
		'printer' => 22,
		'printing-combo' => 22,
		'bi-directional-cable' => 19,
		'printer-ink' => 21,
		'printer-papers' => 20,
		'security-combo' => 18,
		'cctv-cables' => 15,
		'cctv-camera' => 17,
		'cctv-recording-storage' => 16,
        'uncategorized' => 29,
    ];

    foreach ($ecommerce_companion_category_icons as $ecommerce_companion_slug => $ecommerce_companion_icon) {
        $term = get_term_by('slug', $ecommerce_companion_slug, 'product_cat');
        if ($term) {
            update_term_meta($term->term_id, 'electromix_product_cat_icon', $ecommerce_companion_icon);

            if (!empty($ecommerce_companion_category_images[$ecommerce_companion_slug]) && get_post($ecommerce_companion_category_images[$ecommerce_companion_slug])) {
                update_term_meta($term->term_id, 'thumbnail_id', $ecommerce_companion_category_images[$ecommerce_companion_slug]);
            }
        }
    }
}
?>
