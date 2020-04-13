<?php

function uza_portfolio_button_text_callback(){
    $portfolio_button_text =  esc_attr(get_option('portfolio_buton_title'));
    // pr($portfolio_title);
    ?>
    <input type="text" name="portfolio_buton_title" value="<?php echo $portfolio_button_text; ?>" placeholder="<?php echo __('Текст кнопки', 'uza'); ?>">
    <?
}
