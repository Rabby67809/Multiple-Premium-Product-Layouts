<?php if (!defined('ABSPATH')) exit; ?>
<div class="mppl-product-layout">
    <h2><?php echo esc_html($product->get_name()); ?></h2>
    <div class="mppl-price"><?php echo wp_kses_post($product->get_price_html()); ?></div>
    <div class="mppl-content"><?php echo wp_kses_post($product->get_description()); ?></div>
</div>
