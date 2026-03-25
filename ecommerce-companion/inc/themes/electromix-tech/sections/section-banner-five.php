<?php 
	if ( ! defined( 'ABSPATH' ) ) exit;
	$electromix_banner5_hs							= get_theme_mod('banner5_hs', '1');
	$electromix_banner_left_offer					= get_theme_mod('banner_left_offer', __('20% OFF','ecommerce-companion'));
	$electromix_banner_left_title					= get_theme_mod('banner_left_title', __('Irusu Play VR Ultra VR Headset 3D Virtual Reality','ecommerce-companion'));
	$electromix_banner_left_subtitle_one			= get_theme_mod('banner_left_subtitle_one', __('STARTING AT','ecommerce-companion'));
	$electromix_banner_left_subtitle_two			= get_theme_mod('banner_left_subtitle_two', __('$electromix_999.00','ecommerce-companion'));
	$electromix_banner_left_button_label			= get_theme_mod('banner_left_button_label', __('Shop Now','ecommerce-companion'));
	$electromix_banner_left_button_link				= get_theme_mod('banner_left_button_link');
	$electromix_banner_left_button_newtab			= get_theme_mod('banner_left_button_newtab', 'yes');
	$electromix_banner_left_button_nofollow			= get_theme_mod('banner_left_button_nofollow', 'yes');
	$electromix_banner_left_bg_img					= get_theme_mod('banner_left_bg_img', ECOMMERCE_COMP_PLUGIN_URL . 'inc/themes/electromix-tech/assets/images/banner/5/img_1.png');
	
	$electromix_banner_right_top_offer				= get_theme_mod('banner_right_top_offer', __('20% OFF','ecommerce-companion'));
	$electromix_banner_right_top_title				= get_theme_mod('banner_right_top_title', __('Samsung Tab s9','ecommerce-companion'));
	$electromix_banner_right_top_subtitle_one		= get_theme_mod('banner_right_top_subtitle_one', __('STARTING AT','ecommerce-companion'));
	$electromix_banner_right_top_subtitle_two		= get_theme_mod('banner_right_top_subtitle_two', __('$electromix_919.00','ecommerce-companion'));
	$electromix_banner_right_top_button_label		= get_theme_mod('banner_right_top_button_label', __('Shop Now','ecommerce-companion'));
	$electromix_banner_right_top_button_link		= get_theme_mod('banner_right_top_button_link');
	$electromix_banner_right_top_button_newtab		= get_theme_mod('banner_right_top_button_newtab', 'yes');
	$electromix_banner_right_top_button_nofollow	= get_theme_mod('banner_right_top_button_nofollow', 'yes');
	$electromix_banner_right_top_bg_img				= get_theme_mod('banner_right_top_bg_img', ECOMMERCE_COMP_PLUGIN_URL . 'inc/themes/electromix-tech/assets/images/banner/5/img_2.png');
	
	$electromix_banner_right_bottom_offer			= get_theme_mod('banner_right_bottom_offer', __('15% OFF','ecommerce-companion'));
	$electromix_banner_right_bottom_title			= get_theme_mod('banner_right_bottom_title', __('Full HD Camera','ecommerce-companion'));
	$electromix_banner_right_bottom_subtitle_one	= get_theme_mod('banner_right_bottom_subtitle_one', __('STARTING AT','ecommerce-companion'));
	$electromix_banner_right_bottom_subtitle_two	= get_theme_mod('banner_right_bottom_subtitle_two', __('$electromix_199.00','ecommerce-companion'));
	$electromix_banner_right_bottom_button_label	= get_theme_mod('banner_right_bottom_button_label', __('Shop Now','ecommerce-companion'));
	$electromix_banner_right_bottom_button_link		= get_theme_mod('banner_right_bottom_button_link');
	$electromix_banner_right_bottom_button_newtab	= get_theme_mod('banner_right_bottom_button_newtab', 'yes');
	$electromix_banner_right_bottom_button_nofollow = get_theme_mod('banner_right_bottom_button_nofollow', 'yes');
	$electromix_banner_right_bottom_bg_img			= get_theme_mod('banner_right_bottom_bg_img', ECOMMERCE_COMP_PLUGIN_URL . 'inc/themes/electromix-tech/assets/images/banner/5/img_3.png');
	if( $electromix_banner5_hs == '1' ):
?>	
<section id="banner-five" class="banner-section banner-section-three st-py-default">
	<div class="container">
		<div class="row g-2 g-sm-3 gy-lg-4">
			<div class="col-12 col-lg-7 wow zoomIn" data-wow-delay="0ms" data-wow-duration="1500ms">
				<aside class="banner-item big-banner primary-bg" >
					<div class="banner-content">
						<?php if(!empty($electromix_banner_left_offer)): ?>
							<span class="offer-badge"><?php echo esc_html($electromix_banner_left_offer); ?></span>
						<?php endif; ?>
						<?php if(!empty($electromix_banner_left_title)): ?>
							<h4 class="title"><?php echo esc_html($electromix_banner_left_title); ?></h4>
						<?php endif; ?>
						<div class="banner-bottom">
							<?php if(!empty($electromix_banner_left_subtitle_one) || !empty($electromix_banner_left_subtitle_two)): ?>
								<p class="start-price"><?php echo esc_html($electromix_banner_left_subtitle_one); ?> <strong class="color-secondary"><?php echo esc_html($electromix_banner_left_subtitle_two); ?></strong></p>
							<?php endif; ?>
							<?php if(!empty($electromix_banner_left_button_label)): ?>
								<a href="<?php echo esc_url($electromix_banner_left_button_link); ?>" class="btn btn-primary" <?php if($electromix_banner_left_button_newtab =='yes') {echo 'target="_blank"'; } ?> rel="<?php if($electromix_banner_left_button_newtab =='yes') {echo 'noreferrer noopener';} ?> <?php if($electromix_banner_left_button_nofollow =='yes') {echo 'nofollow';} ?>"><?php echo esc_html($electromix_banner_left_button_label); ?> <i class="fa fa-chevron-circle-right"></i></a>
							<?php endif; ?>
						</div>
					</div>
					<?php if(!empty($electromix_banner_left_bg_img)): ?>
						<div class="banner-img">
							<img src="<?php echo esc_url($electromix_banner_left_bg_img); ?>" alt="<?php esc_attr_e('Wireless','ecommerce-companion'); ?>">
						</div>
					<?php endif; ?>
				</aside>
			</div>
			<div class="col-12 col-lg-5">
				<div class="row g-2 g-sm-3 gy-lg-4">
					<div class="col-md-6 col-lg-12 wow zoomIn" data-wow-delay="200ms" data-wow-duration="1500ms">
						<aside class="banner-item primary-bg" >
							<div class="banner-content">
								<?php if(!empty($electromix_banner_right_top_offer)): ?>
									<span class="offer-badge"><?php echo esc_html($electromix_banner_right_top_offer); ?></span>
								<?php endif; ?>
								<?php if(!empty($electromix_banner_right_top_title)): ?>
									<h4 class="title"><?php echo esc_html($electromix_banner_right_top_title); ?></h4>
								<?php endif; ?>
								<?php if(!empty($electromix_banner_right_top_subtitle_one) || !empty($electromix_banner_right_top_subtitle_two)): ?>
									<p class="start-price"><?php echo esc_html($electromix_banner_right_top_subtitle_one); ?> <strong class="color-secondary"><?php echo esc_html($electromix_banner_right_top_subtitle_two); ?></strong></p>
								<?php endif; ?>
								<?php if(!empty($electromix_banner_right_top_button_label)): ?>
									<a href="<?php echo esc_url($electromix_banner_right_top_button_link); ?>" class="btn btn-primary" <?php if($electromix_banner_right_top_button_newtab =='yes') {echo 'target="_blank"'; } ?> rel="<?php if($electromix_banner_right_top_button_newtab =='yes') {echo 'noreferrer noopener';} ?> <?php if($electromix_banner_right_top_button_nofollow =='yes') {echo 'nofollow';} ?>"><?php echo esc_html($electromix_banner_right_top_button_label); ?> <i class="fa fa-chevron-circle-right"></i></a>
								<?php endif; ?>
							</div>
							<?php if(!empty($electromix_banner_right_top_bg_img)): ?>
							<div class="banner-img">
								<img src="<?php echo esc_url($electromix_banner_right_top_bg_img); ?>" alt="<?php esc_attr_e('Speaker','ecommerce-companion'); ?>">
							</div>
							<?php endif; ?>
						</aside>
					</div>
					<div class="col-md-6 col-lg-12 wow zoomIn" data-wow-delay="400ms" data-wow-duration="1500ms">
						<aside class="banner-item flex-row-reverse primary-bg" >
							<div class="banner-content">
								<?php if(!empty($electromix_banner_right_bottom_offer)): ?>
									<span class="offer-badge"><?php echo esc_html($electromix_banner_right_bottom_offer); ?></span>
								<?php endif; ?>
								<?php if(!empty($electromix_banner_right_bottom_title)): ?>
									<h4 class="title"><?php echo esc_html($electromix_banner_right_bottom_title); ?></h4>
								<?php endif; ?>
								<?php if(!empty($electromix_banner_right_bottom_subtitle_one) || !empty($electromix_banner_right_bottom_subtitle_two)): ?>
									<p class="start-price"><?php echo esc_html($electromix_banner_right_bottom_subtitle_one); ?> <strong class="color-secondary"><?php echo esc_html($electromix_banner_right_bottom_subtitle_two); ?></strong></p>
								<?php endif; ?>
								<?php if(!empty($electromix_banner_right_bottom_button_label)): ?>
									<a href="<?php echo esc_url($electromix_banner_right_bottom_button_link); ?>" class="btn btn-primary" <?php if($electromix_banner_right_bottom_button_newtab =='yes') {echo 'target="_blank"'; } ?> rel="<?php if($electromix_banner_right_bottom_button_newtab =='yes') {echo 'noreferrer noopener';} ?> <?php if($electromix_banner_right_bottom_button_nofollow =='yes') {echo 'nofollow';} ?>"><?php echo esc_html($electromix_banner_right_bottom_button_label); ?> <i class="fa fa-chevron-circle-right"></i></a>
								<?php endif; ?>
							</div>
							<?php if(!empty($electromix_banner_right_bottom_bg_img)): ?>
							<div class="banner-img">
								<img src="<?php echo esc_url($electromix_banner_right_bottom_bg_img); ?>" alt="<?php esc_attr_e('Phone','ecommerce-companion'); ?>">
							</div>
							<?php endif; ?>
						</aside>
					</div>
				</div>
			</div>
		</div>
	</div>
</section>
<?php endif; ?>