<?php
//  Mobile

// item text color
register_setting('uza-header-settings-group', 'color_header_text_mobile');
// item text size
register_setting('uza-header-settings-group', 'header_text_size_mobile');
// item text style
register_setting('uza-header-settings-group', 'header_text_style_mobile');
// item text weight
register_setting('uza-header-settings-group', 'header_text_weight_mobile');

// item bgc
register_setting('uza-header-settings-group', 'color_header_item_mobile');
// item icon

//  Mobile
    add_settings_field('header-text-color-field-mobile', __('Мобильное меню', 'uza'), 'uza_header_text_color_mobile_callback', 'uza_header_page', 'uza-header-section');

    add_settings_field('header-text-size-field-mobile', __('', 'uza'), 'uza_header_text_size_mobile_callback', 'uza_header_page', 'uza-header-section');

    add_settings_field('header-text-style-field-mobile', __('', 'uza'), 'uza_header_text_style_mobile_callback', 'uza_header_page', 'uza-header-section');

    add_settings_field('header-text-weight-field-mobile', __('', 'uza'), 'uza_header_text_weight_mobile_callback', 'uza_header_page', 'uza-header-section');

    add_settings_field('header-item-bgc-mobile', __('', 'uza'), 'uza_header_item_bgc_mobile_callback', 'uza_header_page', 'uza-header-section');
