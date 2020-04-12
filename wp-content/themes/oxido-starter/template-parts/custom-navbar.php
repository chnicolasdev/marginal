<nav class="navbar navbar-inverse navbar-fixed-top" role="navigation">
        <div class="container">
            <!-- Brand and toggle get grouped for better mobile display -->
            <div class="navbar-header">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                
                <?php get_template_part('template-parts/content-logo-navbar'); ?>
         
            </div>

            <!-- Collect the nav links, forms, and other content for toggling -->
            <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">

                <?php  

                          /* Primary navigation */
                            wp_nav_menu( array(
                              'menu' => 'menu1',
                              'depth' => 3,
                              'container' => false,
                              'menu_class' => 'nav navbar-nav navbar-right',
                              //'fallback_cb' => 'wp_bootstrap_navwalker::fallback',
                              //Process nav menu using our custom nav walker
                              'walker' => new wp_bootstrap_navwalker())
                            );
                    
                ?>

            </div>
            <!-- /.navbar-collapse -->
        </div>
        <!-- /.container -->
</nav>
       
