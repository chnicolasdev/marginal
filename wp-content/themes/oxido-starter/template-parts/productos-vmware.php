<div class="row">
    <div class="col-lg-6 col-xs-12 col-md-6 col-sm-6">
            <h1>VMware vCenter™ Operations Management Suite™</h1>
    </div>
    <div class="col-lg-6 hidden-xs col-md-6 col-sm-6">
            <?php
                $argsProductosVMware = array(
                      'cat' => 47,
                      'type' => 'post',
                      'nopaging' => true,
                 );



                  query_posts($argsProductosVMware);

                  $ultimaProductosVMware = new WP_Query($argsProductosVMware);
                  if ( $ultimaProductosVMware->have_posts() ):

                    while($ultimaProductosVMware->have_posts() ): $ultimaProductosVMware->the_post(); ?>

                    <?php if (get_the_title() == "Productos VMware 1" ) { ?>
      
                        <?php the_post_thumbnail('', array ('class' => 'img-responsive center-block img-30')); ?>

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
          Descripción</br></br>

          Brinda administración automatizada de las operaciones usando analíticas patentadas y un enfoque integrado a la administración del rendimiento, la capacidad y la configuración. Esta suite les permite a los departamentos de TI obtener visibilidad e inteligencia útil para asegurar buena anticipación de los niveles de servicio, utilización óptima de los recursos y cumplimiento normativo de la configuración en dinámicos entornos virtuales y en nube.</br></br>
          </p>
      </div>
</div>

<div class="row">
      <div class="col-lg-12 col-xs-12 col-md-12 col-sm-12">
            <?php
                $argsProductosVMware = array(
                      'cat' => 47,
                      'type' => 'post',
                      'nopaging' => true,
                 );



                  query_posts($argsProductosVMware);

                  $ultimaProductosVMware = new WP_Query($argsProductosVMware);
                  if ( $ultimaProductosVMware->have_posts() ):

                    while($ultimaProductosVMware->have_posts() ): $ultimaProductosVMware->the_post(); ?>

                    <?php if (get_the_title() == "Productos VMware 2" ) { ?>
      
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
          </br></br><p>¿Cómo se usa vCenter Operations Management Suite?</br></br>

          vCenter Operations Management Suite se utiliza para obtener mayor visibilidad de todas las capas de la infraestructura. Recoge y analiza datos de rendimiento, relaciona las anormalidades e identifica la causa raíz de los problemas de rendimiento del diseño. Gracias a vCenter Operations Management Suite es posible optimizar la utilización de recursos y administrar la configuración en función de los que dictan las políticas de manera que esté garantizado el cumplimiento normativo y se eviten la proliferación y mal uso de la configuración. La capacidad de descubrir aplicaciones, mapear las dependencias y medir los costos renuevan los niveles sensibilización frente a las aplicaciones y de responsabilidad financiera de los equipos de infraestructura y operaciones</br></br></p>
      </div>

      <div class="col-lg-6 col-xs-12 col-md-6 col-sm-6">
          </br></br><p>
            ¿Qué incluye vCenter Operations Management Suite?</br></br>

            Cinco componentes: VMware vCenter Operations Manager™, VMware vCenter Configuration Manager™, VMware vFabric™ Hyperic®, VMware vCenter Infrastructure Navigator™, y VMware vCenter Chargeback Manager™..</br></br>
          </p>
      </div>
</div>


<div class="row">
      <div class="col-lg-12 col-xs-12 col-md-12 col-sm-12">
          </br></br><p>
            vCenter Operations Manager</br></br>

            La base de la suite, vCenter Operations Manager, proporciona tableros de operaciones, analíticas de rendimiento y optimización de la capacidad necesarios para alcanzar visibilidad integral, garantizar en forma anticipativa los niveles de servicio y administrar la capacidad en dinámicos entornos virtuales y en nube.</br></br></br>


            vCenter Configuration Manager</br></br>

            vCenter Configuration Manager automatiza la administración de la configuración entre servidores virtuales y físicos, así aumenta la eficiencia eliminando el trabajo manual, que es propenso a errores ydemanda mucho tiempo. Esta automatización les permite a las empresas mantener el cumplimiento normativo en todo momento ya que detecta los cambios y hace cumplir las políticas tecnológicas, los requisitos normativos y las pautas de endurecimiento en materia de seguridad.</br></br></br>


            vFabric Hyperic</br></br>

            Monitorea los recursos físicos de hardware, sistemas operativos, middleware y aplicaciones. Como vFabric Hyperic está bien integrada con vCenter Operations Manager, usted puede administrar tanto la infraestructura virtual y física como las aplicaciones fundamentales para el negociocon una única suite.</br></br></br>


            vCenter Infrastructure Navigator</br></br>

            Este componente descubre y muestra las dependencias de aplicaciones e infraestructura de manera automática. Proporciona visibilidad de los servicios de aplicaciones que se ejecutan sobre la infraestructura de la máquina virtual y sus interrelaciones, para una administración operacional diaria.</br></br></br>


            vCenter Chargeback Manager</br></br>

            Permite el cálculo, el análisis y el informe exactos de los costos de las máquinas virtuales, con lo cual proporciona visibilidad del costo real de la infraestructura virtual requerido para contar con servicios empresariales.</br></br></br>
          </p>
      </div>

</div>


          
