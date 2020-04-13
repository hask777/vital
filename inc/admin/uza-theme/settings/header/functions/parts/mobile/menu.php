<?php

function uza_header_text_color_mobile_callback(){
    $color_header_text_mobile = esc_attr(get_option('color_header_text_mobile'));
    ?>
        <label for="color_header_text_mobile"><?php echo __('Цвет текста  элемента меню', 'uza'); ?></label>
        <input type="text" name="color_header_text_mobile" value="<?php echo $color_header_text_mobile; ?>">
    <?
}

function uza_header_text_size_mobile_callback(){
    $header_text_size_mobile = esc_attr(get_option('header_text_size_mobile'));
    ?>
       <input type="text" name="header_text_size_mobile" value="<?php echo $header_text_size_mobile; ?>" placeholder="<?php echo __('Размер текста в PX', 'uza'); ?>">
    <?
}

function uza_header_text_style_mobile_callback(){
   $header_text_style_mobile = esc_attr(get_option('header_text_style_mobile'));
   ?>
        <label for="$service_title_style">Стиль текста заголовка</label>
        <select class="" name="header_text_style_mobile">
         <option
            value="normal"
            <?php if($header_text_style_mobile == 'normal') echo 'selected'; ?>
            >normal
         </option>
         <option
            value="italic"
            <?php if($header_text_style_mobile == 'italic') echo 'selected'; ?>
            >italic
         </option>
         <option
            value="oblique "
            <?php if($header_text_style_mobile == 'oblique') echo 'selected'; ?>
            >oblique
         </option>
      </select>
   <?
}

function uza_header_text_weight_mobile_callback(){
    $header_text_weight_mobile = esc_attr(get_option('header_text_weight_mobile'));
    ?>
       <select class="" name="header_text_weight_mobile">
          <option value="bold" <?php echo ($header_text_weight_mobile === 'bold' ? 'selected' : ''); ?>>bold</option>
          <option value="normal" <?php echo ($header_text_weight_mobile === 'normal' ? 'selected' : ''); ?>>normal</option>
       </select>
    <?
}

function uza_header_item_bgc_mobile_callback(){
    $color_header_item_mobile = esc_attr(get_option('color_header_item_mobile'));
    ?>
        <label for="color_header_item_mobile"><?php echo __('Цвет заднего фона элемента меню', 'uza'); ?></label>
        <input type="text" name="color_header_item_mobile" value="<?php echo $color_header_item_mobile; ?>">
    <?
}
