<?php

add_theme_support('post-thumbnails');
add_theme_support('widgets');
add_theme_support('custom-background');
add_theme_support('custom-header');
add_theme_support('custom-logo');

add_action('wp_enqueue_scripts','mst_custom_scripts');
function mst_custom_scripts() {

    wp_enqueue_script( 'fontawesome','https://kit.fontawesome.com/9f7a4566fb.js', array('jquery') );

    $google_fonts = 'https://fonts.googleapis.com/css2?family=Lato:wght@400;900&family=Roboto:wght@400;700&display=swap';
    wp_register_style( 'google-fonts', $google_fonts, '', null );
    wp_enqueue_style( 'google-fonts' );

    wp_enqueue_style( 'styles',get_template_directory_uri().'/style.css' );

}

function register_mst_menus() {
    register_nav_menus(
        array(
            'header-menu' => 'Menú de cabecera',
        )
    );
}
add_action( 'init', 'register_mst_menus' );

/* Evitar que WP cree tamaños de imagen adicionales */
function mst_disable_media_sizes( $sizes ) {
	
	unset($sizes['medium_large']); // desactivar tamaño medio-grande
	unset($sizes['1536x1536']);    // desactivar tamaño medio-grande x2
	unset($sizes['2048x2048']);    // desactivar tamaño grande x2
    return $sizes;
    
}
add_action('intermediate_image_sizes_advanced', 'mst_disable_media_sizes');
