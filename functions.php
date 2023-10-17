<?php
define('theme_version', time());

// Adding theme styles and scripts
add_action('wp_enqueue_scripts', 'af_add_theme_scripts');

function af_add_theme_scripts()
{

    wp_enqueue_script(
        'theme-main-script',
        get_template_directory_uri() . '/assets/js/main.js',
        ['jquery'],
        theme_version,
        true
    );

    // Tailwind
    wp_enqueue_style(
        'tailwind',
        get_template_directory_uri() . '/dist/output.css',
    );

    // slick
    wp_enqueue_style(
        'slick-css',
        get_template_directory_uri() . '/assets/slick/slick.css',
    );
    wp_enqueue_style(
        'slick-theme',
        get_template_directory_uri() . '/assets/slick/slick-theme.css',
    );


    wp_enqueue_script(
        'slick-js',
        get_template_directory_uri() . '/assets/slick/slick.min.js',
        ['jquery'],
        theme_version,
        true
    );
}
add_theme_support('post-thumbnails');

function menu()
{
    register_nav_menus(array(
        'primary' => 'Primary Navigation'
    ));
}

add_action('after_setup_theme', 'menu');

if (function_exists('acf_add_options_page')) {

    if (function_exists('acf_add_options_page')) {

        acf_add_options_page(array(
            'page_title'    => 'Theme General Settings',
            'menu_title'    => 'Theme Settings',
            'menu_slug'     => 'theme-general-settings',
            'capability'    => 'edit_posts',
            'position' => '3.5',
            'redirect'      => false
        ));
    }
}


//Register ACF blocks
include_once('acf-blocks.php');


add_filter('gform_field_validation_1_62', 'custom_validation', 10, 4);
function custom_validation($result, $value, $form, $field)
{

    if ($result['is_valid'] && strlen($value) != 5) {
        $result['is_valid'] = false;
        $result['message'] = 'Please enter a valid Zip Code';
    }

    return $result;
}


