<?php
if (!defined('ABSPATH')) exit;

class MPPL_Layout_Loader {

    public function __construct(){
        add_filter('woocommerce_locate_template', [$this,'override_template'], 10, 3);
    }

    public function override_template($template, $template_name, $template_path){
        if($template_name === 'content-single-product.php'){
            $custom = MPPL_PATH . 'templates/content-single-product.php';
            if(file_exists($custom)){
                return $custom;
            }
        }
        return $template;
    }
}
