<div class="cat-slider">
   <div class="arow-block__arow-left fon-white arrow-cat-slider__left"><img src="<?php echo esc_url(get_template_directory_uri() . '/assets/img/arow-block__arow-left-green.png') ?>" alt=""></div>
   <div class="arow-block__arow-right fon-white arrow-cat-slider__right"><img src="<?php echo esc_url(get_template_directory_uri() . '/assets/img/arow-block__arow-right-green.png') ?>" alt=""></div>


   <?php


   if (empty($args)) {
      $args_cat_slider = array(      // указать параметры выборки
         'posts_per_page' => 6,
      );
      $product_query_cat_slider = wc_get_products($args_cat_slider);
   } elseif ($args['type_slider'] == 'viewed_goods') {
      $viewed_products = (array) explode('|', $_COOKIE['itds_woocommerce_recently_viewed']);
      $viewed_products = array_reverse(array_map('absint', $viewed_products));

      $amount_viewed_products = count($viewed_products);
      // $product_query_cat_slider = [];
      if ($amount_viewed_products < 6) {

         $args_cat_slider = array(      // указать параметры выборки
            'posts_per_page' => (7 - $amount_viewed_products),
         );
         $product_query_cat_slider = wc_get_products($args_cat_slider);


         foreach ($viewed_products as $id_goods) {
            if (get_the_ID() == $id_goods) {
               continue;
            }
            $product_query_cat_slider[] = wc_get_product($id_goods);
         }
      } else {
         foreach ($viewed_products as $id_goods) {
            $product_query_cat_slider[] = wc_get_product($id_goods);
         }
      }
   }

   if (!empty($product_query_cat_slider)) {
      foreach ($product_query_cat_slider as $product) {
   ?>
         <div class="cat-slider__card-goods">
            <div class="cat-slider__card-goods-foto">
               <a href="<?php echo esc_url($product->get_permalink()); ?>"> <?php echo $product->get_image('woocommerce_thumbnail'); ?> </a>
            </div>
            <div class="cat-slider__card-goods-title"><a href="<?php echo esc_url($product->get_permalink()); ?>"> <?php echo esc_html_e($product->get_name()) ?></a></div>
         </div>
   <?php
      };
   } else {
      echo 'постов нет';
   };
   wp_reset_postdata();

   ?>


</div>