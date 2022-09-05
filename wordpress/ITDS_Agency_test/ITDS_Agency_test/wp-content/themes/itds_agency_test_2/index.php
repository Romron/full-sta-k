<?php get_header(); ?>



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
					<div class="intro-block__title"><?php esc_html_e($ITDS_Agency_options['intro_block-1__title'], 'ITDS_Agency_test_2'); ?></div>
					<div class="intro-block__text"><?php esc_html_e($ITDS_Agency_options['intro_block-1__text'], 'ITDS_Agency_test_2'); ?></div>
				</div>
				<div class="intro-block__img">
					<a href="#"><img src="img/intro-icon-harant.png" alt="icon harant"></a>
				</div>
			</div>
			<div class="intro-block">
				<div class="intro-block__text-wrap">
					<div class="intro-block__title"><?php esc_html_e($ITDS_Agency_options['intro_block-2__title'], 'ITDS_Agency_test_2'); ?></div>
					<div class="intro-block__text"><?php esc_html_e($ITDS_Agency_options['intro_block-2__text'], 'ITDS_Agency_test_2'); ?></div>
				</div>
				<div class="intro-block__img">
					<a href="#"><img src="img/intro-icon-viber.png" alt="icon veber"></a>
				</div>
			</div>
			<div class="intro-block">
				<div class="intro-block__text-wrap">
					<div class="intro-block__title"><?php esc_html_e($ITDS_Agency_options['intro_block-3__title'], 'ITDS_Agency_test_2'); ?></div>
					<div class="intro-block__text"><?php esc_html_e($ITDS_Agency_options['intro_block-3__text'], 'ITDS_Agency_test_2'); ?></div>
				</div>
				<div class="intro-block__img">
					<a href="#"><img src="img/intro-icon-parcel.png" alt="icon parcel"></a>
				</div>
			</div>
			<div class="intro-block">
				<div class="intro-block__text-wrap">
					<div class="intro-block__title"><?php esc_html_e($ITDS_Agency_options['intro_block-4__title'], 'ITDS_Agency_test_2'); ?></div>
					<div class="intro-block__text"><?php esc_html_e($ITDS_Agency_options['intro_block-4__text'], 'ITDS_Agency_test_2'); ?></div>
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
				<div class="arow-block__arow-left"><img src="<?php echo esc_url(get_template_directory_uri() . '/assets/img/arow-block__arow-left.png'); ?>" alt=""></div>
				<div class="arow-block__arow-right"><img src="<?php echo esc_url(get_template_directory_uri() . '/assets/img/arow-block__arow-right.png'); ?>" alt=""></div>
			</div>
		</div>
		<div class="popular-goods__cards-block">
			<?php
			$args_popular_goods = array(		// указать параметры выборки
				'posts_per_page' => 4,
			);
			$product_query_popular_goods = wc_get_products($args_popular_goods);
			if (!empty($product_query_popular_goods)) {
				foreach ($product_query_popular_goods as $product) {
					get_template_part('/template-parts/product-card', null, array('product' => $product));
				};
			} else {
				echo 'постов нет';
			};
			wp_reset_postdata();
			?>
		</div>
	</div>

</main>

<div class="wrap-novelties">

	<?php get_template_part('template-parts/products-tape'); ?>

</div>


<div class="instagram">
	<?php get_template_part('template-parts/instagram-tape'); ?>
</div>

<?php get_template_part('template-parts/about-shop'); ?>





<?php get_footer() ?>