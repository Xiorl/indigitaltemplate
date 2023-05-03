<div id="properties-slider" class="slider slider--std slider--four properties-slider">
    <div class="wrapper">
        <!--title-->
        <div class="title title--module">
            <h3>Desarrollos para invertir</h3>
            <p>Mira los desarrollos de viviendas en la ciudad de tu gusto</p>
        
        <!-- navigation -->
        <nav class="nav nav--access">
            <?php
                    wp_nav_menu( 
                        array( 
                            'theme_location' => 'properties-nav', 
                            'container'      => 'ul',
                            'menu_class'     => ''
                        ) 
                    );
            ?>
        </nav>
        </div>
        <!--content-->
        <div class="slider__content">
            <ul id="slider-02">

                <?php

        // amount of post in the query
        $post_amount = 20;
        // loop query args
        $pslider_loop_args = array(
            'post_type'                   => 'desarrollos',
            'posts_per_page'              => $post_amount,
            'no_found_rows'               => true,
            'update_post_term_cache'      => false,
            'gr_upadate_thumbnail_cache'  => true,
        );
        $pslider_loop_query = new WP_Query( $pslider_loop_args );
        if ( $pslider_loop_query->have_posts() ) {
            while ( $pslider_loop_query->have_posts() ) {
                
                $pslider_loop_query->the_post();

                // print the news item
                get_template_part('parts/post-item/slider-details');
                
            }
            wp_reset_postdata();
        }
        ?>

            </ul>
            <button id="slider-02-btn-left"
                class="btn btn--left btn--arrow left__arrow icon icon--left-arrow left"></button>
            <button id="slider-02-btn-right"
                class="btn btn--right btn--arrow right__arrow icon icon--right-arrow right"></button>
        </div>

        <script>
        (function(w) {
            w.addEventListener('load', function() {
                const btn_left = document.getElementById('slider-02-btn-left'),
                    btn_right = document.getElementById('slider-02-btn-right'),
                    content = document.getElementById('slider-02');
                const content_scroll_width = content.scrollWidth;
                let content_scroll_left = content.scrollLeft;
                let scroll_pixels = 500;

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