<?php
if (!defined('ABSPATH')) exit;

class MPPL_Requirements {
    public function __construct(){
        add_action('admin_notices', [$this, 'notice']);
    }

    public function notice(){
        if (!class_exists('WooCommerce')) {
            echo '<div class="notice notice-warning"><p>Multiple Premium Product Layouts requires WooCommerce to be active.</p></div>';
        }
    }

    public static function woocommerce_active(){
        return class_exists('WooCommerce');
    }
}
