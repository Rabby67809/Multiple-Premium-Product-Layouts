<?php
if (!defined('ABSPATH')) exit;

class MPPL_Admin_Settings {

    public function __construct(){
        add_action('admin_menu', [$this,'menu']);
    }

    public function menu(){
        add_menu_page(
            'Product Layout Studio',
            'Product Layout Studio',
            'manage_options',
            'mppl-settings',
            [$this,'page'],
            'dashicons-layout'
        );
    }

    public function page(){
        echo '<div class="wrap"><h1>Product Layout Studio</h1><p>Select premium WooCommerce layouts here.</p></div>';
    }
}
