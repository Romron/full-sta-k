<?php

/**
 * Redux Framework date config.
 * For full documentation, please visit: http://devs.redux.io/
 *
 * @package Redux Framework
 */

defined('ABSPATH') || exit;

Redux::set_section(
	$opt_name,
	array(
		'title'      => esc_html__('Date', 'ITDS_Agency_test_2'),
		'id'         => 'additional-date',
		'desc'       => esc_html__('For full documentation on this field, visit: ', 'ITDS_Agency_test_2') . '<a href="https://devs.redux.io/core-fields/date.html" target="_blank">https://devs.redux.io/core-fields/date.html</a>',
		'subsection' => true,
		'fields'     => array(
			array(
				'id'       => 'opt-datepicker',
				'type'     => 'date',
				'title'    => esc_html__('Date Option', 'ITDS_Agency_test_2'),
				'subtitle' => esc_html__('No validation can be done on this field type', 'ITDS_Agency_test_2'),
				'desc'     => esc_html__('This is the description field, again good for additional info.', 'ITDS_Agency_test_2'),
			),
		),
	)
);
