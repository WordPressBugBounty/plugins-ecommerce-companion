<?php
	if ( ! defined( 'ABSPATH' ) ) exit;
	$electromix_ps_hs = get_theme_mod( 'ps2_hs','1' );
	$electromix_ps = get_theme_mod( 'ps2', electromix_get_default_pd_slider2() );
	$electromix_ps_cols = get_theme_mod( 'ps2_cols', '4' );
	if( $electromix_ps_hs == '1' ):
?>
<section id="product-slider-two" class="product-section product-list-section st-py-default">
	<div class="container">
		<div class="row gy-3 gy-lg-4">
		<?php 
			if ( ! empty( $electromix_ps ) ) {
				$electromix_ps = json_decode( $electromix_ps );
				foreach ( $electromix_ps as $electromix_slide_item ) {
					$electromix_repeater_title = ! empty( $electromix_slide_item->title ) ? apply_filters( 'electromix_translate_single_string', $electromix_slide_item->title, 'pd2 section' ) : '';						
					$electromix_repeater_icon = ! empty( $electromix_slide_item->icon_value ) ? apply_filters( 'electromix_translate_single_string', $electromix_slide_item->icon_value, 'pd2 section' ) : '';						
					$electromix_repeater_text = ! empty( $electromix_slide_item->text ) ? apply_filters( 'electromix_translate_single_string', $electromix_slide_item->text, 'pd2 section' ) : '';
					$electromix__repeater_product_ids = array_filter( array_map( 'intval', explode( ',', $electromix_repeater_text ) ) );					
			?>
			<div class="col-12 col-lg-<?php echo esc_attr($electromix_ps_cols); ?>">
				<div class="heading-default wow zoomIn">
					<div class="title-container">
						<div class="main-title">
							<i class="fa <?php echo esc_attr($electromix_repeater_icon); ?>"></i>
							<h2><?php echo esc_html($electromix_repeater_title); ?></h2>
						</div>
					</div>
					<?php if(class_exists( 'woocommerce' ) && !empty( $electromix__repeater_product_ids ) ) { ?>
					<div class="custom-owl-nav">
						<button type="button" class="custom-prev"><i class="fa fa-chevron-up"></i></button>
						<button type="button" class="custom-next"><i class="fa fa-chevron-down"></i></button>
					</div>
					<?php } ?>
				</div>
				<?php if(class_exists( 'woocommerce' ) && !empty( $electromix__repeater_product_ids ) ) { ?>
				<ul class="products products-list-slider wow fadeInUp" data-items="3" data-wow-delay="0ms" data-wow-duration="1500ms">
				<?php 
				foreach ( $electromix__repeater_product_ids as $electromix_prod_id ) : 
						$electromix_product = wc_get_product( $electromix_prod_id );
						if ( ! $electromix_product ) continue;

						// Get main image URL
						$electromix_main_img_id = $electromix_product->get_image_id();
						$electromix_main_img_url = $electromix_main_img_id ? wp_get_attachment_image_url( $electromix_main_img_id, 'large' ) : wc_placeholder_img_src();
					?>
					<li class="product type-product">
						<div class="product">
							<div class="product-single">
								<div class="product-img">
									<a href="<?php echo esc_url( get_permalink( $electromix_product->get_id() ) ); ?>">
										 <img src="<?php echo esc_url( $electromix_main_img_url ); ?>" class="attachment-post-thumbnail size-post-thumbnail" alt="<?php echo esc_attr( $electromix_product->get_name() ); ?>">
									</a>
								</div>
								<div class="product-content-outer">
									<div class="product-content">
										<h3><a href="<?php echo esc_url( get_permalink( $electromix_product->get_id() ) ); ?>)" class="ellipsis"><?php echo esc_attr( $electromix_product->get_name() ); ?></a></h3>
										 <div class="price">
											<?php echo esc_html($electromix_product->get_price_html()); ?>
										</div>
										<?php if ($electromix_average = $electromix_product->get_average_rating()) : ?>
										<?php /* translators: %s: star counts */ ?>
										<?php echo wp_kses_post('<div class="star-rating" title="'.sprintf(__( 'Rated %s out of 5', 'ecommerce-companion' ), $electromix_average).'"><span style="width:'.( ( $electromix_average / 5 ) * 100 ) . '%"><strong itemprop="ratingValue" class="rating">'.$electromix_average.'</strong> out of 5</span></div>'); ?>
										<?php endif; ?>
									</div>
								</div>
							</div>
						</div>
					</li>
					<?php endforeach; ?>					
				</ul>
				<?php } ?>
			</div>
			<?php }} ?>			
		</div>
	</div>
</section>
<?php endif; ?>