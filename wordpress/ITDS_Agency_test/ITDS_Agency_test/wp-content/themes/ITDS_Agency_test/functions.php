<?php
require_once ABSPATH . '/wp-admin/includes/taxonomy.php';
require_once get_template_directory() . '/inc/class-tgm-plugin-activation.php';

show_admin_bar(false);	// убирает заголовок WP на страницах сайта

add_theme_support('post-thumbnails');
add_theme_support('post-thumbnails', array('goods'));
add_image_size('goods-cover', 405, 300, 1);
add_image_size('goods-for-card', 242, 161, 1);
add_image_size('goods-foto-for-slider', 68, 50, 1);
add_image_size('instagram-post', 255, 255, 1);


function ITDS_Agency_test()
{

	wp_enqueue_style('reset', get_template_directory_uri() . './assets/css/reset.css');
	wp_enqueue_style('style', get_template_directory_uri() . './assets/css/style.css');
	wp_enqueue_script('script', get_template_directory_uri() . './assets/js/script.js', array(), '20151215', true);
}
add_action('wp_enqueue_scripts', 'ITDS_Agency_test');

function ITDS_reg_post_type_goods()
{
	$args = array(
		'label' => esc_html__('Карточки товаров'),
		'labels' => [],
		// 'title','editor','author','thumbnail','excerpt','trackbacks','custom-fields',
		//	'comments','revisions','page-attributes','post-formats'
		'supports' => ['title', 'editor', 'thumbnail', 'custom-fields'],
		'public'	=> true,
		'publicly_queryable'  => true,
		'show_ui'	=> true,
		'show_in_menu'	=> true,
	);
	register_post_type('goods', $args);
}
add_action('init', 'ITDS_reg_post_type_goods');

function ITDS_reg_post_type_instagram_tape()
{
	$args = array(
		'label' => esc_html__('Посты инстаграм'),
		'labels' => [],
		// 'title','editor','author','thumbnail','excerpt','trackbacks','custom-fields',
		//	'comments','revisions','page-attributes','post-formats'
		'supports' => ['title', 'editor', 'thumbnail'],
		'public'	=> true,
		'publicly_queryable'  => true,
		'show_ui'	=> true,
		'show_in_menu'	=> true,
	);
	register_post_type('instagram_tape', $args);
}
add_action('init', 'ITDS_reg_post_type_instagram_tape');

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

function ITDS_add_metabox()
{

	add_meta_box('goods_metabox', esc_html__('Goods settings', 'ITDS'), 'ITDS_goods_metabox_html', 'goods', 'normal');
}
add_action('add_meta_boxes', 'ITDS_add_metabox');

function ITDS_goods_metabox_html($post)
{
	// если значение поля уже есть в БД 
	$rating = get_post_meta($post->ID, 'rating', true);
	$status = get_post_meta($post->ID, 'status', true);
	$old_price = get_post_meta($post->ID, 'old-price', true);
	$new_price = get_post_meta($post->ID, 'new-price', true);

	$article = get_post_meta($post->ID, 'article', true);
	$collection = get_post_meta($post->ID, 'collection', true);
	$size = get_post_meta($post->ID, 'size', true);
	$package = get_post_meta($post->ID, 'package', true);
	$number_of_designs = get_post_meta($post->ID, 'number-of-designs', true);
	$material = get_post_meta($post->ID, 'material', true);
	$category_goods = get_post_meta($post->ID, 'category-goods', true);
	$category_goods = get_post_meta($post->ID, 'characteristics', true);
	$category_goods = get_post_meta($post->ID, 'delivery-payment', true);




	// чтобы убедиться, что данные были отправлены с текущего сайта, а не от куда-то еще
	wp_nonce_field('ITDS_goods_metabox_html54545461213878', '_goods_metabox');

?>
	<div class="filds-metabox" style="display: flex; flex-direction:column; width:70%;">
		<label for="rating"> <?php esc_html_e('Рейтинг', 'ITDS_Agency_test') ?> </label>
		<input type="text" id="rating" name="rating" value="<?php echo esc_attr($rating); ?>" />
		<label for="status"> <?php esc_html_e('Статус', 'ITDS_Agency_test') ?> </label>
		<input type="text" id="status" name="status" value="<?php echo esc_attr($status); ?>" />
		<label for="old-price"> <?php esc_html_e('Старая цена', 'ITDS_Agency_test'); ?> </label>
		<input type="text" id="old-price" name="old-price" value="<?php echo esc_attr($old_price); ?>" />
		<label for="new-pric"> <?php esc_html_e('Новая цена', 'ITDS_Agency_test') ?> </label>
		<input type="text" id="new-price" name="new-price" value="<?php echo esc_attr($new_price); ?>" />
		<label for="article"> <?php esc_html_e('Артикул', 'ITDS_Agency_test') ?> </label>
		<input type="text" id="article" name="article" value="<?php echo esc_attr($article); ?>" />
		<label for="collection"> <?php esc_html_e('Колекция', 'ITDS_Agency_test') ?> </label>
		<input type="text" id="collection" name="collection" value="<?php echo esc_attr($collection); ?>" />
		<label for="size"> <?php esc_html_e('Размер', 'ITDS_Agency_test'); ?> </label>
		<input type="text" id="size" name="size" value="<?php echo esc_attr($size); ?>" />
		<label for="package"> <?php esc_html_e('Упаковка', 'ITDS_Agency_test') ?> </label>
		<input type="text" id="package" name="package" value="<?php echo esc_attr($package); ?>" />
		<label for="number-of-designs"> <?php esc_html_e('Количество дизайнеров', 'ITDS_Agency_test') ?> </label>
		<input type="text" id="number-of-designs" name="number-of-designs" value="<?php echo esc_attr($number_of_designs); ?>" />
		<label for="material"> <?php esc_html_e('Материал', 'ITDS_Agency_test'); ?> </label>
		<input type="text" id="material" name="material" value="<?php echo esc_attr($material); ?>" />
		<label for="category-goods"> <?php esc_html_e('Категория', 'ITDS_Agency_test') ?> </label>
		<input type="text" id="category-goods" name="category-goods" value="<?php echo esc_attr($category_goods); ?>" />

		<label for="characteristics"> <?php esc_html_e('Характеристики товара', 'ITDS_Agency_test') ?> </label>
		<input type="text" id="characteristics" name="characteristics" value="<?php echo esc_attr($category_goods); ?>" />
		<label for="delivery-payment"> <?php esc_html_e('Доставка/оплата', 'ITDS_Agency_test') ?> </label>
		<input type="text" id="delivery-payment" name="delivery-payment" value="<?php echo esc_attr($category_goods); ?>" />
	</div>

<?php
}

function ITDS_goods_save_meta_box($post_id, $post)
{

	// чтобы убедиться, что данные были отправлены с текущего сайта, а не от куда-то еще
	if (!isset($_POST['_goods_metabox']) || !wp_verify_nonce($_POST['_goods_metabox'], 'ITDS_goods_metabox_html54545461213878')) {
		return $post_id;
	}

	// проверка на автосохранение самим WP
	if (defined('DOING_AUTOSAVE') && DOING_AUTOSAVE) {
		return $post_id;
	}
	// проверка на post_type
	if ($post->post_type != 'goods') {
		return $post_id;
	}

	// проверка прав пользователя
	$post_type = get_post_type_object($post->post_type);
	if (!current_user_can($post_type->cap->edit_post, $post_id)) {
		return $post_id;
	}

	if (isset($_POST['rating'])) {
		update_post_meta($post_id, 'rating', sanitize_text_field($_POST['rating']));
	} else {
		delete_post_meta($post_id, 'rating');
	}

	if (isset($_POST['status'])) {
		update_post_meta($post_id, 'status', sanitize_text_field($_POST['status']));
	} else {
		delete_post_meta($post_id, 'status');
	}

	if (isset($_POST['old-price'])) {
		update_post_meta($post_id, 'old-price', sanitize_text_field($_POST['old-price']));
	} else {
		delete_post_meta($post_id, 'old-price');
	}

	if (isset($_POST['new-price'])) {
		update_post_meta($post_id, 'new-price', sanitize_text_field($_POST['new-price']));
	} else {
		delete_post_meta($post_id, 'new-price');
	}


	if (isset($_POST['article'])) {
		update_post_meta($post_id, 'article', sanitize_text_field($_POST['article']));
	} else {
		delete_post_meta($post_id, 'article');
	}

	if (isset($_POST['collection'])) {
		update_post_meta($post_id, 'collection', sanitize_text_field($_POST['collection']));
	} else {
		delete_post_meta($post_id, 'collection');
	}

	if (isset($_POST['size'])) {
		update_post_meta($post_id, 'size', sanitize_text_field($_POST['size']));
	} else {
		delete_post_meta($post_id, 'size');
	}

	if (isset($_POST['package'])) {
		update_post_meta($post_id, 'package', sanitize_text_field($_POST['package']));
	} else {
		delete_post_meta($post_id, 'package');
	}


	if (isset($_POST['number-of-designs'])) {
		update_post_meta($post_id, 'number-of-designs', sanitize_text_field($_POST['number-of-designs']));
	} else {
		delete_post_meta($post_id, 'number-of-designs');
	}

	if (isset($_POST['material'])) {
		update_post_meta($post_id, 'material', sanitize_text_field($_POST['material']));
	} else {
		delete_post_meta($post_id, 'material');
	}

	if (isset($_POST['category-goods'])) {
		update_post_meta($post_id, 'category-goods', sanitize_text_field($_POST['category-goods']));
	} else {
		delete_post_meta($post_id, 'category-goods');
	}

	if (isset($_POST['characteristics'])) {
		update_post_meta($post_id, 'characteristics', sanitize_text_field($_POST['characteristics']));
	} else {
		delete_post_meta($post_id, 'characteristics');
	}

	if (isset($_POST['delivery-payment'])) {
		update_post_meta($post_id, 'delivery-payment', sanitize_text_field($_POST['delivery-payment']));
	} else {
		delete_post_meta($post_id, 'delivery-payment');
	}

	return $post_id;
}
add_action('save_post', 'ITDS_goods_save_meta_box', 10, 2);





add_action('tgmpa_register', 'ITDS_Agency_test_register_required_plugins');

/**
 * Register the required plugins for this theme.
 *
 * In this example, we register five plugins:
 * - one included with the TGMPA library
 * - two from an external source, one from an arbitrary source, one from a GitHub repository
 * - two from the .org repo, where one demonstrates the use of the `is_callable` argument
 *
 * The variables passed to the `tgmpa()` function should be:
 * - an array of plugin arrays;
 * - optionally a configuration array.
 * If you are not changing anything in the configuration array, you can remove the array and remove the
 * variable from the function call: `tgmpa( $plugins );`.
 * In that case, the TGMPA default settings will be used.
 *
 * This function is hooked into `tgmpa_register`, which is fired on the WP `init` action on priority 10.
 */
function ITDS_Agency_test_register_required_plugins()
{
	/*
	 * Array of plugin arrays. Required keys are name and slug.
	 * If the source is NOT from the .org repo, then source is also required.
	 */
	$plugins = array(

		// This is an example of how to include a plugin bundled with a theme.
		array(
			'name'               => 'IITDS_Agency test core', // The plugin name.
			'slug'               => 'itds_agency-test-core', // The plugin slug (typically the folder name).
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
