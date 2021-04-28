<?php
/**
 * Plugin Name:       Current Copyright Plugin
 * Plugin URI:        https://blackjaic.com/plugins/current-copyright/
 * Description:       Creates a copyright notice for this year.
 * Version:           1.0.1
 * Requires at least: 5.2
 * Requires PHP:      7.2
 * Author:            Jamii Corley
 * Author URI:        https://www.blackjaic.com/
 * License:           GPL v2 or later
 * License URI:       https://www.gnu.org/licenses/gpl-2.0.html
 * Text Domain:       current-copyright-plugin
 * Domain Path:       /languages
 */

/**
 * Register our plugin
 */
function current_copyright_setup() {
//  Nothing really to do, but here's where it would go if you had 
//  Customer post types or options to set up.
     ;
} 
add_action( 'init', 'current_copyright_setup' );
 
/**
 * Activate the plugin.
 */
function current_copyright_activate() { 
    // Trigger our function that registers the custom post type plugin.
    current_copyright_setup(); 
}
register_activation_hook( __FILE__, 'current_copyright_activate' );
/**
 * Deactivation hook.
 */
function current_copyright_deactivate() {
    ;
}
register_deactivation_hook( __FILE__, 'current_copyright_deactivate' );

function current_copyright_shortcode( $atts = [], $content = null, $tag = '' ) {
 
    // Add copyright symbol
    $o = '&copy;';
    $o .= date("Y");
 
    // return output
    return $o;
}

function current_copyright_shortcodes_init() {
    add_shortcode( 'current_copyright', 'current_copyright_shortcode' );
}
 
add_action( 'init', 'current_copyright_shortcodes_init' );

?>
