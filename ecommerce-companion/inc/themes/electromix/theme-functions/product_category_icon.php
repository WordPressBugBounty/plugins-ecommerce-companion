<?php
/**
 * Electromix Product Category Icon Meta
 */

// Add field to Add New Product Category page
add_action( 'product_cat_add_form_fields', 'electromix_product_taxonomy_add_new_meta_field', 10, 1 );
function electromix_product_taxonomy_add_new_meta_field() {
    ?>
    <div class="form-field">
        <label for="electromix_product_cat_icon"><?php esc_html_e( 'Icon', 'electromix' ); ?></label>
        <input type="text" name="electromix_product_cat_icon" id="electromix_product_cat_icon" value="">
        <p class="description"><?php esc_html_e( 'Example: fa-moon', 'electromix' ); ?></p>
        <?php wp_nonce_field( 'electromix_product_cat_icon_save', 'electromix_product_cat_icon_nonce' ); ?>
    </div>
    <?php
}

// Add field to Edit Product Category page
add_action( 'product_cat_edit_form_fields', 'electromix_product_taxonomy_edit_meta_field', 10, 1 );
function electromix_product_taxonomy_edit_meta_field( $term ) {
    $term_id = $term->term_id;
    $electromix_product_cat_icon = get_term_meta( $term_id, 'electromix_product_cat_icon', true );
    ?>
    <tr class="form-field">
        <th scope="row" valign="top">
            <label for="electromix_product_cat_icon"><?php esc_html_e( 'Icon', 'electromix' ); ?></label>
        </th>
        <td>
            <input type="text" name="electromix_product_cat_icon" id="electromix_product_cat_icon" value="<?php echo esc_attr( $electromix_product_cat_icon ); ?>">
            <p class="description"><?php esc_html_e( 'Example: fa-moon', 'electromix' ); ?></p>
            <?php wp_nonce_field( 'electromix_product_cat_icon_save', 'electromix_product_cat_icon_nonce' ); ?>
        </td>
    </tr>
    <?php
}

// Save taxonomy field when category is created or edited
add_action( 'create_product_cat', 'electromix_save_taxonomy_product_meta', 10, 1 );
add_action( 'edited_product_cat', 'electromix_save_taxonomy_product_meta', 10, 1 );
function electromix_save_taxonomy_product_meta( $term_id ) {

    // Capability check
    if ( ! current_user_can( 'manage_woocommerce' ) ) {
        return;
    }

    // Nonce verification
    if ( ! isset( $_POST['electromix_product_cat_icon_nonce'] ) || 
         ! wp_verify_nonce( $_POST['electromix_product_cat_icon_nonce'], 'electromix_product_cat_icon_save' ) ) {
        return;
    }

    // Sanitize and save input
    if ( isset( $_POST['electromix_product_cat_icon'] ) ) {
        $electromix_product_cat_icon = sanitize_text_field( wp_unslash( $_POST['electromix_product_cat_icon'] ) );
        update_term_meta( $term_id, 'electromix_product_cat_icon', $electromix_product_cat_icon );
    }
}