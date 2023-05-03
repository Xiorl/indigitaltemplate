<?php

// set post item variables
$post_link = get_the_permalink();
$post_title = get_the_title();

if ( has_post_thumbnail() ) {

	$thumbnail_id 	    = get_post_thumbnail_id();
	$thumb_url 			= wp_get_attachment_image_src($thumbnail_id,'full', true);
	$thumb_src			= $thumb_url [0];
	$thumb_width		= $thumb_url [1];
	$thumb_height		= $thumb_url [2];
	$thumb_description	= get_post(get_post_thumbnail_id())->post_excerpt;
	$thumb_author		= get_post(get_post_thumbnail_id())->post_content;
	$thumb_alt 			= get_post_meta($thumbnail_id, '_wp_attachment_image_alt', true);

	if ( $thumb_alt == '') {
		$thumb_alt = get_post(get_post_thumbnail_id())->post_title;
	}

} else {

	$thumb_src 			= get_bloginfo('template_url') .'/assets/images/default-thumbnail.jpg';
	$thumb_alt 			= get_bloginfo('name') .' | '. get_bloginfo('description');
	$thumb_width 		= '960';
	$thumb_height 		= '560';

}

// print the post item
echo '

	<li class="slide post-item post-item__square">
		<a href="'. $post_link .'">
			<figure class="media">
				<img src="'. $thumb_src .'" alt="'. $thumb_alt .'">
				<div class="cta">Ver más</div>	
			</figure>
			<div class="content">
				<p>'. $post_title .'</p>
			</div>
		</a>
	</li>

';

?>