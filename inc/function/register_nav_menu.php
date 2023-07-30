<?php
if (!defined('ABSPATH')) {
    exit;
}
/**
 * Register primary-meny, secondary-menu and footer-menu 
 */
function register_menus()
{
    register_nav_menus(array(
        'primary-menu'   => esc_html__('Primary Menu', ''),
        'secondary-menu' => esc_html__('Secondary Menu', ''),
        'footer-menu'    => esc_html__('Footer Menu', ''),
    ));
}
add_action('after_setup_theme', 'register_menus');