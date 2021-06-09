<!DOCTYPE html>
<html lang="fr">

<head <?php language_attributes(); ?>>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

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
        <!-- LOGO NAV -->
        <div id="logo_site">
            <img src="./wp-content/themes/lrdb/img/logo_ldlb.png" alt="logo roulotte de la brauderie">
        </div>

        <!-- MENU WORDPRESS -->
        <span id="nav_full">
            <?php
                wp_nav_menu( array(
                    'menu' => 'Menu principal'
                ) )
            ?>
        </span>

        <!-- MENU BURGER -->
        <div class="menu_burger">    
            <div id="myNav" class="overlay">
                <a href="javascript:void(0)" class="closebtn" onclick="closeNav()">&times;</a>
                
                <div class="overlay-content">
                    <?php
                        wp_nav_menu( array(
                            'menu' => 'Menu principal'
                        ) )
                    ?>

                    <span class="separator"></span>

                    <div id="info_burger">
                        <ul>
                            <li>
                                La Brauderie <br>
                                49330 BRISSARTHE
                            </li>

                            <li>
                                <a href="tel:+33618913940">
                                    06.18.91.39.40
                                </a>
                            </li>

                            <li>
                                <a href="mailto:roulottes.brauderie@gmail.com">
                                    roulottes.brauderie@gmail.com
                                </a>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        
            <a href="#" id="burger_icon" onclick="openNav()">
            <i class="fas fa-bars"></i>
            </a>
        </div>
    </nav>

</header>