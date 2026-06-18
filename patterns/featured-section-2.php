<?php
/**
 * Title: Featured Section 2
 * Slug: patterns-woocommerce/featured-section-2
 * Categories: posts, query, WooCommerce, featured
 * Description: A collection of various WordPress inbuilt blocks, such as headings, paragraphs, image, groups, and buttons, arranged in different positions to form a complete page layout.
 *
 * @package    Patterns_Woocommerce
 * @subpackage Patterns_Woocommerce/patterns
 * @since      1.0.0
 */

?>
<!-- wp:group {"align":"full","style":{"spacing":{"padding":{"top":"var:preset|spacing|80","bottom":"var:preset|spacing|80"},"blockGap":"var:preset|spacing|60"}},"backgroundColor":"quaternary","layout":{"type":"constrained"}} -->
<div class="wp-block-group alignfull has-quaternary-background-color has-background" style="padding-top:var(--wp--preset--spacing--80);padding-bottom:var(--wp--preset--spacing--80)">
    
<!-- wp:pattern {"slug":"patterns-woocommerce/section-title-1"} /-->

<!-- wp:query {"query":{"postType":"product","inherit":false,"perPage":8},"align":"wide","layout":{"type":"constrained"}} -->
<div class="wp-block-query alignwide">
    <!-- wp:post-template {"align":"full","layout":{"type":"grid","columnCount":4}} -->
    <!-- wp:pattern {"slug":"patterns-woocommerce/hidden-query-product-post-template-content"} /-->
    <!-- /wp:post-template -->
</div>
<!-- /wp:query -->


</div>
<!-- /wp:group -->