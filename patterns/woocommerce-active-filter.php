<?php
/**
 * Title: Active Filter
 * Slug: patterns-woocommerce/woocommerce-active-filter
 * Categories: posts, WooCommerce
 * Description:  Display active WooCommerce filter applied by users—commonly placed in sidebars to enhance product browsing and filtering experience.
 *
 * @package    Patterns_Woocommerce
 * @subpackage Patterns_Woocommerce/patterns
 * @since      1.0.0
 */

?>
<!-- wp:woocommerce/filter-wrapper {"filterType":"active-filters"} -->
<div class="wp-block-woocommerce-filter-wrapper"><!-- wp:heading {"level":6} -->
<h6 class="wp-block-heading"><?php echo esc_html__( 'Active filters', 'patterns-woocommerce' ); ?></h6>
<!-- /wp:heading -->

<!-- wp:woocommerce/active-filters {"heading":"","lock":{"remove":true}} -->
<div class="wp-block-woocommerce-active-filters is-loading"><span aria-hidden="true" class="wc-block-active-filters__placeholder"></span></div>
<!-- /wp:woocommerce/active-filters -->

</div>
<!-- /wp:woocommerce/filter-wrapper -->
