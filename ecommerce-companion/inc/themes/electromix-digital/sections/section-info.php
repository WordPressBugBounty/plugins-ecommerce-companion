<?php  
	if ( ! defined( 'ABSPATH' ) ) exit;
	$electromix_info_hs 			= get_theme_mod('info_hs','1');
	$electromix_info_contents 		= get_theme_mod('info_contents',electromix_info_default());
	if( $electromix_info_hs == '1' ):
?>	

<section id="info" class="infoservice-section infoservice-home-one st-py-default">
	<div class="container">
		<div class="row g-2 g-sm-3 gy-lg-4">
		<?php
			if ( ! empty( $electromix_info_contents ) ) {
			$electromix_info_contents = json_decode( $electromix_info_contents );
			foreach ( $electromix_info_contents as $electromix_info ) {
				$electromix_repeater_title = ! empty( $electromix_info->title ) ? apply_filters( 'electromix_translate_single_string', $electromix_info->title, 'Info section' ) : '';
				$electromix_repeater_text = ! empty( $electromix_info->text ) ? apply_filters( 'electromix_translate_single_string', $electromix_info->text, 'Info section' ) : '';
				$electromix_repeater_icon = ! empty( $electromix_info->icon_value) ? apply_filters( 'electromix_translate_single_string', $electromix_info->icon_value,'Info section' ) : '';
				
				echo '<div class="col-12 col-sm-6 col-lg-3 wow zoomIn" data-wow-delay="0ms" data-wow-duration="1500ms">
					<div class="infoservice-item">
						<div class="infoservice-icon">
							<i class="fa '.esc_attr($electromix_repeater_icon).'"></i>
						</div>
						<div class="infoservice-content">
							<h6>'.esc_html($electromix_repeater_title).'</h6>
							<p>'.esc_html($electromix_repeater_text).'</p>
						</div>
					</div>
				</div>';
				} }
			 ?>
		</div>
	</div>
</section>
<?php endif; ?>