<?php

/**
 * Class EduhubPostType
 *
 * Class representing a custom post type in EduhubPostType.
 */
class EduhubPostType {
    private $post_type;
    private $supports;
    private $args;
    private $menu_icon;

    /**
     * EduhubPostType constructor.
     *
     * @param string $post_type The post type identifier.
     * @param array $supports The post type supports.
     * @param string $menu_icon The menu icon for the custom post type.
     */
    public function __construct($post_type, $supports = [], $menu_icon = 'dashicons-admin-post') {
        $this->post_type = $post_type;
        $this->supports = $supports;
        $this->menu_icon = $menu_icon;
        $this->args = $this->getDefaultArgs();

        add_action('init', [$this, 'registerPostType']);
    }


    /**
     * Registers the custom post type with WordPress.
     */
    public function registerPostType() {
        register_post_type($this->post_type, $this->args);
    }

    /**
     * Generates default arguments for registering the custom post type.
     *
     * @return array Default arguments.
     */
    private function getDefaultArgs() {
        return [
            'public'       => true,
            'show_in_rest' => true,
            'has_archive'  => true,
            'labels'       => $this->generateLabels(),
            'rewrite'      => ['slug' => $this->post_type . 's'],
            'menu_icon'    => $this->getMenuIcon(),
            'supports'     => $this->supports,
        ];
    }

    /**
     * Gets the menu icon for the custom post type.
     *
     * @return string The menu icon.
     */
    private function getMenuIcon() {
        return $this->menu_icon;
    }

    /**
     * Generates labels for the custom post type.
     *
     * @return array Generated labels.
     */
    private function generateLabels() {
        $singular_name = ucfirst($this->post_type);
        $name = $singular_name . 's';
        $add_new_item = 'Add New ' . $singular_name;
        $edit_item = 'Edit ' . $singular_name;
        $add_new = 'New ' . $singular_name;
        $all_items = 'All ' . $name;

        return [
            'name'          => $name,
            'singular_name' => $singular_name,
            'add_new_item'  => $add_new_item,
            'edit_item'     => $edit_item,
            'add_new'       => $add_new,
            'all_items'     => $all_items,
        ];
    }

    /**
     * Sets the post type supports.
     *
     * @param array $supports The post type supports.
     * @return EduhubPostType
     */
    public function setSupports($supports) {
        $this->supports = $supports;
        $this->args['supports'] = $supports; // Update the supports in the args
        return $this;
    }

    /**
     * Sets the menu icon for the custom post type.
     *
     * @param string $menu_icon The menu icon.
     * @return EduhubPostType
     */
    public function setMenuIcon($menu_icon) {
        $this->menu_icon = $menu_icon;
        $this->args['menu_icon'] = $menu_icon; // Update the menu icon in the args
        return $this;
    }
}

// Create an instance of EduhubPostType for 'event'
$event_post_type = new EduhubPostType('event');

$event_post_type
    ->setSupports(['title', 'editor', 'excerpt', 'thumbnail'])
    ->setMenuIcon('dashicons-calendar-alt');


// Create an instance of EduhubPostType for 'program'
$program_post_type = new EduhubPostType('program');

$program_post_type
    ->setSupports(['title', 'editor'])
    ->setMenuIcon('dashicons-awards');
