
<?php
      $argsNoticiasPage = array(
            'cat' => 6,
            'type' => 'post',
            'nopaging' => true,
       );



        query_posts($argsNoticiasPage);

        $ultimaNoticiasPage = new WP_Query($argsNoticiasPage);
        if ( $ultimaNoticiasPage->have_posts() ):

          while($ultimaNoticiasPage->have_posts() ): $ultimaNoticiasPage->the_post(); ?>
              
              <div class="col-lg-12 col-md-6 col-sm-6 col-xs-12 wow fadeInUp" data-wow-duration="2s">
                    <div class="row">
                        <div class="col-lg-3">
                            <a href="<?php the_permalink() ?>">
                            <?php the_post_thumbnail('', array ('class' => 'img-responsive center-block alturanoticias')); ?>
                        </div>
                        <div class="col-lg-9">
                              <h2 class="sizetitle"><?php the_title(); ?></h2>
                              </a>
                              <p class="sizecontent"><?php the_excerpt(); ?></p>
                              <small>Publicado el: <?php the_time('j F, Y'); ?></small> 
                        </div> 
                    </div>                              
              </div>

          <?php endwhile; ?>

        <?php endif;
        wp_reset_postdata();

?>

     



