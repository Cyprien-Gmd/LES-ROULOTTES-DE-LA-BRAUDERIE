<?php

// ENREGISTRE LE MENU
register_nav_menus( array(
    'menu' => 'Menu principal',
));
// FIN


// AJOUT STYLE ET JQUERY
function ajout_scripts(){
    wp_enqueue_style('style', get_stylesheet_uri());
    wp_enqueue_script('jquery', get_template_directory_uri() . './js/script.js', array('jquery'));
}
    add_action('wp_enqueue_scripts', 'ajout_scripts');

// AJOUT GOOGLE FONT
function wpb_add_google_fonts() {
    wp_enqueue_style( 'wpb-google-fonts', 'https://fonts.googleapis.com/css2?family=Montserrat:wght@100;200;300;400;500;600;700&display=swap', false );
}    
    add_action( 'wp_enqueue_scripts', 'wpb_add_google_fonts' );


// THUMBNAIL
function mytheme_post_thumbnails() {
    add_theme_support( 'post-thumbnails' );
}
add_action( 'after_setup_theme', 'mytheme_post_thumbnails' );


// TAILLE DU THUMBNAIL
add_image_size( 'post-thumbnail', 150, 150 );
add_image_size( 'medium-thumbnail', 300, 300 );
add_image_size( 'large-thumbnail', 1024, 1024 );
add_image_size( 'fullpage-thumbnail', 1920 , 1080 );

