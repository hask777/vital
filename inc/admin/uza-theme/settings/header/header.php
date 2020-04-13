<?php

// add_settings_field : $id, $title, $callback, $page, $section, $args

require 'settings/bgc.php';
require 'settings/text.php';
require 'settings/logo.php';
require 'settings/dropdown.php';
require 'settings/button.php';
require 'settings/mobile.php';

add_settings_section('uza-header-section', __('Секция Шапки', 'uza'), 'uza_header_section_callback',
    'uza_header_page');
