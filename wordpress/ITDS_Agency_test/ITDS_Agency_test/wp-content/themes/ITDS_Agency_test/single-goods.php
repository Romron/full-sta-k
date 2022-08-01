<?php get_header() ?>

<?php /* Template Name: Goods */ ?>

<?php get_header() ?>



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
					<?php if (has_post_thumbnail(get_the_ID())) the_post_thumbnail('goods-cover'); ?>
				</div>
				<div class="goods-foto-wiht-slider__slider">
					<div class="goods-slider-arrow-up">
						<img src="img/goods-slider-arrow-up.png" alt="">
					</div>
					<div class="goods-foto-wiht-slider__slider-card">
						<?php if (has_post_thumbnail(get_the_ID())) the_post_thumbnail('goods-foto-for-slider'); ?>
					</div>
					<div class="goods-foto-wiht-slider__slider-card">
						<?php if (has_post_thumbnail(get_the_ID())) the_post_thumbnail('goods-foto-for-slider'); ?>
					</div>
					<div class="goods-foto-wiht-slider__slider-card">
						<?php if (has_post_thumbnail(get_the_ID())) the_post_thumbnail('goods-foto-for-slider'); ?>
					</div>
					<div class="goods-foto-wiht-slider__slider-card">
						<?php if (has_post_thumbnail(get_the_ID())) the_post_thumbnail('goods-foto-for-slider'); ?>
					</div>
					<div class="goods-slider-arrow-down"><img src="img/goods-slider-arrow-down.png" alt=""></div>
				</div>
			</div>

			<div class="goods-discription">
				<div class="goods-discription__title-row">
					<div class="goods-discription__title"><?php echo get_the_title($post); ?></div>
					<div class="goods-discription__status">
						<div class="goods-discription__status-status"><?php echo get_post_meta(get_the_ID(), 'status', true); ?></div>
						<img src="img/icon-star.png" alt="star">
						<div class="goods-discription__rating"><?php echo get_post_meta(get_the_ID(), 'rating', true); ?></div>
					</div>
				</div>
				<div class="goods-discription__text">
					<div>Артикул<div class="dotted-str"></div><?php echo get_post_meta(get_the_ID(), 'article', true); ?></div>
					<div>Колекция<div class="dotted-str"></div><?php echo get_post_meta(get_the_ID(), 'collection', true); ?></div>
					<div>Размер<div class="dotted-str"></div><?php echo get_post_meta(get_the_ID(), 'size', true); ?></div>
					<div>Упаковка<div class="dotted-str"></div><?php echo get_post_meta(get_the_ID(), 'package', true); ?></div>
					<div>Кол-во дизайнов<div class="dotted-str"></div><?php echo get_post_meta(get_the_ID(), 'number-of-designs', true); ?></div>
					<div>Материал<div class="dotted-str"></div><?php echo get_post_meta(get_the_ID(), 'material', true); ?></div>
					<div>Категория<div class="dotted-str"></div><?php echo get_post_meta(get_the_ID(), 'category-goods', true); ?></div>
				</div>
				<div class="goods-discription__price">
					<div class="goods-discription__old-price"><?php echo get_post_meta(get_the_ID(), 'old-price', true); ?> ₴</div>
					<div class="goods-discription__new-price"><?php echo get_post_meta(get_the_ID(), 'new-price', true); ?> ₴</div>
				</div>
				<div class="goods-discription__buttons">
					<div class="amount">
						<p>-</p>
						<p>2</p>
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
			<div class="info-card">
				<div class="info-card__title">ГАРАНТИЯ</div>
				<div class="info-card__text">Замена любого товара в течение 14 дней</div>
				<div class="info-card__img">
					<a href="#"><img src="img/info-card-guarantee.png" alt="icon harant"></a>
				</div>
			</div>
			<div class="info-card">
				<div class="info-card__title">МЫ В VIBER</div>
				<div class="info-card__text">Задай свой вопрос по поводу товара в нашей группе</div>
				<div class="info-card__img">
					<a href="#"><img src="img/info-card-viber.png" alt="icon veber"></a>
				</div>
			</div>
			<div class="info-card">
				<div class="info-card__title">СОХРАННОСТЬ ПОСЫЛКИ</div>
				<div class="info-card__text">Гарантируем сохранность посылки</div>
				<div class="info-card__img">
					<a href="#"><img src="img/info-card-parcel.png" alt="icon parcel"></a>
				</div>
			</div>
			<div class="info-card">
				<div class="info-card__title">ДОСТАВКА</div>
				<div class="info-card__text">Отправляем посылку в день заказа</div>
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
						<?php the_content(); ?>
					</div>
				</div>
				<div class="tab tab-hide" id="tab-2">
					<div class="tab__text">
						<?php echo get_post_meta(get_the_ID(), 'characteristics', true); ?>
					</div>
				</div>
				<div class="tab tab-hide" id="tab-3">
					<div class="tab__text">
						<?php echo get_post_meta(get_the_ID(), 'delivery-payment', true); ?>
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
			<?php endif; ?>


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


<script>
	document.write('<script src="http://' + (location.host || 'localhost').split(':')[0] + ':35729/livereload.js?snipver=1"></' + 'script>')
</script>

<?php get_footer() ?>