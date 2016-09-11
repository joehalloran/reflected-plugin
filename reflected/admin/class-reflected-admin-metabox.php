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
	        'reflected-resources',
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
	    $reflected_stored_lesson_plan = get_post_meta( $post->ID , 'meta-lesson-plan');
		$this->metabox_lesson_plans($reflected_stored_lesson_plan);
		$reflected_stored_lesson_resources = get_post_meta( $post->ID, 'meta-lesson-resource');
		$this->metabox_additional_resources($reflected_stored_lesson_resources);
		  
	}

	protected function metabox_lesson_plans($reflected_stored_lesson_plan) {
		$html = '<h3>Lesson Plan</h3>';
		$html .= '<p><label for="meta-lesson-plan" class="prfx-row-title">'. __( 'Lesson Plan link ', 'reflected' ).'</label>';
		$html .= '<input type="text" name="meta-lesson-plan" class="meta-resource-input" id="meta-lesson-plan" value="';
		if ( isset ( $reflected_stored_lesson_plan ) ) {
			$html.= $reflected_stored_lesson_plan[0];
		}
		$html .= '" /><input type="button" id="meta-image-button" class="meta-image-button button" value="'. __( 'Choose or Upload a File', 'reflected' ).'" /></p>';
		echo $html;
	}

	protected function metabox_additional_resources($reflected_stored_lesson_resources) {
		?>
		<div id="additional-resources"> 
		<h3>Additional Resources</h3>
		<span class="help-text"><span id="link-text-help">Link text</span><span id="link-help">Download Link </span></span>
		<?php
		if ( !($reflected_stored_lesson_resources[0] == NULL) ) {
	        foreach ($reflected_stored_lesson_resources as $lesson_resources) {
	            foreach ($lesson_resources['title'] as $key => $value) {
					?>		               
	                <p class="lesson-resource">
					    <input type="text" name="meta-lesson-resource[title][]" class="resource-title" <?php echo (($value) ? 'value="'.$value.'"' : 'placeholder="Display text"')  ?>" />
					    <input type="text" name="meta-lesson-resource[media][]" class="meta-resource-input" <?php echo (($lesson_resources['media'][$key]) ? 'value="'.$lesson_resources['media'][$key].'"' : 'placeholder="Link"')  ?>" />
					    <input type="button" class="meta-image-button button" value="<?php _e( 'Choose or Upload a File', 'reflected' )?>" />
					    <button class="meta-delete-button button" /><span class="dashicons dashicons-no"></span></button>
					    
					</p> 
					<?php
	            }
	        }
	    } else {
	    ?>
			<p class="lesson-resource">
			    <input type="text" name="meta-lesson-resource[title][]" class="resource-title" placeholder="Item Label" />
			    <input type="text" name="meta-lesson-resource[media][]" class="meta-resource-input" value="" />
			    <input type="button" class="meta-image-button button" value="<?php _e( 'Choose or Upload an File', 'reflected' )?>" />
			</p> 
		<?php 
		}
		?>
		<input type="button" id="meta-image-more" class="button" value="<?php _e( 'More', 'reflected' )?>" />
		</div>
		<?php
	}

	

	/**
	 * Saves the data from the metabox. Triggered by 'save_post'.
	 *
	 * @since 	1.0.0
	 * @access 	public
	 * @return 	void
	 */
	public function prfx_meta_save( $post_id ) {
 
	    // Checks save status
	    $is_autosave = wp_is_post_autosave( $post_id );
	    $is_revision = wp_is_post_revision( $post_id );
	    $is_valid_nonce = ( isset( $_POST[ 'prfx_nonce' ] ) && wp_verify_nonce( $_POST[ 'prfx_nonce' ], basename( __FILE__ ) ) ) ? 'true' : 'false';
	 
	    // Exits script depending on save status
	    if ( $is_autosave || $is_revision || !$is_valid_nonce ) {
	        return;
	    }

		// Meta lesson plan
		if( isset( $_POST[ 'meta-lesson-plan' ] ) ) {

			$materials = sanitize_text_field($_POST[ 'meta-lesson-plan' ]);		     		
		 
			update_post_meta( $post_id, 'meta-lesson-plan',  $materials);
		}

		// Meta lesson Resource
		if( isset( $_POST[ 'meta-lesson-resource' ] ) ) {
			$materials = $_POST[ 'meta-lesson-resource' ];
			$allItemsNull  = TRUE; // Assume the input is empty;
			
			// Loop through the array structure
			
       		foreach ($materials['title'] as $key => $value) {
       			if ( !(FALSE == $value && FALSE == $materialItem['media'][$key]) ){
					$allItemsNull = FALSE; //set value to false if item found
				} 
				// sanitize
       			$materials['title'][$key] = sanitize_text_field($value);
       			$materials['media'][$key] = esc_url_raw( $materials['media'][$key] );
				
			}
			 

			if ( $allItemsNull ) {
			    update_post_meta( $post_id, 'meta-lesson-resource',  NULL);
			} else {
				update_post_meta( $post_id, 'meta-lesson-resource',  $materials);
			}
		}
	 
	}
}