<?php
/**
 * Custom Template for displaying product content within loops
 *
 * @package WooCommerce\Templates
 */

defined( 'ABSPATH' ) || exit;

global $product;
?>

<li <?php wc_product_class( 'custom-product-class', $product ); ?>>

    <a href="<?php the_permalink(); ?>" class="custom-product-link">

        <div class="custom-product-image">
            <?php
            /**
             * woocommerce_before_shop_loop_item_title hook.
             *
             * @hooked woocommerce_template_loop_product_thumbnail - 10
             */
            do_action( 'woocommerce_before_shop_loop_item_title' );
            ?>
        </div>

        <div class="custom-product-details">
            <h2 class="custom-product-title"><?php the_title(); ?></h2>
            
            <div class="custom-product-price">
                <?php
                /**
                 * woocommerce_after_shop_loop_item_title hook.
                 *
                 * @hooked woocommerce_template_loop_price - 10
                 */
                do_action( 'woocommerce_after_shop_loop_item_title' );
                ?>
            </div>

            <div class="custom-product-buttons">
                <?php
                /**
                 * woocommerce_after_shop_loop_item hook.
                 *
                 * @hooked woocommerce_template_loop_add_to_cart - 10
                 */
                do_action( 'woocommerce_after_shop_loop_item' );
                ?>
            </div>
        </div>

    </a>

</li>
