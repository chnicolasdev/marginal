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

		<section id="consultoria">
			<div class="container wow fadeIn" >
				<div class="row text-center">
					<h1 style="padding-top: 70px;">PRODUCTOS</h1>
				</div>
				<hr>
				<div class="row">
					<?php get_template_part('template-parts/productos-consultoria') ?>
				</div>
				<hr>
			</div>
		</section>

		<section id="outsourcing" style="padding-top: 40px;">
			<div class="container wow fadeIn" >
				<div class="row">
					<?php get_template_part('template-parts/productos-outsourcing') ?>
				</div>
				<hr>
			</div>
		</section>

		<section id="software-factory" style="padding-top: 40px;">
			<div class="container wow fadeIn">
				<div class="row" style="padding-bottom: 50px;">
					<?php get_template_part('template-parts/productos-software-factory') ?>
				</div>
			</div>
		</section>

	
<?php

get_footer();
