<?php
/**
 * The metabox-specific functionality of the plugin.
 *
 * @link 		http://slushman.com
 * @since 		1.0.0
 *
 * @package 	Now_Hiring
 * @subpackage 	Now_Hiring/admin
 */
/**
 * The metabox-specific functionality of the plugin.
 *
 * @package 	Now_Hiring
 * @subpackage 	Now_Hiring/admin
 * @author 		Slushman <chris@slushman.com>
 */
class Reflected_Admin_Metaboxes 
{

	/**
	 * The post meta data
	 *
	 * @since 		1.0.0
	 * @access 		private
	 * @var 		string 			$meta    			The post meta data.
	 */
	private $meta;
	/**
	 * The ID of this plugin.
	 *
	 * @since 		1.0.0
	 * @access 		private
	 * @var 		string 			$plugin_name 		The ID of this plugin.
	 */
	private $plugin_name;
	/**
	 * The version of this plugin.
	 *
	 * @since 		1.0.0
	 * @access 		private
	 * @var 		string 			$version 			The current version of this plugin.
	 */
	private $version;
	/**
	 * Initialize the class and set its properties.
	 *
	 * @since 		1.0.0
	 * @param 		string 			$Now_Hiring 		The name of this plugin.
	 * @param 		string 			$version 			The version of this plugin.
	 */
	public function __construct( $plugin_name, $version ) {
		$this->plugin_name = $plugin_name;
		$this->version = $version;
	}
	/**
	 * Registers metaboxes with WordPress
	 *
	 * @since 	1.0.0
	 * @access 	public
	 */
	public function add_metaboxes() {
		// add_meta_box( $id, $title, $callback, $screen, $context, $priority, $callback_args );
		echo "run";
		add_meta_box(
	        'resources',
	        __( 'Lesson Resources', 'reflected' ),
	        array( $this, 'metabox' ),
	        'lesson',
	        'normal',
	        'low',
	        array()
	    );
	} // add_metaboxes()
	/**
	 * Calls a metabox file specified in the add_meta_box args.
	 *
	 * @since 	1.0.0
	 * @access 	public
	 * @return 	void
	 */
	public function metabox( ) {
	    // Output last time the post was modified.
	    echo 'Last Modified:' . $post->post_modified;
	 
	    // Output 'this'.
	    //echo $metabox['args']['foo'];
	 
	    // Output 'that'.
	    //echo $metabox['args']['bar'];
	 
	    // Output value of custom field.
	    //echo get_post_meta( $post->ID, 'wpdocs_custom_field', true );
	}

}