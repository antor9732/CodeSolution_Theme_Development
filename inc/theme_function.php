<?php
function codesolution_customize_register($wp_customize)
{

    //Header Area Function
    $wp_customize->add_section('codesolution_header_area', array(

        'title' => __('header Area', 'MahmudulHasan'),
        'description' => __('If you want to change the header area, you can change it from here'),
    ));

    $wp_customize->add_setting('codesolution_logo', array(

        'default' => get_bloginfo('template_directory') . '/img/Solution_it.png',
        'transport' => 'refresh',
    ));
    $wp_customize->add_control(new WP_Customize_Image_Control($wp_customize, 'codesolution_logo', array(
        'label' => 'Logo Upload',
        'description' => __('If you want to change or upload the logo, you can change it from here'),
        'setting' => 'codesolution_logo',
        'section' => 'codesolution_header_area',

    )));

    //Menu Area Function
    $wp_customize->add_section('codesolution_menu_option', array(
        'title' => __('Menu Position Option', 'MahmudulHasan'),
        'description' => __('If you Interested to change the menu position, you can change it from here'),

    ));
    $wp_customize->add_setting('codesolution_menu_position', array(
        'default' => 'right_menu',
        'transport' => 'refresh',
    ));
    $wp_customize->add_control('codesolution_menu_position', array(
        'label' => 'Menu Position',
        'description' => __('select the menu position from here'),
        'setting' => 'codesolution_menu_position',
        'section' => 'codesolution_menu_option',
        'type' => 'radio',
        'choices' => array(
            'left_menu' => 'Left Menu',
            'right_menu' => 'Right Menu',
            'center_menu' => 'Center Menu',
        )

    ));


    //Footer Area Function
    $wp_customize->add_section('codesolution_footer_option', array(
        'title' => __('Footer Option', 'MahmudulHasan'),
        'description' => __('If you Interested to change or the footer position, you can change it from here'),

    ));
    $wp_customize->add_setting('codesolution_copyright_section', array(
        'default' => '&copy; Copyright 2024 | CodeSolution IT',
        'transport' => 'refresh',
    ));
    $wp_customize->add_control('codesolution_copyright_section', array(
        'label' => 'Copyright Text',
        'description' => __('If you can update your copyright text from here'),
        'setting' => 'codesolution_copyright_section',
        'section' => 'codesolution_footer_option',
        'type' => 'textarea',
    ));
}

add_action('customize_register', 'codesolution_customize_register');
