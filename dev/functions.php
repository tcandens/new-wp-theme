<?php

// Injecting styles.css
function theme_scripts() {
	wp_enqueue_style( 'style', get_stylesheet_uri() );
}

add_action( 'wp_enqueue_scripts', 'theme_scripts' );


// Enable SVG Uploading
function custom_mtypes( $m ){
    $m['svg'] = 'image/svg+xml';
    $m['svgz'] = 'image/svg+xml';
    return $m;
}
add_filter( 'upload_mimes', 'custom_mtypes' );

// Menu
function register_my_menu() {
	register_nav_menu('navigation-menu', __( 'Navigation Menu' ));
}
add_action( 'init', 'register_my_menu' );

// Featured Images - Post Thumbnails
add_theme_support( 'post-thumbnails' );

// New Image Size
if ( function_exists( 'add_image_size' ) ) {
	add_image_size( 'featured', 400, 400, false);
}

?>