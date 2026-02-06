<?php 
	if ( ! defined( 'ABSPATH' ) ) exit;
	if ( ! function_exists( 'ecommerce_comp_pet_bazaar_testimonial' ) ) :
	function ecommerce_comp_pet_bazaar_testimonial() {
	$hs_testimonial			= get_theme_mod('hs_testimonial','1');
	$testimonial_contents 			= get_theme_mod('testimonial_contents',pet_bazaar_get_testimonial_default());	
	$testimonial_section_title		= get_theme_mod('testimonial_section_title',__('<span>our</span> testimonial','ecommerce-companion'));	
	$testimonial_section_subtitle 	= get_theme_mod('testimonial_section_subtitle',__('There are many variations of passages of Lorem Ipsum available','ecommerce-companion'));
	if($hs_testimonial == '1'){
?>	
<section id="testimonial-section" class="testimonial5 has-background">
	<div class="container">
		<div class="section-title text-center mb-3 mb-md-4">
			<h2 class="main-title"><?php echo wp_kses_post($testimonial_section_title); ?></h2>			
			<p class="main-description mt-2"><?php echo wp_kses_post($testimonial_section_subtitle); ?></p>
         </div>
         <div class="owl-carousel" id="testimonial5">
		<?php
			if ( ! empty( $testimonial_contents ) ) {
			$testimonial_contents = json_decode( $testimonial_contents );
			foreach ( $testimonial_contents as $testimonial_item ) {
				$title = ! empty( $testimonial_item->title ) ? apply_filters( 'pet_bazaar_pro_translate_single_string', $testimonial_item->title, 'Testimonial section' ) : '';
				$subtitle = ! empty( $testimonial_item->subtitle ) ? apply_filters( 'pet_bazaar_pro_translate_single_string', $testimonial_item->subtitle, 'Testimonial section' ) : '';				
				$text = ! empty( $testimonial_item->text ) ? apply_filters( 'pet_bazaar_pro_translate_single_string', $testimonial_item->text, 'Testimonial section' ) : '';
				$image = ! empty( $testimonial_item->image_url ) ? apply_filters( 'pet_bazaar_pro_translate_single_string', $testimonial_item->image_url, 'Testimonial section' ) : '';
		?>
			<div class="client5-item">
                    <div class="client5-description">
                        <p><?php if($text): echo esc_html($text); endif; ?></p>
                        <i class="fa fa-quote-left"></i>
                    </div>
                    <div class="client5-bottom">
                        <div class="client5-img">
                            <img src="<?php if($image): echo esc_url($image); endif; ?>" alt="">
                        </div>
                        <div class="client-detail">
                            <h6><?php if($title): echo esc_html($title); endif; ?></h6>
                            <span><?php if($subtitle): echo esc_html($subtitle); endif; ?></span>
                        </div>
                    </div>
                </div>
		<?php } } ?>
		</div>
	</div>
</section>
<?php 	} }  endif; ?>

<?php
if ( function_exists( 'ecommerce_comp_pet_bazaar_testimonial' ) ) {
$ecommerce_companion_section_priority = apply_filters( 'pet_bazaar_section_priority', 15, 'ecommerce_comp_pet_bazaar_testimonial' );
add_action( 'pet_bazaar_sections', 'ecommerce_comp_pet_bazaar_testimonial', absint( $ecommerce_companion_section_priority ) );
}
?>