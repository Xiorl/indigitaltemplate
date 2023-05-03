<?php  
// Template name: Policy
get_header();

?>
<div class="wrapper">
        <article class="article">

            <button class="btn btn--back btn--none" onClick="history.back()">Volver</button>

            <header class="article__header">
                <?php the_title('<h1 class="title">','</h1>'); ?>
            </header>

            <div class="article__content">
                <?php the_content(); ?>
            </div>

        </article>

</div>

<?php 

get_footer();

?>