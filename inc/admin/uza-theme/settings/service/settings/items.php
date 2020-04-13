<?php

register_setting('uza-services-settings-group', 'color_service_item_title');
register_setting('uza-services-settings-group', 'color_hover_service_item_title');
register_setting('uza-services-settings-group', 'service_item_title_size');
register_setting('uza-services-settings-group', 'service_item_title_style');
register_setting('uza-services-settings-group', 'service_item_title_weight');

    add_settings_field('uza-services-item-title-color', 'Настройки единичного сервиса', 'uza_services_items_title_color_callback', 'uza_services_page', 'uza-services-options-section');

    add_settings_field('uza-services-item-title-color-hover', '', 'uza_services_items_title_color_hover_callback', 'uza_services_page', 'uza-services-options-section');

    add_settings_field('uza-services-item-title-size', '', 'uza_services_items_title_size_callback', 'uza_services_page', 'uza-services-options-section');

    add_settings_field('uza-services-item-title-style', '', 'uza_services_items_title_style_callback', 'uza_services_page', 'uza-services-options-section');

    add_settings_field('uza-services-item-title-weight', '', 'uza_services_items_title_weight_callback', 'uza_services_page', 'uza-services-options-section');
