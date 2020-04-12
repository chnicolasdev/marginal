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

		<section id="gestion-informacion">
			<div class="container wow fadeIn" >
				<div class="row text-center">
					<h1 style="padding-top: 70px;">SOLUCIONES POR NEGOCIO</h1>
				</div>
				<hr>
					<?php get_template_part('template-parts/gestion-informacion') ?>
				<hr>
			</div>
		</section>

		<section id="data-warehousing" style="padding-top: 40px;">
			<div class="container wow fadeIn" >
					<?php get_template_part('template-parts/gestion-warehousing') ?>
				<hr>
			</div>
		</section>

		<section id="data-quality" style="padding-top: 40px;">
			<div class="container wow fadeIn">
				<div style="padding-bottom: 50px;">
					<?php get_template_part('template-parts/gestion-data-quality') ?>
				</div>
				<hr>
			</div>
		</section>

		<section id="business-analytics" style="padding-top: 40px;">
			<div class="container wow fadeIn">
				<div style="padding-bottom: 50px;">
					<?php get_template_part('template-parts/gestion-business-analytics') ?>
				</div>
				<hr>
			</div>
		</section>

		<section id="business-intelligence" style="padding-top: 40px;">
			<div class="container wow fadeIn">
				<div style="padding-bottom: 50px;">
					<?php get_template_part('template-parts/gestion-business-intelligence') ?>
				</div>
				<hr>
			</div>
		</section>

		<section id="dashboard-scorecards" style="padding-top: 40px;">
			<div class="container wow fadeIn">
				<div style="padding-bottom: 50px;">
					<?php get_template_part('template-parts/gestion-dashboards') ?>
				</div>
				<hr>
			</div>
		</section>

		<section id="ppf" style="padding-top: 40px;">
			<div class="container wow fadeIn">
				<div style="padding-bottom: 50px;">
					<?php get_template_part('template-parts/gestion-ppf') ?>
				</div>
				<hr>
			</div>
		</section>

		<section id="analisis-predictivo" style="padding-top: 40px;">
			<div class="container wow fadeIn">
				<div style="padding-bottom: 50px;">
					<?php get_template_part('template-parts/gestion-analisis-predictivo') ?>
				</div>
				<hr>
			</div>
		</section>

		<section id="seguridad-informacion" style="padding-top: 40px;">
			<div class="container wow fadeIn">
				<div style="padding-bottom: 50px;">
					<?php get_template_part('template-parts/gestion-seguridad-informacion') ?>
				</div>
				<hr>
			</div>
		</section>

		<section id="bpm" style="padding-top: 40px;">
			<div class="container wow fadeIn">
				<div style="padding-bottom: 50px;">
					<?php get_template_part('template-parts/gestion-bpm') ?>
				</div>
			</div>
		</section>

	
<?php

get_footer();
