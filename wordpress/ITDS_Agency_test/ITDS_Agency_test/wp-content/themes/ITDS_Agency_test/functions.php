<?php 



function ITDS_Agency_test() {

   wp_enqueue_style( 'reset', get_template_directory_uri() . './assets/css/reset.css' );
   wp_enqueue_style( 'style', get_template_directory_uri() . './assets/css/style.css' );

//    wp_enqueue_style( 'aos', get_template_directory_uri() . '/assets/css/aos.min.css' );

//    wp_enqueue_style( 'hamb', get_template_directory_uri() . '/assets/css/hamburgers/hamburgers.min.css' );

//    wp_enqueue_style( 'owl', get_template_directory_uri() . '/assets/css/owl.carousel.min.css' );

//    wp_enqueue_style( 'icomoon', get_template_directory_uri() . '/assets/fonts/icomoon/style.css' );
   
//    wp_enqueue_style( 'anim', get_template_directory_uri() . '/assets/css/animsition.min.css' );

//   wp_enqueue_style( 'maincss', get_template_directory_uri() . '/assets/css/style.css' );

   wp_enqueue_script( 'script', get_template_directory_uri() . './assets/js/script.js', array(), '20151215', true );
   
//    wp_enqueue_script( 'main', get_template_directory_uri() . '/assets/js/main.js', array(), '20151215', true );
}

add_action( 'wp_enqueue_scripts', 'ITDS_Agency_test' );
show_admin_bar(false);


function ITDS_Agency_test_posttype_product_card() {
   register_post_type( 'product-card***',
       array(
           'labels' => array(
           'name' => __( 'Карточки продуктов' ),
           'singular_name' => __( 'Карточка продукта' )
       ),
       'public' => true,
       'has_archive' => true,
       'rewrite' => array('slug' => 'product-card'),
       )
   );
}
add_action( 'init', 'ITDS_Agency_test_posttype_product_card' );


add_action('add_meta_boxes', 'my_extra_fields', 1);

function my_extra_fields() {
	add_meta_box( 'extra_fields', 'Дополнительные поля', 'extra_fields_box_func', 'post', 'normal', 'high'  );
}



add_theme_support( 'post-thumbnails' );
add_theme_support( 'post-thumbnails', array( 'category' ) );