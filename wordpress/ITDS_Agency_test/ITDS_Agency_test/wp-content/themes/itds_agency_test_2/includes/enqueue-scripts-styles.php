<?php




function itds_agency_test_2_scripts()
{
   wp_enqueue_style('itds_agency_test_2-style', get_template_directory_uri() . '/assets/css/style.css', array('itds_agency_test_2-reset'), _S_VERSION);
   wp_enqueue_style('itds_agency_test_2-reset', get_template_directory_uri() . '/assets/css/reset.css', array(), _S_VERSION);

   wp_enqueue_script('itds_agency_test_2-script', get_template_directory_uri() . '/assets/js/script.js', array(), _S_VERSION, true);
   wp_enqueue_script('itds_agency_test_2-customizer', get_template_directory_uri() . '/includes/js/customizer.js', array(), _S_VERSION, true);
   wp_enqueue_script('itds_agency_test_2-customizer', get_template_directory_uri() . '/includes/js/navigation.js', array(), _S_VERSION, true);

   if (is_singular() && comments_open() && get_option('thread_comments')) {
      wp_enqueue_script('comment-reply');
   }
}
add_action('wp_enqueue_scripts', 'itds_agency_test_2_scripts');
