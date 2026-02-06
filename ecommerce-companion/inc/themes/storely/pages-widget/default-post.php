<?php
if ( ! defined( 'ABSPATH' ) ) exit;
$ecommerce_companion_MediaId = get_option('storely_media_id');
$ecommerce_companion_title = "Cooking Healthful Joyful";
$ecommerce_companion_title2 = "Clothing Blog Section Contains";
$ecommerce_companion_title3 = "How to Have More Focused";
$ecommerce_companion_content='<p>Here are a few of our primary fashion blog categories.</p>';
$ecommerce_companion_product_ttl1 = "Bridal Dress";
$ecommerce_companion_product_ttl2 = "Fit Sopie";
$ecommerce_companion_product_ttl3 = "Stylish Wear";
$ecommerce_companion_product_ttl4 = "Smart Watch";
$ecommerce_companion_product_ttl5 = "Alarm Clock";
$ecommerce_companion_product_ttl6 = "Camera";
$ecommerce_companion_product_ttl7 = "Snaeakers";
$ecommerce_companion_product_ttl8 = "Hat";

wp_insert_term(
    'Fashion',
    'category',
    array(
      'description' => 'example category',
      'slug'    => 'fashion'
    )
  );


wp_insert_term(
    'Designer',
    'category',
    array(
      'description' => 'example category',
      'slug'    => 'designer'
    )
  );
  
wp_insert_term(
    'Lifestyle',
    'category',
    array(
      'description' => 'example category',
      'slug'    => 'lifestyle'
    )
  ); 
  
if ( class_exists( 'woocommerce' ) ) { 
	wp_insert_term(
		'All',
		'product_cat',
		array(
		  'description' => 'example category',
		  'slug'    => 'all'
		)
	  );
	  
	wp_insert_term(
		'Best Seller',
		'product_cat',
		array(
		  'description' => 'example category',
		  'slug'    => 'best-seller'
		)
	); 

	wp_insert_term(
		'Trending',
		'product_cat',
		array(
		  'description' => 'example category',
		  'slug'    => 'trending'
		)
	); 


	wp_insert_term(
		'Clothes',
		'product_cat',
		array(
		  'description' => 'example category',
		  'slug'    => 'clothes'
		)
	); 

	wp_insert_term(
		'Electronics',
		'product_cat',
		array(
		  'description' => 'example category',
		  'slug'    => 'electronics'
		)
	); 

	wp_insert_term(
		'Footwear',
		'product_cat',
		array(
		  'description' => 'example category',
		  'slug'    => 'footwear'
		)
	); 

}
$ecommerce_companion_postData = array(
				array(
					'post_title' => $ecommerce_companion_title,
					'post_status' => 'publish',
					'post_content' => $ecommerce_companion_content,
					'post_author' => 1,
					'post_type'         =>   'post',
					'post_category' => array(1,16),
					'tax_input'    => array(
						'post_tag' => array('Lifestyle')
					),
				),
				array(
					'post_title' => $ecommerce_companion_title2,
					'post_status' => 'publish',
					'post_content' => $ecommerce_companion_content,
					'post_author' => 1,
					'post_type'         =>   'post',
					'post_category' => array(1,16,17),
					'tax_input'    => array(
						'post_tag' => array('Fashion')
					),
				),
				array(
					'post_title' => $ecommerce_companion_title3,
					'post_status' => 'publish',
					'post_content' => $ecommerce_companion_content,
					'post_author' => 1,
					'post_type'         =>   'post',
					'post_category' => array(1,16,18),
					'tax_input'    => array(
						'post_tag' => array('Designer')
					),
				),
				array(
					'post_title' => $ecommerce_companion_product_ttl1,
					'post_status' => 'publish',
					'post_content' => $ecommerce_companion_content,
					'post_author' => 1,
					'post_type'         =>   'product',
					'post_category' => array(15,17,18)
				),
				array(
					'post_title' => $ecommerce_companion_product_ttl2,
					'post_status' => 'publish',
					'post_content' => $ecommerce_companion_content,
					'post_author' => 1,
					'post_type'         =>   'product',
					//'post_category' => array(15,17,19)
				),
				array(
					'post_title' => $ecommerce_companion_product_ttl3,
					'post_status' => 'publish',
					'post_content' => $ecommerce_companion_content,
					'post_author' => 1,
					'post_type'         =>   'product',
					//'post_category' => array(15,17,18)
				),
				array(
					'post_title' => $ecommerce_companion_product_ttl4,
					'post_status' => 'publish',
					'post_content' => $ecommerce_companion_content,
					'post_author' => 1,
					'post_type'         =>   'product',
					//'post_category' => array(15,17,20)
				),
				array(
					'post_title' => $ecommerce_companion_product_ttl5,
					'post_status' => 'publish',
					'post_content' => $ecommerce_companion_content,
					'post_author' => 1,
					'post_type'         =>   'product',
					//'post_category' => array(15,17,18)
				),
				array(
					'post_title' => $ecommerce_companion_product_ttl6,
					'post_status' => 'publish',
					'post_content' => $ecommerce_companion_content,
					'post_author' => 1,
					'post_type'         =>   'product',
					//'post_category' => array(15,17,19)
				),
				array(
					'post_title' => $ecommerce_companion_product_ttl7,
					'post_status' => 'publish',
					'post_content' => $ecommerce_companion_content,
					'post_author' => 1,
					'post_type'         =>   'product',
					//'post_category' => array(15,17,18)
				),
				array(
					'post_title' => $ecommerce_companion_product_ttl8,
					'post_status' => 'publish',
					'post_content' => $ecommerce_companion_content,
					'post_author' => 1,
					'post_type'         =>   'product',
					//'post_category' => array(15,17,20)
				)
			);

kses_remove_filters();
//foreach ( $ecommerce_companion_MediaId as $media) :
foreach ( $ecommerce_companion_postData as $ecommerce_companion_i => $ecommerce_companion_postData1) : 
	$ecommerce_companion_id = wp_insert_post($ecommerce_companion_postData1);
	set_post_thumbnail( $ecommerce_companion_id, $ecommerce_companion_MediaId[$ecommerce_companion_i + 1] );
	
	if ( class_exists( 'woocommerce' ) ) {
		if($ecommerce_companion_i>2 && $ecommerce_companion_i<=10){
			wp_set_object_terms( $ecommerce_companion_id, 'simple', 'product_type' ); // set product is simple/variable/grouped
			update_post_meta( $ecommerce_companion_id, '_visibility', 'visible' );
			update_post_meta( $ecommerce_companion_id, '_stock_status', 'instock');
			update_post_meta( $ecommerce_companion_id, 'total_sales', '0' );
			update_post_meta( $ecommerce_companion_id, '_downloadable', 'no' );
			update_post_meta( $ecommerce_companion_id, '_virtual', 'yes' );
			update_post_meta( $ecommerce_companion_id, '_regular_price', '' );
			update_post_meta( $ecommerce_companion_id, '_sale_price', '' );
			update_post_meta( $ecommerce_companion_id, '_purchase_note', '' );
			update_post_meta( $ecommerce_companion_id, '_featured', 'no' );
			update_post_meta( $ecommerce_companion_id, '_weight', '11' );
			update_post_meta( $ecommerce_companion_id, '_length', '11' );
			update_post_meta( $ecommerce_companion_id, '_width', '11' );
			update_post_meta( $ecommerce_companion_id, '_height', '11' );
			update_post_meta( $ecommerce_companion_id, '_sku', 'SKU11' );
			update_post_meta( $ecommerce_companion_id, '_product_attributes', array() );
			update_post_meta( $ecommerce_companion_id, '_sale_price_dates_from', '' );
			update_post_meta( $ecommerce_companion_id, '_sale_price_dates_to', '' );
			update_post_meta( $ecommerce_companion_id, '_price', '11' );
			update_post_meta( $ecommerce_companion_id, '_sold_individually', '' );
			update_post_meta( $ecommerce_companion_id, '_manage_stock', 'yes' ); // activate stock management
			wc_update_product_stock($ecommerce_companion_id, 100, 'set'); // set 1000 in stock
			update_post_meta( $ecommerce_companion_id, '_backorders', 'no' );
		}
	}
endforeach;
//endforeach;

if ( class_exists( 'woocommerce' ) ) {
	wp_set_object_terms( 21, [ 15, 17, 18 ], 'product_cat' );
	wp_set_object_terms( 22, [ 15, 22, 18 ], 'product_cat' );
	wp_set_object_terms( 23, [ 15, 21, 18 ], 'product_cat' );
	wp_set_object_terms( 24, [ 15, 20, 21 ], 'product_cat' );
	wp_set_object_terms( 25, [ 15, 22, 18 ], 'product_cat' );
	wp_set_object_terms( 26, [ 15, 21, 18 ], 'product_cat' );
	wp_set_object_terms( 27, [ 15, 20, 18 ], 'product_cat' );
	wp_set_object_terms( 28, [ 15, 17, 18 ], 'product_cat' );
}
kses_init_filters();