<?php
global $ITDS_Agency_options;

if (is_home()) {

   echo '<div class="wrap-about">';
} elseif (is_product()) {
   echo '<div class="wrap-about wrap-category-block">';
} elseif (is_shop() || is_product_category()) {
   echo '<div class="wrap-about wrap-category-block">';
}
?>


<div class="about">
   <div class="about__foto"><img src="<?php echo esc_url($ITDS_Agency_options['about_shop_foto']['url']); ?>" alt="about-foto"></div>
   <div class="about__text">
      <?php
      if (is_home()) {
         echo '<div class="about__title">О магазине</div>';
         echo '<div class="about__text-text">';
         echo '<p>' . esc_html_e($ITDS_Agency_options['about_shop_text'], 'ITDS_Agency_test_2') . '</p>';
      } elseif (is_product() || is_shop()) {
         echo '<div class="about__title category-block__title">О магазине</div>';
         echo '<div class="about__text-text category-block__text">';
      } elseif (is_product_category()) {
         echo '<div class="about__title category-block__title">' . esc_html_e(woocommerce_page_title()) . '</div>';
         echo '<div class="about__text-text category-block__text">';
         esc_html_e(the_archive_description());
      }
      ?>
   </div>
</div>

</div>
</div>