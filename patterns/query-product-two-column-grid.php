<?php
/**
 * Title: Query Product Two Column Grid
 * Slug: patterns-woocommerce/query-product-two-column-grid
 * Categories: posts, query
 * Block Types: core/query
 * Description: Display a query block in a grid layout.
 *
 * @package    Patterns_Woocommerce
 * @subpackage Patterns_Woocommerce/patterns
 * @since      1.0.0
 */

?>
<!-- wp:query {"query":{"perPage":"9","pages":0,"offset":0,"postType":"product","order":"asc","orderBy":"title","author":"","search":"","exclude":[],"sticky":"","inherit":false,"__woocommerceAttributes":[],"__woocommerceStockStatus":["instock","outofstock","onbackorder"]},"namespace":"woocommerce/product-query","align":"wide"} -->
	<div class="wp-block-query alignwide">
		<!-- wp:post-template {"align":"full","layout":{"type":"grid","columnCount":2}} -->
			<!-- wp:pattern {"slug":"patterns-woocommerce/hidden-query-product-post-template-content"} /-->
		<!-- /wp:post-template -->

		<?php
			// Need to include from PHP since wp:pattern not working
			// <!-- wp:pattern {"slug":"patterns-woocommerce/hidden-query-product-footer"} /--> .
			require 'hidden-query-product-footer.php';
		?>
	</div>
<!-- /wp:query -->
