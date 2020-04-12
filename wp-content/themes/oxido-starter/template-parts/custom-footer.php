<link href="https://fortawesome.github.io/Font-Awesome/assets/font-awesome/css/font-awesome.css" rel="stylesheet">
<!--footer start from here-->
<footer>
  <div class="container">
    <div class="row row-caja">

    <!-- ======================================================================
        SE LLAMA A LA CATEGORÍA 14 (LOGO FOOTER) Y SE REALIZA UN ARRAY
        PARA LLAMAR A TODA LA CATEGORÍA.
        SE MUESTRAN 2 ENTRADAS EL LOGO SUPERIOR E INFERIOR
====================================================================== -->


    <div class="hidden-md hidden-sm col-xs-12 col-lg-2 alinear-vertical">  

              <?php
                $argsLogoFooter = array(
                  'cat' => 14,
                  'type' => 'post',
                  'posts_per_page' => 2,
                );


                query_posts($argsLogoFooter);

                $ultimaLogoFooter = new WP_Query($argsLogoFooter);
                if ( $ultimaLogoFooter->have_posts() ):

                  while($ultimaLogoFooter->have_posts() ): $ultimaLogoFooter->the_post(); ?> 
                           <?php the_post_thumbnail('', array('class' => 'img-responsive imglogofooter center-block')); ?>
                  <?php endwhile; ?>

                <?php endif;
                wp_reset_postdata();

              ?>

    </div>
                    

  
<!-- ======================================================================
        SE LLAMA A LA CATEGORÍA 11 (CONTACTO FOOTER) Y SE REALIZA UN ARRAY
        PARA LLAMAR A TODA LA CATEGORÍA.
        SE MUESTRA EL TÍTULO Y EN CONTENIDO DE LA ENTRADA
====================================================================== -->


      <?php
        $argsContactoFooter = array(
          'cat' => 11,
          'type' => 'post',
          'nopaging' => true
        );


        query_posts($argsContactoFooter);

        $ultimaContactoFooter = new WP_Query($argsContactoFooter);
        if ( $ultimaContactoFooter->have_posts() ):

          while($ultimaContactoFooter->have_posts() ): $ultimaContactoFooter->the_post(); ?>
            
             <?php if (get_the_title() == "Contacto Footer" ) { ?>
        
                <div class="col-lg-4 col-md-6 col-sm-6 footer-col">
                  
                  <h6 class="heading7 text-center">CONTACTO</h6>
                  <p><?php the_content(); ?></p>

                </div>

            <?php } ?>    
            
          <?php endwhile; ?>

        <?php endif;
        wp_reset_postdata();

      ?>

        

<!-- ======================================================================
        SE LLAMA A LA CATEGORÍA 3 (NOTICIAS) Y SE REALIZA UN ARRAY
        PARA LLAMAR A TODA LA CATEGORÍA.
        SE MUESTRA EL TÍTULO Y EN CONTENIDO DE LA ENTRADA
====================================================================== -->

      <div class="hidden-md hidden-sm footer-col hidden-xs col-lg-4">
      <h6 class="heading7">ÚLTIMAS NOTICIAS</h6>
        <?php
          $argsNoticiasFooter = array(
            'cat' => 3,
            'type' => 'post',
            'posts_per_page' => 3,
          );


          query_posts($argsNoticiasFooter);

          $ultimaNoticiasFooter = new WP_Query($argsNoticiasFooter);
          if ( $ultimaNoticiasFooter->have_posts() ):


            while($ultimaNoticiasFooter->have_posts() ): $ultimaNoticiasFooter->the_post(); ?>
              
              
              <div class="post">
                <a href="<?php the_permalink() ?>"><div class="col-lg-4 img-responsive noticias-footer" style="background-image:url('<?php print_r(get_the_post_thumbnail_url()); ?>');"></div></a>
                
                <div class="col-lg-8"><a href="#"><p><?php the_title(); ?></a><span><?php the_time('F j, Y'); ?></span></p></div>
                </br>

                
              </div>
              
            <?php endwhile; ?>

          <?php endif;
          wp_reset_postdata();

        ?>

      </div>

<!-- ======================================================================
        SOCIAL MEDIA
====================================================================== -->

      <div class="col-md-6 col-sm-6 col-lg-2 footer-col center-social-media">
        <h6 class="heading7">SOCIAL MEDIA</h6>
        <ul class="footer-social social-media">
          <li><i class="fa fa-linkedin social-icon linked-in" aria-hidden="true"></i></li>
          <li><i class="fa fa-facebook social-icon facebook" aria-hidden="true"></i></li>
          <li><i class="fa fa-twitter social-icon twitter" aria-hidden="true"></i></li>
          <li><i class="fa fa-google-plus social-icon google" aria-hidden="true"></i></li>
        </ul>
        <img class="img-responsive" style="width: 100%;" src="http://testweb.factorit.com/img/banderas.png">
      </div>
    </div>
  </div>
</footer>
<!--footer start from here-->

<!-- ======================================================================
        ÚLTIMO FOOTER FONDO NEGRO
====================================================================== -->

<div class="copyright">
  <div class="container">
    <div class="col-md-6 col-sm-5 col-xs-12">
      <p>© 2017 - Desarrollado por <a href="http://oxidocs.com" style="color: #fff;"><u>Óxido Creative Studio</u></a></p>
    </div>
    <div class="col-md-6 col-sm-7 col-xs-12">
      <ul class="bottom_ul">
        <li><a href="http://corp.factorit.com">Inicio</a></li>
        <li><a href="http://corp.factorit.com/nosotros">Nosotros</a></li>
        <li><a href="http://corp.factorit.com/servicios">Servicios</a></li>
        <li><a href="http://corp.factorit.com/noticias">Noticias</a></li>
        <li><a href="http://corp.factorit.com/contacto">Contacto</a></li>
      </ul>
    </div>
  </div>
</div>
