<?php


function enqueue_eduhub_styles()
{
    // Google Fonts
    wp_enqueue_style('google-fonts', 'https://fonts.googleapis.com/css2?family=Work+Sans:wght@400;600;700&display=swap');

    // Icomoon
    wp_enqueue_style('icomoon', get_template_directory_uri() . '/fonts/icomoon/style.css');

    // Flaticon
    wp_enqueue_style('flaticon', get_template_directory_uri() . '/fonts/flaticon/font/flaticon.css');

    // Bootstrap Icons
    wp_enqueue_style('bootstrap-icons', 'https://cdn.jsdelivr.net/npm/bootstrap-icons@1.8.1/font/bootstrap-icons.css');

    // Tiny Slider
    wp_enqueue_style('tiny-slider', get_template_directory_uri() . '/css/tiny-slider.css');

    // AOS (Animate On Scroll)
    wp_enqueue_style('aos', get_template_directory_uri() . '/css/aos.css');

    // GLightbox
    wp_enqueue_style('glightbox', get_template_directory_uri() . '/css/glightbox.min.css');

    // Custom Styles
    wp_enqueue_style('custom-style', get_template_directory_uri() . '/css/style.css');

    // Flatpickr
    wp_enqueue_style('flatpickr', get_template_directory_uri() . '/css/flatpickr.min.css');
}

// Hook the function to the wp_enqueue_scripts action
add_action('wp_enqueue_scripts', 'enqueue_eduhub_styles');



function enqueue_custom_scripts()
{
    // Bootstrap Bundle
    wp_enqueue_script('bootstrap-bundle', get_template_directory_uri() . '/js/bootstrap.bundle.min.js', array('jquery'), '', true);

    // Tiny Slider
    wp_enqueue_script('tiny-slider', get_template_directory_uri() . '/js/tiny-slider.js', array(), '', true);

    // Flatpickr
    wp_enqueue_script('flatpickr', get_template_directory_uri() . '/js/flatpickr.min.js', array(), '', true);

    // AOS (Animate On Scroll)
    wp_enqueue_script('aos', get_template_directory_uri() . '/js/aos.js', array(), '', true);

    // GLightbox
    wp_enqueue_script('glightbox', get_template_directory_uri() . '/js/glightbox.min.js', array(), '', true);

    // Navbar
    wp_enqueue_script('navbar', get_template_directory_uri() . '/js/navbar.js', array(), '', true);

    // Counter
    wp_enqueue_script('counter', get_template_directory_uri() . '/js/counter.js', array(), '', true);

    // Custom
    wp_enqueue_script('custom', get_template_directory_uri() . '/js/custom.js', array(), '', true);
}

// Hook the function to the wp_enqueue_scripts action
add_action('wp_enqueue_scripts', 'enqueue_custom_scripts');




function theme_register_menus()
{
    register_nav_menus(array(
        'primary-menu' => __('Primary Menu', 'theme-textdomain'),
        'secondary-menu' => __('Secondary Menu', 'theme-textdomain'),
        // Add more menu locations as needed
    ));
}

add_action('after_setup_theme', 'theme_register_menus');