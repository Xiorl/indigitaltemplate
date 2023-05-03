<?php

// set post item variables
$post_link = get_the_permalink();
$post_title = get_the_title();
$post_excerpt = get_the_excerpt();
$post_description = get_post_meta( get_the_ID(), 'development_description_text', true );
$post_description = wp_trim_words( $post_description, 15, '...' );
// $post_description = get_post_meta( get_the_ID(), 'development_description_text', true );

// if (strlen($post_description) > 100) {
//   $post_description = substr($post_description, 0, 100) . '...';
// }

// $post_description .= '</p>';

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

// print the post item
echo '

    <li class="slide post-item post-item__details">
        <a href="'. $post_link .'">
            <figure class="media">
                <img src="'. $thumb_src .'" alt="'. $thumb_alt .'">
                <div class="cta">Ver más</div>
                <figcaption> <span class="icon icon--location"></span>'. $location_name .'</figcaption>
            </figure>
            <div class="content">
                <h3>'. $post_title .'</h3>
                <p class="excerpt">'. $post_excerpt .'</p>
                <p>'.$post_description.'</p>
                <span class="extra">'. $price_range_number .'</span>

            </div>
        </a>
    </li>

';

?>
