<?php

/**
 * Redux Framework button set config.
 * For full documentation, please visit: http://devs.redux.io/
 *
 * @package Redux Framework
 */

defined('ABSPATH') || exit;

Redux::set_section(
	$opt_name,
	array(
		'title'      => esc_html__('Button Set', 'ITDS_Agency_test_2'),
		'id'         => 'switch_buttonset-set',
		'desc'       => esc_html__('For full documentation on this field, visit: ', 'ITDS_Agency_test_2') . '<a href="https://devs.redux.io/core-fields/button-set.html" target="_blank">https://devs.redux.io/core-fields/button-set.html</a>',
		'subsection' => true,
		'fields'     => array(
			array(
				'id'       => 'opt-button-set',
				'type'     => 'button_set',
				'title'    => esc_html__('Button Set Option', 'ITDS_Agency_test_2'),
				'subtitle' => esc_html__('No validation can be done on this field type', 'ITDS_Agency_test_2'),
				'desc'     => esc_html__('This is the description field, again good for additional info.', 'ITDS_Agency_test_2'),

				// Must provide key => value pairs for radio options.
				'options'  => array(
					'1' => 'Opt 1',
					'2' => 'Opt 2',
					'3' => 'Opt 3',
				),
				'default'  => '2',
			),
			array(
				'id'       => 'opt-button-set-multi',
				'type'     => 'button_set',
				'title'    => esc_html__('Button Set, Multi Select', 'ITDS_Agency_test_2'),
				'subtitle' => esc_html__('No validation can be done on this field type', 'ITDS_Agency_test_2'),
				'desc'     => esc_html__('This is the description field, again good for additional info.', 'ITDS_Agency_test_2'),
				'multi'    => true,

				// Must provide key => value pairs for radio options.
				'options'  => array(
					'1' => 'Opt 1',
					'2' => 'Opt 2',
					'3' => 'Opt 3',
				),
				'default'  => array('2', '3'),
			),
		),
	)
);
