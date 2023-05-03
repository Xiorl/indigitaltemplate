<div class="content content--aside">

    <div class="wrapper">
        <article class="article article--blog">

            <button class="btn btn--back btn--none" onClick="history.back()">Volver</button>

            <header class="article__header">
                <?php the_title('<h1 class="title">','</h1>'); ?>
                <?php
                // $tags = get_tags();
                // $html = '<div class="tag--box">';
                // foreach ( $tags as $tag ) {
                //     $tag_link = get_tag_link( $tag->term_id );
                
                //     $html .= "<a href='{$tag_link}' title='{$tag->name} Tag' >";
                //     $html .= "{$tag->name}</a>";
                // }
                // $html .= '</div>';
                // echo $html;

                $tags = get_the_tags();
                echo '<div class="single--tag">';
                foreach ($tags as $tag)
                {
                    echo '<p>' . $tag->name . '</p>';
                }
                echo '</div>';


            ?>
            
            </header>

            <figure class="article__thumbnail">
                <?php the_post_thumbnail(); ?>
            </figure>
            


            <div class="article__info">
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

                <?php $author_id = author_get_meta( 'author_author_01' );
                            $name = get_the_title($author_id); 
                            $author_link = get_the_permalink($author_id);
                            
                ?>
                <p>Publicado el <span class="entry-date"><?php echo get_the_date( 'j F, Y' ); ?></span> por <a href="<?php echo $author_link ?>"><span><?php echo $name; ?></span></a></p>
            </div>

            <div class="article__content">
                <?php the_content(); ?>
            </div>


        </article>

        <aside class="aside">
            <div class="widget-sticky">
                <!-- Widget tags --->
                <div class="widget widget--tags">
                    <p>Etiquetas</p>
                    <div class="tags-box">

                    <!-- --->
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

                </div>
                <!-- Widget contact end--->

                <!-- Widget social links--->
                <div class="widget widget--social-links">

                    <?php    
                  
                        $email = get_post_meta( $author_id, 'profile_details_email', true );
                        $facebook = get_post_meta($author_id, 'profile_details_facebook', true );
                        $twitter = get_post_meta( $author_id, 'profile_details_twitter', true );
                        $instagram = get_post_meta( $author_id, 'profile_details_instagram', true );
                        $web = get_post_meta( $author_id, 'profile_details_web', true );
                        
                        
                        echo '
                            <nav class="nav nav--author-social-links">
                            <ul>
                        ';
                        
                        if ($email != '') {
                            echo '<li><a href="mailto:'. $email .'" class="icon icon--email"></a></li>';
                        }
                        if ($facebook != '') {
                            echo '<li><a href="'. $facebook .'" class="icon icon--facebook"></a></li>';
                        }
                        if ($twitter != '') {
                            echo '<li><a href="'. $twitter .'" class="icon icon--twitter"></a></li>';
                        }
                        if ($instagram != '') {
                            echo '<li><a href="'. $instagram .'" class="icon icon--instagram"></a></li>';
                        }
                        if ($web != '') {
                            echo '<li><a href="'. $web .'" class="icon icon--web"></a></li>';
                        }
                        
                        
                        echo '
                            </ul>
                            </nav>
                        ';     

                    ?>

                    
                </div>
                <!-- Widget social links end--->

            </div>
        </aside>
    </div>

</div>


<?php

if (is_single()) {
    $reference = 'article';
}

?>


<div class="loop blog loop--square loop--bg blue row <?php echo $reference ?>">
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