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

		<section id="servicios-consultoria">
			<div class="container wow fadeIn" >
				<div class="row text-center">
					<h1 style="padding-top: 70px;">CONTACTO</h1>
				</div>
				<hr>
					<?php get_template_part('template-parts/content-contacto') ?>				
			</div>
		</section>
	
<?php

get_footer();
