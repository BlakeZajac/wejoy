<?php
if (!defined('ABSPATH')) {
    exit;
}

function my_theme_enqueue_styles()
{
    wp_enqueue_style('custom-font-style', get_stylesheet_directory_uri() . '/css/font.css');
}
add_action('wp_enqueue_scripts', 'my_theme_enqueue_styles', 99);