<?php

/**
 * Redux Framework WordPress editor config.
 * For full documentation, please visit: http://devs.redux.io/
 *
 * @package Redux Framework
 */

defined('ABSPATH') || exit;

Redux::set_section(
	$opt_name,
	array(
		'title'      => esc_html__('WordPress Editor', 'ITDS_Agency_test_2'),
		'id'         => 'editor-wordpress',
		'desc'       => esc_html__('For full documentation on this field, visit: ', 'ITDS_Agency_test_2') . '<a href="https://devs.redux.io/core-fields/editor.html" target="_blank">https://devs.redux.io/core-fields/editor.html</a>',
		'subsection' => true,
		'fields'     => array(
			array(
				'id'       => 'opt-editor',
				'type'     => 'editor',
				'title'    => esc_html__('Editor', 'ITDS_Agency_test_2'),
				'subtitle' => esc_html__('Use any of the features of WordPress editor inside your panel!', 'ITDS_Agency_test_2'),
				'default'  => 'Powered by Redux Framework.',
			),
			array(
				'id'      => 'opt-editor-tiny',
				'type'    => 'editor',
				'title'   => esc_html__('Editor w/o Media Button', 'ITDS_Agency_test_2'),
				'default' => 'Powered by Redux Framework.',
				'args'    => array(
					'wpautop'       => false,
					'media_buttons' => false,
					'textarea_rows' => 5,
					'teeny'         => false,
					'quicktags'     => false,
				),
			),
			array(
				'id'         => 'opt-editor-full',
				'type'       => 'editor',
				'title'      => esc_html__('Editor - Full Width', 'ITDS_Agency_test_2'),
				'full_width' => true,
			),
		),
	)
);
