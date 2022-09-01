<div class="test-php-block">
   <?php

   $page_template_slug = get_page_template_slug(get_the_ID());

   echo "<pre>";
   print_r($page_template_slug);
   echo "</pre>";

   ?>
</div>





<!-- <div class="wrap-about"> -->
<div class="about">
   <div class="about__foto"><img src="<?php echo esc_url(get_template_directory_uri() . '/assets/img/about-foto.png'); ?>" alt="about-foto"></div>

   <div class="about__text">
      <div class="about__title">О магазине</div>
      <div class="about__text-text">
         <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Dolor mattis egestas arcu vitae, habitant elit. Egestas rhoncus, libero tincidunt integer euismod iaculis netus tristique. Quam sed ultricies molestie nullam. Erat non nunc id sed. Cursus lorem mattis sagittis dui ultricies felis erat. Proin bibendum aliquam,
         </p>
         <p>Tincidunt morbi nunc donec congue tincidunt est mi non semper. Id id integer amet sit at lectus turpis at sed. Nulla mauris curabitur diam, in. In dictumst diam id vel fames. Blandit vulputate vel mi nulla. Tempus consectetur donec gravida phasellus. Id justo, volutpat leo pellentesque. Aliquam ut ultricies vel sed. Aliquet quisque aliquam nam amet faucibus. Molestie tincidunt est etiam vitae orci enim, turpis. Mi nullam tincidunt elit ut.
         </p>
         <p>pellentesque purus. Elementum ac blandit odio massa vestibulum, erat pulvinar sed cursus. Aenean eget ullamcorper nisl amet. Nulla tincidunt sagittis, morbi sit rhoncus mattis porttitor ac. Elit ultricies sed tincidunt libero feugiat. Augue nulla purus elit ac, leo, eget.
         </p>
      </div>
   </div>

</div>
<!-- </div> -->