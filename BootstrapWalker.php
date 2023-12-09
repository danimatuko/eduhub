<?php

/**
 * Custom WordPress navigation walker for Bootstrap styling.
 */
class BootstrapWalker extends Walker_Nav_Menu
{
    /**
     * Start the list before the elements are added.
     *
     * @param string $output Passed by reference. Used to append additional content.
     * @param int $depth Depth of menu item. Used for padding.
     * @param array|null $args Additional arguments.
     */
    function start_lvl(&$output, $depth = 0, $args = null)
    {
        $indent = str_repeat("\t", $depth);
        $output .= "\n$indent<ul class=\"dropdown\">\n";
    }

    /**
     * Start the element output.
     *
     * @param string $output Passed by reference. Used to append additional content.
     * @param WP_Post $item Menu item data object.
     * @param int $depth Depth of menu item. Used for padding.
     * @param array|null $args Additional arguments.
     * @param int $id Current menu item ID.
     */
    function start_el(&$output, $item, $depth = 0, $args = null, $id = 0)
    {
        // Get the title and URL of the menu item
        $title = $item->title;
        $url = $item->url;

        // Get the classes for the menu item
        $classes = empty($item->classes) ? array() : (array) $item->classes;

        // Check if the current item has sub-items
        $has_children = in_array('menu-item-has-children', $item->classes);

        // Check if the current item is active
        $is_active = in_array('current-menu-item', $item->classes);

        // Add a custom class if the item has sub-items
        if ($has_children) {
            $classes[] = 'has-children';
        }

        // Add a custom class if the item is active
        if ($is_active) {
            $classes[] = 'active';
        }

        // Create a string of HTML classes for the menu item
        $class_names = join(' ', apply_filters('nav_menu_css_class', array_filter($classes), $item, $args, $depth));

        // Modify the output for each menu item
        $output .= "<li class=\"$class_names\">";
        $output .= '<a href="' . $url . '" >' . $title . '</a>';
    }

    /**
     * End the element output, if needed.
     *
     * @param string $output Passed by reference. Used to append additional content.
     * @param int $depth Depth of menu item. Used for padding.
     * @param array|null $args Additional arguments.
     */
    function end_lvl(&$output, $depth = 0, $args = null)
    {
        $indent = str_repeat("\t", $depth);
        $output .= "$indent</ul>\n";
    }

    /**
     * End the element output, if needed.
     *
     * @param string $output Passed by reference. Used to append additional content.
     * @param WP_Post $item Page data object. Not used.
     * @param int $depth Depth of menu item. Used for padding.
     * @param array|null $args Additional arguments.
     */
    function end_el(&$output, $item, $depth = 0, $args = null)
    {
        $output .= "</li>\n";
    }
}
