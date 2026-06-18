<?php
/**
 * Title: Stock Filter
 * Slug: patterns-woocommerce/woocommerce-stock-filter
 * Categories: posts, WooCommerce
 * Description:  Display an active stock filter for WooCommerce products—typically used in sidebars to let users filter items by availability (in stock or out of stock).
 *
 * @package    Patterns_Woocommerce
 * @subpackage Patterns_Woocommerce/patterns
 * @since      1.0.0
 */

?>
<!-- wp:woocommerce/filter-wrapper {"filterType":"stock-filter"} -->
<div class="wp-block-woocommerce-filter-wrapper"><!-- wp:heading {"level":6} -->
<h6 class="wp-block-heading"><?php echo esc_html__( 'Filter by stock status', 'patterns-woocommerce' ); ?></h6>
<!-- /wp:heading -->

<!-- wp:woocommerce/stock-filter {"showCounts":true,"heading":"","lock":{"remove":true}} -->
<div class="wp-block-woocommerce-stock-filter is-loading"></div>
<!-- /wp:woocommerce/stock-filter --></div>
<!-- /wp:woocommerce/filter-wrapper -->
