<?php

/**
 * Redux Framework sortable config.
 * For full documentation, please visit: http://devs.redux.io/
 *
 * @package Redux Framework
 */

defined('ABSPATH') || exit;

Redux::set_section(
	$opt_name,
	array(
		'title'      => esc_html__('Sortable', 'ITDS_Agency_test_2'),
		'id'         => 'basic-sortable',
		'subsection' => true,
		'desc'       => esc_html__('For full documentation on this field, visit: ', 'ITDS_Agency_test_2') . '<a href="https://devs.redux.io/core-fields/sortable.html" target="_blank">https://devs.redux.io/core-fields/sortable.html</a>',
		'fields'     => array(
			array(
				'id'       => 'opt-sortable',
				'type'     => 'sortable',
				'title'    => esc_html__('Sortable Text Option', 'ITDS_Agency_test_2'),
				'subtitle' => esc_html__('Define and reorder these however you want.', 'ITDS_Agency_test_2'),
				'desc'     => esc_html__('This is the description field, again good for additional info.', 'ITDS_Agency_test_2'),
				'label'    => true,
				'options'  => array(
					'Text One'   => 'Item 1',
					'Text Two'   => 'Item 2',
					'Text Three' => 'Item 3',
				),
			),
			array(
				'id'       => 'opt-check-sortable',
				'type'     => 'sortable',
				'mode'     => 'toggle', // toggle or text.
				'title'    => esc_html__('Sortable Toggle Option', 'ITDS_Agency_test_2'),
				'subtitle' => esc_html__('Define and reorder these however you want.', 'ITDS_Agency_test_2'),
				'desc'     => esc_html__('This is the description field, again good for additional info.', 'ITDS_Agency_test_2'),
				'options'  => array(
					'cb1' => 'Option One',
					'cb2' => 'Option Two',
					'cb3' => 'Option Three',
				),
				'default'  => array(
					'cb1' => false,
					'cb2' => true,
					'cb3' => false,
				),
			),
		),
	)
);
