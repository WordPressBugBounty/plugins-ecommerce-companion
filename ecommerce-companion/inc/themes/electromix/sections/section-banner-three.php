<?php 
	if ( ! defined( 'ABSPATH' ) ) exit;
	$electromix_banner_hs  	= get_theme_mod('banner3_hs','1');
	$electromix_banner_contents  	= get_theme_mod('banner3_contents',electromix_get_banner2_default());
	if( $electromix_banner_hs == '1' ):
?>	
<section id="banner-three" class="banner-section banner-section-one st-py-default">
	<div class="container">
		<div class="row g-2 g-sm-3 gy-lg-4">
		<?php
		if ( ! empty( $electromix_banner_contents  ) ) {
		$electromix_banner_contents  = json_decode( $electromix_banner_contents  );
		foreach ( $electromix_banner_contents  as $electromix_banner_item ) {
			$electromix_repeater_title = ! empty( $electromix_banner_item->title ) ? apply_filters( 'electromix_translate_single_string', $electromix_banner_item->title, 'Banner 3 section' ) : '';
			$electromix_repeater_subtitle = ! empty( $electromix_banner_item->subtitle ) ? apply_filters( 'electromix_translate_single_string', $electromix_banner_item->subtitle, 'Banner 3 section' ) : '';
			$electromix_repeater_subtitle2 = ! empty( $electromix_banner_item->subtitle2 ) ? apply_filters( 'electromix_translate_single_string', $electromix_banner_item->subtitle2, 'Banner 3 section' ) : '';
			$electromix_repeater_subtitle3 = ! empty( $electromix_banner_item->subtitle3 ) ? apply_filters( 'electromix_translate_single_string', $electromix_banner_item->subtitle3, 'Banner 3 section' ) : '';
			$electromix_repeater_subtitle4 = ! empty( $electromix_banner_item->subtitle4 ) ? apply_filters( 'electromix_translate_single_string', $electromix_banner_item->subtitle4, 'Banner 3 section' ) : '';
			$electromix_repeater_text = ! empty( $electromix_banner_item->text ) ? apply_filters( 'electromix_translate_single_string', $electromix_banner_item->text, 'Banner 3 section' ) : '';
			$electromix_repeater_button_text = ! empty( $electromix_banner_item->button_text ) ? apply_filters( 'electromix_translate_single_string', $electromix_banner_item->button_text, 'Banner 3 section' ) : '';
			$electromix_repeater_button_link = ! empty( $electromix_banner_item->button_link ) ? apply_filters( 'electromix_translate_single_string', $electromix_banner_item->button_link, 'Banner 3 section' ) : '';
			$electromix_repeater_newtab = ! empty( $electromix_banner_item->newtab ) ? apply_filters( 'electromix_translate_single_string', $electromix_banner_item->newtab, 'Banner 3 section' ) : '';
			$electromix_repeater_nofollow = ! empty( $electromix_banner_item->nofollow ) ? apply_filters( 'electromix_translate_single_string', $electromix_banner_item->nofollow, 'Banner 3 section' ) : '';
			$electromix_repeater_image = ! empty( $electromix_banner_item->image_url) ? apply_filters( 'electromix_translate_single_string', $electromix_banner_item->image_url,'Banner 3 section' ) : '';			
			$electromix_repeater_image2 = ! empty( $electromix_banner_item->image_url2) ? apply_filters( 'electromix_translate_single_string', $electromix_banner_item->image_url2,'Banner 3 section' ) : '';	  
					 
                echo '<div class="col-12 col-lg-6 wow zoomIn" data-wow-delay="0ms" data-wow-duration="1500ms">
                        <aside class="banner-item primary-bg h-100">
                            <div class="banner-content">'; 
								if(!(empty($electromix_repeater_text))): echo '<span class="offer-badge">'.esc_html($electromix_repeater_text).' </span>'; endif;
                                if(!(empty($electromix_repeater_title))): echo '<p class="fw-600 color-primary">'.esc_html($electromix_repeater_title).' </p>'; endif; 
                                if(!(empty($electromix_repeater_subtitle))): echo '<h4 class="title">'.esc_html($electromix_repeater_subtitle).' </h4>'; endif; 
								if(!(empty($electromix_repeater_subtitle2))): echo '<p>'.esc_html($electromix_repeater_subtitle2).' </p>'; endif;
								if(!(empty($electromix_repeater_subtitle4)) || !(empty($electromix_repeater_subtitle3))): echo '<div class="price">
                                    <ins>
                                        <span class="woocommerce-Price-amount amount">
                                            <bdi><span class="woocommerce-Price-currencySymbol">'.esc_html($electromix_repeater_subtitle3).'</bdi>
                                        </span>
                                    </ins>
                                    <del aria-hidden="true">
                                        <span class="woocommerce-Price-amount amount"><bdi><span class="woocommerce-Price-currencySymbol">'.esc_html($electromix_repeater_subtitle4).'</bdi></span>
                                    </del>';
								endif;
                               echo '</div>';
							?>
						
						
                               <?php 
							if(!(empty($electromix_repeater_button_text))): ?>
							<a href="<?php echo esc_url($electromix_repeater_button_link); ?>" class="btn btn-primary" <?php if($electromix_repeater_newtab =='yes') {echo 'target="_blank"'; } ?> rel="<?php if($electromix_repeater_newtab =='yes') {echo 'noreferrer noopener';} ?> <?php if($electromix_repeater_nofollow =='yes') {echo 'nofollow';} ?>"><?php echo esc_html($electromix_repeater_button_text); ?> <i class="fa fa-chevron-circle-right"></i></a>
						<?php endif; ?>
                         </div>
						<?php if(!empty($electromix_repeater_image)):
							echo '<div class="banner-img  w-lg-50 my-3">
								<img src="'.esc_url($electromix_repeater_image).'" alt="'.esc_html($electromix_repeater_title).'">
							</div>';
						endif; 	
						
						if(!empty($electromix_repeater_image2)):
							echo '<div class="banner-bg-img">
								<img src="'.esc_url($electromix_repeater_image2).'" alt="'.esc_attr('Bg Img','ecommerce-companion').'">
							</div>';
						endif; ?>
				</aside>
			</div>
			<?php }} ?>
		</div>
	</div>
</section>
<?php endif; ?>