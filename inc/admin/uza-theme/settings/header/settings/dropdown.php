<?php

register_setting('uza-header-settings-group', 'color_header_dropdown_bgc');
register_setting('uza-header-settings-group', 'color_header_dropdown_text');

    add_settings_field('header-dropdown-field', __('Установить цвет выподающего меню шапки', 'uza'), 'uza_header_dropdown_callback', 'uza_header_page', 'uza-header-section');

    add_settings_field('header-dropdown-text-field', __('Установить цвет текста выподающего меню шапки', 'uza'), 'uza_header_dropdown_text_callback', 'uza_header_page', 'uza-header-section');
