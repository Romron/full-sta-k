<!-- <div class="test-php-block"> -->
<?php
$product = $args['product'];
?>


<div class="product-card">
   <div class="product-card__row product-rating">
      <?php if ($product->get_average_rating()) : ?>
         <div class="wrap-rat-1">
            <?php echo $product->get_average_rating(); ?>
            <div class="rating"><?php echo esc_html_e($product->get_rating_counts()); ?></div>
         </div>

      <?php else : ?>
         <div class="wrap-rat-1" style="background-color:#fab2b2;">
            <img src="img/icon-star.png" alt="star">
            <div class="rating"><?php echo get_post_meta(get_the_ID(), 'rating', true); ?></div>
         </div>
      <?php endif; ?>
      <div class="wrap-rat-2">
         <img src="img/icon-rat-hart.png" alt="">
         <img src="img/icon-rat-diagram.png" alt="">
      </div>
   </div>


   <div class="product-card__row product-foto">
      <?php echo $product->get_image('woocommerce_thumbnail'); ?>
   </div>
   <div class="product-card__row product-title"> <a href="<?php echo esc_url($product->get_permalink()); ?>"> <?php echo esc_html_e($product->get_name()) ?></a> </div>
   <div class="product-card__row product-status"><?php echo esc_html_e($product->get_stock_status()); ?></div>
   <div class="product-card__row product-price">
      <div class="product-price__block-price">
         <?php if ($product->get_sale_price()) : ?>
            <div class="old-price"><?php echo esc_html_e($product->get_regular_price()); ?> ₴</div>
            <div class="new-price"><?php echo esc_html_e($product->get_sale_price()); ?> ₴</div>
         <?php else : ?>
            <div class="new-price"><?php echo esc_html_e($product->get_regular_price()); ?> ₴</div>
         <?php endif; ?>
      </div>
      <!-- <button id="bye">Купить</button> -->
      <a href="<?php
               echo apply_filters(
                  'woocommerce_loop_add_to_cart_link',
                  esc_url($product->add_to_cart_url()),
                  $product,
                  $args
               ) ?>" class="btn-bye">Купить</a>
      <?php echo esc_html_e($product->get_id()); ?>
      <?php

      // echo apply_filters(
      //    'woocommerce_loop_add_to_cart_link', // WPCS: XSS ok.
      //    sprintf(
      //       '<a href="%s" data-quantity="%s" class="%s" %s>%s</a>',
      //       esc_url($product->add_to_cart_url()),
      //       esc_attr(isset($args['quantity']) ? $args['quantity'] : 1),
      //       esc_attr(isset($args['class']) ? $args['class'] : 'button'),
      //       isset($args['attributes']) ? wc_implode_html_attributes($args['attributes']) : '',
      //       esc_html('Купить')
      //    ),
      // );


      ?>
   </div>
</div>