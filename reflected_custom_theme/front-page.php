<?php get_header(); ?>

<?php get_template_part('template-part', 'topnav'); ?>
<div class="site-wrapper-inner">
  <div class="container-fluid header">
    <div class="container">
      <div class="row">
        <div id="site-titles" class="col-md-12 text-center">
          <h1>Reflect<span>ED</span></h1>
          <h2>Metacognition for primary schools</h2>
          <a href="http://rosendale.cc" target="_blank">
            <h2>by Rosendale Primary School</h2>
            <img src="<?php bloginfo('stylesheet_directory'); ?>/img/rosendale-logo-white.png" />
          </a>
        </div> <!-- /.col -->
      </div> <!-- /.row -->
    </div> <!-- /.container -->
    <!-- <svg height="200" width="1920"><polygon class="corner" points="0,200 1920,200 1920,0"></polygon></svg> -->
  </div> <!-- .container-fluid -->
  
  <?php /*    
  <div id="top-menu" class="container-fluid">
    <div class="container">
        <div class="row">
          <div class="col-sm-4">
            <a class="menu-box-link" href="http://google.com" target="_blank">
              <div class="top menu-box">
                <span class="glyphicon glyphicon-user" aria-hidden="true"></span>
                <h2>Training</h2>
              </div> <!-- .menu-box -->
            </a>
          </div> <!-- /.col -->
          <div class="col-sm-4">
            <a class="menu-box-link" href="http://google.com" target="_blank">
              <div class="top menu-box">
                <span class="glyphicon glyphicon-education" aria-hidden="true"></span>
                <h2>Teacher Area</h2>
              </div> <!-- .menu-box -->
            </a>
          </div> <!-- /.col -->
          <div class="col-sm-4">
            <a class="menu-box-link" href="http://google.com" target="_blank">
              <div class="top menu-box">
                <span class="glyphicon glyphicon-bullhorn" aria-hidden="true"></span>
                <h2>Conferences</h2>
              </div> <!-- .menu-box -->
            </a>
          </div> <!-- /.col -->
        </div> <!-- /.row -->
      </div> <!-- /.container -->
    </div>
    */ 
    ?>
      <div id="front-page-video" class="container-fluid">
        <div class="row">
          <div class="col-md-6 col-md-offset-3 col-sm-8 col-sm-offset-2 text-center">
            <h1 class="text-center">About ReflectED</h1>
            <!-- 16:9 aspect ratio -->
            <div class="embed-responsive embed-responsive-16by9">
              <iframe class="embed-responsive-item" src="https://www.youtube.com/embed/-qAjzKCW0Nc" frameborder="0" allowfullscreen></iframe>
            </div>
          </div> <!-- .col -->
        </div> <!-- /.row -->
      </div> <!-- /.container-fluid -->
      <div class="container">
        <div class="row">
          <div class="col-md-10 col-md-offset-1">
            <h1 class="text-center">What is ReflectED?</h1>
            <p class=lead>ReflectED is an approach to learning, developed by Rosendale Primary school, that teaches and develops children’s metacognition skills (learning how they learn). It supports and improves attainment, especially amongst disadvantaged pupils, and aims to help learners of all backgrounds develop the tools to make excellent progress in their learning and fulfil their potential.</p>
            <p class=lead>ReflectED teaches children the skills of reflection and how to record their learning moments and strategies. Teachers can also look across these reflections to understand what pupils are enjoying or struggling with, and identify specific pupil needs.</p>
            <p class=lead>Evidence suggests the metacognitive skills children develop through ReflectED will significantly enhance their learning.</p>
          </div> <!-- /.col -->
        </div> <!-- /.row -->
      </div> <!-- /.container -->
</div> <!-- /.site-wrapper-inner -->

<?php get_footer(); ?>
