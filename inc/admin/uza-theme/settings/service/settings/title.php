<?php

register_setting('uza-services-settings-group', 'service_title');
register_setting('uza-services-settings-group', 'color_service_title');
register_setting('uza-services-settings-group', 'service_title_size');
register_setting('uza-services-settings-group', 'service_title_style');
register_setting('uza-services-settings-group', 'service_title_weight');


    add_settings_field('uza-services-title', 'Заголовок', 'uza_services_title_callback', 'uza_services_page', 'uza-services-options-section');

    add_settings_field('uza-services-title-color', '', 'uza_services_title_color_callback', 'uza_services_page', 'uza-services-options-section');

    add_settings_field('uza-services-title-size', '', 'uza_service_title_size_callback', 'uza_services_page', 'uza-services-options-section');

    add_settings_field('uza-services-title-style', '', 'uza_service_title_style_callback', 'uza_services_page', 'uza-services-options-section');

    add_settings_field('uza-services-title-weight', '', 'uza_service_title_weight_callback', 'uza_services_page', 'uza-services-options-section');
