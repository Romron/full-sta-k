<?php

/**
 * Redux Framework required/linking config.
 * For full documentation, please visit: http://devs.redux.io/
 *
 * @package Redux Framework
 */

defined('ABSPATH') || exit;

Redux::set_section(
	$opt_name,
	array(
		'title'      => esc_html__('Field Required / Linking', 'ITDS_Agency_test_2'),
		'id'         => 'required',
		'desc'       => esc_html__('For full documentation on validation, visit: ', 'ITDS_Agency_test_2') . '<a href="https://devs.redux.io/configuration/fields/required.html" target="_blank">https://devs.redux.io/configuration/fields/required.html</a>',
		'subsection' => true,
		'fields'     => array(
			array(
				'id'       => 'opt-required-basic',
				'type'     => 'switch',
				'title'    => esc_html__('Basic Required Example', 'ITDS_Agency_test_2'),
				'subtitle' => wp_kses_post(__('Click <code>On</code> to see the text field appear.', 'ITDS_Agency_test_2')),
				'default'  => false,
			),
			array(
				'id'       => 'opt-required-basic-text',
				'type'     => 'text',
				'title'    => esc_html__('Basic Text Field', 'ITDS_Agency_test_2'),
				'subtitle' => wp_kses_post(__('This text field is only show when the above switch is set to <code>On</code>, using the <code>required</code> argument.', 'ITDS_Agency_test_2')),
				'required' => array('opt-required-basic', '=', true),
			),
			array(
				'id'   => 'opt-required-divide-1',
				'type' => 'divide',
			),
			array(
				'id'       => 'opt-required-nested',
				'type'     => 'switch',
				'title'    => esc_html__('Nested Required Example', 'ITDS_Agency_test_2'),
				'subtitle' => wp_kses_post(__('Click <code>On</code> to see another set of options appear.', 'ITDS_Agency_test_2')),
				'default'  => false,
			),
			array(
				'id'       => 'opt-required-nested-buttonset',
				'type'     => 'button_set',
				'title'    => esc_html__('Multiple Nested Required Examples', 'ITDS_Agency_test_2'),
				'subtitle' => wp_kses_post(__('Click any buton to show different fields based on their <code>required</code> statements.', 'ITDS_Agency_test_2')),
				'options'  => array(
					'button-text'     => esc_html__('Show Text Field', 'ITDS_Agency_test_2'),
					'button-textarea' => esc_html__('Show Textarea Field', 'ITDS_Agency_test_2'),
					'button-editor'   => esc_html__('Show WP Editor', 'ITDS_Agency_test_2'),
					'button-ace'      => esc_html__('Show ACE Editor', 'ITDS_Agency_test_2'),
				),
				'required' => array('opt-required-nested', '=', true),
				'default'  => 'button-text',
			),
			array(
				'id'       => 'opt-required-nested-text',
				'type'     => 'text',
				'title'    => esc_html__('Nested Text Field', 'ITDS_Agency_test_2'),
				'required' => array('opt-required-nested-buttonset', '=', 'button-text'),
			),
			array(
				'id'       => 'opt-required-nested-textarea',
				'type'     => 'textarea',
				'title'    => esc_html__('Nested Textarea Field', 'ITDS_Agency_test_2'),
				'required' => array('opt-required-nested-buttonset', '=', 'button-textarea'),
			),
			array(
				'id'       => 'opt-required-nested-editor',
				'type'     => 'editor',
				'title'    => esc_html__('Nested Editor Field', 'ITDS_Agency_test_2'),
				'required' => array('opt-required-nested-buttonset', '=', 'button-editor'),
			),
			array(
				'id'       => 'opt-required-nested-ace',
				'type'     => 'ace_editor',
				'title'    => esc_html__('Nested ACE Editor Field', 'ITDS_Agency_test_2'),
				'required' => array('opt-required-nested-buttonset', '=', 'button-ace'),
			),
			array(
				'id'   => 'opt-required-divide-2',
				'type' => 'divide',
			),
			array(
				'id'       => 'opt-required-select',
				'type'     => 'select',
				'title'    => esc_html__('Select Required Example', 'ITDS_Agency_test_2'),
				'subtitle' => esc_html__('Select a different option to display its value.  Required may be used to display multiple & reusable fields', 'ITDS_Agency_test_2'),
				'options'  => array(
					'no-sidebar'    => esc_html__('No Sidebars', 'ITDS_Agency_test_2'),
					'left-sidebar'  => esc_html__('Left Sidebar', 'ITDS_Agency_test_2'),
					'right-sidebar' => esc_html__('Right Sidebar', 'ITDS_Agency_test_2'),
					'both-sidebars' => esc_html__('Both Sidebars', 'ITDS_Agency_test_2'),
				),
				'default'  => 'no-sidebar',
				'select2'  => array('allowClear' => false),
			),
			array(
				'id'       => 'opt-required-select-left-sidebar',
				'type'     => 'select',
				'title'    => esc_html__('Select Left Sidebar', 'ITDS_Agency_test_2'),
				'data'     => 'sidebars',
				'default'  => '',
				'required' => array('opt-required-select', '=', array('left-sidebar', 'both-sidebars')),
			),
			array(
				'id'       => 'opt-required-select-right-sidebar',
				'type'     => 'select',
				'title'    => esc_html__('Select Right Sidebar', 'ITDS_Agency_test_2'),
				'data'     => 'sidebars',
				'default'  => '',
				'required' => array('opt-required-select', '=', array('right-sidebar', 'both-sidebars')),
			),
		),
	)
);
