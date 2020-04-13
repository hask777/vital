<?php

register_setting('uza-header-settings-group', 'header_button_trigger',
'uza_header_button_init_callback');

add_settings_field('header-button-field', __('Показывать кнопку в меню', 'uza'), 'uza_header_button_callback', 'uza_header_page', 'uza-header-section');
