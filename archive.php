<?php get_header(); ?>

<div class="content content--aside">

    <div class="wrapper">

        <div class="blog blog--content">

            <button class="btn btn--back btn--none" onClick="history.back()">Volver</button>

            <div class="blog--title">
                <h1> Blog inmobiliario</h1>
                <div class="single--tag">
            
                        <?php 

                        $tag_name = single_tag_title();
                
                      
                        // echo $tag_id;
                        ?>

                </div>
            </div>
            <!-- content -->
            <div class="loop loop__content post">
                <?php

                while (have_posts()) : the_post();

				// print the news item
				get_template_part('parts/post-item/blog');

				endwhile;

                gr_pagination_nav_list();

                ?>
            </div>
    
           

        </div>

        <aside class="aside">
            <div class="widget-sticky">
                <!-- Widget tags--->
                <div class="widget widget--tags">
                    <p>Etiquetas</p>
                    <div class="tags-box">

                        <?php dynamic_sidebar( 'cloud_tags' ); ?>

                    </div>
                </div>
                <!-- Widget tags end--->

                <!-- Widget contact--
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
                    <?php get_template_part('parts/social-links'); ?>
                </div>
                <!-- Widget social links end--->
            </div>
 
    </div>
    </aside>

 
</div>

<?php get_footer(); ?>