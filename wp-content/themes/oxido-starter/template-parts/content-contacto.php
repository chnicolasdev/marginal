
<div class="row">
    <div class="col-lg-4 col-xs-12 col-md-6 col-sm-6">
    	<?php
          $argsContentContacto = array(
                'cat' => 11,
                'type' => 'post',
                'nopaging' => true,
           );



            query_posts($argsContentContacto);

            $ultimaContentContacto = new WP_Query($argsContentContacto);
            if ( $ultimaContentContacto->have_posts() ):

              while($ultimaContentContacto->have_posts() ): $ultimaContentContacto->the_post(); ?>

              <?php if (get_the_title() == "Formulario Contacto" ) { ?>

                  <?php the_content() ?>

              <?php } ?>

              <?php endwhile; ?>

            <?php endif;
            wp_reset_postdata();
      ?>
    </div>

    <div class="col-lg-8 col-xs-12 col-md-6 col-sm-6"><br>
        	<div class="row">
        		<div class="col-lg-1 col-xs-3 col-md-3 col-sm-3">
                <img src="<?php bloginfo('template_url') ?>/img/direccion.png" class="img-responsive footer-img">
                </br>  
            </div>
            <div class="col-lg-11 col-xs-9 col-md-9 col-sm-9">
                <p>Nataniel Cox 210, Of. 35, Santiago de Chile</p>
            </div>
        	</div>
          <div class="row">
            <div class="col-lg-1 col-xs-3 col-md-3 col-sm-3">
                <img src="<?php bloginfo('template_url') ?>/img/telefono.png" class="img-responsive footer-img">
                </br>  
            </div>
            <div class="col-lg-11 col-xs-9 col-md-9 col-sm-9">
                <p ><a href="tel:+5626970792" style="color: #000">Santiago, Chile : +56 2 6970792</a></p>
            </div>
          </div>

          <div class="row">
            <div class="col-lg-1 col-xs-3 col-md-3 col-sm-3">
                <img src="<?php bloginfo('template_url') ?>/img/email.png" class="img-responsive footer-img">
                </br>  
            </div>
            <div class="col-lg-11 col-xs-9 col-md-9 col-sm-9">
                <p ><a href="mailto:comercial@factorit.com" style="color: #000">comercial@factorit.com</a></p>
            </div>
          </div>

        	<div class="row">
        		<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d832.2533244422206!2d-70.65384537074566!3d-33.4489600798112!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x9662c509a731c927%3A0xb82e0e865bff5093!2sNataniel+Cox+210%2C+Santiago%2C+Regi%C3%B3n+Metropolitana!5e0!3m2!1ses!2scl!4v1499276791258" width="100%" height="400" frameborder="0" style="border:0;pointer-events:none;" allowfullscreen></iframe>
        	</div>
    </div>
</div><br><br>