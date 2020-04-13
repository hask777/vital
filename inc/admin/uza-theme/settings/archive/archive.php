<?php

add_settings_section('uza-archive-options-section', __('Страница категорий', 'uza'), 'uza_archive_section_callback',
'uza_archive_page');

function uza_archive_section_callback(){
    echo 'hi';
}

require 'settings/title.php';
require 'settings/description.php';
require 'settings/bgc.php';
