<?php
/**
 * Title: Attribute Filter
 * Slug: patterns-woocommerce/woocommerce-attribute-filter
 * Categories: posts, WooCommerce
 * Description: Display an active attribute filter for WooCommerce products—commonly used in sidebars to show and refine selections based on product attributes like color, size, or brand.
 *
 * @package    Patterns_Woocommerce
 * @subpackage Patterns_Woocommerce/patterns
 * @since      1.0.0
 */

?>
<!-- wp:woocommerce/filter-wrapper {"filterType":"attribute-filter"} -->
<div class="wp-block-woocommerce-filter-wrapper"><!-- wp:heading {"level":6} -->
<h6 class="wp-block-heading"><?php echo esc_html__( 'Filter by attribute', 'patterns-woocommerce' ); ?></h6>
<!-- /wp:heading -->

<!-- wp:woocommerce/attribute-filter {"attributeId":1,"showCounts":true,"heading":"","lock":{"remove":true}} -->
<div class="wp-block-woocommerce-attribute-filter is-loading"></div>
<!-- /wp:woocommerce/attribute-filter --></div>
<!-- /wp:woocommerce/filter-wrapper -->
