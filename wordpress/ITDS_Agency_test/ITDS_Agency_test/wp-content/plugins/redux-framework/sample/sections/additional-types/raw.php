<?php

/**
 * Redux Framework raw config.
 * For full documentation, please visit: http://devs.redux.io/
 *
 * @package Redux Framework
 */

defined('ABSPATH') || exit;

$sample_html = '';
if (file_exists($dir . 'info-html.html')) {
	global $wp_filesystem;

	$fs = Redux_Filesystem::get_instance();

	$sample_html = $wp_filesystem->get_contents($dir . 'info-html.html');
}

Redux::set_section(
	$opt_name,
	array(
		'title'      => esc_html__('Raw', 'ITDS_Agency_test_2'),
		'id'         => 'additional-raw',
		'desc'       => esc_html__('For full documentation on this field, visit: ', 'ITDS_Agency_test_2') . '<a href="https://devs.redux.io/core-fields/raw.html" target="_blank">https://devs.redux.io/core-fields/raw.html</a>',
		'subsection' => true,
		'fields'     => array(
			array(
				'id'       => 'opt-raw_info_4',
				'type'     => 'raw',
				'title'    => esc_html__('Standard Raw Field', 'ITDS_Agency_test_2'),
				'subtitle' => esc_html__('Subtitle', 'ITDS_Agency_test_2'),
				'desc'     => esc_html__('Description', 'ITDS_Agency_test_2'),
				'content'  => $sample_html,
			),
			array(
				'id'         => 'opt-raw_info_5',
				'type'       => 'raw',
				'full_width' => false,
				'title'      => wp_kses_post(__('Raw Field <code>full_width</code> set to <code>false</code>', 'ITDS_Agency_test_2')),
				'subtitle'   => esc_html__('Subtitle', 'ITDS_Agency_test_2'),
				'desc'       => esc_html__('Description', 'ITDS_Agency_test_2'),
				'content'    => $sample_html,
			),
		),
	)
);
