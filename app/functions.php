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

?>