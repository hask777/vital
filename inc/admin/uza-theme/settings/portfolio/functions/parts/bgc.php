<?php

function uza_portfolio_bgc_callback(){
   $color_portfolio_bgc = esc_attr(get_option('color_portfolio_bgc'));
   ?>
      <input type="text" name="color_portfolio_bgc" value="<?php echo $color_portfolio_bgc; ?>" placeholder="<?php echo __('Цвет фона ','uza'); ?>">
   <?
}

function uza_portfolio_opacity_bgc_callback(){
    $portdolio_bgc_opacity = esc_attr(get_option('portdolio_bgc_opacity'));
    ?>
        <input type="text" name="portdolio_bgc_opacity" value="<?php echo $portdolio_bgc_opacity; ?>" placeholder="<?php echo __('0.0','uza'); ?>">
    <?
}

function uza_portfolio_image_callback(){
   $portfolio_image = esc_attr(get_option('portfolio_image'));
   ?>
      <input type="button" id="upload-portfolio-img" value="Upload Image">
      <input type="hidden" id="portfolio-input" name="portfolio_image" value="<?php $portfolio_image;
      ?>">

      <div id="potfolio_image_preview" class="blog_image_preview">
         <img src="<?php echo $portfolio_image; ?>" alt="">
      </div>
   <?
}
