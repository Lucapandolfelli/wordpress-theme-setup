<?php
/**
 * 
 * Functions and definitions
 * 
 * 
 * @package WordpressTheme
 * @since 1.0.0
 */

if(! defined('WORDPRESS_THEME_PATH')){
    define('WORDPRESS_THEME_PATH', untrailingslashit(get_template_directory()));
}

if(! defined('WORDPRESS_THEME_URI')){
    define('WORDPRESS_THEME_URI', untrailingslashit(get_template_directory_uri()));
}

if(! function_exists('wordpress_theme_setup')) {

    /**
     * Sets up theme defaults and registers support for various WordPress features
     *
     * @since WordpressTheme 1.0.0
     *
     * @return void
     */

    function wordpress_theme_setup() {

        add_theme_support('automatic-feed-links');

        add_theme_support('menus');

        add_theme_support('post-thumbnails');

        add_theme_support('title-tag');

        add_theme_support('woocommerce');

        add_theme_support('html5',
			array(
				'comment-form',
				'comment-list',
				'gallery',
				'caption',
				'style',
				'script',
				'navigation-widgets',
			)
		);

    }

}
add_action('after_setup_theme', 'wordpress_theme_setup');

/**
 * Enqueue scripts and styles
 *
 * @since WordpressTheme 1.0.0
 *
 * @return void
 */

function wordpress_theme_scripts(){

    // Styles
    wp_enqueue_style('wordpress-theme-style', WORDPRESS_THEME_URI . '/public/css/app.css', array(), wp_get_theme()->get('Version'), 'all');
    wp_enqueue_style('fontawesome', "https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css", array(), '5.15.3', 'all');

    //Scritps
    wp_enqueue_script('wordpress-theme-script', WORDPRESS_THEME_URI . '/public/js/app.js', array(), wp_get_theme()->get('Version'), true);

}
add_action('wp_enqueue_scripts', 'wordpress_theme_scripts');

require WORDPRESS_THEME_PATH . '/inc/template-tags.php';

