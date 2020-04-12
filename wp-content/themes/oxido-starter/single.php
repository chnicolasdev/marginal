<?php
/**
 * The template for displaying all single posts
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/#single-post
 *
 * @package oxido_starter
 */

get_header(); ?>

 	<div id="primary" class="container" style="padding-top: 60px;">
 		<a href="http://factorit.oxidocs.com/noticias/#noticias"><h3 style="color: #000">⇦ <u>Volver a Noticias</u></h3></a>
		<main id="co</u>ntent" class="site-main" role="main">
			<div class="col-lg-12">


				<?php if (have_posts()) : while (have_posts()) : the_post(); ?>
			
				<article style="padding-bottom: 50px;">
					<h1><?php the_title(); ?></h1><br/><br/>
					<div>
						<?php the_post_thumbnail('',array('class'=>'img-responsive')); ?>						
					</div>
					<br/>
					<?php the_content(); ?>
				</article>

			<?php endwhile; endif; ?>
				
			</div>
		</main>
	</div>


<?php

get_footer();
