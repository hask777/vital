<?php
register_setting('uza-header-settings-group', 'header_bgc_init', 'uza_header_bgc_init_callback');
register_setting('uza-header-settings-group', 'color_header_1');
register_setting('uza-header-settings-group', 'color_header_sticky');
register_setting('uza-header-settings-group', 'header_picture');

    add_settings_field('header-bgc-init-field', __('Вкл прозрачность шапки', 'uza'), 'uza_header_bgc_color_init', 'uza_header_page', 'uza-header-section');

    add_settings_field('header-color-field', __('Настройка цвета шапки', 'uza'), 'uza_header_background_callback', 'uza_header_page', 'uza-header-section');

    add_settings_field('header-color-sticky-field', __('Настройка цвета фиксированной шапки', 'uza'), 'uza_header_sticky_background_callback', 'uza_header_page', 'uza-header-section');

    add_settings_field('header-image-field', __('Установить изображение шапки', 'uza'), 'uza_header_image_callback', 'uza_header_page', 'uza-header-section');
