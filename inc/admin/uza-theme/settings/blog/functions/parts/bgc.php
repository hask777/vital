<?php

function uza_blog_bgc_callback(){
   $advertis_bgc = esc_attr(get_option('color_blog_bgc'));
   ?>
      <input type="text" name="color_blog_bgc" value="<?php echo $advertis_bgc; ?>" placeholder="<?php echo __('Цвет фона ','uza'); ?>">
   <?
}

function uza_blog_image_callback(){
   $blog_image = esc_attr(get_option('blog_image'));
   ?>
      <input type="button" id="upload-blog-img" value="Upload Image">
      <input type="hidden" id="blog-input" name="blog_image" value="<?php $blog_image;
      ?>">

      <div id="blog_image_preview" class="blog_image_preview">
         <img src="<?php echo $blog_image; ?>" alt="">
      </div>
   <?
}
