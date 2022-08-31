<?php

/**
 * Redux Framework switch config.
 * For full documentation, please visit: http://devs.redux.io/
 *
 * @package Redux Framework
 */

defined('ABSPATH') || exit;

Redux::set_section(
	$opt_name,
	array(
		'title'      => esc_html__('Switch', 'ITDS_Agency_test_2'),
		'id'         => 'switch_buttonset-switch',
		'desc'       => esc_html__('For full documentation on this field, visit: ', 'ITDS_Agency_test_2') . '<a href="https://devs.redux.io/core-fields/switch.html" target="_blank">https://devs.redux.io/core-fields/switch.html</a>',
		'subsection' => true,
		'fields'     => array(
			array(
				'id'       => 'switch-on',
				'type'     => 'switch',
				'title'    => esc_html__('Switch On', 'ITDS_Agency_test_2'),
				'subtitle' => esc_html__('Look, it\'s on!', 'ITDS_Agency_test_2'),
				'default'  => true,
			),
			array(
				'id'       => 'switch-off',
				'type'     => 'switch',
				'title'    => esc_html__('Switch Off', 'ITDS_Agency_test_2'),
				'subtitle' => esc_html__('Look, it\'s on!', 'ITDS_Agency_test_2'),
				'default'  => false,
			),
			array(
				'id'       => 'switch-parent',
				'type'     => 'switch',
				'title'    => esc_html__('Switch - Nested Children, Enable to show', 'ITDS_Agency_test_2'),
				'subtitle' => esc_html__('Look, it\'s on! Also hidden child elements!', 'ITDS_Agency_test_2'),
				'default'  => false,
				'on'       => 'Enabled',
				'off'      => 'Disabled',
			),
			array(
				'id'       => 'switch-child1',
				'type'     => 'switch',
				'required' => array('switch-parent', '=', true),
				'title'    => esc_html__('Switch - This and the next switch required for patterns to show', 'ITDS_Agency_test_2'),
				'subtitle' => esc_html__('Also called a "fold" parent.', 'ITDS_Agency_test_2'),
				'desc'     => esc_html__('Items set with a fold to this ID will hide unless this is set to the appropriate value.', 'ITDS_Agency_test_2'),
				'default'  => false,
			),
			array(
				'id'       => 'switch-child2',
				'type'     => 'switch',
				'required' => array('switch-parent', '=', true),
				'title'    => esc_html__('Switch2 - Enable the above switch and this one for patterns to show', 'ITDS_Agency_test_2'),
				'subtitle' => esc_html__('Also called a "fold" parent.', 'ITDS_Agency_test_2'),
				'desc'     => esc_html__('Items set with a fold to this ID will hide unless this is set to the appropriate value.', 'ITDS_Agency_test_2'),
				'default'  => false,
			),
		),
	)
);
