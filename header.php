<!DOCTYPE html>
<html lang="en" <?php language_attributes(); ?>>

<head>
    <meta charset="<?php bloginfo('charset'); ?>" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="pingback" href="<?php bloginfo('pingback_url'); ?>" />

    <?php echo get_theme_mod('head_js_code'); ?>
    <?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
    <?php echo get_theme_mod('body_js_code'); ?>

    <?php wp_body_open();

    $primary_menu = wp_nav_menu(
        array(
            'menu_name' => 'main_menu',
            'menu_class' => 'site-header__menu',
            'echo' => false,
        )
    );
    ?>

    <header class="site-header">

    </header>