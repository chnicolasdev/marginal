<?php
/**
 * The main template file
 *
 * This is the most generic template file in a WordPress theme
 * and one of the two required files for a theme (the other being style.css).
 * It is used to display a page when nothing more specific matches a query.
 * E.g., it puts together the home page when no home.php file exists.
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package oxido_starter
 */

get_header(); ?>
	
	 
	 	<section>
	 		<?php get_template_part('template-parts/content-slider-home') ?>			
	 	</section>

		<?php get_template_part('template-parts/custom-navbar') ?>
	 	
 		<section>
			<div class="container">
				<div class="row">
					<?php get_template_part('template-parts/quienes-somos') ?>	
				</div>
			</div>
	 	</section>

	 	<section>
			<div class="container" style="padding-bottom: 40px;">
				<div class="row">
					<?php get_template_part('template-parts/servicios-inicio') ?>	
				</div>
			</div>
	 	</section>


 		<!-- <section>
			<div class="container" style="padding-bottom: 40px;">
				<div class="row">
					<?php get_template_part('template-parts/custom-noticias') ?>	
				</div>
			</div>
	 	</section> -->

 	 	<section>
			<?php get_template_part('template-parts/content-slider-clientes') ?>	
	 	</section>	

<?php

get_footer();
