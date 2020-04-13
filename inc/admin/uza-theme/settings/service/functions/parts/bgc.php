<?php

function uza_services_bgc_callback(){
   $color_services_bgc = esc_attr(get_option('color_services_bgc'));
   ?>
      <input type="text" name="color_services_bgc" value="<?php echo $color_services_bgc; ?>" placeholder="<?php echo __('Цвет фона ','uza'); ?>">
   <?
}

function uza_services_opacity_bgc_callback(){
    $services_bgc_opacity = esc_attr(get_option('services_bgc_opacity'));
    ?>
        <input type="text" name="services_bgc_opacity" value="<?php echo $services_bgc_opacity; ?>" placeholder="<?php echo __('0.0','uza'); ?>">
    <?
}

function uza_services_image_callback(){
   $services_image = esc_attr(get_option('services_image'));
   ?>
      <input type="button" id="upload-services-img" value="Upload Image">
      <input type="hidden" id="services-input" name="services_image" value="<?php $services_image;
      ?>">

      <div id="services_image_preview" class="blog_image_preview">
         <img src="<?php echo $services_image; ?>" alt="">
      </div>
   <?
}
