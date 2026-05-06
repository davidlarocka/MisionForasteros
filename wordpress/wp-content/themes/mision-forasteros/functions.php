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
    wp_enqueue_style(
        'main-style',
        get_stylesheet_directory_uri() . '/assets/css/style.css',
        [],
        filemtime(get_stylesheet_directory() . '/assets/css/style.css') // 🔥 clave
    );

    wp_enqueue_script(
        'main-js',
        get_stylesheet_directory_uri() . '/assets/js/main.js',
        [],
        filemtime(get_stylesheet_directory() . '/assets/js/main.js'),
        true
    );
}
add_action('wp_enqueue_scripts', 'theme_assets');