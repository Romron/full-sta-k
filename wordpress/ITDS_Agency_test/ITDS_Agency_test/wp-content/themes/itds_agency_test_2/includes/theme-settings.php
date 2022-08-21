<?php
if (!defined('ABSPATH')) {
   exit;
}



function itds_agency_test_2_setup()
{
   load_theme_textdomain('itds_agency_test_2', get_template_directory() . '/languages');
   add_theme_support('automatic-feed-links');
   add_theme_support('title-tag');
   add_theme_support('post-thumbnails');
   add_theme_support(
      'html5',
      array(
         'search-form',
         'comment-form',
         'comment-list',
         'gallery',
         'caption',
         'style',
         'script',
      )
   );

   // Добавлена ​​поддержка тем для выборочного обновления виджетов..
   add_theme_support('customize-selective-refresh-widgets');

   add_theme_support(
      'custom-logo',
      array(
         'height'      => 250,
         'width'       => 250,
         'flex-width'  => true,
         'flex-height' => true,
      )
   );
}
add_action('after_setup_theme', 'itds_agency_test_2_setup');

function ITDS_Agency_test_register_required_plugins()
{
   $plugins = array(

      // This is an example of how to include a plugin bundled with a theme.
      array(
         'name'               => 'IITDS_Agency test core', // The plugin name.
         'slug'               => 'itds_agency_test-core', // The plugin slug (typically the folder name).
         'source'             => get_template_directory() . '/plugins/ITDS-Agency-test-core.zip', // The plugin source.
         'required'           => true, // If false, the plugin is only 'recommended' instead of required.
         'version'            => '1.0', // E.g. 1.0.0. If set, the active plugin must be this version or higher. If the plugin version is higher than the plugin version installed, the user will be notified to update the plugin.
         'force_activation'   => false, // If true, plugin is activated upon theme activation and cannot be deactivated until theme switch.
         'force_deactivation' => false, // If true, plugin is deactivated upon theme switch, useful for theme-specific plugins.
      ),
      array(
         'name'        => 'Gutenberg Template and Pattern Library & Redux Framework',
         'slug'        => 'redux-framework',
         'required'           => true,
      ),
      array(
         'name'        => 'Regenerate Thumbnails',
         'slug'        => 'regenerate-thumbnails',
         'required'    => false,
      ),
   );

   $config = array(
      'id'           => 'ITDS_Agency_test',                 // Unique ID for hashing notices for multiple instances of TGMPA.
      'default_path' => '',                      // Default absolute path to bundled plugins.
      'menu'         => 'tgmpa-install-plugins', // Menu slug.
      'has_notices'  => true,                    // Show admin notices or not.
      'dismissable'  => true,                    // If false, a user cannot dismiss the nag message.
      'dismiss_msg'  => '',                      // If 'dismissable' is false, this message will be output at top of nag.
      'is_automatic' => false,                   // Automatically activate plugins after installation or not.
      'message'      => '',                      // Message to output right before the plugins table.


   );

   tgmpa($plugins, $config);
}
add_action('tgmpa_register', 'ITDS_Agency_test_register_required_plugins');

function itds_agency_test_2_content_width()
{
   $GLOBALS['content_width'] = apply_filters('itds_agency_test_2_content_width', 640);
}
add_action('after_setup_theme', 'itds_agency_test_2_content_width', 0);
