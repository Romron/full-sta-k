<?php

/**
 * Redux Framework section config.
 * For full documentation, please visit: http://devs.redux.io/
 *
 * @package Redux Framework
 */

defined('ABSPATH') || exit;

Redux::set_section(
	$opt_name,
	array(
		'title'      => esc_html__('Section', 'ITDS_Agency_test_2'),
		'id'         => 'presentation-section',
		'desc'       => esc_html__('For full documentation on this field, visit: ', 'ITDS_Agency_test_2') . '<a href="https://devs.redux.io/core-fields/section.html" target="_blank">https://devs.redux.io/core-fields/section.html</a>',
		'subsection' => true,
		'fields'     => array(
			array(
				'id'       => 'section-start',
				'type'     => 'section',
				'title'    => esc_html__('Section Example', 'ITDS_Agency_test_2'),
				'subtitle' => esc_html__('With the "section" field you can create indented option sections.', 'ITDS_Agency_test_2'),
				'indent'   => true, // Indent all options below until the next 'section' option is set.
			),
			array(
				'id'       => 'section-test',
				'type'     => 'text',
				'title'    => esc_html__('Field Title', 'ITDS_Agency_test_2'),
				'subtitle' => esc_html__('Field Subtitle', 'ITDS_Agency_test_2'),
			),
			array(
				'id'       => 'section-test-media',
				'type'     => 'media',
				'title'    => esc_html__('Field Title', 'ITDS_Agency_test_2'),
				'subtitle' => esc_html__('Field Subtitle', 'ITDS_Agency_test_2'),
			),
			array(
				'id'     => 'section-end',
				'type'   => 'section',
				'indent' => false, // Indent all options below until the next 'section' option is set.
			),
			array(
				'id'   => 'section-info',
				'type' => 'info',
				'desc' => esc_html__('And now you can add more fields below and outside of the indent.', 'ITDS_Agency_test_2'),
			),
		),
	)
);
