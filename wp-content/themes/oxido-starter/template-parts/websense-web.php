<div class="row">
    <div class="col-lg-6 col-xs-12 col-md-6 col-sm-6">
            <h1>Websense Cloud Web Security</h1></br></br>
    </div>
    <div class="col-lg-6 hidden-xs col-md-6 col-sm-6">
            <?php
                $argsWebsenseWeb = array(
                      'cat' => 50,
                      'type' => 'post',
                      'nopaging' => true,
                 );



                  query_posts($argsWebsenseWeb);

                  $ultimaWebsenseWeb = new WP_Query($argsWebsenseWeb);
                  if ( $ultimaWebsenseWeb->have_posts() ):

                    while($ultimaWebsenseWeb->have_posts() ): $ultimaWebsenseWeb->the_post(); ?>

                    <?php if (get_the_title() == "Productos Logo Websense 1" ) { ?>
      
                        <?php the_post_thumbnail('', array ('class' => 'img-responsive center-block img-50')); ?>

                    <?php } ?>

                    <?php endwhile; ?>

                  <?php endif;
                  wp_reset_postdata();

          ?>
    </div>
</div>

<div class="row">
      <div class="col-lg-12 col-xs-12 col-md-12 col-sm-12">
          </br></br><p>
          Protección centralizada contra malware de la Web y filtrado Web.</br></br>

          Protección hospedada contra virus y malware de la Web con filtrado Web para empresas con pocos recursos de TI y redes distribuidas. Permite que los clientes aprovechen al máximo la potencia de la tecnología Web 2.0 sin renunciar a la seguridad, la productividad o el control. El modelo gestionado de seguridad posibilita una reducción de los costes empresariales y la complejidad, gracias a la administración centralizada para empleados remotos y emplazamientos de oficinas distribuidas.</br></br>
          </p>
      </div>
</div>



<div class="row">
      <div class="col-lg-12 col-xs-12 col-md-12 col-sm-12">
          <?php
                    $argsWebsenseWeb = array(
                          'cat' => 50,
                          'type' => 'post',
                          'nopaging' => true,
                     );



                      query_posts($argsWebsenseWeb);

                      $ultimaWebsenseWeb = new WP_Query($argsWebsenseWeb);
                      if ( $ultimaWebsenseWeb->have_posts() ):

                        while($ultimaWebsenseWeb->have_posts() ): $ultimaWebsenseWeb->the_post(); ?>

                        <?php if (get_the_title() == "Productos Websense Web" ) { ?>
          
                            <?php the_post_thumbnail('', array ('class' => 'img-responsive center-block img-40')); ?>

                        <?php } ?>

                        <?php endwhile; ?>

                      <?php endif;
                      wp_reset_postdata();

          ?>
      </div>        
</div>
