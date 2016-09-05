<?php

/**
 * Provide a admin area view for the plugin
 *
 * This file is used to markup the admin-facing aspects of the plugin.
 *
 * @link       http://example.com
 * @since      1.0.0
 *
 * @package    Plugin_Name
 * @subpackage Plugin_Name/admin/partials
 */

public function metabox_lesson_plans($reflected_stored_lesson_plan) {
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
		<p class="help-text"><span id="link-text-help">Link text</span><span id="link-help">Download Link </span></p>
		<?php
		if ( $reflected_stored_lesson_resources ) {
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

	?>