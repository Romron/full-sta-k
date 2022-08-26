<?php

/**
 * @package ITDS_Agency_test_2
 */

?>
<!doctype html>
<html <?php language_attributes(); ?>>

<head>
	<meta charset="<?php bloginfo('charset'); ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1">

	<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
	<?php wp_body_open(); ?>
	<div class="wraper">
		<div class="wrap-heder">
			<nav class="nav-top">
				<div class="wrap-menu">
					<?php wp_nav_menu(
						array(
							'theme_location' => 'heder_nav_menu-1',
							'container' => 'div',
							'container_class' => 'menu',
							'menu_id' => 'menu-1',

						)
					); ?>
					<div class="wrap-right-block">
						<?php global $ITDS_Agency_options; ?>
						<div class="wrap-right-block__text">
							<div class="wrap-right-block__enter"><a href="#">Вход</a></div>
							<div class="sep"></div>
							<div class="wrap-right-block__reg"><a href="#">Регистрация</a></div>
						</div>
						<div class="block-icon"><a href="<?php echo esc_url($ITDS_Agency_options['social_networks_Inst-link']); ?>"><img src="<?php echo get_template_directory_uri() . '\assets\img\icons_inst.png' ?>" alt=""></a></div>
						<div class="block-icon"><a href="<?php echo esc_url($ITDS_Agency_options['social_networks_fb-link']); ?>"><img src="<?php echo get_template_directory_uri() . '\assets\img\icons_fb.png' ?>" alt=""></a></div>
					</div>
				</div>
			</nav>
			<header>
				<div class="logo"><a href="<?php echo get_home_url(); ?>"><img src="<?php echo get_header_image(); ?>" alt="logo"></a></div>
				<?php get_search_form(); ?>
				<div class="phone">
					<div class="phone__row">
						<div class="phone__icon"><img src="img/akar-icons_phone.png" alt="icon-tel"></div>
						<div class="phone__number"><?php esc_html_e($ITDS_Agency_options['contact_fone-number'], 'ITDS_Agency_test'); ?></div>
					</div>
					<div class="phone__feedback">Обратная связь</div>
				</div>
			</header>
			<nav class="nav-menu">
				<?php wp_nav_menu(
					array(
						'theme_location' => 'heder_nav_menu-2',
						'container' => 'nav',
						'container_id' => 'menu-2',
					)
				); ?>
				<div class="wrap-icons-block">
					<a href="#"><img src="img/icons-block-heart.png" alt="Избранное"></a>
					<a href="#"><img src="img/icons-block-diagram.png" alt="Диаграма"></a>
					<a href="#"><img src="img/icons-block-basket.png" alt="Корзина"></a>
				</div>
				<div class="basket">корзина</div>
			</nav>
		</div>