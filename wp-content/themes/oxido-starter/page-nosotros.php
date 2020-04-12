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

		<section id="nosotros-perfil">
			<div class="container wow fadeIn" >
				<div class="row text-center">
					<h1 style="padding-top: 70px;">NOSOTROS</h1>
				</div>
				<hr>
					<?php get_template_part('template-parts/nosotros-perfil') ?>
				<hr>
			</div>
		</section>

		<section id="nosotros-misionvv" style="padding-top: 40px;">
			<div class="container wow fadeIn" >
				<div class="row">
					<?php get_template_part('template-parts/nosotros-misionvv') ?>
				</div>
				<hr>
			</div>
		</section>

		<section id="nosotros-politica" style="padding-top: 40px;">
			<div class="container wow fadeIn">
				<div class="row">
					<?php get_template_part('template-parts/nosotros-politica') ?>
				</div>
				<hr>
			</div>
		</section>

		<section id="nosotros-partners" style="padding-top: 40px;">
			<div class="container wow fadeIn">
					<?php get_template_part('template-parts/nosotros-partners') ?>
				<hr>
			</div>
		</section>

		<section id="nosotros-experiencia" style="padding-top: 40px;">
			<div class="container wow fadeIn">
				<div class="row">
					<?php get_template_part('template-parts/nosotros-experiencia') ?>
				</div>
				<hr>
			</div>
		</section>

		<section id="nosotros-rrhh" style="padding-bottom: 30px;padding-top: 40px;"">
			<div class="container wow fadeIn">
				<div class="row">
					<?php get_template_part('template-parts/nosotros-rrhh') ?>
				</div>
			</div>
		</section>

	
<?php

get_footer();
