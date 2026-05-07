<?php

function mf_enqueue_assets() {
    wp_enqueue_style('mf-style', get_template_directory_uri() . '/assets/css/style.css');
    wp_enqueue_script('mf-script', get_template_directory_uri() . '/assets/js/script.js', [], false, true);
}

add_action('wp_enqueue_scripts', 'mf_enqueue_assets');

add_filter('show_admin_bar', '__return_false');

add_theme_support('post-thumbnails');
add_theme_support('title-tag');
add_theme_support('html5', ['search-form','gallery','caption']);

add_filter('intermediate_image_sizes_advanced', function($sizes) {
    unset($sizes['large']);
    unset($sizes['medium_large']);
    return $sizes;
});



function theme_assets() {

    $css_path = get_stylesheet_directory() . '/assets/css/style.css';
    $js_path  = get_stylesheet_directory() . '/assets/js/main.js';

    wp_enqueue_style(
        'main-style',
        get_stylesheet_directory_uri() . '/assets/css/style.css',
        [],
        file_exists($css_path) ? filemtime($css_path) : null
    );

    wp_enqueue_script(
        'main-js',
        get_stylesheet_directory_uri() . '/assets/js/main.js',
        [],
        file_exists($js_path) ? filemtime($js_path) : null,
        true
    );
}
add_action('wp_enqueue_scripts', 'theme_assets');
