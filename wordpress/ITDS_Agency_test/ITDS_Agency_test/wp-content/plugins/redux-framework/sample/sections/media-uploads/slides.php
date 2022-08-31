<?php

/**
 * Redux Framework slides config.
 * For full documentation, please visit: http://devs.redux.io/
 *
 * @package Redux Framework
 */

defined('ABSPATH') || exit;

Redux::set_section(
	$opt_name,
	array(
		'title'      => esc_html__('Slides', 'ITDS_Agency_test_2'),
		'id'         => 'additional-slides',
		'desc'       => esc_html__('For full documentation on this field, visit: ', 'ITDS_Agency_test_2') . '<a href="https://devs.redux.io/core-fields/slides.html" target="_blank">https://devs.redux.io/core-fields/slides.html</a>',
		'subsection' => true,
		'fields'     => array(
			array(
				'id'          => 'opt-slides',
				'type'        => 'slides',
				'title'       => esc_html__('Slides Options', 'ITDS_Agency_test_2'),
				'subtitle'    => esc_html__('Unlimited slides with drag and drop sortings.', 'ITDS_Agency_test_2'),
				'desc'        => esc_html__('This field will store all slides values into a multidimensional array to use into a foreach loop.', 'ITDS_Agency_test_2'),
				'placeholder' => array(
					'title'       => esc_html__('This is a title', 'ITDS_Agency_test_2'),
					'description' => esc_html__('Description Here', 'ITDS_Agency_test_2'),
					'url'         => esc_html__('Give us a link!', 'ITDS_Agency_test_2'),
				),
			),
		),
	)
);
