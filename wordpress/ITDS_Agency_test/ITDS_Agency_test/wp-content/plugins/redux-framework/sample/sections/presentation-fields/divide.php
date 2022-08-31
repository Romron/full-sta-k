<?php

/**
 * Redux Framework divide config.
 * For full documentation, please visit: http://devs.redux.io/
 *
 * @package Redux Framework
 */

defined('ABSPATH') || exit;

Redux::set_section(
	$opt_name,
	array(
		'title'      => esc_html__('Divide', 'ITDS_Agency_test_2'),
		'id'         => 'presentation-divide',
		'desc'       => esc_html__('The spacer to the section menu as seen to the left (after this section block) is the divide "section". Also the divider below is the divide "field".', 'ITDS_Agency_test_2') . '<br />' . __('For full documentation on this field, visit: ', 'ITDS_Agency_test_2') . '<a href="https://devs.redux.io/core-fields/divide.html" target="_blank">https://devs.redux.io/core-fields/divide.html</a>',
		'subsection' => true,
		'fields'     => array(
			array(
				'id'   => 'opt-divide',
				'type' => 'divide',
			),
		),
	)
);
