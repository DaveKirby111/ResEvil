<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
    <?php wp_head(); ?>
    <meta charset="<?php bloginfo('charset'); ?>">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Resident Evil Fansite Home</title>
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Jacques+Francois+Shadow">
</head>
<body <?php body_class(); ?>>

    <div class="header">

    <?php

    if( function_exists('the_custom_logo')) {
    the_custom_logo();
    }

    ?>

        <h1><?php the_title(); ?></h1>

    </div>

    <div class="nav">

    <?php

    wp_nav_menu(

    array(

    'theme_location' => 'header-menu',
    'container_class' => 'header-nav'
    
    )
    
    );

    ?>

    </div>