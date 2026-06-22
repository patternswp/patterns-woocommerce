<?php
/**
 * Title: Card 1
 * Slug: patterns-woocommerce/card-1
 * Categories: featured
 * Description: A layout featuring an icon, title, and content, commonly used in repeated columns or as a standalone section.
 *
 * @package    Patterns_Woocommerce
 * @subpackage Patterns_Woocommerce/patterns
 * @since      1.0.0
 */

?>
<!-- wp:group {"style":{"spacing":{"blockGap":"var:preset|spacing|20"}},"layout":{"type":"flex","orientation":"horizontal"}} -->
<div class="wp-block-group"><!-- wp:group {"style":{"layout":{"selfStretch":"fixed","flexSize":"70px"},"spacing":{"padding":{"top":"0px","bottom":"0px","left":"0px","right":"0px"}},"dimensions":{"minHeight":"70px"},"border":{"radius":"100px"}},"backgroundColor":"quaternary","layout":{"type":"flex","orientation":"vertical","justifyContent":"center","verticalAlignment":"center"}} -->
<div class="wp-block-group has-quaternary-background-color has-background" style="border-radius:100px;min-height:70px;padding-top:0px;padding-right:0px;padding-bottom:0px;padding-left:0px">

<!-- wp:image {"width":"40px","height":"40px","scale":"cover","sizeSlug":"full","linkDestination":"none"} -->
<figure class="wp-block-image size-full is-resized"><img src="<?php echo esc_url( get_template_directory_uri() ); ?>/assets/img/icon-1.png" style="object-fit:cover;width:40px;height:40px"/></figure>
<!-- /wp:image -->

</div>
<!-- /wp:group -->

<!-- wp:group {"style":{"spacing":{"blockGap":"5px"}},"layout":{"type":"constrained"}} -->
<div class="wp-block-group"><!-- wp:heading {"level":6} -->
<h6 class="wp-block-heading"><?php esc_html_e( '20+ Stores', 'patterns-woocommerce' ); ?></h6>
<!-- /wp:heading -->

<!-- wp:paragraph {"fontSize":"x-small"} -->
<p class="has-x-small-font-size"><?php esc_html_e( 'spectacular world of electronics', 'patterns-woocommerce' ); ?></p>
<!-- /wp:paragraph --></div>
<!-- /wp:group --></div>
<!-- /wp:group -->

