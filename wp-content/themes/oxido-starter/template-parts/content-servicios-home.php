<div class="col-lg-12">
        <?php
                $argsServiciosHome = array(
                  'cat' => 6,
                  'type' => 'post',
                  'posts_per_page' => 3,
                );


                query_posts($argsServiciosHome);

                $ultimaServiciosHome = new WP_Query($argsServiciosHome);
                if ( $ultimaServiciosHome->have_posts() ):

                  while($ultimaServiciosHome->have_posts() ): $ultimaServiciosHome->the_post(); ?>

                <?php if (get_the_title() =="Nosotros") { ?>

                     
                <div class="col-lg-4 hidden-xs hidden-sm hidden-md">
                    <div class="portafolio-container">
                        <section class="portafolio-item">
                            <a href="<?php the_permalink(); ?>" style="text-decoration: none !important;
    color: #fff !important;">
                            <?php the_post_thumbnail('img-servicio-home', array('class' => 'img-responsive portafolio-img')); ?>
                            <section class="portafolio-text">
                                <h2><?php the_title(); ?></h2>
                                <p><?php the_content(); ?></p>
                            </a>
                            </section>
                        </section>  
                    </div>
                </div>

                <div class="col-xs-12 col-md-4 col-sm-4 hidden-lg">
                    <div class="portafolio-container">
                        <section class="portafolio-item text">
                            <a href="<?php the_permalink(); ?>" style="text-decoration: none !important;
    color: #fff !important;">
                            <?php the_post_thumbnail('img-servicio-home', array('class' => 'img-responsive portafolio-img')); ?>
                            <section class="portafolio-text-mobile">
                                <h2><?php the_title(); ?></h2>
                                <p><?php the_content(); ?></p>
                            </a>
                            </section>
                        </section>  
                    </div>
                </div>

                <?php } elseif (get_the_title() == "Servicios") { ?>

                <div class="col-lg-4 hidden-xs hidden-sm hidden-md">
                    <div class="portafolio-container">
                        <section class="portafolio-item">
                            <a href="<?php the_permalink(); ?>" style="text-decoration: none !important;
    color: #fff !important;">
                            <?php the_post_thumbnail('img-servicio-home', array('class' => 'img-responsive portafolio-img')); ?>
                            <section class="portafolio-text">
                                <h2><?php the_title(); ?></h2>
                                <p><?php the_content(); ?></p>
                            </a>
                            </section>
                        </section>  
                    </div>
                </div>

                <div class="col-xs-12 col-md-4 col-sm-4 hidden-lg">
                    <div class="portafolio-container">
                        <section class="portafolio-item text">
                            <a href="<?php the_permalink(); ?>" style="text-decoration: none !important;
    color: #fff !important;">
                            <?php the_post_thumbnail('img-servicio-home', array('class' => 'img-responsive portafolio-img')); ?>
                            <section class="portafolio-text-mobile">
                                <h2><?php the_title(); ?></h2>
                                <p><?php the_content(); ?></p>
                            </a>
                            </section>
                        </section>  
                    </div>
                </div>


                <?php } else { ?>

                <div class="col-lg-4 hidden-xs hidden-sm hidden-md">
                    <div class="portafolio-container">
                        <section class="portafolio-item">
                            <a href="#" style="text-decoration: none !important;
    color: #fff !important;">
                            <?php the_post_thumbnail('img-servicio-home', array('class' => 'img-responsive portafolio-img')); ?>
                            <section class="portafolio-text">
                                <h2><?php the_title(); ?></h2>
                                <p><?php the_content(); ?></p>
                            </a>
                            </section>
                        </section>  
                    </div>
                </div>

                <div class="col-xs-12 col-md-4 col-sm-4 hidden-lg">
                    <div class="portafolio-container">
                        <section class="portafolio-item text">
                            <a href="#" style="text-decoration: none !important;
    color: #fff !important;">
                            <?php the_post_thumbnail('img-servicio-home', array('class' => 'img-responsive portafolio-img')); ?>
                            <section class="portafolio-text-mobile">
                                <h2><?php the_title(); ?></h2>
                                <p><?php the_content(); ?></p>
                            </a>
                            </section>
                        </section>  
                    </div>
                </div>


                    


                <?php } ?>
                <?php endwhile; ?>

                <?php endif;
                wp_reset_postdata();

        ?>
</div>
