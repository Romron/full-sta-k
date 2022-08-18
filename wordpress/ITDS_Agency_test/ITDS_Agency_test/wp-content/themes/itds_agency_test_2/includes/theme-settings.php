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

function itds_agency_test_2_content_width()
{
   $GLOBALS['content_width'] = apply_filters('itds_agency_test_2_content_width', 640);
}
add_action('after_setup_theme', 'itds_agency_test_2_content_width', 0);
