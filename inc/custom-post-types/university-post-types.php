<?php

function eduhub_university_post_types()
{
    $labels = [
        'name'          => 'Events',
        'singular_name' => 'Event',
        'add_new_item'  => 'Add New Event',
        'edit_item'     => 'Edit Event',
        'add_new'       => 'New Event',
        'all_items'     => 'All Events',
    ];

    $args = [
        'public'       => true,
        'show_in_rest' => true,
        'labels'       => $labels,
        'menu_icon'    => 'dashicons-calendar-alt',

    ];


    register_post_type('event', $args);
}

add_action('init', 'eduhub_university_post_types');
