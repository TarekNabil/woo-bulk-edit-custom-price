<?php
/**
 * Plugin Name:     Woo Bulk Edit Custom Price
 * Plugin URI:      TarekNabil.net
 * Description:     Control products prices in bulk. specially custom prices that was added by addons.
 * Author:          Tarek Nabil
 * Author URI:      TarekNabil.net
 * Text Domain:     woo-bulk-edit-custom-price
 * Domain Path:     /languages
 * Version:         0.1.0
 *
 * @package         Woo_Bulk_Edit_Custom_Price
 */

// Your code starts here.
if ( ! defined( 'ABSPATH' ) ) {
    exit; // Exit if accessed directly.
}
// Add a new menu item under the WooCommerce menu for "Bulk Edit Prices"
add_action( 'admin_menu', 'woo_bulk_edit_custom_price_menu' );

function woo_bulk_edit_custom_price_menu() {
    add_submenu_page(
        'woocommerce', // Parent slug
        __( 'Bulk Edit Prices', 'woo-bulk-edit-custom-price' ), // Page title
        __( 'Bulk Edit Prices', 'woo-bulk-edit-custom-price' ), // Menu title
        'manage_woocommerce', // Capability
        'woo-bulk-edit-prices', // Menu slug
        'woo_bulk_edit_custom_price_page' // Callback function
    );
}

function woo_bulk_edit_custom_price_page() {
    ?>
    <div class="wrap">
        <h1><?php esc_html_e( 'Bulk Edit Prices', 'woo-bulk-edit-custom-price' ); ?></h1>
        <p><?php esc_html_e( 'This is where you can bulk edit product prices.', 'woo-bulk-edit-custom-price' ); ?></p>
    </div>
    <?php
}