<?php
if ( ! defined( 'ABSPATH' ) ) exit;
$ecommerce_companion_theme = wp_get_theme(); // gets the current theme
if( 'Shoply' == $ecommerce_companion_theme->name){
	$ecommerce_companion_file = ECOMMERCE_COMP_PLUGIN_URL .'inc/themes/shoply/assets/images/logo.png';
}elseif('Storess' == $ecommerce_companion_theme->name){
	$ecommerce_companion_file = ECOMMERCE_COMP_PLUGIN_URL .'inc/themes/storess/assets/images/logo.png';
}elseif('Storezia' == $ecommerce_companion_theme->name){
	$ecommerce_companion_file = ECOMMERCE_COMP_PLUGIN_URL .'inc/themes/storezia/assets/images/logo.png';	
}elseif('Shopiva' == $ecommerce_companion_theme->name){
	$ecommerce_companion_file = ECOMMERCE_COMP_PLUGIN_URL .'inc/themes/shopiva/assets/images/logo.png';
}elseif('Shopient' == $ecommerce_companion_theme->name){
	$ecommerce_companion_file = ECOMMERCE_COMP_PLUGIN_URL .'inc/themes/shopient/assets/images/logo.png';
}else{
	$ecommerce_companion_file = ECOMMERCE_COMP_PLUGIN_URL .'inc/themes/storely/assets/images/logo.png';
}
$ecommerce_companion_ImagePath = ECOMMERCE_COMP_PLUGIN_URL .'inc/themes/storely/assets/images';

$ecommerce_companion_images = array(
$ecommerce_companion_file,
$ecommerce_companion_ImagePath. '/blog/blog-1.jpg',
$ecommerce_companion_ImagePath. '/blog/blog-2.jpg',
$ecommerce_companion_ImagePath. '/blog/blog-3.jpg',
$ecommerce_companion_ImagePath. '/product/product-1.jpg',
$ecommerce_companion_ImagePath. '/product/product-2.jpg',
$ecommerce_companion_ImagePath. '/product/product-3.jpg',
$ecommerce_companion_ImagePath. '/product/product-4.jpg',
$ecommerce_companion_ImagePath. '/product/product-5.jpg',
$ecommerce_companion_ImagePath. '/product/product-6.jpg',
$ecommerce_companion_ImagePath. '/product/product-7.jpg',
$ecommerce_companion_ImagePath. '/product/product-8.jpg'
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
		'post_excerpt' => 'storely caption',
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

 update_option( 'storely_media_id', $ecommerce_companion_ImageId );

?>
