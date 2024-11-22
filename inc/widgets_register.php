<?php
// sidebar Register Function
function codeSolutionIT_widgets_register()
{
    register_sidebar(array(
        'name' => __('Main Widget Area', 'MahmudulHasan'),
        'id' => 'sidebar-1',
        'description' => __('The main widget area', 'MahmudulHasan'),
        'before_widget' => '<div class="child_sidebar">',
        'after_widget' => '</div>',
        'before_title' => '<h2 class="title">',
        'after_title' => '</h2>',
    ));
    register_sidebar(array(
        'name' => __('Footer 1', 'MahmudulHasan'),
        'id' => 'footer-1',
        'description' => __('The main widget area', 'MahmudulHasan'),
        'before_widget' => '<div class="child_sidebar">',
        'after_widget' => '</div>',
        'before_title' => '<h2 class="title">',
        'after_title' => '</h2>',
    ));
    register_sidebar(array(
        'name' => __('Footer 2', 'MahmudulHasan'),
        'id' => 'footer-2',
        'description' => __('The main widget area', 'MahmudulHasan'),
        'before_widget' => '<div class="child_sidebar">',
        'after_widget' => '</div>',
        'before_title' => '<h2 class="title">',
        'after_title' => '</h2>',
    ));
    register_sidebar(array(
        'name' => __('Footer 3', 'MahmudulHasan'),
        'id' => 'footer-3',
        'description' => __('The main widget area', 'MahmudulHasan'),
        'before_widget' => '<div class="child_sidebar">',
        'after_widget' => '</div>',
        'before_title' => '<h2 class="title">',
        'after_title' => '</h2>',
    ));
}
add_action('widgets_init', 'codeSolutionIT_widgets_register');
