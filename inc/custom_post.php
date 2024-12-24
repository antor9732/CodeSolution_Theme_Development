<?php

function custom_slider()
{
    register_post_type(
        'slider',
        array(
            'labels' => array(
                'name' => __('Sliders'),
                'singular_name' => __('Slider'),
                'add_new' => __('Add New Slider'),
                'add_new_item' => __('Add New Slider'),
                'edit_item' => __('Edit Slider'),
                'new_item' => __('New Slider'),
                'view_item' => __('View Slider'),
                'all_items' => __('All Sliders'),
                'search_items' => __('Search Sliders'),
                'not_found' => __('Sorry, we couldn\'t find the slider you were looking for.'),
                'not_found_in_trash' => __('No Sliders Found in Trash'),
            ),
            'description' => __('Sliders'),
            'menu_icon' => 'dashicons-leftright',
            'supports' => array('title', 'thumbnail', 'editor', 'excerpt', 'revisions'),
            'taxonomies' => array('category', 'post_tag'),
            'capability_type' => 'post',
            'public' => true,
            'publicly_queryable' => true,
            'exclude_from_search' => false,
            'menu_position' => 6,
            'show_ui' => true,
            'show_in_menu' => true,
            'show_in_nav_menus' => true,
            'show_in_admin_bar' => true,
            'can_export' => true,
            'has_archive' => true,
            'rewrite' => array(
                'slug' => 'sliders',
            ),
        )
    );
}
add_action('init', 'custom_slider');



function custom_service()
{
    register_post_type(
        'service',
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
            'menu_position' => 7,
            'show_ui' => true,
            'show_in_menu' => true,
            'show_in_nav_menus' => true,
            'show_in_admin_bar' => true,
            'can_export' => true,
            'has_archive' => true,
            'rewrite' => array(
                'slug' => 'service',
            ),
        )
    );
}
add_action('init', 'custom_service');

function query_post_type($query) {
   if(is_category()) {
    $post_type = get_query_var('post_type');
    if($post_type) {
        $post_type = $post_type;
    } else {
        $post_type = array('post', 'service');
        $query -> set('post_type',$post_type);
        return $query;
    }
   } 
}
add_filter('pre_get_posts', 'query_post_type');