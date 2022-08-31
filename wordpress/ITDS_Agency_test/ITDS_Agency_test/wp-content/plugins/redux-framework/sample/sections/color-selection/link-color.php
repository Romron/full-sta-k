<?php

/**
 * Redux Framework link color config.
 * For full documentation, please visit: http://devs.redux.io/
 *
 * @package Redux Framework
 */

defined('ABSPATH') || exit;

Redux::set_section(
	$opt_name,
	array(
		'title'      => esc_html__('Link Color', 'ITDS_Agency_test_2'),
		'desc'       => esc_html__('For full documentation on this field, visit: ', 'ITDS_Agency_test_2') . '<a href="https://devs.redux.io/core-fields/link-color.html" target="_blank">https://devs.redux.io/core-fields/link-color.html</a>',
		'id'         => 'color-link',
		'subsection' => true,
		'fields'     => array(
			array(
				'id'       => 'opt-link-color',
				'type'     => 'link_color',
				'title'    => esc_html__('Links Color Option', 'ITDS_Agency_test_2'),
				'subtitle' => esc_html__('Only color validation can be done on this field type', 'ITDS_Agency_test_2'),
				'desc'     => esc_html__('This is the description field, again good for additional info.', 'ITDS_Agency_test_2'),
				'default'  => array(
					'regular' => '#aaa',
					'hover'   => '#bbb',
					'active'  => '#ccc',
				),
				'output'   => array(
					'a',
					'important' => true,
				),

				// phpcs:ignore Squiz.PHP.CommentedOutCode
				// 'regular'   => false, // Disable Regular Color.
				// 'hover'     => false, // Disable Hover Color.
				// 'active'    => false, // Disable Active Color.
				// 'visited'   => true,  // Enable Visited Color.
			),
		),
	)
);
