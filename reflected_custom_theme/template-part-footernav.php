<?php if ( has_nav_menu( 'footer_menu' ) ) : ?>
    <div class="col-sm-4">
            <nav role="navigation">
                

                    <?php
                    wp_nav_menu( array(
                            'theme_location'    => 'footer_menu',
                            'depth'             => 2,
                            'container'         => 'div',
                            'container_class'   => '',
                            'menu_class'        => 'nav nav-pills nav-stacked',
                            'fallback_cb'       => 'wp_bootstrap_navwalker::fallback',
                            'walker'            => new wp_bootstrap_navwalker())
                    );
                    ?>
                
            </nav>
    </div>
<?php endif; ?>
<?php if ( has_nav_menu( 'footer_menu_two' ) ) : ?>
    <div class="col-sm-4">
            <nav role="navigation">
                

                    <?php
                    wp_nav_menu( array(
                            'theme_location'    => 'footer_menu_two',
                            'depth'             => 2,
                            'container'         => 'div',
                            'container_class'   => '',
                            'menu_class'        => 'nav nav-pills nav-stacked',
                            'fallback_cb'       => 'wp_bootstrap_navwalker::fallback',
                            'walker'            => new wp_bootstrap_navwalker())
                    );
                    ?>
                
            </nav>
    </div>
<?php endif; ?>
<?php if ( has_nav_menu( 'footer_menu_three' ) ) : ?>
    <div class="col-sm-4">
            <nav role="navigation">
                

                    <?php
                    wp_nav_menu( array(
                            'theme_location'    => 'footer_menu_three',
                            'depth'             => 2,
                            'container'         => 'div',
                            'container_class'   => '',
                            'menu_class'        => 'nav nav-pills nav-stacked',
                            'fallback_cb'       => 'wp_bootstrap_navwalker::fallback',
                            'walker'            => new wp_bootstrap_navwalker())
                    );
                    ?>
                
            </nav>
    </div>
<?php endif; ?>