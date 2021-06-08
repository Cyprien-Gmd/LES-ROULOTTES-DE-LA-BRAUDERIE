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
    wp_enqueue_style( 'wpb-google-fonts',
    'https://fonts.googleapis.com/css2?family=Cormorant+Garamond:ital,wght@0,300;0,400;0,500;0,600;0,700;1,300;1,400;1,500;1,600;1,700&family=Montserrat:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap', false );
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


//  IMAGES ACF
$images = get_field('gallery');
$size = 'full'; // (thumbnail, medium, large, full or custom size)
if( $images ): ?>
    <ul>
        <?php foreach( $images as $image_id ): ?>
            <li>
                <?php echo wp_get_attachment_image( $image_id, $size ); ?>
            </li>
        <?php endforeach; ?>
    </ul>
<?php endif; ?>