</br></br>
<div class="row text-center">
	<div class="col-lg-12 col-xs-12 col-sm-12 col-md-12">
			<h2>Servicios</h2>  
	</div>
</div>

<div class="linearoja"></div>

</br></br>

<div class="row">

	<?php
	$argsServicios = array(
				'cat' => 7,
				'type' => 'post',
				'posts_per_page' => 6,
	 );

		query_posts($argsServicios);

		$ultimaServicios = new WP_Query($argsServicios);
		if ( $ultimaServicios->have_posts() ):

			while($ultimaServicios->have_posts() ): $ultimaServicios->the_post(); ?>

			
				<div class="col-lg-4 col-xs-12 col-md-4 col-sm-4 margin-service">

					<div class="col-xs-12 col-sm-3 col-md-3 col-lg-3 sinpadding topservices">
						<?php
						the_post_thumbnail('', array ('class' => 'img-responsive center-block img-board2'));
						?>
					</div>
					<div class="col-xs-12 col-sm-9 col-md-9 col-lg-9 servicios-css sinpadding">
						<p><?php the_content(); ?></p> 
					</div>

				</div>


			<?php
			endwhile;
			endif;

			wp_reset_postdata();

	?>    


</div> 

