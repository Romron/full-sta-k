<?php

/**
 * Redux Framework spinner config.
 * For full documentation, please visit: http://devs.redux.io/
 *
 * @package Redux Framework
 */

defined('ABSPATH') || exit;

Redux::set_section(
	$opt_name,
	array(
		'title'      => esc_html__('Spinner', 'ITDS_Agency_test_2'),
		'id'         => 'slider_spinner-spinner',
		'desc'       => esc_html__('For full documentation on this field, visit: ', 'ITDS_Agency_test_2') . '<a href="https://devs.redux.io/core-fields/spinner.html" target="_blank">https://devs.redux.io/core-fields/spinner.html</a>',
		'subsection' => true,
		'fields'     => array(
			array(
				'id'          => 'opt-spinner',
				'type'        => 'spinner',
				'title'       => esc_html__('JQuery UI Spinner Example 1', 'ITDS_Agency_test_2'),
				'desc'        => esc_html__('JQuery UI spinner description. Min:20, max: 100, step:20, default value: 40', 'ITDS_Agency_test_2'),
				'default'     => '40',
				'min'         => '20',
				'step'        => '20',
				'max'         => '100',
				'suffix'      => '',
				'output_unit' => '',
				'output'      => array('.heck-with-it' => 'max-width'),
			),
		),
	)
);
