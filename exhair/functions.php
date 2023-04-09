<?php
if ( ! function_exists( 'exhair_setup' ) ) :
function exhair_setup() { 
    add_theme_support( 'post-thumbnails' );
    add_theme_support( 'responsive-embeds' );
    add_theme_support( 'editor-styles' );
    add_theme_support( 'html5', array( 'style','script' ) );
    add_theme_support( 'automatic-feed-links' ); 
 } endif;

add_action( 'after_setup_theme', 'exhair_setup' );

add_action('wp_enqueue_scripts', 'register_and_enqueue');

function register_and_enqueue() {
    wp_register_script( 'main_theme_js', get_template_directory_uri() . '/index.js' );
    wp_enqueue_script( 'main_theme_js' );
    wp_register_style( 'main_theme_css', get_template_directory_uri() . '/style.css' );
    wp_enqueue_style( 'main_theme_css' );
}

