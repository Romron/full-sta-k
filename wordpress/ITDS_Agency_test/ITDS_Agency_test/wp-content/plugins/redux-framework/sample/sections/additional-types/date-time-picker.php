<?php

/**
 * Redux Pro Date/Time Picker Sample config.
 *
 * For full documentation, please visit: http:https://devs.redux.io/
 *
 * @package Redux Pro
 */

defined('ABSPATH') || exit;

Redux::set_section(
	$opt_name,
	array(
		'title'      => esc_html__('Date / Time Picker', 'ITDS_Agency_test_2'),
		'desc'       => esc_html__('For full documentation on this field, visit: ', 'ITDS_Agency_test_2') . '<a href="https://devs.redux.io/premium/date-time-picker.html" target="_blank">https://devs.redux.io/premium/date-time-picker.html</a>',
		'subsection' => true,
		'fields'     => array(
			array(
				'id'           => 'opt-date-time-single',
				'type'         => 'datetime',
				'title'        => esc_html__('Single Date / Time input', 'ITDS_Agency_test_2'),
				'subtitle'     => esc_html__('Display when the split argument is set to false', 'ITDS_Agency_test_2'),
				'desc'         => 'The separator argument is set to the @ symbol.  Control-type is set to \'slider\'',
				'split'        => false,
				'control-type' => 'slider',
				'separator'    => ' @ ',
			),
			array(
				'id'            => 'opt-date-time-split',
				'type'          => 'datetime',
				'title'         => esc_html__('Split Date / Time input', 'ITDS_Agency_test_2'),
				'subtitle'      => esc_html__('Display when the split argument is set to true.', 'ITDS_Agency_test_2'),
				'desc'          => 'The \'timezone-list\' argument is set to display labels instead of time offsets.',
				'split'         => true,
				'control-type'  => 'slider',
				'timezone-list' => array(
					array(
						'value' => '-300',
						'label' => 'Eastern',
					),
					array(
						'value' => '-360',
						'label' => 'Central',
					),
					array(
						'value' => '-420',
						'label' => 'Mountain',
					),
					array(
						'value' => '-480',
						'label' => 'Pacific',
					),
				),
			),
			array(
				'id'          => 'opt-date-time-date-only',
				'type'        => 'datetime',
				'title'       => esc_html__('Date only input', 'ITDS_Agency_test_2'),
				'subtitle'    => esc_html__('Popup shows only the date picker.', 'ITDS_Agency_test_2'),
				'desc'        => 'The \'time-picker\' argument is set to false.',
				'time-picker' => false,
				'placeholder' => 'Date only',
			),
			array(
				'id'          => 'opt-date-time-time-only',
				'type'        => 'datetime',
				'title'       => esc_html__('Time only input', 'ITDS_Agency_test_2'),
				'subtitle'    => esc_html__('Popup shows only the time picker.', 'ITDS_Agency_test_2'),
				'desc'        => 'The \'date-picker\' argument is set to false.',
				'date-picker' => false,
				'placeholder' => 'Time only',
			),
			array(
				'id'            => 'opt-date-time-minmax',
				'type'          => 'datetime',
				'title'         => esc_html__('Min Max demo', 'ITDS_Agency_test_2'),
				'subtitle'      => esc_html__('Both time and date have min and max values.', 'ITDS_Agency_test_2'),
				'desc'          => 'The selectable date range is 30 days from the current day.  The selectable time range is between 8:20 AM and 4:40 PM',
				'split'         => true,
				'time-format'   => 'hh:mm TT',
				'hour-min'      => 8,
				'hour-max'      => 16,
				'minute-min'    => 20,
				'minute-max'    => 40,
				'num-of-months' => 2,
				'date-min'      => 0,
				'date-max'      => 30,
			),
		),
	)
);
