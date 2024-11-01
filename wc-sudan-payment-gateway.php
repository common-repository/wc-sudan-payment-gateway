<?php

/**
 * Plugin Name: Sudan Payment Gateway for WooCommerce
 * Plugin URI: https://github.com/AminOmer/WC-Sudan-Payment-Gateway
 * Description: Sudan Payment Gateway for WooCommerce is a payment plugin that enables customers to make payments through Sudan's Bank of Khartoum application or other sudanese banks applications. Customers can upload a copy of the bank receipt with the transfer number to the checkout page, which will then be placed in a "processing" status until it is reviewed and completed by site admins. This plugin is easy to install and configure, and it provides a convenient payment solution for Sudanese businesses using WooCommerce.
 * Version: 1.2.2
 * Requires at least: 5.5
 * Requires PHP: 7.0
 * Author: Amin Omer
 * Author URI: https://AminOmer.com/
 * License: GPL v3 or later
 * License URI: https://www.gnu.org/licenses/gpl-3.0.html
 * Text Domain:  wc-sudan-gateway
 */

defined('ABSPATH') or exit;

// Define "Sudan Payment Gateway" plguin dir
if (!defined('SUPG_PLUGIN_DIR')) {
    define('SUPG_PLUGIN_DIR', dirname(__FILE__));
}

// Define "Sudan Payment Gateway" plguin url
if (!defined('SUPG_PLUGIN_URL')) {
    define('SUPG_PLUGIN_URL', plugin_dir_url(__FILE__));
}

// Make sure WooCommerce is active.
if (!in_array('woocommerce/woocommerce.php', apply_filters('active_plugins', get_option('active_plugins')))) {
    return;
}


// load "Sudan Payment Gateway" plugin
if (!function_exists('supg_plugin_init')) {
    function supg_plugin_init()
    {
        require_once(SUPG_PLUGIN_DIR . '/includes/class-plugin-core.php');
        load_plugin_textdomain( 'wc-sudan-gateway', false, dirname( plugin_basename( __FILE__ ) ) . '/languages/' );
    }
}
add_action('plugins_loaded', 'supg_plugin_init', 11);