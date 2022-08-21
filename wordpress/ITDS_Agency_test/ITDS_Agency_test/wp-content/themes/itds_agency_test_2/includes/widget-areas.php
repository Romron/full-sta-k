<?php



function itds_agency_test_2_widgets_init()
{
   register_sidebar(
      array(
         'name'          => esc_html__('Sidebar', 'itds_agency_test_2'),
         'id'            => 'sidebar-1',
         'description'   => esc_html__('Add widgets here.', 'itds_agency_test_2'),
         'before_widget' => '<section id="%1$s" class="widget %2$s">',
         'after_widget'  => '</section>',
         'before_title'  => '<h2 class="widget-title">',
         'after_title'   => '</h2>',
      )
   );
}
add_action('widgets_init', 'itds_agency_test_2_widgets_init');
