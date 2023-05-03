<div class="author author--main">
    <div class="wrapper">

        <button class="btn btn--back" onClick="history.back()">Volver</button>

        <div class="author author--container">
            <div class="author author--content">
                <figure class="author--media">
                    <img src="<?php echo get_post_meta( get_the_ID(), 'profile_details_avatar', true );  ?>" alt="">
                </figure>
                <div class="author author--info">
                    <h1>
                        <?php $author_id = author_get_meta( 'author_author_01' );
                            $name = get_the_title($author_id); 
                            echo $name;
                        ?>
                    </h1>
                    <h2>
                        <?php $column_name = get_post_meta( get_the_ID(), 'profile_details_column-name', true );                  
                            echo $column_name;
                        ?>
                    </h2>
                    <p>
                        <?php $bio = get_post_meta( get_the_ID(), 'profile_details_bio', true );
                            echo $bio;
                        ?>
                    </p>
                    <div class="author author-social-links">
                        <?php get_template_part('parts/authorpage/author-social-links') ;?>
                    </div>

        
                </div>
            </div>
            <div class="divisor"></div>
            <div class="author author--title">
                <p>Participaciones en el Blog inmobiliario</p>
            </div>
            <div class="author author--articles">
                <?php 
                    //    get_template_part( 'parts/post-item/slider-article' );
                    //    get_template_part( 'parts/post-item/slider-article' );
                    //    get_template_part( 'parts/post-item/slider-article' );
                    //    get_template_part( 'parts/post-item/slider-article' );
                    //    get_template_part( 'parts/post-item/slider-article' );
                    //    get_template_part( 'parts/post-item/slider-article' );
            ?>

            <!-- content -->
            <div class="loop loop__content post author">
                <?php

                $author_ID = get_the_ID();

                $paged = ( get_query_var( 'paged' ) ) ? get_query_var( 'paged' ) : 1;

                $args = array(
                    'post_type' => array('post', 'opinion'),
                    'posts_per_page' => 10,
                    'paged' => $paged,
                    'meta_key' => 'author_author_01',
                    'meta_value' => $author_ID
                );

                $custom_query = new WP_Query( $args );

                while($custom_query->have_posts()) :
                $custom_query->the_post();

                get_template_part('parts/post-item/blog');

                endwhile;
                wp_reset_postdata();

                ?>
            </div>

            </div>

            

        </div>

    </div>

</div>