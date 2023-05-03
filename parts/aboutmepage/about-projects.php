<div class="about-projects">
    <div class="wrapper">
         <!--title-->
         <div class="title title--projects">
            <h2>Cartera de proyectos de Indigital</h2>
        </div>
        <!--content-->
        <div class="loop loop--projects-logos">
            <?php

            $dev_self = get_the_ID();


            // amount of post in the query
            $post_amount = 30;
            // loop query args
            $cslider_loop_args = array(
                'post_type'                   => 'desarrollos',
                'posts_per_page'              => $post_amount,
                'no_found_rows'               => true,
                'update_post_term_cache'      => false,
                'gr_upadate_thumbnail_cache'  => true,
            );
            $cslider_loop_query = new WP_Query( $cslider_loop_args );
            if ( $cslider_loop_query->have_posts() ) {
                while ( $cslider_loop_query->have_posts() ) {
                    
                    $cslider_loop_query->the_post();

                    // print the models item
                    get_template_part('parts/post-item/logos');
                    
                }
                wp_reset_postdata();
            }
            ?>
        </div>
       
    </div>
</div>