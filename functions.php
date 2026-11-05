<?php
/** Configuración e integración nativa con WordPress. */
if ( ! defined( 'ABSPATH' ) ) { exit; }
function orbita_integral_setup() {
    add_theme_support( 'title-tag' );
    add_theme_support( 'post-thumbnails' );
    add_theme_support( 'responsive-embeds' );
    add_theme_support( 'automatic-feed-links' );
    add_theme_support( 'html5', array( 'search-form', 'comment-form', 'comment-list', 'gallery', 'caption', 'style', 'script' ) );
}
add_action( 'after_setup_theme', 'orbita_integral_setup' );
function orbita_integral_assets() {
    wp_enqueue_style( 'orbita-integral', get_stylesheet_uri(), array(), '1.0.0' );
    if ( is_front_page() ) {
        wp_enqueue_script( 'orbita-integral', get_theme_file_uri( '/assets/app.js' ), array(), '1.0.0', true );
    }
}
add_action( 'wp_enqueue_scripts', 'orbita_integral_assets' );
function orbita_integral_front_title( $title ) {
    return is_front_page() ? 'Órbita Integral · Estrategia que conecta. Gestión que transforma.' : $title;
}
add_filter( 'pre_get_document_title', 'orbita_integral_front_title' );
function orbita_integral_meta() {
    if ( is_front_page() ) {
        echo '<meta name="description" content="Órbita Integral conecta estrategia, marketing, creatividad e innovación para fortalecer organizaciones e impulsar emprendimientos.">' . "\n";
    }
    echo '<meta name="theme-color" content="#292568">' . "\n";
    echo '<link rel="icon" href="' . esc_url( get_theme_file_uri( '/assets/favicon.svg' ) ) . '">' . "\n";
}
add_action( 'wp_head', 'orbita_integral_meta', 1 );
