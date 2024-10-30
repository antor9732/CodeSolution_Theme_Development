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
   wp_register_style('custom', get_template_directory_uri() .'/css/custom.cse', array(), 'v1.0.0','all');
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
   wp_enqueue_style( 'codesolution_google-font', 'https://fonts.googleapis.com/css2?family=Kaisei+Decol&family=Oswald:wght@200..700&display=swap', false );
}
add_action( 'wp_enqueue_scripts', 'codeSolution_add_google_font' );


//Theme function for Menu
   function codesolution_customize_register($wp_customize){

      $wp_customize->add_section('codesolution_header_area', array(

         'title' => __('header Area', 'MahmudulHasan'),
         'description' => __('If you want to change the header area, you can change it from here'),
      ));

      $wp_customize->add_setting('codesolution_logo', array(

         'default' => get_bloginfo('template_directory') . '/img/Solution_it.png',
         'transport'=> 'refresh',
      ));
      $wp_customize->add_control(new WP_Customize_Image_Control($wp_customize, 'codesolution_logo', array(
         'label'=> 'Logo Upload',
         'description' => __('If you want to change or upload the logo, you can change it from here'),
         'setting' => 'codesolution_logo',
         'section' => 'codesolution_header_area',

      )));

   }

   add_action('customize_register', 'codesolution_customize_register');















?>