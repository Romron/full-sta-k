<?php get_header() ?>

<?php /* Template Name: category */?>



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
     
     $posts = get_posts( array(
         'numberposts' => -1,
         'category'    => 0,
         'orderby'     => 'date',
         'order'       => 'DESC',
         'include'     => array(),
         'exclude'     => array(),
         'meta_key'    => '',
         'meta_value'  =>'',
         'post_type'   => 'product-card***',
         'suppress_filters' => true, // подавление работы фильтров изменения SQL запроса
      ) );
      
      global $post;
      
      foreach( $posts as $post ){
         setup_postdata( $post );
      
         print_r($post);
         echo "<br>********************** <br>";

         $arr_filds = get_post_meta(the_ID(),'status',1);
         print_r($arr_filds);

      }
      
         
         $args = array( 'post_type' => 'product-card', 'posts_per_page' => 10 );
         $the_query = new WP_Query( $args );
         ?>
         <?php if ( $the_query->have_posts() ) : ?>
            <?php 
            while ( $the_query->have_posts() ) : $the_query->the_post(); 
            
            // print_r($the_query);
            $the_query->the_post();
            // echo (the_ID()); 
            // the_title(); 
            // the_content(); 
            // wp_reset_postdata(); 
            //endwhile;
            ?>
           <? php else: ?>
               <p><?php //_e( 'Записи не найдены.' ); ?></p>
               <?php endif; ?>
               


       

      
         <div class="product-card">
            <div class="product-card__row product-rating">
               <div class="wrap-rat-1">
                  <img src="img/icon-star.png" alt="star">
                  <div class="rating">4.6</div>
               </div>
               <div class="wrap-rat-2">
                  <img src="img/icon-rat-hart.png" alt="">
                  <img src="img/icon-rat-diagram.png" alt="">
               </div>
            </div>




         <div class="product-card__row product-foto">
            <img src="img/produkt-foto.png" alt="produkt foto">
         </div>
         <div class="product-card__row product-title"><?php echo  get_the_title();?></div>
         <div class="product-card__row product-status"><?php echo $arr_post_meta["product-status"][0];?></div>
         <div class="product-card__row product-price">
            <div class="product-price__block-price">
               <div class="old-price"><?php echo $arr_post_meta["old-price"][0];?></div>
               <div class="new-price"><?php echo $arr_post_meta["new-price"][0];?></div>
            </div>
            <button id="bye">Купить</button>
         </div>

            


         </div>
         <div class="product-card">
            <div class="product-card__row product-rating">
               <div class="wrap-rat-1">
                  <img src="img/icon-star.png" alt="star">
                  <div class="rating">4.6</div>
               </div>
               <div class="wrap-rat-2">
                  <img src="img/icon-rat-hart.png" alt="">
                  <img src="img/icon-rat-diagram.png" alt="">
               </div>
            </div>
            <div class="product-card__row product-foto">
               <img src="img/produkt-foto.png" alt="produkt foto">
            </div>
            <div class="product-card__row product-title">Статуэтка-корзинка</div>
            <div class="product-card__row product-status">В наличии</div>
            <div class="product-card__row product-price">
               <div class="product-price__block-price">
                  <div class="old-price">1 800 ₴</div>
                  <div class="new-price">100 800 ₴</div>
               </div>
               <button id="bye">Купить</button>
            </div>
         </div>
         <div class="product-card">
            <div class="product-card__row product-rating">
               <div class="wrap-rat-1">
                  <img src="img/icon-star.png" alt="star">
                  <div class="rating">4.6</div>
               </div>
               <div class="wrap-rat-2">
                  <img src="img/icon-rat-hart.png" alt="">
                  <img src="img/icon-rat-diagram.png" alt="">
               </div>
            </div>
            <div class="product-card__row product-foto">
               <img src="img/produkt-foto.png" alt="produkt foto">
            </div>
            <div class="product-card__row product-title">Статуэтка-корзинка</div>
            <div class="product-card__row product-status">В наличии</div>
            <div class="product-card__row product-price">
               <div class="product-price__block-price">
                  <div class="old-price">1 800 ₴</div>
                  <div class="new-price">100 800 ₴</div>
               </div>
               <button id="bye">Купить</button>
            </div>
         </div>
         <div class="product-card">
            <div class="product-card__row product-rating">
               <div class="wrap-rat-1">
                  <img src="img/icon-star.png" alt="star">
                  <div class="rating">4.6</div>
               </div>
               <div class="wrap-rat-2">
                  <img src="img/icon-rat-hart.png" alt="">
                  <img src="img/icon-rat-diagram.png" alt="">
               </div>
            </div>
            <div class="product-card__row product-foto">
               <img src="img/produkt-foto.png" alt="produkt foto">
            </div>
            <div class="product-card__row product-title">Статуэтка-корзинка</div>
            <div class="product-card__row product-status">В наличии</div>
            <div class="product-card__row product-price">
               <div class="product-price__block-price">
                  <div class="old-price">1 800 ₴</div>
                  <div class="new-price">100 800 ₴</div>
               </div>
               <button id="bye">Купить</button>
            </div>
         </div>
         <div class="product-card">
            <div class="product-card__row product-rating">
               <div class="wrap-rat-1">
                  <img src="img/icon-star.png" alt="star">
                  <div class="rating">4.6</div>
               </div>
               <div class="wrap-rat-2">
                  <img src="img/icon-rat-hart.png" alt="">
                  <img src="img/icon-rat-diagram.png" alt="">
               </div>
            </div>
            <div class="product-card__row product-foto">
               <img src="img/produkt-foto.png" alt="produkt foto">
            </div>
            <div class="product-card__row product-title">Статуэтка-корзинка</div>
            <div class="product-card__row product-status">В наличии</div>
            <div class="product-card__row product-price">
               <div class="product-price__block-price">
                  <div class="old-price">1 800 ₴</div>
                  <div class="new-price">100 800 ₴</div>
               </div>
               <button id="bye">Купить</button>
            </div>
         </div>
         <div class="product-card">
            <div class="product-card__row product-rating">
               <div class="wrap-rat-1">
                  <img src="img/icon-star.png" alt="star">
                  <div class="rating">4.6</div>
               </div>
               <div class="wrap-rat-2">
                  <img src="img/icon-rat-hart.png" alt="">
                  <img src="img/icon-rat-diagram.png" alt="">
               </div>
            </div>
            <div class="product-card__row product-foto">
               <img src="img/produkt-foto.png" alt="produkt foto">
            </div>
            <div class="product-card__row product-title">Статуэтка-корзинка</div>
            <div class="product-card__row product-status">В наличии</div>
            <div class="product-card__row product-price">
               <div class="product-price__block-price">
                  <div class="old-price">1 800 ₴</div>
                  <div class="new-price">100 800 ₴</div>
               </div>
               <button id="bye">Купить</button>
            </div>
         </div>
         <div class="product-card">
            <div class="product-card__row product-rating">
               <div class="wrap-rat-1">
                  <img src="img/icon-star.png" alt="star">
                  <div class="rating">4.6</div>
               </div>
               <div class="wrap-rat-2">
                  <img src="img/icon-rat-hart.png" alt="">
                  <img src="img/icon-rat-diagram.png" alt="">
               </div>
            </div>
            <div class="product-card__row product-foto">
               <img src="img/produkt-foto.png" alt="produkt foto">
            </div>
            <div class="product-card__row product-title">Статуэтка-корзинка</div>
            <div class="product-card__row product-status">В наличии</div>
            <div class="product-card__row product-price">
               <div class="product-price__block-price">
                  <div class="old-price">1 800 ₴</div>
                  <div class="new-price">100 800 ₴</div>
               </div>
               <button id="bye">Купить</button>
            </div>
         </div>
         <div class="product-card">
            <div class="product-card__row product-rating">
               <div class="wrap-rat-1">
                  <img src="img/icon-star.png" alt="star">
                  <div class="rating">4.6</div>
               </div>
               <div class="wrap-rat-2">
                  <img src="img/icon-rat-hart.png" alt="">
                  <img src="img/icon-rat-diagram.png" alt="">
               </div>
            </div>
            <div class="product-card__row product-foto">
               <img src="img/produkt-foto.png" alt="produkt foto">
            </div>
            <div class="product-card__row product-title">Статуэтка-корзинка</div>
            <div class="product-card__row product-status">В наличии</div>
            <div class="product-card__row product-price">
               <div class="product-price__block-price">
                  <div class="old-price">1 800 ₴</div>
                  <div class="new-price">100 800 ₴</div>
               </div>
               <button id="bye">Купить</button>
            </div>
         </div>
         <div class="product-card">
            <div class="product-card__row product-rating">
               <div class="wrap-rat-1">
                  <img src="img/icon-star.png" alt="star">
                  <div class="rating">4.6</div>
               </div>
               <div class="wrap-rat-2">
                  <img src="img/icon-rat-hart.png" alt="">
                  <img src="img/icon-rat-diagram.png" alt="">
               </div>
            </div>
            <div class="product-card__row product-foto">
               <img src="img/produkt-foto.png" alt="produkt foto">
            </div>
            <div class="product-card__row product-title">Статуэтка-корзинка</div>
            <div class="product-card__row product-status">В наличии</div>
            <div class="product-card__row product-price">
               <div class="product-price__block-price">
                  <div class="old-price">1 800 ₴</div>
                  <div class="new-price">100 800 ₴</div>
               </div>
               <button id="bye">Купить</button>
            </div>
         </div>
         <div class="product-card">
            <div class="product-card__row product-rating">
               <div class="wrap-rat-1">
                  <img src="img/icon-star.png" alt="star">
                  <div class="rating">4.6</div>
               </div>
               <div class="wrap-rat-2">
                  <img src="img/icon-rat-hart.png" alt="">
                  <img src="img/icon-rat-diagram.png" alt="">
               </div>
            </div>
            <div class="product-card__row product-foto">
               <img src="img/produkt-foto.png" alt="produkt foto">
            </div>
            <div class="product-card__row product-title">Статуэтка-корзинка</div>
            <div class="product-card__row product-status">В наличии</div>
            <div class="product-card__row product-price">
               <div class="product-price__block-price">
                  <div class="old-price">1 800 ₴</div>
                  <div class="new-price">100 800 ₴</div>
               </div>
               <button id="bye">Купить</button>
            </div>
         </div>
         <div class="product-card">
            <div class="product-card__row product-rating">
               <div class="wrap-rat-1">
                  <img src="img/icon-star.png" alt="star">
                  <div class="rating">4.6</div>
               </div>
               <div class="wrap-rat-2">
                  <img src="img/icon-rat-hart.png" alt="">
                  <img src="img/icon-rat-diagram.png" alt="">
               </div>
            </div>
            <div class="product-card__row product-foto">
               <img src="img/produkt-foto.png" alt="produkt foto">
            </div>
            <div class="product-card__row product-title">Статуэтка-корзинка</div>
            <div class="product-card__row product-status">В наличии</div>
            <div class="product-card__row product-price">
               <div class="product-price__block-price">
                  <div class="old-price">1 800 ₴</div>
                  <div class="new-price">100 800 ₴</div>
               </div>
               <button id="bye">Купить</button>
            </div>
         </div>
         <div class="product-card">
            <div class="product-card__row product-rating">
               <div class="wrap-rat-1">
                  <img src="img/icon-star.png" alt="star">
                  <div class="rating">4.6</div>
               </div>
               <div class="wrap-rat-2">
                  <img src="img/icon-rat-hart.png" alt="">
                  <img src="img/icon-rat-diagram.png" alt="">
               </div>
            </div>
            <div class="product-card__row product-foto">
               <img src="img/produkt-foto.png" alt="produkt foto">
            </div>
            <div class="product-card__row product-title">Статуэтка-корзинка</div>
            <div class="product-card__row product-status">В наличии</div>
            <div class="product-card__row product-price">
               <div class="product-price__block-price">
                  <div class="old-price">1 800 ₴</div>
                  <div class="new-price">100 800 ₴</div>
               </div>
               <button id="bye">Купить</button>
            </div>
         </div>
         <div class="product-card">
            <div class="product-card__row product-rating">
               <div class="wrap-rat-1">
                  <img src="img/icon-star.png" alt="star">
                  <div class="rating">4.6</div>
               </div>
               <div class="wrap-rat-2">
                  <img src="img/icon-rat-hart.png" alt="">
                  <img src="img/icon-rat-diagram.png" alt="">
               </div>
            </div>
            <div class="product-card__row product-foto">
               <img src="img/produkt-foto.png" alt="produkt foto">
            </div>
            <div class="product-card__row product-title">Статуэтка-корзинка</div>
            <div class="product-card__row product-status">В наличии</div>
            <div class="product-card__row product-price">
               <div class="product-price__block-price">
                  <div class="old-price">1 800 ₴</div>
                  <div class="new-price">100 800 ₴</div>
               </div>
               <button id="bye">Купить</button>
            </div>
         </div>
         <div class="product-card">
            <div class="product-card__row product-rating">
               <div class="wrap-rat-1">
                  <img src="img/icon-star.png" alt="star">
                  <div class="rating">4.6</div>
               </div>
               <div class="wrap-rat-2">
                  <img src="img/icon-rat-hart.png" alt="">
                  <img src="img/icon-rat-diagram.png" alt="">
               </div>
            </div>
            <div class="product-card__row product-foto">
               <img src="img/produkt-foto.png" alt="produkt foto">
            </div>
            <div class="product-card__row product-title">Статуэтка-корзинка</div>
            <div class="product-card__row product-status">В наличии</div>
            <div class="product-card__row product-price">
               <div class="product-price__block-price">
                  <div class="old-price">1 800 ₴</div>
                  <div class="new-price">100 800 ₴</div>
               </div>
               <button id="bye">Купить</button>
            </div>
         </div>
         <div class="product-card">
            <div class="product-card__row product-rating">
               <div class="wrap-rat-1">
                  <img src="img/icon-star.png" alt="star">
                  <div class="rating">4.6</div>
               </div>
               <div class="wrap-rat-2">
                  <img src="img/icon-rat-hart.png" alt="">
                  <img src="img/icon-rat-diagram.png" alt="">
               </div>
            </div>
            <div class="product-card__row product-foto">
               <img src="img/produkt-foto.png" alt="produkt foto">
            </div>
            <div class="product-card__row product-title">Статуэтка-корзинка</div>
            <div class="product-card__row product-status">В наличии</div>
            <div class="product-card__row product-price">
               <div class="product-price__block-price">
                  <div class="old-price">1 800 ₴</div>
                  <div class="new-price">100 800 ₴</div>
               </div>
               <button id="bye">Купить</button>
            </div>
         </div>
         <div class="product-card">
            <div class="product-card__row product-rating">
               <div class="wrap-rat-1">
                  <img src="img/icon-star.png" alt="star">
                  <div class="rating">4.6</div>
               </div>
               <div class="wrap-rat-2">
                  <img src="img/icon-rat-hart.png" alt="">
                  <img src="img/icon-rat-diagram.png" alt="">
               </div>
            </div>
            <div class="product-card__row product-foto">
               <img src="img/produkt-foto.png" alt="produkt foto">
            </div>
            <div class="product-card__row product-title">Статуэтка-корзинка</div>
            <div class="product-card__row product-status">В наличии</div>
            <div class="product-card__row product-price">
               <div class="product-price__block-price">
                  <div class="old-price">1 800 ₴</div>
                  <div class="new-price">100 800 ₴</div>
               </div>
               <button id="bye">Купить</button>
            </div>
         </div>




      </div>
      <div class="pagination"></div>
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
         <div class="product-card">
            <div class="product-card__row product-rating">
               <div class="wrap-rat-1">
                  <img src="img/icon-star.png" alt="star">
                  <div class="rating">4.6</div>
               </div>
               <div class="wrap-rat-2">
                  <img src="img/icon-rat-hart.png" alt="">
                  <img src="img/icon-rat-diagram.png" alt="">
               </div>
            </div>
            <div class="product-card__row product-foto">
               <img src="img/produkt-foto.png" alt="produkt foto">
            </div>
            <div class="product-card__row product-title">Статуэтка-корзинка</div>
            <div class="product-card__row product-status">В наличии</div>
            <div class="product-card__row product-price">
               <div class="product-price__block-price">
                  <div class="old-price">1 800 ₴</div>
                  <div class="new-price">100 800 ₴</div>
               </div>
               <button id="bye">Купить</button>
            </div>
         </div>
         <div class="product-card">
            <div class="product-card__row product-rating">
               <div class="wrap-rat-1">
                  <img src="img/icon-star.png" alt="star">
                  <div class="rating">4.6</div>
               </div>
               <div class="wrap-rat-2">
                  <img src="img/icon-rat-hart.png" alt="">
                  <img src="img/icon-rat-diagram.png" alt="">
               </div>
            </div>
            <div class="product-card__row product-foto">
               <img src="img/produkt-foto.png" alt="produkt foto">
            </div>
            <div class="product-card__row product-title">Статуэтка-корзинка</div>
            <div class="product-card__row product-status">В наличии</div>
            <div class="product-card__row product-price">
               <div class="product-price__block-price">
                  <div class="old-price">1 800 ₴</div>
                  <div class="new-price">100 800 ₴</div>
               </div>
               <button id="bye">Купить</button>
            </div>
         </div>
         <div class="product-card">
            <div class="product-card__row product-rating">
               <div class="wrap-rat-1">
                  <img src="img/icon-star.png" alt="star">
                  <div class="rating">4.6</div>
               </div>
               <div class="wrap-rat-2">
                  <img src="img/icon-rat-hart.png" alt="">
                  <img src="img/icon-rat-diagram.png" alt="">
               </div>
            </div>
            <div class="product-card__row product-foto">
               <img src="img/produkt-foto.png" alt="produkt foto">
            </div>
            <div class="product-card__row product-title">Статуэтка-корзинка</div>
            <div class="product-card__row product-status">В наличии</div>
            <div class="product-card__row product-price">
               <div class="product-price__block-price">
                  <div class="old-price">1 800 ₴</div>
                  <div class="new-price">100 800 ₴</div>
               </div>
               <button id="bye">Купить</button>
            </div>
         </div>
         <div class="product-card">
            <div class="product-card__row product-rating">
               <div class="wrap-rat-1">
                  <img src="img/icon-star.png" alt="star">
                  <div class="rating">4.6</div>
               </div>
               <div class="wrap-rat-2">
                  <img src="img/icon-rat-hart.png" alt="">
                  <img src="img/icon-rat-diagram.png" alt="">
               </div>
            </div>
            <div class="product-card__row product-foto">
               <img src="img/produkt-foto.png" alt="produkt foto">
            </div>
            <div class="product-card__row product-title">Статуэтка-корзинка</div>
            <div class="product-card__row product-status">В наличии</div>
            <div class="product-card__row product-price">
               <div class="product-price__block-price">
                  <div class="old-price">1 800 ₴</div>
                  <div class="new-price">100 800 ₴</div>
               </div>
               <button id="bye">Купить</button>
            </div>
         </div>
         </div>			
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