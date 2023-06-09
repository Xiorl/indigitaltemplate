<?php

// metabox to associate models with a development 


/**
 * Generated by the WordPress Meta Box generator
 * at http://jeremyhixon.com/tool/wordpress-meta-box-generator/
 */

function model_dev_get_meta( $value ) {
	global $post;

	$field = get_post_meta( $post->ID, $value, true );
	if ( ! empty( $field ) ) {
		return is_array( $field ) ? stripslashes_deep( $field ) : stripslashes( wp_kses_decode_entities( $field ) );
	} else {
		return false;
	}
}

function model_dev_add_meta_box() {
	add_meta_box(
		'model_dev-model-dev',
		__( 'model_dev', 'model_dev' ),
		'model_dev_html',
		'modelos',
		'side',
		'default'
	);
}
add_action( 'add_meta_boxes', 'model_dev_add_meta_box' );

function model_dev_html( $post) {
	wp_nonce_field( '_model_dev_nonce', 'model_dev_nonce' ); 

	// lang vars
	$lang = get_bloginfo('language');
	if ($lang == 'en-US') {
		$blank_value = 'Set the development';
	} else {
		$blank_value = 'Seleccione el desarrollo';
	}

	// default values
	$default_01 = model_dev_get_meta( 'model_dev_model_in' );

	// query args
	$args = array('post_type' => 'desarrollos', 'posts_per_page' => 110);

	// select field
	echo '<select name="model_dev_model_in" id="model_dev_model_in" style="width: 100%; margin-bottom: 10px;">';

		echo '<option value="null">'. $blank_value .'</option>';
		// start loop for city names
		$pages = get_posts( $args );
		foreach ( $pages as $page ) : setup_postdata( $page );
		// values
		$city_name = $page->post_title;
		$city_ID   = $page->ID;

		if ( $city_ID == $default_01 ) {
			echo '<option value="'. $city_ID .'" selected>'. $city_name .'</option>';
		} else {
			echo '<option value="'. $city_ID .'">'. $city_name .'</option>';
		}

		endforeach; 
	    wp_reset_postdata();

	echo '</select>';

}

function model_dev_save( $post_id ) {
	if ( defined( 'DOING_AUTOSAVE' ) && DOING_AUTOSAVE ) return;
	if ( ! isset( $_POST['model_dev_nonce'] ) || ! wp_verify_nonce( $_POST['model_dev_nonce'], '_model_dev_nonce' ) ) return;
	if ( ! current_user_can( 'edit_post', $post_id ) ) return;

	if ( isset( $_POST['model_dev_model_in'] ) )
		update_post_meta( $post_id, 'model_dev_model_in', esc_attr( $_POST['model_dev_model_in'] ) );
}
add_action( 'save_post', 'model_dev_save' );

/*
	Usage: model_dev_get_meta( 'model_dev_model_in' )
*/

?>