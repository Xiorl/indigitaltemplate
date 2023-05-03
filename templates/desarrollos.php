<div class="wrapper">

</div>

<div class="content content--aside">

    <div class="wrapper">

        <article class="article article--developments">
            <!-- breadcrumbs -->
            <?php get_template_part('parts/breadcrumbs-dev'); ?>

            <!-- <button class="btn btn--back btn--none" onClick="history.back()">Volver</button> -->

            <div id="development-thumbnail" class="post_main_gallery models-thumbnail thumbnail">

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
                <?php get_template_part('parts/property-type');?>
            </div>

            <!-- title / name -->
            <header class="article__header">
                <?php the_title('<h1 class="title">','</h1>'); ?>
            </header>

            <!-- content -->
            <div id="development-price" class="article__content">

                <?php

                // print the development price 
                $price_range_number = get_post_meta( get_the_ID(), 'development_price_range_number', true );
                if ( $price_range_number != '' ) {
                    
                    echo '
                        <h2 id="development-price">Rangos de precio</h2>
                        <p>'.$price_range_number .'</p>
                    ';

                }

                // print the development description  
                $description_text = get_post_meta( get_the_ID(), 'development_description_text', true );
                if ( $description_text != '' ) {
                    
                    echo '
                        <h2 id="development-description">Descripción</h2>
                        <p>'. $description_text .'</p>
                    ';

                }

                // print the development features  
                $features_text = get_post_meta( get_the_ID(), 'development_features_text', true );
                if ( $features_text != '' ) {

                    echo '
                        <h2 id="development-features">Características del desarrollo</h2>
                        <p>'.$features_text .'</p>
                    ';

                }

            ?>
            </div>

            <!-- development amenities -->
            <div id="development-amenities" class="amenities">
                <h2>Amenidades</h2> 
                <?php get_template_part('parts/amenities-icons'); ?>
            </div>

            <!-- video -->
            <div id="development-video" class="article_video description-module">

            <?php
                // vars
                $video_url = get_post_meta( get_the_ID(), 'development_video_url', true );

                if (str_contains($video_url, 'youtube.com') || str_contains($video_url, 'youtu.be')) {
                    $videoID = str_replace('https://www.youtube.com/watch?v=', '', $video_url);
                    $videoID = str_replace('https://youtu.be/', '', $videoID);

                    echo '<h2>Video del desarrollo</h2>'; 

                    $videoEmbed = '<iframe src="https://www.youtube.com/embed/'. $videoID .'" title="YouTube video player" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>';
                } elseif (str_contains($video_url, 'facebook.com') || str_contains($video_url, 'fb.watch')) {
                    $videoID = str_replace('https://www.facebook.com/watch/?v=', '', $video_url);
                    echo '<h2>Video del desarrollo</h2>'; 

                    $videoEmbed = '<iframe src="https://www.facebook.com/plugins/video.php?height=314&href='.urlencode($video_url).'&show_text=false&width=560&t=0" width="560" height="314" style="border:none;overflow:hidden" scrolling="no" frameborder="0" allowfullscreen="true" allow="autoplay; clipboard-write; encrypted-media; picture-in-picture; web-share" allowFullScreen="true"></iframe>';
                }

                if (isset($videoEmbed)) {
                    echo '<div class="embed-video">'.$videoEmbed. '</div>';
                }
            ?>

            </div>

            <!-- development map -->
            <div id="development-location-map" class="location-map">

                <?php 
                    // print the development map  
                    $coordinates = get_post_meta( get_the_ID(), 'development_map_text', true );
                    if ( $coordinates != '' ) {
                    echo '
                    <h2>Ubicación</h2>
                    <iframe src="https://maps.google.com/maps?q='. $coordinates .'&z=17&output=embed"></iframe>
                    ';
                    }

                ?>

            </div>

        </article>


        <!-- side contant buttons -->
        <aside class="aside">
            <?php get_template_part('parts/widgets/widget-contact'); ?>
        </aside>

    </div>

</div>

<!-- models slider -->
<div class="loop models loop--square loop--pr purple row">

<?php
$dev_self = get_the_ID();

// amount of post in the query
$post_amount = 12;

// loop query args
$cslider_loop_args = array(
    'post_type'                   => 'modelos',
    'posts_per_page'              => $post_amount,
    'no_found_rows'               => true,
    'update_post_term_cache'      => false,
    'gr_upadate_thumbnail_cache'  => true,
    'meta_key'                    => 'model_dev_model_in',
    'meta_value'                  => $dev_self
);

$cslider_loop_query = new WP_Query( $cslider_loop_args );
$post_count = $cslider_loop_query->post_count; // get the count of posts in the query
?>
<?php if ( $post_count > 0 ) : ?>

    <div class="wrapper">
        <div id="models-slider" class="slider slider--std slider--three">

            <!--title-->
            <div class="title title--pr">
                <h3>Modelos de <?php the_title(); ?></h3>
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
                            if ($post_count > 4) {
                                // show buttons if more than 3 posts
                                echo '<button id="slider-01-btn-left" class="btn btn--left btn--arrow left__arrow icon icon--left-arrow left"></button>';
                                echo '<button id="slider-01-btn-right" class="btn btn--right btn--arrow right__arrow icon icon--right-arrow right"></button>';
                            }
                        }
                    ?>
                </div>
            </ul>
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