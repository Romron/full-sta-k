<div class="wrap-novelties">
   <div class="novelties">
      <div class="novelties__row">
         <div class="novelties__title">Новинки</div>
         <div class="arow-block">
            <div class="arow-block__arow-left fon-white"><img src="<?php echo esc_url(get_template_directory_uri() . '/assets/img/arow-block__arow-left-green.png'); ?>" alt=""></div>
            <div class="arow-block__arow-right fon-white"><img src="<?php echo esc_url(get_template_directory_uri() . '/assets/img/arow-block__arow-right-green.png'); ?>" alt=""></div>
         </div>
      </div>
      <div class="novelties__cards-block">
         <?php
         $args_novelties = array(      // указать параметры выборки 
            'posts_per_page' => 4,
         );
         $product_query_novelties = wc_get_products($args_novelties);
         if (!empty($product_query_novelties)) {
            foreach ($product_query_novelties as $product) {

               $products_type = $product->get_type();

               get_template_part('/template-parts/product-card', null, array('product' => $product));
            };
         } else {
            echo 'постов нет';
         };
         wp_reset_postdata();
         ?>

      </div>
   </div>
</div>