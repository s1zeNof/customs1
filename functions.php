<?php 

add_action( 'wp_enqueue_scripts', function() {

    wp_enqueue_style( 'main', get_stylesheet_directory_uri() . "/dist/css/style.css", array(), time() );

    wp_enqueue_script('jquery', get_template_directory_uri() .'http://ajax.googleapis.com/ajax/libs/jquery/1/jquery.min.js', array('jquery'), null, true);

    wp_enqueue_script( 'js', get_template_directory_uri() . "/dist/index.js", array(), false, true);


    

} );




add_action( 'after_setup_theme', function() {

    add_theme_support( 'title-tag' );

});

register_nav_menus(
    array(
        'head-menu' => "header menu"
    )
);

function themename_custom_logo_setup() {
    $defaults = array(
    'height'      => 100,
    'width'       => 400,
    'flex-height' => true,
    'flex-width'  => true,
    'header-text' => array( 'site-title', 'site-description' ),
    );
    add_theme_support( 'custom-logo', $defaults );
   }
   add_action( 'after_setup_theme', 'themename_custom_logo_setup' );

   
