<?php
	if ( ! defined( 'ABSPATH' ) ) exit;
	$electromix_ps_hs = get_theme_mod( 'ps_hs','1' );
	$electromix_ps = get_theme_mod( 'ps', electromix_get_default_pd_slider() );
	if($electromix_ps_hs == '1' ):
?>
<section id="product-slider" class="product-section product-vertical-slider dark-bg st-py-default2 my-4">
	<div class="container">
		<div class="row gy-3 gy-lg-4">
		<?php 
			if ( ! empty( $electromix_ps ) ) {
				$electromix_ps = json_decode( $electromix_ps );
				foreach ( $electromix_ps as $electromix_slide_item ) {
					$electromix_repeater_title = ! empty( $electromix_slide_item->title ) ? apply_filters( 'electromix_translate_single_string', $electromix_slide_item->title, 'pd section' ) : '';
					$electromix_repeater_icon = ! empty( $electromix_slide_item->icon_value ) ? apply_filters( 'electromix_translate_single_string', $electromix_slide_item->icon_value, 'pd section' ) : '';
					$electromix_repeater_text = ! empty( $electromix_slide_item->text ) ? apply_filters( 'electromix_translate_single_string', $electromix_slide_item->text, 'pd section' ) : '';
					$electromix_product_repeater_ids = array_filter( array_map( 'intval', explode( ',', $electromix_repeater_text ) ) );	
			?>
			<div class="col-12 col-lg-4">
				<div class="heading-default wow zoomIn">
					<div class="title-container">
						<div class="main-title">
							<i class="fa <?php echo esc_attr($electromix_repeater_icon); ?>"></i>
							<h2><?php echo esc_html($electromix_repeater_title); ?></h2>
						</div>
					</div>
					<?php 
					if(class_exists( 'woocommerce' ) && !empty( $electromix_product_repeater_ids ) ) { ?>
					<div class="custom-owl-nav">
						<button type="button" class="custom-prev"><i class="fa fa-chevron-left"></i></button>
						<button type="button" class="custom-next"><i class="fa fa-chevron-right"></i></button>
					</div>
					<?php } ?>
				</div>
				<div class="col wow slow fadeInLeft">
				
				<?php if( class_exists( 'woocommerce' ) && !empty( $electromix_product_repeater_ids ) ) { ?>
					<ul class="products products-list-slider wow fadeInUp" data-axis="horizontal">
					<?php
						// Loop through product IDs
						foreach ( $electromix_product_repeater_ids as $electromix_product_repeater_id ) :
							$GLOBALS['post'] = get_post( $electromix_product_repeater_id ); // prepare post data
							setup_postdata( $GLOBALS['post'] );
						
						wc_get_template_part( 'content', 'product-2' ); 
						endforeach; wp_reset_postdata();
					?>
					</ul>
				<?php } ?>
				</div>
			</div>
			<?php }} ?>			
		</div>
	</div>
</section>
<?php endif; ?>