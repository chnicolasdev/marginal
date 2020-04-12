
<?php
        $argsLogoNavbar = array(
          'cat' => 3,
          'type' => 'post',
          'posts_per_page' => 1,
        );


        $ultimaLogoNavbar = new WP_Query($argsLogoNavbar);
        if ( $ultimaLogoNavbar->have_posts() ):

          while($ultimaLogoNavbar->have_posts() ): $ultimaLogoNavbar->the_post(); ?>
            
           <a href="http://localhost:8888/marginal">
            <?php the_post_thumbnail('logonav', array('class' => 'img-responsive center-block nav-brand logo-pequeno')); ?></a>

            
          <?php endwhile; ?>

         <?php endif;
        wp_reset_postdata();

?>