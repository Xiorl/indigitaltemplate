<?php

// remove language from login screen
add_filter( 'login_display_language_dropdown', '__return_false' );
// add new style sheet
function gr_custom_login_stylesheet() {
    wp_enqueue_style( 'custom-login', get_stylesheet_directory_uri() . '/login/login-styles.css' );
}
add_action( 'login_enqueue_scripts', 'gr_custom_login_stylesheet' );