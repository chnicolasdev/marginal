

<div class="row row-caja">
    <div class="col-lg-6 col-xs-12 col-md-6 col-sm-6 alinear-vertical">
        <h1>Oracle SOA Suite</h1>
    </div>

    <div class="col-lg-6 hidden-xs col-md-6 col-sm-6">
        <?php
                    $argsWebsenseEmail = array(
                          'cat' => 52,
                          'type' => 'post',
                          'nopaging' => true,
                     );



                      query_posts($argsWebsenseEmail);

                      $ultimaWebsenseEmail = new WP_Query($argsWebsenseEmail);
                      if ( $ultimaWebsenseEmail->have_posts() ):

                        while($ultimaWebsenseEmail->have_posts() ): $ultimaWebsenseEmail->the_post(); ?>

                        <?php if (get_the_title() == "Logo Oracle" ) { ?>
          
                            <?php the_post_thumbnail('', array ('class' => 'img-responsive center-block img-40')); ?>

                        <?php } ?>

                        <?php endwhile; ?>

                      <?php endif;
                      wp_reset_postdata();

          ?>
    </div>
</div>

<div class="row">
      <div class="col-lg-6 col-xs-12 col-md-6 col-sm-6">
          </br></br><p>
          ¿Qué es Oracle SOA Suite?</br></br>

          Oracle SOA Suite es un completo software con funcionamiento permanente para la creación, implementación y administración de una arquitectura orientada a los servicios.</br></br>
          </p>
      </div>


      <div class="col-lg-6 col-xs-12 col-md-6 col-sm-6">
          </br></br><p>
          ¿Qué hace Oracle SOA Suite?</br></br>

          Oracle SOA Suite mejora la capacidad de la empresa tanto para predecir los cambios, mejorando la visibilidad de lo que ocurre en el entorno de los negocios, en tiempo real, como para responder a esos cambios, permitiendo a las empresas desarrollar y optimizar los procesos de negocio.</br></br></p>
      </div>        
</div>

<div class="row">
    <div class="col-lg-12 col-xs-12 col-sm-12 col-md-12">
        <?php
                    $argsImagenIBMData = array(
                          'cat' => 52,
                          'type' => 'post',
                          'nopaging' => true,
                     );



                      query_posts($argsImagenIBMData);

                      $ultimaImagenIBMData = new WP_Query($argsImagenIBMData);
                      if ( $ultimaImagenIBMData->have_posts() ):

                        while($ultimaImagenIBMData->have_posts() ): $ultimaImagenIBMData->the_post(); ?>

                        <?php if (get_the_title() == "Oracle SOA Suite" ) { ?>
          
                            <?php the_post_thumbnail('', array ('class' => 'img-responsive center-block img-40')); ?>

                        <?php } ?>

                        <?php endwhile; ?>

                      <?php endif;
                      wp_reset_postdata();

          ?>
    </div>
</div>

