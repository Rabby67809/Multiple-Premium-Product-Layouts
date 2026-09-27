<?php
if (!defined('ABSPATH')) exit;

class MPPL_Shortcode {
    public function __construct(){
        add_shortcode('mppl_product_layout', [$this, 'render']);
    }

    public function render($atts){
        $atts = shortcode_atts(['id' => get_the_ID()], $atts);
        if (!MPPL_Requirements::woocommerce_active()) return '';

        $product = wc_get_product(absint($atts['id']));
        if (!$product) return '';

        ob_start();
        include MPPL_PATH . 'templates/product-layout.php';
        return ob_get_clean();
    }
}
