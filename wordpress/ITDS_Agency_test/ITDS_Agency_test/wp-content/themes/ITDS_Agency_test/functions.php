<?php

require_once get_template_directory() . '/inc/class-tgm-plugin-activation.php';
require_once get_template_directory() . '/inc/redux-options.php';

show_admin_bar(false);	// убирает заголовок WP на страницах сайта
add_theme_support('automatic-feed-links');		// добавляет ссылки на RSS фиды постов и комментариев в head часть HTML документа.
add_theme_support('tiyle-tag');		// позволит плагинам и темам изменять метатег <title>.



function ITDS_Agency_test()
{
	wp_enqueue_style('reset', get_template_directory_uri() . './assets/css/reset.css');
	wp_enqueue_style('style', get_template_directory_uri() . './assets/css/style.css');
	wp_enqueue_script('script', get_template_directory_uri() . './assets/js/script.js', array(), '20151215', true);
}
add_action('wp_enqueue_scripts', 'ITDS_Agency_test');

function ITDS_Agency_test_register_required_plugins()
{
	$plugins = array(

		// This is an example of how to include a plugin bundled with a theme.
		array(
			'name'               => 'IITDS_Agency test core', // The plugin name.
			'slug'               => 'itds_agency_test-core', // The plugin slug (typically the folder name).
			'source'             => get_template_directory() . '/plugins/ITDS-Agency-test-core.zip', // The plugin source.
			'required'           => true, // If false, the plugin is only 'recommended' instead of required.
			'version'            => '1.0', // E.g. 1.0.0. If set, the active plugin must be this version or higher. If the plugin version is higher than the plugin version installed, the user will be notified to update the plugin.
			'force_activation'   => false, // If true, plugin is activated upon theme activation and cannot be deactivated until theme switch.
			'force_deactivation' => false, // If true, plugin is deactivated upon theme switch, useful for theme-specific plugins.
		),
		array(
			'name'        => 'Gutenberg Template and Pattern Library & Redux Framework',
			'slug'        => 'redux-framework',
			'required'           => true,
		),
		array(
			'name'        => 'Regenerate Thumbnails',
			'slug'        => 'regenerate-thumbnails',
			'required'    => false,
		),
	);

	$config = array(
		'id'           => 'ITDS_Agency_test',                 // Unique ID for hashing notices for multiple instances of TGMPA.
		'default_path' => '',                      // Default absolute path to bundled plugins.
		'menu'         => 'tgmpa-install-plugins', // Menu slug.
		'has_notices'  => true,                    // Show admin notices or not.
		'dismissable'  => true,                    // If false, a user cannot dismiss the nag message.
		'dismiss_msg'  => '',                      // If 'dismissable' is false, this message will be output at top of nag.
		'is_automatic' => false,                   // Automatically activate plugins after installation or not.
		'message'      => '',                      // Message to output right before the plugins table.


	);

	tgmpa($plugins, $config);
}
add_action('tgmpa_register', 'ITDS_Agency_test_register_required_plugins');

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

function ITDS_Agency_pagination($query)
{
	$current = absint(
		max(
			1,
			get_query_var('paged') ? get_query_var('paged') : get_query_var('page')
		)
	);
	echo wp_kses_post(
		paginate_links(
			array(
				'total'   => $query->max_num_pages,
				'current' => $current,
				'show_all' => false,
				'prev_text' => '<div class="arow-block__arow-left fon-white"><img src="img/arow-block__arow-left-green.png" alt=""></div>',
				'next_text' => '<div class="arow-block__arow-right fon-white"><img src="img/arow-block__arow-right-green.png" alt=""></div>',
			)
		)
	);
}
