<?php
if (!defined('ABSPATH')) exit;

class MPPL_Assets {
    public function __construct(){
        add_action('wp_enqueue_scripts', [$this, 'enqueue']);
    }

    public function enqueue(){
        if (is_product() || has_shortcode(get_post()->post_content ?? '', 'mppl_product_layout')) {
            wp_enqueue_style('mppl-style', MPPL_URL . 'assets/css/mppl.css', [], MPPL_VERSION);
            wp_enqueue_script('mppl-script', MPPL_URL . 'assets/js/mppl.js', ['jquery'], MPPL_VERSION, true);
        }
    }
}
