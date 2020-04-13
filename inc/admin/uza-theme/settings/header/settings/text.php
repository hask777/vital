<?php
// Wide screen
register_setting('uza-header-settings-group', 'color_header_text');
register_setting('uza-header-settings-group', 'header_text_size');
register_setting('uza-header-settings-group', 'header_text_weight');


// Wide screen
    add_settings_field('header-text-color-field', __('Установить цвет текста шапки', 'uza'), 'uza_header_text_color_callback', 'uza_header_page', 'uza-header-section');

    add_settings_field('header-text-size-field', __('Установить размер текста шапки', 'uza'), 'uza_header_size_color_callback', 'uza_header_page', 'uza-header-section');

    add_settings_field('header-text-weight-field', __('Установить размер текста шапки', 'uza'), 'uza_header_text_weight_callback', 'uza_header_page', 'uza-header-section');
