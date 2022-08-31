<?php

/**
 * Redux Framework select image config.
 * For full documentation, please visit: http://devs.redux.io/
 *
 * @package Redux Framework
 */

defined('ABSPATH') || exit;

Redux::set_section(
	$opt_name,
	array(
		'title'      => esc_html__('Select Image', 'ITDS_Agency_test_2'),
		'id'         => 'select-select_image',
		'desc'       => esc_html__('For full documentation on this field, visit: ', 'ITDS_Agency_test_2') . '<a href="https://devs.redux.io/core-fields/select-image.html" target="_blank">https://devs.redux.io/core-fields/select-image.html</a>',
		'subsection' => true,
		'fields'     => array(
			array(
				'id'      => 'opt-select_image',
				'type'    => 'select_image',
				'presets' => true,
				'title'   => esc_html__('Select Image', 'ITDS_Agency_test_2'),
				'options' => array(
					array(
						'alt'     => 'Preset 1',
						'img'     => Redux_Core::$url . '../sample/presets/preset1.png',
						'presets' => array(
							'switch-on'     => 1,
							'switch-off'    => 1,
							'switch-parent' => 1,
						),
					),
					array(
						'alt'     => 'Preset 2',
						'img'     => Redux_Core::$url . '../sample/presets/preset2.png',
						'presets' => '{"opt-slider-label":"1", "opt-slider-text":"10"}',
					),
				),
				'default' => Redux_Core::$url . '../sample/presets/preset2.png',
			),
			array(
				'id'       => 'opt-select-image',
				'type'     => 'select_image',
				'title'    => esc_html__('Select Image', 'ITDS_Agency_test_2'),
				'subtitle' => esc_html__('A preview of the selected image will appear underneath the select box.', 'ITDS_Agency_test_2'),
				'options'  => $sample_patterns,
				'default'  => Redux_Core::$url . '../sample/patterns/triangular.png',
			),
		),
	)
);
