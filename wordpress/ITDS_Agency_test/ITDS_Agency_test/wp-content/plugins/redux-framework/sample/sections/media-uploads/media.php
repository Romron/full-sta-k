<?php

/**
 * Redux Framework media config.
 * For full documentation, please visit: http://devs.redux.io/
 *
 * @package Redux Framework
 */

defined('ABSPATH') || exit;

Redux::set_section(
	$opt_name,
	array(
		'title'      => esc_html__('Media', 'ITDS_Agency_test_2'),
		'id'         => 'media-media',
		'desc'       => esc_html__('For full documentation on this field, visit: ', 'ITDS_Agency_test_2') . '<a href="https://devs.redux.io/core-fields/media.html" target="_blank">https://devs.redux.io/core-fields/media.html</a>',
		'subsection' => true,
		'fields'     => array(
			array(
				'id'           => 'opt-media',
				'type'         => 'media',
				'url'          => true,
				'title'        => esc_html__('Media w/ URL', 'ITDS_Agency_test_2'),
				'compiler'     => 'true',
				'desc'         => esc_html__('Basic media uploader with disabled URL input field.', 'ITDS_Agency_test_2'),
				'subtitle'     => esc_html__('Upload any media using the WordPress native uploader', 'ITDS_Agency_test_2'),
				'preview_size' => 'full',
			),
			array(
				'id'       => 'media-no-url',
				'type'     => 'media',
				'title'    => esc_html__('Media w/o URL', 'ITDS_Agency_test_2'),
				'desc'     => esc_html__('This represents the minimalistic view. It does not have the preview box or the display URL in an input box. ', 'ITDS_Agency_test_2'),
				'subtitle' => esc_html__('Upload any media using the WordPress native uploader', 'ITDS_Agency_test_2'),
				'url'      => false,
				'preview'  => true,
			),
			array(
				'id'       => 'media-no-preview',
				'type'     => 'media',
				'preview'  => false,
				'title'    => esc_html__('Media No Preview', 'ITDS_Agency_test_2'),
				'desc'     => esc_html__('This represents the minimalistic view. It does not have the preview box or the display URL in an input box. ', 'ITDS_Agency_test_2'),
				'subtitle' => esc_html__('Upload any media using the WordPress native uploader', 'ITDS_Agency_test_2'),
				'hint'     => array(
					'title'   => esc_html__('Test Hint', 'ITDS_Agency_test_2'),
					'content' => wp_kses_post('This is a <b>hint</b> tool-tip for the webFonts field.<br/><br/>Add any HTML based text you like here.'),
				),
			),
			array(
				'id'         => 'opt-random-upload',
				'type'       => 'media',
				'title'      => esc_html__('Upload Anything - Disabled Mode', 'ITDS_Agency_test_2'),
				'full_width' => true,

				// Can be set to false to allow any media type, or can also be set to any mime type.
				'mode'       => false,

				'desc'       => esc_html__('Basic media uploader with disabled URL input field.', 'ITDS_Agency_test_2'),
				'subtitle'   => esc_html__('Upload any media using the WordPress native uploader', 'ITDS_Agency_test_2'),
			),
			array(
				'id'           => 'opt-media-filter',
				'type'         => 'media',
				'url'          => true,
				'title'        => esc_html__('Media w/ URL', 'ITDS_Agency_test_2'),
				'compiler'     => true,
				'desc'         => esc_html__('Basic media uploader with disabled URL input field.', 'ITDS_Agency_test_2'),
				'subtitle'     => esc_html__('Upload any media using the WordPress native uploader', 'ITDS_Agency_test_2'),
				'preview_size' => 'full',
				'default'      => array(
					'url'    => 'https://s.wordpress.org/style/images/codeispoetry.png',
					'filter' => array(
						'grayscale' => array(
							'checked' => true,
							'value'   => 50,
						),
					),
				),
				'preview_size' => 'full',
				'filter'       => array(
					'grayscale'  => true,
					'blur'       => true,
					'sepia'      => true,
					'saturate'   => true,
					'opacity'    => true,
					'brightness' => true,
					'contrast'   => true,
					'hue-rotate' => true,
					'invert'     => true,
				),
				'output'       => array('.header-image img, .site-logo, .wp-block-site-logo'),
			),
			array(
				'id'           => 'media-no-url-filter',
				'type'         => 'media',
				'title'        => esc_html__('Media w/o URL', 'ITDS_Agency_test_2'),
				'desc'         => esc_html__('This represents the minimalistic view. It does not have the preview box or the display URL in an input box. ', 'ITDS_Agency_test_2'),
				'subtitle'     => esc_html__('Upload any media using the WordPress native uploader', 'ITDS_Agency_test_2'),
				'url'          => false,
				'filter'       => array(
					'grayscale' => true,
					'blur'      => true,
				),
				'preview'      => true,
				'preview_size' => 'full',
			),
		),
	)
);
