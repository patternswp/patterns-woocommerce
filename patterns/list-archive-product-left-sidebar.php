<?php
/**
 * Title: Archive Product with Left Sidebar
 * Slug: patterns-woocommerce/list-archive-product-left-sidebar
 * Template Types: archive-product, archive-pattern, archive-download,pattern-category, pattern-tag, pattern-plugin, pattern-block-type, pattern-template-type, pattern-post-type, download_category, download_tag
 * Description: Layout template for displaying a archives pattern with a left sidebar.
 *
 * @package    Patterns_Woocommerce
 * @subpackage Patterns_Woocommerce/patterns
 * @since      1.0.0
 */

?>
<!-- wp:template-part {"slug":"header-default","tagName":"header"} /-->

<!-- wp:group {"tagName":"main","metadata":{"name":"Main"},"align":"full","layout":{"type":"constrained"}} -->
<main class="wp-block-group alignfull">
	<!-- wp:template-part {"slug":"list-archive-header", "align":"full"} /-->

	<!-- wp:columns {"align":"wide","style":{"spacing":{"padding":{"top":"var:preset|spacing|80","bottom":"var:preset|spacing|80"},"blockGap":{"left":"var:preset|spacing|40"}}}} -->
    <div class="wp-block-columns alignwide"
    style="padding-top:var(--wp--preset--spacing--80);padding-bottom:var(--wp--preset--spacing--80)">

		<!-- wp:column {"width":"30%"} -->
		<div class="wp-block-column" style="flex-basis:30%">
			<!-- wp:template-part {"slug":"primary-product-sidebar"} /-->
		</div>
		<!-- /wp:column -->

		<!-- wp:column {"width":"70%"} -->
		<div class="wp-block-column" style="flex-basis:70%">

                <!-- wp:woocommerce/store-notices /-->

                <!-- wp:group {"className":"alignwide","style":{"spacing":{"padding":{"top":"var:preset|spacing|20","bottom":"var:preset|spacing|20","left":"var:preset|spacing|20","right":"var:preset|spacing|20"}}},"backgroundColor":"quinary","layout":{"type":"flex","flexWrap":"nowrap","justifyContent":"space-between"}} -->
                <div class="wp-block-group alignwide has-quinary-background-color has-background" style="padding-top:var(--wp--preset--spacing--20);padding-right:var(--wp--preset--spacing--20);padding-bottom:var(--wp--preset--spacing--20);padding-left:var(--wp--preset--spacing--20)"><!-- wp:woocommerce/product-results-count /-->

                <!-- wp:woocommerce/catalog-sorting /--></div>
                <!-- /wp:group -->


				<!-- wp:group {"align":"wide","style":{"spacing":{"blockGap":""left":"var:preset|spacing|60"}},"layout":{"type":"constrained","contentSize":"1320px"}} -->
				<div class="wp-block-group alignwide">

					<!-- wp:pattern {"slug":"patterns-woocommerce/query-product-three-column-grid"} /-->

				</div>
				<!-- /wp:group -->

		</div>
		<!-- /wp:column -->
	</div>
	<!-- /wp:columns -->
</main>
<!-- /wp:group -->

<!-- wp:template-part {"slug":"footer","tagName":"footer"} /-->
