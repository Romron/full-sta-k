<?php 
require_once ABSPATH . '/wp-admin/includes/taxonomy.php';


function ITDS_Agency_test() {

   wp_enqueue_style( 'reset', get_template_directory_uri() . './assets/css/reset.css' );
   wp_enqueue_style( 'style', get_template_directory_uri() . './assets/css/style.css' );

   wp_enqueue_script( 'script', get_template_directory_uri() . './assets/js/script.js', array(), '20151215', true );
   
}
add_action( 'wp_enqueue_scripts', 'ITDS_Agency_test' );
show_admin_bar(false);

add_theme_support( 'post-thumbnails' );
add_theme_support( 'post-thumbnails', array( 'category' ) );


function ITDS_reg_post_type(){

	$args = array(
		'label' => esc_html__('Карточки товаров'), 
		'labels' => [],
		// 'title','editor','author','thumbnail','excerpt','trackbacks','custom-fields',
		//	'comments','revisions','page-attributes','post-formats'
		'supports'=> [ 'title', 'editor','thumbnail', 'custom-fields' ], 
		'public'	=> true, 
		'publicly_queryable'  => true,
		'show_ui'	=> true,
		'show_in_menu'	=> true,
	);
	register_post_type('goods', $args);

}
add_action('init', 'ITDS_reg_post_type');