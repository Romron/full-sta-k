<?php

/**
 * Redux Framework WPML integration config.
 * For full documentation, please visit: http://devs.redux.io/
 *
 * @package Redux Framework
 */

defined('ABSPATH') || exit;

Redux::set_section(
	$opt_name,
	array(
		'title'      => esc_html__('WPML Integration', 'ITDS_Agency_test_2'),
		'desc'       => esc_html__('These fields can be fully translated by WPML (WordPress Multi-Language). This serves as an example for you to implement. For extra details look at our WPML Implementation documentation: ', 'ITDS_Agency_test_2') . '<a href="https://devs.redux.io/guides/advanced/wpml-integration.html" target="_blank" >https://devs.redux.io/guides/advanced/wpml-integration.html</a>',
		'subsection' => true,
		'fields'     => array(
			array(
				'id'    => 'wpml-text',
				'type'  => 'textarea',
				'title' => esc_html__('WPML Text', 'ITDS_Agency_test_2'),
				'desc'  => esc_html__('This string can be translated via WPML.', 'ITDS_Agency_test_2'),
			),
			array(
				'id'      => 'wpml-multicheck',
				'type'    => 'checkbox',
				'title'   => esc_html__('WPML Multi Checkbox', 'ITDS_Agency_test_2'),
				'desc'    => esc_html__('You can literally translate the values via key.', 'ITDS_Agency_test_2'),
				'options' => array(
					'1' => esc_html__('Option 1', 'ITDS_Agency_test_2'),
					'2' => esc_html__('Option 2', 'ITDS_Agency_test_2'),
					'3' => esc_html__('Option 3', 'ITDS_Agency_test_2'),
				),
			),
		),
	)
);
