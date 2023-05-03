<div id="breadcrumbs" class="nav nav--breadcrumbs">
    <button class="btn btn--back" onClick="history.back()">Volver</button>
    <nav id="navigation" class="nav nav--models">
    <?php 
        wp_nav_menu( 
            array( 
                'theme_location' => 'models-nav', 
                'container'      => 'ul',
                'menu_class'     => ''
            ) 
        ); 
    ?>
    </nav>
</div>