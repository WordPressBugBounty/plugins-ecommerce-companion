<?php  
	if ( ! defined( 'ABSPATH' ) ) exit;
	$electromix_banner_hs  	= get_theme_mod('banner2_hs','1');
	$electromix_banner_contents  	= get_theme_mod('banner2_contents',electromix_get_banner2_default());
	if( $electromix_banner_hs == '1' ): 
?>	
<section id="banner-two" class="banner-section st-py-default">
	<div class="container">
		<div class="row g-2 g-sm-3 gy-lg-4">
		<?php
		if ( ! empty( $electromix_banner_contents  ) ) {
		$electromix_banner_contents  = json_decode( $electromix_banner_contents  );
		foreach ( $electromix_banner_contents  as $electromix_banner_item ) {
			$electromix_repeater_title = ! empty( $electromix_banner_item->title ) ? apply_filters( 'electromix_translate_single_string', $electromix_banner_item->title, 'Banner 2 section' ) : '';
			$electromix_repeater_subtitle = ! empty( $electromix_banner_item->subtitle ) ? apply_filters( 'electromix_translate_single_string', $electromix_banner_item->subtitle, 'Banner 2 section' ) : '';
			$electromix_repeater_subtitle2 = ! empty( $electromix_banner_item->subtitle2 ) ? apply_filters( 'electromix_translate_single_string', $electromix_banner_item->subtitle2, 'Banner 2 section' ) : '';
			$electromix_repeater_subtitle3 = ! empty( $electromix_banner_item->subtitle3 ) ? apply_filters( 'electromix_translate_single_string', $electromix_banner_item->subtitle3, 'Banner 2 section' ) : '';
			$electromix_repeater_text = ! empty( $electromix_banner_item->text ) ? apply_filters( 'electromix_translate_single_string', $electromix_banner_item->text, 'Banner 2 section' ) : '';
			$electromix_repeater_text2 = ! empty( $electromix_banner_item->text2 ) ? apply_filters( 'electromix_translate_single_string', $electromix_banner_item->text2, 'Banner 2 section' ) : '';
			$electromix_repeater_button_text = ! empty( $electromix_banner_item->button_text ) ? apply_filters( 'electromix_translate_single_string', $electromix_banner_item->button_text, 'Banner 2 section' ) : '';
			$electromix_repeater_button_link = ! empty( $electromix_banner_item->button_link ) ? apply_filters( 'electromix_translate_single_string', $electromix_banner_item->button_link, 'Banner 2 section' ) : '';
			$electromix_repeater_newtab = ! empty( $electromix_banner_item->newtab ) ? apply_filters( 'electromix_translate_single_string', $electromix_banner_item->newtab, 'Banner 2 section' ) : '';
			$electromix_repeater_nofollow = ! empty( $electromix_banner_item->nofollow ) ? apply_filters( 'electromix_translate_single_string', $electromix_banner_item->nofollow, 'Banner 2 section' ) : '';
			$electromix_repeater_image = ! empty( $electromix_banner_item->image_url) ? apply_filters( 'electromix_translate_single_string', $electromix_banner_item->image_url,'Banner 2 section' ) : '';
			$electromix_repeater_image2 = ! empty( $electromix_banner_item->image_url2) ? apply_filters( 'electromix_translate_single_string', $electromix_banner_item->image_url2,'Banner 2 section' ) : '';	  
					 
                echo '<div class="col-12 col-lg-'.esc_attr($electromix_repeater_text2).' wow zoomIn" data-wow-delay="0ms" data-wow-duration="1500ms">
                        <aside class="banner-item primary-bg bg-shape h-100">
                            <div class="banner-content">'; 
								if(!(empty($electromix_repeater_text))): echo '<span class="offer-badge">'.esc_html($electromix_repeater_text).' </span>'; endif;
                                if(!(empty($electromix_repeater_title))): echo '<h4 class="title">'.esc_html($electromix_repeater_title).' </h4>'; endif; 
								if(!(empty($electromix_repeater_subtitle))): echo '<p class="subtitle">'.esc_html($electromix_repeater_subtitle).' </p>'; endif;
								if(!(empty($electromix_repeater_subtitle2)) || !(empty($electromix_repeater_subtitle3))): echo '<p class="start-price">'.esc_html($electromix_repeater_subtitle2).'  <strong class="color-secondary">'.esc_html($electromix_repeater_subtitle3).' </strong></p>'; endif; ?>
                               <?php 
							if(!(empty($electromix_repeater_button_text))): ?>
							<a href="<?php echo esc_url($electromix_repeater_button_link); ?>" class="btn" <?php if($electromix_repeater_newtab =='yes') {echo 'target="_blank"'; } ?> rel="<?php if($electromix_repeater_newtab =='yes') {echo 'noreferrer noopener';} ?> <?php if($electromix_repeater_nofollow =='yes') {echo 'nofollow';} ?>"><?php echo esc_html($electromix_repeater_button_text); ?> <i class="fa fa-chevron-circle-right"></i></a>
						<?php endif; ?>
                            </div>
                            <?php if(!(empty($electromix_repeater_image))):
					echo '<div class="banner-img  w-lg-50 my-3">
						<img src="'.esc_url($electromix_repeater_image).'" alt="'.esc_html($electromix_repeater_title).'">
					</div>';
					endif; ?>
				</aside>
			</div>
			<?php }} ?>
		</div>
	</div>
</section>
<?php endif; ?>