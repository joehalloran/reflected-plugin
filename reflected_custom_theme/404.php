<?php get_header(); ?>

<?php get_template_part('template-part', 'topnav'); ?>

<div class="container dmbs-container">

    <div class="row dmbs-header">

    <div class="col-md-12 dmbs-header-text">
            
            <h2 class="main-page-header">Something's not right here...</h2>
        </div>

    </div>

    <!-- start content container -->
    <div class="row dmbs-content">

        <?php //left sidebar ?>
        <?php get_sidebar( 'left' ); ?>

        <div class="col-md-<?php devdmbootstrap3_main_content_width(); ?> dmbs-main">
         <h1><?php _e('...sorry this page does not exist!','devdmbootstrap3'); ?></h1>
        </div>

        <?php //get the right sidebar ?>
        <?php get_sidebar( 'right' ); ?>

    </div>
    <!-- end content container -->

</div>
<!-- end main container -->

<?php get_footer(); ?>