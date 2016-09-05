<?php 
    $reflected_stored_lesson_plan = get_post_meta( $post->ID, 'meta-lesson-plan');
    $reflected_stored_lesson_resources = get_post_meta( $post->ID, 'meta-lesson-resource');
    if ( $reflected_stored_lesson_plan ) {
    	echo '<h2>Lesson Plan</h2>';
        foreach ($reflected_stored_lesson_plan as $metaLessonPlan ) {
            echo '<p><a target="_blank" href="'. $metaLessonPlan.'"><span class="glyphicon glyphicon-download" aria-hidden="true"></span> Download Lesson Plan</a></p>';
        }
    }
    $reflected_stored_lesson_resources = get_post_meta( $post->ID, 'meta-lesson-resource');
    if ( $reflected_stored_lesson_resources ) {
    	echo '<h2>Lesson Resources</h2>';
        if ( $reflected_stored_lesson_resources ) {
            foreach ($reflected_stored_lesson_resources as $lesson_resources) {
                foreach ($lesson_resources['title'] as $key => $value) {
                    echo '<p><a target="_blank" href="'.$lesson_resources['media'][$key].'"><span class="glyphicon glyphicon-download" aria-hidden="true"></span> '.$value.'</a></p>';
                }
            }
        }
        
    }
?>