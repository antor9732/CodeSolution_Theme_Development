<?php

function codeSolution_css_js_file_calling(){
    wp_enqueue_style( 'codeSolution-style' , get_stylesheet_uri() );
    wp_register_style('bootstrap', get_template_directory_uri() .'/css/bootstrap.css', array(), 'v5.3.3','all');
    wp_register_style('custom', get_template_directory_uri() .'/css/custom.css', array(), 'v1.0.0','all');
    wp_enqueue_style( 'bootstrap' );
    wp_enqueue_style( 'custom' );
    
    
    //jQuery
    wp_enqueue_script('jquery');
    wp_enqueue_script( 'bootstrap', get_template_directory_uri() .'/js/bootstrap.js', array(), 'v5.3.3', true);
    wp_enqueue_script( 'main', get_template_directory_uri() .'/js/main.js', array(), 'v1.0.0', true);
 
 }
 add_action( 'wp_enqueue_scripts', 'codeSolution_css_js_file_calling' );
 
 
 //Google font Enqueue
 function codeSolution_add_google_font(){
    wp_enqueue_style( 'codesolution_google-font', 'https://fonts.googleapis.com/css2?family=Kaisei+Decol&family=Oswald:wght@200..700&display=swap', false);
 }
 add_action( 'wp_enqueue_scripts', 'codeSolution_add_google_font' );