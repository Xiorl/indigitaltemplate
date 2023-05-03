<?php

// set post item variables
$post_link = get_the_permalink();
$title = get_the_title();
$post_excerpt = get_the_excerpt();
$description_text = get_post_meta( get_the_ID(), 'development_description_text', true );

if ( has_post_thumbnail() ) {

    $thumbnail_id       = get_post_thumbnail_id();
    $thumb_url          = wp_get_attachment_image_src($thumbnail_id,'', true);
    $thumb_src          = $thumb_url [0];
    $thumb_width        = $thumb_url [1];
    $thumb_height       = $thumb_url [2];
    $thumb_description  = get_post(get_post_thumbnail_id())->post_excerpt;
    $thumb_author       = get_post(get_post_thumbnail_id())->post_content;
    $thumb_alt          = get_post_meta($thumbnail_id, '_wp_attachment_image_alt', true);

    if ( $thumb_alt == '') {
        $thumb_alt = get_post(get_post_thumbnail_id())->post_title;
    }

} else {

    $thumb_src          = get_bloginfo('template_url') .'/assets/images/default-thumbnail.jpg';
    $thumb_alt          = get_bloginfo('name') .' | '. get_bloginfo('description');
    $thumb_width        = '960';
    $thumb_height       = '560';

}

$price_range_number = get_post_meta( get_the_ID(), 'development_price_range_number', true );

$location_ID = location_get_meta( 'location_city' );
$location_name = get_the_title( $location_ID );
//$post_thumbnail = the_post_thumbnail();

echo '

    <div class="dev--container">
    <figure class="dev--image">
        <a href="'.$post_link.'"><img src="'. $thumb_src .'" alt="'. $thumb_alt .'"></a>
    </figure>
        <div class="dev--info">
            <a href="'.$post_link.'"><h2>'. $title .'</h2></a>
            <p class="dev--location">
            <span class="icon icon--location"></span>
            '. $location_name .'
            </p>
            <p>'. $description_text .'</p>
            <h4>'. $price_range_number .'</h4>
            <div class="">
                <div class="dev--map">
                    <!--- MAPS --->
                </div>
                <div class="dev--buttons">
                    <a href="'.$post_link.'" class="btn btn--purple">Visitar</a>
                </div>
            </div>
        </div>
    </div>
 
';


?>