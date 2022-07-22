<?php get_header() ?>

<?php /* Template Name: goods */?>



	<main>
      <div class="breadcrumb-nav ">
         <a href="">Главная</a>
         <img src="img/arow-cat-right.png" alt="">
         <a href="">Кухня и столовая</a>
      </div>
      <div class="goods-block">
      	<div class="goods-block__slider-row">
	         <div class="goods-foto-wiht-slider">
	         	<div class="goods-foto-wiht-slider__foto">
	         		<img src="img/produkt-foto.png" alt="produkt foto">
	         	</div>	
	         	<div class="goods-foto-wiht-slider__slider">
	         		<div class="goods-slider-arrow-up"><img src="img/goods-slider-arrow-up.png" alt=""></div>
	         		<div class="goods-foto-wiht-slider__slider-card">
		         		<img src="img/produkt-foto.png" alt="produkt foto">
	         		</div>
	         		<div class="goods-foto-wiht-slider__slider-card">
		         		<img src="img/produkt-foto.png" alt="produkt foto">
	         		</div>
	         		<div class="goods-foto-wiht-slider__slider-card">
		         		<img src="img/produkt-foto.png" alt="produkt foto">
	         		</div>
	         		<div class="goods-foto-wiht-slider__slider-card">
		         		<img src="img/produkt-foto.png" alt="produkt foto">
	         		</div>
	         		<div class="goods-slider-arrow-down"><img src="img/goods-slider-arrow-down.png" alt=""></div>
	         	</div>
	         </div>
<div class="test-php-block">
				<?php 
            
				$post = get_post();
				setup_postdata( $post );
				// $arr_post_meta = get_post_meta(get_the_ID());
				$arr_post_meta = get_post_meta(post_id:14);
				print_r($arr_post_meta);
				echo '<br>**************<br>';



				$args = array( 'post_type' => 'product-card', 
									'posts_per_page' => -1 
								);
				$the_query = new WP_Query( $args );
				if ( $the_query->have_posts() ) :
					$count_produkt_cards = 1;
					while ( $the_query->have_posts() ) :
						$the_query->the_post(); 
						$arr_post_meta = get_post_meta(get_the_ID(),false);
						
						// print_r($arr_post_meta);      // for tests
			  

						wp_reset_postdata(); 
					endwhile;
				// else: echo 'Записи не найдены.';
			endif;

			  ?>
</div>
	         <div class="goods-discription">
	         	<div class="goods-discription__title-row">
		         	<div class="goods-discription__title">Статуэтка-корзинка</div>
		         	<div class="goods-discription__status">
							<div class="goods-discription__status-status">В наличии</div>
							<img src="img/icon-star.png" alt="star">
							<div class="goods-discription__rating">4.6</div>
		         	</div>
	         	</div>
	         	<div class="goods-discription__text">
	         		<p>Артикул				447-333</p>
	         		<p>Колекция				Серебро</p>
	         		<p>Размер				23*11*19см</p>
	         		<p>Упаковка				пенопласт+коричневый картон</p>
	         		<p>Кол-во дизайнов	1</p>
	         		<p>Материал				Полистоун</p>
	         		<p>Категория			Статуэтки полирезиновые</p>
	         	</div>
	         	<div class="goods-discription__price">
	         		<div class="goods-discription__old-price">1 800 ₴</div>
	         		<div class="goods-discription__new-price">100 800 ₴</div>
	         	</div>
	         	<div class="goods-discription__buttons">
	         		<div class="amount">
	         			<p>-</p>
	         			<p>1</p>
	         			<p>+</p>
	         		</div>
	         		<button id="goods-discription__bye">Купить</button>
	         		<button id="goods-discription__bye-on-one-click">Купить в один клик</button>
						<div class="wrap-rat-2">
							<img src="img/icon-rat-hart.png" alt="">
							<img src="img/icon-rat-diagram.png" alt="">
						</div>	         		
	         	</div>
	         </div>
	         
	      </div>
	         <div class="row-info-card">
	           

			<?php
		// 		wp_reset_postdata(); 
		// 		endwhile;
		// 	// else: echo 'Записи не найдены.';
		// endif;
		?>





				<div class="info-card">
					<!-- <div class="info-card__text-wrap"> -->
						<div class="info-card__title">ГАРАНТИЯ</div>
						<div class="info-card__text">Замена любого товара в течение 14 дней</div>
					<!-- </div> -->
					<div class="info-card__img">
						<a href="#"><img src="img/info-card-guarantee.png" alt="icon harant"></a>
					</div>
				</div>
				<div class="info-card">
					<!-- <div class="info-card__text-wrap"> -->
						<div class="info-card__title">МЫ В VIBER</div>
						<div class="info-card__text">Задай свой вопрос по поводу товара в нашей группе</div>
					<!-- </div> -->
					<div class="info-card__img">
						<a href="#"><img src="img/info-card-viber.png" alt="icon veber"></a>
					</div>
				</div>
				<div class="info-card">
					<!-- <div class="info-card__text-wrap"> -->
						<div class="info-card__title">СОХРАННОСТЬ ПОСЫЛКИ</div>
						<div class="info-card__text">Гарантируем сохранность посылки</div>
					<!-- </div> -->
					<div class="info-card__img">
						<a href="#"><img src="img/info-card-parcel.png" alt="icon parcel"></a>
					</div>
				</div>
				<div class="info-card">
					<!-- <div class="info-card__text-wrap"> -->
						<div class="info-card__title">ДОСТАВКА</div>
						<div class="info-card__text">Отправляем посылку в день заказа</div>
					<!-- </div> -->
					<div class="info-card__img">
						<a href="#"><img src="img/info-card-deliv.png" alt="icon fast delivery"></a>
					</div>
				</div>
      </div>
      <div class="tabs-block">
			<div class="wrap-title-tabs">
				<div class="title-tab title-tab-active" id="1">Описание</div>
				<div class="title-tab" id="2">Характеристики</div>
				<div class="title-tab" id="3">Доставка/оплата</div>
			</div>
      	<div class="wrap-tabs">
				<div class="tab" id="tab-1">
					<div class="tab__text">
						Плетеная корзина Twigs выполнена из натуральных материалов. Корзинку можно использовать для фруктов, как хлебницу Корзины из бамбука доступны к заказу в 3-х разных размерах. Или можно купить набор из 3-х корзин со скидкой. Размер: Маленькая: Длина - 16 см, Ширина - 13 см, Высота - 5 см Средняя: Длина - 19 см, Ширина - 16 см, Высота - 6 см Большая: Длина - 24 см, Ширина - 20 см, Высота - 7 см Материал: бамбук Данный товар находится на удаленном складе и отправляется только по предоплате. Если у вас корзине есть и другие товары, возможна отправка двумя посылками из разных складов.
					</div>
				</div>
				<div class="tab tab-hide" id="tab-2">
					<div class="tab__text">
						Lorem ipsum dolor sit amet consectetur, adipisicing elit. Expedita quam adipisci ea maxime animi saepe, enim sunt quos qui consectetur. Ea, dolorum dolores! Quae provident officiis officia soluta. Eligendi, ab?
						Recusandae, numquam sit adipisci non error repellendus exercitationem nam consequatur voluptatibus doloremque distinctio tempore delectus natus molestiae quia nulla assumenda. Doloremque temporibus ipsa at libero, adipisci cupiditate quidem ad architecto.
					</div>
				</div>
				<div class="tab tab-hide" id="tab-3">
					<div class="tab__text">
						Lorem ipsum dolor sit amet consectetur adipisicing elit. Tenetur quo similique id voluptatem harum rerum ratione voluptates enim perferendis veniam, labore adipisci ex, deserunt, saepe delectus ea doloremque consectetur sint?
						Asperiores obcaecati error inventore soluta corporis repellat rerum iste voluptas est fugit, itaque distinctio dignissimos quibusdam eveniet quisquam? Ad minus laboriosam enim voluptatum cum aperiam non necessitatibus ut, aliquam consequuntur.
					</div>
				</div>
			</div>
      	
      	
      </div>

      
	</main>

		<div class="wrap-novelties">
			<div class="novelties">
				<div class="novelties__row">
					<div class="novelties__title">популярные товары</div>
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