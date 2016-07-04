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
	public function metabox( $post ) {
	    // Output last time the post was modified.
	    $prfx_stored_meta = get_post_meta( $post->ID );
	    ?>
	    <h3>Lesson Plan</h3>
	    <p>
		    <label for="meta-lesson-plan" class="prfx-row-title"><?php _e( 'Lesson Plan Upload', 'reflected' )?></label>
		    <input type="text" name="meta-lesson-plan" class="meta-resource-input" id="meta-lesson-plan" value="<?php if ( isset ( $prfx_stored_meta['meta-lesson-plan'] ) ) echo $prfx_stored_meta['meta-lesson-plan'][0]; ?>" />
		    <input type="button" id="meta-image-button" class="meta-image-button button" value="<?php _e( 'Choose or Upload an Image', 'prfx-textdomain' )?>" />
		</p>
		<div id="additional-resources"> 
			<h3>Additional Resources</h3>
			<p>
			    <label for="meta-lesson-resource1" class="prfx-row-title"><?php _e( 'Resource Upload', 'reflected' )?></label>
			    <input type="text" name="meta-lesson-resource1" class="meta-resource-input" id="meta-lesson-resource1" value="<?php if ( isset ( $prfx_stored_meta['meta-lesson-resource'] ) ) echo $prfx_stored_meta['meta-lesson-resource'][1]; ?>" />
			    <input type="button" id="meta-image-button2" class="meta-image-button button" value="<?php _e( 'Choose or Upload an Image', 'prfx-textdomain' )?>" />
			</p> 
			<input type="button" id="meta-image-more" class="button" value="<?php _e( 'More', 'prfx-textdomain' )?>" />
		</div>
	<?php
	}

	public function prfx_meta_save( $post_id ) {
 
	    // Checks save status
	    $is_autosave = wp_is_post_autosave( $post_id );
	    $is_revision = wp_is_post_revision( $post_id );
	    $is_valid_nonce = ( isset( $_POST[ 'prfx_nonce' ] ) && wp_verify_nonce( $_POST[ 'prfx_nonce' ], basename( __FILE__ ) ) ) ? 'true' : 'false';
	 
	    // Exits script depending on save status
	    if ( $is_autosave || $is_revision || !$is_valid_nonce ) {
	        return;
	    }
		 
		// Checks for input and saves if needed
		if( isset( $_POST[ 'meta-lesson-plan' ] ) ) {
		    update_post_meta( $post_id, 'meta-lesson-plan', $_POST[ 'meta-lesson-plan' ] );
		}
	 
	}
}