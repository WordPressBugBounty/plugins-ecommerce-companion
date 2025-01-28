<?php 
if ( ! function_exists( 'ecommerce_comp_pet_bazaar_category' ) ) :
function ecommerce_comp_pet_bazaar_category() {
	$category_cat			= get_theme_mod('category_cat');
	$category_num			= get_theme_mod('category_num','20');
	$hs_category			= get_theme_mod('hs_category','1');
	if($hs_category == '1'){
?>	
<?php 
	if ( class_exists( 'woocommerce' ) ) {
	$args                   = array(
		'post_type' => 'product',
		'posts_per_page' => $category_num,
	);
	$args['tax_query'] = array(
		array(
			'taxonomy' => 'product_cat',
			'field' => 'slug',
			'terms' => $category_cat,
		),
	);
	
	if ( !empty($category_cat) && ! is_wp_error( $category_cat ) ) : 
?>

<section id="product-category-section" class="categories categorie-one">
	<div class="container">
		<div class="categories-inner owl-carousel">
				<?php
			
					// $product_cats = get_terms( 'product_cat' );
					
					foreach ($category_cat as $i => $product_cat) {
						$category_name = get_term_by( 'slug', $product_cat, 'product_cat' );   
						$category_link = get_term_link($category_name);
						$product_count = $category_name->count;
						$thumbnail_id = get_term_meta($category_name->term_id, 'thumbnail_id', true); 
						$thumbnail_url = wp_get_attachment_url($thumbnail_id); ?>
						
						<div class="categories-item">
                        <div class="bg-element"><svg xmlns="http://www.w3.org/2000/svg"  viewBox="0 0 512 512"><title/><path d="M490.39,182.75c-5.55-13.19-14.77-22.7-26.67-27.49l-.16-.06a46.46,46.46,0,0,0-17-3.2h-.64c-27.24.41-55.05,23.56-69.19,57.61-10.37,24.9-11.56,51.68-3.18,71.64,5.54,13.2,14.78,22.71,26.73,27.5l.13.05a46.53,46.53,0,0,0,17,3.2c27.5,0,55.6-23.15,70-57.65C497.65,229.48,498.78,202.72,490.39,182.75Z"/><path d="M381.55,329.61c-15.71-9.44-30.56-18.37-40.26-34.41C314.53,250.8,298.37,224,256,224s-58.57,26.8-85.39,71.2c-9.72,16.06-24.6,25-40.36,34.48-18.07,10.86-36.74,22.08-44.8,44.16a66.93,66.93,0,0,0-4.65,25c0,35.95,28,65.2,62.4,65.2,17.75,0,36.64-6.15,56.63-12.66,19.22-6.26,39.09-12.73,56.27-12.73s37,6.47,56.15,12.73C332.2,457.85,351,464,368.8,464c34.35,0,62.3-29.25,62.3-65.2a67,67,0,0,0-4.75-25C418.29,351.7,399.61,340.47,381.55,329.61Z"/><path d="M150,188.85c11.9,14.93,27,23.15,42.52,23.15a42.88,42.88,0,0,0,6.33-.47c32.37-4.76,52.54-44.26,45.92-90C242,102.3,234.6,84.39,224,71.11,212.12,56.21,197,48,181.49,48a42.88,42.88,0,0,0-6.33.47c-32.37,4.76-52.54,44.26-45.92,90C132,157.67,139.4,175.56,150,188.85Z"/><path d="M313.16,211.53a42.88,42.88,0,0,0,6.33.47c15.53,0,30.62-8.22,42.52-23.15,10.59-13.29,17.95-31.18,20.75-50.4h0c6.62-45.72-13.55-85.22-45.92-90a42.88,42.88,0,0,0-6.33-.47C315,48,299.88,56.21,288,71.11c-10.6,13.28-18,31.19-20.76,50.44C260.62,167.27,280.79,206.77,313.16,211.53Z"/><path d="M111.59,308.8l.14-.05c11.93-4.79,21.16-14.29,26.69-27.48,8.38-20,7.2-46.75-3.15-71.65C120.94,175.16,92.85,152,65.38,152a46.4,46.4,0,0,0-17,3.2l-.14.05C36.34,160,27.11,169.54,21.58,182.73c-8.38,20-7.2,46.75,3.15,71.65C39.06,288.84,67.15,312,94.62,312A46.4,46.4,0,0,0,111.59,308.8Z"/></svg></div>
						
                        <div class="categories-img">                            
                            <img src="<?php echo esc_url($thumbnail_url); ?>" alt="<?php esc_html_e($category_name->name); ?>" class="w-100 d-block zoom">
                            <div class="categ-main-overlay">
                                <div class="categories-overlay tp-0"></div>
                                <div class="categories-overlay tp-25"></div>
                                <div class="categories-overlay tp-50"></div>
                                <div class="categories-overlay tp-75"></div>
                            </div>
                        </div>
                        <div class="categories-content">
                            <h4><a href="<?php echo esc_url($category_link); ?>"><?php esc_html_e($category_name->name); ?></a></h4>
                            <p><?php esc_html_e($product_count); ?> Products</p>
                        </div>
                    </div>
					<?php }
					
					?>				
		</div>
	</div>
</section>
<?php endif; } } ?>
	
<?php
} endif;

if ( function_exists( 'ecommerce_comp_pet_bazaar_category' ) ) {
$section_priority = apply_filters( 'pet_bazaar_section_priority', 12, 'ecommerce_comp_pet_bazaar_category' );
add_action( 'pet_bazaar_sections', 'ecommerce_comp_pet_bazaar_category', absint( $section_priority ) );
}
?>