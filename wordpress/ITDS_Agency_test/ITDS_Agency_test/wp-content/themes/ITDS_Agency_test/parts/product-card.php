<div class="product-card">
   <div class="product-card__row product-rating">
      <div class="wrap-rat-1">
         <img src="img/icon-star.png" alt="star">
         <div class="rating"><?php echo get_post_meta(get_the_ID(), 'rating', true); ?></div>
      </div>
      <div class="wrap-rat-2">
         <img src="img/icon-rat-hart.png" alt="">
         <img src="img/icon-rat-diagram.png" alt="">
      </div>
   </div>
   <div class="product-card__row product-foto">
      <?php if (has_post_thumbnail(get_the_ID())) the_post_thumbnail('goods-for-card'); ?>
   </div>
   <div class="product-card__row product-title"> <a href="<?php the_permalink(); ?>"> <?php the_title() ?></a> </div>
   <div class="product-card__row product-status"><?php echo get_post_meta(get_the_ID(), 'status', true); ?></div>
   <div class="product-card__row product-price">
      <div class="product-price__block-price">
         <div class="old-price"><?php echo get_post_meta(get_the_ID(), 'old-price', true); ?> ₴</div>
         <div class="new-price"><?php echo get_post_meta(get_the_ID(), 'new-price', true); ?> ₴</div>
      </div>
      <!-- <button id="bye">Купить</button> -->
      <a href="" class="btn-bye">Купить</a>
   </div>
</div>