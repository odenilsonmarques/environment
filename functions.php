<?php

function environment_load_script()
{
    wp_enqueue_style('environment-style', get_stylesheet_uri(), array(), 1.0, 'all');
    wp_enqueue_style('bootstrap-css', get_template_directory_uri() . '/assets/css/bootstrap.min.css');


    // wp_enqueue_script('script', get_template_directory_uri() . '/js/script.js', array(), 1.0, true);
    wp_enqueue_script('bootstrap-bundle', get_template_directory_uri() . '/assets/js/bootstrap.bundle.min.js');
}
add_action('wp_enqueue_scripts', 'environment_load_script');


function environment_config()
{
    add_theme_support('custom-logo', array(

        'width' => 100,
        'height' => 60,
        'flex-height' => true,
        'flex-with' => true

    ));

    register_nav_menus(
        array(
            'environment_main_menu' => 'Main Menu'
        )
    );

    //add suport a thumbnails
    add_theme_support('post-thumbnails');
}

add_action('after_setup_theme', 'environment_config', 0);



