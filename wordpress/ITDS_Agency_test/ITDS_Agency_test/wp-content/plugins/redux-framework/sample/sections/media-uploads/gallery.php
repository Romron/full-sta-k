<?php

/**
 * Redux Framework gallery config.
 * For full documentation, please visit: http://devs.redux.io/
 *
 * @package Redux Framework
 */

defined('ABSPATH') || exit;

Redux::set_section(
	$opt_name,
	array(
		'title'      => esc_html__('Gallery', 'ITDS_Agency_test_2'),
		'id'         => 'media-gallery',
		'desc'       => esc_html__('For full documentation on this field, visit: ', 'ITDS_Agency_test_2') . '<a href="https://devs.redux.io/core-fields/gallery.html" target="_blank">https://devs.redux.io/core-fields/gallery.html</a>',
		'subsection' => true,
		'fields'     => array(
			array(
				'id'       => 'opt-gallery',
				'type'     => 'gallery',
				'title'    => esc_html__('Add/Edit Gallery', 'ITDS_Agency_test_2'),
				'subtitle' => esc_html__('Create a new Gallery by selecting existing or uploading new images using the WordPress native uploader', 'ITDS_Agency_test_2'),
				'desc'     => esc_html__('This is the description field, again good for additional info.', 'ITDS_Agency_test_2'),
			),
		),
	)
);
