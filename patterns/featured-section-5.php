<?php
/**
 * Title: Featured Section 5
 * Slug: patterns-woocommerce/featured-section-5
 * Categories: posts, query, WooCommerce, featured
 * Description: A collection of various WordPress inbuilt blocks, such as headings, paragraphs, image, groups, and buttons, arranged in different positions to form a complete page layout.
 *
 * @package    Patterns_Woocommerce
 * @subpackage Patterns_Woocommerce/patterns
 * @since      1.0.0
 */

?>
<!-- wp:group {"metadata":{},"align":"full","style":{"spacing":{"padding":{"top":"var:preset|spacing|80","bottom":"var:preset|spacing|80"},"blockGap":"var:preset|spacing|60"}},"layout":{"type":"constrained"}} -->
<div class="wp-block-group alignfull" style="padding-top:var(--wp--preset--spacing--80);padding-bottom:var(--wp--preset--spacing--80)">
    
<!-- wp:group {"style":{"spacing":{"blockGap":"0"}},"layout":{"type":"constrained"}} -->
<div class="wp-block-group"><!-- wp:paragraph {"align":"center","textColor":"primary"} -->
<p class="has-text-align-center has-primary-color has-text-color"><?php esc_html_e( 'Top Sellers', 'patterns-woocommerce' ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:heading {"textAlign":"center","level":3} -->
<h3 class="wp-block-heading has-text-align-center"><?php esc_html_e( 'Top Categories This Week', 'patterns-woocommerce' ); ?></h3>
<!-- /wp:heading --></div>
<!-- /wp:group -->

<!-- wp:columns {"align":"wide","style":{"spacing":{"blockGap":{"top":"var:preset|spacing|40","left":"var:preset|spacing|40"}}}} -->
<div class="wp-block-columns alignwide">
    

        <!-- wp:column {"width":"25%"} -->
        <div class="wp-block-column" style="flex-basis:25%"><!-- wp:group {"style":{"border":{"style":"solid","width":"1px"},"spacing":{"padding":{"top":"var:preset|spacing|30","bottom":"var:preset|spacing|30","left":"var:preset|spacing|30","right":"var:preset|spacing|30"}}},"borderColor":"quinary","layout":{"type":"constrained"}} -->
        <div class="wp-block-group has-border-color has-quinary-border-color" style="border-style:solid;border-width:1px;padding-top:var(--wp--preset--spacing--30);padding-right:var(--wp--preset--spacing--30);padding-bottom:var(--wp--preset--spacing--30);padding-left:var(--wp--preset--spacing--30)"><!-- wp:woocommerce/product-categories {"isHierarchical":false,"style":{"elements":{"link":{"color":{"text":"var:preset|color|base"},":hover":{"color":{"text":"var:preset|color|primary"}}}},"typography":{"lineHeight":"2"}},"fontSize":"small"} /--></div>
        <!-- /wp:group -->

        <!-- wp:cover {"url":"<?php echo esc_url( get_template_directory_uri() ); ?>/assets/img/img-6.jpg","dimRatio":50,"overlayColor":"base","isUserOverlayColor":true,"contentPosition":"bottom center","style":{"spacing":{"padding":{"right":"var:preset|spacing|30","left":"var:preset|spacing|30","top":"var:preset|spacing|30","bottom":"var:preset|spacing|30"}}},"layout":{"type":"constrained"}} -->
        <div class="wp-block-cover has-custom-content-position is-position-bottom-center" style="padding-top:var(--wp--preset--spacing--30);padding-right:var(--wp--preset--spacing--30);padding-bottom:var(--wp--preset--spacing--30);padding-left:var(--wp--preset--spacing--30)"><img class="wp-block-cover__image-background" src="<?php echo esc_url( get_template_directory_uri() ); ?>/assets/img/img-6.jpg" data-object-fit="cover"/><span aria-hidden="true" class="wp-block-cover__background has-base-background-color has-background-dim"></span><div class="wp-block-cover__inner-container">
            
        
        <!-- wp:group {"style":{"spacing":{"blockGap":"var:preset|spacing|20"}},"layout":{"type":"default"}} -->
        <div class="wp-block-group"><!-- wp:group {"style":{"spacing":{"blockGap":"0"}},"layout":{"type":"constrained"}} -->
        <div class="wp-block-group"><!-- wp:heading {"level":5} -->
        <h5 class="wp-block-heading"><?php esc_html_e( 'Accessories', 'patterns-woocommerce' ); ?></h5>
        <!-- /wp:heading -->

        <!-- wp:paragraph -->
        <p><?php esc_html_e( '*Starts from $29.99', 'patterns-woocommerce' ); ?></p>
        <!-- /wp:paragraph --></div>
        <!-- /wp:group -->

        <!-- wp:buttons -->
        <div class="wp-block-buttons"><!-- wp:button {"className":"is-style-outline"} -->
        <div class="wp-block-button is-style-outline"><a class="wp-block-button__link wp-element-button"><?php esc_html_e( 'Shop Now', 'patterns-woocommerce' ); ?></a></div>
        <!-- /wp:button --></div>
        <!-- /wp:buttons --></div>
        <!-- /wp:group -->


        </div></div>
        <!-- /wp:cover --></div>
        <!-- /wp:column -->

        <!-- wp:column {"width":"75%"} -->
        <div class="wp-block-column" style="flex-basis:75%">
            
        <!-- wp:query {"queryId":17,"query":{"inherit":false,"postType":"product","perPage":6,"sticky":"","parents":[],"format":[],"offset":0},"metadata":{"categories":["posts"],"patternName":"patterns-woocommerce/query-product-grid","name":"Query Product Grid"},"align":"wide","layout":{"type":"constrained"}} -->
        <div class="wp-block-query alignwide">
            
        <!-- wp:post-template {"align":"full","layout":{"type":"grid","columnCount":3}} -->
            <!-- wp:pattern {"slug":"patterns-woocommerce/hidden-query-product-post-template-content"} /-->
    
        <!-- /wp:post-template -->

        </div>
        <!-- /wp:query -->
        
        </div>
        <!-- /wp:column -->
</div>
<!-- /wp:columns -->

</div>
<!-- /wp:group -->