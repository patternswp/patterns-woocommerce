<?php
/**
 * Title: Section Title 1
 * Slug: patterns-woocommerce/section-title-1
 * Categories: text, featured
 * Description: A layout featuring a title, content, and button group in centered alignment, commonly used for section titles in feature areas.
 *
 * @package    Patterns_Woocommerce
 * @subpackage Patterns_Woocommerce/patterns
 * @since      1.0.0
 */

?>
<!-- wp:group {"style":{"spacing":{"blockGap":"0"}},"layout":{"type":"constrained"}} -->
<div class="wp-block-group"><!-- wp:paragraph {"align":"center","textColor":"primary"} -->
<p class="has-text-align-center has-primary-color has-text-color"><?php esc_html_e( 'Top Sellers', 'patterns-woocommerce' ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:heading {"textAlign":"center","level":3} -->
<h3 class="wp-block-heading has-text-align-center"><?php esc_html_e( 'New Arrivals', 'patterns-woocommerce' ); ?></h3>
<!-- /wp:heading --></div>
<!-- /wp:group -->
