<?php

/**
 * @package ITDS_Agency_test_2
 */

if (!defined('_S_VERSION')) {
	// Replace the version number of the theme on each release.
	define('_S_VERSION', '1.0.0');
}



require get_template_directory() . '/includes/theme-settings.php';
require get_template_directory() . '/includes/widget-areas.php';
require get_template_directory() . '/includes/enqueue-scripts-styles.php';
require get_template_directory() . '/includes/helpers.php';

require_once get_template_directory() . '/includes/class-tgm-plugin-activation.php';		// запрос необходимых плагинов
require_once get_template_directory() . '/includes/redux-options.php';							// создать theme options panel

require get_template_directory() . '/includes/custom-header.php';
require get_template_directory() . '/includes/customizer.php';
require get_template_directory() . '/includes/template-functions.php';
require get_template_directory() . '/includes/template-tags.php';
if (class_exists('WooCommerce')) {
	require get_template_directory() . '/includes/woocommerce.php';
	require get_template_directory() . '/woocommerce/wc-functions.php';
}



function ITDS_Agency_menus()
{
	register_nav_menus(array(
		'heder_nav_menu-1' => esc_html__('Меню хедера 1'),
		'heder_nav_menu-2' => esc_html__('Меню хедера 2'),
		'footer_nav_menu-1' => esc_html__('Меню футера 1'),
		'footer_nav_menu-2' => esc_html__('Меню футера категории')
	));
}
add_action('after_setup_theme', 'ITDS_Agency_menus', 0);





// 