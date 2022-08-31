<?php

/**
 * Redux Framework background config.
 * For full documentation, please visit: http://devs.redux.io/
 *
 * @package Redux Framework
 */

defined('ABSPATH') || exit;

Redux::set_section(
	$opt_name,
	array(
		'title'      => esc_html__('Background', 'ITDS_Agency_test_2'),
		'id'         => 'design-background',
		'desc'       => esc_html__('For full documentation on this field, visit: ', 'ITDS_Agency_test_2') . '<a href="https://devs.redux.io/core-fields/background.html" target="_blank">https://devs.redux.io/core-fields/background.html</a>',
		'subsection' => true,
		'fields'     => array(
			array(
				'id'       => 'opt-background',
				'type'     => 'background',
				'output'   => array(
					'background-color' => 'body',
					'important'        => true,
				),
				'default'  => array(
					'background-color' => '#d1b7e2',
				),
				'title'    => __('Body Background', 'ITDS_Agency_test_2'),
				'subtitle' => __('Body background with image, color, etc.', 'ITDS_Agency_test_2'),
			),
		),
	)
);
