<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?>

<section id="slider_wrapper" class="slider_wrapper full_page_photo">
     <div id="main_flexslider" class="flexslider">
          <ul class="slides">
               <?php foreach ($slider_img as $img) : ?>
				  <li class="item" style="background-image: url(<?php echo base_url($img); ?>)">
               <?php endforeach ?>
          </ul>
     </div>
</section>
