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

remove_action('woocommerce_after_main_content', 'woocommerce_output_content_wrapper_end', 10);
remove_action('woocommerce_sidebar', 'woocommerce_get_sidebar', 10);
remove_action('woocommerce_after_single_product_summary', 'woocommerce_output_related_products', 20);
remove_action('woocommerce_after_main_content', 'woocommerce_output_content_wrapper_end', 10);







//-----------------------    ПОДКЛЮЧЕНИЕ  ----------------------------

function itds_agency_test_2_add_woocommerce_support()
{
   add_theme_support('woocommerce');
}
add_action('after_setup_theme', 'itds_agency_test_2_add_woocommerce_support', 20);

// переделываю breadcrumbs 
add_filter('woocommerce_breadcrumb_defaults', 'itds_agency_test_2_woocommerce_breadcrumbs');
function itds_agency_test_2_woocommerce_breadcrumbs()
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

// переделываю пагинацию 
add_filter('woocommerce_pagination_args', 'itds_agency_test_2_woocommerce_pagination_args_filter');
function itds_agency_test_2_woocommerce_pagination_args_filter($array)
{
   $array = array(
      'prev_text' => is_rtl() ? '&#10095;' : '&#10094;',    // вставить код нужных стрелок
      'next_text' => is_rtl() ? '&#10094;' : '&#10095;',
      // 'type'      => 'list',
   );

   return $array;
}

// Ставим куки на ранее просмотренный товар
add_action('template_redirect', 'itds_agency_test_2_viewed_product_cookie', 20);
function itds_agency_test_2_viewed_product_cookie()
{

   // если находимся не на странице товара, ничего не делаем
   if (!is_product()) {
      return;
   }

   if (empty($_COOKIE['itds_woocommerce_recently_viewed'])) {
      $viewed_products = array();
   } else {
      $viewed_products = (array) explode('|', $_COOKIE['itds_woocommerce_recently_viewed']);
   }

   // есле текущий товар небыл добавлен ранее то добавляем его в массив 
   if (!in_array(get_the_ID(), $viewed_products)) {
      $viewed_products[] = get_the_ID();
   }

   if (sizeof($viewed_products) > 15) {      // указать количество товатов которое нужно хранить при переполнении
      array_shift($viewed_products); // выкидываем первый элемент
   }

   // устанавливаем в куки
   wc_setcookie('itds_woocommerce_recently_viewed', join('|', $viewed_products));
}

add_action('woocommerce_after_main_content', 'itds_agency_test_2_after_main_content_action', 10);
function itds_agency_test_2_after_main_content_action()
{
   // get_template_part('/template-parts/cat-slider', null, array('type_slider' => 'viewed_goods'));
   get_template_part('/template-parts/products-tape');

   get_template_part('/template-parts/about-shop');
}
