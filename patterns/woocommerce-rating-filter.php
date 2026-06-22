<?php
/**
 * Title: Rating Filter
 * Slug: patterns-woocommerce/woocommerce-rating-filter
 * Categories: posts, WooCommerce
 * Description:   Display an active rating filter for WooCommerce products—typically placed in sidebars to help users filter items based on customer review ratings.
 *
 * @package    Patterns_Woocommerce
 * @subpackage Patterns_Woocommerce/patterns
 * @since      1.0.0
 */

?>
<!-- wp:woocommerce/filter-wrapper {"filterType":"rating-filter"} -->
<div class="wp-block-woocommerce-filter-wrapper"><!-- wp:heading {"level":6} -->
<h6 class="wp-block-heading"><?php echo esc_html__( 'Filter by rating', 'patterns-woocommerce' ); ?></h6>
<!-- /wp:heading -->

<!-- wp:woocommerce/rating-filter {"showCounts":true,"lock":{"remove":true}} -->
<div class="wp-block-woocommerce-rating-filter is-loading"></div>
<!-- /wp:woocommerce/rating-filter --></div>
<!-- /wp:woocommerce/filter-wrapper -->
