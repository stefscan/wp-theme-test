<?php

// Lier la feuille de style et les fonts au projet

function simplenews_enqueue_styles(){

    wp_enqueue_style( 'latofont', 'https://fonts.googleapis.com/css2?family=Lato&display=swap' );

    wp_enqueue_style( 'merrifont', 'https://fonts.googleapis.com/css2?family=Merriweather+Sans&display=swap' );

    wp_enqueue_style( 'maincss', get_template_directory_uri(  ) . '/styles/main.css', array('latofont', 'merrifont'));

}

add_action('wp_enqueue_scripts' , 'simplenews_enqueue_styles' );


// Supports de thème

function simplenews_add_theme_support(){


    add_theme_support( 'post-thumbnails' );

    add_theme_support( 'title-tag');


}


add_action( 'after_setup_theme', 'simplenews_add_theme_support' );


// Déclarer un menu

function simplenews_register_menus(){

    register_nav_menus( array(
        'main-menu' => __('Menu principal')
    ));

}

add_action('after_setup_theme', 'simplenews_register_menus' );


// Widgets

function simplenews_widgets_init($id){


    register_sidebar(array(

        // Ici on déclare le nom du widget. C'est celui-ci qui sera visible dans l'admin de WordPress
        'name' => 'Widget 1',
        // Ici on déclare l'identifiant du widget. On l'utilisera pour afficher le widget dans le thème.
        'id' => 'widget-1',
        'description' => 'Widget afficher en haut du sidebar',
        // Ici on déclare la balise devant englober le widget
        'before_widget' => '<div class="side-widget">',
        'after_widget' => '</div>'

     ));

    register_sidebar(array(

        // Ici on déclare le nom du widget. C'est celui-ci qui sera visible dans l'admin de WordPress
        'name' => 'Widget 2',
        // Ici on déclare l'identifiant du widget. On l'utilisera pour afficher le widget dans le thème.
        'id' => 'widget-2',
        'description' => 'Widget afficher au bas du sidebar',
        // Ici on déclare la balise devant englober le widget
        'before_widget' => '<div class="side-widget">',
        'after_widget' => '</div>'

     ));
}

add_action( 'widgets_init', 'simplenews_widgets_init' );