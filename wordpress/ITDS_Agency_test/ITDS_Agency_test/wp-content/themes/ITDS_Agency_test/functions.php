<?php 



function ITDS_Agency_test() {

   wp_enqueue_style( 'reset', get_template_directory_uri() . './assets/css/reset.css' );
   wp_enqueue_style( 'style', get_template_directory_uri() . './assets/css/style.css' );

   wp_enqueue_script( 'script', get_template_directory_uri() . './assets/js/script.js', array(), '20151215', true );
   
}

add_action( 'wp_enqueue_scripts', 'ITDS_Agency_test' );
show_admin_bar(false);







add_theme_support( 'post-thumbnails' );
add_theme_support( 'post-thumbnails', array( 'category' ) );