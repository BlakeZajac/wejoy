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

    $site_logo = get_theme_file_uri('img/logo.svg');
    $icon_phone = '<svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-telephone-fill" viewBox="0 0 16 16"><path fill-rule="evenodd" d="M1.885.511a1.745 1.745 0 0 1 2.61.163L6.29 2.98c.329.423.445.974.315 1.494l-.547 2.19a.678.678 0 0 0 .178.643l2.457 2.457a.678.678 0 0 0 .644.178l2.189-.547a1.745 1.745 0 0 1 1.494.315l2.306 1.794c.829.645.905 1.87.163 2.611l-1.034 1.034c-.74.74-1.846 1.065-2.877.702a18.634 18.634 0 0 1-7.01-4.42 18.634 18.634 0 0 1-4.42-7.009c-.362-1.03-.037-2.137.703-2.877L1.885.511z"/></svg>';
    ?>

    <header class="site-header">
        <div class="site-header--horizontal">
            <div class="site-header--horizontal__logo">
                <a href="/" class="site-header--horizontal__logo-link">
                    <img
                        src="<?php echo esc_url( $site_logo ); ?>"
                        alt="Logo"
                        class="logo"
                    />
                </a>
            </div>

            <div class="site-header--horizontal__actions">
                <a href="<?php echo get_permalink( get_page_by_path ( 'contact' ) ); ?>" class="site-header--horizontal__btn">
                    <div class="btn--square">
                        <span class="btn--square__icon btn--square__icon--phone">
                            <?php echo $icon_phone; ?>
                        </span>
                    </div>

                    Book a call
                </a>
            </div>
        </div>

        <div class="site-header--vertical"></div>
    </header>