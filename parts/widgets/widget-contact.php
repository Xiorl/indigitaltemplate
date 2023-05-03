<?php

// vars
$logo_url    = get_option( 'base-logo' );
if ( $logo_url == '' ) {
    $logo_url = get_bloginfo('template_url') .'/assets/images/logo.png';
}
$site_name   = get_bloginfo( 'name' );
$description = get_bloginfo(' description' );

$author = author_get_meta( 'author_author_01' );

$email = get_post_meta( $author, 'profile_details_email', true );
$column_name = get_post_meta( $author, 'profile_details_column-name', true );



echo '
    <div class="widget widget--contact widget-sticky">
        <figure class="logo logo--indigital">
            <img src="'. $logo_url .'" alt="'. $site_name.' - '. $description .'"/>
        </figure>
        <p class="on--desktop">Para saber más acerca de esta propiedad</p>
        <a href="tel:'. $column_name .'" class="btn btn--phone on--mobile">Contactar con un asesor</a>
        <a href="https://wa.me/'. $column_name .'" class="btn btn--whatsapp">Contactar por whatsapp</a>
    </div> 

';

?>