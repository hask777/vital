<?php

// Bgc
register_setting('uza-footer-settings-group', 'color_footer_bgc');
register_setting('uza-footer-settings-group', 'footer_bgc_opacity');
register_setting('uza-footer-settings-group', 'footer_image');

    // Background color
    add_settings_field('footer-bgc-field', __('Цвет фона', 'uza'), 'uza_footer_bgc_callback', 'uza_footer_page', 'uza-footer-section');
    // Background opacity
    add_settings_field('footer-opacity-bgc-field', __('', 'uza'), 'uza_footer_opacity_bgc_callback', 'uza_footer_page', 'uza-footer-section');
    // Background image
    add_settings_field('footer-image-field', __('Изображение фона', 'uza'), 'uza_footer_image_callback', 'uza_footer_page', 'uza-footer-section');
