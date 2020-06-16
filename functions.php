<?php
/**
** activation theme
**/
add_action( 'wp_enqueue_scripts', 'theme_enqueue_styles');
function theme_enqueue_styles() {
    wp_enqueue_style( 'parent-style', get_template_directory_uri() . '/style.css' );

}

add_action( 'wp_enqueue_scripts', 'argent_enfant_enqueue_styles', 11 );
function argent_enfant_enqueue_styles() {
    wp_enqueue_style( 'child-style', get_stylesheet_uri() );
    wp_enqueue_script( 'newsticker', get_stylesheet_directory_uri() . '/js/newsticker.js', '','',true );
}