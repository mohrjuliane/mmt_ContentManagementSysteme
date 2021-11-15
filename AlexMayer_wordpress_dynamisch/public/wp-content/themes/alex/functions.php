<?php
function add_theme_scripts()
{
    wp_enqueue_style('style', get_stylesheet_uri());
    wp_enqueue_script('script', get_template_directory_uri() . '/js/functions.js', array(), null, true);
}

function cc_mime_types($mimes)
{
    $mimes['svg'] = 'image/svg+xml';
    return $mimes;
}
add_action('wp_enqueue_scripts', 'add_theme_scripts');
add_filter('upload_mimes', 'cc_mime_types');
add_theme_support('post-thumbnails');
