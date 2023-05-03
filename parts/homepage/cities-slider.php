<div id="cities-slider" class="slider slider--std slider--three">
    <div class="wrapper">
        <!--title-->
        <div class="title title--module">
            <h3>Ciudades con desarrollos</h3>
            <p>Dale un vistazo a nuestras ubicaciones y encuentra el paraiso a tu alcance</p>
        </div>
        <!--content-->
        <div class="slider__content">
            <ul id="slider-01">
                <?php

            // amount of post in the query
            $post_amount = 12;
            // loop query args
            $cslider_loop_args = array(
                'post_type'                   => 'cities',
                'posts_per_page'              => $post_amount,
                'no_found_rows'               => true,
                'update_post_term_cache'      => false,
                'gr_upadate_thumbnail_cache'  => true,
            );
            $cslider_loop_query = new WP_Query( $cslider_loop_args );
            if ( $cslider_loop_query->have_posts() ) {
                while ( $cslider_loop_query->have_posts() ) {
                    
                    $cslider_loop_query->the_post();

                    // print the news item
                    get_template_part('parts/post-item/slider-simple');
                    
                }
                wp_reset_postdata();
            }
            ?>
            </ul>
            <button id="slider-01-btn-left"
                class="btn btn--left btn--arrow left__arrow icon icon--left-arrow left"></button>
            <button id="slider-01-btn-right"
                class="btn btn--right btn--arrow right__arrow icon icon--right-arrow right"></button>
        </div>

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