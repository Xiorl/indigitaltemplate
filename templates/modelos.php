<!-- post content -->

<div class="wrapper">

</div>

<div class="content content--aside">

    <div class="wrapper">


        <article class="article article--models">
            <!-- breadcrumbs -->
            <?php get_template_part('parts/breadcrumbs'); ?>

            <!-- thumbnail -->
            <div id="models-thumbnail" class="post_main_gallery models-thumbnail thumbnail">

                <?php

            $code = custom_gallery_get_meta( 'custom_gallery_code' );
            $gallery_code = '[envira-gallery id="'. $code .'"]';
            // print the gallery
            if ( $code == '' ) {
                the_post_thumbnail();
            } else {
                echo do_shortcode( $gallery_code );
            }

            ?>

            </div>
            <!-- location -->
            <div class="location">
                <?php

            $location_ID = location_get_meta( 'location_city' );
            $location_name = get_the_title( $location_ID );

            // print the location
            if ( $location_name != '' ) {

                echo '
                    <p>
                    <span class="icon icon--location"></span>
                    '. $location_name .'
                    </p>
            ';

            }

            ?>
            </div>

            <div class="article--type">
                <?php get_template_part('parts/property-type');
                ?>
            </div>

            
            <!-- title / name -->
            <header class="article__header">
                <?php 
                    echo '<div class="title--dev">';
                    the_title('<h1 class="title">','</h1>');
                    $dev_ID = model_dev_get_meta( 'model_dev_model_in' );
                    $dev_title = get_the_title($dev_ID); 
                    $dev_link = get_the_permalink($dev_ID);
                    echo '<a href='.$dev_link.'>'.$dev_title.'</a></div>'
                ?>
            </header>
            
            <!-- price -->
            <div id="models-price" class="article__price description-module">
                <?php 

            $price_range_number = get_post_meta( get_the_ID(), 'models_price_range_number', true );

                // print the price 
                if ( $price_range_number != '' ) {
                            
                    echo '
                    <h4>Precio</h4>
                    <h2 class="price">
                        <p>'.$price_range_number .'</p>
                    </h2>
                    ';

                }
            ?>

            </div>
            <!-- details -->
            <div class="article_details description-module">
                <h4 id="models-details">Detalles</h4>
                <?php get_template_part('parts/property-quantity-details'); ?>

            </div>
            <!-- description -->
            <div id="models-description" class="article_description description-module">

                <?php 
                $description = get_post_meta( get_the_ID(), 'models_description_text', true ); 
                    // print the details
                    if ($description != '' ) {
                        echo '
                        <h4 id="models-details">Descripción</h4>
                        '.$description.'
                        ';
                    }
                ?>

            </div>
            <!-- more details -->
            <div id="models-more-details" class="article_more-details description-module">
                <h4 id="models-details">Más detalles</h4>
                <?php get_template_part('parts/details-icons'); ?>
            </div>

            <!-- development amenities -->
            <div id="development-amenities" class="amenities">

                <?php 
                    $dev_ID = model_dev_get_meta( 'model_dev_model_in' );
                    $dev_title = get_the_title($dev_ID); 
                ?>
                <h2>Amenidades de <?php echo $dev_title; ?></h2> 
                <?php 
                $development_id = model_dev_get_meta( 'model_dev_model_in' );
                get_template_part('parts/amenities-icons', null, array('development_id' => $development_id));
                
                ?>
            </div>
            <!-- video -->

            <div id="models-video" class="article_video description-module">
                <!-- <h4 id="models-details">Video del modelo</h4> -->

    	   <?php
                // vars
                $video_url = get_post_meta( get_the_ID(), 'models_video_url', true );

                if (str_contains($video_url, 'youtube.com') || str_contains($video_url, 'youtu.be')) {
                    $videoID = str_replace('https://www.youtube.com/watch?v=', '', $video_url);
                    $videoID = str_replace('https://youtu.be/', '', $videoID);

                    echo '<h2>Video del modelo</h2>'; 

                    $videoEmbed = '<iframe src="https://www.youtube.com/embed/'. $videoID .'" title="YouTube video player" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>';
                } elseif (str_contains($video_url, 'facebook.com') || str_contains($video_url, 'fb.watch')) {
                    $videoID = str_replace('https://www.facebook.com/watch/?v=', '', $video_url);
                    echo '<h2>Video del modelo</h2>'; 

                    $videoEmbed = '<iframe src="https://www.facebook.com/plugins/video.php?height=314&href='.urlencode($video_url).'&show_text=false&width=560&t=0" width="560" height="314" style="border:none;overflow:hidden" scrolling="no" frameborder="0" allowfullscreen="true" allow="autoplay; clipboard-write; encrypted-media; picture-in-picture; web-share" allowFullScreen="true"></iframe>';
                }

                if (isset($videoEmbed)) {
                    echo '<div class="embed-video">'.$videoEmbed. '</div>';
                }
            ?>

            </div>

            <!-- models map -->
            <div id="models-location-map" class="location-map">

                <?php 
                    // print the development map  
                    $coordinates = get_post_meta( get_the_ID(), 'models_map_text', true );
                    if ( $coordinates != '' ) {
                    echo '
                    <h2>Ubicación</h2>
                    <iframe src="https://maps.google.com/maps?q='. $coordinates .'&z=17&output=embed"></iframe>
                    ';
                    }

                ?>

            </div>


        </article>

        <aside class="aside">
            <?php get_template_part('parts/widgets/widget-contact'); ?>
        </aside>

    </div>

</div>



<!-- models slider -->
<div class="loop models loop--square loop--pr purple row">

<?php
$model_self = get_the_ID();
// amount of post in the query
$post_amount = 15;
// loop query args
$cslider_loop_args = array(
    'post_type'                   => 'modelos',
    'posts_per_page'              => $post_amount,
    'no_found_rows'               => true,
    'update_post_term_cache'      => false,
    'gr_upadate_thumbnail_cache'  => true,

    'meta_key' => 'model_dev_model_in',
    'meta_value' => $dev_ID,
    'post__not_in'   => array($model_self),
);
$cslider_loop_query = new WP_Query( $cslider_loop_args );
$post_count = $cslider_loop_query->post_count; // get the count of posts in the query
?>

<?php if ( $post_count > 0 ) : ?>
   

<div class="wrapper">
    <div id="models-slider" class="slider slider--std slider--three">

        <!--title-->
        <div class="title title--pr">
            <?php
                $dev_ID = model_dev_get_meta( 'model_dev_model_in' );
                $dev_title = get_the_title($dev_ID);
            ?>
            <h3>Otros modelos de <?php echo $dev_title; ?></h3>
            <p>Encuentra el modelo de vivienda que más se ajuste a lo que estés buscando</p>
        </div>
        <!--content-->
        <div class="slider__content">
        <ul>
            <div id="slider-01" class="loop__content models">
                <?php
                    if ( $cslider_loop_query->have_posts() ) {
                        while ( $cslider_loop_query->have_posts() ) {
                            $cslider_loop_query->the_post();

                            // print the models item
                            get_template_part('parts/post-item/blog');

                            $post_count++; // increment post count
                        }
                        wp_reset_postdata();
                        $post_count = $cslider_loop_query->post_count; 
                        if ($post_count > 3) {
                            // show buttons if more than 3 posts
                            echo '<button id="slider-01-btn-left" class="btn btn--left btn--arrow left__arrow icon icon--left-arrow left"></button>';
                            echo '<button id="slider-01-btn-right" class="btn btn--right btn--arrow right__arrow icon icon--right-arrow right"></button>';
                        }
                    }
                ?>
            </div>

        </ul>
    </div>
</div>

<?php endif; ?>

            <script>
            (function(w) {
                w.addEventListener('load', function() {
                    const btn_left = document.getElementById('slider-01-btn-left'),
                        btn_right = document.getElementById('slider-01-btn-right'),
                        content = document.getElementById('slider-01');
                    const content_scroll_width = content.scrollWidth;
                    let content_scroll_left = content.scrollLeft;
                    let scroll_pixels = 400;

                    btn_right.addEventListener('click', () => {
                        content_scroll_left = content.scrollLeft + scroll_pixels;
                        if (content_scroll_left >= content_scroll_width) {
                            content_scroll_left = content_scroll_width;
                        }
                        content.scrollTo({
                            left: content_scroll_left,
                            behavior: 'smooth'
                        });
                    });

                    btn_left.addEventListener('click', () => {
                        content_scroll_left = content.scrollLeft - scroll_pixels;
                        if (content_scroll_left <= 0) {
                            content_scroll_left = 0;
                        }
                        content.scrollTo({
                            left: content_scroll_left,
                            behavior: 'smooth'
                        });
                    });
                });
            })(window);
            </script>


        </div>
    </div>
</div>


