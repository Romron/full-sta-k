<?php




//-----------------------    ОТКЛЮЧЕНИЕ  ----------------------------

/**
 * @link https://docs.woocommerce.com/document/disable-the-default-stylesheet/
 * 
 * отключает сразу все стили для того что бы они не перебивали своим приоритетом стили сайта
 * https://youtu.be/Itkgs5xfL1c     9:30
 */
add_filter('woocommerce_enqueue_styles', '__return_empty_array');










//-----------------------    ПОДКЛЮЧЕНИЕ  ----------------------------
function itds_agency_test_2_add_woocommerce_support()
{
   add_theme_support('woocommerce');
}
add_action('after_setup_theme', 'itds_agency_test_2_add_woocommerce_support');
