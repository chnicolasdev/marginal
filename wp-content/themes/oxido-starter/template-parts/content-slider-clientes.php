
<div class="slider1 hidden-xs" style="height: 10px;">
      <?php
        $argsSliderClientes = array(
          'cat' => 17,
          'type' => 'post',
          'nopaging' => true,              
        );


        query_posts($argsSliderClientes);

        $ultimaSliderClientes = new WP_Query($argsSliderClientes);
        if ( $ultimaSliderClientes->have_posts() ):

          while($ultimaSliderClientes->have_posts() ): $ultimaSliderClientes->the_post(); ?>
            
            <div class="slide">
                <?php the_post_thumbnail('', array ('class' => 'img-responsive')); ?>
            </div>

          <?php endwhile; ?>
        <?php endif;
        wp_reset_postdata();
      ?>
</div>



<div class="slider2 hidden-lg hidden-sm hidden-md" style="height: 10px;">
      <?php
        $argsSliderClientes = array(
          'cat' => 17,
          'type' => 'post',
          'nopaging' => true,              
        );


        query_posts($argsSliderClientes);

        $ultimaSliderClientes = new WP_Query($argsSliderClientes);
        if ( $ultimaSliderClientes->have_posts() ):

          while($ultimaSliderClientes->have_posts() ): $ultimaSliderClientes->the_post(); ?>
            
            <div class="slide">
                <?php the_post_thumbnail('', array ('class' => 'img-responsive')); ?>
            </div>

          <?php endwhile; ?>
        <?php endif;
        wp_reset_postdata();
      ?>
</div>







