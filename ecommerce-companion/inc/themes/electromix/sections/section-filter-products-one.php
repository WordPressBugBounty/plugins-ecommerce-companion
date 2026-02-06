<?php  
	if ( ! defined( 'ABSPATH' ) ) exit;
	$electromix_filter_products_one_hs			= get_theme_mod('filter_products_one_hs','1');
	$electromix_filter_products_one_ttl			= get_theme_mod('filter_products_one_ttl',__('All Product','ecommerce-companion'));
	$electromix_hs_filter_products_one_tab		= get_theme_mod('hs_filter_products_one_tab','1'); 
	$electromix_filter_one_section_icon			= get_theme_mod('filter_one_section_icon','fa-list-ul'); 
	$electromix_filter_products_one_cat			= get_theme_mod('filter_products_one_cat',array());
	$electromix_filter_products_one_num			= get_theme_mod('filter_products_one_num','20');	
	$electromix_filter_products_one_date		= get_theme_mod('filter_products_one_date','2030-12-31');	
	$electromix_filter_products_one_time		= get_theme_mod('filter_products_one_time','00:00');
	if( $electromix_filter_products_one_hs == '1' ):
?>	

<section id="filter-product-one" class="product-section dark-bg st-py-default2 filter-group my-4">
	<div class="container">
		<div class="heading-default">
			<div class="title-container wow zoomIn">
				<div class="main-title">
					<i class="fa <?php echo esc_attr($electromix_filter_one_section_icon); ?>" aria-hidden="true"></i>
					<h2><?php echo wp_kses_post($electromix_filter_products_one_ttl); ?></h2>
				</div>
				<div data-timer="<?php echo esc_attr($electromix_filter_products_one_date.' '.$electromix_filter_products_one_time); ?>" id="dealsofdayCountDown" class="dealsofday-timer timer-container">
					<div class="dealsofday-item">
						<div class="dealsofday-count">
							<h6 class="days">05</h6>
						</div>
						<p><?php esc_html_e('DAY','ecommerce-companion'); ?></p>
					</div>
					<div class="dealsofday-item">
						<div class="dealsofday-count">
							<h6 class="hours">15</h6>
						</div>
						<p><?php esc_html_e('HOUR','ecommerce-companion'); ?></p>
					</div>
					<div class="dealsofday-item">
						<div class="dealsofday-count">
							<h6 class="minutes">55</h6>
						</div>
						<p><?php esc_html_e('MIN','ecommerce-companion'); ?></p>
					</div>
					<div class="dealsofday-item">
						<div class="dealsofday-count">
							<h6 class="seconds">20</h6>
						</div>
						<p><?php esc_html_e('SEC','ecommerce-companion'); ?></p>
					</div>
				</div>		
			</div>
			<?php 
				if ( class_exists( 'woocommerce' ) ) {
				$electromix_args                   = array(
					'post_type' => 'product',
					'posts_per_page' => $electromix_filter_products_one_num,
				);
				/* phpcs:ignore WordPress.DB.SlowDBQuery.slow_db_query_tax_query -- Small posts_per_page, safe usage */
				$electromix_args['tax_query'] = array(
					array(
						'taxonomy' => 'product_cat',
						'field' => 'slug',
						'terms' => $electromix_filter_products_one_cat,
					),
				);
			?>
			<div class="d-none d-lg-block filter-container w-50 wow zoomIn" data-wow-delay="200ms" data-wow-duration="1500ms">
			<?php if(!empty($electromix_filter_products_one_cat) && $electromix_hs_filter_products_one_tab == '1' ): ?>
				<div class="tab-filter-slider owl-carousel" data-show-item="">
					<?php foreach ( $electromix_filter_products_one_cat as $electromix_i=> $electromix_product_category ) { 
						$electromix_product_cat_name = get_term_by( 'slug', $electromix_product_category, 'product_cat' );
						?>
					<?php if($electromix_i == '0'){  ?>
						<a href="#" data-filter="<?php echo 'product_cat-'.esc_attr($electromix_product_category); ?>" class="active" rel="nofollow"><?php  echo esc_html($electromix_product_cat_name->name); ?></a>
					
					<?php }else{ ?>		
						<a href="#" data-filter="<?php echo 'product_cat-'.esc_attr($electromix_product_category); ?>" rel="nofollow"><?php  echo esc_html($electromix_product_cat_name->name); ?></a>
					<?php }} ?>
				</div>
				<?php endif; ?>
			</div>
			<div class="d-lg-none custom-owl-nav">
				<button type="button" class="custom-prev"><i class="fa fa-chevron-left"></i></button>
				<button type="button" class="custom-next"><i class="fa fa-chevron-right"></i></button>
			</div>
			<?php } ?>
		</div>
		<?php 
			if ( class_exists( 'woocommerce' ) ) {
			$electromix_args                   = array(
				'post_type' => 'product',
				'posts_per_page' => $electromix_filter_products_one_num,
			);
			/* phpcs:ignore WordPress.DB.SlowDBQuery.slow_db_query_tax_query -- Small posts_per_page, safe usage */
			$electromix_args['tax_query'] = array(
				array(
					'taxonomy' => 'product_cat',
					'field' => 'slug',
					'terms' => $electromix_filter_products_one_cat,
					),
			);
		?>
		<ul id="product-filter-init3" class="products products-slider owl-carousel owl-theme">
			<?php
				$electromix_loop = new WP_Query( $electromix_args );
				while ( $electromix_loop->have_posts() ) : $electromix_loop->the_post(); global $electromix_product;
				
				get_template_part('woocommerce/content','product'); 				
				endwhile; 
				wp_reset_postdata(); 
			 ?>
		</ul>
		<?php } ?>
	</div>
</section>
<?php endif; ?>