<?php

/**
 * Redux Framework dimensions config.
 * For full documentation, please visit: http://devs.redux.io/
 *
 * @package Redux Framework
 */

defined('ABSPATH') || exit;

Redux::set_section(
	$opt_name,
	array(
		'title'      => esc_html__('Dimensions', 'ITDS_Agency_test_2'),
		'id'         => 'design-dimensions',
		'desc'       => esc_html__('For full documentation on this field, visit: ', 'ITDS_Agency_test_2') . '<a href="https://devs.redux.io/core-fields/dimensions.html" target="_blank">https://devs.redux.io/core-fields/dimensions.html</a>',
		'subsection' => true,
		'fields'     => array(
			array(
				'id'             => 'opt-dimensions',
				'type'           => 'dimensions',
				'units'          => array('em', 'px', '%'), // You can specify a unit value. Possible: px, em, %.
				'units_extended' => 'true', // Allow users to select any type of unit.
				'title'          => esc_html__('Dimensions (Width/Height) Option', 'ITDS_Agency_test_2'),
				'subtitle'       => esc_html__('Allow your users to choose width, height, and/or unit.', 'ITDS_Agency_test_2'),
				'desc'           => esc_html__('You can enable or disable any piece of this field. Width, Height, or Units.', 'ITDS_Agency_test_2'),
				'default'        => array(
					'width'  => 200,
					'height' => 100,
				),
			),
			array(
				'id'             => 'opt-dimensions-width',
				'type'           => 'dimensions',
				'units'          => array('em', 'px', '%'), // You can specify a unit value. Possible: px, em, %.
				'units_extended' => 'true', // Allow users to select any type of unit.
				'title'          => esc_html__('Dimensions (Width) Option', 'ITDS_Agency_test_2'),
				'subtitle'       => esc_html__('Allow your users to choose width, height, and/or unit.', 'ITDS_Agency_test_2'),
				'desc'           => esc_html__('You can enable or disable any piece of this field. Width, Height, or Units.', 'ITDS_Agency_test_2'),
				'height'         => false,
				'default'        => array(
					'width'  => 200,
					'height' => 100,
				),
			),
		),
	)
);
