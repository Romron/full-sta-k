<?php

/**
 * Redux Color Palette Sample config.
 *
 * For full documentation, please visit: http:https://devs.redux.io/
 *
 * @package Redux
 */

defined('ABSPATH') || exit;

Redux::set_section(
	$opt_name,
	array(
		'title'      => esc_html__('Color Palette', 'ITDS_Agency_test_2'),
		'desc'       => esc_html__('For full documentation on this field, visit: ', 'ITDS_Agency_test_2') . '<a href="https://devs.redux.io/core-fields/color-palette.html" target="_blank">https://devs.redux.io/core-fields/palette-color.html</a>',
		'id'         => 'color-palette',
		'subsection' => true,
		'fields'     => array(
			array(
				'id'       => 'opt-color-palette-grey',
				'type'     => 'color_palette',
				'title'    => esc_html__('Color Palette Control', 'ITDS_Agency_test_2'),
				'subtitle' => esc_html__('User defined colors with round selectors.', 'ITDS_Agency_test_2'),
				'desc'     => esc_html__('Set the Widget Title color here.', 'ITDS_Agency_test_2'),
				'default'  => '#888888',
				'options'  => array(
					'colors' => array(
						'#000000',
						'#222222',
						'#444444',
						'#666666',
						'#888888',
						'#aaaaaa',
						'#cccccc',
						'#eeeeee',
						'#ffffff',
					),
					'style'  => 'round',
				),
				'output'   => array(
					'color'     => '.widget-title',
					'important' => true,
				),
			),
			array(
				'id'       => 'opt-color-palette-mui-all',
				'type'     => 'color_palette',
				'title'    => esc_html__('Color Palette Control', 'ITDS_Agency_test_2'),
				'subtitle' => esc_html__('All Material Design Colors.', 'ITDS_Agency_test_2'),
				'desc'     => esc_html__('This is the description field, again good for additional info.', 'ITDS_Agency_test_2'),
				'default'  => '#F44336',
				'options'  => array(
					'colors' => Redux_Helpers::get_material_design_colors('all'),
					'size'   => 17,
				),
			),
			array(
				'id'       => 'opt-color-palette-mui-primary',
				'type'     => 'color_palette',
				'title'    => esc_html__('Color Palette Control', 'ITDS_Agency_test_2'),
				'subtitle' => esc_html__('Primary Material Design Colors.', 'ITDS_Agency_test_2'),
				'desc'     => esc_html__('This is the description field, again good for additional info.', 'ITDS_Agency_test_2'),
				'default'  => '#000000',
				'options'  => array(
					'colors'     => Redux_Helpers::get_material_design_colors(),
					'size'       => 25,
					'box-shadow' => true,
					'margin'     => true,
				),
			),
			array(
				'id'       => 'opt-color-palette-mui-red',
				'type'     => 'color_palette',
				'title'    => esc_html__('Color Palette Control', 'ITDS_Agency_test_2'),
				'subtitle' => esc_html__('Red Material Design Colors.', 'ITDS_Agency_test_2'),
				'desc'     => esc_html__('This is the description field, again good for additional info.', 'ITDS_Agency_test_2'),
				'default'  => '#FF1744',
				'options'  => array(
					'colors' => Redux_Helpers::get_material_design_colors('red'),
					'size'   => 25,
				),
			),
			array(
				'id'       => 'opt-color-palette-mui-a100',
				'type'     => 'color_palette',
				'title'    => esc_html__('Color Palette Control', 'ITDS_Agency_test_2'),
				'subtitle' => esc_html__('A100 Material Design Colors.', 'ITDS_Agency_test_2'),
				'desc'     => esc_html__('This is the description field, again good for additional info.', 'ITDS_Agency_test_2'),
				'default'  => '#FF80AB',
				'options'  => array(
					'colors' => Redux_Helpers::get_material_design_colors('A100'),
					'size'   => 60,
					'style'  => 'round',
				),
			),
		),
	)
);
