<div class="row">
    <div class="col-lg-12 col-xs-12 col-md-12 col-sm-12">
            <h1>Análisis Predictivo</h1></br></br>
            <p>El Análisis predictivo utiliza estadística junto con algoritmos de minería de datos.</br></br>

            Se basan en el análisis de los datos actuales e históricos para hacer predicciones, que si bien no son afirmaciones absolutas, indican eventos y su probabilidad de ocurrencia.</br></br></p>
    </div>
</div>

<div class="row row-caja">
    <div class="col-lg-6 col-xs-12 col-md-6 col-sm-6 alinear-vertical">
        <p></br></br>
        Los modelos predictivos explotan los patrones de comportamiento encontrados en el pasado para poder identificar riesgos y oportunidades, capturando las relaciones entre factores y permitiendo capturar riesgos potenciales asociados a un conjunto de condiciones, guiando finalmente a la toma de decisiones.</p></br></br>
    </div>


    <div class="col-lg-6 col-xs-12 col-md-6 col-sm-6">

          <?php
                $argsGestionIntelligence = array(
                      'cat' => 42,
                      'type' => 'post',
                      'nopaging' => true,
                 );



                  query_posts($argsGestionIntelligence);

                  $ultimaGestionIntelligence = new WP_Query($argsGestionIntelligence);
                  if ( $ultimaGestionIntelligence->have_posts() ):

                    while($ultimaGestionIntelligence->have_posts() ): $ultimaGestionIntelligence->the_post(); ?>

                      <?php if (get_the_title() == "Gestión Análisis Predictivo" ) { ?>
      
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
        <p></br></br>
        El análisis predictivo se utiliza en multitud de campos, aseguradoras, telecomunicaciones, agencias de viaje, farmacéuticas, médicas, etc.</br></br></p>
    </div>
</div>



    
