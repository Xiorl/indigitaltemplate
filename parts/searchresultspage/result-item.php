<?php  

// set post item variables
$post_link = get_the_permalink();
$post_title = get_the_title();

if ( has_post_thumbnail() ) {

    $thumbnail_id       = get_post_thumbnail_id();
    $thumb_url          = wp_get_attachment_image_src($thumbnail_id,'full', true);
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


$post_tags = get_the_tags();
if ( $post_tags ) {
    foreach($post_tags as $tag) {
        $tags[] = $tag->name;
    }
    $keywords = '<li>'. implode( '</li><li>', $tags ) .'</li>';  
} else {
    $keywords = '';
}
$the_excerpt = get_the_excerpt();

$location_ID = location_get_meta( 'location_city' );
$location_name = get_the_title( $location_ID );


$price_range_number = get_post_meta( get_the_ID(), 'models_price_range_number', true );

$coordinates = get_post_meta( get_the_ID(), 'models_map_text', true );

$column_name = get_post_meta( $author, 'profile_details_column-name', true );

$description_text = get_post_meta( get_the_ID(), 'models_description_text', true );

$development_id = get_post_meta( get_the_ID(), 'model_dev_model_in', true );
if ( $development_id ) {
    $development_name = get_the_title( $development_id );
    $dev_link = get_permalink($development_id );
} 
else {
    $development_name = '';
    $dev_link = '';
}

echo '
    <div class="result--development-container">
        <figure class="development__media">
            <a href="'. $post_link .'"><img src="'. $thumb_src  .'" alt=""/></a>
        </figure>
        <div class="result--development-info">
            <h2><a href="'. $post_link .'">'. $post_title .'</a></h2>
            <div class="dev--info"><a href="'. $dev_link .'">'. $development_name .'</a></div>
            <figcaption class="icon--location">'. $location_name .'</figcaption>
            <div class="description--text"><a href="'. $post_link .'">'. $description_text .'</a></div>
            <h3><a href="'. $post_link .'">'. $price_range_number .'</a></h3>
            <div class="development--division">
                <div class="development--map">
                    <iframe src="https://maps.google.com/maps?q='. $coordinates .'&z=17&output=embed"></iframe>
                </div>
                <div class="development--buttons">
                    <a href="https://web.whatsapp.com/send?phone=+'. $column_name .'" class="btn btn--whatsapp-mini"></a>
                    
                    <a href="'.$post_link.'" class="btn btn--purple">Visitar</a>
                </div>
            </div>
        </div>
    </div>
';

// <a href="'.$post_link.'" class="btn btn--whatsapp-mini"></a>

?>
