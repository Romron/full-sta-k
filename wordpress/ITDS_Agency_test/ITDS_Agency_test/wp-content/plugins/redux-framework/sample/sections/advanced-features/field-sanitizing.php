<?php

/**
 * Redux Framework field sanitizing config.
 * For full documentation, please visit: http://devs.redux.io/
 *
 * @package Redux Framework
 */

defined('ABSPATH') || exit;

Redux::set_section(
	$opt_name,
	array(
		'title'      => esc_html__('Field Sanitizing', 'ITDS_Agency_test_2'),
		'id'         => 'sanitizing',
		// phpcs:ignore
		// 'desc'       => esc_html__( 'For full documentation on sanitizing, visit: ', 'ITDS_Agency_test_2' ) . '<a href="https://devs.redux.io/configuration/fields/sanitizing/" target="_blank">https://devs.redux.io/configuration/fields/sanitizing/</a>',
		'subsection' => true,
		'fields'     => array(
			array(
				'id'       => 'opt-text-uppercase',
				'type'     => 'text',
				'title'    => esc_html__('Text Option - Force Uppercase', 'ITDS_Agency_test_2'),
				'subtitle' => esc_html__('Uses the strtoupper function to force all uppercase characters.', 'ITDS_Agency_test_2'),
				'desc'     => esc_html__('This is the description field, again good for additional info.', 'ITDS_Agency_test_2'),
				'sanitize' => array('strtoupper'),
				'default'  => 'Force Uppercase',
			),
			array(
				'id'       => 'opt-text-sanitize-title',
				'type'     => 'text',
				'title'    => esc_html__('Text Option - Sanitize Title', 'ITDS_Agency_test_2'),
				'subtitle' => esc_html__('Uses the WordPress sanitize_title function to format text.', 'ITDS_Agency_test_2'),
				'desc'     => esc_html__('This is the description field, again good for additional info.', 'ITDS_Agency_test_2'),
				'sanitize' => array('sanitize_title'),
				'default'  => 'Sanitize This Title',
			),
			array(
				'id'       => 'opt-text-custom-sanitize',
				'type'     => 'text',
				'title'    => esc_html__('Text Option - Custom Sanitize', 'ITDS_Agency_test_2'),
				'subtitle' => esc_html__('Uses the custom function redux_custom_santize to capitalize every other letter.', 'ITDS_Agency_test_2'),
				'desc'     => esc_html__('This is the description field, again good for additional info.', 'ITDS_Agency_test_2'),
				'sanitize' => array('redux_custom_sanitize'),
				'default'  => 'Sanitize This Text',
			),
		),
	)
);
