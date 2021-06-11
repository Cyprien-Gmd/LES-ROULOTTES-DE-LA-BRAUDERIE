<?php

// ENREGISTRE LE MENU
register_nav_menus( array(
    'menu' => 'Menu principal',
));
// --------------------

// CUSTOM HEADER
function themename_custom_header_setup() {
    $defaults = array(
        // Default Header Image to display
        'default-image'         => get_template_directory_uri() . '/images/headers/default.jpg',
        // Display the header text along with the image
        'header-text'           => false,
        // Header text color default
        'default-text-color'        => '000',
        // Header image width (in pixels)
        'width'             => 1000,
        // Header image height (in pixels)
        'height'            => 198,
        // Header image random rotation default
        'random-default'        => false,
        // Enable upload of image file in admin 
        'uploads'       => false,
        // function to be called in theme head section
        'wp-head-callback'      => 'wphead_cb',
        //  function to be called in preview page head section
        'admin-head-callback'       => 'adminhead_cb',
        // function to produce preview markup in the admin screen
        'admin-preview-callback'    => 'adminpreview_cb',
        );
}
add_action( 'after_setup_theme', 'themename_custom_header_setup' );
// --------------------

// CUSTOM LOGO
function setup_theme() {
    add_theme_support( 'title-tag' );

    add_theme_support( 'custom-logo', [
        'header-text'          => [ 'site-title', 'site-description' ],
        'height'               => 100,
        'width'                => 400,
        'flex-height'          => true,
        'flex-width'           => true,
        
        'unlink-homepage-logo' => true, 

    ]);
 
    add_theme_support( 'custom-logo', $defaults );
}
// --------------------

// AJOUT STYLE ET JQUERY
function ajout_scripts(){
    wp_enqueue_style('style', get_stylesheet_uri());
    wp_enqueue_script('jquery', get_template_directory_uri() . './js/script.js', array('jquery'));
    wp_enqueue_script( 'burger', './wp-content/themes/lrdb/js/script.js');
}
    add_action('wp_enqueue_scripts', 'ajout_scripts');
// --------------------

// AJOUT GOOGLE FONT
function wpb_add_google_fonts() {
    wp_enqueue_style( 'wpb-google-fonts',
    'https://fonts.googleapis.com/css2?family=Cormorant+Garamond:ital,wght@0,300;0,400;0,500;0,600;0,700;1,300;1,400;1,500;1,600;1,700&family=Montserrat:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap', false );
}    
    add_action( 'wp_enqueue_scripts', 'wpb_add_google_fonts' );
// --------------------

// THUMBNAIL
function mytheme_post_thumbnails() {
    add_theme_support( 'post-thumbnails' );
}
add_action( 'after_setup_theme', 'mytheme_post_thumbnails' );
// TAILLE DU THUMBNAIL
add_image_size( 'profile-thumbnail', 50, 50 );
add_image_size( 'post-thumbnail', 150, 150 );
add_image_size( 'medium-thumbnail', 300, 300 );
add_image_size( 'large-thumbnail', 1024, 1024 );
add_image_size( 'fullpage-thumbnail', 1920 , 1080 );
// --------------------
