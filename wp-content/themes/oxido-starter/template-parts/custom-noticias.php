
      <div class="col-lg-12 wow fadeInUp" data-wow-duration="1s">
          <h1 class="page-header text-center">Noticias</h1>
      </div>

      <?php
            $argsNoticiasHome = array(
                  'cat' => 3,
                  'type' => 'post',
                  'posts_per_page' => 3,
             );



              query_posts($argsNoticiasHome);

              $ultimaNoticiasHome = new WP_Query($argsNoticiasHome);
              if ( $ultimaNoticiasHome->have_posts() ):

                while($ultimaNoticiasHome->have_posts() ): $ultimaNoticiasHome->the_post(); ?>
                    
                    
                        <div class="col-lg-12 col-sm-6 col-md-6 col-xs-12 wow fadeInUp" data-wow-duration="2s">
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
                 

                <?php endwhile; ?>

              <?php endif;
              wp_reset_postdata();

      ?>



