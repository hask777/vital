<?php

// Bgc
register_setting('uza-services-settings-group', 'color_services_bgc');
register_setting('uza-services-settings-group', 'services_bgc_opacity');
register_setting('uza-services-settings-group', 'services_image');

    // Background color
    add_settings_field('services-bgc-field', __('Цвет фона', 'uza'), 'uza_services_bgc_callback', 'uza_services_page', 'uza-services-options-section');
    // Background opacity
    add_settings_field('services-opacity-bgc-field', __('Цвет фона', 'uza'), 'uza_services_opacity_bgc_callback', 'uza_services_page', 'uza-services-options-section');
    // Background image
    add_settings_field('services-image-field', __('Изображение фона', 'uza'), 'uza_services_image_callback', 'uza_services_page', 'uza-services-options-section');
