<?php

/**
 * Redux Pro JS Button Sample config.
 *
 * For full documentation, please visit: http:https://devs.redux.io/
 *
 * @package Redux Pro
 */

defined('ABSPATH') || exit;

Redux::set_section(
	$opt_name,
	array(
		'title'      => esc_html__('JS Button', 'ITDS_Agency_test_2'),
		'desc'       => esc_html__('For full documentation on this field, visit: ', 'ITDS_Agency_test_2') . '<a href="https://devs.redux.io/premium/js-button.html" target="_blank">https://devs.redux.io/premium/js-button.html</a>',
		'fields'     => array(
			array(
				'id'       => 'opt-js-button',
				'type'     => 'js_button',
				'title'    => esc_html__('JS Button', 'ITDS_Agency_test_2'),
				'subtitle' => esc_html__('Run javascript in the options panel from button clicks.', 'ITDS_Agency_test_2'),
				'desc'     => esc_html__('Click the Add Date button to add the current date into the text field below.', 'ITDS_Agency_test_2'),
				'script'   => array(
					'url'       => plugins_url('sample/sections/js-button/js-button.js', REDUX_PLUGIN_FILE),
					'dir'       => dirname(__FILE__) . '/js-button.js',
					'dep'       => array('jquery'),
					'ver'       => time(),
					'in_footer' => true,
				),
				'buttons'  => array(
					array(
						'text'     => esc_html__('Add Date', 'ITDS_Agency_test_2'),
						'class'    => 'button-primary',
						'function' => 'redux_add_date',
					),
					array(
						'text'     => esc_html__('Alert', 'ITDS_Agency_test_2'),
						'class'    => 'button-secondary',
						'function' => 'redux_show_alert',
					),

				),
			),
			array(
				'id'       => 'opt-blank-text',
				'type'     => 'text',
				'title'    => esc_html__('Date', 'ITDS_Agency_test_2'),
				'subtitle' => esc_html__('Click the Add Date button above to fill out this field.', 'ITDS_Agency_test_2'),
			),
		),
	)
);
