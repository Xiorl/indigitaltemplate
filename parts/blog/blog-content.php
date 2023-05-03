<div class="content content--aside">

    <div class="wrapper">

        <div class="blog blog--content">

            <button class="btn btn--back btn--none" onClick="history.back()">Volver</button>

            <div class="blog--title" id="#blog-page">
                <h1>Blog inmobiliario</h1>
                <h2>Todas las publicaciones</h2>
            </div>
            <!-- content -->
            <div class="loop loop__content post">
                <?php

                // amount of post in the query
                $post_amount = 30;
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

            <?php 
            if( $wp_query->max_num_pages > 1 ) {
                echo '<div class="paginator-title"><p>Páginas</p></div>';
                }

                gr_pagination_nav_list();
            ?>


        </div>

        <aside class="aside">
            <div class="widget-sticky">
                <!-- Widget tags--->
                <div class="widget widget--tags">
                    <p>Etiquetas</p>
                    <div class="tags-box">
                        <!-- <a href=""><span>Mazatlán</span></a>
                        <a href=""><span>León</span></a>
                        <a href=""><span>Altata</span></a>
                        <a href=""><span>Culiacán</span></a>
                        <a href=""><span>Aguascalientes</span></a> -->

                        <?php dynamic_sidebar( 'cloud_tags' ); ?>

                    </div>
                </div>
                <!-- Widget tags end--->

                <!-- Widget contact
                <div class="widget widget--contact">
                    <figure class="logo logo--indigital">
                        <?php 
                            $logo_url = get_option('base-logo');
                            $site_name = get_bloginfo('name');
                            $description = get_bloginfo('description');
                            // logo img tag
                            echo '<img src="'. $logo_url .'" alt="'.$site_name.' - '. $description .'"/>';
                        ?>
                    </figure>
                    <p>Me interesan los desarrollos indigital</p>
                    <a href="#" class="btn btn--develop">Ir a desarrollos</a>
                </div> -->
                <!-- Widget contact end--->

                <!-- Widget social links--->
                <div class="widget widget--social-links">
                    <?php get_template_part('parts/social-links'); ?>
                </div>
                <!-- Widget social links end--->
            </div>






    </div>

    </aside>





</div>