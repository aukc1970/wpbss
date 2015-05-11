<?php



function bootstrap_load_ss() {

	wp_enqueue_style( 'bootstrap', get_template_directory_uri() . '/inc/bootstrap/bootstrap.min.css' );

	wp_enqueue_style( 'bootstrap-theme', get_template_directory_uri() . '/inc/bootstrap/bootstrap-theme.min.css' );

    wp_enqueue_script( 'bootstrap', get_template_directory_uri() . '/inc/bootstrap/bootstrap.min.js', array('jquery'), '', true );
}
add_action( 'wp_enqueue_scripts', 'bootstrap_load_ss' );
