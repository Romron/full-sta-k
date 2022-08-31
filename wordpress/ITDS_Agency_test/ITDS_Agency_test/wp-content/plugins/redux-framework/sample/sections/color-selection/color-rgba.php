<?php

/**
 * Redux Framework color RGBA config.
 * For full documentation, please visit: http://devs.redux.io/
 *
 * @package Redux Framework
 */

defined('ABSPATH') || exit;

Redux::set_section(
	$opt_name,
	array(
		'title'      => esc_html__('Color RGBA', 'ITDS_Agency_test_2'),
		'desc'       => esc_html__('For full documentation on this field, visit: ', 'ITDS_Agency_test_2') . '<a href="https://devs.redux.io/core-fields/color-rgba.html" target="_blank">https://devs.redux.io/core-fields/color-rgba.html</a>',
		'id'         => 'color-rgba',
		'subsection' => true,
		'fields'     => array(
			array(
				'id'       => 'opt-color-rgba',
				'type'     => 'color_rgba',
				'title'    => esc_html__('Color RGBA', 'ITDS_Agency_test_2'),
				'subtitle' => esc_html__('Gives you the RGBA color.', 'ITDS_Agency_test_2'),
				'default'  => array(
					'color' => '#7e33dd',
					'alpha' => '.8',
				),
				'output'   => array(
					'color' => '.posted-on, .wp-block-post-date a',
					'important' => true,
				),
			),
		),
	)
);
