<?php global $dm_settings; ?>
<?php if ($dm_settings['show_postmeta'] != 0) : 
    $reflected_stored_meta = get_post_meta( $post->ID );
    if ( $reflected_stored_meta['meta-lesson-plan']) :
        foreach ($reflected_stored_meta['meta-lesson-plan'] as $metaLessonPlan ):
            echo '<a href="'. $metaLessonPlan.'"download><span class="glyphicon glyphicon-download" aria-hidden="true"></span> Download Lesson Plan</a>';
        endforeach;
    endif;
endif; ?>