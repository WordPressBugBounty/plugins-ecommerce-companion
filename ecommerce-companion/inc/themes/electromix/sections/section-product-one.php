<?php  
	if ( ! defined( 'ABSPATH' ) ) exit;
	$electromix_product_one_hs 					= get_theme_mod('product_one_hs','1');
	$electromix_product_one_contents 			= get_theme_mod('product_one_contents',electromix_get_product_default());
	if($electromix_product_one_hs == '1'):
?>	
<div class="container">
	<section id="product-one" class="popular-product dark-bg p-2 rounded">
			<div class="popular-product-slider one owl-carousel">
			<?php
					if ( ! empty( $electromix_product_one_contents ) ) {
					$electromix_product_one_contents = json_decode( $electromix_product_one_contents );
					foreach ( $electromix_product_one_contents as $electromix_product_item ) {
						$electromix_repeater_title = ! empty( $electromix_product_item->title ) ? apply_filters( 'electromix_translate_single_string', $electromix_product_item->title, 'Product One section' ) : '';
						$electromix_repeater_text = ! empty( $electromix_product_item->text ) ? apply_filters( 'electromix_translate_single_string', $electromix_product_item->text, 'Product One section' ) : '';
						$electromix_repeater_link = ! empty( $electromix_product_item->link ) ? apply_filters( 'electromix_translate_single_string', $electromix_product_item->link, 'Product One section' ) : '';
						$electromix_repeater_image = ! empty( $electromix_product_item->image_url) ? apply_filters( 'electromix_translate_single_string', $electromix_product_item->image_url,'Product One section' ) : '';
				?>
				<div class="popular-product-item wow zoomIn">
				<?php
				if( !empty($electromix_repeater_image) || !empty($electromix_repeater_title) ) { 
					echo '<div class="popular-product-img">
						<img src="'.esc_url($electromix_repeater_image).'" alt="'.esc_attr($electromix_repeater_title).'">
					</div>
					<a href="'.esc_url($electromix_repeater_link).'">'.esc_html($electromix_repeater_title).' <span class="color-primary">'.esc_html($electromix_repeater_text).'</span></a>
				</div>';
					} } }
				 ?>
			</div>
	</section>
</div>
<?php endif; ?>