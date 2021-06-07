<!DOCTYPE html>
<html lang="fr">

<head <?php language_attributes(); ?>>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>
        <?php the_title(); ?>
    </title>

    <?php wp_head(); ?>

</head>

<body <?php body_class(); ?>> 
    <!-- BARRE WORDPRESS -->
    <?php wp_body_open(); ?>

<header>

    <nav class="headernav">
        <?php
        wp_nav_menu( array(
            'menu' => 'Menu principal'
        ) )
        ?>
    </nav>

</header>