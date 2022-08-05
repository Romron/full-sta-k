<?php get_header() ?>

<?php /* Template Name: category */ ?>


<main>
   <div class="breadcrumb-nav">
      <a href="">Главная</a>
      <img src="img/arow-cat-right.png" alt="">
      <a href="">Кухня и столовая</a>
   </div>
   <div class="cat-title">Кухня и столовая</div>
   <div class="cat-slider">
      <div class="arow-block__arow-left fon-white arrow-cat-slider__left"><img src="img/arow-block__arow-left-green.png" alt=""></div>
      <div class="arow-block__arow-right fon-white arrow-cat-slider__right"><img src="img/arow-block__arow-right-green.png" alt=""></div>
      <div class="cat-slider__card-goods">
         <div class="cat-slider__card-goods-foto"><img src="img/slider-foto-1.png" alt=""></div>
         <div class="cat-slider__card-goods-title">Посуда для напитков</div>
      </div>
      <div class="cat-slider__card-goods">
         <div class="cat-slider__card-goods-foto"><img src="img/slider-foto-2.png" alt=""></div>
         <div class="cat-slider__card-goods-title">Посуда для напитков</div>
      </div>
      <div class="cat-slider__card-goods">
         <div class="cat-slider__card-goods-foto"><img src="img/slider-foto-3.png" alt=""></div>
         <div class="cat-slider__card-goods-title">Посуда для напитков</div>
      </div>
      <div class="cat-slider__card-goods">
         <div class="cat-slider__card-goods-foto"><img src="img/slider-foto-4.png" alt=""></div>
         <div class="cat-slider__card-goods-title">Посуда для напитков</div>
      </div>
      <div class="cat-slider__card-goods">
         <div class="cat-slider__card-goods-foto"><img src="img/slider-foto-5.png" alt=""></div>
         <div class="cat-slider__card-goods-title">Посуда для напитков</div>
      </div>
      <div class="cat-slider__card-goods">
         <div class="cat-slider__card-goods-foto"><img src="img/slider-foto-6.png" alt=""></div>
         <div class="cat-slider__card-goods-title">Посуда для напитков</div>
      </div>
   </div>
   <div class="view">
      <div class="view__title">Вид</div>
      <div class="view__preview">
         <img src="img/view-1.png" alt="">
         <img src="img/view-2.png" alt="">
      </div>
   </div>
   <div class="block-goods">
      <?php
      $paged = (get_query_var('paged')) ? get_query_var('paged') : 1;   // для пагинации 
      $args = array(
         'post_type' => 'goods',
         // 'posts_per_page' => -1,
         'posts_per_page' => 1,  // for test
         'paged' => $paged,
      );
      $goods_query = new WP_Query($args);
      if ($goods_query->have_posts()) :
         $count_produkt_cards = 1;
         while ($goods_query->have_posts()) :
            $goods_query->the_post();
            $arr_post_meta = get_post_meta(get_the_ID(), false);
            get_template_part('parts/product-card');
            $count_produkt_cards++;
            if ($count_produkt_cards > 12) {
               break;
            }
         endwhile;
         wp_reset_postdata();
      ?>
   </div>
   <div class="pagination-block">
      <div class="pagination__pages">
         <?php ITDS_Agency_pagination($goods_query); ?>
      </div>
   <?php
      // else: echo 'Записи не найдены.';
      endif;
   ?>
   </div>
</main>

<div class="wrap-novelties">
   <div class="novelties">
      <div class="novelties__row">
         <div class="novelties__title">просмотренные товары</div>
         <div class="arow-block">
            <div class="arow-block__arow-left fon-white"><img src="img/arow-block__arow-left-green.png" alt=""></div>
            <div class="arow-block__arow-right fon-white"><img src="img/arow-block__arow-right-green.png" alt=""></div>
         </div>
      </div>
      <div class="novelties__cards-block">
         <?php $args = array(
            'post_type' => 'goods',
            'posts_per_page' => 4,
         );
         $goods = new WP_Query($args);
         if ($goods->have_posts()) : while ($goods->have_posts()) : $goods->the_post(); ?>
               <?php get_template_part('parts/product-card'); ?>
            <?php endwhile;
         else : ?>
            постов нет
         <?php endif;
         wp_reset_postdata(); ?></div>
   </div>
</div>

<div class="wrap-about wrap-category-block">
   <div class="about">
      <div class="about__foto"><img src="img/about-foto.png" alt="about-foto"></div>

      <div class="about__text">
         <div class="about__title category-block__title">О магазине</div>
         <div class="about__text-text category-block__text">
            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Dolor mattis egestas arcu vitae, habitant elit. Egestas rhoncus, libero tincidunt integer euismod iaculis netus tristique. Quam sed ultricies molestie nullam. Erat non nunc id sed. Cursus lorem mattis sagittis dui ultricies felis erat. Proin bibendum aliquam,
            </p>
            <p>Tincidunt morbi nunc donec congue tincidunt est mi non semper. Id id integer amet sit at lectus turpis at sed. Nulla mauris curabitur diam, in. In dictumst diam id vel fames. Blandit vulputate vel mi nulla. Tempus consectetur donec gravida phasellus. Id justo, volutpat leo pellentesque. Aliquam ut ultricies vel sed. Aliquet quisque aliquam nam amet faucibus. Molestie tincidunt est etiam vitae orci enim, turpis. Mi nullam tincidunt elit ut.
            </p>
            <p>pellentesque purus. Elementum ac blandit odio massa vestibulum, erat pulvinar sed cursus. Aenean eget ullamcorper nisl amet. Nulla tincidunt sagittis, morbi sit rhoncus mattis porttitor ac. Elit ultricies sed tincidunt libero feugiat. Augue nulla purus elit ac, leo, eget.
            </p>
         </div>
      </div>

   </div>
</div>

<?php get_footer() ?>



<script>
   document.write('<script src="http://' + (location.host || 'localhost').split(':')[0] + ':35729/livereload.js?snipver=1"></' + 'script>')
</script>