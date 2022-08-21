<?php get_header('/parts/header.php'); ?>



<main>
	<div class="intro">
		<?php global $ITDS_Agency_options; ?>
		<div class="intro__foto">
			<img src="<?php echo esc_url($ITDS_Agency_options['intro_foto']['url']); ?>" alt="">
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
					<div class="intro-block__title"><?php esc_html_e($ITDS_Agency_options['intro_block-1__title'], 'ITDS_Agency_test'); ?></div>
					<div class="intro-block__text"><?php esc_html_e($ITDS_Agency_options['intro_block-1__text'], 'ITDS_Agency_test'); ?></div>
				</div>
				<div class="intro-block__img">
					<a href="#"><img src="img/intro-icon-harant.png" alt="icon harant"></a>
				</div>
			</div>
			<div class="intro-block">
				<div class="intro-block__text-wrap">
					<div class="intro-block__title"><?php esc_html_e($ITDS_Agency_options['intro_block-2__title'], 'ITDS_Agency_test'); ?></div>
					<div class="intro-block__text"><?php esc_html_e($ITDS_Agency_options['intro_block-2__text'], 'ITDS_Agency_test'); ?></div>
				</div>
				<div class="intro-block__img">
					<a href="#"><img src="img/intro-icon-viber.png" alt="icon veber"></a>
				</div>
			</div>
			<div class="intro-block">
				<div class="intro-block__text-wrap">
					<div class="intro-block__title"><?php esc_html_e($ITDS_Agency_options['intro_block-3__title'], 'ITDS_Agency_test'); ?></div>
					<div class="intro-block__text"><?php esc_html_e($ITDS_Agency_options['intro_block-3__text'], 'ITDS_Agency_test'); ?></div>
				</div>
				<div class="intro-block__img">
					<a href="#"><img src="img/intro-icon-parcel.png" alt="icon parcel"></a>
				</div>
			</div>
			<div class="intro-block">
				<div class="intro-block__text-wrap">
					<div class="intro-block__title"><?php esc_html_e($ITDS_Agency_options['intro_block-4__title'], 'ITDS_Agency_test'); ?></div>
					<div class="intro-block__text"><?php esc_html_e($ITDS_Agency_options['intro_block-4__text'], 'ITDS_Agency_test'); ?></div>
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
			<?php
			if (have_posts()) : while (have_posts()) : the_post(); ?>
					<?php get_template_part('template-parts/product-card'); ?>
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

			<div class="test-php-block">
				<?php

				$args = array(
					'posts_per_page' => 4,
				);

				$product_query = wc_get_products($args);
				// $product_query = new WC_Product_Query($args);

				https: //ru.stackoverflow.com/questions/878134/%D0%9D%D0%B5-%D0%BC%D0%BE%D0%B3%D1%83-%D1%80%D0%B0%D0%B7%D0%BE%D0%B1%D1%80%D0%B0%D1%82%D1%8C%D1%81%D1%8F-%D0%BA%D0%B0%D0%BA-%D0%BF%D0%BE%D0%BB%D1%83%D1%87%D0%B8%D1%82%D1%8C-%D0%B4%D0%B0%D0%BD%D0%BD%D1%8B%D0%B5-%D1%82%D0%BE%D0%B2%D0%B0%D1%80%D0%BE%D0%B2-woocommercewordpress


				if (!empty($product_query)) {
					foreach ($product_query as $product) {
						// $product->have_posts();

						// $products__ = $product_query->get_product_type();
						$qq = wc_get_product($post->ID);
						echo "<pre>";
						print_r($qq);
						echo "</pre>";


						// get_template_part('product-card');
					};
				} else {
					echo 'постов нет';
				};
				?>






			</div>


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