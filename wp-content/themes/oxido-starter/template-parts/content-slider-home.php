

<?php
$slides = array(); 
$args = array( 'cat' => 5, 'nopaging'=>true, 'posts_per_page'=>6 );
$slider_query = new WP_Query( $args );
if ( $slider_query->have_posts() ) {
    while ( $slider_query->have_posts() ) {
        $slider_query->the_post();
        if(has_post_thumbnail()){
            $temp = array();
            $thumb_id = get_post_thumbnail_id();
            $thumb_url_array = wp_get_attachment_image_src($thumb_id, '', true);
            $thumb_url = $thumb_url_array[0];
            $temp['title'] = get_the_title();
            $temp['excerpt'] = get_the_excerpt();
            $temp['content'] = get_the_content();
            $temp['image'] = $thumb_url;
            $slides[] = $temp;
        }
    }
} 
wp_reset_postdata();
?>

<?php if(count($slides) > 0) { ?>

<div id="carousel-example-generic" class="carousel slide" data-ride="carousel">
    
    <ol class="carousel-indicators">
        <?php for($i=0;$i<count($slides);$i++) { ?>
        <li data-target="#carousel-example-generic" data-slide-to="<?php echo $i ?>" <?php if($i==0) { ?>class="active"<?php } ?>></li>
        <?php } ?>
    </ol>

    <div class="carousel-inner" role="listbox">
        <?php $i=0; foreach($slides as $slide) { extract($slide); ?>
        <div class="item <?php if($i == 0) { ?>active<?php } ?>">
            
            <?php
            if (get_the_title() == "Logo Inicio" ) {
      
              the_post_thumbnail('', array ('class' => 'img-responsive center-block img-50')); 
            } ?>

            <div class="actions btn-inicio">
              <a href="#quienes" class="btn-get-started">Get Strated</a>
              <!-- <a href="#services" class="btn-services">Our Services</a> -->
            </div>
            <!-- <div class="carousel-caption">
                <h3><?php echo $title; ?></h3>
                <p><?php echo $content; ?></p>
            </div> -->
                
            <div class="imgsliderhome" style="background-image:url('<?php echo $image ?>');"></div>
        </div>
        <?php $i++; } ?>
    </div>

    <a class="left carousel-control" href="#carousel-example-generic" role="button" data-slide="prev"><span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span><span class="sr-only">Previous</span></a>
    <a class="right carousel-control" href="#carousel-example-generic" role="button" data-slide="next"><span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span><span class="sr-only">Next</span></a>

    <div id="quienes"></div>

</div>

<?php } ?>

