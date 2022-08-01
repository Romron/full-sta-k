<?php get_header() ?>


<main>
	<div class="intro">

		<div class="intro__foto">
			<img src="img/intro-foto.png" alt="">
			<div class="intro-main-block">
				<div class="block__logo">
					<img src="img/logo.png" alt="logo">
				</div>
				<div class="intro-main-block__text">Вдохновляем Вас преобразить свой дом</div>
				<div class="slogan-block">Встигни придбати</div>
			</div>
		</div>
		<div class="wrap-intro-block">
			<div class="intro-block">
				<div class="intro-block__text-wrap">
					<div class="intro-block__title">ГАРАНТИЯ</div>
					<div class="intro-block__text">Замена любого товара в течение 14 дней</div>
				</div>
				<div class="intro-block__img">
					<a href="#"><img src="img/intro-icon-harant.png" alt="icon harant"></a>
				</div>
			</div>
			<div class="intro-block">
				<div class="intro-block__text-wrap">
					<div class="intro-block__title">МЫ В VIBER</div>
					<div class="intro-block__text">Задай свой вопрос по поводу товара в нашей группе</div>
				</div>
				<div class="intro-block__img">
					<a href="#"><img src="img/intro-icon-viber.png" alt="icon veber"></a>
				</div>
			</div>
			<div class="intro-block">
				<div class="intro-block__text-wrap">
					<div class="intro-block__title">СОХРАННОСТЬ ПОСЫЛКИ</div>
					<div class="intro-block__text">Гарантируем сохранность посылки</div>
				</div>
				<div class="intro-block__img">
					<a href="#"><img src="img/intro-icon-parcel.png" alt="icon parcel"></a>
				</div>
			</div>
			<div class="intro-block">
				<div class="intro-block__text-wrap">
					<div class="intro-block__title">ДОСТАВКА</div>
					<div class="intro-block__text">Отправляем посылку в день заказа</div>
				</div>
				<div class="intro-block__img">
					<a href="#"><img src="img/intro-icon-fast-delivery.png" alt="icon fast delivery"></a>
				</div>
			</div>
		</div>
	</div>

	<div class="popular-goods">
		<div class="popular-goods__row">
			<div class="popular-goods__title">популярные товары</div>
			<div class="arow-block">
				<div class="arow-block__arow-left"><img src="img/arow-block__arow-left.png" alt=""></div>
				<div class="arow-block__arow-right"><img src="img/arow-block__arow-right.png" alt=""></div>
			</div>
		</div>
		<div class="popular-goods__cards-block">

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
			wp_reset_postdata(); ?>

		</div>
	</div>

</main>

<div class="wrap-novelties">
	<div class="novelties">
		<div class="novelties__row">
			<div class="novelties__title">Новинки</div>
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

<div class="instagram">
	<?php get_template_part('parts/instagram-tape'); ?>
</div>


<div class="wrap-about">
	<div class="about">
		<div class="about__foto"><img src="img/about-foto.png" alt="about-foto"></div>

		<div class="about__text">
			<div class="about__title">О магазине</div>
			<div class="about__text-text">
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