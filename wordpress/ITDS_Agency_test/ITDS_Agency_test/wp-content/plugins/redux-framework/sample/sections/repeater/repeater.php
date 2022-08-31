<?php

/**
 * Redux Repeater Sample config.
 *
 * For full documentation, please visit: http:https://devs.redux.io/
 *
 * @package Redux Pro
 */

defined('ABSPATH') || exit;

Redux::set_section(
	$opt_name,
	array(
		'title'  => __('Repeater', 'ITDS_Agency_test_2'),
		'desc'   => esc_html__('For full documentation on this field, visit: ', 'ITDS_Agency_test_2') . '<a href="https://devs.redux.io/premium/repeater.html" target="_blank">https://devs.redux.io/premium/repeater.html</a>',
		'fields' => array(
			array(
				'id'          => 'repeater-field-id',
				'type'        => 'repeater',
				'title'       => esc_html__('Repeater Demo', 'ITDS_Agency_test_2'),
				'full_width'  => true,
				'subtitle'    => esc_html__('Repeater', 'ITDS_Agency_test_2'),
				'item_name'   => '',
				'sortable'    => true,
				'active'      => false,
				'collapsible' => false,
				'fields'      => array(
					array(
						'id'          => 'title_field',
						'type'        => 'text',
						'placeholder' => esc_html__('Title', 'ITDS_Agency_test_2'),
					),
					array(
						'id'          => 'textarea_field',
						'type'        => 'textarea',
						'placeholder' => esc_html__('Text Field', 'ITDS_Agency_test_2'),
						'default'     => 'Text Field here',
						'title'       => esc_html__('Title', 'your-domain-here'),
					),
					array(
						'id'          => 'select_field',
						'type'        => 'select',
						'multi'       => true,
						'title'       => esc_html__('Select Field', 'ITDS_Agency_test_2'),
						'options'     => array(
							'1' => esc_html__('Option 1', 'ITDS_Agency_test_2'),
							'2' => esc_html__('Option 2', 'ITDS_Agency_test_2'),
							'3' => esc_html__('Option 3', 'ITDS_Agency_test_2'),
						),
						'placeholder' => esc_html__('Listing Field', 'ITDS_Agency_test_2'),
					),
					array(
						'id'          => 'switch_field',
						'type'        => 'switch',
						'placeholder' => esc_html__('Switch Field', 'ITDS_Agency_test_2'),
						'default'     => true,
					),
					array(
						'id'          => 'text_field',
						'title'       => esc_html__('Text Field', 'ITDS_Agency_test_2'),
						'type'        => 'text',
						'placeholder' => esc_html__('Text Field', 'ITDS_Agency_test_2'),
						'required'    => array('switch_field', '=', false),
						'default'     => 'Text Field here',
					),
				),
			),
		),
	)
);
