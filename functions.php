<?php 

add_theme_support('title-tag');
add_theme_support('custom-logo');
add_theme_support('post_thumbnails');
add_theme_support('custom-background');

function RE_styles() {
    wp_enqueue_style('theme-style', get_template_directory_uri() . "/style.css", array(), '1.0');
}

add_action('wp_enqueue_scripts', 'RE_styles');

function register_menus() {
    register_nav_menus(

        array(
            'header-menu' => 'Header Nav',
            'side-menu' => 'Side Nav',
            'footer-menu' => 'Footer Nav'
        )

    );
    }

    add_action('init', 'register_menus');


    function games_post() {

        $args = array(
    
            'labels' => array(
    
                'name' => 'Games',
                'singular_name' => 'Game'
    
            ),
    
            'hierarchical' => true,
            'public' => true,
            'has_archive' => true,
            'menu_icon' => 'dashicons-media-archive',
            'supports' => array('title', 'editor', 'thumbnail')
        );
    
        register_post_type('game', $args);
    
    }

?>