

<div class="row row-caja">
    <div class="col-lg-6 col-xs-12 col-md-6 col-sm-6 alinear-vertical">
        <h1>IBM WebSphere Process Server</h1>
    </div>

    <div class="col-lg-6 hidden-xs col-md-6 col-sm-6">
        <?php
                    $argsWebsenseEmail = array(
                          'cat' => 51,
                          'type' => 'post',
                          'nopaging' => true,
                     );



                      query_posts($argsWebsenseEmail);

                      $ultimaWebsenseEmail = new WP_Query($argsWebsenseEmail);
                      if ( $ultimaWebsenseEmail->have_posts() ):

                        while($ultimaWebsenseEmail->have_posts() ): $ultimaWebsenseEmail->the_post(); ?>

                        <?php if (get_the_title() == "IBM Logo" ) { ?>
          
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
          ¿Qué es IBM WebSphere Process Server?</br></br>

          IBM WebSphere Process Server es un motor de automatización de procesos de negocio de alto rendimiento para ayudar a que los procesos de formulario cumplan los objetivos de su empresa.</br></br>
          </p>
      </div>


      <div class="col-lg-6 col-xs-12 col-md-6 col-sm-6">
          </br></br><p>
          ¿Qué hace IBM WebSphere Process Server?</br></br>

          Basado en estándares abiertos, despliega y ejecuta procesos que coordinan servicios (gente, información, sistemas y socios comerciales) dentro de su infraestructura SOA (arquitectura orientada a servicios) o no SOA.</br></br></p>
      </div>        
</div>


