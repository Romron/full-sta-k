<?php

/*
Plugin Name: IITDS_Agency test core
Plugin URI: #
Description: Функционал необходимый для работы теммы
Version: 1.0
Author: Roman
Author URI: #
License: GPLv2 or later
Text Domain: itds_agency_test-core
*/

require plugin_dir_path(__FILE__) . '/inc/custom_posts_type.php';

if (!function_exists('add_action')) {
   echo 'Hi there!  I\'m just a plugin, not much I can do when called directly.';
   exit;
}

add_theme_support('post-thumbnails');
add_theme_support('post-thumbnails', array('goods'));
add_image_size('goods-cover', 405, 300, 1);
add_image_size('goods-for-card', 242, 161, 1);
add_image_size('goods-foto-for-slider', 68, 50, 1);
add_image_size('instagram-post', 255, 255, 1);
