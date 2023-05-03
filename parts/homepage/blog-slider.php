<div class="loop blog loop--square loop--bg blue row scroll">
    <div class="wrapper">
    <!-- title -->
    <div class="title title--cta">
        <h3>Blog inmobiliario</h3>
        <a href="blog-page" class="btn btn-gray">Ver más</a>
    </div>
    <!-- content -->
    <div class="loop__content">
        <?php

        // amount of post in the query
        $post_amount = 4;
        // loop query args
        $cslider_loop_args = array(
            'post_type'                   => 'post',
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
                get_template_part('parts/post-item/blog');
                
            }
            wp_reset_postdata();
        }
        ?>
    </div>
    </div>
</div>