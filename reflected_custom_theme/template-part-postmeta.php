<?php global $dm_settings; ?>
<?php if ($dm_settings['show_postmeta'] != 0) : ?>
	<div class="reflected-post-meta">
	    <p class="text-right"><span class="glyphicon glyphicon-circle-arrow-right"></span> <?php echo get_the_term_list( $post->ID, 'lesson_type', __('Collections: ','devdmbootstrap3'), ', ' ); ?></p>
	</div>
<?php endif; ?>