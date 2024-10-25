<?php
/**
 * My Theme functions and definitions
 */


 // Theme Title
 add_theme_support('title-tag');


//Theme css and jquery File calling
function codeSolution_css_js_file_calling(){
   wp_enqueue_style( 'codeSolution-style' , get_stylesheet_uri() );
   wp_register_style('bootstrap', get_template_directory_uri() .'/css/bootstrap.css', array(), 'v5.3.3','all');
   

}
add_action( 'wp_enqueue_scripts', 'codeSolution_css_js_file_calling' );

















?>