<?php

register_setting('uza-archive-settings-group', 'color_archive_title');
register_setting('uza-archive-settings-group', 'archive_title_size');
register_setting('uza-archive-settings-group', 'archive_title_style');
register_setting('uza-archive-settings-group', 'archive_title_weight');

    add_settings_field('uza-archive-title-color', '', 'uza_archive_title_color_callback', 'uza_archive_page', 'uza-archive-options-section');

    add_settings_field('uza-archive-title-size', '', 'uza_archive_title_size_callback', 'uza_archive_page', 'uza-archive-options-section');

    add_settings_field('uza-archive-title-style', '', 'uza_archive_title_style_callback', 'uza_archive_page', 'uza-archive-options-section');

    add_settings_field('uza-archive-title-weight', '', 'uza_archive_title_weight_callback', 'uza_archive_page', 'uza-archive-options-section');
