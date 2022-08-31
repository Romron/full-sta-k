<?php

/**
 * Redux Framework disable field config.
 * For full documentation, please visit: http://devs.redux.io/
 *
 * @package Redux Framework
 */

defined('ABSPATH') || exit;

Redux::set_section(
	$opt_name,
	array(
		'title'            => esc_html__('Disable Field', 'ITDS_Agency_test_2'),
		'id'               => 'basic-checkbox-disable',
		'subsection'       => true,
		'customizer_width' => '450px',
		'desc'             => esc_html__('For full documentation on this field, visit: ', 'ITDS_Agency_test_2') . '<a href="https://devs.redux.io/core-fields/checkbox.html" target="_blank">https://devs.redux.io/core-fields/checkbox.html</a>',
		'fields'           => array(
			array(
				'id'       => 'opt-checkbox-disable',
				'type'     => 'checkbox',
				'title'    => esc_html__('Checkbox Option', 'ITDS_Agency_test_2'),
				'subtitle' => esc_html__('No validation can be done on this field type', 'ITDS_Agency_test_2'),
				'desc'     => esc_html__('This is the description field, again good for additional info.', 'ITDS_Agency_test_2'),
				'disabled' => true,
				'default'  => '1', // 1 = on | 0 = off.
			),
		),
	)
);
