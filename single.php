<?php  

get_header();


// define actual post type
$post 	  = get_queried_object();
$postType = get_post_type_object( get_post_type($post ) );
if ($postType) {
    $post_type = esc_html($postType->labels->singular_name);
}

// echo $post_type;

switch ($post_type) {
    case 'Desarrollos':
        get_template_part('templates/desarrollos');
        break;
    case 'Modelo':
        get_template_part('templates/modelos');
        break;
    case 'Ciudades':
        get_template_part('templates/cities');
        break;
        
    
    default:
        get_template_part('templates/article');
        break;
}


get_footer();

?>