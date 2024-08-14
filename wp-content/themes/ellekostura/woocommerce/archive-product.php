<?php
/**
 * Custom Template for displaying product archives
 *
 * @package WooCommerce\Templates
 */

defined( 'ABSPATH' ) || exit;

get_header( 'shop' ); ?>

    <div id="primary" class="content-area custom-product-archive">
        <main id="main" class="site-main">

            <?php
            do_action( 'woocommerce_before_main_content' );
            ?>

            <?php if ( have_posts() ) : ?>

                <?php
                do_action( 'woocommerce_before_shop_loop' );
                ?>

                <div class="row dress-shop-product-grid">
                    <?php while ( have_posts() ) : the_post(); ?>
                        <div class="dress-shop-product-item col s3 ">
                            <?php 
                            // Customize the product display here
                            ?>
                            <a href="<?php the_permalink(); ?>">
                                <?php the_post_thumbnail('medium'); ?>
                                <h2><?php the_title(); ?></h2>
                                <span class="price"><?php wc_get_template_part('loop/price'); ?></span>
                                <button class="custom-add-to-cart"><?php _e('Add to Cart', 'woocommerce'); ?></button>
                            </a>
                        </div>
                    <?php endwhile; ?>
                </div>

                <?php
                do_action( 'woocommerce_after_shop_loop' );
                ?>

            <?php else : ?>

                <p><?php _e('No products found', 'woocommerce'); ?></p>

            <?php endif; ?>

            <?php
            do_action( 'woocommerce_after_main_content' );
            ?>

        </main><!-- #main -->
    </div><!-- #primary -->

<?php get_footer( 'shop' );
