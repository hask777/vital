<?php

register_setting('uza-footer-settings-group', 'color_footer_title');
register_setting('uza-footer-settings-group', 'footer_title_size');
register_setting('uza-footer-settings-group', 'footer_title_style');
register_setting('uza-footer-settings-group', 'footer_title_weight');

add_settings_section('uza-footer-section', 'Настройки секции сервисов', 'uza_footer_section_callback', 'uza_footer_page');

    add_settings_field('uza-footer-title-color', 'Заголовки', 'uza_footer_title_color_callback', 'uza_footer_page', 'uza-footer-section');

    add_settings_field('uza-footer-title-size', '', 'uza_footer_title_size_callback', 'uza_footer_page', 'uza-footer-section');

    add_settings_field('uza-footer-title-style', '', 'uza_footer_title_style_callback', 'uza_footer_page', 'uza-footer-section');

    add_settings_field('uza-footer-title-weight', '', 'uza_footer_title_weight_callback', 'uza_footer_page', 'uza-footer-section');
