<?php
/*
 * Title: Product Search Result
 * Slug: patterns-woocommerce/product-search-results
 * Categories: error
 * Keywords: Product Search Result
 * Inserter: no
 */

?>
<!-- wp:template-part {"slug":"header-default","tagName":"header"} /-->

<!-- wp:group {"tagName":"main","metadata":{"name":"Main"},"align":"full","layout":{"type":"constrained"}} -->
<main class="wp-block-group alignfull">

<!-- wp:cover {"url":"<?php echo esc_url( get_template_directory_uri() ); ?>/assets/img/img-2.jpg","hasParallax":true,"dimRatio":80,"overlayColor":"base","isUserOverlayColor":true,"align":"full","style":{"color":{"duotone":"unset"},"spacing":{"padding":{"right":"var:preset|spacing|30","left":"var:preset|spacing|30"}}},"layout":{"type":"constrained"}} -->
<div class="wp-block-cover alignfull has-parallax" style="padding-right:var(--wp--preset--spacing--30);padding-left:var(--wp--preset--spacing--30)">
    <div class="wp-block-cover__image-background has-parallax" style="background-position:50% 50%;background-image:url(<?php echo esc_url( get_template_directory_uri() ); ?>/assets/img/img-2.jpg)"></div>
    <span aria-hidden="true" class="wp-block-cover__background has-base-background-color has-background-dim-80 has-background-dim"></span>
    <div class="wp-block-cover__inner-container">

             <!-- wp:group {"align":"wide","layout":{"type":"default"}} -->
            <div class="wp-block-group alignwide">

                <!-- wp:query-title {"type":"search","textAlign":"left","level":1,"style":{"typography":{"textTransform":"capitalize"}},"textColor":"default","fontSize":"xx-large"} /-->

             </div>
            <!-- /wp:group -->
		</div>
	</div>
<!-- /wp:cover -->


<!-- wp:group {"align":"wide","style":{"spacing":{"padding":{"top":"var:preset|spacing|80","bottom":"var:preset|spacing|80"}}},"layout":{"inherit":true,"type":"constrained"}} -->
<div class="wp-block-group alignwide" style="padding-top:var(--wp--preset--spacing--80);padding-bottom:var(--wp--preset--spacing--80)">

<!-- wp:woocommerce/store-notices /-->

<!-- wp:group {"align":"wide","layout":{"type":"flex","flexWrap":"nowrap","justifyContent":"left"}} -->
<div class="wp-block-group alignwide"><!-- wp:woocommerce/product-results-count /--></div>
<!-- /wp:group -->


<!-- wp:query {"query":{"pages":0,"offset":0,"postType":"product","order":"asc","orderBy":"title","author":"","search":"","exclude":[],"sticky":"","inherit":false,"__woocommerceAttributes":[],"__woocommerceStockStatus":[],"perPage":10},"namespace":"woocommerce/product-query","align":"wide"} -->
	<div class="wp-block-query alignwide">
		<!-- wp:post-template {"align":"full","layout":{"type":"grid","columnCount":4}} -->
			<!-- wp:pattern {"slug":"patterns-woocommerce/hidden-query-product-post-template-content"} /-->
		<!-- /wp:post-template -->

		<?php
			// Need to include from PHP since wp:pattern not working
			// <!-- wp:pattern {"slug":"patterns-woocommerce/hidden-query-product-footer"} /--> .
			require 'hidden-query-product-footer.php';
		?>
	</div>
<!-- /wp:query -->

</div>
<!-- /wp:group -->



</main>
<!-- /wp:group -->

<!-- wp:template-part {"slug":"footer","tagName":"footer"} /-->
