<?php  
	if ( ! defined( 'ABSPATH' ) ) exit;
	$electromix_slider_hs					= get_theme_mod('slider_hs','1');
	$electromix_slider 						= get_theme_mod('slider',electromix_get_slider_default());
	$electromix_slider_r 					= get_theme_mod('slider_r',electromix_get_slider_r_default());
	$electromix_slider_b 					= get_theme_mod('slider_b',electromix_get_slider_b_default());	
	if($electromix_slider_hs == '1' ) :
?>	

<section id="slider" class="main-slider-section home-one st-py-default">
	<div class="container">
		<div class="row g-2 g-sm-3 g-lg-4">
			<div class="col-12 col-lg-8 wow zoomIn">
				<div class="main-slider owl-carousel">
				<?php
					if ( ! empty( $electromix_slider ) ) {
					$electromix_slider = json_decode( $electromix_slider );
					foreach ( $electromix_slider as $electromix_slide_item ) {
						$electromix_repeater_title = ! empty( $electromix_slide_item->title ) ? apply_filters( 'electromix_translate_single_string', $electromix_slide_item->title, 'slider section' ) : '';
						$electromix_repeater_subtitle = ! empty( $electromix_slide_item->subtitle ) ? apply_filters( 'electromix_translate_single_string', $electromix_slide_item->subtitle, 'slider section' ) : '';
						$electromix_repeater_subtitle2 = ! empty( $electromix_slide_item->subtitle2 ) ? apply_filters( 'electromix_translate_single_string', $electromix_slide_item->subtitle2, 'slider section' ) : '';
						$electromix_repeater_button_text = ! empty( $electromix_slide_item->button_text) ? apply_filters( 'electromix_translate_single_string', $electromix_slide_item->button_text,'slider section' ) : '';
						$electromix_repeater_button_link = ! empty( $electromix_slide_item->button_link ) ? apply_filters( 'electromix_translate_single_string', $electromix_slide_item->button_link, 'slider section' ) : '';						
						$electromix_repeater_image = ! empty( $electromix_slide_item->image_url ) ? apply_filters( 'electromix_translate_single_string', $electromix_slide_item->image_url, 'slider section' ) : '';
						$electromix_repeater_image2 = ! empty( $electromix_slide_item->image_url2 ) ? apply_filters( 'electromix_translate_single_string', $electromix_slide_item->image_url2, 'slider section' ) : '';
						$electromix_repeater_newtab = ! empty( $electromix_slide_item->newtab ) ? apply_filters( 'electromix_translate_single_string', $electromix_slide_item->newtab, 'slider section' ) : '';
						$electromix_repeater_nofollow = ! empty( $electromix_slide_item->nofollow ) ? apply_filters( 'electromix_translate_single_string', $electromix_slide_item->nofollow, 'slider section' ) : '';
						
				?>
					<aside class="banner-item dark-bg" >
						<div class="banner-content">
						<?php  if ( ! empty( $electromix_repeater_title ) ): ?>
							<div class="sub-title color-primary" data-animation="zoomIn" data-delay="150ms"><?php  echo esc_html($electromix_repeater_title); ?></div>
						<?php endif; ?>
						
						<?php  if ( ! empty( $electromix_repeater_subtitle ) || ! empty( $electromix_repeater_subtitle2 ) ): ?>
							<h1 data-animation="zoomIn" data-delay="200ms"><?php  echo esc_html($electromix_repeater_subtitle); ?><br><?php  echo esc_html($electromix_repeater_subtitle2); ?></h1> 
						<?php endif; ?>
						<?php  if ( ! empty( $electromix_repeater_button_text ) ): ?>
							<a href="<?php echo esc_url($electromix_repeater_button_link); ?>" class="btn btn-primary main-button" <?php if($electromix_repeater_newtab =='yes') {echo 'target="_blank"'; } ?> rel="<?php if($electromix_repeater_newtab =='yes') {echo 'noreferrer noopener';} ?> <?php if($electromix_repeater_nofollow =='yes') {echo 'nofollow';} ?>" data-animation="zoomIn" data-delay="800ms"><span><?php echo esc_html($electromix_repeater_button_text ); ?></span><i class="fa fa-chevron-circle-right"></i></a>
						<?php endif; ?>
						</div>
						<div class="banner-img">
						<?php if ( ! empty( $electromix_repeater_image ) ) {
							echo '<img data-animation="zoomIn" src="'.esc_url($electromix_repeater_image).'" alt="'.esc_html($electromix_repeater_subtitle).'">';
						} ?>
						<?php if ( ! empty( $electromix_repeater_image2 ) ) {
							echo '<img class="main-banner-bg-img" src="'.esc_url($electromix_repeater_image2).'" alt="'.esc_attr__('Bg Img','ecommerce-companion').'">';
						} ?>
						</div>
					</aside>
					<?php } } ?>
				</div>
			</div>
			<div class="col-12 col-lg-4">
				<div class="row g-2 g-sm-3 gy-lg-4">
				<?php
				if ( ! empty( $electromix_slider_r ) ) {
					$electromix_slider_r = json_decode( $electromix_slider_r );
					foreach ( $electromix_slider_r as $electromix_slide_item ) {
						$electromix_repeater_title_r = ! empty( $electromix_slide_item->title ) ? apply_filters( 'electromix_translate_single_string', $electromix_slide_item->title, 'slider section' ) : '';
						$electromix_repeater_subtitle_r1 = ! empty( $electromix_slide_item->subtitle ) ? apply_filters( 'electromix_translate_single_string', $electromix_slide_item->subtitle, 'slider section' ) : '';
						$electromix_repeater_subtitle_r2 = ! empty( $electromix_slide_item->subtitle2 ) ? apply_filters( 'electromix_translate_single_string', $electromix_slide_item->subtitle2, 'slider section' ) : '';
						$electromix_repeater_subtitle_r3 = ! empty( $electromix_slide_item->subtitle3 ) ? apply_filters( 'electromix_translate_single_string', $electromix_slide_item->subtitle3, 'slider section' ) : '';
						$electromix_repeater_button_r = ! empty( $electromix_slide_item->button_text) ? apply_filters( 'electromix_translate_single_string', $electromix_slide_item->button_text,'slider section' ) : '';
						$electromix_repeater_link_r = ! empty( $electromix_slide_item->button_link ) ? apply_filters( 'electromix_translate_single_string', $electromix_slide_item->button_link, 'slider section' ) : '';
						$electromix_repeater_image_r = ! empty( $electromix_slide_item->image_url ) ? apply_filters( 'electromix_translate_single_string', $electromix_slide_item->image_url, 'slider section' ) : '';
						$electromix_repeater_newtab_r = ! empty( $electromix_slide_item->newtab ) ? apply_filters( 'electromix_translate_single_string', $electromix_slide_item->newtab, 'slider section' ) : '';
						$electromix_repeater_nofollow_r = ! empty( $electromix_slide_item->nofollow ) ? apply_filters( 'electromix_translate_single_string', $electromix_slide_item->nofollow, 'slider section' ) : '';
						
				?>
					<div class="col-md-6 col-lg-12 wow zoomIn" data-wow-delay="0ms" data-wow-duration="1500ms">
						<aside class="banner-item dark-bg" >
							<div class="banner-content">
							<?php  if ( ! empty( $electromix_repeater_title_r ) ): ?>
								<h4 class="title color-primary"><?php  echo esc_html($electromix_repeater_title_r); ?></h4>
							<?php endif; ?>
							<?php  if ( ! empty( $electromix_repeater_subtitle_r1 ) ): ?>
								<p><?php  echo esc_html($electromix_repeater_subtitle_r1); ?></p>
							<?php endif; ?>
							<?php  if ( ! empty( $electromix_repeater_subtitle_r2 ) || ! empty( $electromix_repeater_subtitle_r3 ) ): ?>
								<p class="start-price"><?php  echo esc_html($electromix_repeater_subtitle_r2); ?> <strong class="color-secondary"><?php  echo esc_html($electromix_repeater_subtitle_r3); ?></strong></p>
							<?php endif; ?>
							<?php  if ( ! empty( $electromix_repeater_button_r ) ): ?>
								<a href="<?php echo esc_url($electromix_repeater_link_r); ?>" class="btn" <?php if($electromix_repeater_newtab_r =='yes') {echo 'target="_blank"'; } ?> rel="<?php if($electromix_repeater_newtab_r =='yes') {echo 'noreferrer noopener';} ?> <?php if($electromix_repeater_nofollow_r =='yes') {echo 'nofollow';} ?>"><?php  echo esc_html($electromix_repeater_button_r); ?> <i class="fa fa-chevron-circle-right"></i></a>
							<?php endif; ?>
							</div>
							<?php  if ( ! empty( $electromix_repeater_image_r ) ): ?>
							<div class="banner-img">
								<img src="<?php echo esc_url($electromix_repeater_image_r); ?>" alt="<?php esc_attr__('Bg Img','ecommerce-companion') ?>">
							</div>
							<?php endif; ?>
						</aside>
					</div>
				<?php }} ?>
				</div>
			</div>
			<div class="col-12">
				<div class="row g-2 g-sm-3 g-lg-4">
					<?php
				if ( ! empty( $electromix_slider_b ) ) {
					$electromix_slider_b = json_decode( $electromix_slider_b );
					foreach ( $electromix_slider_b as $electromix_slide_item ) {
						$electromix_repeater_title_b = ! empty( $electromix_slide_item->title ) ? apply_filters( 'electromix_translate_single_string', $electromix_slide_item->title, 'slider section' ) : '';
						$electromix_repeater_subtitle_b1 = ! empty( $electromix_slide_item->subtitle ) ? apply_filters( 'electromix_translate_single_string', $electromix_slide_item->subtitle, 'slider section' ) : '';
						$electromix_repeater_subtitle_b2 = ! empty( $electromix_slide_item->subtitle2 ) ? apply_filters( 'electromix_translate_single_string', $electromix_slide_item->subtitle2, 'slider section' ) : '';
						$electromix_repeater_subtitle_b3 = ! empty( $electromix_slide_item->subtitle3 ) ? apply_filters( 'electromix_translate_single_string', $electromix_slide_item->subtitle3, 'slider section' ) : '';
						$electromix_repeater_button_b = ! empty( $electromix_slide_item->button_text) ? apply_filters( 'electromix_translate_single_string', $electromix_slide_item->button_text,'slider section' ) : '';
						$electromix_repeater_link_b = ! empty( $electromix_slide_item->button_link ) ? apply_filters( 'electromix_translate_single_string', $electromix_slide_item->button_link, 'slider section' ) : '';
						$electromix_repeater_image_b = ! empty( $electromix_slide_item->image_url ) ? apply_filters( 'electromix_translate_single_string', $electromix_slide_item->image_url, 'slider section' ) : '';
						$electromix_repeater_newtab_b = ! empty( $electromix_slide_item->newtab ) ? apply_filters( 'electromix_translate_single_string', $electromix_slide_item->newtab, 'slider section' ) : '';
						$electromix_repeater_nofollow_b = ! empty( $electromix_slide_item->nofollow ) ? apply_filters( 'electromix_translate_single_string', $electromix_slide_item->nofollow, 'slider section' ) : '';
						
				?>
					<div class="col-md-6 col-lg-4 wow zoomIn" data-wow-delay="0ms" data-wow-duration="1500ms">
						<aside class="banner-item dark-bg" >
							<div class="banner-content">
							<?php  if ( ! empty( $electromix_repeater_title_b ) ): ?>
								<h4 class="title color-primary"><?php  echo esc_html($electromix_repeater_title_b); ?></h4>
							<?php endif; ?>
							<?php  if ( ! empty( $electromix_repeater_subtitle_b1 ) ): ?>
								<p><?php  echo esc_html($electromix_repeater_subtitle_b1); ?></p>
							<?php endif; ?>
							<?php  if ( ! empty( $electromix_repeater_subtitle_b2 ) || ! empty( $electromix_repeater_subtitle_b3 ) ): ?>
								<p class="start-price"><?php  echo esc_html($electromix_repeater_subtitle_b2); ?> <strong class="color-secondary"><?php  echo esc_html($electromix_repeater_subtitle_b3); ?></strong></p>
							<?php endif; ?>
							<?php  if ( ! empty( $electromix_repeater_button_b ) ): ?>
								<a href="<?php echo esc_url($electromix_repeater_link_b); ?>" class="btn" <?php if($electromix_repeater_newtab_b =='yes') {echo 'target="_blank"'; } ?> rel="<?php if($electromix_repeater_newtab_b =='yes') {echo 'noreferrer noopener';} ?> <?php if($electromix_repeater_nofollow_b =='yes') {echo 'nofollow';} ?>"><?php  echo esc_html($electromix_repeater_button_b); ?> <i class="fa fa-chevron-circle-right"></i></a>
							<?php endif; ?>
							</div>
							<?php  if ( ! empty( $electromix_repeater_image_b ) ): ?>
							<div class="banner-img">
								<img src="<?php echo esc_url($electromix_repeater_image_b); ?>" alt="<?php esc_attr__('Bg Img','ecommerce-companion') ?>">
							</div>
							<?php endif; ?>
						</aside>
					</div>
				<?php }} ?>
				</div>
			</div>
		</div>
	</div>
</section>
<?php endif; ?>