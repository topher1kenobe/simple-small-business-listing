<?php
/**
 * Plugin Name: Simple Small Business Listing
 * Description: Makes a simple small business listing
 * Author: Topher
 * Version: 1.1
 * Author URI: http://topher1kenobe.com
 * Text Domain: simple-business
 * Domain Path: /languages/
 *
 * @package Simple_Small_Business_Listing
 */

/**
 * Makes a simple contact form that submits via ajax.
 *
 * @since Simple_Small_Business_Listing 1.0
 * @author Topher
 */

/**
 * Prepare for internationalization
 *
 * @since Simple_Small_Business_Listing 1.1
 */
function simple_business_load_text_domain() {
	load_plugin_textdomain( 'simple-business', false, dirname( plugin_basename( __FILE__ ) ) . '/languages/' );
}
add_action( 'plugins_loaded', 'simple_business_load_text_domain' );

/**
 * Instantiate instance of Business Type Taxonomy
 *
 * @since Simple_Small_Business_Listing 1.0
 */
if ( file_exists( plugin_dir_path( __FILE__ ) . 'classes/class-business-type-tax.php' ) ) {
	include_once plugin_dir_path( __FILE__ ) . 'classes/class-business-type-tax.php';
	add_action( 'init', array( 'Simple_Small_Business_Type_Tax', 'instance' ) );
}

/**
 * Instantiate instance of Business Location Taxonomy
 *
 * @since Simple_Small_Business_Listing 1.0
 */
if ( file_exists( plugin_dir_path( __FILE__ ) . 'classes/class-business-location-tax.php' ) ) {
	include_once plugin_dir_path( __FILE__ ) . 'classes/class-business-location-tax.php';
	add_action( 'init', array( 'Simple_Small_Business_Location_Tax', 'instance' ) );
}

/**
 * Instantiate instance of Business Listing Custom Content Type
 *
 * @since Simple_Small_Business_Listing 1.0
 */
if ( file_exists( plugin_dir_path( __FILE__ ) . 'classes/class-simple-business-cct.php' ) ) {
	include_once plugin_dir_path( __FILE__ ) . 'classes/class-simple-business-cct.php';
	add_action( 'init', array( 'Simple_Small_Business_Listing_CCT', 'instance' ) );
}
