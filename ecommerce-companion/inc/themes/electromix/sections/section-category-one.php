<?php
if ( ! defined( 'ABSPATH' ) ) exit;
$electromix_cat_one_hs      = get_theme_mod( 'cat_one_hs', '1' );
$electromix_cat_one_ttl     = get_theme_mod( 'cat_one_ttl', __( 'All Category', 'ecommerce-companion' ) );
$electromix_hs_cat_one_tab  = get_theme_mod( 'hs_cat_one_tab', '1' );
$electromix_cat_one_icon    = get_theme_mod( 'cat_one_icon', 'fa-list-ul' );
$electromix_cat_one_date    = get_theme_mod( 'cat_one_date', '2030-12-31' );
$electromix_cat_one_time    = get_theme_mod( 'cat_one_time', '00:00' );
$electromix_cat_one_cat     = get_theme_mod( 'cat_one_cat', array() );

if ( '1' === $electromix_cat_one_hs && class_exists( 'WooCommerce' ) ) :

    // Get category IDs for optimization
    $electromix_cat_ids = array();
	
	if ( ! is_array( $electromix_cat_one_cat ) ) {
		$electromix_cat_one_cat = explode( ',', $electromix_cat_one_cat );
	}
	
    foreach ( $electromix_cat_one_cat as $electromix_slug ) {
        $electromix_term = get_term_by( 'slug', $electromix_slug, 'product_cat' );
        if ( $electromix_term && ! is_wp_error( $electromix_term ) ) {
            $electromix_cat_ids[] = $electromix_term->term_id;
        }
    }

    // Get only selected categories
    $electromix_categories = get_terms( array(
        'taxonomy'   => 'product_cat',
        'hide_empty' => true,
        'include'    => $electromix_cat_ids,
    ) );

    if ( ! empty( $electromix_categories ) && ! is_wp_error( $electromix_categories ) ) :
?>
<section id="category-one" class="category-section st-py-default filter-group">
    <div class="container">
        <div class="heading-default wow zoomIn">
            <div class="title-container">
                <div class="main-title">
                    <i class="fa <?php echo esc_attr( $electromix_cat_one_icon ); ?>" aria-hidden="true"></i>
                    <h2><?php echo wp_kses_post( $electromix_cat_one_ttl ); ?></h2>
                </div>
                <div data-timer="<?php echo esc_attr( $electromix_cat_one_date . ' ' . $electromix_cat_one_time ); ?>" id="dealsofdayCountDown" class="dealsofday-timer timer-container">
                    <?php
                    $electromix_labels = array( 'days' => 'DAY', 'hours' => 'HOUR', 'minutes' => 'MIN', 'seconds' => 'SEC' );
                    $electromix_values = array( 'days' => '05', 'hours' => '15', 'minutes' => '55', 'seconds' => '20' );

                    foreach ( $electromix_labels as $electromix_key => $electromix_label ) :
                    ?>
                    <div class="dealsofday-item">
                        <div class="dealsofday-count">
                            <h6 class="<?php echo esc_attr( $electromix_key ); ?>"><?php echo esc_html( $electromix_values[ $electromix_key ] ); ?></h6>
                        </div>
                        <p><?php echo esc_html( $electromix_label); ?></p>
                    </div>
                    <?php endforeach; ?>
                </div>
            </div>

            <?php if ( '1' === $electromix_hs_cat_one_tab ) : ?>
            <div class="filter-container w-50">
                <div class="tab-filter-slider owl-carousel" data-show-item="6">
                    <?php foreach ( $electromix_categories as $electromix_index => $electromix_cat ) : ?>
                        <a href="javascript:void(0);" data-filter="<?php echo esc_attr( $electromix_cat->slug ); ?>" class="<?php echo 0 === $electromix_index ? 'active' : ''; ?>" rel="nofollow">
                            <?php echo esc_html( $electromix_cat->name ); ?>
                        </a>
                    <?php endforeach; ?>
                </div>
            </div>
            <?php endif; ?>

        </div>

        <div class="category-wrapper row row-cols-lg-7 row-cols-sm-4 row-cols-md-5 row-cols-2">
            <?php foreach ( $electromix_categories as $electromix_cat ) :
                $electromix_cat_link     = get_term_link( $electromix_cat );
                $electromix_thumb_id     = get_term_meta( $electromix_cat->term_id, 'thumbnail_id', true );
                $electromix_thumb_url    = wp_get_attachment_url( $electromix_thumb_id );
                $electromix_product_count = $electromix_cat->count;
            ?>
            <div class="col mix <?php echo esc_attr( strtolower( str_replace( ' ', '-', $electromix_cat->name ) ) ); ?> show">
                <div class="categories-item" style="background-image: url(<?php echo esc_url( ECOMMERCE_COMP_PLUGIN_URL . 'inc/themes/electromix/assets/images/categories/bg_patter.png' ); ?>);">
                    <div class="categories-img">
                        <img src="<?php echo esc_url( $electromix_thumb_url ); ?>" alt="<?php echo esc_attr( $electromix_cat->name ); ?>">
                    </div>
                    <div class="categories-content">
                        <a href="<?php echo esc_url( $electromix_cat_link ); ?>" class="title"><?php echo esc_html( $electromix_cat->name ); ?></a>
                        <span class="count-badge"><?php echo esc_html( $electromix_product_count ); ?></span>
                    </div>
                </div>
            </div>
            <?php endforeach; ?>
        </div>
    </div>
</section>
<?php
endif; endif;