<div class="content content--aside">

    <div class="wrapper">

        <article class="article article--developments">

            <!-- back button -->
            <button class="btn btn--back btn--none" onClick="history.back()">Volver</button>
            <!-- main title -->
            <header class="article__header">
                <?php the_title('<h1 class="title">','</h1>'); ?>
            </header>
            <!-- thumbnail -->
            <figure id="development-thumbnail" class="article__thumbnail section__thumbnail">
                <?php the_post_thumbnail(); ?>
            </figure>

            <p>Te mostramos los desarrollos existentes en <?php the_title(); ?></p>
            <!-- loop for developents -->
            <div class="loop loop__content">
                <?php

                $cities_self = get_the_ID();
                // amount of post in the query
                $post_amount = 10;
                // loop query args
                $opinion_loop_args = array(
                    'post_type'                   => 'desarrollos',
                    'posts_per_page'              => $post_amount,
                    'no_found_rows'               => true,
                    'update_post_term_cache'      => false,
                    'gr_upadate_thumbnail_cache'  => true,

                    'meta_key' => 'location_city',
                    'meta_value' => $cities_self
                );
                $opinion_loop_query = new WP_Query( $opinion_loop_args );
                if ( $opinion_loop_query->have_posts() ) {
                    while ( $opinion_loop_query->have_posts() ) {

                        $opinion_loop_query->the_post();
                        // print the news item
                        get_template_part('parts/post-item/devs');
                    }
                    wp_reset_postdata();
                }

                ?>
            </div>

        </article>


    </div>

</div>

<div class="loop blog loop--square loop--bg blue solid row <?php echo $reference ?>">
    <div class="wrapper">

    <div class="title title--cta">
        <h3>Publicaciones recientes</h3>
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