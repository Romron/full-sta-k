<?php

/**
 * Redux Pro Widget Areas Sample config.
 *
 * For full documentation, please visit: http:https://devs.redux.io/
 *
 * @package Redux Pro
 */

defined('ABSPATH') || exit;

// --> Below this line not needed. This is just for demonstration purposes.
Redux::set_section(
	$opt_name,
	array(
		'title'      => esc_html__('Widget Areas', 'ITDS_Agency_test_2'),
		// phpcs:ignore
		// 'desc'       => esc_html__( 'For full documentation on this field, visit: ', 'ITDS_Agency_test_2' ) . '<a href="https://devs.redux.io/extensions/widget-areas.html" target="_blank">https://devs.redux.io/extensions/widget-areas.html</a>',
		'subsection' => true,
		'fields'     => array(
			array(
				'id'       => 'widget_areas',
				'type'     => 'info',
				'style'    => 'info',
				'notice'   => true,
				'title'    => esc_html__('Widget Areas is Already Running!', 'ITDS_Agency_test_2'),

				// translators: %1$s: Widget Admin URL.
				'subtitle' => sprintf(esc_html__('To see it in action, head over to your %1$s', 'ITDS_Agency_test_2'), '<a href="' . admin_url('widgets.php') . '">' . esc_html__('Widgets page', 'ITDS_Agency_test_2') . '</a>.'),
			),
		),
	)
);
