<div class="wrapper">

    <div class="search--results">
        <div class="search--results-number">
            <p>Resultados para tu búsqueda</p>
        </div>
      
        <?php //get_template_part('parts/post-item/blog'); ?>

       
        <?php  

        while (have_posts()) : the_post();

            get_template_part('parts/searchresultspage/result-item');

        endwhile;

    
        if( $wp_query->max_num_pages > 1 ) {
            echo '<div class="paginator-title"><p>Páginas</p></div>';
        }

        gr_pagination_nav_list();

        ?>
    
    </div>

</div>