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

require get_template_directory() . '/includes/custom-header.php';
require get_template_directory() . '/includes/customizer.php';
require get_template_directory() . '/includes/template-functions.php';
require get_template_directory() . '/includes/template-tags.php';
if (class_exists('WooCommerce')) {
	require get_template_directory() . '/includes/woocommerce.php';
	require get_template_directory() . '/woocommerce/wc-functions.php';
}
