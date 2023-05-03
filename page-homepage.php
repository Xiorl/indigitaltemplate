<?php  
// Template name: Homepage
get_header();

// masthead
get_template_part('parts/homepage/masthead');
// cities slider/loop
get_template_part('parts/homepage/cities-slider');
// propieties slider/loop
get_template_part('parts/homepage/properties-slider');
// blog slider/loop
get_template_part('parts/homepage/blog-slider');

get_footer();

?>