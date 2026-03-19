<?php
	if ( ! defined( 'ABSPATH' ) ) exit;
	$electromix_cat_hs			= get_theme_mod('cat_two_hs','1'); 
	$electromix_hs_cat_two_tab	= get_theme_mod('hs_cat_two_tab','1'); 
	$electromix_cat_two_cat		= get_theme_mod('cat_two_cat',array());
	$electromix_cat_two_num		= get_theme_mod('cat_two_num','20');
	if( $electromix_cat_hs == '1' ):
?>

<?php 
	if ( class_exists( 'woocommerce' ) ) {
	$electromix_args                   = array(
		'post_type' => 'product',
		'posts_per_page' => $electromix_cat_two_num,
	);
	/* phpcs:ignore WordPress.DB.SlowDBQuery.slow_db_query_tax_query -- Small posts_per_page, safe usage */
	$electromix_args['tax_query'] = array(
		array(
			'taxonomy' => 'product_cat',
			'field' => 'slug',
			'terms' => $electromix_cat_two_cat,
		),
	);
?>
<section id="category-two" class="brand-product-section st-py-default filter-group">
	<div class="container">
		<div class="filter-container">
			<?php if(!empty($electromix_cat_two_cat) && ! is_wp_error( $electromix_cat_two_cat ) && $electromix_hs_cat_two_tab == '1' ): ?>
			<div class="tab-filter-slider owl-carousel" data-show-item="6" data-auto-width="false" data-mouse-drag="false">
				<?php foreach ( $electromix_cat_two_cat as $electromix_i=> $electromix_product_category ) { 
					$electromix_product_cat_name = get_term_by( 'slug', $electromix_product_category, 'product_cat' );
					?>
				<?php if($electromix_i == '0'){  ?>
					<a href="javascript:void(0);" data-filter="<?php echo esc_attr(strtolower($electromix_product_category)); ?>" class="active" rel="nofollow"><div class="brand-img"><?php  echo esc_html($electromix_product_cat_name->name); ?></div></a>
				
				<?php }else{ ?>		
					<a href="javascript:void(0);" data-filter="<?php echo esc_attr(strtolower($electromix_product_category)); ?>" rel="nofollow"><div class="brand-img"><?php  echo esc_html($electromix_product_cat_name->name); ?></div></a>
				<?php }} ?>
			</div>
			<?php endif; ?>
		</div>
		<?php if(!empty($electromix_cat_two_cat) && ! is_wp_error( $electromix_cat_two_cat ) ): ?>
		<ul class="row products g-0 mt-3 row-cols-lg-6 row-cols-md-4 row-cols-sm-3 row-cols-2" >
		<?php
			$electromix_loop = new WP_Query( $electromix_args );
			while ( $electromix_loop->have_posts() ) : $electromix_loop->the_post(); global $product; 
			$electromix_terms = get_the_terms( $electromix_loop->ID, 'product_cat' );
								
			if ( $electromix_terms && ! is_wp_error( $electromix_terms ) ) : 
				$electromix_links = array();

				foreach ( $electromix_terms as $electromix_term ) 
				{
					$electromix_links[] = $electromix_term->slug;
				}
				
				$electromix_tax = join( ' ', $electromix_links );		
			else :	
				$electromix_tax = '';	
			endif;
		?>
			<li class="product type-product col mix <?php echo esc_attr(strtolower($electromix_tax)); ?> show">
				<div class="product">
					<div class="product-single">
						<div class="product-img">
							<a href="<?php the_permalink(); ?>">
								<?php if ( $product->is_on_sale() ) : ?>
									<?php echo wp_kses_post(
									 /* phpcs:ignore WordPress.NamingConventions.PrefixAllGlobals.NonPrefixedHooknameFound -- WooCommerce core hook */
										apply_filters( 'woocommerce_sale_flash','<div class="sale-ribbon"><span class="tag-line">' . esc_html__( 'Sale', 'ecommerce-companion' ) .'</span></div>', $product )
										); ?>
								<?php endif; ?>
								<?php the_post_thumbnail(); ?>
							</a>
						</div>
						<div class="product-content-outer">
							<div class="product-content">
								<h3><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h3>
								<div class="start-price">
									<span class="color-secondary"><?php echo esc_html__('Starting','ecommerce-companion'); ?></span>
									<?php echo wp_kses_post($product->get_price_html()); ?>
								</div>
							</div>
							<div class="product-action">
								<a href="<?php the_permalink(); ?>" class="btn" rel="nofollow"><?php esc_html_e('See Product','ecommerce-companion'); ?> <i class="fa fa-chevron-circle-right"></i></a>
							</div>
						</div>
					</div>
				</div>
			</li>
			<?php endwhile; ?>
		<?php  wp_reset_postdata(); ?>					
	   </ul>
	   <?php endif; ?>
	</div>
</section>
<?php  } endif; ?>
