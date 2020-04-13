<?php
// add_settings_field : $id, $title, $callback, $page, $section, $args
require 'settings/title.php';
require 'settings/description.php';
require 'settings/bgc.php';
require 'settings/tabs.php';
require 'settings/button.php';

add_settings_section('uza-portfolio-section', __('Секция портфолио на главной странице', 'uza'), 'uza_portfolio_section_callback', 'uza_portfolio_page');
