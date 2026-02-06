<?php
	if ( ! defined( 'ABSPATH' ) ) exit;
	$ecommerce_companion_theme = wp_get_theme();
	$ecommerce_companion_name = strtolower(str_replace(' ', '-', $ecommerce_companion_theme));
	if($ecommerce_companion_name != 'cc') {
		$electromix_logo_url = ECOMMERCE_COMP_PLUGIN_URL .'inc/themes/'.$ecommerce_companion_name.'/assets/images/footer-logo.png';
	} else {
		$electromix_logo_url = ECOMMERCE_COMP_PLUGIN_URL .'inc/themes/'.$ecommerce_companion_name.'/assets/images/logo.png';
	}
	
$ecommerce_companion_blocks = array(
    '<!-- wp:html -->
	<div class="logo mb-3">
		<a href="javascript:void(0);"><img decoding="async" src="'.$electromix_logo_url.'" alt="image"></a>
	</div>
	<div class="textwidget">
		<p>It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout. The point of using Lorem Ipsum is that it has a more-or-less normal distribution of letters, as opposed to using \'Content here, content here\', making it look like readable English.</p>
	</div>
	<!-- wp:html /-->', // Correspond to block-1
    '<!-- wp:group -->
		<div class="wp-block-group">
		<!-- wp:heading --><h2 class="wp-block-heading">Company</h2><!-- /wp:heading -->
		<!-- wp:html -->
			<ul class="wp-block-page-list">
				<li class="wp-block-pages-list__item"><a class="wp-block-pages-list__item__link" href="#">About</a></li>
				<li class="wp-block-pages-list__item"><a class="wp-block-pages-list__item__link" href="#">Account</a></li>
				<li class="wp-block-pages-list__item"><a class="wp-block-pages-list__item__link" href="#">Career</a></li>
				<li class="wp-block-pages-list__item"><a class="wp-block-pages-list__item__link" href="#">Privacy Policy</a></li>
				<li class="wp-block-pages-list__item"><a class="wp-block-pages-list__item__link" href="#">Terms &amp; Conditions</a></li>
			</ul>
		<!-- /wp:html -->
		</div>
	<!-- /wp:group -->', // Correspond to block-2
	'<!-- wp:group -->
		<div class="wp-block-group">
		<!-- wp:heading --><h2 class="wp-block-heading">Account</h2><!-- /wp:heading -->
		<!-- wp:html -->
			<ul class="wp-block-page-list">
				<li class="wp-block-pages-list__item"><a class="wp-block-pages-list__item__link" href="#">Help Ticket</a></li>
				<li class="wp-block-pages-list__item"><a class="wp-block-pages-list__item__link" href="#">Track My Order</a></li>
				<li class="wp-block-pages-list__item"><a class="wp-block-pages-list__item__link" href="#">View Cart</a></li>
				<li class="wp-block-pages-list__item"><a class="wp-block-pages-list__item__link" href="#">Wishlist</a></li>
			</ul>
		<!-- /wp:html -->
		</div>
	<!-- /wp:group -->',
	'<!-- wp:group -->
		<div class="wp-block-group">
		<!-- wp:heading --><h2 class="wp-block-heading">Install Apps</h2><!-- /wp:heading -->
		<!-- wp:html -->
			<div class="textwidget ">
				<p class="mb-0">Download App on Mobile :</p>
				<span class="secondary-color2">15% Discount</span>
			</div>
			<div class="brand mt-3 d-flex gap-2">
				<a href="javascript:void(0);"><img decoding="async" src="'.ECOMMERCE_COMP_PLUGIN_URL .'inc/themes/mega-mart/assets/images/footer/playstore.png" alt="image"></a>
				<a href="javascript:void(0);"><img decoding="async" src="'.ECOMMERCE_COMP_PLUGIN_URL .'inc/themes/mega-mart/assets/images/footer/appstore.png" alt="image"></a>
			</div>
		<!-- /wp:html -->
		</div>
	<!-- /wp:group -->',
    '<!-- wp:search /-->', 
    '<!-- wp:group --><div class="wp-block-group"><!-- wp:heading --><h2 class="wp-block-heading">Categories</h2><!-- /wp:heading --><!-- wp:categories /--></div><!-- /wp:group -->', 
    '<!-- wp:group --><div class="wp-block-group"><!-- wp:heading --><h2 class="wp-block-heading">Latest Posts</h2><!-- /wp:heading --><!-- wp:latest-posts /--></div><!-- /wp:group -->', 
    '<!-- wp:group --><div class="wp-block-group"><!-- wp:heading --><h2 class="wp-block-heading">Calendar</h2><!-- /wp:heading --><!-- wp:calendar /--></div><!-- /wp:group -->', 
	'<!-- wp:social-links --><ul class="wp-block-social-links"><!-- wp:social-link {"url":"#","service":"facebook"} /--><!-- wp:social-link {"url":"#","service":"whatsapp"} /--><!-- wp:social-link {"url":"#","service":"instagram"} /--><!-- wp:social-link {"url":"#","service":"twitter"} /--><!-- wp:social-link {"url":"#","service":"linkedin"} /--></ul><!-- /wp:social-links -->',
	'<!-- wp:html --><ul class="payment_methods"><li><a href="#" aria-label="Visa Card Payment Button"><i class="fab fa-cc-visa"></i></a></li><li><a href="#" aria-label="Paypal Card Payment Button"><i class="fab fa-cc-paypal"></i></a></li><li><a href="#" aria-label="MasterCard Payment Button"><i class="fab fa-cc-mastercard"></i></a></li><li><a href="#" aria-label="Amex Card Payment Button"><i class="fab fa-cc-amex"></i></a></li><li> <a href="#" aria-label="Discover Card Payment Button"><i class="fab fa-cc-discover"></i></a></li><li><a href="#" aria-label="JCB Card Payment Button"><i class="fab fa-cc-jcb"></i></a></li></ul><!-- /wp:html -->',
);
$ecommerce_companion_activate = array(
		'electromix-footer-left' => array(
			'block-1'
        ),
		'electromix-footer-widget' => array(
			'block-2'
        ),
		'electromix-footer-widget-2' => array(
            'block-3'
        ),
		'electromix-footer-widget-3' => array(
            'block-4'
        ),
		'electromix-footer-widget-4' => array(
			'block-4'
        ),
        'electromix-sidebar-primary' => array(
            'block-5',
            'block-6',
            'block-7',
            'block-8',
        ),
        'electromix-footer-copy-1' => array(
            'block-10',
        ),
        'electromix-footer-copy-2' => array(
            'block-9'
        ),
    );
    	
	update_option('widget_block', array(
		1 => array('content' => $ecommerce_companion_blocks[0]), // 1 Represent block-1
		2 => array('content' => $ecommerce_companion_blocks[1]), //2 Represent block-2
		3 => array('content' => $ecommerce_companion_blocks[2]), 
		4 => array('content' => $ecommerce_companion_blocks[3]), 
		5 => array('content' => $ecommerce_companion_blocks[4]), 
		6 => array('content' => $ecommerce_companion_blocks[5]), 
		7 => array('content' => $ecommerce_companion_blocks[6]), 
		8 => array('content' => $ecommerce_companion_blocks[7]), 
		9 => array('content' => $ecommerce_companion_blocks[8]), 
		10 => array('content' => $ecommerce_companion_blocks[9]), 
	));
		
    update_option('sidebars_widgets',  $ecommerce_companion_activate);
	$ecommerce_companion_MediaId = get_option('electromix_media_id');
	set_theme_mod( 'custom_logo', $ecommerce_companion_MediaId[0] );
	
	
	set_theme_mod('hdr_account_ttl2', __('My Account','ecommerce-companion'));
	set_theme_mod('hdr_account_subttl2', __('Register/Login','ecommerce-companion'));
	set_theme_mod('hdr_right_cnt_ttl', __('Free Shipping','ecommerce-companion'));
	set_theme_mod('hdr_right_cnt_subttl', __('Order Over $100.00','ecommerce-companion'));
	set_theme_mod('footer_abv_wid_ttl', __('Download Apps:','ecommerce-companion'));
	set_theme_mod('footer_middle_wid_ttl', __('Featured:','ecommerce-companion'));
	set_theme_mod('footer_abv_wid2_ttl', __('Useful Links:','ecommerce-companion'));
	set_theme_mod('browse_cat_ttl', __('Browse Categories','ecommerce-companion'));
	set_theme_mod('hdr_contact_ttl', __('Contact','ecommerce-companion'));
	set_theme_mod('hdr_contact_subttl', __('+70 975 975 70','ecommerce-companion'));
	set_theme_mod('blog_ttl', __('Our Blogs','ecommerce-companion'));
	set_theme_mod('hdr_cart_ttl',__('MY CART','ecommerce-companion'));
	
	if($ecommerce_companion_theme  == 'Electromix' ) {
		set_theme_mod('most_phrase',__('Most Searched','ecommerce-companion'));
		set_theme_mod('selected_product_categories',__('Security Combo,Mouse,Printer','ecommerce-companion'));
	}
?>