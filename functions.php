<?php
require 'lib/EduhubPostType.php';

function eduhub_enqueue_styles() {
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

add_action('wp_enqueue_scripts', 'eduhub_enqueue_styles');

function eduhub_enqueue_scripts() {
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

add_action('wp_enqueue_scripts', 'eduhub_enqueue_scripts');

function eduhub_theme_register_menus() {
    register_nav_menus(array(
        'primary-menu'   => __('Primary Menu', 'theme-textdomain'),
        'secondary-menu' => __('Secondary Menu', 'theme-textdomain'),
        // Add more menu locations as needed
    ));
}

add_action('after_setup_theme', 'eduhub_theme_register_menus');

function eduhub_custom_setup() {
    // Add theme support for post thumbnails
    add_theme_support('post-thumbnails');

    // Add theme support for automatic title tag
    add_theme_support('title-tag');

    // Add theme support for HTML5 features
    add_theme_support('html5', array('search-form', 'comment-form', 'comment-list', 'gallery', 'caption'));
}

add_action('after_setup_theme', 'eduhub_custom_setup');


function eduhub_adjust_queries($query) {
    if (!is_admin() && is_post_type_archive('event') && $query->is_main_query()) {
        // Get today's date in 'Ymd' format
        $today = date('Ymd');

        $query->set('meta_key', 'event_date');
        $query->set('orderby', 'meta_value_num');
        $query->set('order', 'ASC');
        $query->set('meta_query', [
            [
                'key'     => 'event_date',
                'compare' => '>=',
                'value'   => $today,
                'type'    => 'numeric',
            ],
        ]);
    }
}

add_action('pre_get_posts', 'eduhub_adjust_queries');
