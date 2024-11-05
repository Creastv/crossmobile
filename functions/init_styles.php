<?php
// FRONT CSS / JS
add_action('wp_enqueue_scripts', 'init_custom_css');
function init_custom_css()
{
    // CSS
    wp_enqueue_style('normalize', get_stylesheet_directory_uri() . '/assets/css/normalize.css');
    wp_enqueue_style('swiper-css', get_stylesheet_directory_uri() . '/assets/css/swiper-bundle.min.css');
    wp_enqueue_style('style', get_stylesheet_directory_uri() . '/assets/css/style.css');
    wp_enqueue_style('style-hero', get_stylesheet_directory_uri() . '/gutenberg/hero/style.css');

    // JS
    wp_enqueue_script('swiper-js', get_stylesheet_directory_uri() . '/assets/js/swiper-bundle.min.js');
}

// ADMIN CSS / JS
add_action('admin_enqueue_scripts', 'init_custom_admin_styles');
function init_custom_admin_styles()
{
    // CSS
    wp_enqueue_style('admin', get_stylesheet_directory_uri() . '/assets/css/admin/admin.css');
    wp_enqueue_style('notify', get_stylesheet_directory_uri() . '/assets/css/admin/notify.css');

    // JS
    wp_enqueue_script('notify', get_stylesheet_directory_uri() . '/assets/js/notify.js');
}


// GUTENBERG CSS / JS
add_action('enqueue_block_editor_assets', 'init_custom_gutenberg_styles');
function init_custom_gutenberg_styles()
{
    // CSS
    wp_enqueue_style('style-gutenberg', get_stylesheet_directory_uri() . '/assets/css/style.css');
    wp_enqueue_style('swiper-css', get_stylesheet_directory_uri() . '/assets/css/swiper-bundle.min.css');

    // JS
    wp_enqueue_script('swiper-js', get_stylesheet_directory_uri() . '/assets/js/swiper-bundle.min.js');
}
