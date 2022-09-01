<?php
if (is_home()) {

   echo '<div class="wrap-about">';
} elseif (is_product()) {
   echo '<div class="wrap-about wrap-category-block">';
} elseif (is_shop() || is_product_category()) {
   echo '<div class="wrap-about wrap-category-block">';
}
?>


<div class="about">
   <div class="about__foto"><img src="<?php echo esc_url(get_template_directory_uri() . '/assets/img/about-foto.png'); ?>" alt="about-foto"></div>

   <div class="about__text">
      <?php
      if (is_home()) {

         echo '<div class="about__title">О магазине</div>';
         echo '<div class="about__text-text">';
      } elseif (is_product() || is_shop()) {
         echo '<div class="about__title category-block__title">О магазине</div>';
         echo '<div class="about__text-text category-block__text">';
      }
      // elseif (is_shop()) {
      //    echo '<div class="about__title category-block__title">' . woocommerce_page_title() . '</div>';
      //    echo '<div class="about__text-text category-block__text">';}
      elseif (is_product_category()) {
         echo '<div class="about__title category-block__title">' . woocommerce_page_title() . '</div>';
         echo '<div class="about__text-text category-block__text">';
      }
      ?>

      <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Dolor mattis egestas arcu vitae, habitant elit. Egestas rhoncus, libero tincidunt integer euismod iaculis netus tristique. Quam sed ultricies molestie nullam. Erat non nunc id sed. Cursus lorem mattis sagittis dui ultricies felis erat. Proin bibendum aliquam,
      </p>
      <p>Tincidunt morbi nunc donec congue tincidunt est mi non semper. Id id integer amet sit at lectus turpis at sed. Nulla mauris curabitur diam, in. In dictumst diam id vel fames. Blandit vulputate vel mi nulla. Tempus consectetur donec gravida phasellus. Id justo, volutpat leo pellentesque. Aliquam ut ultricies vel sed. Aliquet quisque aliquam nam amet faucibus. Molestie tincidunt est etiam vitae orci enim, turpis. Mi nullam tincidunt elit ut.
      </p>
      <p>pellentesque purus. Elementum ac blandit odio massa vestibulum, erat pulvinar sed cursus. Aenean eget ullamcorper nisl amet. Nulla tincidunt sagittis, morbi sit rhoncus mattis porttitor ac. Elit ultricies sed tincidunt libero feugiat. Augue nulla purus elit ac, leo, eget.
      </p>
   </div>
</div>

</div>
</div>