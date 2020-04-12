<?php
/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package oxido_starter
 */

?>
</div>
	<!-- #content -->

	<?php get_template_part('template-parts/custom-footer') ?>

<?php wp_footer(); ?>
<script type=”text/javascript”>
jQuery(document).ready(function($) {

	//SE AGREGA EL JS PARA HABILITAR EL SLIDER .CAROUSEL
	$(‘.carousel’).carousel({
	interval: 1000
	})
	
});

</script>


<!-- SE HABILITA EL JS PARA EL SLIDER CLIENTES EN LA PÁGINA INICIO, SIN CONTROLES -->
<script>
	jQuery(function($){
    var slider1 = $('.slider1').bxSlider({
        mode: 'horizontal',
        speed: 600,
        infiniteloop: true,
        adaptiveHeight: false,
        responsive: true,
        slideWidth: 290,
        minSlides: 1,
        maxSlides: 4,
        pager: false,
        controls: false,
        auto: true
    });

    var slider2 = $('.slider2').bxSlider({
          mode: 'horizontal',
          speed: 600,
          infiniteloop: true,
          adaptiveHeight: false,
          responsive: true,
          // slideWidth: 290,
          minSlides: 1,
          maxSlides: 1,
          pager: false,
          controls: false,
          auto: true
          
        });

    //SE RECARGA LOS SLIDER A MEDIDA QUE SE CAMBIA LA RESOLUCIÓN 320PX MOBILE

   $(window).on('resize', function(){
      var win = $(this); //this = window
      if (win.width() >= 320) {
        slider1.reloadSlider();
        slider2.reloadSlider();
      }
});
   });



 </script>

</body>
</html>
