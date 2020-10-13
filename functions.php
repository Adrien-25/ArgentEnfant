<?php
/**
** activation theme
**/
add_action( 'wp_enqueue_scripts', 'theme_enqueue_styles');
function theme_enqueue_styles() {
    wp_enqueue_style( 'parent-style', get_template_directory_uri() . '/style.css' );
    //CSS specifique pour la page RockSymbol : attention utilise le theme enfant 'ArgentEnfant'
    switch (get_post()->ID) {
        case 14:
            wp_enqueue_style( 'styles_rocksymbol', get_theme_file_uri() . '/rock_symbol.css');
            break;
        case 20:
            wp_enqueue_style( 'styles_accueil', get_theme_file_uri() . '/home.css');
            break;
        case 439:
            wp_enqueue_style( 'styles_player', get_theme_file_uri() . '/player.css');
            break;
        case 95:
            wp_enqueue_style( 'styles_player', get_theme_file_uri() . '/nous_rejoindre.css');
            break;
        default:
            # no other styles needed of other pages
            break;
    }
}

add_action( 'wp_enqueue_scripts', 'argent_enfant_enqueue_styles', 11 );
function argent_enfant_enqueue_styles() {
    wp_enqueue_style( 'child-style', get_stylesheet_uri() );
}

//SESSION
function register_session(){
    if( !session_id() )
        session_start();
}
add_action('init','register_session');