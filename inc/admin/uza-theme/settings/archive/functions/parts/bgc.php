<?php

function uza_archive_bgc_callback(){
   $color_archive_bgc = esc_attr(get_option('color_archive_bgc'));
   ?>
      <input type="text" name="color_archive_bgc" value="<?php echo $color_archive_bgc; ?>" placeholder="<?php echo __('Цвет фона ','uza'); ?>">
   <?
}

function uza_archive_opacity_bgc_callback(){
    $archive_bgc_opacity = esc_attr(get_option('archive_bgc_opacity'));
    ?>
        <input type="text" name="archive_bgc_opacity" value="<?php echo $archive_bgc_opacity; ?>" placeholder="<?php echo __('0.0','uza'); ?>">
    <?
}

function uza_archive_image_callback(){
   $archive_image = esc_attr(get_option('archive_image'));
   ?>
      <input type="button" id="upload-archive-img" value="Upload Image">
      <input type="hidden" id="archive-input" name="archive_image" value="<?php $archive_image;
      ?>">

      <div id="archive_image_preview" class="archive_image_preview">
         <img src="<?php echo $archive_image; ?>" alt="">
      </div>
   <?
}
