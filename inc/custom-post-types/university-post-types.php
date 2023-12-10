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
        'has_archive'  => true,
        'labels'       => $labels,
        'rewrite'      => ['slug' => 'events'],
        'menu_icon'    => 'dashicons-calendar-alt',
        'supports'     => ['title', 'editor', 'excerpt']

    ];


    register_post_type('event', $args);
}

add_action('init', 'eduhub_university_post_types');
