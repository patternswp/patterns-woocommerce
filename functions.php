<?php // phpcs:ignore
if ( ! defined( 'ABSPATH' ) ) {
	exit;
}

/**
 * Patterns Woocommerce functions and definitions
 *
 * @link https://developer.wordpress.org/themes/basics/theme-functions/
 *
 * @package Patterns Woocommerce
 */

/**
 * Current theme path.
 * Current theme url.
 * Current theme version.
 * Current theme name.
 * Current theme option name.
 */
define( 'PATTERNS_WOOCOMMERCE_PATH', trailingslashit( get_template_directory() ) );
define( 'PATTERNS_WOOCOMMERCE_URL', trailingslashit( get_template_directory_uri() ) );
define( 'PATTERNS_WOOCOMMERCE_VERSION', '2.0.0' );
define( 'PATTERNS_WOOCOMMERCE_THEME_NAME', 'patterns-woocommerce' );
define( 'PATTERNS_WOOCOMMERCE_OPTION_NAME', 'patterns-woocommerce' );

/**
 * The core theme class that is used to define internationalization,
 * admin-specific hooks, and public-facing site hooks.
 */
require PATTERNS_WOOCOMMERCE_PATH . 'includes/main.php';

/**
 * Begins execution of the theme.
 *
 * @since    1.0.0
 */
function patterns_woocommerce_run() {
	new Patterns_Woocommerce();
}
patterns_woocommerce_run();
