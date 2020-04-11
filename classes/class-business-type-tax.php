<?php
/**
 * Business Type Taxonomy
 *
 * Creates a custom taxonomy for Business Types
 *
 * @class Simple_Small_Business_Type_Tax
 * @version 1.0.0
 * @since 1.0
 * @package Simple_Small_Business_Type_Tax
 * @author Topher
 */

/**
 * Simple_Small_Business_Type_Tax
 *
 * @since Simple_Small_Business_Listing 1.0.0
 */
class Simple_Small_Business_Type_Tax {

	/**
	 * Instance handle
	 *
	 * @static
	 * @since 1.2
	 * @var string
	 */
	private static $instance = null;

	/**
	 * Simple_Small_Business_Type_Tax Constructor, actually contains nothing
	 *
	 * @access public
	 * @return void
	 */
	private function __construct() {}

	/**
	 * Instance initiator, runs setup etc.
	 *
	 * @access public
	 * @return self
	 */
	public static function instance() {
		if ( ! is_a( self::$instance, __CLASS__ ) ) {
			self::$instance = new self();
			self::$instance->setup();
		}

		return self::$instance;
	}

	/**
	 * Runs things that would normally be in __construct
	 *
	 * @access private
	 * @return void
	 */
	private function setup() {

		// create custom post type.
		$this->simple_business_tax();

	}

	/**
	 * Register Custom Form Post.
	 *
	 * @access public
	 * @return void
	 */
	// Register Custom Taxonomy
	public function simple_business_tax() {

		$labels = array(
			'name'                       => _x( 'Business Types', 'Taxonomy General Name', 'simple-business' ),
			'singular_name'              => _x( 'Business Type', 'Taxonomy Singular Name', 'simple-business' ),
			'menu_name'                  => __( 'Business Types', 'simple-business' ),
			'all_items'                  => __( 'All Types', 'simple-business' ),
			'parent_item'                => __( 'Parent Type', 'simple-business' ),
			'parent_item_colon'          => __( 'Parent Type:', 'simple-business' ),
			'new_item_name'              => __( 'New Type Name', 'simple-business' ),
			'add_new_item'               => __( 'Add New Type', 'simple-business' ),
			'edit_item'                  => __( 'Edit Type', 'simple-business' ),
			'update_item'                => __( 'Update Type', 'simple-business' ),
			'view_item'                  => __( 'View Type', 'simple-business' ),
			'separate_items_with_commas' => __( 'Separate items with commas', 'simple-business' ),
			'add_or_remove_items'        => __( 'Add or remove items', 'simple-business' ),
			'choose_from_most_used'      => __( 'Choose from the most used', 'simple-business' ),
			'popular_items'              => __( 'Popular Types', 'simple-business' ),
			'search_items'               => __( 'Search Types', 'simple-business' ),
			'not_found'                  => __( 'Not Found', 'simple-business' ),
			'no_terms'                   => __( 'No items', 'simple-business' ),
			'items_list'                 => __( 'Types list', 'simple-business' ),
			'items_list_navigation'      => __( 'Types list navigation', 'simple-business' ),
		);
		$rewrite = array(
			'slug'                       => 'business-type',
			'with_front'                 => true,
			'hierarchical'               => false,
		);
		$args = array(
			'labels'                     => $labels,
			'hierarchical'               => true,
			'public'                     => true,
			'show_ui'                    => true,
			'show_admin_column'          => true,
			'show_in_nav_menus'          => true,
			'show_tagcloud'              => true,
			'rewrite'                    => $rewrite,
			'show_in_rest'               => true,
		);
		register_taxonomy( 'smbl_business_type', array( 'simple_business' ), $args );

	}
	// end class.
}
