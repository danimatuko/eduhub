<?php
$page_id = get_the_ID();
$parent_page_id = wp_get_post_parent_id($page_id);

if ($parent_page_id || is_singular()) {
    $breadcrumbs = array();

    // Add a link to the home page
    $breadcrumbs[] = '<a href="' . home_url() . '">Home</a>';

    // Get ancestors and add them to the breadcrumbs
    $ancestors = get_ancestors($page_id, 'page');
    $ancestors = array_reverse($ancestors);
    foreach ($ancestors as $ancestor) {
        // Exclude regular pages from the breadcrumbs
        if (get_post_type($ancestor) !== 'page') {
            $breadcrumbs[] = '<a href="' . get_permalink($ancestor) . '">' . get_the_title($ancestor) . '</a>';
        }
    }

    // Add support for custom post types
    if (is_singular() && !is_singular('post')) {
        $post_type = get_post_type();
        $post_type_object = get_post_type_object($post_type);

        if ($post_type_object) {
            $breadcrumbs[] = '<a href="' . get_post_type_archive_link($post_type) . '">' . $post_type_object->labels->name . '</a>';
        }
    }

    // Add the current page as the last item in the breadcrumbs
    $breadcrumbs[] = get_the_title($page_id);

    // Display the breadcrumbs
    echo '<div class="breadcrumbs">' . implode(' > ', $breadcrumbs) . '</div>';
}
