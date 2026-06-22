<?php
/**
 * Title: Footer
 * Slug: patterns-woocommerce/footer
 * Categories: footer
 * Block Types: core/template-part/footer
 * Description: A pattern for displaying the site footer.
 *
 * @package    Patterns_Woocommerce
 * @subpackage Patterns_Woocommerce/patterns
 * @since      1.0.0
 */

?>
<!-- wp:group {"align":"full","style":{"spacing":{"blockGap":"0"}},"backgroundColor":"tertiary","layout":{"type":"constrained"}} -->
<div class="wp-block-group alignfull has-tertiary-background-color has-background">

    <!-- wp:columns {"verticalAlignment":"top","align":"wide","style":{"spacing":{"padding":{"top":"var:preset|spacing|80","bottom":"var:preset|spacing|80"},"blockGap":{"left":"var:preset|spacing|80"}}}} -->
    <div class="wp-block-columns alignwide are-vertically-aligned-top" style="padding-top:var(--wp--preset--spacing--80);padding-bottom:var(--wp--preset--spacing--80)">

        <!-- wp:column {"verticalAlignment":"top","width":"33.33%"} -->
        <div class="wp-block-column is-vertically-aligned-top" style="flex-basis:33.33%"><!-- wp:group {"layout":{"type":"flex","flexWrap":"nowrap","verticalAlignment":"bottom"}} -->
        <div class="wp-block-group">
        <!-- wp:image {"width":"auto","height":"40px","sizeSlug":"full","linkDestination":"none"} -->
        <figure class="wp-block-image size-full is-resized"><img src="<?php echo esc_url( get_template_directory_uri() ); ?>/assets/img/patternswp-logo-white.png" style="width:auto;height:40px"/></figure>
        <!-- /wp:image -->

        <!-- wp:site-title {"textAlign":"left","style":{"elements":{"link":{"color":{"text":"var:preset|color|default"},":hover":{"color":{"text":"var:preset|color|primary"}}}},"layout":{"selfStretch":"fixed","flexSize":"170px"}}} /--></div>
        <!-- /wp:group -->

        <!-- wp:group {"style":{"spacing":{"blockGap":"var:preset|spacing|20"}},"layout":{"type":"constrained"}} -->
        <div class="wp-block-group"><!-- wp:group {"style":{"spacing":{"blockGap":"0"}},"layout":{"type":"constrained"}} -->
        <div class="wp-block-group"><!-- wp:paragraph {"align":"left","style":{"typography":{"fontStyle":"normal","fontWeight":"300"}},"textColor":"default","fontSize":"medium"} -->
        <p class="has-text-align-left has-default-color has-text-color has-medium-font-size" style="font-style:normal;font-weight:300"><?php esc_html_e( 'Got Question? Call us 24/7', 'patterns-woocommerce' ); ?></p>
        <!-- /wp:paragraph -->

        <!-- wp:paragraph {"className":"pwp-txt-dec-non","style":{"elements":{"link":{"color":{"text":"var:preset|color|default"},":hover":{"color":{"text":"var:preset|color|primary"}}}}},"textColor":"default","fontSize":"large"} -->
        <p class="pwp-txt-dec-non has-default-color has-text-color has-link-color has-large-font-size"><a href="<?php echo esc_url( 'tel:(629) 555-0129' ); ?>"><?php esc_html_e( '(629) 555-0129', 'patterns-woocommerce' ); ?></a></p>
        <!-- /wp:paragraph --></div>
        <!-- /wp:group -->

        <!-- wp:paragraph {"className":"pwp-txt-dec-non","style":{"elements":{"link":{":hover":{"color":{"text":"var:preset|color|primary"}},"color":{"text":"var:preset|color|default"}}}}} -->
        <p class="pwp-txt-dec-non has-link-color"><a href="<?php echo esc_url( 'mailto:support@demo.com' ); ?>"><?php esc_html_e( 'support@demo.com', 'patterns-woocommerce' ); ?></a></p>
        <!-- /wp:paragraph -->

        <!-- wp:paragraph {"align":"left","style":{"elements":{"link":{"color":{"text":"var:preset|color|default"}}}},"textColor":"default"} -->
        <p class="has-text-align-left has-default-color has-text-color has-link-color"><?php esc_html_e( '785 15h Street, Office 478 Berlin, De 81566 6391 Elgin St. Celina, 10299', 'patterns-woocommerce' ); ?></p>
        <!-- /wp:paragraph --></div>
        <!-- /wp:group -->



        </div>
        <!-- /wp:column -->

        <!-- wp:column {"verticalAlignment":"top","width":"33.33%"} -->
        <div class="wp-block-column is-vertically-aligned-top" style="flex-basis:33.33%"><!-- wp:heading {"textAlign":"left","level":6,"style":{"elements":{"link":{"color":{"text":"var:preset|color|default"}}}},"textColor":"default"} -->
        <h6 class="wp-block-heading has-text-align-left has-default-color has-text-color has-link-color"><?php esc_html_e( 'Safe Payments', 'patterns-woocommerce' ); ?></h6>
        <!-- /wp:heading -->

        <!-- wp:paragraph {"align":"left","style":{"elements":{"link":{"color":{"text":"var:preset|color|default"}}}},"textColor":"default"} -->
        <p class="has-text-align-left has-default-color has-text-color has-link-color"><?php esc_html_e( 'Contrary to popular belief, Lorem Ipsum is not simply random text. It has roots in', 'patterns-woocommerce' ); ?></p>
        <!-- /wp:paragraph -->

        <!-- wp:group {"layout":{"type":"flex","flexWrap":"nowrap"}} -->
            <div class="wp-block-group"><!-- wp:image {"width":"40px","sizeSlug":"full","linkDestination":"none"} -->
            <figure class="wp-block-image size-full is-resized"><img src="<?php echo esc_url( get_template_directory_uri() ); ?>/assets/img/fs-icon-visa.png"  style="width:40px"/></figure>
            <!-- /wp:image -->

            <!-- wp:image {"width":"40px","sizeSlug":"full","linkDestination":"none"} -->
            <figure class="wp-block-image size-full is-resized"><img src="<?php echo esc_url( get_template_directory_uri() ); ?>/assets/img/fs-icon-master.png"  style="width:40px"/></figure>
            <!-- /wp:image -->

            <!-- wp:image {"width":"40px","sizeSlug":"full","linkDestination":"none"} -->
            <figure class="wp-block-image size-full is-resized"><img src="<?php echo esc_url( get_template_directory_uri() ); ?>/assets/img/fs-icon-express.png"  style="width:40px"/></figure>
            <!-- /wp:image -->

            <!-- wp:image {"width":"40px","sizeSlug":"full","linkDestination":"none"} -->
            <figure class="wp-block-image size-full is-resized"><img src="<?php echo esc_url( get_template_directory_uri() ); ?>/assets/img/fs-icon-paypal.png"  style="width:40px"/></figure>
            <!-- /wp:image -->

            <!-- wp:image {"width":"40px","sizeSlug":"full","linkDestination":"none"} -->
            <figure class="wp-block-image size-full is-resized"><img src="<?php echo esc_url( get_template_directory_uri() ); ?>/assets/img/fs-icon-discover.png"  style="width:40px"/></figure>
            <!-- /wp:image -->
        </div>
        <!-- /wp:group -->

        </div>
        <!-- /wp:column -->

        <!-- wp:column {"verticalAlignment":"top","width":"33.33%"} -->
        <div class="wp-block-column is-vertically-aligned-top" style="flex-basis:33.33%"><!-- wp:group {"style":{"spacing":{"blockGap":"80px"}},"layout":{"type":"flex","flexWrap":"nowrap","justifyContent":"space-between","verticalAlignment":"top"}} -->
        <div class="wp-block-group"><!-- wp:group {"layout":{"type":"constrained"}} -->
        <div class="wp-block-group"><!-- wp:heading {"textAlign":"left","level":6,"textColor":"default"} -->
        <h6 class="wp-block-heading has-text-align-left has-default-color has-text-color"><?php esc_html_e( 'Category', 'patterns-woocommerce' ); ?></h6>
        <!-- /wp:heading -->

            <!-- wp:navigation {"textColor":"default","overlayMenu":"never","style":{"spacing":{"blockGap":"var:preset|spacing|20"},"typography":{"fontStyle":"normal","fontWeight":"400","textTransform":"none"}},"fontSize":"x-small","layout":{"type":"flex","orientation":"vertical"}} -->
            <!-- wp:navigation-link {"label":"<?php esc_html_e( 'Accessories', 'patterns-woocommerce' ); ?>","url":"#"} /-->

            <!-- wp:navigation-link {"label":"<?php esc_html_e( 'Electronics', 'patterns-woocommerce' ); ?>","url":"#"} /-->

            <!-- wp:navigation-link {"label":"<?php esc_html_e( 'Fashion', 'patterns-woocommerce' ); ?>","url":"#"} /-->

            <!-- wp:navigation-link {"label":"<?php esc_html_e( 'Furniture', 'patterns-woocommerce' ); ?>","url":"#"} /-->
        <!-- /wp:navigation -->



        </div>
        <!-- /wp:group -->

        <!-- wp:group {"layout":{"type":"constrained"}} -->
        <div class="wp-block-group"><!-- wp:heading {"textAlign":"left","level":6,"textColor":"default"} -->
        <h6 class="wp-block-heading has-text-align-left has-default-color has-text-color"><?php esc_html_e( 'Quick Links', 'patterns-woocommerce' ); ?></h6>
        <!-- /wp:heading -->

          <!-- wp:navigation {"textColor":"default","overlayMenu":"never","style":{"spacing":{"blockGap":"var:preset|spacing|20"},"typography":{"fontStyle":"normal","fontWeight":"400","textTransform":"none"}},"fontSize":"x-small","layout":{"type":"flex","orientation":"vertical"}} -->
            <!-- wp:navigation-link {"label":"<?php esc_html_e( 'Home', 'patterns-woocommerce' ); ?>","url":"#"} /-->

            <!-- wp:navigation-link {"label":"<?php esc_html_e( 'About', 'patterns-woocommerce' ); ?>","url":"#"} /-->

            <!-- wp:navigation-link {"label":"<?php esc_html_e( 'Shop', 'patterns-woocommerce' ); ?>","url":"#"} /-->

            <!-- wp:navigation-link {"label":"<?php esc_html_e( 'Contact', 'patterns-woocommerce' ); ?>","url":"#"} /-->
        <!-- /wp:navigation -->

        </div>
        <!-- /wp:group --></div>
        <!-- /wp:group --></div>
        <!-- /wp:column -->

    </div>
    <!-- /wp:columns -->

    <!-- wp:group {"align":"full","style":{"color":{"background":"#0000007a"},"spacing":{"padding":{"top":"var:preset|spacing|30","bottom":"var:preset|spacing|30"}}},"layout":{"type":"constrained"}} -->
    <div class="wp-block-group alignfull has-background" style="background-color:#0000007a;padding-top:var(--wp--preset--spacing--30);padding-bottom:var(--wp--preset--spacing--30)">

    <!-- wp:group {"align":"wide","layout":{"type":"flex","flexWrap":"wrap","justifyContent":"space-between"}} -->
    <div class="wp-block-group alignwide">

            <!-- wp:pattern {"slug":"patterns-woocommerce/copyright"} /-->

            <!-- wp:group {"layout":{"type":"flex","flexWrap":"wrap"}} -->
            <div class="wp-block-group">

                <!-- wp:paragraph {"align":"left","textColor":"default","fontSize":"x-small"} -->
                <p class="has-text-align-left has-default-color has-text-color has-x-small-font-size"><?php esc_html_e( 'Follow us', 'patterns-woocommerce' ); ?></p>
                <!-- /wp:paragraph -->

                <!-- wp:social-links {"iconColor":"default","iconColorValue":"#ffffff","size":"has-normal-icon-size","className":"is-style-logos-only"} -->
                <ul class="wp-block-social-links has-normal-icon-size has-icon-color is-style-logos-only"><!-- wp:social-link {"url":"#","service":"twitter"} /-->

                <!-- wp:social-link {"url":"#","service":"instagram"} /-->

                <!-- wp:social-link {"url":"#","service":"whatsapp"} /--></ul>
                <!-- /wp:social-links -->



            </div>
            <!-- /wp:group -->
        </div>
        <!-- /wp:group -->

</div>
<!-- /wp:group -->

<!-- wp:pattern {"slug":"patterns-woocommerce/scroll-to-top-button"} /-->

</div>
<!-- /wp:group -->

