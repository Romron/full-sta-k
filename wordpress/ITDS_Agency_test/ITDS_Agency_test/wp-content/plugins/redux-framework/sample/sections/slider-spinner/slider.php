<?php

/**
 * Redux Framework slider config.
 * For full documentation, please visit: http://devs.redux.io/
 *
 * @package Redux Framework
 */

defined('ABSPATH') || exit;

Redux::set_section(
	$opt_name,
	array(
		'title'      => esc_html__('Slider', 'ITDS_Agency_test_2'),
		'id'         => 'slider_spinner-slider',
		'desc'       => esc_html__('For full documentation on this field, visit: ', 'ITDS_Agency_test_2') . '<a href="https://devs.redux.io/core-fields/slider.html" target="_blank">https://devs.redux.io/core-fields/slider.html</a>',
		'fields'     => array(
			array(
				'id'            => 'opt-slider-label',
				'type'          => 'slider',
				'title'         => esc_html__('Slider Example 1', 'ITDS_Agency_test_2'),
				'subtitle'      => esc_html__('This slider displays the value as a label.', 'ITDS_Agency_test_2'),
				'desc'          => esc_html__('Slider description. Min: 1, max: 500, step: 1, default value: 250', 'ITDS_Agency_test_2'),
				'default'       => 250,
				'min'           => 1,
				'step'          => 1,
				'max'           => 500,
				'display_value' => 'label',
			),
			array(
				'id'            => 'opt-slider-text',
				'type'          => 'slider',
				'title'         => esc_html__('Slider Example 2 with Steps (5)', 'ITDS_Agency_test_2'),
				'subtitle'      => esc_html__('This example displays the value in a text box', 'ITDS_Agency_test_2'),
				'desc'          => esc_html__('Slider description. Min: 0, max: 300, step: 5, default value: 75', 'ITDS_Agency_test_2'),
				'default'       => 75,
				'min'           => 0,
				'step'          => 5,
				'max'           => 300,
				'display_value' => 'text',
			),
			array(
				'id'            => 'opt-slider-select',
				'type'          => 'slider',
				'title'         => esc_html__('Slider Example 3 with two sliders', 'ITDS_Agency_test_2'),
				'subtitle'      => esc_html__('This example displays the values in select boxes', 'ITDS_Agency_test_2'),
				'desc'          => esc_html__('Slider description. Min: 0, max: 500, step: 5, slider 1 default value: 100, slider 2 default value: 300', 'ITDS_Agency_test_2'),
				'default'       => array(
					1 => 100,
					2 => 300,
				),
				'min'           => 0,
				'step'          => 5,
				'max'           => '500',
				'display_value' => 'select',
				'handles'       => 2,
			),
			array(
				'id'            => 'opt-slider-float',
				'type'          => 'slider',
				'title'         => esc_html__('Slider Example 4 with float values', 'ITDS_Agency_test_2'),
				'subtitle'      => esc_html__('This example displays float values', 'ITDS_Agency_test_2'),
				'desc'          => esc_html__('Slider description. Min: 0, max: 1, step: .1, default value: .5', 'ITDS_Agency_test_2'),
				'default'       => .5,
				'min'           => 0,
				'step'          => .1,
				'max'           => 1,
				'resolution'    => 0.1,
				'display_value' => 'text',
			),
		),
		'subsection' => true,
	)
);
