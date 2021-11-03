<?php
function add_theme_scripts()
{
    wp_enqueue_style('style', get_stylesheet_uri());
    wp_enqueue_script('script', get_template_directory_uri() . '/js/functions.js', array(), null, true);
}
add_action('wp_enqueue_scripts', 'add_theme_scripts');
