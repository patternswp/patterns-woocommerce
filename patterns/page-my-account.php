<?php
/**
 * Title: Page My Account 
 * Slug: patterns-woocommerce/page-my-account
 * Categories: page, WooCommerce,account
 * Keywords: Page
 * Post Types: page
 * Description: A layout that displays account page.
 * 
 * @package    Patterns_Woocommerce
 * @subpackage Patterns_Woocommerce/patterns
 * @since      1.0.0
 */

?>
<!-- wp:group {"align":"full","style":{"spacing":{"padding":{"top":"var:preset|spacing|80","bottom":"var:preset|spacing|80"}}},"layout":{"type":"constrained"}} -->
<div class="wp-block-group alignfull" style="padding-top:var(--wp--preset--spacing--80);padding-bottom:var(--wp--preset--spacing--80)">

<!-- wp:shortcode -->
[woocommerce_my_account]
<!-- /wp:shortcode -->

</div>
<!-- /wp:group -->