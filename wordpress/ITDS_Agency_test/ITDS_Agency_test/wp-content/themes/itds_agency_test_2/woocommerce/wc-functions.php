<?php




//-----------------------    ОТКЛЮЧЕНИЕ  ----------------------------

/**
 * @link https://docs.woocommerce.com/document/disable-the-default-stylesheet/
 * 
 * отключает сразу все стили для того что бы они не перебивали своим приоритетом стили сайта
 * https://youtu.be/Itkgs5xfL1c     9:30
 */
add_filter('woocommerce_enqueue_styles', '__return_empty_array');

// отключить woocommerce_result_count
remove_action('woocommerce_before_shop_loop', 'woocommerce_result_count', 20);








//-----------------------    ПОДКЛЮЧЕНИЕ  ----------------------------

function itds_agency_test_2_add_woocommerce_support()
{
   add_theme_support('woocommerce');
}
add_action('after_setup_theme', 'itds_agency_test_2_add_woocommerce_support', 20);

// переделываю breadcrumbs 
add_filter('woocommerce_breadcrumb_defaults', 'my_woocommerce_breadcrumbs');
function my_woocommerce_breadcrumbs()
{
   return array(
      'delimiter'   => '&nbsp&nbsp > &nbsp&nbsp',
      'wrap_before' => '<div class="breadcrumb-nav" itemprop="breadcrumb">',
      'wrap_after'  => '</div>',
      'before'      => '',
      'after'       => '',
      'home'        => _x('Главная', 'breadcrumb', 'woocommerce'),
   );
}
