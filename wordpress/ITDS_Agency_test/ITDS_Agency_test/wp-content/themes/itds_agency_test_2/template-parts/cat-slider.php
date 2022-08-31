<div class="cat-slider">
   <div class="arow-block__arow-left fon-white arrow-cat-slider__left"><img src="<?php echo esc_url(get_template_directory_uri() . '/assets/img/arow-block__arow-left-green.png') ?>" alt=""></div>
   <div class="arow-block__arow-right fon-white arrow-cat-slider__right"><img src="<?php echo esc_url(get_template_directory_uri() . '/assets/img/arow-block__arow-right-green.png') ?>" alt=""></div>

   <?php

   $args_cat_slider = array(      // указать параметры выборки
      'posts_per_page' => 4,
   );
   $product_query_cat_slider = wc_get_products($args_cat_slider);
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