<?php
if ( ! defined( 'ABSPATH' ) ) exit;
$ecommerce_companion_theme = wp_get_theme(); // gets the current theme
$ecommerce_companion_name = strtolower(str_replace(' ', '-', $ecommerce_companion_theme));
$ecommerce_companion_file = ECOMMERCE_COMP_PLUGIN_URL .'inc/themes/'.$ecommerce_companion_name.'/assets/images/logo.png';
	
$ecommerce_companion_PImagePath = ECOMMERCE_COMP_PLUGIN_URL .'inc/themes/mega-mart/assets/images';

$ecommerce_companion_images = array(
$ecommerce_companion_file,
$ecommerce_companion_PImagePath. '/blog/blog-1.jpg',
$ecommerce_companion_PImagePath. '/blog/blog-2.jpg',
$ecommerce_companion_PImagePath. '/blog/blog-3.jpg',
$ecommerce_companion_PImagePath. '/product/product-1.jpg',
$ecommerce_companion_PImagePath. '/product/product-2.jpg',
$ecommerce_companion_PImagePath. '/product/product-3.jpg',
$ecommerce_companion_PImagePath. '/product/product-4.jpg',
$ecommerce_companion_PImagePath. '/product/product-5.jpg',
$ecommerce_companion_PImagePath. '/product/product-6.jpg',
$ecommerce_companion_PImagePath. '/product/product-7.jpg',
$ecommerce_companion_PImagePath. '/product/product-8.jpg',
$ecommerce_companion_PImagePath. '/categories/cat-1.jpg',
$ecommerce_companion_PImagePath. '/categories/cat-2.jpg',
$ecommerce_companion_PImagePath. '/categories/cat-3.jpg',
$ecommerce_companion_PImagePath. '/categories/cat-4.jpg',
$ecommerce_companion_PImagePath. '/categories/cat-5.jpg',
$ecommerce_companion_PImagePath. '/categories/cat-6.jpg',
$ecommerce_companion_PImagePath. '/categories/cat-7.jpg',
);
$ecommerce_companion_parent_post_id = null;
foreach($ecommerce_companion_images as $ecommerce_companion_name) {
$ecommerce_companion_filename = basename($ecommerce_companion_name);
$ecommerce_companion_upload_file = wp_upload_bits($ecommerce_companion_filename, null, file_get_contents($ecommerce_companion_name));
if (!$ecommerce_companion_upload_file['error']) {
	$ecommerce_companion_wp_filetype = wp_check_filetype($ecommerce_companion_filename, null );
	$ecommerce_companion_attachment = array(
		'post_mime_type' => $ecommerce_companion_wp_filetype['type'],
		'post_parent' => $ecommerce_companion_parent_post_id,
		'post_title' => preg_replace('/\.[^.]+$/', '', $ecommerce_companion_filename),
		'post_excerpt' => 'mega mart caption',
		'post_status' => 'inherit'
	);
	$ecommerce_companion_ImageId[] = $ecommerce_companion_attachment_id = wp_insert_attachment( $ecommerce_companion_attachment, $ecommerce_companion_upload_file['file'], $ecommerce_companion_parent_post_id );
	
	if (!is_wp_error($ecommerce_companion_attachment_id)) {
		require_once(ABSPATH . "wp-admin" . '/includes/image.php');
		$ecommerce_companion_attachment_data = wp_generate_attachment_metadata( $ecommerce_companion_attachment_id, $ecommerce_companion_upload_file['file'] );
		wp_update_attachment_metadata( $ecommerce_companion_attachment_id,  $ecommerce_companion_attachment_data );
	}
}

}

 update_option( 'mega_mart_media_id', $ecommerce_companion_ImageId );
?>
