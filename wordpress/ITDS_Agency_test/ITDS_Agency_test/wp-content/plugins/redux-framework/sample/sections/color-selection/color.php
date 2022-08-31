<?php

/**
 * Redux Framework color config.
 * For full documentation, please visit: http://devs.redux.io/
 *
 * @package Redux Framework
 */

defined('ABSPATH') || exit;

Redux::set_section(
	$opt_name,
	array(
		'title'      => esc_html__('Color', 'ITDS_Agency_test_2'),
		'id'         => 'opt-color',
		'desc'       => esc_html__('For full documentation on this field, visit: ', 'ITDS_Agency_test_2') . '<a href="https://devs.redux.io/core-fields/color.html" target="_blank">https://devs.redux.io/core-fields/color.html</a>',
		'subsection' => true,
		'fields'     => array(
			array(
				'id'          => 'opt-color-title',
				'type'        => 'color',
				'output'      => array(
					'color'     => '.site-title, .wp-block-site-title a',
					'important' => true,
				),
				'title'       => esc_html__('Site Title Color', 'ITDS_Agency_test_2'),
				'subtitle'    => esc_html__('Pick a title color for the theme (default: #000).', 'ITDS_Agency_test_2'),
				'default'     => '#000000',
				'color_alpha' => true,
			),
			array(
				'id'       => 'opt-color-footer',
				'type'     => 'color',
				'title'    => esc_html__('Footer Background Color', 'ITDS_Agency_test_2'),
				'subtitle' => esc_html__('Pick a background color for the footer (default: #dd9933).', 'ITDS_Agency_test_2'),
				'default'  => '#dd9933',
				'validate' => 'color',
				'output'   => array(
					'background-color' => '.footer, #site-footer, .site-footer, footer',
				),
			),
		),
	)
);
