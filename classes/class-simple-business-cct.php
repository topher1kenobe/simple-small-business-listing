<?php
/**
 * Simple Small Business Listing  Custom Content Type
 *
 * Creates a custom content type to hold businesses
 *
 * @class Simple_Small_Business_Listing_CCT
 * @version 1.0.0
 * @since 1.0
 * @package Simple_Small_Business_Listing_CCT
 * @author Topher
 */

/**
 * Simple_Small_Business_Listing_CCT
 *
 * @since Simple_Small_Business_Listing 1.0.0
 */
class Simple_Small_Business_Listing_CCT {

	/**
	 * Instance handle
	 *
	 * @static
	 * @since 1.2
	 * @var string
	 */
	private static $instance = null;

	/**
	 * Simple_Small_Business_Listing_CCT Constructor, actually contains nothing
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
		$this->simple_business_posts();

	}

	/**
	 * Register Custom Form Post.
	 *
	 * @access public
	 * @return void
	 */
	public function simple_business_posts() {

		$labels = array(
			'name'                  => _x( 'Simple Businesses', 'Post Type General Name', 'simple-business' ),
			'singular_name'         => _x( 'Simple Business', 'Post Type Singular Name', 'simple-business' ),
			'menu_name'             => __( 'Businesses', 'simple-business' ),
			'name_admin_bar'        => __( 'Business', 'simple-business' ),
			'archives'              => __( 'Business Archives', 'simple-business' ),
			'attributes'            => __( 'Business Attributes', 'simple-business' ),
			'parent_item_colon'     => __( 'Parent Business:', 'simple-business' ),
			'all_items'             => __( 'All Businesses', 'simple-business' ),
			'add_new_item'          => __( 'Add New Business', 'simple-business' ),
			'add_new'               => __( 'Add New', 'simple-business' ),
			'new_item'              => __( 'New Business', 'simple-business' ),
			'edit_item'             => __( 'Edit Business', 'simple-business' ),
			'update_item'           => __( 'Update Business', 'simple-business' ),
			'view_item'             => __( 'View Business', 'simple-business' ),
			'view_items'            => __( 'View Businesses', 'simple-business' ),
			'search_items'          => __( 'Search Business', 'simple-business' ),
			'not_found'             => __( 'Not found', 'simple-business' ),
			'not_found_in_trash'    => __( 'Not found in Trash', 'simple-business' ),
			'featured_image'        => __( 'Featured Image', 'simple-business' ),
			'set_featured_image'    => __( 'Set featured image', 'simple-business' ),
			'remove_featured_image' => __( 'Remove featured image', 'simple-business' ),
			'use_featured_image'    => __( 'Use as featured image', 'simple-business' ),
			'insert_into_item'      => __( 'Insert into item', 'simple-business' ),
			'uploaded_to_this_item' => __( 'Uploaded to this item', 'simple-business' ),
			'items_list'            => __( 'Businesses list', 'simple-business' ),
			'items_list_navigation' => __( 'Businesses list navigation', 'simple-business' ),
			'filter_items_list'     => __( 'Filter items list', 'simple-business' ),
		);
		$rewrite = array(
			'slug'                  => 'business',
			'with_front'            => false,
			'pages'                 => true,
			'feeds'                 => true,
		);
		$args = array(
			'label'                 => __( 'Simple Business', 'simple-business' ),
			'description'           => __( 'Listing of Simple Businesses', 'simple-business' ),
			'labels'                => $labels,
			'supports'              => array( 'title', 'editor', 'thumbnail', 'comments', 'revisions', 'page-attributes' ),
			'taxonomies'            => array( 'smbl_business_type' ),
			'hierarchical'          => true,
			'public'                => true,
			'show_ui'               => true,
			'show_in_menu'          => true,
			'menu_position'         => 5,
			'menu_icon'             => 'dashicons-cart',
			'show_in_admin_bar'     => true,
			'show_in_nav_menus'     => true,
			'can_export'            => true,
			'has_archive'           => 'businesses',
			'exclude_from_search'   => false,
			'publicly_queryable'    => true,
			'rewrite'               => $rewrite,
			'capability_type'       => 'page',
			'show_in_rest'          => true,
		);
		register_post_type( 'simple_business', $args );

	}
	// end class.
}
