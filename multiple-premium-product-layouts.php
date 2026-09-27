<?php
/**
 * Plugin Name: Multiple Premium Product Layouts
 * Description: Premium WooCommerce product layout system with custom layouts and theme override support.
 * Version: 1.0.1
 * Author: Rabby67809
 * Text Domain: mp-product-layouts
 */

if (!defined('ABSPATH')) exit;

define('MPPL_VERSION', '1.0.1');
define('MPPL_PATH', plugin_dir_path(__FILE__));
define('MPPL_URL', plugin_dir_url(__FILE__));

require_once MPPL_PATH . 'includes/class-requirements.php';
require_once MPPL_PATH . 'includes/class-layout-loader.php';
require_once MPPL_PATH . 'includes/class-admin-settings.php';
require_once MPPL_PATH . 'includes/class-shortcode.php';
require_once MPPL_PATH . 'includes/class-assets.php';

add_action('plugins_loaded', function(){
    new MPPL_Requirements();
    new MPPL_Layout_Loader();
    new MPPL_Admin_Settings();
    new MPPL_Shortcode();
    new MPPL_Assets();
});
