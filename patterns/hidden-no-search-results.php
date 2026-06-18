<?php
/**
 * Title: No Search Result
 * Slug: patterns-woocommerce/hidden-no-search-results
 * Inserter: no
 *
 * @package    Patterns_Woocommerce
 * @subpackage Patterns_Woocommerce/patterns
 * @since      1.0.0
 */

?>
<!-- wp:paragraph -->
<p>
<?php esc_html_e( 'Sorry, but nothing matched your search terms. Please try again with some different keywords.', 'patterns-woocommerce' ); ?>
</p>
<!-- /wp:paragraph -->

<!-- wp:search {"label":"<?php echo esc_html_x( 'Search', 'label', 'patterns-woocommerce' ); ?>","placeholder":"<?php echo esc_attr_x( 'Search...', 'placeholder for search field', 'patterns-woocommerce' ); ?>","showLabel":false,"buttonText":"<?php esc_attr_e( 'Search', 'patterns-woocommerce' ); ?>","buttonUseIcon":true} /-->
