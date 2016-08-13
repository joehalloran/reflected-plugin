
    
<div class="dmbs-footer conatainer-fluid">
    <?php
        global $dm_settings;
        if ($dm_settings['author_credits'] != 0) : ?>
            <div class="row dmbs-author-credits">
                <p class="text-center"><a href="<?php global $developer_uri; echo esc_url($developer_uri); ?>">DevDmBootstrap3 <?php _e('created by','devdmbootstrap3') ?> Danny Machal</a></p>
            </div>

    <?php endif; ?>

    <?php //get_template_part('template-part', 'footernav'); ?>

    <div class="container">
      <div class="row">
        <div class="col-md-12">
          <h2>Footer</h2>
        </div> <!-- /.col -->
      </div> <!-- /.row -->
    </div> <!-- /.container -->



</div>



<?php wp_footer(); ?>
</body>
</html>