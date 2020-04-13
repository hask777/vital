<?php

register_setting('uza-header-settings-group', 'color_header_logo');
register_setting('uza-header-settings-group', 'header_logo_size');

add_settings_field('header-logo-color-field', __('Установить цвет Логотипа шапки', 'uza'), 'uza_header_logo_color_callback', 'uza_header_page', 'uza-header-section');

add_settings_field('header-logo-size-field', __('Установить размер Логотипа шапки', 'uza'), 'uza_header_logo_size_callback', 'uza_header_page', 'uza-header-section');
