<?php
/*
Template Name: Мой шаблон страницы
*/

get_header();

defined('ABSPATH') || exit;

?>
<main>
	<?php woocommerce_breadcrumb(); ?>
	<div class="cat-title"><?php woocommerce_page_title(); ?></div>
	<?php

	get_template_part('/template-parts/cat-slider');

	if (woocommerce_product_loop()) {

	?>

		<div class="view-block">
			<div class="view">
				<div class="view__title">Вид</div>
				<div class="view__preview">
					<img src="<?php echo get_template_directory_uri() . '\assets\img\view-1.png' ?>" alt="">
					<img src="<?php echo get_template_directory_uri() . '\assets\img\view-2.png' ?>" alt="">
				</div>
			</div>
			<div class="sorting-block">
				<div class="sorting-block__text">Сортировать по</div>
				<div class="sorting-block__sort">
					<?php
					/**
					 * Hook: woocommerce_before_shop_loop.
					 *
					 * @hooked woocommerce_output_all_notices - 10
					 * @hooked woocommerce_result_count - 20
					 * @hooked woocommerce_catalog_ordering - 30
					 */
					do_action('woocommerce_before_shop_loop');
					?>
				</div>
			</div>
		</div>

		<div class="block-goods">
			<?php

			woocommerce_product_loop_start();


			if (wc_get_loop_prop('total')) {
				while (have_posts()) {
					the_post();

					/**
					 * Hook: woocommerce_shop_loop.
					 */
					do_action('woocommerce_shop_loop');

					// wc_get_template_part('content', 'product');
					get_template_part('/template-parts/product-card', null, array('product' => $product));
				}
			}

			woocommerce_product_loop_end();
			?>
		</div>
	<?php
		/**
		 * Hook: woocommerce_after_shop_loop.
		 *
		 * @hooked woocommerce_pagination - 10
		 */
		do_action('woocommerce_after_shop_loop');
	} else {
		/**
		 * Hook: woocommerce_no_products_found.
		 *
		 * @hooked wc_no_products_found - 10
		 */
		do_action('woocommerce_no_products_found');
	}
	?>
</main>
<?php

/**
 * Hook: woocommerce_after_main_content.
 *
 * @hooked woocommerce_output_content_wrapper_end - 10 (outputs closing divs for the content)
 */
do_action('woocommerce_after_main_content');

/**
 * Hook: woocommerce_sidebar.
 *
 * @hooked woocommerce_get_sidebar - 10
 */
do_action('woocommerce_sidebar');




get_footer();
