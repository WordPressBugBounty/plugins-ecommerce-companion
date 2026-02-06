<?php
if ( ! defined( 'ABSPATH' ) ) exit;
$ecommerce_companion_MediaId = get_option('mega_mart_media_id');
$ecommerce_companion_content = '<p>Lorem ipsum dolor sit amet, consectetur adipiscing mollis dolor facilisis porttitor.</p><!--more--><p>This is the rest of the content that will appear only on single post view.</p>';

$ecommerce_companion_product_titles = array(
    "Juicy Lemons",
    "Fresh Organic Peas",
    "Fresh Potatoes",
    "Capsicums",
    "Dairy Milk Silk",
    "Lays - Crunchy Snack",
    "Kissan Mixed Fruits",
    "NesCafe Coffee Latte"
);

// Create blog post categories
$ecommerce_companion_blog_categories = array(
    'grocery' => 'Grocery',
    'fusion' => 'Fusion',
    'flavours' => 'Flavours',
);

$ecommerce_companion_created_blog_cats = [];
foreach ($ecommerce_companion_blog_categories as $ecommerce_companion_slug => $ecommerce_companion_name) {
    $ecommerce_companion_result = wp_insert_term($ecommerce_companion_name, 'category', ['slug' => $ecommerce_companion_slug]);
    $ecommerce_companion_created_blog_cats[$ecommerce_companion_slug] = !is_wp_error($ecommerce_companion_result) ? $ecommerce_companion_result['term_id'] : get_term_by('slug', $ecommerce_companion_slug, 'category')->term_id;
}

// Create WooCommerce product categories
$ecommerce_companion_woo_categories = array(
    'nutrients' => 'Nutrients',
    'baked-items' => 'Baked Items',
    'beverages' => 'Beverages',
    'chocolates' => 'Chocolates',
    'pasta' => 'Pasta',
    'vegetables' => 'Vegetables',
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
        'post_title' => 'Satisfy Your Sweet Tooth With Our Dessert Creations',
        'post_category_slug' => 'grocery',
        'tags' => ['Dessert'],
    ],
    [
        'post_title' => 'Awaken Your Senses With Our Fusion Cuisine',
        'post_category_slug' => 'fusion',
        'tags' => ['Cuisine'],
    ],
    [
        'post_title' => 'Celebrate The Flavors Season With Our Rotating Menu',
        'post_category_slug' => 'flavours',
        'tags' => ['Menu'],
    ],
];

// Add Product Posts
foreach ($ecommerce_companion_product_titles as $ecommerce_companion_index => $ecommerce_companion_title) {
    $ecommerce_companion_product_category_map = [
        [ 'vegetables' ],
        [ 'vegetables' ],
        [ 'vegetables' ],
        [ 'vegetables' ],
        [ 'chocolates' ],
        [ 'baked-items', 'vegetables' ],
        [ 'nutrients', 'vegetables', 'pasta' ],
        [ 'beverages', 'chocolates' ]
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
        $ecommerce_companion_post_args['post_category'] = [$ecommerce_companion_created_blog_cats[$ecommerce_companion_data['post_category_slug']]];
        $ecommerce_companion_post_args['tax_input'] = ['post_tag' => $ecommerce_companion_data['tags']];
    }

    // 1. Insert post first
    $post_id = wp_insert_post($ecommerce_companion_post_args);

    // 2. Then update the content with read more button
    // if ($post_type === 'post' && !is_wp_error($post_id)) {
        // $read_more = '<a href="' . get_permalink($post_id) . '" class="more-link btn">Read More</a>';
        // wp_update_post([
            // 'ID' => $post_id,
            // 'post_content' => $ecommerce_companion_content . $read_more,
        // ]);
    // }
	
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
        'nutrients' => '',
        'baked-items' => '',
        'beverages' => '',
        'chocolates' => '',
        'pasta' => '',
        'oils' => '',
        'vegetables' => '',
        'uncategorized' => '',
    ];

    $ecommerce_companion_category_images = [
        'nutrients' => 22,
        'baked-items' => 23,
        'beverages' => 24,
        'chocolates' => 25,
        'pasta' => 26,
        'oils' => 27,
        'vegetables' => 28,
        'uncategorized' => 4,
    ];

    foreach ($ecommerce_companion_category_icons as $ecommerce_companion_slug => $ecommerce_companion_icon) {
        $term = get_term_by('slug', $ecommerce_companion_slug, 'product_cat');
        if ($term) {
            update_term_meta($term->term_id, 'mega_mart_product_cat_icon', $ecommerce_companion_icon);

            if (!empty($ecommerce_companion_category_images[$ecommerce_companion_slug]) && get_post($ecommerce_companion_category_images[$ecommerce_companion_slug])) {
                update_term_meta($term->term_id, 'thumbnail_id', $ecommerce_companion_category_images[$ecommerce_companion_slug]);
            }
        }
    }
}
?>
