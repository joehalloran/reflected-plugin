<?php global $dm_settings; ?>
<?php if ($dm_settings['show_postmeta'] != 0) : ?>
    <p class="text-right">
        <span class="glyphicon glyphicon-user"></span> <?php the_author_posts_link(); ?>
        <span class="glyphicon glyphicon-time"></span> <?php the_time('F jS, Y'); ?>
        <span class="glyphicon glyphicon-edit"></span> <?php edit_post_link(__('Edit','devdmbootstrap3')); ?>
    </p>
    <p class="text-right"><span class="glyphicon glyphicon-circle-arrow-right"></span><?php the_category(', '); ?>
    <?php echo get_the_term_list( $post->ID, 'lesson_type', '', ', ', '' ); ?></p> 
    <?php if( has_tag() ) : ?>
        <p class="text-right"><span class="glyphicon glyphicon-tags"></span>
        <?php the_tags(); ?>
        </p>
    <?php endif; ?>
<?php endif; ?>