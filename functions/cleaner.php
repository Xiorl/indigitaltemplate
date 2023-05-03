<?php

// Remove all unused head tags and styles for best performance an avoid conflicts
function gr_remove_head_tags() {

	// rRmove admin bar
	add_filter('show_admin_bar', '__return_false');

	// Remove EditURI and wlwmanifest
	remove_action('wp_head', 'rsd_link');
	remove_action('wp_head', 'wlwmanifest_link');

	// Remove meta generators tags for securiry
	remove_action( 'wp_head', 'wp_generator' );

	// Remove Rest API from head
	remove_action( 'wp_head', 'rest_output_link_wp_head', 10 );
	remove_action( 'wp_head', 'wp_oembed_add_discovery_links', 10 );

	// DNS prefect
	remove_action( 'wp_head', 'wp_resource_hints', 2 );

	// Shortlink
	add_filter('after_setup_theme', 'gomaya_remove_shortlink');
	remove_action('wp_head', 'wp_shortlink_wp_head', 10);
	remove_action( 'template_redirect', 'wp_shortlink_header', 11);

	// Alternate
	remove_action('wp_head', 'feed_links_extra', 3 );

	// Base canonical
	remove_action('wp_head', 'rel_canonical');

	// Disable emojis
	remove_action( 'wp_head', 'print_emoji_detection_script', 7 );
	remove_action( 'wp_print_styles', 'print_emoji_styles' );

	if ( is_array( $plugins ) ) {
		return array_diff( $plugins, array( 'wpemoji' ) );
	} else {
		return array();
	}

	if ( 'dns-prefetch' == $relation_type ) {
		$emoji_svg_url = apply_filters( 'emoji_svg_url', 'https://s.w.org/images/core/emoji/2/svg/' );

		$urls = array_diff( $urls, array( $emoji_svg_url ) );
	}
	return $urls;

}
add_action('init', 'gr_remove_head_tags');


// Remove Styles added in enqueue steep
function gr_remove_unused_enquee_elements () {

	// Remove guttemberg styles
	wp_dequeue_style( 'wp-block-library' );
	wp_dequeue_style( 'wp-block-library-theme' );
	wp_dequeue_style( 'wc-blocks-style' );

	// Remove global inline WP styles
	wp_dequeue_style( 'global-styles' );

} 
add_action( 'wp_enqueue_scripts', 'gr_remove_unused_enquee_elements', 100 );
