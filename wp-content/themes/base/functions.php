<?php 
//style
function base_load_scripts(){
    wp_enqueue_style('base-style',get_stylesheet_uri(), array(),'1.0','all');
}
add_action('wp_enqueue_scripts','base_load_scripts');

// Bootstrap
function base_enqueue_bootstrap() {
    wp_enqueue_style('bootstrap-css', 'https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css', array(), '5.3.0');
}

add_action('wp_enqueue_scripts', 'base_enqueue_bootstrap');

//Menü
function register_my_menu() {
    register_nav_menu('header-menu', __('Header Menu'));
}

add_action('after_setup_theme', 'register_my_menu');
