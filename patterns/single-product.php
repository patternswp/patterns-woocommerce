<?php
/**
 * Title: Single Product
 * Slug: patterns-woocommerce/single-product
 * Categories: single
* Description: Display a single WooCommerce product—commonly used to feature a specific item with its image, price, description, and purchase options.
 *
 * @package    Patterns_Woocommerce
 * @subpackage Patterns_Woocommerce/patterns
 * @since      1.0.0
 */

?>
<!-- wp:template-part {"slug":"header-default","tagName":"header"} /-->

<!-- wp:group {"tagName":"main","metadata":{"name":"Main"},"align":"full","className":"pwp-child-reset","layout":{"type":"constrained"}} -->
<main class="wp-block-group alignfull pwp-child-reset">

    <!-- wp:template-part {"slug":"single-header", "align":"full"} /-->

    <!-- wp:group {"align":"full","style":{"spacing":{"blockGap":"0","padding":{"top":"var:preset|spacing|80","bottom":"var:preset|spacing|80"}}},"layout":{"inherit":true,"type":"constrained"}} -->
    <div class="wp-block-group alignfull"
        style="padding-top:var(--wp--preset--spacing--80);padding-bottom:var(--wp--preset--spacing--80)">

        <!-- wp:group {"align":"full","layout":{"type":"constrained"}} -->
        <div class="wp-block-group alignfull">

            <!-- wp:woocommerce/store-notices /-->


            <!-- wp:group {"align":"full","style":{"spacing":{"blockGap":"0"}},"layout":{"type":"constrained"}} -->
            <div class="wp-block-group alignfull">

                <!-- wp:columns {"align":"wide","style":{"spacing":{"blockGap":{"left":"80px"}}}} -->
                <div class="wp-block-columns alignwide"><!-- wp:column {"width":"512px"} -->
                <div class="wp-block-column" style="flex-basis:512px"><!-- wp:woocommerce/product-image-gallery /--></div>
                <!-- /wp:column -->

                <!-- wp:column -->
                <div class="wp-block-column">

                <!-- wp:woocommerce/product-rating {"isDescendentOfSingleProductTemplate":true,"style":{"spacing":{"margin":{"bottom":"10px"}}}} /-->

                <!-- wp:post-title {"level":1,"style":{"spacing":{"margin":{"top":"0px","bottom":"0px"}}},"__woocommerceNamespace":"woocommerce/product-query/product-title"} /-->

                <!-- wp:woocommerce/product-price {"isDescendentOfSingleProductTemplate":true,"style":{"typography":{"fontSize":"20px"}}} /-->

                <!-- wp:post-excerpt {"style":{"spacing":{"margin":{"top":"20px","bottom":"20px"}}},"__woocommerceNamespace":"woocommerce/product-query/product-summary"} /-->

                <!-- wp:woocommerce/add-to-cart-form /-->

                <!-- wp:woocommerce/product-meta -->
                <div class="wp-block-woocommerce-product-meta"><!-- wp:group {"layout":{"type":"flex","flexWrap":"nowrap"}} -->
                <div class="wp-block-group"><!-- wp:woocommerce/product-sku {"isDescendentOfSingleProductTemplate":true} /-->

                <!-- wp:post-terms {"term":"product_cat","prefix":"Category: "} /-->

                <!-- wp:post-terms {"term":"product_tag","prefix":"Tags: "} /--></div>
                <!-- /wp:group --></div>
                <!-- /wp:woocommerce/product-meta --></div>
                <!-- /wp:column --></div>
                <!-- /wp:columns -->

            <!-- wp:spacer {"height":"var:preset|spacing|80"} -->
                <div style="height:var(--wp--preset--spacing--80)" aria-hidden="true" class="wp-block-spacer"></div>
                <!-- /wp:spacer -->

                <!-- wp:woocommerce/product-details {"align":"wide","className":"is-style-minimal"} /-->

                <!-- wp:spacer {"height":"var:preset|spacing|20"} -->
                <div style="height:var(--wp--preset--spacing--20)" aria-hidden="true" class="wp-block-spacer"></div>
                <!-- /wp:spacer -->

                <!-- wp:woocommerce/related-products {"align":"wide"} -->
                <div class="wp-block-woocommerce-related-products alignwide">

                <!-- wp:query {"query":{"perPage":"4","pages":"4","offset":0,"postType":"product","order":"asc","orderBy":"title","author":"","search":"","exclude":[],"sticky":"","inherit":false},"namespace":"woocommerce/related-products","lock":{"remove":true,"move":true}} -->
                <div class="wp-block-query">

                <!-- wp:group {"style":{"border":{"top":{"color":"var:preset|color|quinary","style":"solid","width":"1px"},"bottom":{"color":"var:preset|color|quinary","style":"solid","width":"1px"}},"spacing":{"padding":{"top":"var:preset|spacing|20","bottom":"var:preset|spacing|20"}}},"layout":{"type":"constrained"}} -->
                <div class="wp-block-group" style="border-top-color:var(--wp--preset--color--quinary);border-top-style:solid;border-top-width:1px;border-bottom-color:var(--wp--preset--color--quinary);border-bottom-style:solid;border-bottom-width:1px;padding-top:var(--wp--preset--spacing--20);padding-bottom:var(--wp--preset--spacing--20)"><!-- wp:heading {"level":5,"align":"full"} -->
                <h5 class="wp-block-heading alignfull"><?php echo esc_html__( 'Related products', 'patterns-woocommerce' ); ?></h5>
                <!-- /wp:heading --></div>
                <!-- /wp:group -->

                <!-- wp:spacer {"height":"var:preset|spacing|10"} -->
                <div style="height:var(--wp--preset--spacing--10)" aria-hidden="true" class="wp-block-spacer"></div>
                <!-- /wp:spacer -->

                <!-- wp:post-template {"className":"products-block-post-template","layout":{"type":"grid","columnCount":4},"__woocommerceNamespace":"woocommerce/product-query/product-template"} -->
                <!-- wp:pattern {"slug":"patterns-woocommerce/hidden-query-product-post-template-content"} /-->
                <!-- /wp:post-template --></div>
                <!-- /wp:query --></div>
                <!-- /wp:woocommerce/related-products -->

            </div>
            <!-- /wp:group -->

        </div>
        <!-- /wp:group -->

    </div>
    <!-- /wp:group -->

</main>
<!-- /wp:group -->

<!-- wp:template-part {"slug":"footer","tagName":"footer"} /-->
