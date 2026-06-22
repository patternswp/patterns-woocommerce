<?php
/**
 * Title: Page checkout
 * Slug: patterns-woocommerce/page-checkout
 * Categories: page, WooCommerce,checkout
 * Keywords: Page
 * Post Types: page
 * Description: A layout that displays checkout page.
 *
 * @package    Patterns_Woocommerce
 * @subpackage Patterns_Woocommerce/patterns
 * @since      1.0.0
 */

?>
<!-- wp:woocommerce/page-content-wrapper {"page":"checkout"} -->

<!-- wp:spacer {"height":"var:preset|spacing|40"} -->
<div style="height:var(--wp--preset--spacing--40)" aria-hidden="true" class="wp-block-spacer"></div>
<!-- /wp:spacer -->

<!-- wp:woocommerce/store-notices /-->

<!-- wp:spacer {"height":"var:preset|spacing|40"} -->
<div style="height:var(--wp--preset--spacing--40)" aria-hidden="true" class="wp-block-spacer"></div>
<!-- /wp:spacer -->

<!-- wp:pattern {"slug":"patterns-woocommerce/content-checkout"} /-->

<!-- /wp:woocommerce/page-content-wrapper -->
