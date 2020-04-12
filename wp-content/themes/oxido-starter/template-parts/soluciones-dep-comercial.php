     
<div class="row">
    <div class="col-lg-6 col-xs-12 col-md-6 col-sm-6">     
          <h1>Comercial</h1></br></br>     
          <p>El área comercial hace foco en la adquisición de nuevos clientes y en la mejora de las relaciones con los ya existentes.</br></br>
          <p>Trabajando con nosotros podrá:</br></br>
          Mejorar su conocimiento del mercado y de sus clientes para la toma de decisiones acertadas.</br>
          Acceder a la información y las mejoras prácticas para lograr cierres más rápidos.</br>
          Obtener la visión correcta de los mejores clientes y productos más rentables.</br>
          Adecuar su oferta de marketing según las variaciones del entorno.</br>
          Optimizar los procesos de ventas para mejorar los márgenes.</br>
          Dirección Ejecutiva.</br></p>
    </div>

    <div class="col-lg-6 col-xs-12 col-md-6 col-sm-6">
          <?php
            $argsDepComercial = array(
                  'cat' => 23,
                  'type' => 'post',
                  'nopaging' => true,
             );



              query_posts($argsDepComercial);

              $ultimaDepComercial = new WP_Query($argsDepComercial);
              if ( $ultimaDepComercial->have_posts() ):

                while($ultimaDepComercial->have_posts() ): $ultimaDepComercial->the_post(); ?>

                  <?php if (get_the_title() == "Soluciones Departamento Comercial" ) { ?>
  
                    <?php the_post_thumbnail('', array ('class' => 'img-responsive center-block comercial')); ?>

                  <?php } ?>

                <?php endwhile; ?>

              <?php endif;
              wp_reset_postdata();

      ?>
    </div>
</div>

        

 
