<?php
/**
 * Functions and definitions
 * 
 * @package WordpressTheme
 */

if (! function_exists('wordpress_theme_setup')) {

    function wordpress_theme_setup() {

        add_theme_support('menus');
        add_theme_support('post-thumbnails');
        add_theme_support('title-tag');

    }

}
add_action('after_setup_theme', 'wordpress_theme_setup');

// Register Styles

function register_styles(){

    wp_enqueue_style('wordpress-theme-style', get_template_directory_uri() . '/public/css/app.css', array(), wp_get_theme()->get('Version'), 'all');
    wp_enqueue_style('fontawesome', "https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css", array(), '5.15.3', 'all');

}
add_action('wp_enqueue_scripts', 'register_styles');

// Register Scripts

function register_scripts(){
        
    wp_enqueue_script('wordpress-theme-script', get_template_directory_uri() . '/public/js/app.js', array(), wp_get_theme()->get('Version'), true);

}
add_action('wp_enqueue_scripts', 'register_scripts');