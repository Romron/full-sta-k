<?php

/**
 * ReduxFramework Sample Config File
 * For full documentation, please visit: http://devs.redux.io/
 *
 * @package Redux Framework
 */

defined('ABSPATH') || exit;

if (!class_exists('Redux')) {
   return;
}

// This is your option name where all the Redux data is stored.
$opt_name = 'ITDS_Agency_options';  // YOU MUST CHANGE THIS.  DO NOT USE 'redux_demo' IN YOUR PROJECT!!!

// Uncomment to disable demo mode.
/* Redux::disable_demo(); */  // phpcs:ignore Squiz.PHP.CommentedOutCode

$dir = dirname(__FILE__) . DIRECTORY_SEPARATOR;

/*
 * --> Used within different fields. Simply examples. Search for ACTUAL DECLARATION for field examples
 */

// Background Patterns Reader.
$sample_patterns_path = Redux_Core::$dir . '../sample/patterns/';
$sample_patterns_url  = Redux_Core::$url . '../sample/patterns/';
$sample_patterns      = array();

if (is_dir($sample_patterns_path)) {
   $sample_patterns_dir = opendir($sample_patterns_path);

   if ($sample_patterns_dir) {

      // phpcs:ignore WordPress.CodeAnalysis.AssignmentInCondition
      while (false !== ($sample_patterns_file = readdir($sample_patterns_dir))) {
         if (stristr($sample_patterns_file, '.png') !== false || stristr($sample_patterns_file, '.jpg') !== false) {
            $name              = explode('.', $sample_patterns_file);
            $name              = str_replace('.' . end($name), '', $sample_patterns_file);
            $sample_patterns[] = array(
               'alt' => $name,
               'img' => $sample_patterns_url . $sample_patterns_file,
            );
         }
      }
   }
}

// Used to except HTML tags in description arguments where esc_html would remove.
$kses_exceptions = array(
   'a'      => array(
      'href' => array(),
   ),
   'strong' => array(),
   'br'     => array(),
   'code'   => array(),
);

/*
 * ---> BEGIN ARGUMENTS
 */

/**
 * All the possible arguments for Redux.
 * For full documentation on arguments, please refer to: https://devs.redux.io/core/arguments/
 */
$theme = wp_get_theme(); // For use with some settings. Not necessary.

// TYPICAL -> Change these values as you need/desire.
$args = array(
   // Здесь ваши данные хранятся в базе данных, а также становятся именем вашей глобальной переменной..
   'opt_name'                  => $opt_name,

   // Name that appears at the top of your panel.
   'display_name'              => $theme->get('Name'),

   // Version that appears at the top of your panel.
   'display_version'           => $theme->get('Version'),

   // Specify if the admin menu should appear or not. Options: menu or submenu (Under appearance only).
   'menu_type'                 => 'menu',

   // Show the sections below the admin menu item or not.
   'allow_sub_menu'            => false,

   // The text to appear in the admin menu.
   'menu_title'                => esc_html__('Расширенные настройки', 'ITDS_Agency_test_2'),

   // The text to appear on the page title.
   'page_title'                => esc_html__('Расширенные настройки', 'ITDS_Agency_test_2'),

   // Disable to create your own Google fonts loader.
   'disable_google_fonts_link' => false,

   // Show the panel pages on the admin bar.
   'admin_bar'                 => true,

   // Icon for the admin bar menu.
   'admin_bar_icon'            => 'dashicons-portfolio',

   // Priority for the admin bar menu.
   'admin_bar_priority'        => 50,

   // Sets a different name for your global variable other than the opt_name.
   'global_variable'           => $opt_name,

   // Show the time the page took to load, etc. (forced on while on localhost or when WP_DEBUG is enabled).
   'dev_mode'                  => false,

   // Enable basic customizer support.
   'customizer'                => true,

   // Allow the panel to open expanded.
   'open_expanded'             => false,

   // Disable the save warning when a user changes a field.
   'disable_save_warn'         => false,

   // Order where the menu appears in the admin area. If there is any conflict, something will not show. Warning.
   'page_priority'             => 90,

   // For a full list of options, visit: http://codex.wordpress.org/Function_Reference/add_submenu_page#Parameters.
   'page_parent'               => 'themes.php',

   // Permissions needed to access the options panel.
   'page_permissions'          => 'manage_options',

   // Specify a custom URL to an icon.
   'menu_icon'                 => '',

   // Force your panel to always open to a specific tab (by id).
   'last_tab'                  => '',

   // Icon displayed in the admin panel next to your menu_title.
   'page_icon'                 => 'icon-themes',

   // Page slug used to denote the panel, will be based off page title, then menu title, then opt_name if not provided.
   'page_slug'                 => $opt_name,

   // On load save the defaults to DB before user clicks save.
   'save_defaults'             => true,

   // Display the default value next to each field when not set to the default value.
   'default_show'              => false,

   // What to print by the field's title if the value shown is default.
   'default_mark'              => '*',

   // Shows the Import/Export panel when not used as a field.
   'show_import_export'        => false,

   // The time transients will expire when the 'database' arg is set.
   'transient_time'            => 60 * MINUTE_IN_SECONDS,

   // Global shut-off for dynamic CSS output by the framework. Will also disable google fonts output.
   'output'                    => true,

   // Allows dynamic CSS to be generated for customizer and google fonts,
   // but stops the dynamic CSS from going to the page head.
   'output_tag'                => true,

   // Disable the footer credit of Redux. Please leave if you can help it.
   'footer_credit'             => '',

   // If you prefer not to use the CDN for ACE Editor.
   // You may download the Redux Vendor Support plugin to run locally or embed it in your code.
   'use_cdn'                   => true,

   // Set the theme of the option panel.  Use 'wp' to use a more modern style, default is classic.
   'admin_theme'               => 'wp',

   // Enable or disable flyout menus when hovering over a menu with submenus.
   'flyout_submenus'           => true,

   // Mode to display fonts (auto|block|swap|fallback|optional)
   // See: https://developer.mozilla.org/en-US/docs/Web/CSS/@font-face/font-display.
   'font_display'              => 'swap',

   // HINTS.
   'hints'                     => array(
      'icon'          => 'el el-question-sign',
      'icon_position' => 'right',
      'icon_color'    => 'lightgray',
      'icon_size'     => 'normal',
      'tip_style'     => array(
         'color'   => 'red',
         'shadow'  => true,
         'rounded' => false,
         'style'   => '',
      ),
      'tip_position'  => array(
         'my' => 'top left',
         'at' => 'bottom right',
      ),
      'tip_effect'    => array(
         'show' => array(
            'effect'   => 'slide',
            'duration' => '500',
            'event'    => 'mouseover',
         ),
         'hide' => array(
            'effect'   => 'slide',
            'duration' => '500',
            'event'    => 'click mouseleave',
         ),
      ),
   ),

   // FUTURE -> Not in use yet, but reserved or partially implemented. Use at your own risk.
   // possible: options, theme_mods, theme_mods_expanded, transient. Not fully functional, warning!
   'database'                  => '',
   'network_admin'             => true,
   'search'                    => true,
);


// SOCIAL ICONS -> Setup custom links in the footer for quick links in your panel footer icons.
// PLEASE CHANGE THEME BEFORE RELEASING YOUR PRODUCT!!
// If these are left unchanged, they will not display in your panel!
$args['share_icons'][] = array(
   'url'   => '//github.com/ReduxFramework/ReduxFramework',
   'title' => 'Visit us on GitHub',
   'icon'  => 'el el-github',
);
$args['share_icons'][] = array(
   'url'   => '//www.facebook.com/pages/Redux-Framework/243141545850368',
   'title' => 'Like us on Facebook',
   'icon'  => 'el el-facebook',
);
$args['share_icons'][] = array(
   'url'   => '//twitter.com/reduxframework',
   'title' => 'Follow us on Twitter',
   'icon'  => 'el el-twitter',
);
$args['share_icons'][] = array(
   'url'   => '//www.linkedin.com/company/redux-framework',
   'title' => 'Find us on LinkedIn',
   'icon'  => 'el el-linkedin',
);

Redux::set_args($opt_name, $args);     //! если эту строку удалить то возникает ошибка: " Извините, вам не разрешено просматривать эту страницу. " 
/*
 * ---> END ARGUMENTS
 */

/*
 * ---> START SECTIONS
 */
// -> START Basic Fields

Redux::set_section(
   $opt_name,
   array(
      'title'            => esc_html__('Социальные сети', 'ITDS_Agency_test_2'),
      'id'               => 'social_networks',
      'desc'             => esc_html__('Адреса страниц в соц. сетях', 'ITDS_Agency_test_2'),
      'customizer_width' => '400px',
      'icon'             => 'el el-network',
      'fields'           => array(
         array(
            'id'       => 'social_networks_fb-link',
            'type'     => 'text',
            'title'    => esc_html__('Ссылка на страницу в Facebook', 'ITDS_Agency_test_2'),
            'default'  => '',
         ),
         array(
            'id'       => 'social_networks_Inst-link',
            'type'     => 'text',
            'title'    => esc_html__('Ссылка на страницу в Instagram', 'ITDS_Agency_test_2'),
            'default'  => '',
         ),
      ),
   )

);

Redux::set_section(
   $opt_name,
   array(
      'title'            => esc_html__('Контакты', 'ITDS_Agency_test_2'),
      'id'               => 'Contacts',
      'desc'             => esc_html__('Адреса страниц в соц. сетях', 'ITDS_Agency_test_2'),
      'customizer_width' => '400px',
      'icon'             => 'el el-tasks',
      'fields'           => array(
         array(
            'id'       => 'contact_fone-number',
            'type'     => 'text',
            'title'    => esc_html__('Контактный номер телефона', 'ITDS_Agency_test_2'),
            'default'  => '',
         ),
         array(
            'id'       => 'contact_viber-number',
            'type'     => 'text',
            'title'    => esc_html__('Контактный номер в viber', 'ITDS_Agency_test_2'),
            'default'  => '',
         ),
         array(
            'id'       => 'contact_email',
            'type'     => 'text',
            'title'    => esc_html__('Адрес электронной почты', 'ITDS_Agency_test_2'),
            'default'  => '',
         ),
         array(
            'id'       => 'contact_map-link',
            'type'     => 'text',
            'title'    => esc_html__('Ссылка на карту', 'ITDS_Agency_test_2'),
            'default'  => '',
         ),
      ),
   )

);

Redux::set_section(
   $opt_name,
   array(
      'title'            => esc_html__('Интро', 'ITDS_Agency_test_2'),
      'id'               => 'intro',
      'desc'             => esc_html__('Адреса страниц в соц. сетях', 'ITDS_Agency_test_2'),
      'customizer_width' => '400px',
      'icon'             => 'el el-graph-alt',
      'fields'           => array(
         array(
            'id'           => 'intro_foto',
            'type'         => 'media',
            'url'          => true,
            'title'        => esc_html__('Изображение', 'ITDS_Agency_test_2'),
            'compiler'     => 'true',
            'preview_size' => 'full',
         ),
         array(
            'id'       => 'intro_block-1__title',
            'type'     => 'text',
            'title'    => esc_html__('Заголовок первого блока', 'ITDS_Agency_test_2'),
            'default'  => '',
         ),
         array(
            'id'       => 'intro_block-1__text',
            'type'     => 'text',
            'title'    => esc_html__('текст первого блока', 'ITDS_Agency_test_2'),
            'default'  => '',
         ),
         array(
            'id'       => 'intro_block-2__title',
            'type'     => 'text',
            'title'    => esc_html__('Заголовок второго блока', 'ITDS_Agency_test_2'),
            'default'  => '',
         ),
         array(
            'id'       => 'intro_block-2__text',
            'type'     => 'text',
            'title'    => esc_html__('текст втрого блока', 'ITDS_Agency_test_2'),
            'default'  => '',
         ),
         array(
            'id'       => 'intro_block-3__title',
            'type'     => 'text',
            'title'    => esc_html__('Заголовок третьего блока', 'ITDS_Agency_test_2'),
            'default'  => '',
         ),
         array(
            'id'       => 'intro_block-3__text',
            'type'     => 'text',
            'title'    => esc_html__('текст третьего блока', 'ITDS_Agency_test_2'),
            'default'  => '',
         ),
         array(
            'id'       => 'intro_block-4__title',
            'type'     => 'text',
            'title'    => esc_html__('Заголовок четвёртого блока', 'ITDS_Agency_test_2'),
            'default'  => '',
         ),
         array(
            'id'       => 'intro_block-4__text',
            'type'     => 'text',
            'title'    => esc_html__('текст четвёртого блока', 'ITDS_Agency_test_2'),
            'default'  => '',
         ),
      ),
   )

);
