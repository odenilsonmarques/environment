<!DOCTYPE html>
<html <?php language_attributes(); ?>>

<head>
    <meta <?php bloginfo('charset'); ?>>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <?php wp_head(); ?>
</head>


<body <?php body_class(); ?>>
    <header>
        <nav class="navbar navbar-expand-lg navbar-light bg-light fixed-top py-3">
            <div class="container">
                <a class="navbar-brand" href="#">
                    <?php
                    if (has_custom_logo()) {
                        the_custom_logo();
                    } else {
                    ?>
                        <a href="<?php echo esc_html(home_url('/')); ?>" class="name-environment">Engenharia ambiental</a>
                    <?php
                    }
                    ?>
                </a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>

                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <?php
                    wp_nav_menu(array(
                        'theme_location' => 'environment_main_menu',
                        'container' => 'ul',
                        'container_class' => 'navbar-nav ms-lg-auto',
                        'menu_class' => 'navbar-nav ms-lg-auto',
                        'fallback_cb' => '__return_false',
                        'items_wrap' => '<ul id="%1$s" class="%2$s">%3$s</ul>',
                    ));
                    ?>
                </div>
            </div>
        </nav>
    </header>