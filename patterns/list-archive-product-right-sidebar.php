<?php
/**
 * Title: Archive Product with Right Sidebar
 * Slug: patterns-woocommerce/list-archive-product-right-sidebar
 * Template Types: archive-pattern, archive-download,pattern-category, pattern-tag, pattern-plugin, pattern-block-type, pattern-template-type, pattern-post-type, download_category, download_tag
 * Description: Layout template for displaying archives pattern with a right sidebar.
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

		<!-- wp:column {"width":"70%"} -->
		<div class="wp-block-column" style="flex-basis:70%">

				<!-- wp:group {"align":"wide","style":{"spacing":{"blockGap":""left":"var:preset|spacing|60"}},"layout":{"type":"constrained","contentSize":"1320px"}} -->
				<div class="wp-block-group alignwide">


					<!-- wp:pattern {"slug":"patterns-woocommerce/query-product-three-column-grid"} /-->

				</div>
				<!-- /wp:group -->

		</div>
		<!-- /wp:column -->

		<!-- wp:column {"width":"30%"} -->
		<div class="wp-block-column" style="flex-basis:30%">
			<!-- wp:template-part {"slug":"primary-product-sidebar"} /-->
		</div>
		<!-- /wp:column -->
	</div>
	<!-- /wp:columns -->
</main>
<!-- /wp:group -->

<!-- wp:template-part {"slug":"footer","tagName":"footer"} /-->
