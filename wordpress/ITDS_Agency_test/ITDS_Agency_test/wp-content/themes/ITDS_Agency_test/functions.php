<?php 
require_once ABSPATH . '/wp-admin/includes/taxonomy.php';

show_admin_bar(false);	// убирает заголовок WP на страницах сайта


function ITDS_Agency_test() {

   wp_enqueue_style( 'reset', get_template_directory_uri() . './assets/css/reset.css' );
   wp_enqueue_style( 'style', get_template_directory_uri() . './assets/css/style.css' );
   wp_enqueue_script( 'script', get_template_directory_uri() . './assets/js/script.js', array(), '20151215', true );
   
}
add_action( 'wp_enqueue_scripts', 'ITDS_Agency_test' );

function ITDS_reg_post_type(){

	$args = array(
		'label' => esc_html__('Карточки товаров'), 
		'labels' => [],
		// 'title','editor','author','thumbnail','excerpt','trackbacks','custom-fields',
		//	'comments','revisions','page-attributes','post-formats'
		'supports'=> [ 'title', 'editor','thumbnail', 'custom-fields' ], 
		'public'	=> true, 
		'publicly_queryable'  => true,
		'show_ui'	=> true,
		'show_in_menu'	=> true,
	);
	register_post_type('goods', $args);
}
add_action('init', 'ITDS_reg_post_type');
add_theme_support( 'post-thumbnails' );
add_theme_support( 'post-thumbnails', array( 'goods' ) );



function ITDS_add_metabox(){

	add_meta_box('goods_metabox', esc_html__('Goods settings', 'ITDS'),'ITDS_goods_metabox_html', 'goods','normal');
}
add_action('add_meta_boxes', 'ITDS_add_metabox');

function ITDS_goods_metabox_html($post){
	// если значение поля уже есть в БД 
	$rating = get_post_meta($post->ID,'rating',true);				
	$status = get_post_meta($post->ID,'status',true);
	$old_price = get_post_meta($post->ID,'old-price',true);
	$new_price = get_post_meta($post->ID,'new-price',true);



	// чтобы убедиться, что данные были отправлены с текущего сайта, а не от куда-то еще
	wp_nonce_field('ITDS_goods_metabox_html54545461213878','_goods_metabox');

	?>
		<p>
			<label for="rating"> <?php esc_html_e('Рейтинг','ITDS_Agency_test')?> </label>
				<input type="text" id="rating" name="rating" value="<?php echo esc_attr($rating);?>"/>
			<label for="status"> <?php esc_html_e('Статус','ITDS_Agency_test')?> </label>	
				<input type="text" id="status" name="status" value="<?php echo esc_attr($status);?>"/>
			<label for="old-price"> <?php esc_html_e('Старая цена','ITDS_Agency_test');?> </label>	
				<input type="text" id="old-price" name="old-price" value="<?php echo esc_attr($old_price);?>"/>
			<label for="new-pric"> <?php esc_html_e('Новая цена','ITDS_Agency_test')?> </label>
				<input type="text" id="new-price" name="new-price" value="<?php echo esc_attr($new_price);?>"/>
		</p>

		<p>
			<label for="rating"> <?php esc_html_e('Рейтинг','ITDS_Agency_test')?> </label>
				<input type="text" id="rating" name="rating" value="<?php echo esc_attr($rating);?>"/>
			<label for="status"> <?php esc_html_e('Статус','ITDS_Agency_test')?> </label>	
				<input type="text" id="status" name="status" value="<?php echo esc_attr($status);?>"/>
			<label for="old-price"> <?php esc_html_e('Старая цена','ITDS_Agency_test');?> </label>	
				<input type="text" id="old-price" name="old-price" value="<?php echo esc_attr($old_price);?>"/>
			<label for="new-pric"> <?php esc_html_e('Новая цена','ITDS_Agency_test')?> </label>
				<input type="text" id="new-price" name="new-price" value="<?php echo esc_attr($new_price);?>"/>
		</p>	

	<?php
}

function ITDS_goods_save_meta_box($post_id, $post){
	
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
	if (!current_user_can($post_type->cap->edit_post,$post_id)) {
		return $post_id;
	}

	if (isset($_POST['rating'])) {
		update_post_meta($post_id,'rating', sanitize_text_field($_POST['rating']));
	}else{
		delete_post_meta($post_id, 'rating',);
	}

	if (isset($_POST['status'])) {
		update_post_meta($post_id,'status', sanitize_text_field($_POST['status']));
	}else{
		delete_post_meta($post_id, 'status',);
	}	

	if (isset($_POST['old-price'])) {
		update_post_meta($post_id,'old-price', sanitize_text_field($_POST['old-price']));
	}else{
		delete_post_meta($post_id, 'old-price',);
	}	

	if (isset($_POST['new-price'])) {
		update_post_meta($post_id,'new-price', sanitize_text_field($_POST['new-price']));
	}else{
		delete_post_meta($post_id, 'new-price',);
	}

	return $post_id;
}
add_action('save_post', 'ITDS_goods_save_meta_box', 10, 2);








