<?php

// Bgc
register_setting('uza-archive-settings-group', 'color_archive_bgc');
register_setting('uza-archive-settings-group', 'archive_bgc_opacity');
register_setting('uza-archive-settings-group', 'archive_image');

    // Background color
    add_settings_field('archive-bgc-field', __('Цвет фона', 'uza'), 'uza_archive_bgc_callback', 'uza_archive_page', 'uza-archive-options-section');
    // Background opacity
    add_settings_field('archive-opacity-bgc-field', __('Цвет фона', 'uza'), 'uza_archive_opacity_bgc_callback', 'uza_archive_page', 'uza-archive-options-section');
    // Background image
    add_settings_field('archive-image-field', __('Изображение фона', 'uza'), 'uza_archive_image_callback', 'uza_archive_page', 'uza-archive-options-section');
