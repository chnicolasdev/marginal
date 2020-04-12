<div class="row text-center">
    <div class="col-lg-12 col-xs-12 col-sm-12 col-md-12">
        <h2>Quiénes Somos</h2>  
    </div>
</div>

<div class="linearoja"></div>

<?php
            $argsQuienesSomos = array(
                  'cat' => 4,
                  'type' => 'post',
                  'nopaging' => true,
             );



              query_posts($argsQuienesSomos);

              $ultimaQuienesSomos = new WP_Query($argsQuienesSomos);
              if ( $ultimaQuienesSomos->have_posts() ):

                while($ultimaQuienesSomos->have_posts() ): $ultimaQuienesSomos->the_post(); ?>

                <div class="row row-caja">   
                    
                    <div class="col-lg-6 col-xs-12 col-md-6 col-sm-6">        
                      <?php the_post_thumbnail('', array ('class' => 'img-responsive center-block img-50 img-board1')); ?>
                    </div>

                    <div class="col-lg-6 col-xs-12 col-md-6 col-sm-6 alinear-vertical">          
                        <p><?php the_content(); ?></p>      
                    </div>
                    
                </div> 


                <?php endwhile; ?>

              <?php endif;
              wp_reset_postdata();

      ?>    

<div id="servicios"></div>


