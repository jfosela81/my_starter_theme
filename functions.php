<?php
/**
 * Created by PhpStorm.
 * User: imove
 * Date: 31/8/17
 * Time: 12:14
 */

add_theme_support('post-thumbnails');
add_theme_support('widgets');
add_theme_support('custom-background');
add_theme_support('custom-header');
add_theme_support('custom-logo');

add_action('wp_enqueue_scripts','tsa_custom_scripts');
function tsa_custom_scripts() {

    wp_enqueue_script('fontawesome','https://use.fontawesome.com/3646182a05.js',array('jquery'));

    wp_enqueue_style('fonts','https://fonts.googleapis.com/css?family=Lato|Raleway:100');
    wp_enqueue_style('styles',get_template_directory_uri().'/style.css');

}

function register_tsa_menus() {
    register_nav_menus(
        array(
            'header-menu' => 'Menú de cabecera',
        )
    );
}
add_action( 'init', 'register_tsa_menus' );