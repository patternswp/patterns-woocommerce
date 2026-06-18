<?php
/**
 * Title: Price Filter
 * Slug: patterns-woocommerce/woocommerce-price-filter
 * Categories: posts, WooCommerce
 * Description:  Display an active price filter for WooCommerce products—commonly placed in sidebars to help users refine results by selected price range.
 *
 * @package    Patterns_Woocommerce
 * @subpackage Patterns_Woocommerce/patterns
 * @since      1.0.0
 */

?>
<!-- wp:woocommerce/filter-wrapper {"filterType":"price-filter"} -->
<div class="wp-block-woocommerce-filter-wrapper"><!-- wp:heading {"level":6} -->
<h6 class="wp-block-heading"><?php echo esc_html__( 'Filter by price', 'patterns-woocommerce' ); ?></h6>
<!-- /wp:heading -->

<!-- wp:woocommerce/price-filter {"heading":"","lock":{"remove":true}} -->
<div class="wp-block-woocommerce-price-filter is-loading"><span aria-hidden="true" class="wc-block-product-categories__placeholder"></span></div>
<!-- /wp:woocommerce/price-filter --></div>
<!-- /wp:woocommerce/filter-wrapper -->
