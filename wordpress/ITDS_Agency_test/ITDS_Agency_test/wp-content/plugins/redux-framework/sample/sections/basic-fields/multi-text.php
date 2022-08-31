<?php

/**
 * Redux Framework multi text config.
 * For full documentation, please visit: http://devs.redux.io/
 *
 * @package Redux Framework
 */

defined('ABSPATH') || exit;

Redux::set_section(
	$opt_name,
	array(
		'title'      => esc_html__('Multi Text', 'ITDS_Agency_test_2'),
		'id'         => 'basic-multi-text',
		'desc'       => esc_html__('For full documentation on this field, visit: ', 'ITDS_Agency_test_2') . '<a href="https://devs.redux.io/core-fields/multi-text.html" target="_blank">https://devs.redux.io/core-fields/multi-text.html</a>',
		'subsection' => true,
		'fields'     => array(
			array(
				'id'       => 'opt-multitext',
				'type'     => 'multi_text',
				'title'    => esc_html__('Multi Text Option', 'ITDS_Agency_test_2'),
				'subtitle' => esc_html__('Field subtitle', 'ITDS_Agency_test_2'),
				'desc'     => esc_html__('Field Decription', 'ITDS_Agency_test_2'),
			),
		),
	)
);
