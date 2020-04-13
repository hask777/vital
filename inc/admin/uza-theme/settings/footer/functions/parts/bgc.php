<?php

function uza_footer_bgc_callback(){
   $color_footer_bgc = esc_attr(get_option('color_footer_bgc'));
   ?>
      <input type="text" name="color_footer_bgc" value="<?php echo $color_footer_bgc; ?>" placeholder="<?php echo __('Цвет фона ','uza'); ?>">
   <?
}

function uza_footer_opacity_bgc_callback(){
    $footer_bgc_opacity = esc_attr(get_option('footer_bgc_opacity'));
    ?>
        <input type="text" name="footer_bgc_opacity" value="<?php echo $footer_bgc_opacity; ?>" placeholder="<?php echo __('0.0','uza'); ?>">
    <?
}

function uza_footer_image_callback(){
   $footer_image = esc_attr(get_option('footer_image'));
   ?>
      <input type="button" id="upload-footer-img" value="Upload Image">
      <input type="hidden" id="footer-input" name="footer_image" value="<?php $footer_image;
      ?>">

      <div id="footer_image_preview" class="blog_image_preview">
         <img src="<?php echo $footer_image; ?>" alt="">
      </div>
   <?
}
