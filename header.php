<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
    <meta charset="<?php bloginfo( 'charset' ); ?>">
     <?php wp_head(); ?>
    <title>Caméléons</title>

    <!-- balise meta permettant de définir la base d'information pour le calcul de la largeur de l'écran
    la largeur d'écran étant la base pour le responsive Web Design -->
    <meta name="viewport" content="width=device-width,initial-scale=1">

    <!-- Bonus - ajout de la favicon -->
    <link rel="shortcut icon" href="<?= get_template_directory_uri() ?>/images/favicon.ico" type="image/x-icon">
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">

    <!-- on réinitialise tous les styles par défaut -->
    <link rel="stylesheet" href="<?= get_template_directory_uri() ?>/css/reset.css">
    <!-- on importe la font open sans en grasse 400 et 700 -->
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:400,700" rel="stylesheet">
    <!-- on importe notre feuille de styles -->
    <link rel="stylesheet" href="<?= get_template_directory_uri() ?>/css/style.css">
</head>
<body <?php body_class(); ?>>
    <div class="container">
        <!-- emmet: header>h1+nav>(ul.menu>li*3>a)+(ul.social-networks>li*2>a>img) -->
        <header>
            <h1>J' <span class="heart-beat">&#10084;</span> les caméléons</h1>
        <nav>     
        <?php
        // On place ici le menu géré via le backOffice
        // On personnalise la génération du menu
        wp_nav_menu([
        'theme_location' => 'left-menu',
        'container' => 'nav',
        'container_class' => '',
        'menu_class' => 'menu'
        ]);

        ?>        
                     
                <ul class="social-networks">
                    <li><a href="https://twitter.com"><img src="<?= get_template_directory_uri() ?>/images/twitter_icon.png" alt="Twitter"></a></li>
                    <li><a href="https://facebook.com"><img src="<?= get_template_directory_uri() ?>/images/facebook_icon.png" alt="Facebook"></a></li>
                </ul>
            </nav>
        </header>