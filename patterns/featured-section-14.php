<?php
/**
 * Title: Featured Section 14
 * Slug: patterns-woocommerce/featured-section-14
 * Categories: contact, featured
 * Description: A collection of various WordPress inbuilt blocks, such as headings, paragraphs, image, groups, and buttons, arranged in different positions to form a complete page layout.
 *
 * @package    Patterns_Woocommerce
 * @subpackage Patterns_Woocommerce/patterns
 * @since      1.0.0
 */

?>
<!-- wp:group {"align":"full","style":{"spacing":{"padding":{"top":"var:preset|spacing|80","bottom":"var:preset|spacing|80"}}},"layout":{"type":"constrained"}} -->
<div class="wp-block-group alignfull" style="padding-top:var(--wp--preset--spacing--80);padding-bottom:var(--wp--preset--spacing--80)"><!-- wp:group {"align":"wide","style":{"spacing":{"padding":{"top":"var:preset|spacing|80","bottom":"var:preset|spacing|80","left":"var:preset|spacing|80","right":"var:preset|spacing|80"},"blockGap":"var:preset|spacing|60"},"position":{"type":""},"border":{"radius":"5px"}},"backgroundColor":"quinary","layout":{"type":"constrained"}} -->
<div class="wp-block-group alignwide has-quinary-background-color has-background" style="border-radius:5px;padding-top:var(--wp--preset--spacing--80);padding-right:var(--wp--preset--spacing--80);padding-bottom:var(--wp--preset--spacing--80);padding-left:var(--wp--preset--spacing--80)"><!-- wp:group {"style":{"spacing":{"blockGap":"0"}},"layout":{"type":"constrained"}} -->
<div class="wp-block-group"><!-- wp:paragraph -->
<p><?php esc_html_e( 'Contact With us', 'patterns-woocommerce' ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:heading {"level":3} -->
<h3 class="wp-block-heading"><?php esc_html_e( 'Do you have any questions?', 'patterns-woocommerce' ); ?></h3>
<!-- /wp:heading -->

<!-- wp:spacer {"height":"var:preset|spacing|30"} -->
<div style="height:var(--wp--preset--spacing--30)" aria-hidden="true" class="wp-block-spacer"></div>
<!-- /wp:spacer -->

<!-- wp:paragraph {"style":{"typography":{"fontStyle":"normal","fontWeight":"300"}},"fontSize":"medium"} -->
<p class="has-medium-font-size" style="font-style:normal;font-weight:300"><?php esc_html_e( 'Fill out our form and we will contact you within 24 hours.', 'patterns-woocommerce' ); ?></p>
<!-- /wp:paragraph --></div>
<!-- /wp:group -->

<!-- wp:shortcode -->
<?php esc_html_e( 'Add Contact form shortcode', 'patterns-woocommerce' ); ?>
<!-- /wp:shortcode --></div>
<!-- /wp:group --></div>
<!-- /wp:group -->
