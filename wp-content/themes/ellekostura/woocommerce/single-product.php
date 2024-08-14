<?php
/**
 * Single Product Template
 *
 * This template can be overridden by copying it to yourtheme/woocommerce/single-product.php.
 *
 * @package WooCommerce\Templates
 * @version 3.5.0
 */

defined( 'ABSPATH' ) || exit;

get_header( 'shop' ); ?>

    <div id="primary" class="content-area">
        <main id="main" class="site-main">

            <?php
            /**
             * woocommerce_before_main_content hook.
             *
             * @hooked woocommerce_output_content_wrapper - 10 (outputs opening divs for the content)
             * @hooked woocommerce_breadcrumb - 20
             */
            do_action( 'woocommerce_before_main_content' );
            ?>

            <?php while ( have_posts() ) : the_post(); ?>

                <?php
                /**
                 * woocommerce_before_single_product hook.
                 *
                 * @hooked woocommerce_show_product_sale_flash - 10
                 * @hooked woocommerce_show_product_images - 20
                 */
                do_action( 'woocommerce_before_single_product' );
                ?>

                <div id="product-<?php the_ID(); ?>" <?php wc_product_class(); ?>>

                    <?php
                    /**
                     * woocommerce_single_product_summary hook.
                     *
                     * @hooked woocommerce_template_single_title - 5
                     * @hooked woocommerce_template_single_rating - 10
                     * @hooked woocommerce_template_single_price - 10
                     * @hooked woocommerce_template_single_excerpt - 20
                     * @hooked woocommerce_template_single_add_to_cart - 30
                     * @hooked woocommerce_template_single_meta - 40
                     * @hooked woocommerce_template_single_sharing - 50
                     */
                    do_action( 'woocommerce_single_product_summary' );
                    ?>

                    <?php
                    /**
                     * woocommerce_after_single_product_summary hook.
                     *
                     * @hooked woocommerce_output_product_data_tabs - 10
                     * @hooked woocommerce_upsell_display - 15
                     * @hooked woocommerce_output_related_products - 20
                     */
                    do_action( 'woocommerce_after_single_product_summary' );
                    ?>

                </div>

                <?php
                /**
                 * woocommerce_after_single_product hook.
                 *
                 * @hooked woocommerce_upsell_display - 10
                 * @hooked woocommerce_output_related_products - 20
                 */
                do_action( 'woocommerce_after_single_product' );
                ?>

            <?php endwhile; // end of the loop. ?>

            <?php
            do_action( 'woocommerce_after_main_content' );
            ?>

        </main><!-- #main -->
    </div><!-- #primary -->

<?php get_footer( 'shop' );
