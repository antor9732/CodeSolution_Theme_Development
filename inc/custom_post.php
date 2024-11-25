<?php 

function custom_service() {
    register_post_type('service',
    array(
        'labels' => array(
            'name' => ('Services'),
            'singular_name' => ('Service'),
            'add_new' => ('Add New Service'),
            'add_new_item' => ('Add New Service'),
            'edit_item' => ('Edit Service'),
            'new_item' => ('New Service'),
            'view_item' => ('View Service'),
            'all_items' => ('All Services'),
            'search_items' => ('Search Services'),
            'not_found' => ('Sorry,we cound\'t find the service you were looking for.'),
            'not_found_in_trash' => ('No Services Found in Trash'),
            'parent_item_colon' => ('Parent Service'),
            'menu_name' => ('Services'), //Admin Menu Text
        ),
        'description' => ('Services'),
        'menu_icon' => 'dashicons-networking',
        'supports' => array('title', 'editor', 'excerpt', 'thumbnail', 'revisions'),
        'taxonomies' => array('category', 'post_tag'),
        'capability_type' => 'post',
        'public' => true,
        'publicly_queryable' => true,
        'exclude_from_search' => false,
        'menu_position' => 5,
        'show_ui' => true,
        'show_in_menu' => true,
        'show_in_nav_menus' => true,
        'show_in_admin_bar' => true,
        'can_export' => true,
        'has_archive' => true,
        'rewrite' => array('slug' => 'services',
    ),
    ));
}
add_action('init', 'custom_service');