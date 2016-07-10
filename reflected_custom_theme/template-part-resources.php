<?php global $dm_settings; ?>
<?php if ($dm_settings['show_postmeta'] != 0) : 
    $reflected_stored_lesson_plan = get_post_meta( $post->ID, 'meta-lesson-plan');
    if ( $reflected_stored_lesson_plan ) :
    	echo '<h3>Lesson Plan</h3>';
        foreach ($reflected_stored_lesson_plan as $metaLessonPlan ):
            echo '<p><a href="'. $metaLessonPlan.'"><span class="glyphicon glyphicon-download" aria-hidden="true"></span> Download Lesson Plan</a></p>';
        endforeach;
    endif;
    $reflected_stored_lesson_resources = get_post_meta( $post->ID, 'meta-lesson-resource');
    if ( $reflected_stored_lesson_resources ) :
        //var_dump($reflected_stored_lesson_resources);
    	echo '<h3>Lesson Resources</h3>';
        foreach ($reflected_stored_lesson_resources as $lesson_resources) :
            var_dump($lesson_resources);
            echo '<br />';
            foreach ($lesson_resources['title'] as $key => $value):
                var_dump($value);
                echo '<p><a href="'.$lesson_resources['media'][$key].'"><span class="glyphicon glyphicon-download" aria-hidden="true"></span>'.$value.'</a></p>';
            endforeach;
        endforeach;
    endif;
endif; ?>