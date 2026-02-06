<?php
	if ( ! defined( 'ABSPATH' ) ) exit;
	$electromix_sponsor_hs				= get_theme_mod('sponsor_hs','1');
	$electromix_sponsor_json			= get_theme_mod('electromix_sponsor',electromix_get_sponsor_default());
	$electromix_sponsors 				= json_decode($electromix_sponsor_json,true);
	$electromix_filters = [];
	$electromix_hs_sponsor_tab 		= get_theme_mod('hs_sponsor_tab','1');	
	if( $electromix_sponsor_hs == '1' ): 
?>
<section id="sponsors" class="product-category-section st-py-default filter-group">
	<div class="container">
	<?php if($electromix_hs_sponsor_tab == '1' ): ?>
		<div class="filter-container">
			<div class="tab-filter-slider owl-carousel" data-auto-width="false" data-mouse-drag="true">
			<?php
				if (!empty($electromix_sponsors)) {
					foreach ($electromix_sponsors as $electromix_item) {
						if (!empty($electromix_item['text2'] )) {
							$electromix_f_list = array_map('trim', explode(',', $electromix_item['text2'] ));
							foreach ($electromix_f_list as $electromix_f) {
								$electromix_filters[$electromix_f] = ucfirst(str_replace(['-', '_'], ' ', $electromix_f)); 
							}
						}
					}
				}

				$electromix_firstKey = array_key_first($electromix_filters);
				foreach ($electromix_filters as $electromix_filter_key => $electromix_filter_label) {
				$electromix_active = ($electromix_filter_key === $electromix_firstKey ) ? "active" : "";
					echo '<a href="javascript:void(0);" class="'.esc_attr($electromix_active).'" data-filter="' . esc_attr(str_replace(' ', '_',$electromix_filter_key)) . '">' . esc_html($electromix_filter_label) . '</a>';
				}
				?>
				
			</div>
		</div>
		<?php endif; ?>
		<div class="brand-logo-wrapper d-flex flex-wrap row-cols-2 row-cols-sm-3 row-cols-md-4 row-cols-lg-5">
		<?php
			if (!empty($electromix_sponsors)) :
			 foreach ($electromix_sponsors as $electromix_slide_item) :						
				$electromix_repeater_title     = ! empty( $electromix_slide_item['title'] ) ? apply_filters( 'electromix_translate_single_string',$electromix_slide_item['title'], 'Sponsor section' ) : '';
				$electromix_repeater_text2     = ! empty( $electromix_slide_item['text2'] ) ? apply_filters( 'electromix_translate_single_string',$electromix_slide_item['text2'], 'Sponsor section' ) : '';
				$electromix_repeater_link     = ! empty( $electromix_slide_item['link'] ) ? apply_filters( 'electromix_translate_single_string',$electromix_slide_item['link'], 'Sponsor section' ) : '';
				$electromix_repeater_image     = ! empty( $electromix_slide_item['image_url'] ) ? apply_filters( 'electromix_translate_single_string',$electromix_slide_item['image_url'], 'Sponsor section' ) : '';

				$electromix_filters = array_map('trim', explode(',', $electromix_repeater_text2));
				$electromix_filters = str_replace(' ','_', $electromix_filters);
				$electromix_filter_classes = implode(' ', $electromix_filters);
		?>
			<div class="col mix <?php echo esc_attr(strtolower($electromix_filter_classes)); ?> show">
				<div class="brand-item">
					<a href="<?php echo esc_url($electromix_repeater_link); ?>" class="brand-img" style="height: 90px;">
						<img src="<?php echo esc_url($electromix_repeater_image); ?>" alt="<?php echo esc_attr($electromix_repeater_title); ?>" style="max-height: 40px; max-width: 150px; width: 100%; object-fit: contain;">
					</a>
				</div>
			</div>
		<?php endforeach; endif; ?>
			
		</div>
	</div>
</section>
<?php endif; ?>