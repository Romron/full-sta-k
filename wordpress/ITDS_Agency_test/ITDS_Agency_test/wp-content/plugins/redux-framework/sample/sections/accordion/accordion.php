<?php

/**
 * Accordion config.
 *
 * For full documentation, please visit: http:https://devs.redux.io/
 *
 * @package Redux
 */

defined('ABSPATH') || exit;

Redux::set_section(
	$opt_name,
	array(
		'title'      => esc_html__('Accordion', 'ITDS_Agency_test_2'),
		'desc'       => esc_html__('For full documentation on this field, visit: ', 'ITDS_Agency_test_2') . '<a href="https://devs.redux.io/core-extensions/accordion.html" target="_blank">https://devs.redux.io/core-extensions/accordion.html</a>',
		'fields'     => array(
			array(
				'id'       => 'accordion-section-1',
				'type'     => 'accordion',
				'title'    => esc_html__('Accordion Section One', 'ITDS_Agency_test_2'),
				'subtitle' => esc_html__('Section one with subtitle', 'ITDS_Agency_test_2'),
				'position' => 'start',
			),
			array(
				'id'       => 'opt-blank-text-1',
				'type'     => 'text',
				'title'    => esc_html__('Textbox for some noble purpose.', 'ITDS_Agency_test_2'),
				'subtitle' => esc_html__('Frailty, thy name is woman!', 'ITDS_Agency_test_2'),
			),
			array(
				'id'       => 'opt-blank-text-2',
				'type'     => 'switch',
				'title'    => esc_html__('Switch, for some other important task!', 'ITDS_Agency_test_2'),
				'subtitle' => esc_html__('Physician, heal thyself!', 'ITDS_Agency_test_2'),
			),
			array(
				'id'       => 'accordion-section-end-1',
				'type'     => 'accordion',
				'position' => 'end',
			),
			array(
				'id'       => 'accordion-section-2',
				'type'     => 'accordion',
				'title'    => esc_html__('Accordion Section Two (no subtitle)', 'ITDS_Agency_test_2'),
				'position' => 'start',
				'open'     => true,
			),
			array(
				'id'       => 'opt-blank-text-3',
				'type'     => 'text',
				'title'    => esc_html__('Look, another sample textbox.', 'ITDS_Agency_test_2'),
				'subtitle' => esc_html__('The tartness of his face sours ripe grapes.', 'ITDS_Agency_test_2'),
			),
			array(
				'id'       => 'opt-blank-text-4',
				'type'     => 'switch',
				'title'    => esc_html__('Yes, another switch, but you\'re free to use any field you like.', 'ITDS_Agency_test_2'),
				'subtitle' => esc_html__('I scorn you, scurvy companion!', 'ITDS_Agency_test_2'),
			),
			array(
				'id'       => 'accordion-section-end-2',
				'type'     => 'accordion',
				'position' => 'end',
			),
		),
	)
);
