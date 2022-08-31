<?php

/**
 * Redux Framework Sample Metabox Config File
 * For full documentation, please visit: http:https://devs.redux.io/
 * Metabox Lite support the following fields only:  checkbox, radio, text, textarea, media, & color
 * Post Format and Post Template options are not avaialble in Metabox Lite.
 * These advanced options are available in Redux Pro.
 *
 * @package Redux Framework
 */

defined('ABSPATH') || exit;

if (!class_exists('Redux_Metaboxes')) {
	return;
}

Redux_Metaboxes::set_box(
	$opt_name,
	array(
		'id'         => 'opt-metaboxes',
		'title'      => esc_html__('Metabox Options', 'ITDS_Agency_test_2'),
		'post_types' => array('page', 'post'),
		'position'   => 'normal', // normal, advanced, side.
		'priority'   => 'high', // high, core, default, low.
		'sections'   => array(
			array(
				'title'  => esc_html__('Basic Fields', 'ITDS_Agency_test_2'),
				'id'     => 'opt-basic-fields',
				'desc'   => esc_html__('Redux Framework was created with the developer in mind. It allows for any theme developer to have an advanced theme panel with most of the features a developer would need. For more information check out the Github repo at:', 'ITDS_Agency_test_2') . '  <a href="https://github.com/ReduxFramework/Redux-Framework">https://github.com/ReduxFramework/Redux-Framework</a>',
				'icon'   => 'el-icon-cogs',
				'fields' => array(
					array(
						'id'       => 'opt-checkbox',
						'type'     => 'checkbox',
						'title'    => esc_html__('Checkbox', 'ITDS_Agency_test_2'),
						'subtitle' => esc_html__('Basic Checkbox field.', 'ITDS_Agency_test_2'),
						'default'  => true,
					),
					array(
						'id'       => 'opt-radio',
						'type'     => 'radio',
						'title'    => esc_html__('Radio Button', 'ITDS_Agency_test_2'),
						'subtitle' => esc_html__('Basic Radio Button field.', 'ITDS_Agency_test_2'),
						'options'  => array(
							'1' => esc_html__('Option 1', 'ITDS_Agency_test_2'),
							'2' => esc_html__('Option 2', 'ITDS_Agency_test_2'),
							'3' => esc_html__('Option 3', 'ITDS_Agency_test_2'),
						),
						'default'  => '2',
					),
					array(
						'id'       => 'opt-media',
						'type'     => 'media',
						'url'      => true,
						'title'    => esc_html__('Media w/ URL', 'ITDS_Agency_test_2'),
						'compiler' => 'true',
						'desc'     => esc_html__('Basic media uploader with disabled URL input field.', 'ITDS_Agency_test_2'),
						'subtitle' => esc_html__('Upload any media using the WordPress native uploader', 'ITDS_Agency_test_2'),
						'default'  => array('url' => 'http://s.wordpress.org/style/images/codeispoetry.png'),
					),
					array(
						'id'       => 'gallery',
						'type'     => 'gallery',
						'title'    => esc_html__('Add/Edit Gallery', 'ITDS_Agency_test_2'),
						'subtitle' => esc_html__('Create a new Gallery by selecting existing or uploading new images using the WordPress native uploader', 'ITDS_Agency_test_2'),
						'desc'     => esc_html__('This is the description field, again good for additional info.', 'ITDS_Agency_test_2'),
					),
					array(
						'id'      => 'opt-slider',
						'type'    => 'slider',
						'title'   => esc_html__('JQuery UI Slider Example 2 w/ Steps (5)', 'ITDS_Agency_test_2'),
						'desc'    => esc_html__('JQuery UI slider description. Min: 0, max: 300, step: 5, default value: 75', 'ITDS_Agency_test_2'),
						'default' => '0',
						'min'     => '0',
						'step'    => '5',
						'max'     => '300',
					),
					array(
						'id'      => 'opt-spinner',
						'type'    => 'spinner',
						'title'   => esc_html__('JQuery UI Spinner Example 1', 'ITDS_Agency_test_2'),
						'desc'    => esc_html__('JQuery UI spinner description. Min:20, max: 100, step:20, default value: 40', 'ITDS_Agency_test_2'),
						'default' => '40',
						'min'     => '20',
						'step'    => '20',
						'max'     => '100',
					),

					array(
						'id'       => 'switch-on',
						'type'     => 'switch',
						'title'    => esc_html__('Switch On', 'ITDS_Agency_test_2'),
						'subtitle' => esc_html__('Look, it\'s on!', 'ITDS_Agency_test_2'),
						'default'  => 1,
					),
				),
			),

			array(
				'title'      => esc_html__('Text Fields', 'ITDS_Agency_test_2'),
				'desc'       => esc_html__('Redux Framework was created with the developer in mind. It allows for any theme developer to have an advanced theme panel with most of the features a developer would need. For more information check out the Github repo at:', 'ITDS_Agency_test_2') . '  <a href="https://github.com/ReduxFramework/Redux-Framework">https://github.com/ReduxFramework/Redux-Framework</a>',
				'icon'       => 'el-icon-cog',
				'id'         => 'opt-text-fields',
				'subsection' => true,
				'fields'     => array(
					array(
						'title' => esc_html__('Text Field', 'ITDS_Agency_test_2'),
						'id'    => 'opt-text',
						'type'  => 'text',
					),
					array(
						'title' => esc_html__('Textarea Field', 'ITDS_Agency_test_2'),
						'id'    => 'opt-textarea',
						'type'  => 'textarea',
					),
				),
			),

			array(
				'title'  => esc_html__('Color Field', 'ITDS_Agency_test_2'),
				'desc'   => esc_html__('Redux Framework was created with the developer in mind. It allows for any theme developer to have an advanced theme panel with most of the features a developer would need. For more information check out the Github repo at:', 'ITDS_Agency_test_2') . '  <a href="https://github.com/ReduxFramework/Redux-Framework">https://github.com/ReduxFramework/Redux-Framework</a>',
				'icon'   => 'el-icon-pencil',
				'id'     => 'color-section',
				'fields' => array(
					array(
						'id'       => 'opt-color',
						'type'     => 'color',
						'title'    => __('Color Field', 'ITDS_Agency_test_2'),
						'default'  => '#333333',
						'required' => array('opt-layout', '=', 'on'),
					),
				),
			),
			array(
				'title'  => esc_html__('Layout', 'ITDS_Agency_test_2'),
				'desc'   => esc_html__('Redux Framework was created with the developer in mind. It allows for any theme developer to have an advanced theme panel with most of the features a developer would need. For more information check out the Github repo at:', 'ITDS_Agency_test_2') . '  <a href="https://github.com/ReduxFramework/Redux-Framework">https://github.com/ReduxFramework/Redux-Framework</a>',
				'icon'   => 'el-icon-pencil',
				'id'     => 'home-layout',
				'fields' => array(
					array(
						'id'       => 'homepage_blocks',
						'type'     => 'sorter',
						'title'    => 'Homepage Layout Manager',
						'desc'     => 'Organize how you want the layout to appear on the homepage',
						'compiler' => 'true',
						'required' => array('layout', '=', '1'),
						'options'  => array(
							'enabled'  => array(
								'placebo'    => 'placebo',
								'highlights' => 'Highlights',
								'slider'     => 'Slider',
								'staticpage' => 'Static Page',
								'services'   => 'Services',
							),
							'disabled' => array(
								'placebo' => 'placebo',
							),
						),
					),
					array(
						'id'       => 'slides',
						'type'     => 'slides',
						'title'    => esc_html__('Slides Options', 'ITDS_Agency_test_2'),
						'subtitle' => esc_html__('Unlimited slides with drag and drop sortings.', 'ITDS_Agency_test_2'),
						'desc'     => esc_html__('This field will store all slides values into a multidimensional array to use into a foreach loop.', 'ITDS_Agency_test_2'),
					),
				),
			),
		),
	)
);


Redux_Metaboxes::set_box(
	$opt_name,
	array(
		'id'         => 'opt-metaboxes-2',
		'post_types' => array('page', 'post'),
		'position'   => 'side', // normal, advanced, side.
		'priority'   => 'high', // high, core, default, low.
		'sections'   => array(
			array(
				'icon_class' => 'icon-large',
				'icon'       => 'el-icon-home',
				'fields'     => array(
					array(
						'title'   => esc_html__('Cross Box Required', 'ITDS_Agency_test_2'),
						'desc'    => esc_html__('Required arguments work across metaboxes! Click on Color Field under Metabox Options then adjust this field to see the fields within show or hide.', 'ITDS_Agency_test_2'),
						'id'      => 'opt-layout',
						'type'    => 'radio',
						'options' => array(
							'on'  => esc_html__('On', 'ITDS_Agency_test_2'),
							'off' => esc_html__('Off', 'ITDS_Agency_test_2'),
						),
						'default' => 'on',
					),
				),
			),
		),
	)
);

Redux_Metaboxes::set_box(
	$opt_name,
	array(
		'id'         => 'opt-metaboxes-3',
		'post_types' => array('page', 'post'),
		'position'   => 'side', // normal, advanced, side.
		'priority'   => 'high', // high, core, default, low.
		'sections'   => array(
			array(
				'icon_class' => 'icon-large',
				'icon'       => 'el-icon-home',
				'fields'     => array(
					array(
						'id'      => 'sidebar',
						'title'   => esc_html__('Sidebar', 'ITDS_Agency_test_2'),
						'desc'    => esc_html__('Please select the sidebar you would like to display on this page. Note: You must first create the sidebar under Appearance > Widgets.', 'ITDS_Agency_test_2'),
						'type'    => 'select',
						'data'    => 'sidebars',
						'default' => 'None',
					),
				),
			),
		),
	)
);
